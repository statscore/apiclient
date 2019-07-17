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