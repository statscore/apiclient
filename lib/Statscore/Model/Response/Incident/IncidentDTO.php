<?php

namespace Statscore\Model\Response\Incident;

/**
 * Class IncidentDTO
 * @package Statscore\Model\Response\Incident
 */
final class IncidentDTO
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
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $important;

    /**
     * @var string
     */
    private $importantForTrader;

    /**
     * @var null|integer
     */
    private $sportId;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $for;

    /**
     * @var string|null
     */
    private $group;

    /**
     * @var string
     */
    private $details;

    /**
     * @var string
     */
    private $gameBreak;

    /**
     * @var integer
     */
    private $ut;

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
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
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
     * @return null|int
     */
    public function getSportId(): ?int
    {
        return $this->sportId;
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
    public function getFor(): string
    {
        return $this->for;
    }

    /**
     * @return string|null
     */
    public function getGroup(): ?string
    {
        return $this->group;
    }

    /**
     * @return string
     */
    public function getDetails(): string
    {
        return $this->details;
    }

    /**
     * @return string
     */
    public function getGameBreak(): string
    {
        return $this->gameBreak;
    }

    /**
     * @return integer
     */
    public function getUt(): int
    {
        return $this->ut;
    }

    /**
     * @param int $id
     * @return IncidentDTO
     */
    public function setId(int $id): IncidentDTO
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param string $name
     * @return IncidentDTO
     */
    public function setName(string $name): IncidentDTO
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param string $code
     * @return IncidentDTO
     */
    public function setCode(string $code): IncidentDTO
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @param string $important
     * @return IncidentDTO
     */
    public function setImportant(string $important): IncidentDTO
    {
        $this->important = $important;

        return $this;
    }

    /**
     * @param string $importantForTrader
     * @return IncidentDTO
     */
    public function setImportantForTrader(string $importantForTrader): IncidentDTO
    {
        $this->importantForTrader = $importantForTrader;

        return $this;
    }

    /**
     * @param null|int $sportId
     * @return IncidentDTO
     */
    public function setSportId(?int $sportId): IncidentDTO
    {
        $this->sportId = $sportId;

        return $this;
    }

    /**
     * @param string $type
     * @return IncidentDTO
     */
    public function setType(string $type): IncidentDTO
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @param string $for
     * @return IncidentDTO
     */
    public function setFor(string $for): IncidentDTO
    {
        $this->for = $for;

        return $this;
    }

    /**
     * @param string|null $group
     * @return IncidentDTO
     */
    public function setGroup(?string $group): IncidentDTO
    {
        $this->group = $group;

        return $this;
    }

    /**
     * @param string $details
     * @return IncidentDTO
     */
    public function setDetails(string $details): IncidentDTO
    {
        $this->details = $details;

        return $this;
    }

    /**
     * @param string $gameBreak
     * @return IncidentDTO
     */
    public function setGameBreak(string $gameBreak): IncidentDTO
    {
        $this->gameBreak = $gameBreak;

        return $this;
    }

    /**
     * @param int $ut
     * @return IncidentDTO
     */
    public function setUt(int $ut): IncidentDTO
    {
        $this->ut = $ut;

        return $this;
    }
}
