<?php

namespace Statscore\Service\Standings;

use GuzzleHttp\Exception\GuzzleException;
use Itav\Component\Serializer\SerializerException;
use ReflectionException;
use Statscore\Model\Request\RequestDTO;
use Statscore\Model\Response\ResponseDTO;
use Statscore\Model\Response\Standing\StandingDTO;
use Statscore\Model\Response\Standing\StandingTypeDTO;
use Statscore\Service\Api;
use Symfony\Component\HttpFoundation\Request;

/**
 * @package Statscore\Service\Standings
 */
class StandingsService extends Api
{
    /**
     * @var string
     */
    protected $url = 'standings';

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
                $responseDTO->getData()['standings_list'] ?? [],
                StandingDTO::class . '[]')
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
                $responseDTO->getData()['standings'] ?? [],
                StandingDTO::class)
        );

        return $responseDTO;
    }

    /**
     * @param int $sportId
     * @param array $query
     * @return ResponseDTO
     * @throws GuzzleException
     * @throws ReflectionException
     * @throws SerializerException
     */
    public function types(int $sportId, array $query = []): ResponseDTO
    {
        $request = new RequestDTO();
        $request->setUri('standings-types');
        $request->setMethod(Request::METHOD_GET);
        $request->setQuery($query);
        $request->addQuery('sport_id', $sportId);

        $responseDTO = $this->service->request($request);
        $responseDTO->setData(
            $this->serializer->denormalize(
                $responseDTO->getData()['standings_types'] ?? [],
                StandingTypeDTO::class . '[]')
        );

        return $responseDTO;
    }
}