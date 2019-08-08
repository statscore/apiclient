<?php

namespace Statscore\Service\Livescore;

use Statscore\Service\Competitions\CompetitionsService;

/**
 * Class LivescoreService
 * @package Statscore\Service\Livescore
 */
class LivescoreService extends CompetitionsService
{
    /**
     * @var string
     */
    protected $url = 'livescore';
}
