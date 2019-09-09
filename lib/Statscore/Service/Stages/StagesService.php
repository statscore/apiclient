<?php

namespace Statscore\Service\Stages;

use Statscore\Service\Competitions\CompetitionsService;

/**
 * Class StagesService
 * @package Statscore\Service\Stages
 */
class StagesService extends CompetitionsService
{
    /**
     * @var string
     */
    protected $url = 'stages';
}