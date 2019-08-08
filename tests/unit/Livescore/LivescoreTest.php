<?php

namespace UnitTests\Livescore;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Response;
use Itav\Component\Serializer\SerializerException;
use ReflectionException;
use Statscore\Model\Response\Competition\CompetitionDTO;
use Statscore\Service\Livescore\LivescoreService;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;
use UnitTests\TestCase;

/**
 * Class LivescoreTest
 * @package UnitTests\Livescore
 */
class LivescoreTest extends TestCase
{
    /**
     * @var LivescoreService
     */
    private $livescoreService;

    public function setUp(): void
    {
        parent::setUp();
        $this->livescoreService = new LivescoreService($this->service);
    }

    /**
     * @throws GuzzleException
     * @throws SerializerException
     * @throws ReflectionException
     */
    public function testGetAll(): void
    {
        $response = file_get_contents(__DIR__ . '/assets/livescore.json');

        $response = new Response(HttpFoundationResponse::HTTP_OK, ['Content-Type' => 'application/json'], $response);

        $this->guzzle->shouldReceive('request')->andReturn($response);

        $responseDTO = $this->livescoreService->getAll();

        $this->assertEquals('livescore.index', $responseDTO->getMethod()->getDetails());
        $this->assertEquals('livescore.index', $responseDTO->getMethod()->getName());
        $this->assertEmpty($responseDTO->getMethod()->getPreviousPage());
        $this->assertEmpty($responseDTO->getMethod()->getNextPage());
        $this->assertEquals(1564164813, $responseDTO->getTimestamp());
        $this->assertEquals('2.125', $responseDTO->getVer());
        $this->assertEquals(1, $responseDTO->getMethod()->getTotalItems());

        $this->assertInstanceOf(CompetitionDTO::class, $responseDTO->getData()[0]);
    }
}