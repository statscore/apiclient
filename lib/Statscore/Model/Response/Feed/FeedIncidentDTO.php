<?php

namespace Statscore\Model\Response\Feed;

/**
 * Class FeedIncidentDTO
 * @package Statscore\Model\Response\Feed
 */
class FeedIncidentDTO
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $action;

    /**
     * @var integer
     */
    private $incidentId;

    /**
     * @var string
     */
    private $incidentName;

    /**
     * @var integer
     */
    private $participantId;

    /**
     * @var string
     */
    private $participantName;

    /**
     * @var integer|null
     */
    private $subparticipantId;

    /**
     * @var string|null
     */
    private $subparticipantName;

    /**
     * @var string|null
     */
    private $info;

    /**
     * @var string
     */
    private $important;

    /**
     * @var string
     */
    private $importantForTrader;

    /**
     * @var string|null
     */
    private $addData;

    /**
     * @var string
     */
    private $showPopup;

    /**
     * @var string
     */
    private $showScores;

    /**
     * @var string
     */
    private $showAction;

    /**
     * @var string
     */
    private $showTime;

    /**
     * @var string
     */
    private $showOnTimeline;

    /**
     * @var string|null
     */
    private $eventTime;

    /**
     * @var integer
     */
    private $eventStatusId;

    /**
     * @var string
     */
    private $eventStatusName;

    /**
     * @var string|null
     */
    private $xPos;

    /**
     * @var string|null
     */
    private $yPos;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getAction(): string
    {
        return $this->action;
    }

    /**
     * @return int
     */
    public function getIncidentId(): int
    {
        return $this->incidentId;
    }

    /**
     * @return string
     */
    public function getIncidentName(): string
    {
        return $this->incidentName;
    }

    /**
     * @return int
     */
    public function getParticipantId(): int
    {
        return $this->participantId;
    }

    /**
     * @return string
     */
    public function getParticipantName(): string
    {
        return $this->participantName;
    }

    /**
     * @return int|null
     */
    public function getSubparticipantId(): ?int
    {
        return $this->subparticipantId;
    }

    /**
     * @return string|null
     */
    public function getSubparticipantName(): ?string
    {
        return $this->subparticipantName;
    }

    /**
     * @return string|null
     */
    public function getInfo(): ?string
    {
        return $this->info;
    }

    /**
     * @return string
     */
    public function getImportant(): string
    {
        return $this->important;
    }

    /**
     * @return string
     */
    public function getImportantForTrader(): string
    {
        return $this->importantForTrader;
    }

    /**
     * @return string|null
     */
    public function getAddData(): ?string
    {
        return $this->addData;
    }

    /**
     * @return string
     */
    public function getShowPopup(): string
    {
        return $this->showPopup;
    }

    /**
     * @return string
     */
    public function getShowScores(): string
    {
        return $this->showScores;
    }

    /**
     * @return string
     */
    public function getShowAction(): string
    {
        return $this->showAction;
    }

    /**
     * @return string
     */
    public function getShowTime(): string
    {
        return $this->showTime;
    }

    /**
     * @return string
     */
    public function getShowOnTimeline(): string
    {
        return $this->showOnTimeline;
    }

    /**
     * @return string|null
     */
    public function getEventTime(): ?string
    {
        return $this->eventTime;
    }

    /**
     * @return int
     */
    public function getEventStatusId(): int
    {
        return $this->eventStatusId;
    }

    /**
     * @return string
     */
    public function getEventStatusName(): string
    {
        return $this->eventStatusName;
    }

    /**
     * @return string|null
     */
    public function getXPos(): ?string
    {
        return $this->xPos;
    }

    /**
     * @return string|null
     */
    public function getYPos(): ?string
    {
        return $this->yPos;
    }

    /**
     * @param string $id
     * @return FeedIncidentDTO
     */
    public function setId(string $id): FeedIncidentDTO
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param string $action
     * @return FeedIncidentDTO
     */
    public function setAction(string $action): FeedIncidentDTO
    {
        $this->action = $action;

        return $this;
    }

    /**
     * @param int $incidentId
     * @return FeedIncidentDTO
     */
    public function setIncidentId(int $incidentId): FeedIncidentDTO
    {
        $this->incidentId = $incidentId;

        return $this;
    }

    /**
     * @param string $incidentName
     * @return FeedIncidentDTO
     */
    public function setIncidentName(string $incidentName): FeedIncidentDTO
    {
        $this->incidentName = $incidentName;

        return $this;
    }

    /**
     * @param int $participantId
     * @return FeedIncidentDTO
     */
    public function setParticipantId(int $participantId): FeedIncidentDTO
    {
        $this->participantId = $participantId;

        return $this;
    }

    /**
     * @param string $participantName
     * @return FeedIncidentDTO
     */
    public function setParticipantName(string $participantName): FeedIncidentDTO
    {
        $this->participantName = $participantName;

        return $this;
    }

    /**
     * @param int|null $subparticipantId
     * @return FeedIncidentDTO
     */
    public function setSubparticipantId(?int $subparticipantId): FeedIncidentDTO
    {
        $this->subparticipantId = $subparticipantId;

        return $this;
    }

    /**
     * @param string|null $subparticipantName
     * @return FeedIncidentDTO
     */
    public function setSubparticipantName(?string $subparticipantName): FeedIncidentDTO
    {
        $this->subparticipantName = $subparticipantName;

        return $this;
    }

    /**
     * @param string|null $info
     * @return FeedIncidentDTO
     */
    public function setInfo(?string $info): FeedIncidentDTO
    {
        $this->info = $info;

        return $this;
    }

    /**
     * @param string $important
     * @return FeedIncidentDTO
     */
    public function setImportant(string $important): FeedIncidentDTO
    {
        $this->important = $important;

        return $this;
    }

    /**
     * @param string $importantForTrader
     * @return FeedIncidentDTO
     */
    public function setImportantForTrader(string $importantForTrader): FeedIncidentDTO
    {
        $this->importantForTrader = $importantForTrader;

        return $this;
    }

    /**
     * @param string|null $addData
     * @return FeedIncidentDTO
     */
    public function setAddData(?string $addData): FeedIncidentDTO
    {
        $this->addData = $addData;

        return $this;
    }

    /**
     * @param string $showPopup
     * @return FeedIncidentDTO
     */
    public function setShowPopup(string $showPopup): FeedIncidentDTO
    {
        $this->showPopup = $showPopup;

        return $this;
    }

    /**
     * @param string $showScores
     * @return FeedIncidentDTO
     */
    public function setShowScores(string $showScores): FeedIncidentDTO
    {
        $this->showScores = $showScores;

        return $this;
    }

    /**
     * @param string $showAction
     * @return FeedIncidentDTO
     */
    public function setShowAction(string $showAction): FeedIncidentDTO
    {
        $this->showAction = $showAction;

        return $this;
    }

    /**
     * @param string $showTime
     * @return FeedIncidentDTO
     */
    public function setShowTime(string $showTime): FeedIncidentDTO
    {
        $this->showTime = $showTime;

        return $this;
    }

    /**
     * @param string $showOnTimeline
     * @return FeedIncidentDTO
     */
    public function setShowOnTimeline(string $showOnTimeline): FeedIncidentDTO
    {
        $this->showOnTimeline = $showOnTimeline;

        return $this;
    }

    /**
     * @param string|null $eventTime
     * @return FeedIncidentDTO
     */
    public function setEventTime(?string $eventTime): FeedIncidentDTO
    {
        $this->eventTime = $eventTime;

        return $this;
    }

    /**
     * @param int $eventStatusId
     * @return FeedIncidentDTO
     */
    public function setEventStatusId(int $eventStatusId): FeedIncidentDTO
    {
        $this->eventStatusId = $eventStatusId;

        return $this;
    }

    /**
     * @param string $eventStatusName
     * @return FeedIncidentDTO
     */
    public function setEventStatusName(string $eventStatusName): FeedIncidentDTO
    {
        $this->eventStatusName = $eventStatusName;

        return $this;
    }

    /**
     * @param string|null $xPos
     * @return FeedIncidentDTO
     */
    public function setXPos(?string $xPos): FeedIncidentDTO
    {
        $this->xPos = $xPos;

        return $this;
    }

    /**
     * @param string|null $yPos
     * @return FeedIncidentDTO
     */
    public function setYPos(?string $yPos): FeedIncidentDTO
    {
        $this->yPos = $yPos;

        return $this;
    }

}