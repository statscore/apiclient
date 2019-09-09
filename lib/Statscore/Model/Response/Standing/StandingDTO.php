<?php

namespace Statscore\Model\Response\Standing;

/**
 * @package Statscore\Model\Response\Standing
 */
class StandingDTO
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
    private $sportId;

    /**
     * @var string
     */
    private $sportName;

    /**
     * @var integer
     */
    private $typeId;

    /**
     * @var string
     */
    private $typeName;

    /**
     * @var string
     */
    private $subtype;

    /**
     * @var integer
     */
    private $objectId;

    /**
     * @var string
     */
    private $objectType;

    /**
     * @var string
     */
    private $objectName;

    /**
     * @var string
     */
    private $itemStatus;

    /**
     * @var string
     */
    private $resetGroupRank;

    /**
     * @var integer
     */
    private $competitionId;

    /**
     * @var integer
     */
    private $seasonId;

    /**
     * @var integer
     */
    private $stageId;

    /**
     * @var string
     */
    private $ut;

    /**
     * @var StandingGroupDTO[]
     */
    private $groups;

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
    public function getTypeId(): int
    {
        return $this->typeId;
    }

    /**
     * @return string
     */
    public function getTypeName(): string
    {
        return $this->typeName;
    }

    /**
     * @return string
     */
    public function getSubtype(): string
    {
        return $this->subtype;
    }

    /**
     * @return int
     */
    public function getObjectId(): int
    {
        return $this->objectId;
    }

    /**
     * @return string
     */
    public function getObjectType(): string
    {
        return $this->objectType;
    }

    /**
     * @return string
     */
    public function getObjectName(): string
    {
        return $this->objectName;
    }

    /**
     * @return string
     */
    public function getItemStatus(): string
    {
        return $this->itemStatus;
    }

    /**
     * @return string
     */
    public function getResetGroupRank(): string
    {
        return $this->resetGroupRank;
    }

    /**
     * @return int
     */
    public function getCompetitionId(): int
    {
        return $this->competitionId;
    }

    /**
     * @return int
     */
    public function getSeasonId(): int
    {
        return $this->seasonId;
    }

    /**
     * @return int
     */
    public function getStageId(): int
    {
        return $this->stageId;
    }

    /**
     * @return string
     */
    public function getUt(): string
    {
        return $this->ut;
    }

    /**
     * @return \Statscore\Model\Response\Standing\StandingGroupDTO[]
     */
    public function getGroups(): array
    {
        return $this->groups;
    }
}