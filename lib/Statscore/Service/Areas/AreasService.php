<?php

namespace Statscore\Service\Areas;

use GuzzleHttp\Exception\GuzzleException;
use Statscore\Model\Request\RequestDTO;
use Statscore\Model\Response\Area\AreaDTO;
use Statscore\Model\Response\ResponseDTO;
use Statscore\Service\Api;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Exception\ExceptionInterface;

/**
 * Class AreasService
 * @package Statscore\Service\Areas
 */
final class AreasService extends Api
{

    /**
     * @param array $query
     * @return ResponseDTO
     * @throws GuzzleException
     * @throws ExceptionInterface
     */
    public function getAll(array $query = []): ResponseDTO
    {
        $request = new RequestDTO();
        $request->setUri(Api::ROUTE_AREAS);
        $request->setMethod(Request::METHOD_GET);
        $request->setQuery($query);

        $responseDTO = $this->service->request($request);
        $responseDTO->setData(
            $this->serializer->denormalize(
                $responseDTO->getData()[Api::ROUTE_AREAS] ?? [],
                AreaDTO::class . '[]'
            )
        );

        return $responseDTO;
    }
}
