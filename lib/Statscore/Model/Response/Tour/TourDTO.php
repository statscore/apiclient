<?php

namespace Statscore\Model\Response\Tour;

/**
 * Class TourDTO
 * @package Statscore\Model\Response\Tour
 */
final class TourDTO
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
    private $sportId;

    /**
     * @var integer
     */
    private $sortOrder;

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
     * @param int $id
     * @return TourDTO
     */
    public function setId(int $id): TourDTO
    {
        $this->id = $id;

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
     * @return TourDTO
     */
    public function setName(string $name): TourDTO
    {
        $this->name = $name;

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
     * @return TourDTO
     */
    public function setSportId(int $sportId): TourDTO
    {
        $this->sportId = $sportId;

        return $this;
    }

    /**
     * @return int
     */
    public function getSortOrder(): int
    {
        return $this->sortOrder;
    }

    /**
     * @param int $sortOrder
     * @return TourDTO
     */
    public function setSortOrder(int $sortOrder): TourDTO
    {
        $this->sortOrder = $sortOrder;

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
     * @return TourDTO
     */
    public function setUt(int $ut): TourDTO
    {
        $this->ut = $ut;

        return $this;
    }
}
