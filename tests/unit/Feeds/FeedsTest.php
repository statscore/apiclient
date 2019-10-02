<?php

namespace UnitTests\Feeds;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Response;
use Statscore\Model\Response\Event\EventDTO;
use Statscore\Model\Response\Feed\FeedDataDTO;
use Statscore\Model\Response\Feed\FeedDTO;
use Statscore\Model\Response\Feed\FeedIncidentDTO;
use Statscore\Service\Feeds\FeedsService;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use UnitTests\TestCase;

/**
 * Class FeedsTest
 * @package UnitTests\Feeds
 */
class FeedsTest extends TestCase
{
    /**
     * @var FeedsService
     */
    private $feedsService;

    public function setUp(): void
    {
        parent::setUp();
        $this->feedsService = new FeedsService($this->service);
    }

    /**
     * @return FeedDTO
     * @throws GuzzleException
     * @throws ExceptionInterface
     */
    public function testGetAll(): FeedDTO
    {
        $response = file_get_contents(__DIR__ . '/assets/feeds.json');

        $response = new Response(HttpFoundationResponse::HTTP_OK, ['Content-Type' => 'application/json'], $response);

        $this->guzzle->shouldReceive('request')->andReturn($response);

        $responseDTO = $this->feedsService->getAll();

        $this->assertEquals('feed.index', $responseDTO->getMethod()->getDetails());
        $this->assertEquals('feed.index', $responseDTO->getMethod()->getName());
        $this->assertEmpty($responseDTO->getMethod()->getNextPage());
        $this->assertEmpty($responseDTO->getMethod()->getPreviousPage());
        $this->assertEquals(1564083759, $responseDTO->getTimestamp());
        $this->assertEquals('2.125', $responseDTO->getVer());
        $this->assertEquals(null, $responseDTO->getMethod()->getTotalItems());

        $this->assertCount(6, $responseDTO->getData());
        $this->assertInstanceOf(FeedDTO::class, $responseDTO->getData()[0]);

        return $responseDTO->getData()[0];
    }

    /**
     * @param FeedDTO $feedDTO
     * @depends testGetAll
     * @depends testGet
     * @return  FeedIncidentDTO
     */
    public function testFeedResponse(FeedDTO $feedDTO): FeedIncidentDTO
    {
        $this->assertEquals(111, $feedDTO->getId());
        $this->assertEquals('incident', $feedDTO->getType());
        $this->assertEquals(-1, $feedDTO->getSource());
        $this->assertEquals(1512653946, $feedDTO->getUt());
        $this->assertInstanceOf(FeedDataDTO::class, $feedDTO->getData());
        $this->assertInstanceOf(FeedIncidentDTO::class, $feedDTO->getData()->getIncident());
        $this->assertInstanceOf(EventDTO::class, $feedDTO->getData()->getEvent());

        return $feedDTO->getData()->getIncident();
    }

    /**
     * @param FeedIncidentDTO $incidentDTO
     * @depends testFeedResponse
     */
    public function testFeedIncident(FeedIncidentDTO $incidentDTO): void
    {
        $this->assertEquals('5-889947', $incidentDTO->getId());
        $this->assertEquals('insert', $incidentDTO->getAction());
        $this->assertEquals(405, $incidentDTO->getIncidentId());
        $this->assertEquals('Shot on target', $incidentDTO->getIncidentName());
        $this->assertEquals(51447, $incidentDTO->getParticipantId());
        $this->assertEquals('Korki', $incidentDTO->getParticipantName());
        $this->assertEquals(null, $incidentDTO->getSubparticipantId());
        $this->assertEquals(null, $incidentDTO->getSubparticipantName());
        $this->assertEquals(null, $incidentDTO->getInfo());
        $this->assertEquals('no', $incidentDTO->getImportant());
        $this->assertEquals('no', $incidentDTO->getImportantForTrader());
        $this->assertEquals(null, $incidentDTO->getAddData());
        $this->assertEquals('yes', $incidentDTO->getShowPopup());
        $this->assertEquals('no', $incidentDTO->getShowScores());
        $this->assertEquals('yes', $incidentDTO->getShowAction());
        $this->assertEquals('yes', $incidentDTO->getShowTime());
        $this->assertEquals('no', $incidentDTO->getShowOnTimeline());
        $this->assertEquals(null, $incidentDTO->getEventTime());
        $this->assertEquals(1, $incidentDTO->getEventStatusId());
        $this->assertEquals('Not started', $incidentDTO->getEventStatusName());
        $this->assertEquals(null, $incidentDTO->getXPos());
        $this->assertEquals(null, $incidentDTO->getYPos());
    }

    /**
     * @return FeedDTO
     * @throws ExceptionInterface
     * @throws GuzzleException
     */
    public function testGet(): FeedDTO
    {
        $id = 1822555;

        $response = file_get_contents(__DIR__ . '/assets/feeds_1822555.json');

        $response = new Response(HttpFoundationResponse::HTTP_OK, ['Content-Type' => 'application/json'], $response);

        $this->guzzle->shouldReceive('request')->andReturn($response);

        $responseDTO = $this->feedsService->get($id);

        $this->assertEquals('feed.show', $responseDTO->getMethod()->getDetails());
        $this->assertEquals('feed.show', $responseDTO->getMethod()->getName());
        $this->assertEmpty($responseDTO->getMethod()->getNextPage());
        $this->assertEmpty($responseDTO->getMethod()->getPreviousPage());
        $this->assertEquals(1564084682, $responseDTO->getTimestamp());
        $this->assertEquals('2.125', $responseDTO->getVer());
        $this->assertEquals(null, $responseDTO->getMethod()->getTotalItems());

        $this->assertCount(6, $responseDTO->getData());
        $this->assertInstanceOf(FeedDTO::class, $responseDTO->getData()[0]);

        return $responseDTO->getData()[0];
    }
}
