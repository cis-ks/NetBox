<?php /** @noinspection PhpUnused */


namespace Cis\NetBox;

use Cis\GqlBuilder\Query;
use Cis\NetBox\Api\NetBoxApiEndpoints;
use Cis\NetBox\Exceptions\NetBoxMissingAuthenticationException;
use Cis\NetBox\Exceptions\NetBoxMissingUrlException;
use Cis\NetBox\Exceptions\NetBoxUrlValidationException;
use Cis\NetBox\Exceptions\NetBoxInvalidV2TokenFormatException;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Utils;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Message\ResponseInterface;

class NetBoxApi
{
    use NetBoxApiEndpoints;

    protected Client $client;
    private bool $error = false;
    private string $lastError = '';
    private int $limit = 50;

    /**
     * @throws NetBoxMissingAuthenticationException
     * @throws NetBoxMissingUrlException
     * @throws NetBoxUrlValidationException
     * @throws NetBoxInvalidV2TokenFormatException
     */
    public function __construct(
        protected string|null   $baseUrl = null,
        protected string|null   $apiToken = null,
        protected readonly bool $verifySsl = true,
    ) {
        $this->validateToken();

        if ($this->baseUrl === null) {
            $this->baseUrl = getenv('NETBOX_API_URL', true) ?: null;
            if ($this->baseUrl === null) {
                throw new NetBoxMissingUrlException();
            }
        }

        $this->baseUrl = rtrim(preg_replace('/^((?:(?!api).)*).*/', '$1', $this->baseUrl), '/') . '/';
        if (!filter_var($this->baseUrl, FILTER_VALIDATE_URL)) {
            throw new NetBoxUrlValidationException();
        }

        $this->client = new Client([
            'base_uri' => $this->baseUrl,
            'timeout' => 5,
            'allow_redirects' => ['track_redirects' => true],
            'verify' => $this->verifySsl,
            'headers' => [
                'authorization' => $this->apiToken,
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
        $version = $this->get('', noResult: true)?->getHeader('api-version');

        if ($version === null || $version === []) {
            return false;
        } else {
            return array_shift($version);
        }
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
                http_build_query($parameters + ['limit' => $this->limit])
            ));
            return $noResult ? $response : new NetBoxResult($endpoint, $response);
        } catch (GuzzleException $e) {
            $this->error = true;
            $this->lastError = $e->getMessage();
            return null;
        }
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

    public function setLimit(int $limit): void
    {
        if ($limit >= 1 && $limit <= 10000) {
            $this->limit = $limit;
        }
    }

    public function resetLimit(): void
    {
        $this->limit = 50;
    }

    public function setUnlimitedResults(): void
    {
        $this->limit = 0;
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

    /**
     * @throws NetBoxMissingAuthenticationException
     * @throws NetBoxInvalidV2TokenFormatException
     */
    private function validateToken(): void
    {
        if ($this->apiToken === null) {
            $this->apiToken = getenv('NETBOX_API_TOKEN', true) ?: null;

            if ($this->apiToken === null) {
                throw new NetBoxMissingAuthenticationException();
            }
        }

        if (str_contains($this->apiToken, ' ')) {
            $token = explode(' ', $this->apiToken)[1];
        } else {
            $token = $this->apiToken;
        }

        if (str_starts_with($token, 'nbt_')) {
            if (!str_contains($token, '.')) {
                throw new NetBoxInvalidV2TokenFormatException();
            }

            $this->apiToken = "Bearer $token";
        } else {
            $this->apiToken = "Token $token";
        }
    }
}
