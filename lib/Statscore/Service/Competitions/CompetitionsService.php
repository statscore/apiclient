<?php

namespace Statscore\Service\Competitions;

use GuzzleHttp\Exception\GuzzleException;
use Itav\Component\Serializer\SerializerException;
use ReflectionException;
use Statscore\Model\Request\RequestDTO;
use Statscore\Model\Response\Competition\CompetitionDTO;
use Statscore\Model\Response\ResponseDTO;
use Statscore\Service\AbstractService;
use Statscore\Service\InterfaceService;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class CompetitionsService
 * @package Statscore\Service\Competitions
 */
class CompetitionsService extends AbstractService implements InterfaceService
{
    /**
     * @var string
     */
    protected $url = 'competitions';

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
        $request->setUri($this->url);
        $request->setMethod(Request::METHOD_GET);
        $request->setQuery($query);

        $responseDTO = $this->service->request($request);
        $responseDTO->setData(
            $this->serializer->denormalize(
                $responseDTO->getData()['competitions'] ?? [],
                CompetitionDTO::class . '[]')
        );

        return $responseDTO;
    }

    /**
     * @param int $id
     * @param array $query
     * @return ResponseDTO
     * @throws GuzzleException
     * @throws ReflectionException
     * @throws SerializerException
     */
    public function get(int $id, array $query = []): ResponseDTO
    {
        $request = new RequestDTO();
        $request->setUri($this->url . '/' . $id);
        $request->setMethod(Request::METHOD_GET);
        $request->setQuery($query);

        $responseDTO = $this->service->request($request);
        $responseDTO->setData(
            $this->serializer->denormalize(
                $responseDTO->getData()['competition'] ?? [],
                CompetitionDTO::class)
        );

        return $responseDTO;
    }

}