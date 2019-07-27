<?php

namespace Statscore\Model\Response\Participant;

/**
 * Class ParticipantCompareMatchesStatsDTO
 * @package Statscore\Model\Response\Participant
 */
class ParticipantCompareMatchesStatsDTO
{
    /**
     * @var integer|null
     */
    private $totalEventsPlayed;

    /**
     * @var integer
     */
    private $participant1Won;

    /**
     * @var integer
     */
    private $participant1Draw;

    /**
     * @var integer
     */
    private $participant1Lost;

    /**
     * @var integer
     */
    private $participant2Won;

    /**
     * @var integer
     */
    private $participant2Draw;

    /**
     * @var integer
     */
    private $participant2Lost;

    /**
     * @return int|null
     */
    public function getTotalEventsPlayed(): ?int
    {
        return $this->totalEventsPlayed;
    }

    /**
     * @return int
     */
    public function getParticipant1Won(): int
    {
        return $this->participant1Won;
    }

    /**
     * @return int
     */
    public function getParticipant1Draw(): int
    {
        return $this->participant1Draw;
    }

    /**
     * @return int
     */
    public function getParticipant1Lost(): int
    {
        return $this->participant1Lost;
    }

    /**
     * @return int
     */
    public function getParticipant2Won(): int
    {
        return $this->participant2Won;
    }

    /**
     * @return int
     */
    public function getParticipant2Draw(): int
    {
        return $this->participant2Draw;
    }

    /**
     * @return int
     */
    public function getParticipant2Lost(): int
    {
        return $this->participant2Lost;
    }
}