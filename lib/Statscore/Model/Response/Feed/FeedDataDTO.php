<?php

namespace Statscore\Model\Response\Feed;

use Statscore\Model\Response\Event\EventDTO;
use Statscore\Model\Response\Incident\IncidentDTO;

/**
 * Class FeedDataDTO
 * @package Statscore\Model\Response\Feed
 */
class FeedDataDTO
{
    /**
     * @var \Statscore\Model\Response\Incident\IncidentDTO
     */
    private $incident;

    /**
     * @var \Statscore\Model\Response\Event\EventDTO
     */
    private $event;

    /**
     * @return IncidentDTO
     */
    public function getIncident(): IncidentDTO
    {
        return $this->incident;
    }

    /**
     * @return EventDTO
     */
    public function getEvent(): EventDTO
    {
        return $this->event;
    }
}