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
     * @var mixed
     */
    private $id;

    /**
     * @var null|integer
     */
    private $stageNameId;

    /**
     * @var string
     */
    private $name;

    /**
     * @var null|DateTime
     */
    private $startDate;

    /**
     * @var null|DateTime
     */
    private $endDate;

    /**
     * @var string
     */
    private $showStandings;

    /**
     * @var mixed
     */
    private $groupsNr;

    /**
     * @var mixed
     */
    private $sort;

    /**
     * @var string
     */
    private $isCurrent;

    /**
     * @var string
     */
    private $ut;

    /**
     * @var GroupDTO[]
     */
    private $groups = [];

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return null|int
     */
    public function getStageNameId(): ?int
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
     * @return null|DateTime
     */
    public function getStartDate(): ?DateTime
    {
        return $this->startDate;
    }

    /**
     * @return null|DateTime
     */
    public function getEndDate(): ?DateTime
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
     * @return mixed
     */
    public function getGroupsNr()
    {
        return $this->groupsNr;
    }

    /**
     * @return mixed
     */
    public function getSort()
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
    public function setId($id): StageDTO
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param null|int $stageNameId
     * @return StageDTO
     */
    public function setStageNameId(?int $stageNameId): StageDTO
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
     * @param null|DateTime $startDate
     * @return StageDTO
     */
    public function setStartDate(?DateTime $startDate): StageDTO
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * @param null|DateTime $endDate
     * @return StageDTO
     */
    public function setEndDate(?DateTime $endDate): StageDTO
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
     * @param mixed $groupsNr
     * @return StageDTO
     */
    public function setGroupsNr($groupsNr): StageDTO
    {
        $this->groupsNr = $groupsNr;

        return $this;
    }

    /**
     * @param mixed $sort
     * @return StageDTO
     */
    public function setSort($sort): StageDTO
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
     * @param string $ut
     * @return StageDTO
     */
    public function setUt(string $ut): StageDTO
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
