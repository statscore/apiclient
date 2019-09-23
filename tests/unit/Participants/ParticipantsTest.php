<?php

namespace UnitTests\Participants;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Response;
use Statscore\Model\Response\Participant\ParticipantCompareDTO;
use Statscore\Model\Response\Participant\ParticipantCompareMatchesStatsDTO;
use Statscore\Model\Response\Participant\ParticipantDetailsDTO;
use Statscore\Model\Response\Participant\ParticipantDTO;
use Statscore\Model\Response\Participant\ParticipantHead2HeadDTO;
use Statscore\Service\Api;
use Statscore\Service\Participants\ParticipantsService;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use UnitTests\TestCase;

/**
 * Class ParticipantsTest
 * @package UnitTests\Participants
 */
class ParticipantsTest extends TestCase
{
    /**
     * @var ParticipantsService
     */
    private $participantsService;

    public function setUp(): void
    {
        parent::setUp();
        $this->participantsService = new ParticipantsService($this->service);
    }

    /**
     * @return ParticipantDTO
     * @throws GuzzleException
     * @throws ExceptionInterface
     */
    public function testGetAll(): ParticipantDTO
    {
        $sportId = 5;

        $response = file_get_contents(__DIR__ . '/assets/participants.json');

        $response = new Response(HttpFoundationResponse::HTTP_OK, ['Content-Type' => 'application/json'], $response);

        $this->guzzle->shouldReceive('request')->andReturn($response);

        $responseDTO = $this->participantsService->getAll($sportId);

        $this->assertEquals('participants.index', $responseDTO->getMethod()->getDetails());
        $this->assertEquals('participants.index', $responseDTO->getMethod()->getName());
        $this->assertEmpty($responseDTO->getMethod()->getNextPage());
        $this->assertEmpty($responseDTO->getMethod()->getPreviousPage());
        $this->assertArrayHasKey(Api::QUERY_SPORT_ID, $responseDTO->getMethod()->getParameters());
        $this->assertEquals($sportId, $responseDTO->getMethod()->getParameters()[Api::QUERY_SPORT_ID]);
        $this->assertEquals(1564256524, $responseDTO->getTimestamp());
        $this->assertEquals('2.125', $responseDTO->getVer());
        $this->assertEquals(12, $responseDTO->getMethod()->getTotalItems());

        $this->assertCount(12, $responseDTO->getData());
        $this->assertInstanceOf(ParticipantDTO::class, $responseDTO->getData()[0]);

        return $responseDTO->getData()[0];
    }

    /**
     * @param ParticipantDTO $participantDTO
     * @depends testGetAll
     * @depends testGet
     * @return ParticipantDetailsDTO
     */
    public function testParticipantResponse(ParticipantDTO $participantDTO): ParticipantDetailsDTO
    {
        $this->assertEquals(51447, $participantDTO->getId());
        $this->assertEquals('team', $participantDTO->getType());
        $this->assertEquals('Dzikie Korki', $participantDTO->getName());
        $this->assertEquals('Korki', $participantDTO->getShortName());
        $this->assertEquals('kor', $participantDTO->getAcronym());
        $this->assertEquals('male', $participantDTO->getGender());
        $this->assertEquals(144, $participantDTO->getAreaId());
        $this->assertEquals('Poland', $participantDTO->getAreaName());
        $this->assertEquals('POL', $participantDTO->getAreaCode());
        $this->assertEquals(5, $participantDTO->getSportId());
        $this->assertEquals('Soccer', $participantDTO->getSportName());
        $this->assertEquals('no', $participantDTO->getNational());
        $this->assertEquals(null, $participantDTO->getWebsite());
        $this->assertEquals('dzikie-korki,51447', $participantDTO->getSlug());
        $this->assertEquals('no', $participantDTO->getLogo());
        $this->assertEquals('no', $participantDTO->getVirtual());
        $this->assertEquals(null, $participantDTO->getShirtNr());
        $this->assertInstanceOf(ParticipantDetailsDTO::class, $participantDTO->getDetails());

        return $participantDTO->getDetails();
    }

    /**
     * @param ParticipantDetailsDTO $detailsDTO
     * @depends testParticipantResponse
     */
    public function testParticipantDetailsResponse(ParticipantDetailsDTO $detailsDTO): void
    {
        $this->assertEquals(null, $detailsDTO->getFounded());
        $this->assertEquals(null, $detailsDTO->getPhone());
        $this->assertEquals(null, $detailsDTO->getEmail());
        $this->assertEquals(null, $detailsDTO->getAddress());
        $this->assertEquals(null, $detailsDTO->getVenueId());
        $this->assertEquals(null, $detailsDTO->getVenueName());
        $this->assertEquals(null, $detailsDTO->getWeight());
        $this->assertEquals(null, $detailsDTO->getHeight());
        $this->assertEquals(null, $detailsDTO->getNickname());
        $this->assertEquals(null, $detailsDTO->getPositionId());
        $this->assertEquals(null, $detailsDTO->getPositionName());
        $this->assertEquals(null, $detailsDTO->getBirthdate());
        $this->assertEquals(null, $detailsDTO->getBornPlace());
        $this->assertEquals('no', $detailsDTO->getIsRetired());
        $this->assertEquals(null, $detailsDTO->getSubtype());
    }

    /**
     * @return ParticipantDTO
     * @throws ExceptionInterface
     * @throws GuzzleException
     */
    public function testGet(): ParticipantDTO
    {
        $participantId = 51447;

        $response = file_get_contents(__DIR__ . '/assets/participants_51447.json');

        $response = new Response(HttpFoundationResponse::HTTP_OK, ['Content-Type' => 'application/json'], $response);

        $this->guzzle->shouldReceive('request')->andReturn($response);

        $responseDTO = $this->participantsService->get($participantId);

        $this->assertEquals('participants.show', $responseDTO->getMethod()->getDetails());
        $this->assertEquals('participants.show', $responseDTO->getMethod()->getName());
        $this->assertEmpty($responseDTO->getMethod()->getNextPage());
        $this->assertEmpty($responseDTO->getMethod()->getPreviousPage());
        $this->assertArrayHasKey(Api::QUERY_SPORT_ID, $responseDTO->getMethod()->getParameters());
        $this->assertEquals(5, $responseDTO->getMethod()->getParameters()[Api::QUERY_SPORT_ID]);
        $this->assertArrayHasKey(Api::QUERY_PARTICIPANT_ID, $responseDTO->getMethod()->getParameters());
        $this->assertEquals($participantId, $responseDTO->getMethod()->getParameters()[Api::QUERY_PARTICIPANT_ID]);
        $this->assertEquals(1564258061, $responseDTO->getTimestamp());
        $this->assertEquals('2.125', $responseDTO->getVer());
        $this->assertEquals(1, $responseDTO->getMethod()->getTotalItems());

        $this->assertInstanceOf(ParticipantDTO::class, $responseDTO->getData());

        return $responseDTO->getData();
    }

    /**
     * @return ParticipantCompareDTO
     * @throws ExceptionInterface
     * @throws GuzzleException
     */
    public function testCompare(): ParticipantCompareDTO
    {
        $participantId = 51447;
        $compareParticipantId = 51448;

        $response = file_get_contents(__DIR__ . '/assets/participants_51447_compare.json');

        $response = new Response(HttpFoundationResponse::HTTP_OK, ['Content-Type' => 'application/json'], $response);

        $this->guzzle->shouldReceive('request')->andReturn($response);

        $responseDTO = $this->participantsService->compare($participantId, $compareParticipantId);

        $this->assertEquals('participants.compare.index', $responseDTO->getMethod()->getDetails());
        $this->assertEquals('participants.compare.index', $responseDTO->getMethod()->getName());
        $this->assertEmpty($responseDTO->getMethod()->getNextPage());
        $this->assertEmpty($responseDTO->getMethod()->getPreviousPage());
        $this->assertArrayHasKey('compare_participant_id', $responseDTO->getMethod()->getParameters());
        $this->assertEquals($compareParticipantId, $responseDTO->getMethod()->getParameters()['compare_participant_id']);
        $this->assertEquals(1564258695, $responseDTO->getTimestamp());
        $this->assertEquals('2.125', $responseDTO->getVer());
        $this->assertEquals(11, $responseDTO->getMethod()->getTotalItems());

        $this->assertInstanceOf(ParticipantCompareDTO::class, $responseDTO->getData());

        return $responseDTO->getData();
    }

    /**
     * @param ParticipantCompareDTO $compareDTO
     * @depends testCompare
     * @return ParticipantHead2HeadDTO
     */
    public function testCompareResponse(ParticipantCompareDTO $compareDTO): ParticipantHead2HeadDTO
    {
        $this->assertInstanceOf(ParticipantDTO::class, $compareDTO->getParticipants()[0]);
        $this->assertInstanceOf(ParticipantHead2HeadDTO::class, $compareDTO->getHead2head());

        return $compareDTO->getHead2head();
    }

    /**
     * @param ParticipantHead2HeadDTO $head2HeadDTO
     * @depends testCompareResponse
     */
    public function testH2HResponse(ParticipantHead2HeadDTO $head2HeadDTO): void
    {
        $this->assertInstanceOf(ParticipantCompareMatchesStatsDTO::class, $head2HeadDTO->getAllMatchesStats());
        $this->assertInstanceOf(ParticipantCompareMatchesStatsDTO::class, $head2HeadDTO->getLast10MatchesStats());

        $matchesStats = $head2HeadDTO->getAllMatchesStats();
        $this->assertEquals(11, $matchesStats->getTotalEventsPlayed());
        $this->assertEquals(3, $matchesStats->getParticipant1Won());
        $this->assertEquals(5, $matchesStats->getParticipant1Draw());
        $this->assertEquals(3, $matchesStats->getParticipant1Lost());
        $this->assertEquals(3, $matchesStats->getParticipant2Won());
        $this->assertEquals(5, $matchesStats->getParticipant2Draw());
        $this->assertEquals(3, $matchesStats->getParticipant2Lost());
    }
}