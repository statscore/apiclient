<?php

namespace Statscore\Model\Response\Event;

use DateTime;
use Statscore\Model\Response\Detail\DetailDTO;
use Statscore\Model\Response\Participant\ParticipantDTO;

/**
 * Class EventDTO
 * @package Statscore\Model\Response\Event
 */
class EventDTO
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
    private $source;

    /**
     * @var string
     */
    private $sourceDc;

    /**
     * @var integer|null
     */
    private $sourceSuper;

    /**
     * @var string
     */
    private $relationStatus;

    /**
     * @var DateTime
     */
    private $startDate;

    /**
     * @var string
     */
    private $ftOnly;

    /**
     * @var string
     */
    private $coverageType;

    /**
     * @var integer|null
     */
    private $channelId;

    /**
     * @var string
     */
    private $channelName;

    /**
     * @var string
     */
    private $scoutsfeed;

    /**
     * @var integer
     */
    private $statusId;

    /**
     * @var string
     */
    private $statusName;

    /**
     * @var string
     */
    private $statusType;

    /**
     * @var integer
     */
    private $sportId;

    /**
     * @var string
     */
    private $sportName;

    /**
     * @var string
     */
    private $day;

    /**
     * @var string|null
     */
    private $clockTime;

    /**
     * @var string|null
     */
    private $clockStatus;

    /**
     * @var integer|null
     */
    private $winnerId;

    /**
     * @var integer|null
     */
    private $progressId;

    /**
     * @var string
     */
    private $betStatus;

    /**
     * @var string
     */
    private $neutralVenue;

    /**
     * @var string
     */
    private $itemStatus;

    /**
     * @var string
     */
    private $ut;

    /**
     * @var string
     */
    private $slug;

    /**
     * @var string
     */
    private $verifiedResult;

    /**
     * @var string
     */
    private $isProtocolVerified;

    /**
     * @var string|null
     */
    private $protocolVerifiedBy;

    /**
     * @var string|null
     */
    private $protocolVerifiedAt;

    /**
     * @var integer|null
     */
    private $roundId;

    /**
     * @var string
     */
    private $roundName;

    /**
     * @var string|null
     */
    private $clientEventId;

    /**
     * @var string
     */
    private $booked;

    /**
     * @var string|null
     */
    private $bookedBy;

    /**
     * @var string
     */
    private $invertedParticipants;

    /**
     * @var integer|null
     */
    private $venueId;

    /**
     * @var string
     */
    private $bfs;

    /**
     * @var string
     */
    private $eventStatsLvl;

    /**
     * @var \Statscore\Model\Response\Detail\DetailDTO[]
     */
    private $details = [];

    /**
     * @var \Statscore\Model\Response\Participant\ParticipantDTO[]
     */
    private $participants = [];

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
     * @return int|null
     */
    public function getSource(): ?int
    {
        return $this->source;
    }

    /**
     * @return string
     */
    public function getSourceDc(): string
    {
        return $this->sourceDc;
    }

    /**
     * @return int|null
     */
    public function getSourceSuper(): ?int
    {
        return $this->sourceSuper;
    }

    /**
     * @return string
     */
    public function getRelationStatus(): string
    {
        return $this->relationStatus;
    }

    /**
     * @return DateTime
     */
    public function getStartDate(): DateTime
    {
        return $this->startDate;
    }

    /**
     * @return string
     */
    public function getFtOnly(): string
    {
        return $this->ftOnly;
    }

    /**
     * @return string
     */
    public function getCoverageType(): string
    {
        return $this->coverageType;
    }

    /**
     * @return int|null
     */
    public function getChannelId(): ?int
    {
        return $this->channelId;
    }

    /**
     * @return string
     */
    public function getChannelName(): string
    {
        return $this->channelName;
    }

    /**
     * @return string
     */
    public function getScoutsfeed(): string
    {
        return $this->scoutsfeed;
    }

    /**
     * @return int
     */
    public function getStatusId(): int
    {
        return $this->statusId;
    }

    /**
     * @return string
     */
    public function getStatusName(): string
    {
        return $this->statusName;
    }

    /**
     * @return string
     */
    public function getStatusType(): string
    {
        return $this->statusType;
    }

    /**
     * @return int
     */
    public function getSportId(): int
    {
        return $this->sportId;
    }

    /**
     * @return string
     */
    public function getSportName(): string
    {
        return $this->sportName;
    }

    /**
     * @return string
     */
    public function getDay(): string
    {
        return $this->day;
    }

    /**
     * @return string|null
     */
    public function getClockTime(): ?string
    {
        return $this->clockTime;
    }

    /**
     * @return string|null
     */
    public function getClockStatus(): ?string
    {
        return $this->clockStatus;
    }

    /**
     * @return int|null
     */
    public function getWinnerId(): ?int
    {
        return $this->winnerId;
    }

    /**
     * @return int|null
     */
    public function getProgressId(): ?int
    {
        return $this->progressId;
    }

    /**
     * @return string
     */
    public function getBetStatus(): string
    {
        return $this->betStatus;
    }

    /**
     * @return string
     */
    public function getNeutralVenue(): string
    {
        return $this->neutralVenue;
    }

    /**
     * @return string
     */
    public function getItemStatus(): string
    {
        return $this->itemStatus;
    }

    /**
     * @return string
     */
    public function getUt(): string
    {
        return $this->ut;
    }

    /**
     * @return string
     */
    public function getSlug(): string
    {
        return $this->slug;
    }

    /**
     * @return string
     */
    public function getVerifiedResult(): string
    {
        return $this->verifiedResult;
    }

    /**
     * @return string
     */
    public function getIsProtocolVerified(): string
    {
        return $this->isProtocolVerified;
    }

    /**
     * @return string|null
     */
    public function getProtocolVerifiedBy(): ?string
    {
        return $this->protocolVerifiedBy;
    }

    /**
     * @return string|null
     */
    public function getProtocolVerifiedAt(): ?string
    {
        return $this->protocolVerifiedAt;
    }

    /**
     * @return int|null
     */
    public function getRoundId(): ?int
    {
        return $this->roundId;
    }

    /**
     * @return string
     */
    public function getRoundName(): string
    {
        return $this->roundName;
    }

    /**
     * @return string
     */
    public function getClientEventId(): ?string
    {
        return $this->clientEventId;
    }

    /**
     * @return string
     */
    public function getBooked(): string
    {
        return $this->booked;
    }

    /**
     * @return string|null
     */
    public function getBookedBy(): ?string
    {
        return $this->bookedBy;
    }

    /**
     * @return string
     */
    public function getInvertedParticipants(): string
    {
        return $this->invertedParticipants;
    }

    /**
     * @return int|null
     */
    public function getVenueId(): ?int
    {
        return $this->venueId;
    }

    /**
     * @return string
     */
    public function getBfs(): string
    {
        return $this->bfs;
    }

    /**
     * @return string
     */
    public function getEventStatsLvl(): string
    {
        return $this->eventStatsLvl;
    }

    /**
     * @return DetailDTO[]
     */
    public function getDetails(): array
    {
        return $this->details;
    }

    /**
     * @return ParticipantDTO[]
     */
    public function getParticipants(): array
    {
        return $this->participants;
    }
}