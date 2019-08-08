<?php

namespace Statscore\Service\Seasons;

use Statscore\Service\Competitions\CompetitionsService;
use Statscore\Service\InterfaceService;

/**
 * Class SeasonsService
 * @package Statscore\Service\Seasons
 */
class SeasonsService extends CompetitionsService implements InterfaceService
{
    /**
     * @var string
     */
    protected $url = 'seasons';
}
