<?php

namespace Statscore\Service\BookedEvents;

use GuzzleHttp\Exception\GuzzleException;
use Statscore\Model\Request\RequestDTO;
use Statscore\Model\Response\BookedEvent\BookedEventDTO;
use Statscore\Model\Response\ResponseDTO;
use Statscore\Service\Api;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Exception\ExceptionInterface;

/**
 * Class BookedEventsService
 * @package Statscore\Service\BookedEvents
 */
final class BookedEventsService extends Api
{
    /**
     * @var string
     */
    protected $url = Api::ROUTE_BOOKED_EVENTS;

    /**
     * @param int $clientId
     * @param string $product
     * @param array $query
     * @return ResponseDTO
     * @throws ExceptionInterface
     * @throws GuzzleException
     */
    public function getAll(int $clientId, string $product, array $query = []): ResponseDTO
    {
        $request = new RequestDTO();
        $request->setUri($this->url);
        $request->setMethod(Request::METHOD_GET);
        $request->setQuery($query);
        $request->addQuery(Api::QUERY_CLIENT_ID, $clientId);
        $request->addQuery(Api::QUERY_PRODUCT, $product);

        $responseDTO = $this->service->request($request);
        $responseDTO->setData(
            $this->serializer->denormalize(
                $responseDTO->getData()['booked_events'] ?? [],
                BookedEventDTO::class . '[]'
            )
        );

        return $responseDTO;
    }

    /**
     * @param int $clientId
     * @param string $product
     * @param int $eventId
     * @param array $query
     * @return ResponseDTO
     * @throws ExceptionInterface
     * @throws GuzzleException
     */
    public function create(int $clientId, string $product, int $eventId, array $query = []): ResponseDTO
    {
        $request = new RequestDTO();
        $request->setUri($this->url);
        $request->setMethod(Request::METHOD_POST);
        $request->setQuery($query);
        $request->addQuery(Api::QUERY_CLIENT_ID, $clientId);
        $request->addQuery(Api::QUERY_PRODUCT, $product);
        $request->addQuery(Api::QUERY_EVENT_ID, $eventId);

        $responseDTO = $this->service->request($request);

        $responseDTO->setData(
            $this->serializer->denormalize(
                $responseDTO->getData() ?? [],
                BookedEventDTO::class . '[]'
            )
        );

        return $responseDTO;
    }

    /**
     * @param int $clientId
     * @param string $product
     * @param int $eventId
     * @param array $query
     * @return ResponseDTO
     * @throws ExceptionInterface
     * @throws GuzzleException
     */
    public function delete(int $clientId, string $product, int $eventId, array $query = []): ResponseDTO
    {
        $request = new RequestDTO();
        $request->setUri($this->url . '/' . $eventId);
        $request->setMethod(Request::METHOD_DELETE);
        $request->setQuery($query);
        $request->addQuery(Api::QUERY_CLIENT_ID, $clientId);
        $request->addQuery(Api::QUERY_PRODUCT, $product);

        return $this->service->request($request);
    }
}
