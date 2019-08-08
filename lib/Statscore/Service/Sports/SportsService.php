<?php

namespace Statscore\Service\Sports;

use GuzzleHttp\Exception\GuzzleException;
use Itav\Component\Serializer\SerializerException;
use ReflectionException;
use Statscore\Model\Request\RequestDTO;
use Statscore\Model\Response\ResponseDTO;
use Statscore\Model\Response\Sport\SportDTO;
use Statscore\Service\Api;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class SportsService
 * @package Statscore\Service\Sports
 */
class SportsService extends Api
{
    /**
     * @var string
     */
    protected $url = 'sports';

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
                $responseDTO->getData()['sports'] ?? [],
                SportDTO::class . '[]')
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
                $responseDTO->getData()['sport'] ?? [],
                SportDTO::class)
        );

        return $responseDTO;
    }

}
