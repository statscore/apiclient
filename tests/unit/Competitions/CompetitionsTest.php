<?php

namespace UnitTests\Competitions;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Response;
use Itav\Component\Serializer\SerializerException;
use ReflectionException;
use Statscore\Model\Response\Competition\CompetitionDTO;
use Statscore\Service\Competitions\CompetitionsService;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;
use UnitTests\TestCase;

/**
 * Class CompetitionsTest
 * @package UnitTests\Competitions
 */
class CompetitionsTest extends TestCase
{

    /**
     * @var CompetitionsService
     */
    private $competitionsService;

    public function setUp(): void
    {
        parent::setUp();
        $this->competitionsService = new CompetitionsService($this->service);
    }

    /**
     * @return CompetitionDTO
     * @throws GuzzleException
     * @throws SerializerException
     * @throws ReflectionException
     */
    public function testGetAll(): CompetitionDTO
    {
        $response = file_get_contents(__DIR__ . '/assets/competitions.json');

        $response = new Response(HttpFoundationResponse::HTTP_OK, ['Content-Type' => 'application/json'], $response);

        $this->guzzle->shouldReceive('request')->andReturn($response);

        $responseDTO = $this->competitionsService->getAll();

        $this->assertEquals('competitions.index', $responseDTO->getMethod()->getDetails());
        $this->assertEquals('competitions.index', $responseDTO->getMethod()->getName());
        $this->assertEmpty($responseDTO->getMethod()->getNextPage());
        $this->assertEmpty($responseDTO->getMethod()->getPreviousPage());
        $this->assertArrayHasKey('client_id', $responseDTO->getMethod()->getParameters());
        $this->assertEquals(1563818450, $responseDTO->getTimestamp());
        $this->assertEquals('2.125', $responseDTO->getVer());
        $this->assertEquals(2, $responseDTO->getMethod()->getTotalItems());

        $this->assertCount(2, $responseDTO->getData());
        $this->assertInstanceOf(CompetitionDTO::class, $responseDTO->getData()[0]);

        return $responseDTO->getData()[0];
    }

    /**
     * @param CompetitionDTO $competitionDTO
     * @depends testGetAll
     * @depends testGet
     */
    public function testCompetitionResponse(CompetitionDTO $competitionDTO): void
    {
        $this->assertEquals(5806, $competitionDTO->getId());
        $this->assertEquals('Serbia & Montenegro', $competitionDTO->getName());
        $this->assertEquals('Serbia & Montenegro', $competitionDTO->getShortName());
        $this->assertEquals('mnb', $competitionDTO->getMiniName());
        $this->assertEquals('male', $competitionDTO->getGender());
        $this->assertEquals('country_league', $competitionDTO->getType());
        $this->assertEquals(1, $competitionDTO->getAreaId());
        $this->assertEquals('Afghanistan', $competitionDTO->getAreaName());
        $this->assertEquals('country', $competitionDTO->getAreaType());
        $this->assertEquals(2, $competitionDTO->getAreaSort());
        $this->assertEquals('AFG', $competitionDTO->getAreaCode());
        $this->assertEquals(50, $competitionDTO->getOverallSort());
        $this->assertEquals(20, $competitionDTO->getSportId());
        $this->assertEquals('Alpine skiing', $competitionDTO->getSportName());
        $this->assertEquals(4, $competitionDTO->getTourId());
        $this->assertEquals('ATP Challengers', $competitionDTO->getTourName());
        $this->assertEquals(1434115672, $competitionDTO->getUt());
        $this->assertEquals('serbia-&-montenegro,5806', $competitionDTO->getSlug());
        $this->assertEquals('bronze', $competitionDTO->getStatsLvl());
        $this->assertEquals([], $competitionDTO->getSeasons());
    }

    /**
     * @return CompetitionDTO
     * @throws GuzzleException
     * @throws ReflectionException
     * @throws SerializerException
     */
    public function testGet(): CompetitionDTO
    {
        $id = 5806;
        $response = file_get_contents(__DIR__ . '/assets/competitions_5806.json');

        $response = new Response(HttpFoundationResponse::HTTP_OK, ['Content-Type' => 'application/json'], $response);

        $this->guzzle->shouldReceive('request')->andReturn($response);

        $responseDTO = $this->competitionsService->get($id);

        $this->assertEquals('competitions.show', $responseDTO->getMethod()->getDetails());
        $this->assertEquals('competitions.show', $responseDTO->getMethod()->getName());
        $this->assertEmpty($responseDTO->getMethod()->getNextPage());
        $this->assertEmpty($responseDTO->getMethod()->getPreviousPage());
        $this->assertArrayHasKey('client_id', $responseDTO->getMethod()->getParameters());
        $this->assertArrayHasKey('competition_id', $responseDTO->getMethod()->getParameters());
        $this->assertEquals($id, $responseDTO->getMethod()->getParameters()['competition_id']);
        $this->assertEquals(1563821336, $responseDTO->getTimestamp());
        $this->assertEquals('2.125', $responseDTO->getVer());
        $this->assertEquals(1, $responseDTO->getMethod()->getTotalItems());

        $this->assertInstanceOf(CompetitionDTO::class, $responseDTO->getData());

        return $responseDTO->getData();
    }
}