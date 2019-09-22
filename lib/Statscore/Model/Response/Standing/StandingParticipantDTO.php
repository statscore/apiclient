<?php

namespace Statscore\Model\Response\Standing;

/**
 * @package Statscore\Model\Response\Standing
 */
final class StandingParticipantDTO
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
    private $participantSlug;

    /**
     * @var integer|null
     */
    private $areaId;

    /**
     * @var string
     */
    private $areaName;

    /**
     * @var integer|null
     */
    private $rank;

    /**
     * @var integer|null
     */
    private $lastRank;

    /**
     * @var string
     */
    private $zoneName;

    /**
     * @var string
     */
    private $subparticipantId;

    /**
     * @var string
     */
    private $subparticipantName;

    /**
     * @var string
     */
    private $subparticipantSlug;

    /**
     * @var StandingColumnDTO[]
     */
    private $columns;

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
    public function getParticipantSlug(): string
    {
        return $this->participantSlug;
    }

    /**
     * @return int|null
     */
    public function getAreaId(): ?int
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
     * @return int|null
     */
    public function getRank(): ?int
    {
        return $this->rank;
    }

    /**
     * @return int|null
     */
    public function getLastRank(): ?int
    {
        return $this->lastRank;
    }

    /**
     * @return string
     */
    public function getZoneName(): string
    {
        return $this->zoneName;
    }

    /**
     * @return string
     */
    public function getSubparticipantId(): string
    {
        return $this->subparticipantId;
    }

    /**
     * @return string
     */
    public function getSubparticipantName(): string
    {
        return $this->subparticipantName;
    }

    /**
     * @return string
     */
    public function getSubparticipantSlug(): string
    {
        return $this->subparticipantSlug;
    }

    /**
     * @return StandingColumnDTO[]
     */
    public function getColumns(): array
    {
        return $this->columns;
    }

    /**
     * @param int $id
     * @return StandingParticipantDTO
     */
    public function setId(int $id): StandingParticipantDTO
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param string $name
     * @return StandingParticipantDTO
     */
    public function setName(string $name): StandingParticipantDTO
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param string $participantSlug
     * @return StandingParticipantDTO
     */
    public function setParticipantSlug(string $participantSlug): StandingParticipantDTO
    {
        $this->participantSlug = $participantSlug;

        return $this;
    }

    /**
     * @param int|null $areaId
     * @return StandingParticipantDTO
     */
    public function setAreaId(?int $areaId): StandingParticipantDTO
    {
        $this->areaId = $areaId;

        return $this;
    }

    /**
     * @param string $areaName
     * @return StandingParticipantDTO
     */
    public function setAreaName(string $areaName): StandingParticipantDTO
    {
        $this->areaName = $areaName;

        return $this;
    }

    /**
     * @param int|null $rank
     * @return StandingParticipantDTO
     */
    public function setRank(?int $rank): StandingParticipantDTO
    {
        $this->rank = $rank;

        return $this;
    }

    /**
     * @param int|null $lastRank
     * @return StandingParticipantDTO
     */
    public function setLastRank(?int $lastRank): StandingParticipantDTO
    {
        $this->lastRank = $lastRank;

        return $this;
    }

    /**
     * @param string $zoneName
     * @return StandingParticipantDTO
     */
    public function setZoneName(string $zoneName): StandingParticipantDTO
    {
        $this->zoneName = $zoneName;

        return $this;
    }

    /**
     * @param string $subparticipantId
     * @return StandingParticipantDTO
     */
    public function setSubparticipantId(string $subparticipantId): StandingParticipantDTO
    {
        $this->subparticipantId = $subparticipantId;

        return $this;
    }

    /**
     * @param string $subparticipantName
     * @return StandingParticipantDTO
     */
    public function setSubparticipantName(string $subparticipantName): StandingParticipantDTO
    {
        $this->subparticipantName = $subparticipantName;

        return $this;
    }

    /**
     * @param string $subparticipantSlug
     * @return StandingParticipantDTO
     */
    public function setSubparticipantSlug(string $subparticipantSlug): StandingParticipantDTO
    {
        $this->subparticipantSlug = $subparticipantSlug;

        return $this;
    }

    /**
     * @param StandingColumnDTO[] $columns
     * @return StandingParticipantDTO
     */
    public function setColumns(array $columns): StandingParticipantDTO
    {
        $this->columns = $columns;

        return $this;
    }
}