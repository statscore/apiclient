<?php

namespace Statscore\Model\Response\Competition;

class CompetitionDTO
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
    private $shortName;

    /**
     * @var string
     */
    private $miniName;

    /**
     * @var string
     */
    private $gender;

    /**
     * @var string
     */
    private $type;

    /**
     * @var integer
     */
    private $areaId;

    /**
     * @var string
     */
    private $areaName;

    /**
     * @var string
     */
    private $areaType;

    /**
     * @var integer
     */
    private $areaSort;

    /**
     * @var string
     */
    private $areaCode;

    /**
     * @var integer
     */
    private $overallSort;

    /**
     * @var integer
     */
    private $sportId;

    /**
     * @var string
     */
    private $sportName;

    /**
     * @var integer
     */
    private $tourId;

    /**
     * @var string
     */
    private $tourName;

    /**
     * @var string
     */
    private $ut;

    /**
     * @var string
     */
    private $slug;

    /**
     * @var string
     */
    private $statsLvl;

    /**
     * @var array
     */
    private $seasons;

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
     * @return string
     */
    public function getShortName(): string
    {
        return $this->shortName;
    }

    /**
     * @return string
     */
    public function getMiniName(): string
    {
        return $this->miniName;
    }

    /**
     * @return string
     */
    public function getGender(): string
    {
        return $this->gender;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return int
     */
    public function getAreaId(): int
    {
        return $this->areaId;
    }

    /**
     * @return string
     */
    public function getAreaName(): string
    {
        return $this->areaName;
    }

    /**
     * @return string
     */
    public function getAreaType(): string
    {
        return $this->areaType;
    }

    /**
     * @return int
     */
    public function getAreaSort(): int
    {
        return $this->areaSort;
    }

    /**
     * @return string
     */
    public function getAreaCode(): string
    {
        return $this->areaCode;
    }

    /**
     * @return int
     */
    public function getOverallSort(): int
    {
        return $this->overallSort;
    }

    /**
     * @return int
     */
    public function getSportId(): int
    {
        return $this->sportId;
    }

    /**
     * @return string
     */
    public function getSportName(): string
    {
        return $this->sportName;
    }

    /**
     * @return int
     */
    public function getTourId(): int
    {
        return $this->tourId;
    }

    /**
     * @return string
     */
    public function getTourName(): string
    {
        return $this->tourName;
    }

    /**
     * @return string
     */
    public function getUt(): string
    {
        return $this->ut;
    }

    /**
     * @return string
     */
    public function getSlug(): string
    {
        return $this->slug;
    }

    /**
     * @return string
     */
    public function getStatsLvl(): string
    {
        return $this->statsLvl;
    }

    /**
     * @return array
     */
    public function getSeasons(): array
    {
        return $this->seasons;
    }
}
