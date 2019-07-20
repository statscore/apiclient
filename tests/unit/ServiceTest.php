<?php

namespace UnitTests;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Itav\Component\Serializer\Serializer;
use Mockery;
use Statscore\Service\Exception\AuthorizationException;
use Statscore\Service\Service;

class ServiceTest extends TestCase
{
    /**
     * @var Service
     */
    private $service;

    public function setUp(): void
    {
        parent::setUp();

        $guzzle = Mockery::mock(Client::class);
        $serializer = Mockery::mock(Serializer::class);

        $this->service = new Service($guzzle, $serializer);
    }

    /**
     * @throws AuthorizationException
     * @throws GuzzleException
     */
    public function testGetTokenNoClientId()
    {
        $this->expectException(AuthorizationException::class);
        $this->expectExceptionMessage(AuthorizationException::ERROR_AUTHORIZATION_CLIENT_ID);
        $this->service->getToken();
    }

    /**
     * @throws AuthorizationException
     * @throws GuzzleException
     */
    public function testGetTokenNoSecretKey()
    {
        $this->service->setClientId(1);

        $this->expectException(AuthorizationException::class);
        $this->expectExceptionMessage(AuthorizationException::ERROR_AUTHORIZATION_SECRET_KEY);
        $this->service->getToken();
    }

}