<?php

namespace UnitTests\Areas;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Response;
use Itav\Component\Serializer\SerializerException;
use Mockery;
use Mockery\MockInterface;
use Statscore\Model\Response\Area\AreaDTO;
use Statscore\Service\ApiService;
use Statscore\Service\Areas\AreasService;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;
use UnitTests\TestCase;

/**
 * Class AreasTest
 * @package UnitTests
 */
class AreasTest extends TestCase
{

    /**
     * @var Client|MockInterface
     */
    private $guzzle;

    /**
     * @var ApiService
     */
    private $service;

    /**
     * @var AreasService
     */
    private $areaService;

    public function setUp(): void
    {
        parent::setUp();
        $this->guzzle = Mockery::mock(Client::class);
        $this->service = new ApiService($this->guzzle, $this->serializer);
        $this->areaService = new AreasService($this->service);
    }

    /**
     * @return AreaDTO
     * @throws GuzzleException
     * @throws SerializerException
     */
    public function testGetAll(): AreaDTO
    {
        $response = file_get_contents(__DIR__ . '/assets/areas.json');

        $response = new Response(HttpFoundationResponse::HTTP_OK, ['Content-Type' => 'application/json'], $response);

        $this->guzzle->shouldReceive('request')->andReturn($response);

        $responseDTO = $this->areaService->getAll();

        $this->assertEquals('areas.index', $responseDTO->getMethod()->getDetails());
        $this->assertEquals('areas.index', $responseDTO->getMethod()->getName());
        $this->assertEmpty($responseDTO->getMethod()->getNextPage());
        $this->assertEmpty($responseDTO->getMethod()->getPreviousPage());
        $this->assertEmpty($responseDTO->getMethod()->getParameters());
        $this->assertEquals(1563734521, $responseDTO->getTimestamp());
        $this->assertEquals('2.125', $responseDTO->getVer());
        $this->assertEquals(2, $responseDTO->getMethod()->getTotalItems());

        $this->assertCount(2, $responseDTO->getData());
        $this->assertInstanceOf(AreaDTO::class, $responseDTO->getData()[0]);

        return $responseDTO->getData()[0];
    }

    /**
     * @param AreaDTO $areaDTO
     * @depends testGetAll
     */
    public function testAreaResponse(AreaDTO $areaDTO): void
    {
        $this->assertEquals(1, $areaDTO->getId());
        $this->assertEquals('AFG', $areaDTO->getAreaCode());
        $this->assertEquals('Afghanistan', $areaDTO->getName());
        $this->assertEquals(210, $areaDTO->getParentAreaId());
        $this->assertEquals(1514992911, $areaDTO->getUt());
    }
}