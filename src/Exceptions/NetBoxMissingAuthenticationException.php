<?php

namespace Cis\NetBox\Exceptions;

use Exception;
use Throwable;

class NetBoxMissingAuthenticationException extends Exception
{
    public function __construct(
        string $message = "",
        int $code = 0,
        Throwable|null $previous = null
    )
    {
        parent::__construct($message, $code, $previous);
        if ($this->message === '') {
            $this->message = 'Missing NetBox Authentication. Please provider a token.';
        }

    }
}