<?php

namespace Statscore\Service\Events;

use Statscore\Service\Competitions\CompetitionsService;
use Statscore\Service\InterfaceService;

/**
 * Class EventsService
 * @package Statscore\Service\Events
 */
class EventsService extends CompetitionsService implements InterfaceService
{
    /**
     * @var string
     */
    protected $url = 'events';
}