<?php

namespace Statscore\Model\Response\Round;

/**
 * Class RoundDTO
 * @package Statscore\Model\Response\Round
 */
class RoundDTO
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
    private $sort;

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
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getSort(): int
    {
        return $this->sort;
    }

    /**
     * @return string
     */
    public function getUt(): string
    {
        return $this->ut;
    }
}