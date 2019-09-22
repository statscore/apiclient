<?php

namespace UnitTests\Statuses;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Response;
use Statscore\Model\Response\Status\StatusDTO;
use Statscore\Service\Statuses\StatusesService;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use UnitTests\TestCase;

/**
 * Class StatusesTest
 * @package UnitTests\Statuses
 */
class StatusesTest extends TestCase
{
    /**
     * @var StatusesService
     */
    private $statusesService;

    public function setUp(): void
    {
        parent::setUp();
        $this->statusesService = new StatusesService($this->service);
    }

    /**
     * @return StatusDTO
     * @throws GuzzleException
     * @throws ExceptionInterface
     */
    public function testGetAll(): StatusDTO
    {
        $response = file_get_contents(__DIR__ . '/assets/statuses.json');

        $response = new Response(HttpFoundationResponse::HTTP_OK, ['Content-Type' => 'application/json'], $response);

        $this->guzzle->shouldReceive('request')->andReturn($response);

        $responseDTO = $this->statusesService->getAll();

        $this->assertEquals('statuses.index', $responseDTO->getMethod()->getDetails());
        $this->assertEquals('statuses.index', $responseDTO->getMethod()->getName());
        $this->assertEmpty($responseDTO->getMethod()->getPreviousPage());
        $this->assertEmpty($responseDTO->getMethod()->getNextPage());
        $this->assertEquals(1569174625, $responseDTO->getTimestamp());
        $this->assertEquals('2.125', $responseDTO->getVer());
        $this->assertEquals(338, $responseDTO->getMethod()->getTotalItems());

        $this->assertCount(338, $responseDTO->getData());
        $this->assertInstanceOf(StatusDTO::class, $responseDTO->getData()[0]);

        return $responseDTO->getData()[0];
    }

}
