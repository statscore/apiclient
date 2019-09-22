<?php

namespace Statscore\Model\Response\Round;

/**
 * Class RoundDTO
 * @package Statscore\Model\Response\Round
 */
final class RoundDTO
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
     * @return int
     */
    public function getSort(): int
    {
        return $this->sort;
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
     * @return RoundDTO
     */
    public function setId(int $id): RoundDTO
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param string $name
     * @return RoundDTO
     */
    public function setName(string $name): RoundDTO
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param int $sort
     * @return RoundDTO
     */
    public function setSort(int $sort): RoundDTO
    {
        $this->sort = $sort;

        return $this;
    }

    /**
     * @param int $ut
     * @return RoundDTO
     */
    public function setUt(int $ut): RoundDTO
    {
        $this->ut = $ut;

        return $this;
    }
}
