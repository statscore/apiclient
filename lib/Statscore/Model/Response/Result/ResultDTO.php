<?php

namespace Statscore\Model\Response\Result;

/**
 * Class ResultDTO
 * @package Statscore\Model\Response\Result
 */
class ResultDTO
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
     * @return ResultDTO
     */
    public function setId(int $id): ResultDTO
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param string $shortName
     * @return ResultDTO
     */
    public function setShortName(string $shortName): ResultDTO
    {
        $this->shortName = $shortName;

        return $this;
    }

    /**
     * @param string $name
     * @return ResultDTO
     */
    public function setName(string $name): ResultDTO
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param mixed $value
     * @return ResultDTO
     */
    public function setValue($value): ResultDTO
    {
        $this->value = $value;

        return $this;
    }

}