<?php

namespace Statscore;

use GuzzleHttp\Client as Guzzle;
use Statscore\Service\Service;
use Itav\Component\Serializer\Serializer;

/**
 * Class Client
 * @package Statscore
 */
class Client
{

    /**
     * @var Service
     */
    private $service;

    /**
     * Statscore constructor.
     */
    public function __construct()
    {
        $serializer = new Serializer();
        $this->service = new Service(new Guzzle([]), $serializer);
    }

    /**
     * @param int $clientId
     * @return Client
     */
    public function setClientId(int $clientId): self
    {
        $this->service->setClientId($clientId);

        return $this;
    }

    /**
     * @param string $secretKey
     * @return Client
     */
    public function setSecretKey(string $secretKey): self
    {
        $this->service->setSecretKey($secretKey);

        return $this;
    }
}