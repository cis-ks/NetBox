<?php


namespace Cis\NetBox;

use Cis\NetBox\Api\NetBoxCircuits;
use Cis\NetBox\Api\NetBoxCore;
use Cis\NetBox\Api\NetBoxDcim;
use Cis\NetBox\Api\NetBoxExtras;
use Cis\NetBox\Api\NetBoxIpam;
use Cis\NetBox\Api\NetBoxStatus;
use Cis\NetBox\Api\NetBoxTenancy;
use Cis\NetBox\Api\NetBoxUsers;
use Cis\NetBox\Api\NetBoxVirtualization;
use Cis\NetBox\Api\NetBoxVpn;
use Cis\NetBox\Api\NetBoxWireless;
use Cis\NetBox\Exceptions\NetBoxMissingAuthenticationException;
use Cis\NetBox\Exceptions\NetBoxUrlValidationException;
use GraphQL\Query;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Utils;
use GuzzleHttp\RedirectMiddleware;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Message\ResponseInterface;
use RuntimeException;

class NetBoxApi
{
    protected Client $client;
    private bool $error = false;
    private string $lastError = '';

    /**
     * @throws NetBoxMissingAuthenticationException
     * @throws NetBoxUrlValidationException
     */
    public function __construct(
        protected string|null   $baseUrl = null,
        protected string|null   $apiToken = null,
        protected readonly bool $verifySsl = true,
    ) {
        if ($this->apiToken === null) {
            $this->apiToken = getenv('NETBOX_API_TOKEN', true) ?: null;

            if ($this->apiToken === null) {
                throw new NetBoxMissingAuthenticationException();
            }
        }

        if ($this->baseUrl === null) {
            $this->baseUrl = getenv('NETBOX_API_URL', true) ?: null;
            if ($this->baseUrl === null) {
                throw new RuntimeException('Could not retrieve NetBox API URL from Environment and it was not passed to the constructor.');
            }
        }

        $this->baseUrl = rtrim(preg_replace('/^((?:(?!api).)*).*/', '$1', $this->baseUrl), '/') . '/';
        if (!filter_var($this->baseUrl, FILTER_VALIDATE_URL)) {
            throw new NetBoxUrlValidationException();
        }

        $this->client = new Client([
            'base_uri' => $this->baseUrl,
            'timeout' => 5,
            'allow_redirects' => array_replace(RedirectMiddleware::$defaultSettings, ['track_redirects' => true]),
            'verify' => $this->verifySsl,
            'headers' => [
                'authorization' => sprintf('Token %s', $this->apiToken),
                'content-type' => 'application/json',
                'accept' => 'application/json; indent=4'
            ]
        ]);
    }

    public function getBaseUrl(): string
    {
        return $this->baseUrl;
    }

    public function getNetBoxVersion(): string|false
    {
        $this->resetError();
        try {
            $version = $this->get('', noResult: true)->getHeader('api-version');

            if ($version === []) {
                return false;
            } else {
                return array_shift($version);
            }
        } catch (GuzzleException $e) {
            $this->error = true;
            $this->lastError = $e->getMessage();
        }

        return false;
    }

    public function hasError(): bool
    {
        return $this->error;
    }

    public function getLastError(): string
    {
        return $this->lastError;
    }

    public function get(string $endpoint, array $parameters = [], bool $noResult = false): ResponseInterface|NetBoxResult|null
    {
        $this->resetError();
        try {
            $response = $this->client->get(sprintf(
                '%s?%s',
                $this->getUrl($endpoint, $parameters),
                http_build_query($parameters)
            ));
            return $noResult ? $response : new NetBoxResult($endpoint, $response);
        } catch (GuzzleException $e) {
            $this->error = true;
            $this->lastError = $e->getMessage();
        }
        return null;
    }

    public function post(string $endpoint, array $parameters = []): NetBoxResult|null
    {
        return $this->requestWithBody('POST', $endpoint, $parameters);
    }

    public function put(string $endpoint, array $parameters = []): NetBoxResult|null
    {
        return $this->requestWithBody('PUT', $endpoint, $parameters);
    }

    public function patch(string $endpoint, array $parameters = []): NetBoxResult|null
    {
        return $this->requestWithBody('PATCH', $endpoint, $parameters);
    }

    public function delete(string $endpoint, array $parameters = []): NetBoxResult|null
    {
        if (array_key_exists('id', $parameters)) {
            $url = $this->getUrl($endpoint, $parameters);
            try {
                return new NetBoxResult($endpoint, $this->client->delete($url));
            } catch (GuzzleException $e) {
                $this->error = true;
                $this->lastError = $e->getMessage();
            }
            return null;
        } else {
            return $this->requestWithBody('DELETE', $endpoint, $parameters);
        }
    }

    public function graphQl(Query|string $query, array $variables = []): NetBoxGraphQlResult|null
    {
        $data = ['query' => (string) $query];
        if (count($variables) > 0) {
            $data['variables'] = $variables;
        }

        $request = (new Request('POST', 'graphql/'))->withBody(
            Utils::streamFor(json_encode($data, JSON_FORCE_OBJECT))
        );

        try {
            /** @noinspection PhpParamsInspection */
            return new NetBoxGraphQlResult($this->client->sendRequest($request));
        } catch (GuzzleException|ClientExceptionInterface $e) {
            $this->error = true;
            $this->lastError = $e->getMessage();
        }

        return null;
    }

    public function circuits(): NetBoxCircuits
    {
        return new NetBoxCircuits($this);
    }

    public function core(): NetBoxCore
    {
        return new NetBoxCore($this);
    }

    public function dcim(): NetBoxDcim
    {
        return new NetBoxDcim($this);
    }

    public function extras(): NetBoxExtras
    {
        return new NetBoxExtras($this);
    }

    public function ipam(): NetBoxIpam
    {
        return new NetBoxIpam($this);
    }

    public function tenancy(): NetBoxTenancy
    {
        return new NetBoxTenancy($this);
    }

    public function users(): NetBoxUsers
    {
        return new NetBoxUsers($this);
    }

    public function virtualization(): NetBoxVirtualization
    {
        return new NetBoxVirtualization($this);
    }

    public function vpn(): NetBoxVpn
    {
        return new NetBoxVpn($this);
    }

    public function wireless(): NetBoxWireless
    {
        return new NetBoxWireless($this);
    }

    private function resetError(): void
    {
        $this->error = false;
        $this->lastError = '';
    }

    private function getUrl(string $endpoint, array &$parameters = []): string
    {
        $url = rtrim(sprintf(
            'api/%s/%s/%s',
            trim($endpoint, '/'),
            array_key_exists('id', $parameters) ? $parameters['id'] : '',
            array_key_exists('id', $parameters) && array_key_exists('submodule', $parameters)
                ? $parameters['submodule']
                : ''
        ), '/') . '/';

        if (array_key_exists('id', $parameters)) {
            unset($parameters['id']);
        }

        if (array_key_exists('submodule', $parameters)) {
            unset($parameters['submodule']);
        }

        return $url;
    }

    private function requestWithBody(string $method, string $endpoint, array $parameters = []): NetBoxResult|null
    {
        $this->resetError();
        try {
            $url = $this->getUrl($endpoint, $parameters);
            $request = new Request($method, $url);
            /** @noinspection PhpParamsInspection */
            $response = $this->client->sendRequest($request->withBody(Utils::streamFor(json_encode($parameters))));
            return new NetBoxResult($endpoint, $response);
        } catch (GuzzleException|ClientExceptionInterface $e) {
            $this->error = true;
            $this->lastError = $e->getMessage();
        }

        return null;
    }
}