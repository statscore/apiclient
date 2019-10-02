<?php

namespace UnitTests\Incidents;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Response;
use Statscore\Model\Response\Incident\IncidentDTO;
use Statscore\Service\Incidents\IncidentsService;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use UnitTests\TestCase;

/**
 * Class IncidentsTest
 * @package UnitTests\Incidents
 */
class IncidentsTest extends TestCase
{
    /**
     * @var IncidentsService
     */
    private $incidentsService;

    public function setUp(): void
    {
        parent::setUp();
        $this->incidentsService = new IncidentsService($this->service);
    }

    /**
     * @return IncidentDTO
     * @throws GuzzleException
     * @throws ExceptionInterface
     */
    public function testGetAll(): IncidentDTO
    {
        $response = file_get_contents(__DIR__ . '/assets/incidents.json');

        $response = new Response(HttpFoundationResponse::HTTP_OK, ['Content-Type' => 'application/json'], $response);

        $this->guzzle->shouldReceive('request')->andReturn($response);

        $responseDTO = $this->incidentsService->getAll();

        $this->assertEquals('incidents.index', $responseDTO->getMethod()->getDetails());
        $this->assertEquals('incidents.index', $responseDTO->getMethod()->getName());
        $this->assertEmpty($responseDTO->getMethod()->getPreviousPage());
        $this->assertEquals('http://dev.api.statscore.com/v2/incidents?page=2', $responseDTO->getMethod()->getNextPage());
        $this->assertEquals(1564163275, $responseDTO->getTimestamp());
        $this->assertEquals('2.125', $responseDTO->getVer());
        $this->assertEquals(1390, $responseDTO->getMethod()->getTotalItems());

        $this->assertInstanceOf(IncidentDTO::class, $responseDTO->getData()[0]);

        return $responseDTO->getData()[0];
    }

    /**
     * @param IncidentDTO $incidentDTO
     * @depends testGetAll
     */
    public function testIncidentResponse(IncidentDTO $incidentDTO): void
    {
        $this->assertEquals(2, $incidentDTO->getId());
        $this->assertEquals('TV timeout', $incidentDTO->getName());
        $this->assertEquals('tv-timeout', $incidentDTO->getCode());
        $this->assertEquals('no', $incidentDTO->getImportant());
        $this->assertEquals('no', $incidentDTO->getImportantForTrader());
        $this->assertEquals(7, $incidentDTO->getSportId());
        $this->assertEquals('event', $incidentDTO->getType());
        $this->assertEquals('none', $incidentDTO->getFor());
        $this->assertEquals(null, $incidentDTO->getGroup());
        $this->assertEquals('no', $incidentDTO->getDetails());
        $this->assertEquals('yes', $incidentDTO->getGameBreak());
        $this->assertEquals(1484735880, $incidentDTO->getUt());
    }
}
