<?php

namespace Statscore;

use GuzzleHttp\Client as Guzzle;
use GuzzleHttp\Exception\GuzzleException;
use Itav\Component\Serializer\Serializer;
use Itav\Component\Serializer\SerializerException;
use Statscore\Model\Response\Authorization\AuthorizationDTO;
use Statscore\Service\Area\AreaService;
use Statscore\Service\Exception\AuthorizationException;
use Statscore\Service\ApiService;

/**
 * Class Client
 * @package Statscore
 */
class Client
{
    /**
     * @var ApiService
     */
    private $service;

    /**
     * @var AreaService
     */
    public $area;

    /**
     * Statscore constructor.
     * @param int $clientId
     * @param string $secretKey
     */
    public function __construct(int $clientId, string $secretKey)
    {
        $this->service = new ApiService(new Guzzle([]), new Serializer());
        $this->service->setClientId($clientId);
        $this->service->setSecretKey($secretKey);
        $this->area = new AreaService($this->service);
    }

    /**
     * @return AuthorizationDTO
     * @throws AuthorizationException
     * @throws GuzzleException
     * @throws SerializerException
     */
    public function getToken(): AuthorizationDTO
    {
        return $this->service->getToken();
    }

    /**
     * @param string $token
     * @return Client
     */
    public function setToken(string $token)
    {
        $this->service->setToken($token);

        return $this;
    }
}