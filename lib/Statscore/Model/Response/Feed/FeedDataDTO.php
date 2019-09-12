<?php

namespace Statscore\Model\Response\Feed;

use Statscore\Model\Response\Event\EventDTO;

/**
 * Class FeedDataDTO
 * @package Statscore\Model\Response\Feed
 */
class FeedDataDTO
{
    /**
     * @var FeedIncidentDTO
     */
    private $incident;

    /**
     * @var EventDTO
     */
    private $event;

    /**
     * @return FeedIncidentDTO
     */
    public function getIncident(): FeedIncidentDTO
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

    /**
     * @param FeedIncidentDTO $incident
     * @return FeedDataDTO
     */
    public function setIncident(FeedIncidentDTO $incident): FeedDataDTO
    {
        $this->incident = $incident;

        return $this;
    }

    /**
     * @param EventDTO $event
     * @return FeedDataDTO
     */
    public function setEvent(EventDTO $event): FeedDataDTO
    {
        $this->event = $event;

        return $this;
    }


}