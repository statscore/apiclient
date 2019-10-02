<?php

namespace Statscore\Model\Response\Participant;

/**
 * Class ParticipantHead2HeadDTO
 * @package Statscore\Model\Response\Participant
 */
final class ParticipantHead2HeadDTO
{
    /**
     * @var ParticipantCompareMatchesStatsDTO
     */
    private $allMatchesStats;

    /**
     * @var ParticipantCompareMatchesStatsDTO
     */
    private $last10MatchesStats;

    /**
     * @return ParticipantCompareMatchesStatsDTO
     */
    public function getAllMatchesStats(): ParticipantCompareMatchesStatsDTO
    {
        return $this->allMatchesStats;
    }

    /**
     * @return ParticipantCompareMatchesStatsDTO
     */
    public function getLast10MatchesStats(): ParticipantCompareMatchesStatsDTO
    {
        return $this->last10MatchesStats;
    }

    /**
     * @param ParticipantCompareMatchesStatsDTO $allMatchesStats
     * @return ParticipantHead2HeadDTO
     */
    public function setAllMatchesStats(ParticipantCompareMatchesStatsDTO $allMatchesStats): ParticipantHead2HeadDTO
    {
        $this->allMatchesStats = $allMatchesStats;

        return $this;
    }

    /**
     * @param ParticipantCompareMatchesStatsDTO $last10MatchesStats
     * @return ParticipantHead2HeadDTO
     */
    public function setLast10MatchesStats(ParticipantCompareMatchesStatsDTO $last10MatchesStats): ParticipantHead2HeadDTO
    {
        $this->last10MatchesStats = $last10MatchesStats;

        return $this;
    }
}
