<?php

namespace UnitTests;

use Mockery;
use PHPUnit\Framework\TestCase as BaseTest;
use Statscore\Client;
use Statscore\Service\ApiService;
use Symfony\Component\Serializer\Serializer;

abstract class TestCase extends BaseTest
{
    /**
     * @var Client
     */
    protected $client;

    /**
     * @var Serializer
     */
    protected $serializer;

    /**
     * @var \GuzzleHttp\Client|Mockery\MockInterface
     */
    protected $guzzle;

    /**
     * @var ApiService
     */
    protected $service;

    public function setUp(): void
    {
        parent::setUp();

        $this->serializer = \Statscore\Service\Serializer::get();
        $this->guzzle = Mockery::mock(\GuzzleHttp\Client::class);
        $this->service = new ApiService($this->guzzle, $this->serializer);
    }
}
