<?php

namespace Statscore\Model\Request;

final class RequestDTO
{
    /**
     * @var array
     */
    private $headers = [];

    /**
     * @var null|array
     */
    private $body;

    /**
     * @var string
     */
    private $method;

    /**
     * @var string
     */
    private $uri;

    /**
     * @var null|string
     */
    private $json;

    /**
     * @var array|null
     */
    private $query;

    /**
     * @return mixed[]
     */
    public function getHeaders(): array
    {
        return $this->headers;
    }

    /**
     * @param array $headers
     * @return RequestDTO
     */
    public function setHeaders(array $headers): RequestDTO
    {
        $this->headers = $headers;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getBody(): ?array
    {
        return $this->body;
    }

    /**
     * @param array|null $body
     * @return RequestDTO
     */
    public function setBody(?array $body): RequestDTO
    {
        $this->body = $body;

        return $this;
    }

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * @param string $method
     * @return RequestDTO
     */
    public function setMethod(string $method): RequestDTO
    {
        $this->method = $method;

        return $this;
    }

    /**
     * @return string
     */
    public function getUri(): string
    {
        return $this->uri;
    }

    /**
     * @param string $uri
     * @return RequestDTO
     */
    public function setUri(string $uri): RequestDTO
    {
        $this->uri = $uri;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getJson(): ?string
    {
        return $this->json;
    }

    /**
     * @param string|null $json
     * @return RequestDTO
     */
    public function setJson(?string $json): RequestDTO
    {
        $this->json = $json;

        return $this;
    }

    /**
     * @return array|null
     */
    public function getQuery(): ?array
    {
        return $this->query;
    }

    /**
     * @param array|null $query
     * @return RequestDTO
     */
    public function setQuery(?array $query): RequestDTO
    {
        $this->query = $query;

        return $this;
    }

    /**
     * @param string $key
     * @param string $value
     * @return RequestDTO
     */
    public function addQuery(string $key, string $value): RequestDTO
    {
        $this->query[$key] = $value;

        return $this;
    }
}
