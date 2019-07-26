<?php

namespace UnitTests\Rounds;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Response;
use Itav\Component\Serializer\SerializerException;
use Statscore\Model\Response\Competition\CompetitionDTO;
use Statscore\Model\Response\Round\RoundDTO;
use Statscore\Service\Rounds\RoundsService;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;
use UnitTests\TestCase;

/**
 * Class RoundsTest
 * @package UnitTests\Rounds
 */
class RoundsTest extends TestCase
{
    /**
     * @var RoundsService
     */
    private $roundsService;

    public function setUp(): void
    {
        parent::setUp();
        $this->roundsService = new RoundsService($this->service);
    }

    /**
     * @throws SerializerException
     * @throws GuzzleException
     */
    public function testGetAll(): RoundDTO
    {
        $response = file_get_contents(__DIR__ . '/assets/rounds.json');

        $response = new Response(HttpFoundationResponse::HTTP_OK, ['Content-Type' => 'application/json'], $response);

        $this->guzzle->shouldReceive('request')->andReturn($response);

        $responseDTO = $this->roundsService->getAll();

        $this->assertEquals('rounds.index', $responseDTO->getMethod()->getDetails());
        $this->assertEquals('rounds.index', $responseDTO->getMethod()->getName());
        $this->assertEmpty($responseDTO->getMethod()->getPreviousPage());
        $this->assertEquals("http://dev.api.statscore.com/v2/rounds?username=statscore&client_id=1&page=2", $responseDTO->getMethod()->getNextPage());
        $this->assertEquals(1564165992, $responseDTO->getTimestamp());
        $this->assertEquals('2.125', $responseDTO->getVer());
        $this->assertEquals(88, $responseDTO->getMethod()->getTotalItems());

        $this->assertInstanceOf(RoundDTO::class, $responseDTO->getData()[0]);

        return $responseDTO->getData()[0];
    }

    /**
     * @param RoundDTO $roundDTO
     * @depends testGetAll
     */
    public function testRoundResponse(RoundDTO $roundDTO): void
    {
        $this->assertEquals(1, $roundDTO->getId());
        $this->assertEquals('Round 1', $roundDTO->getName());
        $this->assertEquals(1, $roundDTO->getSort());
        $this->assertEquals(1368136800, $roundDTO->getUt());
    }
}