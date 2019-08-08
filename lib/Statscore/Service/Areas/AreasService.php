<?php

namespace Statscore\Service\Areas;

use GuzzleHttp\Exception\GuzzleException;
use Itav\Component\Serializer\SerializerException;
use ReflectionException;
use Statscore\Model\Request\RequestDTO;
use Statscore\Model\Response\Area\AreaDTO;
use Statscore\Model\Response\ResponseDTO;
use Statscore\Service\AbstractService;
use Statscore\Service\InterfaceService;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class AreasService
 * @package Statscore\Service\Areas
 */
class AreasService extends AbstractService implements InterfaceService
{

    /**
     * @param array $query
     * @return ResponseDTO
     * @throws GuzzleException
     * @throws SerializerException
     * @throws ReflectionException
     */
    public function getAll(array $query = []): ResponseDTO
    {
        $request = new RequestDTO();
        $request->setUri('areas');
        $request->setMethod(Request::METHOD_GET);
        $request->setQuery($query);

        $responseDTO = $this->service->request($request);
        $responseDTO->setData(
            $this->serializer->denormalize(
                $responseDTO->getData()['areas'] ?? [],
                AreaDTO::class . '[]')
        );

        return $responseDTO;
    }

}