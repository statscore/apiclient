<?php

namespace Statscore\Model\Response\Stage;

use DateTime;
use Statscore\Model\Response\Group\GroupDTO;

/**
 * Class StageDTO
 * @package Statscore\Model\Response\Stage
 */
final class StageDTO
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $stageNameId;

    /**
     * @var string
     */
    private $name;

    /**
     * @var DateTime
     */
    private $startDate;

    /**
     * @var DateTime
     */
    private $endDate;

    /**
     * @var string
     */
    private $showStandings;

    /**
     * @var integer
     */
    private $groupsNr;

    /**
     * @var integer
     */
    private $sort;

    /**
     * @var string
     */
    private $isCurrent;

    /**
     * @var integer
     */
    private $ut;

    /**
     * @var GroupDTO[]
     */
    private $groups = [];

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getStageNameId(): int
    {
        return $this->stageNameId;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return DateTime
     */
    public function getStartDate(): DateTime
    {
        return $this->startDate;
    }

    /**
     * @return DateTime
     */
    public function getEndDate(): DateTime
    {
        return $this->endDate;
    }

    /**
     * @return string
     */
    public function getShowStandings(): string
    {
        return $this->showStandings;
    }

    /**
     * @return int
     */
    public function getGroupsNr(): int
    {
        return $this->groupsNr;
    }

    /**
     * @return int
     */
    public function getSort(): int
    {
        return $this->sort;
    }

    /**
     * @return string
     */
    public function getIsCurrent(): string
    {
        return $this->isCurrent;
    }

    /**
     * @return string
     */
    public function getUt(): string
    {
        return $this->ut;
    }

    /**
     * @return GroupDTO[]
     */
    public function getGroups(): array
    {
        return $this->groups;
    }

    /**
     * @param int $id
     * @return StageDTO
     */
    public function setId(int $id): StageDTO
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param int $stageNameId
     * @return StageDTO
     */
    public function setStageNameId(int $stageNameId): StageDTO
    {
        $this->stageNameId = $stageNameId;

        return $this;
    }

    /**
     * @param string $name
     * @return StageDTO
     */
    public function setName(string $name): StageDTO
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param DateTime $startDate
     * @return StageDTO
     */
    public function setStartDate(DateTime $startDate): StageDTO
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * @param DateTime $endDate
     * @return StageDTO
     */
    public function setEndDate(DateTime $endDate): StageDTO
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * @param string $showStandings
     * @return StageDTO
     */
    public function setShowStandings(string $showStandings): StageDTO
    {
        $this->showStandings = $showStandings;

        return $this;
    }

    /**
     * @param int $groupsNr
     * @return StageDTO
     */
    public function setGroupsNr(int $groupsNr): StageDTO
    {
        $this->groupsNr = $groupsNr;

        return $this;
    }

    /**
     * @param int $sort
     * @return StageDTO
     */
    public function setSort(int $sort): StageDTO
    {
        $this->sort = $sort;

        return $this;
    }

    /**
     * @param string $isCurrent
     * @return StageDTO
     */
    public function setIsCurrent(string $isCurrent): StageDTO
    {
        $this->isCurrent = $isCurrent;

        return $this;
    }

    /**
     * @param int $ut
     * @return StageDTO
     */
    public function setUt(int $ut): StageDTO
    {
        $this->ut = $ut;

        return $this;
    }

    /**
     * @param GroupDTO[] $groups
     * @return StageDTO
     */
    public function setGroups(array $groups): StageDTO
    {
        $this->groups = $groups;

        return $this;
    }
}
