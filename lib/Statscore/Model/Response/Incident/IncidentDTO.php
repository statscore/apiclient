<?php

namespace Statscore\Model\Response\Incident;

/**
 * Class IncidentDTO
 * @package Statscore\Model\Response\Incident
 */
class IncidentDTO
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
     * @var integer
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
     * @var string
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
     * @return int
     */
    public function getSportId(): int
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
     * @return string
     */
    public function getUt(): string
    {
        return $this->ut;
    }
}