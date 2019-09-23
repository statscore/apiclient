<?php

namespace Statscore\Model\Response\BookedEvent;

use DateTime;

class BookedEventDTO
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $clientEventId;

    /**
     * @var integer
     */
    private $bookedBy;

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
     * @var string|null
     */
    private $winnerId;

    /**
     * @var string|null
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
     * @var integer
     */
    private $ut;

    /**
     * @var string
     */
    private $slug;

    /**
     * @var integer
     */
    private $areaId;

    /**
     * @var string
     */
    private $areaName;

    /**
     * @var integer
     */
    private $competitionId;

    /**
     * @var string
     */
    private $competitionShortName;

    /**
     * @var integer
     */
    private $seasonId;

    /**
     * @var string
     */
    private $seasonName;

    /**
     * @var integer|null
     */
    private $stageId;

    /**
     * @var string|null
     */
    private $stageName;

    /**
     * @var string
     */
    private $verifiedResult;

    /**
     * @var integer|null
     */
    private $roundId;

    /**
     * @var string|null
     */
    private $roundName;

    /**
     * @var string
     */
    private $invertedParticipants;

    /**
     * @var string
     */
    private $eventStatsLvl;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return BookedEventDTO
     */
    public function setId(int $id): BookedEventDTO
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getClientEventId(): string
    {
        return $this->clientEventId;
    }

    /**
     * @param string $clientEventId
     * @return BookedEventDTO
     */
    public function setClientEventId(string $clientEventId): BookedEventDTO
    {
        $this->clientEventId = $clientEventId;

        return $this;
    }

    /**
     * @return int
     */
    public function getBookedBy(): int
    {
        return $this->bookedBy;
    }

    /**
     * @param int $bookedBy
     * @return BookedEventDTO
     */
    public function setBookedBy(int $bookedBy): BookedEventDTO
    {
        $this->bookedBy = $bookedBy;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return BookedEventDTO
     */
    public function setName(string $name): BookedEventDTO
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return int
     */
    public function getSource(): int
    {
        return $this->source;
    }

    /**
     * @param int $source
     * @return BookedEventDTO
     */
    public function setSource(int $source): BookedEventDTO
    {
        $this->source = $source;

        return $this;
    }

    /**
     * @return string
     */
    public function getRelationStatus(): string
    {
        return $this->relationStatus;
    }

    /**
     * @param string $relationStatus
     * @return BookedEventDTO
     */
    public function setRelationStatus(string $relationStatus): BookedEventDTO
    {
        $this->relationStatus = $relationStatus;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getStartDate(): DateTime
    {
        return $this->startDate;
    }

    /**
     * @param DateTime $startDate
     * @return BookedEventDTO
     */
    public function setStartDate(DateTime $startDate): BookedEventDTO
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getFtOnly(): string
    {
        return $this->ftOnly;
    }

    /**
     * @param string $ftOnly
     * @return BookedEventDTO
     */
    public function setFtOnly(string $ftOnly): BookedEventDTO
    {
        $this->ftOnly = $ftOnly;

        return $this;
    }

    /**
     * @return string
     */
    public function getCoverageType(): string
    {
        return $this->coverageType;
    }

    /**
     * @param string $coverageType
     * @return BookedEventDTO
     */
    public function setCoverageType(string $coverageType): BookedEventDTO
    {
        $this->coverageType = $coverageType;

        return $this;
    }

    /**
     * @return string
     */
    public function getScoutsfeed(): string
    {
        return $this->scoutsfeed;
    }

    /**
     * @param string $scoutsfeed
     * @return BookedEventDTO
     */
    public function setScoutsfeed(string $scoutsfeed): BookedEventDTO
    {
        $this->scoutsfeed = $scoutsfeed;

        return $this;
    }

    /**
     * @return int
     */
    public function getStatusId(): int
    {
        return $this->statusId;
    }

    /**
     * @param int $statusId
     * @return BookedEventDTO
     */
    public function setStatusId(int $statusId): BookedEventDTO
    {
        $this->statusId = $statusId;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatusName(): string
    {
        return $this->statusName;
    }

    /**
     * @param string $statusName
     * @return BookedEventDTO
     */
    public function setStatusName(string $statusName): BookedEventDTO
    {
        $this->statusName = $statusName;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatusType(): string
    {
        return $this->statusType;
    }

    /**
     * @param string $statusType
     * @return BookedEventDTO
     */
    public function setStatusType(string $statusType): BookedEventDTO
    {
        $this->statusType = $statusType;

        return $this;
    }

    /**
     * @return int
     */
    public function getSportId(): int
    {
        return $this->sportId;
    }

    /**
     * @param int $sportId
     * @return BookedEventDTO
     */
    public function setSportId(int $sportId): BookedEventDTO
    {
        $this->sportId = $sportId;

        return $this;
    }

    /**
     * @return string
     */
    public function getSportName(): string
    {
        return $this->sportName;
    }

    /**
     * @param string $sportName
     * @return BookedEventDTO
     */
    public function setSportName(string $sportName): BookedEventDTO
    {
        $this->sportName = $sportName;

        return $this;
    }

    /**
     * @return string
     */
    public function getDay(): string
    {
        return $this->day;
    }

    /**
     * @param string $day
     * @return BookedEventDTO
     */
    public function setDay(string $day): BookedEventDTO
    {
        $this->day = $day;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getClockTime(): ?string
    {
        return $this->clockTime;
    }

    /**
     * @param string $clockTime
     * @return BookedEventDTO
     */
    public function setClockTime(?string $clockTime): BookedEventDTO
    {
        $this->clockTime = $clockTime;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getClockStatus(): ?string
    {
        return $this->clockStatus;
    }

    /**
     * @param string|null $clockStatus
     * @return BookedEventDTO
     */
    public function setClockStatus(?string $clockStatus): BookedEventDTO
    {
        $this->clockStatus = $clockStatus;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getWinnerId(): ?string
    {
        return $this->winnerId;
    }

    /**
     * @param string|null $winnerId
     * @return BookedEventDTO
     */
    public function setWinnerId(?string $winnerId): BookedEventDTO
    {
        $this->winnerId = $winnerId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getProgressId(): ?string
    {
        return $this->progressId;
    }

    /**
     * @param string|null $progressId
     * @return BookedEventDTO
     */
    public function setProgressId(?string $progressId): BookedEventDTO
    {
        $this->progressId = $progressId;

        return $this;
    }

    /**
     * @return string
     */
    public function getBetStatus(): string
    {
        return $this->betStatus;
    }

    /**
     * @param string $betStatus
     * @return BookedEventDTO
     */
    public function setBetStatus(string $betStatus): BookedEventDTO
    {
        $this->betStatus = $betStatus;

        return $this;
    }

    /**
     * @return string
     */
    public function getNeutralVenue(): string
    {
        return $this->neutralVenue;
    }

    /**
     * @param string $neutralVenue
     * @return BookedEventDTO
     */
    public function setNeutralVenue(string $neutralVenue): BookedEventDTO
    {
        $this->neutralVenue = $neutralVenue;

        return $this;
    }

    /**
     * @return string
     */
    public function getItemStatus(): string
    {
        return $this->itemStatus;
    }

    /**
     * @param string $itemStatus
     * @return BookedEventDTO
     */
    public function setItemStatus(string $itemStatus): BookedEventDTO
    {
        $this->itemStatus = $itemStatus;

        return $this;
    }

    /**
     * @return int
     */
    public function getUt(): int
    {
        return $this->ut;
    }

    /**
     * @param int $ut
     * @return BookedEventDTO
     */
    public function setUt(int $ut): BookedEventDTO
    {
        $this->ut = $ut;

        return $this;
    }

    /**
     * @return string
     */
    public function getSlug(): string
    {
        return $this->slug;
    }

    /**
     * @param string $slug
     * @return BookedEventDTO
     */
    public function setSlug(string $slug): BookedEventDTO
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * @return int
     */
    public function getAreaId(): int
    {
        return $this->areaId;
    }

    /**
     * @param int $areaId
     * @return BookedEventDTO
     */
    public function setAreaId(int $areaId): BookedEventDTO
    {
        $this->areaId = $areaId;

        return $this;
    }

    /**
     * @return string
     */
    public function getAreaName(): string
    {
        return $this->areaName;
    }

    /**
     * @param string $areaName
     * @return BookedEventDTO
     */
    public function setAreaName(string $areaName): BookedEventDTO
    {
        $this->areaName = $areaName;

        return $this;
    }

    /**
     * @return int
     */
    public function getCompetitionId(): int
    {
        return $this->competitionId;
    }

    /**
     * @param int $competitionId
     * @return BookedEventDTO
     */
    public function setCompetitionId(int $competitionId): BookedEventDTO
    {
        $this->competitionId = $competitionId;

        return $this;
    }

    /**
     * @return string
     */
    public function getCompetitionShortName(): string
    {
        return $this->competitionShortName;
    }

    /**
     * @param string $competitionShortName
     * @return BookedEventDTO
     */
    public function setCompetitionShortName(string $competitionShortName): BookedEventDTO
    {
        $this->competitionShortName = $competitionShortName;

        return $this;
    }

    /**
     * @return int
     */
    public function getSeasonId(): int
    {
        return $this->seasonId;
    }

    /**
     * @param int $seasonId
     * @return BookedEventDTO
     */
    public function setSeasonId(int $seasonId): BookedEventDTO
    {
        $this->seasonId = $seasonId;

        return $this;
    }

    /**
     * @return integer|null
     */
    public function getStageId(): ?int
    {
        return $this->stageId;
    }

    /**
     * @param integer|null $stageId
     * @return BookedEventDTO
     */
    public function setStageId(?int $stageId)
    {
        $this->stageId = $stageId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getStageName(): ?string
    {
        return $this->stageName;
    }

    /**
     * @param string|null $stageName
     * @return BookedEventDTO
     */
    public function setStageName(?string $stageName): BookedEventDTO
    {
        $this->stageName = $stageName;

        return $this;
    }

    /**
     * @return string
     */
    public function getVerifiedResult(): string
    {
        return $this->verifiedResult;
    }

    /**
     * @param string $verifiedResult
     * @return BookedEventDTO
     */
    public function setVerifiedResult(string $verifiedResult): BookedEventDTO
    {
        $this->verifiedResult = $verifiedResult;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getRoundId(): ?int
    {
        return $this->roundId;
    }

    /**
     * @param int|null $roundId
     * @return BookedEventDTO
     */
    public function setRoundId(?int $roundId): BookedEventDTO
    {
        $this->roundId = $roundId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getRoundName(): ?string
    {
        return $this->roundName;
    }

    /**
     * @param string|null $roundName
     * @return BookedEventDTO
     */
    public function setRoundName(?string $roundName): BookedEventDTO
    {
        $this->roundName = $roundName;

        return $this;
    }

    /**
     * @return string
     */
    public function getInvertedParticipants(): string
    {
        return $this->invertedParticipants;
    }

    /**
     * @param string $invertedParticipants
     * @return BookedEventDTO
     */
    public function setInvertedParticipants(string $invertedParticipants): BookedEventDTO
    {
        $this->invertedParticipants = $invertedParticipants;

        return $this;
    }

    /**
     * @return string
     */
    public function getEventStatsLvl(): string
    {
        return $this->eventStatsLvl;
    }

    /**
     * @param string $eventStatsLvl
     * @return BookedEventDTO
     */
    public function setEventStatsLvl(string $eventStatsLvl): BookedEventDTO
    {
        $this->eventStatsLvl = $eventStatsLvl;

        return $this;
    }

    /**
     * @return string
     */
    public function getSeasonName(): string
    {
        return $this->seasonName;
    }

    /**
     * @param string $seasonName
     * @return BookedEventDTO
     */
    public function setSeasonName(string $seasonName): BookedEventDTO
    {
        $this->seasonName = $seasonName;

        return $this;
    }

}
