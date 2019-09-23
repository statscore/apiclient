<?php

namespace UnitTests\Stages;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Response;
use Statscore\Model\Response\Competition\CompetitionDTO;
use Statscore\Service\Api;
use Statscore\Service\Stages\StagesService;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use UnitTests\TestCase;

/**
 * Class StagesTest
 * @package UnitTests\Seasons
 */
class StagesTest extends TestCase
{
    /**
     * @var StagesService
     */
    private $stagesService;

    public function setUp(): void
    {
        parent::setUp();
        $this->stagesService = new StagesService($this->service);
    }

    /**
     * @throws GuzzleException
     * @throws ExceptionInterface
     */
    public function testGet(): void
    {
        $id = 75968;
        $response = file_get_contents(__DIR__ . '/assets/stages_75968.json');

        $response = new Response(HttpFoundationResponse::HTTP_OK, ['Content-Type' => 'application/json'], $response);

        $this->guzzle->shouldReceive('request')->andReturn($response);

        $responseDTO = $this->stagesService->get($id);

        $this->assertEquals('stages.show', $responseDTO->getMethod()->getDetails());
        $this->assertEquals('stages.show', $responseDTO->getMethod()->getName());
        $this->assertEmpty($responseDTO->getMethod()->getNextPage());
        $this->assertEmpty($responseDTO->getMethod()->getPreviousPage());
        $this->assertArrayHasKey(Api::QUERY_CLIENT_ID, $responseDTO->getMethod()->getParameters());
        $this->assertArrayHasKey('stage_id', $responseDTO->getMethod()->getParameters());
        $this->assertEquals($id, $responseDTO->getMethod()->getParameters()['stage_id']);
        $this->assertEquals(1565331876, $responseDTO->getTimestamp());
        $this->assertEquals('2.125', $responseDTO->getVer());
        $this->assertEquals(1, $responseDTO->getMethod()->getTotalItems());

        $this->assertInstanceOf(CompetitionDTO::class, $responseDTO->getData());
    }
}