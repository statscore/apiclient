<?php

namespace Statscore\Service;

use Itav\Component\Serializer\Serializer;

abstract class Api
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
     */
    public function __construct(ApiService $service)
    {
        $this->service = $service;
        $this->serializer = $service->serializer;
    }

}