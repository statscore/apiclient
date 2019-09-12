<?php

namespace Statscore\Model\Response\Detail;

/**
 * Class DetailDTO
 * @package Statscore\Model\Response\Detail
 */
class DetailDTO
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
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param int $id
     * @return DetailDTO
     */
    public function setId(int $id): DetailDTO
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param string $name
     * @return DetailDTO
     */
    public function setName(string $name): DetailDTO
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param mixed $value
     * @return DetailDTO
     */
    public function setValue($value): DetailDTO
    {
        $this->value = $value;

        return $this;
    }
}