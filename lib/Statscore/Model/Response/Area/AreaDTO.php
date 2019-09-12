<?php

namespace Statscore\Model\Response\Area;

/**
 * Class AreaDTO
 * @package Statscore\Model\Response\Area
 */
class AreaDTO
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $areaCode;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $parentAreaId;

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
    public function getAreaCode(): string
    {
        return $this->areaCode;
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
    public function getParentAreaId(): string
    {
        return $this->parentAreaId;
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
     * @return AreaDTO
     */
    public function setId(int $id): AreaDTO
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param string $areaCode
     * @return AreaDTO
     */
    public function setAreaCode(string $areaCode): AreaDTO
    {
        $this->areaCode = $areaCode;

        return $this;
    }

    /**
     * @param string $name
     * @return AreaDTO
     */
    public function setName(string $name): AreaDTO
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param string $parentAreaId
     * @return AreaDTO
     */
    public function setParentAreaId(string $parentAreaId): AreaDTO
    {
        $this->parentAreaId = $parentAreaId;

        return $this;
    }

    /**
     * @param int $ut
     * @return AreaDTO
     */
    public function setUt(int $ut): AreaDTO
    {
        $this->ut = $ut;

        return $this;
    }
}