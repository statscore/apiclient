<?php

namespace Statscore\Service;

use Itav\Component\Serializer\Serializer;

/**
 * Interface InterfaceService
 * @package Statscore\Service
 */
interface InterfaceService
{
    /**
     * InterfaceService constructor.
     * @param Service $service
     * @param Serializer $serializer
     */
    public function __construct(Service $service, Serializer $serializer);
}