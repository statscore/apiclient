<?php

namespace Statscore\Service\Competitions;

use GuzzleHttp\Exception\GuzzleException;
use Statscore\Model\Request\RequestDTO;
use Statscore\Model\Response\Competition\CompetitionDTO;
use Statscore\Model\Response\ResponseDTO;
use Statscore\Service\Api;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Exception\ExceptionInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

/**
 * Class CompetitionsService
 * @package Statscore\Service\Competitions
 */
class CompetitionsService extends Api
{
    /**
     * @var string
     */
    protected $url = Api::ROUTE_COMPETITIONS;

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
                $responseDTO->getData()[Api::ROUTE_COMPETITIONS] ?? [],
                CompetitionDTO::class . '[]',
                null,
                [ObjectNormalizer::DISABLE_TYPE_ENFORCEMENT => true]
            )
        );

        return $responseDTO;
    }

    /**
     * @param int $id
     * @param array $query
     * @return ResponseDTO
     * @throws ExceptionInterface
     * @throws GuzzleException
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
                CompetitionDTO::class,
                null,
                [ObjectNormalizer::DISABLE_TYPE_ENFORCEMENT => true]
            )
        );

        return $responseDTO;
    }
}
