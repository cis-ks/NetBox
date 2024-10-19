<?php

namespace Cis\NetBox;

use Psr\Http\Message\ResponseInterface;

class NetBoxResult
{
    private string $body = '';
    private object|null $data = null;
    private int $statusCode = 499;

    public function __construct(
        private string $netboxEndpoint,
        private readonly ResponseInterface $response,
    )
    {
        $this->statusCode = $this->response->getStatusCode();
        $this->body = $this->response->getBody()->getContents();
        if (json_validate($this->body)) {
            $this->data = json_decode($this->body);
        }
    }

    public function getBody(): string
    {
        return $this->body;
    }

    public function getStatusCode(): int
    {
        return $this->statusCode;
    }

    public function getCount(): int
    {
        if (property_exists($this->data, 'count')) {
            return $this->data->count;
        } elseif (is_object($this->data) && !property_exists($this->data, 'error')) {
            return 1;
        }
        return 0;
    }

    public function getResults(): array
    {
        if (property_exists($this->data, 'results')) {
            return $this->data->results;
        } elseif (is_object($this->data) && !property_exists($this->data, 'error')) {
            return [$this->data];
        }
        return [];
    }

    public function first(): object|null
    {
        if (property_exists($this->data, 'results')) {
            return array_slice($this->data->results, 0, 1)[0];
        } elseif (is_object($this->data) && !property_exists($this->data, 'error')) {
            return $this->data;
        }
        return null;
    }

    public function hasError(): bool
    {
        return is_object($this->data) && property_exists($this->data, 'error');
    }

    public function getError(): mixed
    {
        if ($this->hasError()) {
            return $this->data->error;
        } else {
            return null;
        }
    }

    public function getEndpoint(): string
    {
        return trim($this->netboxEndpoint, '/');
    }
}