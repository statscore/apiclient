<?php

namespace UnitTests\Sports;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Response;
use Statscore\Model\Response\Sport\SportDTO;
use Statscore\Model\Response\Status\StatusDTO;
use Statscore\Service\Sports\SportsService;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use UnitTests\TestCase;

/**
 * Class SportsTest
 * @package UnitTests\Sports
 */
class SportsTest extends TestCase
{
    /**
     * @var SportsService
     */
    private $sportsService;

    public function setUp(): void
    {
        parent::setUp();
        $this->sportsService = new SportsService($this->service);
    }

    /**
     * @return SportDTO
     * @throws GuzzleException
     * @throws ExceptionInterface
     */
    public function testGetAll(): SportDTO
    {
        $response = file_get_contents(__DIR__ . '/assets/sports.json');

        $response = new Response(HttpFoundationResponse::HTTP_OK, ['Content-Type' => 'application/json'], $response);

        $this->guzzle->shouldReceive('request')->andReturn($response);

        $responseDTO = $this->sportsService->getAll();

        $this->assertEquals('sports.index', $responseDTO->getMethod()->getDetails());
        $this->assertEquals('sports.index', $responseDTO->getMethod()->getName());
        $this->assertEmpty($responseDTO->getMethod()->getPreviousPage());
        $this->assertEmpty($responseDTO->getMethod()->getNextPage());
        $this->assertEquals(1565268139, $responseDTO->getTimestamp());
        $this->assertEquals('2.125', $responseDTO->getVer());
        $this->assertEquals(76, $responseDTO->getMethod()->getTotalItems());

        $this->assertCount(76, $responseDTO->getData());
        $this->assertInstanceOf(SportDTO::class, $responseDTO->getData()[0]);

        return $responseDTO->getData()[0];
    }

    /**
     * @param SportDTO $sportDTO
     * @depends testGetAll
     */
    public function testSportResponse(SportDTO $sportDTO): void
    {
        $this->assertEquals(1, $sportDTO->getId());
        $this->assertEquals('Basketball', $sportDTO->getName());
        $this->assertEquals('basketball', $sportDTO->getUrl());
        $this->assertEquals('yes', $sportDTO->getActive());
        $this->assertEquals('yes', $sportDTO->getHasTimer());
        $this->assertEquals('default', $sportDTO->getTemplate());
        $this->assertEquals('no', $sportDTO->getIncidentsPositions());
        $this->assertEquals(1412922509, $sportDTO->getUt());
        $this->assertEmpty($sportDTO->getStatuses());
    }

    /**
     * @return SportDTO
     * @throws ExceptionInterface
     * @throws GuzzleException
     */
    public function testGet(): SportDTO
    {
        $id = 1;
        $response = file_get_contents(__DIR__ . '/assets/sports_1.json');

        $response = new Response(HttpFoundationResponse::HTTP_OK, ['Content-Type' => 'application/json'], $response);

        $this->guzzle->shouldReceive('request')->andReturn($response);

        $responseDTO = $this->sportsService->get($id);

        $this->assertEquals('sports.show', $responseDTO->getMethod()->getDetails());
        $this->assertEquals('sports.show', $responseDTO->getMethod()->getName());
        $this->assertEmpty($responseDTO->getMethod()->getNextPage());
        $this->assertEmpty($responseDTO->getMethod()->getPreviousPage());
        $this->assertArrayHasKey('client_id', $responseDTO->getMethod()->getParameters());
        $this->assertArrayHasKey('sport_id', $responseDTO->getMethod()->getParameters());
        $this->assertEquals($id, $responseDTO->getMethod()->getParameters()['sport_id']);
        $this->assertEquals(1565268191, $responseDTO->getTimestamp());
        $this->assertEquals('2.125', $responseDTO->getVer());
        $this->assertEquals(1, $responseDTO->getMethod()->getTotalItems());

        $this->assertInstanceOf(SportDTO::class, $responseDTO->getData());

        return $responseDTO->getData();
    }

    /**
     * @param SportDTO $sportDTO
     * @depends testGet
     */
    public function testStatusResponse(SportDTO $sportDTO): void
    {
        $this->assertCount(33, $sportDTO->getStatuses());

        $status = $sportDTO->getStatuses()[0];
        $this->assertInstanceOf(StatusDTO::class, $status);

        $this->assertEquals(1, $status->getId());
        $this->assertEquals('Not started', $status->getName());
        $this->assertEquals('Sched.', $status->getShortName());
        $this->assertEquals('scheduled', $status->getType());
        $this->assertEquals(1415797229, $status->getUt());
    }
}