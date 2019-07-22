<?php

namespace UnitTests;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Response;
use Itav\Component\Serializer\SerializerException;
use Mockery;
use Mockery\MockInterface;
use Statscore\Model\Response\Competition\CompetitionDTO;
use Statscore\Service\ApiService;
use Statscore\Service\Competition\CompetitionService;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;

/**
 * Class Competitions
 * @package UnitTests
 */
class CompetitionsTest extends TestCase
{

    /**
     * @var Client|MockInterface
     */
    private $guzzle;

    /**
     * @var ApiService
     */
    private $service;

    /**
     * @var CompetitionService
     */
    private $competitionsService;

    public function setUp(): void
    {
        parent::setUp();
        $this->guzzle = Mockery::mock(Client::class);
        $this->service = new ApiService($this->guzzle, $this->serializer);
        $this->competitionsService = new CompetitionService($this->service);
    }

    /**
     * @throws GuzzleException
     * @throws SerializerException
     */
    public function testGetAll()
    {
        $response = '{"api":{"ver":"2.125","timestamp":1563818450,"method":{"parameters":{"client_id":1},"name":"competitions.index","details":"competitions.index","total_items":2,"previous_page":"","next_page":""},"data":{"competitions":[{"id":5806,"name":"Serbia & Montenegro","short_name":"Serbia & Montenegro","mini_name":"mnb","gender":"male","type":"country_league","area_id":1,"area_name":"Afghanistan","area_type":"country","area_sort":2,"area_code":"AFG","overall_sort":50,"sport_id":20,"sport_name":"Alpine skiing","tour_id":4,"tour_name":"ATP Challengers","ut":1434115672,"old_competition_id":"","slug":"serbia-&-montenegro,5806","stats_lvl":"bronze","seasons":{}},{"id":466,"name":"Brisbane (W)","short_name":"Brisbane (W)","mini_name":"BRI","gender":"female","type":"single","area_id":14,"area_name":"Australia","area_type":"international","area_sort":1,"area_code":"AUS","overall_sort":50,"sport_id":4,"sport_name":"Tennis","tour_id":2,"tour_name":"WTA Tour","ut":1455090924,"old_competition_id":"","slug":"brisbane-w,466","stats_lvl":"bronze","seasons":{}}]}}}';

        $response = new Response(HttpFoundationResponse::HTTP_OK, ['Content-Type' => 'application/json'], $response);

        $this->guzzle->shouldReceive('request')->andReturn($response);

        $responseDTO = $this->competitionsService->getAll();

        $this->assertEquals('competitions.index', $responseDTO->getMethod()->getDetails());
        $this->assertEquals('competitions.index', $responseDTO->getMethod()->getName());
        $this->assertEmpty($responseDTO->getMethod()->getNextPage());
        $this->assertEmpty($responseDTO->getMethod()->getPreviousPage());
        $this->assertArrayHasKey('client_id',$responseDTO->getMethod()->getParameters());
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
     */
    public function testCompetitionResponse(CompetitionDTO $competitionDTO)
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
}