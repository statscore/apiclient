<?php

namespace UnitTests\Venues;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Response;
use Statscore\Model\Response\Sport\SportDTO;
use Statscore\Model\Response\Venue\VenueDTO;
use Statscore\Model\Response\Venue\VenueSportDetailDTO;
use Statscore\Service\Venues\VenuesService;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use UnitTests\TestCase;

/**
 * Class VenuesTest
 * @package UnitTests\Venues
 */
class VenuesTest extends TestCase
{
    /**
     * @var VenuesService
     */
    private $venuesService;

    public function setUp(): void
    {
        parent::setUp();
        $this->venuesService = new VenuesService($this->service);
    }

    /**
     * @return VenueDTO
     * @throws GuzzleException
     * @throws ExceptionInterface
     */
    public function testGetAll(): VenueDTO
    {
        $response = file_get_contents(__DIR__ . '/assets/venues.json');

        $response = new Response(HttpFoundationResponse::HTTP_OK, ['Content-Type' => 'application/json'], $response);

        $this->guzzle->shouldReceive('request')->andReturn($response);

        $responseDTO = $this->venuesService->getAll();

        $this->assertEquals('venues.index', $responseDTO->getMethod()->getDetails());
        $this->assertEquals('venues.index', $responseDTO->getMethod()->getName());
        $this->assertEmpty($responseDTO->getMethod()->getPreviousPage());
        $this->assertEmpty($responseDTO->getMethod()->getNextPage());
        $this->assertEquals(1569159948, $responseDTO->getTimestamp());
        $this->assertEquals('2.125', $responseDTO->getVer());
        $this->assertEquals(6, $responseDTO->getMethod()->getTotalItems());

        $this->assertCount(6, $responseDTO->getData());
        $this->assertInstanceOf(VenueDTO::class, $responseDTO->getData()[0]);

        return $responseDTO->getData()[0];
    }

    /**
     * @param VenueDTO $venueDTO
     * @depends testGetAll
     * @depends testGet
     */
    public function testStandingResponse(VenueDTO $venueDTO): void
    {
        $this->assertEquals(1, $venueDTO->getId());
        $this->assertEquals('Camp nou', $venueDTO->getName());
        $this->assertEquals('Camp nou', $venueDTO->getShortName());
        $this->assertEquals('Spain', $venueDTO->getCountry());
        $this->assertEquals('active', $venueDTO->getStatus());
        $this->assertEquals('camp-nou,1', $venueDTO->getUrl());
        $this->assertEquals('Warsaw', $venueDTO->getCity());
        $this->assertEquals('', $venueDTO->getLat());
        $this->assertEquals('', $venueDTO->getLng());
        $this->assertEquals('', $venueDTO->getOpened());
        $this->assertEquals('no', $venueDTO->getPhoto());
        $this->assertEquals(1521461782, $venueDTO->getUt());
    }

    /**
     * @return VenueDTO
     * @throws ExceptionInterface
     * @throws GuzzleException
     */
    public function testGet(): VenueDTO
    {
        $id = 39719;
        $response = file_get_contents(__DIR__ . '/assets/venues_1.json');

        $response = new Response(HttpFoundationResponse::HTTP_OK, ['Content-Type' => 'application/json'], $response);

        $this->guzzle->shouldReceive('request')->andReturn($response);

        $responseDTO = $this->venuesService->get($id);

        $this->assertEquals('venues.show', $responseDTO->getMethod()->getDetails());
        $this->assertEquals('venues.show', $responseDTO->getMethod()->getName());
        $this->assertEmpty($responseDTO->getMethod()->getNextPage());
        $this->assertEmpty($responseDTO->getMethod()->getPreviousPage());
        $this->assertEquals(1569160204, $responseDTO->getTimestamp());
        $this->assertEquals('2.125', $responseDTO->getVer());

        $this->assertInstanceOf(VenueDTO::class, $responseDTO->getData());

        return $responseDTO->getData();
    }

    /**
     * @param VenueDTO $venueDTO
     * @depends testGet
     * @return VenueSportDetailDTO
     */
    public function testVenueSports(VenueDTO $venueDTO): VenueSportDetailDTO
    {
        $this->assertCount(2, $venueDTO->getSports());
        $this->assertInstanceOf(SportDTO::class, $venueDTO->getSports()[0]);

        $sport = $venueDTO->getSports()[0];
        $this->assertCount(15, $sport->getVenueSportDetails());

        return $sport->getVenueSportDetails()[0];
    }

    /**
     * @param VenueSportDetailDTO $detailDTO
     * @depends testVenueSports
     */
    public function testVenueSportDetails(VenueSportDetailDTO $detailDTO): void
    {
        $this->assertEquals(14, $detailDTO->getId());
        $this->assertEquals('Capacity', $detailDTO->getName());
        $this->assertEquals(1, $detailDTO->getValue());
    }
}
