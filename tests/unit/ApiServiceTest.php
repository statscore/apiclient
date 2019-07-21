<?php

namespace UnitTests;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Response;
use Itav\Component\Serializer\SerializerException;
use Mockery;
use Statscore\Model\Request\RequestDTO;
use Statscore\Model\Response\Authorization\AuthorizationDTO;
use Statscore\Model\Response\ResponseDTO;
use Statscore\Service\Exception\AuthorizationException;
use Statscore\Service\ApiService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;

/**
 * Class ApiServiceTest
 * @package UnitTests
 */
class ApiServiceTest extends TestCase
{
    /**
     * @var ApiService
     */
    private $service;

    /**
     * @var Client|Mockery\MockInterface
     */
    private $guzzle;

    public function setUp(): void
    {
        parent::setUp();

        $this->guzzle = Mockery::mock(Client::class);

        $this->service = new ApiService($this->guzzle, $this->serializer);
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
        $response = '{"api":{"ver":"2.125","timestamp":1563700541,"method":{"parameters":{"client_id":"1","secret_key":"c0eb3cd79f75b2e75f290ca33cbde138"},"name":"oauth","details":"oauth","total_items":"","previous_page":"","next_page":""},"data":{"client_id":"1","token":"415ab746cee5826dd8e2a64d3a137f56","token_expiration":1563786941}}}';

        $response = new Response(HttpFoundationResponse::HTTP_OK, ['Content-Type' => 'application/json'], $response);

        $this->guzzle->shouldReceive('request')->andReturn($response);

        $this->service->setClientId(1);
        $this->service->setSecretKey('dsadsadsadsa');

        $authorizationDTO = $this->service->getToken();

        $this->assertInstanceOf(AuthorizationDTO::class, $authorizationDTO);
        $this->assertEquals('415ab746cee5826dd8e2a64d3a137f56', $authorizationDTO->getToken());
        $this->assertEquals(1, $authorizationDTO->getClientId());
        $this->assertEquals(1563786941, $authorizationDTO->getTokenExpiration());
    }

    /**
     * @throws GuzzleException
     * @throws SerializerException
     */
    public function testRequest()
    {
        $this->guzzle->shouldReceive('request')->andReturn(new Response());

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