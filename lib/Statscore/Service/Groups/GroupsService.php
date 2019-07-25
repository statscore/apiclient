<?php

namespace Statscore\Service\Groups;

use GuzzleHttp\Exception\GuzzleException;
use Itav\Component\Serializer\SerializerException;
use Statscore\Model\Request\RequestDTO;
use Statscore\Model\Response\Competition\CompetitionDTO;
use Statscore\Model\Response\ResponseDTO;
use Statscore\Service\AbstractService;
use Statscore\Service\InterfaceService;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class GroupsService
 * @package Statscore\Service\Events
 */
class GroupsService extends AbstractService implements InterfaceService
{
    /**
     * @var string
     */
    protected $url = 'groups';

    /**
     * @param int $stageId
     * @param array $query
     * @return ResponseDTO
     * @throws GuzzleException
     * @throws SerializerException
     */
    public function get(int $stageId, array $query = []): ResponseDTO
    {
        $request = new RequestDTO();
        $request->setUri($this->url);
        $request->setMethod(Request::METHOD_GET);
        $request->setQuery($query);
        $request->addQuery('stage_id', $stageId);

        $responseDTO = $this->service->request($request);
        $responseDTO->setData(
            $this->serializer->denormalize(
                $responseDTO->getData()['competition'] ?? [],
                CompetitionDTO::class)
        );

        return $responseDTO;
    }
}
