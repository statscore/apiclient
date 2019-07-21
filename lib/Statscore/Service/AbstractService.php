<?php

namespace Statscore\Service;

use Itav\Component\Serializer\Serializer;

abstract class AbstractService implements InterfaceService
{
    /**
     * @var ApiService
     */
    protected $service;

    /**
     * @var Serializer
     */
    protected $serializer;

    /**
     * AbstractService constructor.
     * @param ApiService $service
     * @param Serializer $serializer
     */
    public function __construct(ApiService $service, Serializer $serializer)
    {
        $this->service = $service;
        $this->serializer = $serializer;
    }

}