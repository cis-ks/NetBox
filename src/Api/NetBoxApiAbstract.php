<?php

namespace Cis\NetBox\Api;

use Cis\NetBox\NetBoxApi;

abstract class NetBoxApiAbstract
{
    public function __construct(
        protected readonly NetBoxApi $api,
    ) {
    }
}