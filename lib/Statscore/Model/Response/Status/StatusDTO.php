<?php

namespace Statscore\Model\Response\Status;

/**
 * Class StatusDTO
 * @package Statscore\Model\Response\Status
 */
final class StatusDTO
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
    private $shortName;

    /**
     * @var string
     */
    private $type;

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
    public function getShortName(): string
    {
        return $this->shortName;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
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
     * @return StatusDTO
     */
    public function setId(int $id): StatusDTO
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param string $name
     * @return StatusDTO
     */
    public function setName(string $name): StatusDTO
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param string $shortName
     * @return StatusDTO
     */
    public function setShortName(string $shortName): StatusDTO
    {
        $this->shortName = $shortName;

        return $this;
    }

    /**
     * @param string $type
     * @return StatusDTO
     */
    public function setType(string $type): StatusDTO
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @param int $ut
     * @return StatusDTO
     */
    public function setUt(int $ut): StatusDTO
    {
        $this->ut = $ut;

        return $this;
    }
}
