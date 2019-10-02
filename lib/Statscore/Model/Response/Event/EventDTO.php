<?php

namespace Statscore\Model\Response\Event;

use DateTime;
use Statscore\Model\Response\Detail\DetailDTO;
use Statscore\Model\Response\Participant\ParticipantDTO;

/**
 * Class EventDTO
 * @package Statscore\Model\Response\Event
 */
final class EventDTO
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
     * @var string|null
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
     * @var string|null
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
     * @var string
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
     * @var DetailDTO[]
     */
    private $details = [];

    /**
     * @var ParticipantDTO[]
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
     * @return null|string
     */
    public function getDay(): ?string
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
     * @return null|string
     */
    public function getRoundName(): ?string
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
     * @return string
     */
    public function getVenueId(): string
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

    /**
     * @param int $id
     * @return EventDTO
     */
    public function setId(int $id): EventDTO
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param string $name
     * @return EventDTO
     */
    public function setName(string $name): EventDTO
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param int $source
     * @return EventDTO
     */
    public function setSource(int $source): EventDTO
    {
        $this->source = $source;

        return $this;
    }

    /**
     * @param string $sourceDc
     * @return EventDTO
     */
    public function setSourceDc(string $sourceDc): EventDTO
    {
        $this->sourceDc = $sourceDc;

        return $this;
    }

    /**
     * @param int|null $sourceSuper
     * @return EventDTO
     */
    public function setSourceSuper(?int $sourceSuper): EventDTO
    {
        $this->sourceSuper = $sourceSuper;

        return $this;
    }

    /**
     * @param string $relationStatus
     * @return EventDTO
     */
    public function setRelationStatus(string $relationStatus): EventDTO
    {
        $this->relationStatus = $relationStatus;

        return $this;
    }

    /**
     * @param DateTime $startDate
     * @return EventDTO
     */
    public function setStartDate(DateTime $startDate): EventDTO
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * @param string $ftOnly
     * @return EventDTO
     */
    public function setFtOnly(string $ftOnly): EventDTO
    {
        $this->ftOnly = $ftOnly;

        return $this;
    }

    /**
     * @param string $coverageType
     * @return EventDTO
     */
    public function setCoverageType(string $coverageType): EventDTO
    {
        $this->coverageType = $coverageType;

        return $this;
    }

    /**
     * @param int|null $channelId
     * @return EventDTO
     */
    public function setChannelId(?int $channelId): EventDTO
    {
        $this->channelId = $channelId;

        return $this;
    }

    /**
     * @param string $channelName
     * @return EventDTO
     */
    public function setChannelName(string $channelName): EventDTO
    {
        $this->channelName = $channelName;

        return $this;
    }

    /**
     * @param string $scoutsfeed
     * @return EventDTO
     */
    public function setScoutsfeed(string $scoutsfeed): EventDTO
    {
        $this->scoutsfeed = $scoutsfeed;

        return $this;
    }

    /**
     * @param int $statusId
     * @return EventDTO
     */
    public function setStatusId(int $statusId): EventDTO
    {
        $this->statusId = $statusId;

        return $this;
    }

    /**
     * @param string $statusName
     * @return EventDTO
     */
    public function setStatusName(string $statusName): EventDTO
    {
        $this->statusName = $statusName;

        return $this;
    }

    /**
     * @param string $statusType
     * @return EventDTO
     */
    public function setStatusType(string $statusType): EventDTO
    {
        $this->statusType = $statusType;

        return $this;
    }

    /**
     * @param int $sportId
     * @return EventDTO
     */
    public function setSportId(int $sportId): EventDTO
    {
        $this->sportId = $sportId;

        return $this;
    }

    /**
     * @param string $sportName
     * @return EventDTO
     */
    public function setSportName(string $sportName): EventDTO
    {
        $this->sportName = $sportName;

        return $this;
    }

    /**
     * @param null|string $day
     * @return EventDTO
     */
    public function setDay(?string $day): EventDTO
    {
        $this->day = $day;

        return $this;
    }

    /**
     * @param string|null $clockTime
     * @return EventDTO
     */
    public function setClockTime(?string $clockTime): EventDTO
    {
        $this->clockTime = $clockTime;

        return $this;
    }

    /**
     * @param string|null $clockStatus
     * @return EventDTO
     */
    public function setClockStatus(?string $clockStatus): EventDTO
    {
        $this->clockStatus = $clockStatus;

        return $this;
    }

    /**
     * @param int|null $winnerId
     * @return EventDTO
     */
    public function setWinnerId(?int $winnerId): EventDTO
    {
        $this->winnerId = $winnerId;

        return $this;
    }

    /**
     * @param int|null $progressId
     * @return EventDTO
     */
    public function setProgressId(?int $progressId): EventDTO
    {
        $this->progressId = $progressId;

        return $this;
    }

    /**
     * @param string $betStatus
     * @return EventDTO
     */
    public function setBetStatus(string $betStatus): EventDTO
    {
        $this->betStatus = $betStatus;

        return $this;
    }

    /**
     * @param string $neutralVenue
     * @return EventDTO
     */
    public function setNeutralVenue(string $neutralVenue): EventDTO
    {
        $this->neutralVenue = $neutralVenue;

        return $this;
    }

    /**
     * @param string $itemStatus
     * @return EventDTO
     */
    public function setItemStatus(string $itemStatus): EventDTO
    {
        $this->itemStatus = $itemStatus;

        return $this;
    }

    /**
     * @param string $ut
     * @return EventDTO
     */
    public function setUt(string $ut): EventDTO
    {
        $this->ut = $ut;

        return $this;
    }

    /**
     * @param string $slug
     * @return EventDTO
     */
    public function setSlug(string $slug): EventDTO
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * @param string $verifiedResult
     * @return EventDTO
     */
    public function setVerifiedResult(string $verifiedResult): EventDTO
    {
        $this->verifiedResult = $verifiedResult;

        return $this;
    }

    /**
     * @param string $isProtocolVerified
     * @return EventDTO
     */
    public function setIsProtocolVerified(string $isProtocolVerified): EventDTO
    {
        $this->isProtocolVerified = $isProtocolVerified;

        return $this;
    }

    /**
     * @param string|null $protocolVerifiedBy
     * @return EventDTO
     */
    public function setProtocolVerifiedBy(?string $protocolVerifiedBy): EventDTO
    {
        $this->protocolVerifiedBy = $protocolVerifiedBy;

        return $this;
    }

    /**
     * @param string|null $protocolVerifiedAt
     * @return EventDTO
     */
    public function setProtocolVerifiedAt(?string $protocolVerifiedAt): EventDTO
    {
        $this->protocolVerifiedAt = $protocolVerifiedAt;

        return $this;
    }

    /**
     * @param int|null $roundId
     * @return EventDTO
     */
    public function setRoundId(?int $roundId): EventDTO
    {
        $this->roundId = $roundId;

        return $this;
    }

    /**
     * @param null|string $roundName
     * @return EventDTO
     */
    public function setRoundName(?string $roundName): EventDTO
    {
        $this->roundName = $roundName;

        return $this;
    }

    /**
     * @param string|null $clientEventId
     * @return EventDTO
     */
    public function setClientEventId(?string $clientEventId): EventDTO
    {
        $this->clientEventId = $clientEventId;

        return $this;
    }

    /**
     * @param string $booked
     * @return EventDTO
     */
    public function setBooked(string $booked): EventDTO
    {
        $this->booked = $booked;

        return $this;
    }

    /**
     * @param string|null $bookedBy
     * @return EventDTO
     */
    public function setBookedBy(?string $bookedBy): EventDTO
    {
        $this->bookedBy = $bookedBy;

        return $this;
    }

    /**
     * @param string $invertedParticipants
     * @return EventDTO
     */
    public function setInvertedParticipants(string $invertedParticipants): EventDTO
    {
        $this->invertedParticipants = $invertedParticipants;

        return $this;
    }

    /**
     * @param string $venueId
     * @return EventDTO
     */
    public function setVenueId(string $venueId): EventDTO
    {
        $this->venueId = $venueId;

        return $this;
    }

    /**
     * @param string $bfs
     * @return EventDTO
     */
    public function setBfs(string $bfs): EventDTO
    {
        $this->bfs = $bfs;

        return $this;
    }

    /**
     * @param string $eventStatsLvl
     * @return EventDTO
     */
    public function setEventStatsLvl(string $eventStatsLvl): EventDTO
    {
        $this->eventStatsLvl = $eventStatsLvl;

        return $this;
    }

    /**
     * @param DetailDTO[] $details
     * @return EventDTO
     */
    public function setDetails(array $details): EventDTO
    {
        $this->details = $details;

        return $this;
    }

    /**
     * @param ParticipantDTO[] $participants
     * @return EventDTO
     */
    public function setParticipants(array $participants): EventDTO
    {
        $this->participants = $participants;

        return $this;
    }
}
