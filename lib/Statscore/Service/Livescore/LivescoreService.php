<?php

namespace Statscore\Service\Livescore;

use Statscore\Service\Competitions\CompetitionsService;

/**
 * Class LivescoreService
 * @package Statscore\Service\Livescore
 */
final class LivescoreService extends CompetitionsService
{
    /**
     * @var string
     */
    protected $url = 'livescore';
}
