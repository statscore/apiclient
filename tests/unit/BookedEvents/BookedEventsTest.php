<?php

namespace UnitTests\BookedEvents;

use DateTime;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Response;
use Statscore\Model\Response\BookedEvent\BookedEventDTO;
use Statscore\Service\BookedEvents\BookedEventsService;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use UnitTests\TestCase;

/**
 * Class BookedEventsTest
 * @package UnitTests\BookedEvents
 */
class BookedEventsTest extends TestCase
{
    /**
     * @var BookedEventsService
     */
    private $bookedEvents;

    public function setUp(): void
    {
        parent::setUp();
        $this->bookedEvents = new BookedEventsService($this->service);
    }

    /**
     * @return BookedEventDTO
     * @throws GuzzleException
     * @throws ExceptionInterface
     */
    public function testGetAll(): BookedEventDTO
    {
        $response = file_get_contents(__DIR__ . '/assets/booked_events.json');

        $response = new Response(HttpFoundationResponse::HTTP_OK, ['Content-Type' => 'application/json'], $response);

        $this->guzzle->shouldReceive('request')->andReturn($response);

        $responseDTO = $this->bookedEvents->getAll();

        $this->assertEquals('booked-events.index', $responseDTO->getMethod()->getDetails());
        $this->assertEquals('booked-events.index', $responseDTO->getMethod()->getName());
        $this->assertEmpty($responseDTO->getMethod()->getPreviousPage());
        $this->assertEmpty($responseDTO->getMethod()->getNextPage());
        $this->assertEquals(1569221869, $responseDTO->getTimestamp());
        $this->assertEquals('2.141.2', $responseDTO->getVer());
        $this->assertEquals(9, $responseDTO->getMethod()->getTotalItems());

        $this->assertCount(9, $responseDTO->getData());
        $this->assertInstanceOf(BookedEventDTO::class, $responseDTO->getData()[0]);

        return $responseDTO->getData()[0];
    }

    /**
     * @param BookedEventDTO $bookedEventDTO
     * @depends testGetAll
     */
    public function testBookedEventResponse(BookedEventDTO $bookedEventDTO): void
    {
        $this->assertEquals(2665818, $bookedEventDTO->getId());
        $this->assertEquals(170313, $bookedEventDTO->getClientEventId());
        $this->assertEquals(1, $bookedEventDTO->getBookedBy());
        $this->assertEquals('Stabaek - Molde', $bookedEventDTO->getName());
        $this->assertEquals(1408, $bookedEventDTO->getSource());
        $this->assertEquals('not_started', $bookedEventDTO->getRelationStatus());
        $this->assertInstanceOf(DateTime::class, $bookedEventDTO->getStartDate());
        $this->assertEquals('2019-09-23 17:00', $bookedEventDTO->getStartDate()->format('Y-m-d H:i'));
        $this->assertEquals('no', $bookedEventDTO->getFtOnly());
        $this->assertEquals('from_tv', $bookedEventDTO->getCoverageType());
        $this->assertEquals('yes', $bookedEventDTO->getScoutsfeed());
        $this->assertEquals(1, $bookedEventDTO->getStatusId());
        $this->assertEquals('Not started', $bookedEventDTO->getStatusName());
        $this->assertEquals('scheduled', $bookedEventDTO->getStatusType());
        $this->assertEquals(5, $bookedEventDTO->getSportId());
        $this->assertEquals('Soccer', $bookedEventDTO->getSportName());
        $this->assertEquals('22', $bookedEventDTO->getDay());
        $this->assertEmpty($bookedEventDTO->getClockTime());
        $this->assertEquals('stopped', $bookedEventDTO->getClockStatus());
        $this->assertEmpty($bookedEventDTO->getWinnerId());
        $this->assertEmpty($bookedEventDTO->getProgressId());
        $this->assertEquals('suspended', $bookedEventDTO->getBetStatus());
        $this->assertEquals('no', $bookedEventDTO->getNeutralVenue());
        $this->assertEquals('active', $bookedEventDTO->getItemStatus());
        $this->assertEquals(1566221053, $bookedEventDTO->getUt());
        $this->assertEquals('stabaek_molde,2665818', $bookedEventDTO->getSlug());
        $this->assertEquals(134, $bookedEventDTO->getAreaId());
        $this->assertEquals('Norway', $bookedEventDTO->getAreaName());
        $this->assertEquals(1707, $bookedEventDTO->getCompetitionId());
        $this->assertEquals('Eliteserien', $bookedEventDTO->getCompetitionShortName());
        $this->assertEquals(36789, $bookedEventDTO->getSeasonId());
        $this->assertEquals('Eliteserien 2019', $bookedEventDTO->getSeasonName());
        $this->assertEquals(94316, $bookedEventDTO->getStageId());
        $this->assertEquals('Regular Season', $bookedEventDTO->getStageName());
        $this->assertEquals('no', $bookedEventDTO->getVerifiedResult());
        $this->assertEquals(22, $bookedEventDTO->getRoundId());
        $this->assertEquals('Round 22', $bookedEventDTO->getRoundName());
        $this->assertEquals('no', $bookedEventDTO->getInvertedParticipants());
        $this->assertEquals('gold', $bookedEventDTO->getEventStatsLvl());
    }

}
