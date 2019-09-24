<?php

namespace Statscore\Model\Response\Stat;

/**
 * Class StatDTO
 * @package Statscore\Model\Response\Stat
 */
final class StatDTO
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $shortName;

    /**
     * @var string
     */
    private $name;

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
    public function getShortName(): string
    {
        return $this->shortName;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
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
     * @return StatDTO
     */
    public function setId(int $id): StatDTO
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param string $shortName
     * @return StatDTO
     */
    public function setShortName(string $shortName): StatDTO
    {
        $this->shortName = $shortName;

        return $this;
    }

    /**
     * @param string $name
     * @return StatDTO
     */
    public function setName(string $name): StatDTO
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param mixed $value
     * @return StatDTO
     */
    public function setValue($value): StatDTO
    {
        $this->value = $value;

        return $this;
    }
}
