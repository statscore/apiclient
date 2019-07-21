<?php

namespace Statscore\Service;

use Itav\Component\Serializer\Serializer;

/**
 * Interface InterfaceService
 * @package Statscore\ApiService
 */
interface InterfaceService
{
    /**
     * InterfaceService constructor.
     * @param ApiService $service
     * @param Serializer $serializer
     */
    public function __construct(ApiService $service, Serializer $serializer);
}