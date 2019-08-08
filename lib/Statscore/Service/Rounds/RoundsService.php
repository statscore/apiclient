<?php

namespace Statscore\Service\Rounds;

use GuzzleHttp\Exception\GuzzleException;
use Itav\Component\Serializer\SerializerException;
use ReflectionException;
use Statscore\Model\Request\RequestDTO;
use Statscore\Model\Response\ResponseDTO;
use Statscore\Model\Response\Round\RoundDTO;
use Statscore\Service\AbstractService;
use Statscore\Service\InterfaceService;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class RoundsService
 * @package Statscore\Service\Rounds
 */
class RoundsService extends AbstractService implements InterfaceService
{
    /**
     * @var string
     */
    protected $url = 'rounds';

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
                $responseDTO->getData()['rounds'] ?? [],
                RoundDTO::class . '[]')
        );

        return $responseDTO;
    }
}
