<?php /** @noinspection PhpUnused */

namespace Cis\NetBox\Api;

use Cis\NetBox\NetBoxResult;


class NetBoxAuthenticationCheck extends NetBoxApiAbstract
{
    private const string AUTHENTICATION_CHECK = 'authentication-check/';

    public function authenticationCheck(...$parameters): NetBoxResult|null
    {
        return $this->doCall('get', self::AUTHENTICATION_CHECK, $parameters);
    }
    #endregion authenticationCheck
}
