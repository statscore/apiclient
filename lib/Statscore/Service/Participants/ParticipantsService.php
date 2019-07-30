<?php

namespace Statscore\Service\Participants;

use GuzzleHttp\Exception\GuzzleException;
use Itav\Component\Serializer\SerializerException;
use Statscore\Model\Request\RequestDTO;
use Statscore\Model\Response\Participant\ParticipantCompareDTO;
use Statscore\Model\Response\Participant\ParticipantDTO;
use Statscore\Model\Response\ResponseDTO;
use Statscore\Service\AbstractService;
use Statscore\Service\InterfaceService;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class ParticipantsService
 * @package Statscore\Service\Participants
 */
class ParticipantsService extends AbstractService implements InterfaceService
{
    /**
     * @var string
     */
    protected $url = 'participants';

    /**
     * @param int $sportId
     * @param array $query
     * @return ResponseDTO
     * @throws GuzzleException
     * @throws SerializerException
     */
    public function getAll(int $sportId, array $query = []): ResponseDTO
    {
        $request = new RequestDTO();
        $request->setUri($this->url);
        $request->setMethod(Request::METHOD_GET);
        $request->setQuery($query);
        $request->addQuery('sport_id', $sportId);

        $responseDTO = $this->service->request($request);
        $responseDTO->setData(
            $this->serializer->denormalize(
                $responseDTO->getData()['participants'] ?? [],
                ParticipantDTO::class . '[]')
        );

        return $responseDTO;
    }

    /**
     * @param int $participantId
     * @param array $query
     * @return ResponseDTO
     * @throws GuzzleException
     * @throws SerializerException
     */
    public function get(int $participantId, array $query = []): ResponseDTO
    {
        $request = new RequestDTO();
        $request->setUri($this->url . '/' . $participantId);
        $request->setMethod(Request::METHOD_GET);
        $request->setQuery($query);

        $responseDTO = $this->service->request($request);
        $responseDTO->setData(
            $this->serializer->denormalize(
                $responseDTO->getData()['participant'] ?? [],
                ParticipantDTO::class)
        );

        return $responseDTO;
    }

    /**
     * @param int $participantId
     * @param int $compareParticipantId
     * @param array $query
     * @return ResponseDTO
     * @throws GuzzleException
     * @throws SerializerException
     */
    public function compare(int $participantId, int $compareParticipantId, array $query = []): ResponseDTO
    {
        $request = new RequestDTO();
        $request->setUri($this->url . '/' . $participantId . '/compare');
        $request->setMethod(Request::METHOD_GET);
        $request->setQuery($query);
        $request->addQuery('compare_participant_id', $compareParticipantId);

        $responseDTO = $this->service->request($request);

        $responseDTO->setData(
            $this->serializer->denormalize(
                $responseDTO->getData() ?? [],
                ParticipantCompareDTO::class)
        );

        return $responseDTO;
    }
}