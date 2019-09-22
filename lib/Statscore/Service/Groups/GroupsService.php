<?php

namespace Statscore\Service\Groups;

use GuzzleHttp\Exception\GuzzleException;
use Statscore\Model\Request\RequestDTO;
use Statscore\Model\Response\Competition\CompetitionDTO;
use Statscore\Model\Response\ResponseDTO;
use Statscore\Service\Api;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Exception\ExceptionInterface;

/**
 * Class GroupsService
 * @package Statscore\Service\Groups
 */
class GroupsService extends Api
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
     * @throws ExceptionInterface
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
                CompetitionDTO::class
            )
        );

        return $responseDTO;
    }
}
