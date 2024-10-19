<?php

namespace Cis\NetBox\Exceptions;

use Exception;
use Throwable;

class NetBoxUrlValidationException extends Exception
{
    public function __construct(
        string $message = "",
        int $code = 0,
        Throwable|null $previous = null
    )
    {
        parent::__construct($message, $code, $previous);
        if ($this->message === '') {
            $this->message = 'Could not validate the given URL.';
        }

    }
}