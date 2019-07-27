<?php

namespace Statscore\Model\Response\Participant;

/**
 * Class ParticipantHead2HeadDTO
 * @package Statscore\Model\Response\Participant
 */
class ParticipantHead2HeadDTO
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
}