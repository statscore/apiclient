<?php

namespace UnitTests\Tours;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Response;
use Statscore\Model\Response\Tour\TourDTO;
use Statscore\Service\Tours\ToursService;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use UnitTests\TestCase;

/**
 * Class ToursTest
 * @package UnitTests\Tours
 */
class ToursTest extends TestCase
{
    /**
     * @var ToursService
     */
    private $toursService;

    public function setUp(): void
    {
        parent::setUp();
        $this->toursService = new ToursService($this->service);
    }

    /**
     * @return TourDTO
     * @throws GuzzleException
     * @throws ExceptionInterface
     */
    public function testGetAll(): TourDTO
    {
        $response = file_get_contents(__DIR__ . '/assets/tours.json');

        $response = new Response(HttpFoundationResponse::HTTP_OK, ['Content-Type' => 'application/json'], $response);

        $this->guzzle->shouldReceive('request')->andReturn($response);

        $responseDTO = $this->toursService->getAll();

        $this->assertEquals('tours.index', $responseDTO->getMethod()->getDetails());
        $this->assertEquals('tours.index', $responseDTO->getMethod()->getName());
        $this->assertEmpty($responseDTO->getMethod()->getPreviousPage());
        $this->assertEmpty($responseDTO->getMethod()->getNextPage());
        $this->assertEquals(1569174852, $responseDTO->getTimestamp());
        $this->assertEquals('2.125', $responseDTO->getVer());
        $this->assertEquals(39, $responseDTO->getMethod()->getTotalItems());

        $this->assertCount(39, $responseDTO->getData());
        $this->assertInstanceOf(TourDTO::class, $responseDTO->getData()[0]);

        return $responseDTO->getData()[0];
    }

    /**
     * @param TourDTO $tourDTO
     * @depends testGetAll
     */
    public function testTourResponse(TourDTO $tourDTO): void
    {
        $this->assertEquals(1, $tourDTO->getId());
        $this->assertEquals('ATP Tour', $tourDTO->getName());
        $this->assertEquals(4, $tourDTO->getSportId());
        $this->assertEquals(1, $tourDTO->getSortOrder());
        $this->assertEquals(1430808626, $tourDTO->getUt());
    }

}
