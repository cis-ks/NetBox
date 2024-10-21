<?php /** @noinspection PhpUnused */

namespace Cis\NetBox\Api;

use BadFunctionCallException;
use Cis\NetBox\NetBoxApi;
use Cis\NetBox\NetBoxResult;

class NetBoxPlugins
{
    public function __construct(
        protected readonly NetBoxApi $api,
        protected string|null $plugin = null,
        protected string $delimiter = '-',
    ) {
    }

    public function __call(string $function, array $parameters): NetBoxResult|NetBoxPlugins|null
    {
        if ($this->plugin === null) {
            $this->plugin = $this->getFormattedPath($function);
            $this->delimiter = array_shift($parameters) ?: '-';
            return $this;
        } elseif (!preg_match('/^([a-z][a-zA-Z]+)(ById?)?(|Create|Patch|Put|Delete)$/', $function, $functionParts)) {
            throw new BadFunctionCallException('Invalid Function Name.');
        }

        $method = $this->getFormattedPath($functionParts[1]);

        return array_key_exists(2, $functionParts)
            ? match ($functionParts[3]) {
                'Create' => $this->byIdCreate($method, ...$parameters),
                'Put' => $this->byIdPut($method, ...$parameters),
                'Patch' => $this->byIdPatch($method, ...$parameters),
                'Delete' => $this->byIdDelete($method, ...$parameters),
                default => $this->byIdGet($method, ...$parameters),
            }
            : match ($functionParts[3]) {
                'Create' => $this->create($method, ...$parameters),
                'Put' => $this->put($method, ...$parameters),
                'Patch' => $this->patch($method, ...$parameters),
                'Delete' => $this->delete($method, ...$parameters),
                default => $this->get($method, ...$parameters),
            };
    }

    protected function getEndpoint(string $method): string
    {
        return sprintf('plugins/%s/%s/', rtrim($this->plugin, '/'), trim($method, '/'));
    }

    protected function getFormattedPath(string $function): string
    {
        return preg_replace_callback(
            '/([a-z])([A-Z])/',
            fn ($m) => sprintf('%s%s%s', $m[1], $this->delimiter, $m[2]),
            $function
        );
    }

    protected function get(string $method, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get($this->getEndpoint($method), $parameters);
    }

    protected function create(string $method, array $parameters = []): NetBoxResult|null
    {
        return $this->api->post($this->getEndpoint($method), $parameters);
    }

    protected function put(string $method, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put($this->getEndpoint($method), $parameters);
    }

    protected function patch(string $method, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch($this->getEndpoint($method), $parameters);
    }

    protected function delete(string $method, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete($this->getEndpoint($method), $parameters);
    }

    protected function byIdGet(string $method, int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->get($this->getEndpoint($method), ['id' => $id, ...$parameters]);
    }

    protected function byIdCreate(string $method, int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->post($this->getEndpoint($method), ['id' => $id, ...$parameters]);
    }

    protected function byIdPut(string $method, int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->put($this->getEndpoint($method), ['id' => $id, ...$parameters]);
    }

    protected function byIdPatch(string $method, int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->patch($this->getEndpoint($method), ['id' => $id, ...$parameters]);
    }

    protected function byIdDelete(string $method, int $id, array $parameters = []): NetBoxResult|null
    {
        return $this->api->delete($this->getEndpoint($method), ['id' => $id, ...$parameters]);
    }

}