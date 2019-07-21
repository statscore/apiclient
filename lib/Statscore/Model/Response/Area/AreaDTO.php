<?php

namespace Statscore\Model\Response\Area;

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
     * @var integer
     */
    private $parentAreaId;

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
     * @return int
     */
    public function getParentAreaId(): int
    {
        return $this->parentAreaId;
    }

    /**
     * @return string
     */
    public function getUt(): string
    {
        return $this->ut;
    }
}