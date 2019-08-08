<?php

namespace Statscore\Service\Languages;

use GuzzleHttp\Exception\GuzzleException;
use Itav\Component\Serializer\SerializerException;
use ReflectionException;
use Statscore\Model\Request\RequestDTO;
use Statscore\Model\Response\Language\LanguageDTO;
use Statscore\Model\Response\ResponseDTO;
use Statscore\Service\AbstractService;
use Statscore\Service\InterfaceService;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class LanguagesService
 * @package Statscore\Service\Lanugages
 */
class LanguagesService extends AbstractService implements InterfaceService
{
    /**
     * @var string
     */
    protected $url = 'languages';

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
                $responseDTO->getData()['languages'] ?? [],
                LanguageDTO::class . '[]')
        );

        return $responseDTO;
    }
}
