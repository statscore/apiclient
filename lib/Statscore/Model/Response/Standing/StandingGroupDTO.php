<?php

namespace Statscore\Model\Response\Standing;

/**
 * @package Statscore\Model\Response\Standing
 */
class StandingGroupDTO
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
    private $ut;

    /**
     * @var StandingParticipantDTO[]
     */
    private $participants;

    /**
     * @var StandingZoneDTO[]
     */
    private $zones;

    /**
     * @var StandingCorrectionDTO[]
     */
    private $corrections;

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
     * @return integer
     */
    public function getUt(): int
    {
        return $this->ut;
    }

    /**
     * @return StandingParticipantDTO[]
     */
    public function getParticipants(): array
    {
        return $this->participants;
    }

    /**
     * @return StandingZoneDTO[]
     */
    public function getZones(): array
    {
        return $this->zones;
    }

    /**
     * @return StandingCorrectionDTO[]
     */
    public function getCorrections(): array
    {
        return $this->corrections;
    }

    /**
     * @param int $id
     * @return StandingGroupDTO
     */
    public function setId(int $id): StandingGroupDTO
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param string $name
     * @return StandingGroupDTO
     */
    public function setName(string $name): StandingGroupDTO
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param int $ut
     * @return StandingGroupDTO
     */
    public function setUt(int $ut): StandingGroupDTO
    {
        $this->ut = $ut;

        return $this;
    }

    /**
     * @param StandingParticipantDTO[] $participants
     * @return StandingGroupDTO
     */
    public function setParticipants(array $participants): StandingGroupDTO
    {
        $this->participants = $participants;

        return $this;
    }

    /**
     * @param StandingZoneDTO[] $zones
     * @return StandingGroupDTO
     */
    public function setZones(array $zones): StandingGroupDTO
    {
        $this->zones = $zones;

        return $this;
    }

    /**
     * @param StandingCorrectionDTO[] $corrections
     * @return StandingGroupDTO
     */
    public function setCorrections(array $corrections): StandingGroupDTO
    {
        $this->corrections = $corrections;

        return $this;
    }
}