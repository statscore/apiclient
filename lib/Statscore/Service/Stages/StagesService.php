<?php

namespace Statscore\Service\Stages;

use Statscore\Service\Api;
use Statscore\Service\Competitions\CompetitionsService;

/**
 * Class StagesService
 * @package Statscore\Service\Stages
 */
final class StagesService extends CompetitionsService
{
    /**
     * @var string
     */
    protected $url = Api::ROUTE_STAGES;
}
