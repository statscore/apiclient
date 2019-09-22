<?php

namespace Statscore\Model\Response\Sport;

use Statscore\Model\Response\Status\StatusDTO;
use Statscore\Model\Response\Venue\VenueSportDetailDTO;

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
     * @var integer
     */
    private $ut;

    /**
     * @var StatusDTO[]
     */
    private $statuses = [];

    /**
     * @var VenueSportDetailDTO[]
     */
    private $venueSportDetails = [];

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
     * @return integer
     */
    public function getUt(): int
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

    /**
     * @param int $id
     * @return SportDTO
     */
    public function setId(int $id): SportDTO
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param string $name
     * @return SportDTO
     */
    public function setName(string $name): SportDTO
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param string $url
     * @return SportDTO
     */
    public function setUrl(string $url): SportDTO
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @param string $active
     * @return SportDTO
     */
    public function setActive(string $active): SportDTO
    {
        $this->active = $active;

        return $this;
    }

    /**
     * @param string $hasTimer
     * @return SportDTO
     */
    public function setHasTimer(string $hasTimer): SportDTO
    {
        $this->hasTimer = $hasTimer;

        return $this;
    }

    /**
     * @param string $template
     * @return SportDTO
     */
    public function setTemplate(string $template): SportDTO
    {
        $this->template = $template;

        return $this;
    }

    /**
     * @param string $incidentsPositions
     * @return SportDTO
     */
    public function setIncidentsPositions(string $incidentsPositions): SportDTO
    {
        $this->incidentsPositions = $incidentsPositions;

        return $this;
    }

    /**
     * @param int $ut
     * @return SportDTO
     */
    public function setUt(int $ut): SportDTO
    {
        $this->ut = $ut;

        return $this;
    }

    /**
     * @param StatusDTO[] $statuses
     * @return SportDTO
     */
    public function setStatuses(array $statuses): SportDTO
    {
        $this->statuses = $statuses;

        return $this;
    }

    /**
     * @return VenueSportDetailDTO[]
     */
    public function getVenueSportDetails(): array
    {
        return $this->venueSportDetails;
    }

    /**
     * @param VenueSportDetailDTO[] $venueSportDetails
     * @return SportDTO
     */
    public function setVenueSportDetails(array $venueSportDetails): SportDTO
    {
        $this->venueSportDetails = $venueSportDetails;

        return $this;
    }
}
