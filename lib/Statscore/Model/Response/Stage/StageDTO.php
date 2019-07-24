<?php

namespace Statscore\Model\Response\Stage;

use DateTime;
use Statscore\Model\Response\Group\GroupDTO;

/**
 * Class StageDTO
 * @package Statscore\Model\Response\Stage
 */
class StageDTO
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
     * @var string
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
}
