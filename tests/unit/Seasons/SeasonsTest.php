<?php

namespace UnitTests\Seasons;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Response;
use Statscore\Model\Response\Competition\CompetitionDTO;
use Statscore\Model\Response\Season\SeasonDTO;
use Statscore\Model\Response\Stage\StageDTO;
use Statscore\Service\Seasons\SeasonsService;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use UnitTests\TestCase;

/**
 * Class SeasonsTest
 * @package UnitTests\Seasons
 */
class SeasonsTest extends TestCase
{
    /**
     * @var SeasonsService
     */
    private $seasonsService;

    public function setUp(): void
    {
        parent::setUp();
        $this->seasonsService = new SeasonsService($this->service);
    }

    /**
     * @return CompetitionDTO
     * @throws ExceptionInterface
     * @throws GuzzleException
     */
    public function testGetAll(): CompetitionDTO
    {
        $response = file_get_contents(__DIR__ . '/assets/seasons.json');

        $response = new Response(HttpFoundationResponse::HTTP_OK, ['Content-Type' => 'application/json'], $response);

        $this->guzzle->shouldReceive('request')->andReturn($response);

        $responseDTO = $this->seasonsService->getAll();

        $this->assertEquals('seasons.index', $responseDTO->getMethod()->getDetails());
        $this->assertEquals('seasons.index', $responseDTO->getMethod()->getName());
        $this->assertEmpty($responseDTO->getMethod()->getPreviousPage());
        $this->assertEmpty($responseDTO->getMethod()->getNextPage());
        $this->assertArrayHasKey('client_id', $responseDTO->getMethod()->getParameters());
        $this->assertEquals(1565265269, $responseDTO->getTimestamp());
        $this->assertEquals('2.125', $responseDTO->getVer());
        $this->assertEquals(49, $responseDTO->getMethod()->getTotalItems());

        $this->assertCount(31, $responseDTO->getData());
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
        $this->assertEquals(9570, $competitionDTO->getId());
        $this->assertEquals('Siatkówka dla testów', $competitionDTO->getName());
        $this->assertEquals('Siata', $competitionDTO->getShortName());
        $this->assertEquals('Sia', $competitionDTO->getMiniName());
        $this->assertEquals('male', $competitionDTO->getGender());
        $this->assertEquals('country_league', $competitionDTO->getType());
        $this->assertEquals(198, $competitionDTO->getAreaId());
        $this->assertEquals('Italy', $competitionDTO->getAreaName());
        $this->assertEquals('country', $competitionDTO->getAreaType());
        $this->assertEquals(0, $competitionDTO->getAreaSort());
        $this->assertEquals('ITA', $competitionDTO->getAreaCode());
        $this->assertEquals(0, $competitionDTO->getOverallSort());
        $this->assertEquals(2, $competitionDTO->getSportId());
        $this->assertEquals('Volleyball', $competitionDTO->getSportName());
        $this->assertEmpty($competitionDTO->getTourId());
        $this->assertEmpty($competitionDTO->getTourName());
        $this->assertEquals(1491466200, $competitionDTO->getUt());
        $this->assertEquals('siata,9570', $competitionDTO->getSlug());
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
    public function testSeasonResponse(SeasonDTO $seasonDTO): void
    {
        $this->assertEquals(9570, $seasonDTO->getId());
        $this->assertEquals('Siatkówka', $seasonDTO->getName());
        $this->assertEquals(2017, $seasonDTO->getYear());
        $this->assertEquals('no', $seasonDTO->getActual());
        $this->assertEmpty($seasonDTO->getRangeLevel());
        $this->assertEquals(1491466200, $seasonDTO->getUt());
        $this->assertEquals('bronze', $seasonDTO->getStatsLvl());
        $this->assertCount(0, $seasonDTO->getStages());
    }

    /**
     * @return CompetitionDTO
     * @throws ExceptionInterface
     * @throws GuzzleException
     */
    public function testGet(): CompetitionDTO
    {
        $id = 9570;
        $response = file_get_contents(__DIR__ . '/assets/seasons_9570.json');

        $response = new Response(HttpFoundationResponse::HTTP_OK, ['Content-Type' => 'application/json'], $response);

        $this->guzzle->shouldReceive('request')->andReturn($response);

        $responseDTO = $this->seasonsService->get($id);

        $this->assertEquals('seasons.show', $responseDTO->getMethod()->getDetails());
        $this->assertEquals('seasons.show', $responseDTO->getMethod()->getName());
        $this->assertEmpty($responseDTO->getMethod()->getNextPage());
        $this->assertEmpty($responseDTO->getMethod()->getPreviousPage());
        $this->assertArrayHasKey('client_id', $responseDTO->getMethod()->getParameters());
        $this->assertArrayHasKey('season_id', $responseDTO->getMethod()->getParameters());
        $this->assertEquals($id, $responseDTO->getMethod()->getParameters()['season_id']);
        $this->assertEquals(1565262317, $responseDTO->getTimestamp());
        $this->assertEquals('2.125', $responseDTO->getVer());
        $this->assertEquals(1, $responseDTO->getMethod()->getTotalItems());

        $this->assertInstanceOf(CompetitionDTO::class, $responseDTO->getData());

        return $responseDTO->getData();
    }
}