<?php

namespace Statscore\Service;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;
use Itav\Component\Serializer\Serializer;
use Statscore\Model\Request\RequestDTO;
use Statscore\Model\Response\ResponseDTO;
use Statscore\Service\Exception\AuthorizationException;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class Service
 * @package Statscore\Service
 */
class Service
{
    const VERSION = 'v2';

    const URI = 'http://dev.api.statscore.com';

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
     * @param int $clientId
     * @return Service
     */
    public function setClientId(int $clientId): Service
    {
        $this->clientId = $clientId;

        return $this;
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
     * @return ResponseDTO
     * @throws AuthorizationException
     * @throws GuzzleException
     */
    public function getToken(): ResponseDTO
    {
        if (!$this->clientId) {
            throw new AuthorizationException(AuthorizationException::ERROR_AUTHORIZATION_CLIENT_ID);
        }

        if (!$this->secretKey) {
            throw new AuthorizationException(AuthorizationException::ERROR_AUTHORIZATION_SECRET_KEY);
        }

        $request = new RequestDTO();
        $request->setMethod(Request::METHOD_GET);
        $request->setUri('oauth');
        $request->setQuery([
            'client_id' => $this->clientId,
            'secret_key' => $this->secretKey,
        ]);

        return $this->request($request);
    }

    /**
     * @param RequestDTO $requestDTO
     * @return mixed
     * @throws GuzzleException
     */
    public function request(RequestDTO $requestDTO): ResponseDTO
    {
        $request = $this->client->request(
            $requestDTO->getMethod(),
            Service::URI . '/' . Service::VERSION . '/' . $requestDTO->getUri(),
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