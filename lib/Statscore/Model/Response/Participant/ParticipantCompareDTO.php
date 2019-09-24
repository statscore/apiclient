<?php

namespace Statscore\Model\Response\Participant;

/**
 * Class ParticipantCompareDTO
 * @package Statscore\Model\Response\Participant
 */
final class ParticipantCompareDTO
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

    /**
     * @param ParticipantDTO[] $participants
     * @return ParticipantCompareDTO
     */
    public function setParticipants(array $participants): ParticipantCompareDTO
    {
        $this->participants = $participants;

        return $this;
    }

    /**
     * @param ParticipantHead2HeadDTO $head2head
     * @return ParticipantCompareDTO
     */
    public function setHead2head(ParticipantHead2HeadDTO $head2head): ParticipantCompareDTO
    {
        $this->head2head = $head2head;

        return $this;
    }
}
