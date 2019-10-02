<?php

namespace Statscore\Model\Response\Competition;

use Statscore\Model\Response\Season\SeasonDTO;

/**
 * Class CompetitionDTO
 * @package Statscore\Model\Response\Competition
 */
final class CompetitionDTO
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
     * @var string|null
     */
    private $tourId;

    /**
     * @var string
     */
    private $tourName;

    /**
     * @var integer
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
     * @var SeasonDTO[]
     */
    private $seasons;

    /**
     * @var SeasonDTO
     */
    private $season;

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
     * @return string|null
     */
    public function getTourId(): ?string
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
     * @return integer
     */
    public function getUt(): int
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
     * @return SeasonDTO[]
     */
    public function getSeasons(): array
    {
        return $this->seasons;
    }

    /**
     * @return SeasonDTO
     */
    public function getSeason(): SeasonDTO
    {
        return $this->season;
    }

    /**
     * @param int $id
     * @return CompetitionDTO
     */
    public function setId(int $id): CompetitionDTO
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param string $name
     * @return CompetitionDTO
     */
    public function setName(string $name): CompetitionDTO
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param string $shortName
     * @return CompetitionDTO
     */
    public function setShortName(string $shortName): CompetitionDTO
    {
        $this->shortName = $shortName;

        return $this;
    }

    /**
     * @param string $miniName
     * @return CompetitionDTO
     */
    public function setMiniName(string $miniName): CompetitionDTO
    {
        $this->miniName = $miniName;

        return $this;
    }

    /**
     * @param string $gender
     * @return CompetitionDTO
     */
    public function setGender(string $gender): CompetitionDTO
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * @param string $type
     * @return CompetitionDTO
     */
    public function setType(string $type): CompetitionDTO
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @param int $areaId
     * @return CompetitionDTO
     */
    public function setAreaId(int $areaId): CompetitionDTO
    {
        $this->areaId = $areaId;

        return $this;
    }

    /**
     * @param string $areaName
     * @return CompetitionDTO
     */
    public function setAreaName(string $areaName): CompetitionDTO
    {
        $this->areaName = $areaName;

        return $this;
    }

    /**
     * @param string $areaType
     * @return CompetitionDTO
     */
    public function setAreaType(string $areaType): CompetitionDTO
    {
        $this->areaType = $areaType;

        return $this;
    }

    /**
     * @param int $areaSort
     * @return CompetitionDTO
     */
    public function setAreaSort(int $areaSort): CompetitionDTO
    {
        $this->areaSort = $areaSort;

        return $this;
    }

    /**
     * @param string $areaCode
     * @return CompetitionDTO
     */
    public function setAreaCode(string $areaCode): CompetitionDTO
    {
        $this->areaCode = $areaCode;

        return $this;
    }

    /**
     * @param int $overallSort
     * @return CompetitionDTO
     */
    public function setOverallSort(int $overallSort): CompetitionDTO
    {
        $this->overallSort = $overallSort;

        return $this;
    }

    /**
     * @param int $sportId
     * @return CompetitionDTO
     */
    public function setSportId(int $sportId): CompetitionDTO
    {
        $this->sportId = $sportId;

        return $this;
    }

    /**
     * @param string $sportName
     * @return CompetitionDTO
     */
    public function setSportName(string $sportName): CompetitionDTO
    {
        $this->sportName = $sportName;

        return $this;
    }

    /**
     * @param string|null $tourId
     * @return CompetitionDTO
     */
    public function setTourId(?string $tourId): CompetitionDTO
    {
        $this->tourId = $tourId;

        return $this;
    }

    /**
     * @param string $tourName
     * @return CompetitionDTO
     */
    public function setTourName(string $tourName): CompetitionDTO
    {
        $this->tourName = $tourName;

        return $this;
    }

    /**
     * @param int $ut
     * @return CompetitionDTO
     */
    public function setUt(int $ut): CompetitionDTO
    {
        $this->ut = $ut;

        return $this;
    }

    /**
     * @param string $slug
     * @return CompetitionDTO
     */
    public function setSlug(string $slug): CompetitionDTO
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * @param string $statsLvl
     * @return CompetitionDTO
     */
    public function setStatsLvl(string $statsLvl): CompetitionDTO
    {
        $this->statsLvl = $statsLvl;

        return $this;
    }

    /**
     * @param SeasonDTO[] $seasons
     * @return CompetitionDTO
     */
    public function setSeasons(array $seasons): CompetitionDTO
    {
        $this->seasons = $seasons;

        return $this;
    }

    /**
     * @param SeasonDTO $season
     * @return CompetitionDTO
     */
    public function setSeason(SeasonDTO $season): CompetitionDTO
    {
        $this->season = $season;

        return $this;
    }
}
