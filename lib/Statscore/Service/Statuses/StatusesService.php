<?php

namespace Statscore\Service\Statuses;

use GuzzleHttp\Exception\GuzzleException;
use Statscore\Model\Request\RequestDTO;
use Statscore\Model\Response\ResponseDTO;
use Statscore\Model\Response\Status\StatusDTO;
use Statscore\Service\Api;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Exception\ExceptionInterface;

/**
 * Class StatusesService
 * @package Statscore\Service\Statuses
 */
final class StatusesService extends Api
{
    /**
     * @var string
     */
    protected $url = 'statuses';

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
                $responseDTO->getData()['statuses'] ?? [],
                StatusDTO::class . '[]'
            )
        );

        return $responseDTO;
    }
}
