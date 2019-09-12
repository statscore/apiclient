<?php

namespace UnitTests\Groups;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Response;
use ReflectionException;
use Statscore\Model\Response\Competition\CompetitionDTO;
use Statscore\Model\Response\Season\SeasonDTO;
use Statscore\Model\Response\Stage\StageDTO;
use Statscore\Service\Groups\GroupsService;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;
use UnitTests\TestCase;

/**
 * Class GroupsTest
 * @package UnitTests\Groups
 */
class GroupsTest extends TestCase
{
    /**
     * @var GroupsService
     */
    private $groupsService;

    public function setUp(): void
    {
        parent::setUp();
        $this->groupsService = new GroupsService($this->service);
    }

    /**
     * @return CompetitionDTO
     * @throws GuzzleException
     * @throws ReflectionException
     */
    public function testGet(): CompetitionDTO
    {
        $stageId = 75968;

        $response = file_get_contents(__DIR__ . '/assets/groups_75968.json');

        $response = new Response(HttpFoundationResponse::HTTP_OK, ['Content-Type' => 'application/json'], $response);

        $this->guzzle->shouldReceive('request')->andReturn($response);

        $responseDTO = $this->groupsService->get($stageId);

        $this->assertEquals('groups.index', $responseDTO->getMethod()->getDetails());
        $this->assertEquals('groups.index', $responseDTO->getMethod()->getName());
        $this->assertEmpty($responseDTO->getMethod()->getNextPage());
        $this->assertEmpty($responseDTO->getMethod()->getPreviousPage());
        $this->assertEquals(1564085809, $responseDTO->getTimestamp());
        $this->assertEquals('2.125', $responseDTO->getVer());
        $this->assertEquals(0, $responseDTO->getMethod()->getTotalItems());

        $this->assertInstanceOf(CompetitionDTO::class, $responseDTO->getData());

        return $responseDTO->getData();
    }

    /**
     * @param CompetitionDTO $competitionDTO
     * @depends testGet
     */
    public function testCompetitionResponse(CompetitionDTO $competitionDTO): void
    {
        $this->assertInstanceOf(SeasonDTO::class, $competitionDTO->getSeason());
        $this->assertInstanceOf(StageDTO::class, $competitionDTO->getSeason()->getStage());
    }
}