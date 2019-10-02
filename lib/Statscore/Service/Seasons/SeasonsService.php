<?php

namespace Statscore\Service\Seasons;

use Statscore\Service\Api;
use Statscore\Service\Competitions\CompetitionsService;

/**
 * Class SeasonsService
 * @package Statscore\Service\Seasons
 */
final class SeasonsService extends CompetitionsService
{
    /**
     * @var string
     */
    protected $url = Api::ROUTE_SEASONS;
}
