<?php

namespace UnitTests\Events;

use DateTime;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Response;
use Statscore\Model\Response\Competition\CompetitionDTO;
use Statscore\Model\Response\Detail\DetailDTO;
use Statscore\Model\Response\Event\EventDTO;
use Statscore\Model\Response\Group\GroupDTO;
use Statscore\Model\Response\Participant\ParticipantDTO;
use Statscore\Model\Response\Result\ResultDTO;
use Statscore\Model\Response\Season\SeasonDTO;
use Statscore\Model\Response\Stage\StageDTO;
use Statscore\Model\Response\Stat\StatDTO;
use Statscore\Service\Api;
use Statscore\Service\Events\EventsService;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use UnitTests\TestCase;

/**
 * Class EventsTest
 * @package UnitTests\Events
 */
class EventsTest extends TestCase
{

    /**
     * @var EventsService
     */
    private $eventsService;

    public function setUp(): void
    {
        parent::setUp();
        $this->eventsService = new EventsService($this->service);
    }

    /**
     * @return CompetitionDTO
     * @throws GuzzleException
     * @throws ExceptionInterface
     */
    public function testGetAll(): CompetitionDTO
    {
        $response = file_get_contents(__DIR__ . '/assets/events.json');

        $response = new Response(HttpFoundationResponse::HTTP_OK, ['Content-Type' => 'application/json'], $response);

        $this->guzzle->shouldReceive('request')->andReturn($response);

        $responseDTO = $this->eventsService->getAll();

        $this->assertEquals('events.index', $responseDTO->getMethod()->getDetails());
        $this->assertEquals('events.index', $responseDTO->getMethod()->getName());
        $this->assertEquals('http://dev.api.statscore.com/v2/events?username=statscore&client_id=1&page=2', $responseDTO->getMethod()->getNextPage());
        $this->assertEmpty($responseDTO->getMethod()->getPreviousPage());
        $this->assertArrayHasKey(Api::QUERY_CLIENT_ID, $responseDTO->getMethod()->getParameters());
        $this->assertEquals(1568286568, $responseDTO->getTimestamp());
        $this->assertEquals('2.125', $responseDTO->getVer());
        $this->assertEquals(2, $responseDTO->getMethod()->getTotalItems());

        $this->assertCount(1, $responseDTO->getData());
        $this->assertInstanceOf(CompetitionDTO::class, $responseDTO->getData()[0]);

        return $responseDTO->getData()[0];
    }

    /**
     * @param CompetitionDTO $competitionDTO
     * @depends testGetAll
     * @depends testGet
     * @return SeasonDTO
     */
    public function testCompetitionResponse(CompetitionDTO $competitionDTO): SeasonDTO
    {
        $this->assertEquals(466, $competitionDTO->getId());
        $this->assertEquals('Brisbane (W)', $competitionDTO->getName());
        $this->assertEquals('Brisbane (W)', $competitionDTO->getShortName());
        $this->assertEquals('BRI', $competitionDTO->getMiniName());
        $this->assertEquals('female', $competitionDTO->getGender());
        $this->assertEquals('single', $competitionDTO->getType());
        $this->assertEquals(14, $competitionDTO->getAreaId());
        $this->assertEquals('Australia', $competitionDTO->getAreaName());
        $this->assertEquals('international', $competitionDTO->getAreaType());
        $this->assertEquals(1, $competitionDTO->getAreaSort());
        $this->assertEquals('AUS', $competitionDTO->getAreaCode());
        $this->assertEquals(50, $competitionDTO->getOverallSort());
        $this->assertEquals(4, $competitionDTO->getSportId());
        $this->assertEquals('Tennis', $competitionDTO->getSportName());
        $this->assertEquals(2, $competitionDTO->getTourId());
        $this->assertEquals('WTA Tour', $competitionDTO->getTourName());
        $this->assertEquals(1455090924, $competitionDTO->getUt());
        $this->assertEquals('brisbane-w,466', $competitionDTO->getSlug());
        $this->assertEquals('bronze', $competitionDTO->getStatsLvl());
        $this->assertCount(1, $competitionDTO->getSeasons());
        $this->assertInstanceOf(SeasonDTO::class, $competitionDTO->getSeasons()[0]);

        return $competitionDTO->getSeasons()[0];
    }

    /**
     * @param SeasonDTO $seasonDTO
     * @depends testCompetitionResponse
     * @return StageDTO
     */
    public function testSeasonResponse(SeasonDTO $seasonDTO): StageDTO
    {
        $this->assertEquals(25338, $seasonDTO->getId());
        $this->assertEquals('Brisbane (W) 2016', $seasonDTO->getName());
        $this->assertEquals(2016, $seasonDTO->getYear());
        $this->assertEquals('no', $seasonDTO->getActual());
        $this->assertEquals(5, $seasonDTO->getRangeLevel());
        $this->assertEquals(1568280446, $seasonDTO->getUt());
        $this->assertEquals('bronze', $seasonDTO->getStatsLvl());
        $this->assertCount(1, $seasonDTO->getStages());
        $this->assertInstanceOf(StageDTO::class, $seasonDTO->getStages()[0]);

        return $seasonDTO->getStages()[0];
    }

    /**
     * @param StageDTO $stageDTO
     * @depends testSeasonResponse
     * @return GroupDTO
     */
    public function testStageResponse(StageDTO $stageDTO): GroupDTO
    {
        $this->assertEquals(75968, $stageDTO->getId());
        $this->assertEquals(620, $stageDTO->getStageNameId());
        $this->assertEquals('Main Tournament', $stageDTO->getName());
        $this->assertInstanceOf(DateTime::class, $stageDTO->getStartDate());
        $this->assertEquals('2016-01-02', $stageDTO->getStartDate()->format('Y-m-d'));
        $this->assertInstanceOf(DateTime::class, $stageDTO->getEndDate());
        $this->assertEquals('2016-01-09', $stageDTO->getEndDate()->format('Y-m-d'));
        $this->assertEquals('no', $stageDTO->getShowStandings());
        $this->assertEquals(0, $stageDTO->getGroupsNr());
        $this->assertEquals(2, $stageDTO->getSort());
        $this->assertEquals('yes', $stageDTO->getIsCurrent());
        $this->assertEquals(1451641759, $stageDTO->getUt());
        $this->assertCount(1, $stageDTO->getGroups());
        $this->assertInstanceOf(GroupDTO::class, $stageDTO->getGroups()[0]);

        return $stageDTO->getGroups()[0];
    }

    /**
     * @param GroupDTO $groupDTO
     * @depends testStageResponse
     * @return EventDTO
     */
    public function testGroupResponse(GroupDTO $groupDTO): EventDTO
    {
        $this->assertEquals(null, $groupDTO->getId());
        $this->assertEquals('', $groupDTO->getName());
        $this->assertEquals('', $groupDTO->getUt());
        $this->assertCount(5, $groupDTO->getEvents());
        $this->assertInstanceOf(EventDTO::class, $groupDTO->getEvents()[0]);

        return $groupDTO->getEvents()[0];
    }

    /**
     * @param EventDTO $eventDTO
     * @depends testGroupResponse
     * @return ParticipantDTO
     */
    public function testEventResponse(EventDTO $eventDTO): ParticipantDTO
    {
        $this->assertEquals(1799408, $eventDTO->getId());
        $this->assertEquals('Pavlyuchenkova A. - Kerber Angelique', $eventDTO->getName());
        $this->assertEquals(3, $eventDTO->getSource());
        $this->assertEquals('no', $eventDTO->getSourceDc());
        $this->assertEquals(null, $eventDTO->getSourceSuper());
        $this->assertEquals('not_started', $eventDTO->getRelationStatus());
        $this->assertInstanceOf(DateTime::class, $eventDTO->getStartDate());
        $this->assertEquals('2019-09-12 09:27', $eventDTO->getStartDate()->format('Y-m-d H:i'));
        $this->assertEquals('no', $eventDTO->getFtOnly());
        $this->assertEquals('from_tv', $eventDTO->getCoverageType());
        $this->assertEquals(null, $eventDTO->getChannelId());
        $this->assertEquals('', $eventDTO->getChannelName());
        $this->assertEquals('yes', $eventDTO->getScoutsfeed());
        $this->assertEquals(11, $eventDTO->getStatusId());
        $this->assertEquals('Finished', $eventDTO->getStatusName());
        $this->assertEquals('finished', $eventDTO->getStatusType());
        $this->assertEquals(4, $eventDTO->getSportId());
        $this->assertEquals('Tennis', $eventDTO->getSportName());
        $this->assertEquals('', $eventDTO->getDay());
        $this->assertEquals(null, $eventDTO->getClockTime());
        $this->assertEquals(null, $eventDTO->getClockStatus());
        $this->assertEquals(null, $eventDTO->getWinnerId());
        $this->assertEquals(null, $eventDTO->getProgressId());
        $this->assertEquals('suspended', $eventDTO->getBetStatus());
        $this->assertEquals('no', $eventDTO->getNeutralVenue());
        $this->assertEquals('active', $eventDTO->getItemStatus());
        $this->assertEquals(1452134088, $eventDTO->getUt());
        $this->assertEquals('pavlyuchenkova-a_kerber-angelique,1799408', $eventDTO->getSlug());
        $this->assertEquals('no', $eventDTO->getVerifiedResult());
        $this->assertEquals('yes', $eventDTO->getIsProtocolVerified());
        $this->assertEquals(null, $eventDTO->getProtocolVerifiedBy());
        $this->assertEquals(null, $eventDTO->getProtocolVerifiedAt());
        $this->assertEquals(null, $eventDTO->getRoundId());
        $this->assertEquals(null, $eventDTO->getRoundName());
        $this->assertEquals(null, $eventDTO->getClientEventId());
        $this->assertEquals('no', $eventDTO->getBooked());
        $this->assertEquals(null, $eventDTO->getBookedBy());
        $this->assertEquals('no', $eventDTO->getInvertedParticipants());
        $this->assertEquals(null, $eventDTO->getVenueId());
        $this->assertEquals('no', $eventDTO->getBfs());
        $this->assertEquals('bronze', $eventDTO->getEventStatsLvl());
        $this->assertCount(13, $eventDTO->getDetails());

        $detail = $eventDTO->getDetails()[0];
        $this->assertInstanceOf(DetailDTO::class, $detail);
        $this->assertEquals(6, $detail->getId());
        $this->assertEquals('Surface', $detail->getName());
        $this->assertEquals('hard', $detail->getValue());

        $this->assertCount(2, $eventDTO->getParticipants());
        $this->assertInstanceOf(ParticipantDTO::class, $eventDTO->getParticipants()[0]);

        return $eventDTO->getParticipants()[0];
    }

    /**
     * @param ParticipantDTO $participantDTO
     * @depends testEventResponse
     */
    public function testParticipantResponse(ParticipantDTO $participantDTO): void
    {
        $this->assertEquals(1, $participantDTO->getCounter());
        $this->assertEquals(14300, $participantDTO->getId());
        $this->assertEquals('person', $participantDTO->getType());
        $this->assertEquals('Anastasia Pavlyuchenkova', $participantDTO->getName());
        $this->assertEquals('Pavlyuchenkova A.', $participantDTO->getShortName());
        $this->assertEquals('PAV', $participantDTO->getAcronym());
        $this->assertEquals('female', $participantDTO->getGender());
        $this->assertEquals(149, $participantDTO->getAreaId());
        $this->assertEquals('Russia', $participantDTO->getAreaName());
        $this->assertEquals('RUS', $participantDTO->getAreaCode());
        $this->assertEquals(4, $participantDTO->getSportId());
        $this->assertEquals('Tennis', $participantDTO->getSportName());
        $this->assertEquals('no', $participantDTO->getNational());
        $this->assertEquals(null, $participantDTO->getWebsite());
        $this->assertEquals(1457601273, $participantDTO->getUt());
        $this->assertEquals('pavlyuchenkova-a,14300', $participantDTO->getSlug());
        $this->assertEquals('no', $participantDTO->getLogo());
        $this->assertEquals('no', $participantDTO->getVirtual());
        $this->assertCount(21, $participantDTO->getStats());
        $this->assertCount(15, $participantDTO->getResults());

        $stat = $participantDTO->getStats()[0];
        $this->assertInstanceOf(StatDTO::class, $stat);
        $this->assertEquals(75, $stat->getId());
        $this->assertEquals('Points', $stat->getName());
        $this->assertEquals('Points', $stat->getShortName());
        $this->assertEquals(52, $stat->getValue());

        $result = $participantDTO->getResults()[0];
        $this->assertInstanceOf(ResultDTO::class, $result);
        $this->assertEquals(411, $result->getId());
        $this->assertEquals('Winner', $result->getName());
        $this->assertEquals('Winner', $result->getShortName());
        $this->assertEquals(0, $result->getValue());
    }

    /**
     * @return CompetitionDTO
     * @throws ExceptionInterface
     * @throws GuzzleException
     */
    public function testGet(): CompetitionDTO
    {
        $id = 1799408;
        $response = file_get_contents(__DIR__ . '/assets/events_1799408.json');

        $response = new Response(HttpFoundationResponse::HTTP_OK, ['Content-Type' => 'application/json'], $response);

        $this->guzzle->shouldReceive('request')->andReturn($response);

        $responseDTO = $this->eventsService->get($id);

        $this->assertEquals('events.show', $responseDTO->getMethod()->getDetails());
        $this->assertEquals('events.show', $responseDTO->getMethod()->getName());
        $this->assertEmpty($responseDTO->getMethod()->getNextPage());
        $this->assertEmpty($responseDTO->getMethod()->getPreviousPage());
        $this->assertArrayHasKey(Api::QUERY_CLIENT_ID, $responseDTO->getMethod()->getParameters());
        $this->assertArrayHasKey(Api::QUERY_EVENT_ID, $responseDTO->getMethod()->getParameters());
        $this->assertEquals($id, $responseDTO->getMethod()->getParameters()[Api::QUERY_EVENT_ID]);
        $this->assertEquals(1563997241, $responseDTO->getTimestamp());
        $this->assertEquals('2.125', $responseDTO->getVer());
        $this->assertEquals(1, $responseDTO->getMethod()->getTotalItems());

        $this->assertInstanceOf(CompetitionDTO::class, $responseDTO->getData());

        return $responseDTO->getData();
    }
}
