<?php

namespace Statscore\Model\Response\Group;

use Statscore\Model\Response\Event\EventDTO;

/**
 * Class GroupDTO
 * @package Statscore\Model\Response\Group
 */
final class GroupDTO
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $ut;

    /**
     * @var EventDTO[]
     */
    private $events = [];

    /**
     * @return string|null
     */
    public function getId(): ?string
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
    public function getUt(): string
    {
        return $this->ut;
    }

    /**
     * @return EventDTO[]
     */
    public function getEvents(): array
    {
        return $this->events;
    }

    /**
     * @param string|null $id
     * @return GroupDTO
     */
    public function setId(?string $id): GroupDTO
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param string $name
     * @return GroupDTO
     */
    public function setName(string $name): GroupDTO
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param string $ut
     * @return GroupDTO
     */
    public function setUt(string $ut): GroupDTO
    {
        $this->ut = $ut;

        return $this;
    }

    /**
     * @param EventDTO[] $events
     * @return GroupDTO
     */
    public function setEvents(array $events): GroupDTO
    {
        $this->events = $events;

        return $this;
    }
}
