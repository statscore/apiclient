<?php

namespace Statscore\Model\Response\Standing;

/**
 * @package Statscore\Model\Response\Standing
 */
final class StandingZoneDTO
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
    private $colour;

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
    public function getColour(): string
    {
        return $this->colour;
    }

    /**
     * @param int $id
     * @return StandingZoneDTO
     */
    public function setId(int $id): StandingZoneDTO
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param string $name
     * @return StandingZoneDTO
     */
    public function setName(string $name): StandingZoneDTO
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param string $colour
     * @return StandingZoneDTO
     */
    public function setColour(string $colour): StandingZoneDTO
    {
        $this->colour = $colour;

        return $this;
    }
}
