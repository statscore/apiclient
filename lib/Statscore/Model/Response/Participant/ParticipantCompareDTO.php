<?php

namespace Statscore\Model\Response\Participant;

use Statscore\Model\Response\Competition\CompetitionDTO;

/**
 * Class ParticipantCompareDTO
 * @package Statscore\Model\Response\Participant
 */
class ParticipantCompareDTO
{
    /**
     * @var ParticipantDTO[]
     */
    private $participants;

    /**
     * @var ParticipantHead2HeadDTO
     */
    private $head2head;

    /**
     * @var CompetitionDTO[]
     */
    private $h2hEvents;

    /**
     * @return ParticipantDTO[]
     */
    public function getParticipants(): array
    {
        return $this->participants;
    }

    /**
     * @return ParticipantHead2HeadDTO
     */
    public function getHead2head(): ParticipantHead2HeadDTO
    {
        return $this->head2head;
    }
}