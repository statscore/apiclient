<?php

namespace UnitTests\Languages;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Response;
use Itav\Component\Serializer\SerializerException;
use Statscore\Model\Response\Incident\IncidentDTO;
use Statscore\Model\Response\Language\LanguageDTO;
use Statscore\Service\Incidents\IncidentsService;
use Statscore\Service\Languages\LanguagesServices;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;
use UnitTests\TestCase;

/**
 * Class LanguagesTest
 * @package UnitTests\Languages
 */
class LanguagesTest extends TestCase
{
    /**
     * @var IncidentsService
     */
    private $languagesService;

    public function setUp(): void
    {
        parent::setUp();
        $this->languagesService = new LanguagesServices($this->service);
    }

    /**
     * @return LanguageDTO
     * @throws SerializerException
     * @throws GuzzleException
     */
    public function testGetAll(): LanguageDTO
    {
        $response = file_get_contents(__DIR__ . '/assets/languages.json');

        $response = new Response(HttpFoundationResponse::HTTP_OK, ['Content-Type' => 'application/json'], $response);

        $this->guzzle->shouldReceive('request')->andReturn($response);

        $responseDTO = $this->languagesService->getAll();

        $this->assertEquals('languages.index', $responseDTO->getMethod()->getDetails());
        $this->assertEquals('languages.index', $responseDTO->getMethod()->getName());
        $this->assertEmpty($responseDTO->getMethod()->getPreviousPage());
        $this->assertEmpty($responseDTO->getMethod()->getNextPage());
        $this->assertEquals(1564163634, $responseDTO->getTimestamp());
        $this->assertEquals('2.125', $responseDTO->getVer());
        $this->assertEquals(39, $responseDTO->getMethod()->getTotalItems());

        $this->assertInstanceOf(LanguageDTO::class, $responseDTO->getData()[0]);

        return $responseDTO->getData()[0];
    }

    /**
     * @param LanguageDTO $languageDTO
     * @depends testGetAll
     */
    public function testLanguageResponse(LanguageDTO $languageDTO): void
    {
        $this->assertEquals(1, $languageDTO->getId());
        $this->assertEquals('en', $languageDTO->getCode());
        $this->assertEquals('English', $languageDTO->getName());
        $this->assertEquals('English', $languageDTO->getOriginalName());
        $this->assertEquals('yes', $languageDTO->getActive());
        $this->assertEquals(1415800837, $languageDTO->getUt());
    }
}