<?php

namespace Cis\NetBox\Api;

use Cis\NetBox\NetBoxApi;
use Cis\NetBox\NetBoxResult;

abstract class NetBoxApiAbstract
{
    public function __construct(
        protected readonly NetBoxApi $api,
    ) {
    }

    protected static function isList(array $parameters): bool
    {
        return count($parameters) === count(array_filter($parameters, fn ($p) => is_int($p), ARRAY_FILTER_USE_KEY));
    }

    protected function doCall(string $method, string $endpoint, array $parameters, int|null $id = null, string|null $submodule = null): NetBoxResult|null
    {
        if (static::isList($parameters) && array_key_exists(0, $parameters)) {
            $parameters = $parameters[0];
        }

        if ($submodule !== null) {
            $parameters = ['submodule' => $submodule, ...$parameters];
        }

        if ($id !== null) {
            $parameters = ['id' => $id, ...$parameters];
        }

        return $this->api->$method($endpoint, $parameters);
    }
}