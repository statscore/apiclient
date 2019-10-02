<?php

namespace Statscore\Model\Response\Standing;

/**
 * @package Statscore\Model\Response\Standing
 */
final class StandingTypeDTO
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
    private $ut;

    /**
     * @var StandingColumnDTO[]
     */
    private $columns;

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
     * @return integer
     */
    public function getUt(): int
    {
        return $this->ut;
    }

    /**
     * @return StandingColumnDTO[]
     */
    public function getColumns(): array
    {
        return $this->columns;
    }

    /**
     * @param int $id
     * @return StandingTypeDTO
     */
    public function setId(int $id): StandingTypeDTO
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param string $name
     * @return StandingTypeDTO
     */
    public function setName(string $name): StandingTypeDTO
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param int $ut
     * @return StandingTypeDTO
     */
    public function setUt(int $ut): StandingTypeDTO
    {
        $this->ut = $ut;

        return $this;
    }

    /**
     * @param StandingColumnDTO[] $columns
     * @return StandingTypeDTO
     */
    public function setColumns(array $columns): StandingTypeDTO
    {
        $this->columns = $columns;

        return $this;
    }
}
