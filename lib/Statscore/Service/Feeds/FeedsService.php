<?php

namespace Statscore\Service\Feeds;

use GuzzleHttp\Exception\GuzzleException;
use Statscore\Model\Request\RequestDTO;
use Statscore\Model\Response\Feed\FeedDTO;
use Statscore\Model\Response\ResponseDTO;
use Statscore\Service\Api;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Exception\ExceptionInterface;

/**
 * Class FeedsService
 * @package Statscore\Service\Feeds
 */
final class FeedsService extends Api
{
    /**
     * @var string
     */
    protected $url = 'feed';

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
                $responseDTO->getData() ?? [],
                FeedDTO::class . '[]')
        );

        return $responseDTO;
    }

    /**
     * @param int $eventId
     * @param array $query
     * @return ResponseDTO
     * @throws ExceptionInterface
     * @throws GuzzleException
     */
    public function get(int $eventId, array $query = []): ResponseDTO
    {
        $this->url .= '/' . $eventId;

        return $this->getAll($query);
    }

}