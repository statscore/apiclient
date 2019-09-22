<?php

namespace Statscore\Service\Events;

use Statscore\Service\Competitions\CompetitionsService;

/**
 * Class EventsService
 * @package Statscore\Service\Events
 */
final class EventsService extends CompetitionsService
{
    /**
     * @var string
     */
    protected $url = 'events';
}