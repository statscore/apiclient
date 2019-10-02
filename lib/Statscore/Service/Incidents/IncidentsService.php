<?php

namespace Statscore\Service\Incidents;

use GuzzleHttp\Exception\GuzzleException;
use Statscore\Model\Request\RequestDTO;
use Statscore\Model\Response\Incident\IncidentDTO;
use Statscore\Model\Response\ResponseDTO;
use Statscore\Service\Api;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Exception\ExceptionInterface;

/**
 * Class IncidentsService
 * @package Statscore\Service\Incidents
 */
final class IncidentsService extends Api
{
    /**
     * @var string
     */
    protected $url = Api::ROUTE_INCIDENTS;

    /**
     * @param array $query
     * @return ResponseDTO
     * @throws GuzzleException
     * @throws ExceptionInterface
     */
    public function getAll(array $query = []): ResponseDTO
    {
        $request = new RequestDTO();
        $request->setUri($this->url);
        $request->setMethod(Request::METHOD_GET);
        $request->setQuery($query);

        $responseDTO = $this->service->request($request);
        $responseDTO->setData(
            $this->serializer->denormalize(
                $responseDTO->getData()[Api::ROUTE_INCIDENTS] ?? [],
                IncidentDTO::class . '[]'
            )
        );

        return $responseDTO;
    }
}
