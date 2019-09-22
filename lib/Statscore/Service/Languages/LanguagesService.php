<?php

namespace Statscore\Service\Languages;

use GuzzleHttp\Exception\GuzzleException;
use Statscore\Model\Request\RequestDTO;
use Statscore\Model\Response\Language\LanguageDTO;
use Statscore\Model\Response\ResponseDTO;
use Statscore\Service\Api;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Exception\ExceptionInterface;

/**
 * Class LanguagesService
 * @package Statscore\Service\Lanugages
 */
final class LanguagesService extends Api
{
    /**
     * @var string
     */
    protected $url = 'languages';

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
                $responseDTO->getData()['languages'] ?? [],
                LanguageDTO::class . '[]'
            )
        );

        return $responseDTO;
    }
}
