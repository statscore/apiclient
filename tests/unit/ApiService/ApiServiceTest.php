<?php

namespace UnitTests\ApiService;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Response;
use Statscore\Model\Request\RequestDTO;
use Statscore\Model\Response\Authorization\AuthorizationDTO;
use Statscore\Model\Response\ResponseDTO;
use Statscore\Service\Exception\AuthorizationException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use UnitTests\TestCase;

/**
 * Class ApiServiceTest
 * @package UnitTests\ApiService
 */
class ApiServiceTest extends TestCase
{
    /**
     * @throws AuthorizationException
     * @throws GuzzleException
     * @throws ExceptionInterface
     */
    public function testGetTokenNoClientId(): void
    {
        $this->expectException(AuthorizationException::class);
        $this->expectExceptionMessage(AuthorizationException::ERROR_AUTHORIZATION_CLIENT_ID);
        $this->service->authorize();
    }

    /**
     * @throws AuthorizationException
     * @throws ExceptionInterface
     * @throws GuzzleException
     */
    public function testGetTokenNoSecretKey(): void
    {
        $this->service->setClientId(1);

        $this->expectException(AuthorizationException::class);
        $this->expectExceptionMessage(AuthorizationException::ERROR_AUTHORIZATION_SECRET_KEY);
        $this->service->authorize();
    }

    /**
     * @throws AuthorizationException
     * @throws ExceptionInterface
     * @throws GuzzleException
     */
    public function testGetToken(): void
    {
        $response = file_get_contents(__DIR__ . '/assets/auth.json');

        $response = new Response(HttpFoundationResponse::HTTP_OK, ['Content-Type' => 'application/json'], $response);

        $this->guzzle->shouldReceive('request')->andReturn($response);

        $this->service->setClientId(1);
        $this->service->setSecretKey('dsadsadsadsa');

        $authorizationDTO = $this->service->authorize();

        $this->assertInstanceOf(AuthorizationDTO::class, $authorizationDTO);
        $this->assertEquals('415ab746cee5826dd8e2a64d3a137f56', $authorizationDTO->getToken());
        $this->assertEquals(1, $authorizationDTO->getClientId());
        $this->assertEquals(1563786941, $authorizationDTO->getTokenExpiration());
    }

    /**
     * @throws ExceptionInterface
     * @throws GuzzleException
     */
    public function testRequest(): void
    {
        $this->guzzle->shouldReceive('request')->andReturn(new Response(200, [], '{"test":true}'));

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
