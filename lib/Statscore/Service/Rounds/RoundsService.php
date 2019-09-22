<?php

namespace Statscore\Service\Rounds;

use GuzzleHttp\Exception\GuzzleException;
use Statscore\Model\Request\RequestDTO;
use Statscore\Model\Response\ResponseDTO;
use Statscore\Model\Response\Round\RoundDTO;
use Statscore\Service\Api;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Exception\ExceptionInterface;

/**
 * Class RoundsService
 * @package Statscore\Service\Rounds
 */
final class RoundsService extends Api
{
    /**
     * @var string
     */
    protected $url = 'rounds';

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
                $responseDTO->getData()['rounds'] ?? [],
                RoundDTO::class . '[]'
            )
        );

        return $responseDTO;
    }
}
