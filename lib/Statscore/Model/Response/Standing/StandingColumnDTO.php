<?php

namespace Statscore\Model\Response\Standing;

/**
 * Class StandingColumnDTO
 * @package Statscore\Model\Response\Standing
 */
final class StandingColumnDTO
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
    private $code;

    /**
     * @var mixed
     */
    private $value;

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
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param int $id
     * @return StandingColumnDTO
     */
    public function setId(int $id): StandingColumnDTO
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param string $name
     * @return StandingColumnDTO
     */
    public function setName(string $name): StandingColumnDTO
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param string $shortName
     * @return StandingColumnDTO
     */
    public function setShortName(string $shortName): StandingColumnDTO
    {
        $this->shortName = $shortName;

        return $this;
    }

    /**
     * @param string $code
     * @return StandingColumnDTO
     */
    public function setCode(string $code): StandingColumnDTO
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @param mixed $value
     * @return StandingColumnDTO
     */
    public function setValue($value): StandingColumnDTO
    {
        $this->value = $value;

        return $this;
    }

}