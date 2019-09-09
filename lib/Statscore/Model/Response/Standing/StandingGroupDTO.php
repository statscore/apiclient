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
     * @var string
     */
    private $ut;

    /**
     * @var \Statscore\Model\Response\Standing\StandingParticipantDTO[]
     */
    private $participants;

    /**
     * @var \Statscore\Model\Response\Standing\StandingZoneDTO[]
     */
    private $zones;

    /**
     * @var \Statscore\Model\Response\Standing\StandingCorrectionDTO[]
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
     * @return string
     */
    public function getUt(): string
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
}