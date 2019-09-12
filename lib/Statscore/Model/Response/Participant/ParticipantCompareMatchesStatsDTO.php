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

    /**
     * @param int|null $totalEventsPlayed
     * @return ParticipantCompareMatchesStatsDTO
     */
    public function setTotalEventsPlayed(?int $totalEventsPlayed): ParticipantCompareMatchesStatsDTO
    {
        $this->totalEventsPlayed = $totalEventsPlayed;

        return $this;
    }

    /**
     * @param int $participant1Won
     * @return ParticipantCompareMatchesStatsDTO
     */
    public function setParticipant1Won(int $participant1Won): ParticipantCompareMatchesStatsDTO
    {
        $this->participant1Won = $participant1Won;

        return $this;
    }

    /**
     * @param int $participant1Draw
     * @return ParticipantCompareMatchesStatsDTO
     */
    public function setParticipant1Draw(int $participant1Draw): ParticipantCompareMatchesStatsDTO
    {
        $this->participant1Draw = $participant1Draw;

        return $this;
    }

    /**
     * @param int $participant1Lost
     * @return ParticipantCompareMatchesStatsDTO
     */
    public function setParticipant1Lost(int $participant1Lost): ParticipantCompareMatchesStatsDTO
    {
        $this->participant1Lost = $participant1Lost;

        return $this;
    }

    /**
     * @param int $participant2Won
     * @return ParticipantCompareMatchesStatsDTO
     */
    public function setParticipant2Won(int $participant2Won): ParticipantCompareMatchesStatsDTO
    {
        $this->participant2Won = $participant2Won;

        return $this;
    }

    /**
     * @param int $participant2Draw
     * @return ParticipantCompareMatchesStatsDTO
     */
    public function setParticipant2Draw(int $participant2Draw): ParticipantCompareMatchesStatsDTO
    {
        $this->participant2Draw = $participant2Draw;

        return $this;
    }

    /**
     * @param int $participant2Lost
     * @return ParticipantCompareMatchesStatsDTO
     */
    public function setParticipant2Lost(int $participant2Lost): ParticipantCompareMatchesStatsDTO
    {
        $this->participant2Lost = $participant2Lost;

        return $this;
    }
}
