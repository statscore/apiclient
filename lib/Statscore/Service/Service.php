<?php

namespace Statscore\Service;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;
use Itav\Component\Serializer\Serializer;
use Itav\Component\Serializer\SerializerException;
use Statscore\Model\Request\RequestDTO;

/**
 * Class Service
 * @package Statscore\Service
 */
class Service
{
    const VERSION = 'v1';

    /**
     * @var Client
     */
    private $client;

    /**
     * @var Serializer
     */
    private $serializer;

    /**
     * @var integer
     */
    private $clientId;

    /**
     * @var string
     */
    private $secretKey;

    /**
     * Service constructor.
     * @param Client $guzzle
     * @param Serializer $serializer
     */
    public function __construct(Client $guzzle, Serializer $serializer)
    {
        $this->client = $guzzle;
        $this->serializer = $serializer;
    }

    /**
     * @return int
     */
    public function getClientId(): int
    {
        return $this->clientId;
    }

    /**
     * @param int $clientId
     * @return Service
     */
    public function setClientId(int $clientId): Service
    {
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * @return string
     */
    public function getSecretKey(): string
    {
        return $this->secretKey;
    }

    /**
     * @param string $secretKey
     * @return Service
     */
    public function setSecretKey(string $secretKey): Service
    {
        $this->secretKey = $secretKey;

        return $this;
    }

    /**
     * @param RequestDTO $requestDTO
     * @return mixed
     * @throws GuzzleException
     * @throws SerializerException
     */
    public function request(RequestDTO $requestDTO)
    {
        $request = $this->client->request(
            $requestDTO->getMethod(),
            $requestDTO->getUri(),
            $this->prepareBody($requestDTO)
        );

        /**
         * @TODO
         */
        return $request->getBody()->getContents();
    }

    /**
     * @param RequestDTO $request
     * @return array
     */
    private function prepareBody(RequestDTO $request): array
    {
        $body = [];
        if ($request->getHeaders()) {
            $body[RequestOptions::HEADERS] = $request->getHeaders();
        }

        if ($request->getBody()) {
            $body[RequestOptions::FORM_PARAMS] = $request->getBody();
        }

        if ($request->getQuery()) {
            $body[RequestOptions::QUERY] = $request->getQuery();
        }

        if ($request->getJson()) {
            $body[RequestOptions::JSON] = $request->getJson();
        }

        return $body;
    }
}