<?php

namespace UnitTests;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Response;
use Itav\Component\Serializer\SerializerException;
use Mockery;
use Mockery\MockInterface;
use Statscore\Model\Response\Area\AreaDTO;
use Statscore\Service\ApiService;
use Statscore\Service\Area\AreaService;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;

/**
 * Class AreaTest
 * @package UnitTests
 */
class AreaTest extends TestCase
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
     * @var AreaService
     */
    private $areaService;

    public function setUp(): void
    {
        parent::setUp();
        $this->guzzle = Mockery::mock(Client::class);
        $this->service = new ApiService($this->guzzle, $this->serializer);
        $this->areaService = new AreaService($this->service);
    }

    /**
     * @throws GuzzleException
     * @throws SerializerException
     */
    public function testGetAll()
    {
        $response = '{"api":{"ver":"2.125","timestamp":1563734521,"method":{"parameters":[],"name":"areas.index","details":"areas.index","total_items":2,"previous_page":"","next_page":""},"data":{"areas":[{"id":1,"area_code":"AFG","name":"Afghanistan","parent_area_id":"210","ut":1514992911},{"id":2,"area_code":"ALB","name":"Albania","parent_area_id":"209","ut":1514992911}]}}}';

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
    public function testAreaResponse(AreaDTO $areaDTO)
    {
        $this->assertEquals(1, $areaDTO->getId());
        $this->assertEquals('AFG', $areaDTO->getAreaCode());
        $this->assertEquals('Afghanistan', $areaDTO->getName());
        $this->assertEquals(210, $areaDTO->getParentAreaId());
        $this->assertEquals(1514992911, $areaDTO->getUt());
    }
}