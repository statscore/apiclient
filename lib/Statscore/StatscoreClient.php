<?php

namespace StatscoreClient;

use GuzzleHttp\Client;
use Statscore\Service\Service;
use Itav\Component\Serializer\Serializer;

/**
 * Class Statscore
 * @package Statscore
 */
class StatscoreClient
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
        $this->service = new Service(new Client([]), $serializer);
    }

}