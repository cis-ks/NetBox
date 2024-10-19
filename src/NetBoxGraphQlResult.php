<?php

namespace Cis\NetBox;

use Psr\Http\Message\ResponseInterface;

class NetBoxGraphQlResult
{
    private string $body = '';
    private object|null $object = null;
    private int $statusCode = 499;
    private bool $error = true;

    public function __construct(
        private readonly ResponseInterface $response,
    )
    {
        $this->statusCode = $this->response->getStatusCode();
        $this->body = $this->response->getBody()->getContents();
        if (json_validate($this->body)) {
            $this->object = json_decode($this->body);
        }

        if (property_exists($this->object, 'error')) {
            $this->error = true;
        }
    }

    public function getBody(): string
    {
        return $this->body;
    }

    public function getData(): object|null
    {
        return is_object($this->object) && property_exists($this->object, 'data') ? $this->object->data : null;
    }

    public function hasError(): bool
    {
        return $this->error;
    }

    public function getError(): object|null
    {
        return is_object($this->object) && property_exists($this->object, 'error') ? $this->object->error : null;
    }

    public function getStatusCode(): int
    {
        return $this->statusCode;
    }
}