<?php

namespace Statscore\Model\Response\Season;

use Statscore\Model\Response\Stage\StageDTO;

/**
 * Class SeasonDTO
 * @package Statscore\Model\Response\Season
 */
final class SeasonDTO
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
     * @var string
     */
    private $year;

    /**
     * @var string
     */
    private $actual;

    /**
     * @var integer
     */
    private $ut;

    /**
     * @var integer|null
     */
    private $rangeLevel;

    /**
     * @var string
     */
    private $statsLvl;

    /**
     * @var StageDTO[]
     */
    private $stages = [];

    /**
     * @var StageDTO
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
     * @return integer
     */
    public function getUt(): int
    {
        return $this->ut;
    }

    /**
     * @return int|null
     */
    public function getRangeLevel(): ?int
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

    /**
     * @param int $id
     * @return SeasonDTO
     */
    public function setId(int $id): SeasonDTO
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param string $name
     * @return SeasonDTO
     */
    public function setName(string $name): SeasonDTO
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param string $year
     * @return SeasonDTO
     */
    public function setYear(string $year): SeasonDTO
    {
        $this->year = $year;

        return $this;
    }

    /**
     * @param string $actual
     * @return SeasonDTO
     */
    public function setActual(string $actual): SeasonDTO
    {
        $this->actual = $actual;

        return $this;
    }

    /**
     * @param int $ut
     * @return SeasonDTO
     */
    public function setUt(int $ut): SeasonDTO
    {
        $this->ut = $ut;

        return $this;
    }

    /**
     * @param int|null $rangeLevel
     * @return SeasonDTO
     */
    public function setRangeLevel(?int $rangeLevel): SeasonDTO
    {
        $this->rangeLevel = $rangeLevel;

        return $this;
    }

    /**
     * @param string $statsLvl
     * @return SeasonDTO
     */
    public function setStatsLvl(string $statsLvl): SeasonDTO
    {
        $this->statsLvl = $statsLvl;

        return $this;
    }

    /**
     * @param StageDTO[] $stages
     * @return SeasonDTO
     */
    public function setStages(array $stages): SeasonDTO
    {
        $this->stages = $stages;

        return $this;
    }

    /**
     * @param StageDTO $stage
     * @return SeasonDTO
     */
    public function setStage(StageDTO $stage): SeasonDTO
    {
        $this->stage = $stage;

        return $this;
    }
}
