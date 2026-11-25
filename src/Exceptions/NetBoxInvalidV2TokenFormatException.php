<?php

namespace Cis\NetBox\Exceptions;

use Exception;
use Throwable;

class NetBoxInvalidV2TokenFormatException extends Exception
{
    public function __construct(
        string $message = "",
        int $code = 0,
        Throwable|null $previous = null
    )
    {
        parent::__construct($message, $code, $previous);
        if ($this->message === '') {
            $this->message = 'The format of a given NetBox v2 Token is invalid. It needs to be nbt_<key>.<token>';
        }
    }
}
