<?php

namespace Statscore\Model\Response\Sport;

use Statscore\Model\Response\Status\StatusDTO;

/**
 * Class SportDTO
 * @package Statscore\Model\Response\Sport
 */
class SportDTO
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
    private $url;

    /**
     * @var string
     */
    private $active;

    /**
     * @var string
     */
    private $hasTimer;

    /**
     * @var string
     */
    private $template;

    /**
     * @var string
     */
    private $incidentsPositions;

    /**
     * @var string
     */
    private $ut;

    /**
     * @var \Statscore\Model\Response\Status\StatusDTO[]
     */
    private $statuses = [];

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
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @return string
     */
    public function getActive(): string
    {
        return $this->active;
    }

    /**
     * @return string
     */
    public function getHasTimer(): string
    {
        return $this->hasTimer;
    }

    /**
     * @return string
     */
    public function getTemplate(): string
    {
        return $this->template;
    }

    /**
     * @return string
     */
    public function getIncidentsPositions(): string
    {
        return $this->incidentsPositions;
    }

    /**
     * @return string
     */
    public function getUt(): string
    {
        return $this->ut;
    }

    /**
     * @return StatusDTO[]
     */
    public function getStatuses(): array
    {
        return $this->statuses;
    }
}