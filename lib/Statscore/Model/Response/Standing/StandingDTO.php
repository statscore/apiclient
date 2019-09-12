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
     * @var int
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
     * @return int
     */
    public function getUt(): int
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

    /**
     * @param int $id
     * @return StandingDTO
     */
    public function setId(int $id): StandingDTO
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param string $name
     * @return StandingDTO
     */
    public function setName(string $name): StandingDTO
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param int $sportId
     * @return StandingDTO
     */
    public function setSportId(int $sportId): StandingDTO
    {
        $this->sportId = $sportId;

        return $this;
    }

    /**
     * @param string $sportName
     * @return StandingDTO
     */
    public function setSportName(string $sportName): StandingDTO
    {
        $this->sportName = $sportName;

        return $this;
    }

    /**
     * @param int $typeId
     * @return StandingDTO
     */
    public function setTypeId(int $typeId): StandingDTO
    {
        $this->typeId = $typeId;

        return $this;
    }

    /**
     * @param string $typeName
     * @return StandingDTO
     */
    public function setTypeName(string $typeName): StandingDTO
    {
        $this->typeName = $typeName;

        return $this;
    }

    /**
     * @param string $subtype
     * @return StandingDTO
     */
    public function setSubtype(string $subtype): StandingDTO
    {
        $this->subtype = $subtype;

        return $this;
    }

    /**
     * @param int $objectId
     * @return StandingDTO
     */
    public function setObjectId(int $objectId): StandingDTO
    {
        $this->objectId = $objectId;

        return $this;
    }

    /**
     * @param string $objectType
     * @return StandingDTO
     */
    public function setObjectType(string $objectType): StandingDTO
    {
        $this->objectType = $objectType;

        return $this;
    }

    /**
     * @param string $objectName
     * @return StandingDTO
     */
    public function setObjectName(string $objectName): StandingDTO
    {
        $this->objectName = $objectName;

        return $this;
    }

    /**
     * @param string $itemStatus
     * @return StandingDTO
     */
    public function setItemStatus(string $itemStatus): StandingDTO
    {
        $this->itemStatus = $itemStatus;

        return $this;
    }

    /**
     * @param string $resetGroupRank
     * @return StandingDTO
     */
    public function setResetGroupRank(string $resetGroupRank): StandingDTO
    {
        $this->resetGroupRank = $resetGroupRank;

        return $this;
    }

    /**
     * @param int $competitionId
     * @return StandingDTO
     */
    public function setCompetitionId(int $competitionId): StandingDTO
    {
        $this->competitionId = $competitionId;

        return $this;
    }

    /**
     * @param int $seasonId
     * @return StandingDTO
     */
    public function setSeasonId(int $seasonId): StandingDTO
    {
        $this->seasonId = $seasonId;

        return $this;
    }

    /**
     * @param int $stageId
     * @return StandingDTO
     */
    public function setStageId(int $stageId): StandingDTO
    {
        $this->stageId = $stageId;

        return $this;
    }

    /**
     * @param int $ut
     * @return StandingDTO
     */
    public function setUt(int $ut): StandingDTO
    {
        $this->ut = $ut;

        return $this;
    }

    /**
     * @param StandingGroupDTO[] $groups
     * @return StandingDTO
     */
    public function setGroups(array $groups): StandingDTO
    {
        $this->groups = $groups;

        return $this;
    }


}