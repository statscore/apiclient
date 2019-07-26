<?php

namespace Statscore\Service\Livescore;

use Statscore\Service\Competitions\CompetitionsService;
use Statscore\Service\InterfaceService;

/**
 * Class LivescoreService
 * @package Statscore\Service\Livescore
 */
class LivescoreService extends CompetitionsService implements InterfaceService
{
    /**
     * @var string
     */
    protected $url = 'livescore';
}
