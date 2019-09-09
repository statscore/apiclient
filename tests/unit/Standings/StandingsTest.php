<?php

namespace UnitTests\Standings;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Response;
use Itav\Component\Serializer\SerializerException;
use ReflectionException;
use Statscore\Model\Response\Standing\StandingDTO;
use Statscore\Service\Standings\StandingsService;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;
use UnitTests\TestCase;

/**
 * Class SportsTest
 * @package UnitTests\Standings
 */
class StandingsTest extends TestCase
{
    /**
     * @var StandingsService
     */
    private $standingsService;

    public function setUp(): void
    {
        parent::setUp();
        $this->standingsService = new StandingsService($this->service);
    }

    /**
     * @return StandingDTO
     * @throws GuzzleException
     * @throws SerializerException
     * @throws ReflectionException
     */
    public function testGetAll(): StandingDTO
    {
        $response = file_get_contents(__DIR__ . '/assets/standings.json');

        $response = new Response(HttpFoundationResponse::HTTP_OK, ['Content-Type' => 'application/json'], $response);

        $this->guzzle->shouldReceive('request')->andReturn($response);

        $responseDTO = $this->standingsService->getAll();

        $this->assertEquals('standings.index', $responseDTO->getMethod()->getDetails());
        $this->assertEquals('standings.index', $responseDTO->getMethod()->getName());
        $this->assertEmpty($responseDTO->getMethod()->getPreviousPage());
        $this->assertEmpty($responseDTO->getMethod()->getNextPage());
        $this->assertEquals(1565345895, $responseDTO->getTimestamp());
        $this->assertEquals('2.125', $responseDTO->getVer());
        $this->assertEquals(28, $responseDTO->getMethod()->getTotalItems());

        $this->assertCount(28, $responseDTO->getData());
        $this->assertInstanceOf(StandingDTO::class, $responseDTO->getData()[0]);

        return $responseDTO->getData()[0];
    }

    /**
     * @param StandingDTO $standingDTO
     * @depends testGetAll
     */
    public function testStandingResponse(StandingDTO $standingDTO): void
    {
        $this->assertEquals(23033, $standingDTO->getId());
        $this->assertEquals('Team overall stats - Italy, Coppa Italia 2016, stage: Final', $standingDTO->getName());
        $this->assertEquals(1, $standingDTO->getSportId());
        $this->assertEquals('Basketball', $standingDTO->getSportName());
        $this->assertEquals(93, $standingDTO->getTypeId());
        $this->assertEquals('Team overall stats', $standingDTO->getTypeName());
        $this->assertEquals('overall_stats', $standingDTO->getSubtype());
        $this->assertEquals(76601, $standingDTO->getObjectId());
        $this->assertEquals('stage', $standingDTO->getObjectType());
        $this->assertEquals('Final', $standingDTO->getObjectName());
        $this->assertEquals('active', $standingDTO->getItemStatus());
        $this->assertEquals('yes', $standingDTO->getResetGroupRank());
        $this->assertEquals(1463463010, $standingDTO->getUt());
    }

    /**
     * @return StandingDTO
     * @throws GuzzleException
     * @throws ReflectionException
     * @throws SerializerException
     */
    public function testGet(): StandingDTO
    {
        $id = 39719;
        $response = file_get_contents(__DIR__ . '/assets/standings_39719.json');

        $response = new Response(HttpFoundationResponse::HTTP_OK, ['Content-Type' => 'application/json'], $response);

        $this->guzzle->shouldReceive('request')->andReturn($response);

        $responseDTO = $this->standingsService->get($id);

        $this->assertEquals('standings.show', $responseDTO->getMethod()->getDetails());
        $this->assertEquals('standings.show', $responseDTO->getMethod()->getName());
        $this->assertEmpty($responseDTO->getMethod()->getNextPage());
        $this->assertEmpty($responseDTO->getMethod()->getPreviousPage());
        $this->assertArrayHasKey('client_id', $responseDTO->getMethod()->getParameters());
        $this->assertArrayHasKey('standing_id', $responseDTO->getMethod()->getParameters());
        $this->assertEquals($id, $responseDTO->getMethod()->getParameters()['standing_id']);
        $this->assertEquals(1554189911, $responseDTO->getTimestamp());
        $this->assertEquals('2.132', $responseDTO->getVer());

        $this->assertInstanceOf(StandingDTO::class, $responseDTO->getData());

        return $responseDTO->getData();
    }

    /**
     * @param StandingDTO $standingDTO
     * @depends testGet
     */
    public function testSingleStandingResponse(StandingDTO $standingDTO): void
    {
        $this->assertEquals(1658, $standingDTO->getCompetitionId());
        $this->assertEquals(29848, $standingDTO->getSeasonId());
        $this->assertEquals(85270, $standingDTO->getStageId());
    }
}