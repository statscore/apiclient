<?php

namespace Statscore\Service\Events;

use Statscore\Service\Competitions\CompetitionsService;

/**
 * Class EventsService
 * @package Statscore\Service\Events
 */
class EventsService extends CompetitionsService
{
    /**
     * @var string
     */
    protected $url = 'events';
}