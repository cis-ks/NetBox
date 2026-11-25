<?php

namespace Cis\NetBox\Exceptions;

use RuntimeException;

class NetBoxMissingUrlException extends RuntimeException
{
    protected $message = 'Could not retrieve NetBox API URL from Environment and it was not passed to the constructor.';
}
