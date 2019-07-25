<?php

namespace Statscore\Model\Response\Season;

use Statscore\Model\Response\Stage\StageDTO;

/**
 * Class SeasonDTO
 * @package Statscore\Model\Response\Season
 */
class SeasonDTO
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $year;

    /**
     * @var string
     */
    private $actual;

    /**
     * @var string
     */
    private $ut;

    /**
     * @var integer
     */
    private $rangeLevel;

    /**
     * @var string
     */
    private $statsLvl;

    /**
     * @var \Statscore\Model\Response\Stage\StageDTO[]
     */
    private $stages = [];

    /**
     * @var \Statscore\Model\Response\Stage\StageDTO
     */
    private $stage;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getYear(): int
    {
        return $this->year;
    }

    /**
     * @return string
     */
    public function getActual(): string
    {
        return $this->actual;
    }

    /**
     * @return string
     */
    public function getUt(): string
    {
        return $this->ut;
    }

    /**
     * @return int
     */
    public function getRangeLevel(): int
    {
        return $this->rangeLevel;
    }

    /**
     * @return string
     */
    public function getStatsLvl(): string
    {
        return $this->statsLvl;
    }

    /**
     * @return StageDTO[]
     */
    public function getStages(): array
    {
        return $this->stages;
    }

    /**
     * @return StageDTO
     */
    public function getStage(): StageDTO
    {
        return $this->stage;
    }
}