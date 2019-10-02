<?php

namespace Statscore\Model\Response\Participant;

use Statscore\Model\Response\Result\ResultDTO;
use Statscore\Model\Response\Stat\StatDTO;

/**
 * Class ParticipantDTO
 * @package Statscore\Model\Response\Participant
 */
final class ParticipantDTO
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
     * @var integer
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
     * @var ParticipantDetailsDTO
     */
    private $details;

    /**
     * @var StatDTO[]
     */
    private $stats = [];

    /**
     * @var ResultDTO[]
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
     * @return int
     */
    public function getUt(): int
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

    /**
     * @param int $counter
     * @return ParticipantDTO
     */
    public function setCounter(int $counter): ParticipantDTO
    {
        $this->counter = $counter;

        return $this;
    }

    /**
     * @param int $id
     * @return ParticipantDTO
     */
    public function setId(int $id): ParticipantDTO
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param string $type
     * @return ParticipantDTO
     */
    public function setType(string $type): ParticipantDTO
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @param string $name
     * @return ParticipantDTO
     */
    public function setName(string $name): ParticipantDTO
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param string $shortName
     * @return ParticipantDTO
     */
    public function setShortName(string $shortName): ParticipantDTO
    {
        $this->shortName = $shortName;

        return $this;
    }

    /**
     * @param string $acronym
     * @return ParticipantDTO
     */
    public function setAcronym(string $acronym): ParticipantDTO
    {
        $this->acronym = $acronym;

        return $this;
    }

    /**
     * @param string $gender
     * @return ParticipantDTO
     */
    public function setGender(string $gender): ParticipantDTO
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * @param int $areaId
     * @return ParticipantDTO
     */
    public function setAreaId(int $areaId): ParticipantDTO
    {
        $this->areaId = $areaId;

        return $this;
    }

    /**
     * @param string $areaName
     * @return ParticipantDTO
     */
    public function setAreaName(string $areaName): ParticipantDTO
    {
        $this->areaName = $areaName;

        return $this;
    }

    /**
     * @param string $areaCode
     * @return ParticipantDTO
     */
    public function setAreaCode(string $areaCode): ParticipantDTO
    {
        $this->areaCode = $areaCode;

        return $this;
    }

    /**
     * @param int $sportId
     * @return ParticipantDTO
     */
    public function setSportId(int $sportId): ParticipantDTO
    {
        $this->sportId = $sportId;

        return $this;
    }

    /**
     * @param string $sportName
     * @return ParticipantDTO
     */
    public function setSportName(string $sportName): ParticipantDTO
    {
        $this->sportName = $sportName;

        return $this;
    }

    /**
     * @param string $national
     * @return ParticipantDTO
     */
    public function setNational(string $national): ParticipantDTO
    {
        $this->national = $national;

        return $this;
    }

    /**
     * @param string $website
     * @return ParticipantDTO
     */
    public function setWebsite(string $website): ParticipantDTO
    {
        $this->website = $website;

        return $this;
    }

    /**
     * @param integer $ut
     * @return ParticipantDTO
     */
    public function setUt(int $ut): ParticipantDTO
    {
        $this->ut = $ut;

        return $this;
    }

    /**
     * @param string $slug
     * @return ParticipantDTO
     */
    public function setSlug(string $slug): ParticipantDTO
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * @param string $logo
     * @return ParticipantDTO
     */
    public function setLogo(string $logo): ParticipantDTO
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * @param string $virtual
     * @return ParticipantDTO
     */
    public function setVirtual(string $virtual): ParticipantDTO
    {
        $this->virtual = $virtual;

        return $this;
    }

    /**
     * @param string $shirtNr
     * @return ParticipantDTO
     */
    public function setShirtNr(string $shirtNr): ParticipantDTO
    {
        $this->shirtNr = $shirtNr;

        return $this;
    }

    /**
     * @param ParticipantDetailsDTO $details
     * @return ParticipantDTO
     */
    public function setDetails(ParticipantDetailsDTO $details): ParticipantDTO
    {
        $this->details = $details;

        return $this;
    }

    /**
     * @param StatDTO[] $stats
     * @return ParticipantDTO
     */
    public function setStats(array $stats): ParticipantDTO
    {
        $this->stats = $stats;

        return $this;
    }

    /**
     * @param ResultDTO[] $results
     * @return ParticipantDTO
     */
    public function setResults(array $results): ParticipantDTO
    {
        $this->results = $results;

        return $this;
    }
}
