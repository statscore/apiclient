<?php

namespace Statscore\Service;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;
use Statscore\Model\Request\RequestDTO;
use Statscore\Model\Response\Authorization\AuthorizationDTO;
use Statscore\Model\Response\ResponseDTO;
use Statscore\Service\Exception\AuthorizationException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

/**
 * Class ApiService
 * @package Statscore\ApiService
 */
final class ApiService
{
    private const VERSION = 'v2';

    private const URI = 'http://dev.api.statscore.com';

    /**
     * @var Client
     */
    private $client;

    /**
     * @var \Symfony\Component\Serializer\Serializer
     */
    public $serializer;

    /**
     * @var integer
     */
    private $clientId;

    /**
     * @var string
     */
    private $secretKey;

    /**
     * @var string
     */
    private $token;

    /**
     * ApiService constructor.
     * @param Client $guzzle
     * @param \Symfony\Component\Serializer\Serializer $serializer
     */
    public function __construct(Client $guzzle, \Symfony\Component\Serializer\Serializer $serializer)
    {
        $this->client = $guzzle;
        $this->serializer = $serializer;
    }

    /**
     * @param int $clientId
     * @return ApiService
     */
    public function setClientId(int $clientId): ApiService
    {
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * @param string $secretKey
     * @return ApiService
     */
    public function setSecretKey(string $secretKey): ApiService
    {
        $this->secretKey = $secretKey;

        return $this;
    }

    /**
     * @param string $token
     * @return ApiService
     */
    public function setToken(string $token): ApiService
    {
        $this->token = $token;

        return $this;
    }

    /**
     * @return AuthorizationDTO
     * @throws AuthorizationException
     * @throws GuzzleException
     * @throws ExceptionInterface
     */
    public function getToken(): AuthorizationDTO
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

        $responseDTO = $this->request($request);

        return $this->serializer->denormalize($responseDTO->getData(), AuthorizationDTO::class);
    }

    /**
     * @param RequestDTO $requestDTO
     * @return ResponseDTO
     * @throws ExceptionInterface
     * @throws GuzzleException
     */
    public function request(RequestDTO $requestDTO): ResponseDTO
    {
        $request = $this->client->request(
            $requestDTO->getMethod(),
            self::URI . '/' . self::VERSION . '/' . $requestDTO->getUri(),
            $this->prepareBody($requestDTO)
        );

        $response = $request->getBody()->getContents();
        $response = json_decode($response, true);

        return $this->serializer->denormalize($response['api'] ?? [], ResponseDTO::class, null, [ObjectNormalizer::DISABLE_TYPE_ENFORCEMENT => true]);
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