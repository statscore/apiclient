<?php

namespace Statscore\Model\Response\Participant;

use Statscore\Model\Response\Result\ResultDTO;
use Statscore\Model\Response\Stat\StatDTO;

/**
 * Class ParticipantDTO
 * @package Statscore\Model\Response\Participant
 */
class ParticipantDTO
{
    /**
     * @var integer
     */
    private $counter;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $shortName;

    /**
     * @var string
     */
    private $acronym;

    /**
     * @var string
     */
    private $gender;

    /**
     * @var integer
     */
    private $areaId;

    /**
     * @var string
     */
    private $areaName;

    /**
     * @var string
     */
    private $areaCode;

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
    private $national;

    /**
     * @var string
     */
    private $website;

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
    private $logo;

    /**
     * @var string
     */
    private $virtual;

    /**
     * @var string
     */
    private $shirtNr;

    /**
     * @var \Statscore\Model\Response\Participant\ParticipantDetailsDTO
     */
    private $details;

    /**
     * @var \Statscore\Model\Response\Stat\StatDTO[]
     */
    private $stats = [];

    /**
     * @var \Statscore\Model\Response\Result\ResultDTO[]
     */
    private $results = [];

    /**
     * @return int
     */
    public function getCounter(): int
    {
        return $this->counter;
    }

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
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getShortName(): string
    {
        return $this->shortName;
    }

    /**
     * @return string
     */
    public function getAcronym(): string
    {
        return $this->acronym;
    }

    /**
     * @return string
     */
    public function getGender(): string
    {
        return $this->gender;
    }

    /**
     * @return int
     */
    public function getAreaId(): int
    {
        return $this->areaId;
    }

    /**
     * @return string
     */
    public function getAreaName(): string
    {
        return $this->areaName;
    }

    /**
     * @return string
     */
    public function getAreaCode(): string
    {
        return $this->areaCode;
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
    public function getNational(): string
    {
        return $this->national;
    }

    /**
     * @return string
     */
    public function getWebsite(): string
    {
        return $this->website;
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
    public function getLogo(): string
    {
        return $this->logo;
    }

    /**
     * @return string
     */
    public function getVirtual(): string
    {
        return $this->virtual;
    }

    /**
     * @return string
     */
    public function getShirtNr(): string
    {
        return $this->shirtNr;
    }

    /**
     * @return ParticipantDetailsDTO
     */
    public function getDetails(): ParticipantDetailsDTO
    {
        return $this->details;
    }

    /**
     * @return StatDTO[]
     */
    public function getStats(): array
    {
        return $this->stats;
    }

    /**
     * @return ResultDTO[]
     */
    public function getResults(): array
    {
        return $this->results;
    }
}