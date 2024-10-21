<?php /** @noinspection PhpUnused */

namespace Cis\NetBox;

use ArrayAccess;
use Countable;
use Iterator;
use Psr\Http\Message\ResponseInterface;
use ReturnTypeWillChange;

class NetBoxResult implements ArrayAccess, Iterator, Countable
{
    private string $body;
    private int $position = 0;
    private object|null $data = null;
    private int $statusCode;

    public function __construct(
        private readonly string            $netBoxEndpoint,
        private readonly ResponseInterface $response,
    ) {
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

    public function get(int $key): object|null
    {
        return $this->offsetGet($key);
    }

    public function last(): object|null
    {
        if (property_exists($this->data, 'results')) {
            return array_slice($this->data->results, -1, 1)[0];
        } else {
            return null;
        }
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
        return trim($this->netBoxEndpoint, '/');
    }

    public function current(): mixed
    {
        if (property_exists($this->data, 'results')) {
            return $this->data->results[$this->position];
        } else {
            return $this->data;
        }
    }

    public function next(): void
    {
        if (property_exists($this->data, 'results')) {
            ++$this->position;
        }
    }

    #[ReturnTypeWillChange]
    public function key(): int
    {
        return $this->position;
    }

    public function valid(): bool
    {
        if (property_exists($this->data, 'results')) {
            return isset($this->data->results[$this->position]);
        } else {
            return is_object($this->data);
        }
    }

    public function rewind(): void
    {
        $this->position = 0;
    }

    public function offsetExists(mixed $offset): bool
    {
        if (property_exists($this->data, 'results')) {
            return isset($this->data->results[$offset]);
        } else {
            return $offset === 0;
        }
    }

    public function offsetGet(mixed $offset): mixed
    {
        if (property_exists($this->data, 'results')) {
            return $this->data->results[$offset];
        } else {
            return $this->data;
        }
    }

    public function offsetSet(mixed $offset, mixed $value): void
    {
        if (property_exists($this->data, 'results')) {
            $this->data->results[$offset] = $value;
        } elseif ($offset === 0 && is_object($value)) {
            $this->data = $value;
        }
    }

    public function offsetUnset(mixed $offset): void
    {
        if (property_exists($this->data, 'results') && isset($this->data->results[$offset])) {
            unset($this->data->results[$offset]);
        }
    }

    public function count(): int
    {
        if (property_exists($this->data, 'count')) {
            return $this->data->count;
        } elseif (is_object($this->data) && !property_exists($this->data, 'error')) {
            return 1;
        }
        return 0;
    }
}