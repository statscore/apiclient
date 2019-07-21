<?php

namespace UnitTests;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Response;
use Itav\Component\Serializer\Serializer;
use Itav\Component\Serializer\SerializerException;
use Mockery;
use Statscore\Model\Request\RequestDTO;
use Statscore\Model\Response\ResponseDTO;
use Statscore\Service\Exception\AuthorizationException;
use Statscore\Service\Service;
use Symfony\Component\HttpFoundation\Request;

class ServiceTest extends TestCase
{
    /**
     * @var Service
     */
    private $service;

    /**
     * @var Client|Mockery\MockInterface
     */
    private $guzzle;

    /**
     * @var Serializer|Mockery\MockInterface
     */
    private $serializer;

    public function setUp(): void
    {
        parent::setUp();

        $this->guzzle = Mockery::mock(Client::class);
        $this->serializer = Mockery::mock(Serializer::class);

        $this->service = new Service($this->guzzle, $this->serializer);
    }

    /**
     * @throws AuthorizationException
     * @throws GuzzleException
     * @throws SerializerException
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
     * @throws SerializerException
     */
    public function testGetTokenNoSecretKey()
    {
        $this->service->setClientId(1);

        $this->expectException(AuthorizationException::class);
        $this->expectExceptionMessage(AuthorizationException::ERROR_AUTHORIZATION_SECRET_KEY);
        $this->service->getToken();
    }

    /**
     * @throws AuthorizationException
     * @throws GuzzleException
     * @throws SerializerException
     */
    public function testGetToken()
    {
        $this->guzzle->shouldReceive('request')->andReturn(new Response());
        $this->serializer->shouldReceive('denormalize')->andReturn(new ResponseDTO());

        $this->service->setClientId(1);
        $this->service->setSecretKey('dsadsadsadsa');

        $this->assertInstanceOf(ResponseDTO::class, $this->service->getToken());
    }

    /**
     * @throws GuzzleException
     * @throws SerializerException
     */
    public function testRequest()
    {
        $this->guzzle->shouldReceive('request')->andReturn(new Response());
        $this->serializer->shouldReceive('denormalize')->andReturn(new ResponseDTO());

        $request = new RequestDTO();
        $request->setQuery(['test' => true]);
        $request->setUri('test');
        $request->setMethod(Request::METHOD_GET);
        $request->setHeaders(['test' => true]);
        $request->setBody(['test' => true]);
        $request->setJson('{"test":true}');

        $this->assertInstanceOf(ResponseDTO::class, $this->service->request($request));
    }

}