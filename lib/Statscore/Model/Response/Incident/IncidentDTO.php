<?php

namespace Statscore\Model\Response\Incident;

/**
 * Class IncidentDTO
 * @package Statscore\Model\Response\Incident
 */
class IncidentDTO
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
}