<?php

namespace Statscore\Model\Response\Feed;

use Statscore\Model\Response\Event\EventDTO;
use Statscore\Model\Response\Feed\FeedIncidentDTO;

/**
 * Class FeedDataDTO
 * @package Statscore\Model\Response\Feed
 */
class FeedDataDTO
{
    /**
     * @var \Statscore\Model\Response\Feed\FeedIncidentDTO
     */
    private $incident;

    /**
     * @var \Statscore\Model\Response\Event\EventDTO
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
}