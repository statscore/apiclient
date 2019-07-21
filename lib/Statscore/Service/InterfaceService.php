<?php

namespace Statscore\Service;

/**
 * Interface InterfaceService
 * @package Statscore\ApiService
 */
interface InterfaceService
{
    /**
     * InterfaceService constructor.
     * @param ApiService $service
     */
    public function __construct(ApiService $service);
}