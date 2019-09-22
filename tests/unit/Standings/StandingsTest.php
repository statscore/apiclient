<?php

namespace UnitTests\Standings;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Response;
use Statscore\Model\Response\Standing\StandingColumnDTO;
use Statscore\Model\Response\Standing\StandingDTO;
use Statscore\Model\Response\Standing\StandingGroupDTO;
use Statscore\Model\Response\Standing\StandingParticipantDTO;
use Statscore\Model\Response\Standing\StandingTypeDTO;
use Statscore\Model\Response\Standing\StandingZoneDTO;
use Statscore\Service\Standings\StandingsService;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
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
     * @throws ExceptionInterface
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
     * @throws ExceptionInterface
     * @throws GuzzleException
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
     * @return StandingGroupDTO
     */
    public function testSingleStandingResponse(StandingDTO $standingDTO): StandingGroupDTO
    {
        $this->assertEquals(1658, $standingDTO->getCompetitionId());
        $this->assertEquals(29848, $standingDTO->getSeasonId());
        $this->assertEquals(85270, $standingDTO->getStageId());

        $this->assertCount(8, $standingDTO->getGroups());

        $group = $standingDTO->getGroups()[0];

        $this->assertInstanceOf(StandingGroupDTO::class, $group);

        return $group;
    }

    /**
     * @param StandingGroupDTO $standingGroupDTO
     * @depends testSingleStandingResponse
     * @return StandingParticipantDTO
     */
    public function testStandingGroupResponse(StandingGroupDTO $standingGroupDTO): StandingParticipantDTO
    {
        $this->assertEquals(1, $standingGroupDTO->getId());
        $this->assertEquals('Group A', $standingGroupDTO->getName());
        $this->assertEquals(1415800836, $standingGroupDTO->getUt());
        $this->assertEmpty($standingGroupDTO->getCorrections());

        $this->assertCount(2, $standingGroupDTO->getZones());
        $zone = $standingGroupDTO->getZones()[0];
        $this->assertInstanceOf(StandingZoneDTO::class, $zone);
        $this->assertEquals(26, $zone->getId());
        $this->assertEquals('Next Round', $zone->getName());
        $this->assertEquals('#002400', $zone->getColour());

        $this->assertCount(4, $standingGroupDTO->getParticipants());
        $this->assertInstanceOf(StandingParticipantDTO::class, $standingGroupDTO->getParticipants()[0]);

        return $standingGroupDTO->getParticipants()[0];
    }

    /**
     * @param StandingParticipantDTO $standingParticipantDTO
     * @depends testStandingGroupResponse
     * @return StandingColumnDTO
     */
    public function testStandingsParticipantResponse(StandingParticipantDTO $standingParticipantDTO): StandingColumnDTO
    {
        $this->assertEquals(136195, $standingParticipantDTO->getId());
        $this->assertEquals('Manchester United', $standingParticipantDTO->getName());
        $this->assertEquals('manchester-united,136195', $standingParticipantDTO->getParticipantSlug());
        $this->assertEquals(5, $standingParticipantDTO->getAreaId());
        $this->assertEquals('England', $standingParticipantDTO->getAreaName());
        $this->assertEquals(1, $standingParticipantDTO->getRank());
        $this->assertEquals(3, $standingParticipantDTO->getLastRank());
        $this->assertEquals('Next Round', $standingParticipantDTO->getZoneName());
        $this->assertEquals('', $standingParticipantDTO->getSubparticipantId());
        $this->assertEquals('', $standingParticipantDTO->getSubparticipantName());
        $this->assertEquals('', $standingParticipantDTO->getSubparticipantSlug());
        $this->assertCount(9, $standingParticipantDTO->getColumns());

        $this->assertInstanceOf(StandingColumnDTO::class, $standingParticipantDTO->getColumns()[0]);

        return $standingParticipantDTO->getColumns()[0];
    }

    /**
     * @param StandingColumnDTO $standingColumnDTO
     * @depends testStandingsParticipantResponse
     */
    public function testStandingColumnResponse(StandingColumnDTO $standingColumnDTO): void
    {
        $this->assertEquals(1, $standingColumnDTO->getId());
        $this->assertEquals('Matches played', $standingColumnDTO->getName());
        $this->assertEquals('MP', $standingColumnDTO->getShortName());
        $this->assertEquals('mp', $standingColumnDTO->getCode());
        $this->assertEquals(6, $standingColumnDTO->getValue());
    }

    /**
     * @return StandingTypeDTO
     * @throws ExceptionInterface
     * @throws GuzzleException
     */
    public function testStandingTypes(): StandingTypeDTO
    {
        $sportId = 5;
        $response = file_get_contents(__DIR__ . '/assets/standings_types.json');

        $response = new Response(HttpFoundationResponse::HTTP_OK, ['Content-Type' => 'application/json'], $response);

        $this->guzzle->shouldReceive('request')->andReturn($response);

        $responseDTO = $this->standingsService->types($sportId);

        $this->assertEquals('standings-types.index', $responseDTO->getMethod()->getDetails());
        $this->assertEquals('standings-types.index', $responseDTO->getMethod()->getName());
        $this->assertEmpty($responseDTO->getMethod()->getNextPage());
        $this->assertEmpty($responseDTO->getMethod()->getPreviousPage());
        $this->assertArrayHasKey('client_id', $responseDTO->getMethod()->getParameters());
        $this->assertArrayHasKey('sport_id', $responseDTO->getMethod()->getParameters());
        $this->assertEquals($sportId, $responseDTO->getMethod()->getParameters()['sport_id']);
        $this->assertEquals(1565346035, $responseDTO->getTimestamp());
        $this->assertEquals('2.125', $responseDTO->getVer());
        $this->assertCount(15, $responseDTO->getData());
        $this->assertInstanceOf(StandingTypeDTO::class, $responseDTO->getData()[0]);

        return $responseDTO->getData()[0];
    }

    /**
     * @param StandingTypeDTO $standingTypeDTO
     * @depends testStandingTypes
     * @return StandingColumnDTO
     */
    public function testStandingTypeResponse(StandingTypeDTO $standingTypeDTO): StandingColumnDTO
    {
        $this->assertEquals(115, $standingTypeDTO->getId());
        $this->assertEquals('Assists', $standingTypeDTO->getName());
        $this->assertEquals(1520344509, $standingTypeDTO->getUt());
        $this->assertCount(3, $standingTypeDTO->getColumns());

        $this->assertInstanceOf(StandingColumnDTO::class, $standingTypeDTO->getColumns()[0]);

        return $standingTypeDTO->getColumns()[0];
    }
}