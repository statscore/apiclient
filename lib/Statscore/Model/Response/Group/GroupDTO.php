<?php

namespace Statscore\Model\Response\Group;

use Statscore\Model\Response\Event\EventDTO;

/**
 * Class GroupDTO
 * @package Statscore\Model\Response\Group
 */
class GroupDTO
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
    private $ut;

    /**
     * @var \Statscore\Model\Response\Event\EventDTO[]
     */
    private $events = [];

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
}