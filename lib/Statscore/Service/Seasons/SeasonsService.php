<?php

namespace Statscore\Service\Seasons;

use Statscore\Service\Competitions\CompetitionsService;

/**
 * Class SeasonsService
 * @package Statscore\Service\Seasons
 */
class SeasonsService extends CompetitionsService
{
    /**
     * @var string
     */
    protected $url = 'seasons';
}
