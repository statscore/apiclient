<?php

namespace Statscore\Model\Response\Standing;

/**
 * @package Statscore\Model\Response\Standing
 */
class StandingParticipantDTO
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
     * @var integer|null
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
     * @var \Statscore\Model\Response\Standing\StandingColumnDTO[]
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
     * @return int|null
     */
    public function getSubparticipantId(): ?int
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
}