<?php

namespace Statscore\Service;

abstract class Api
{
    public const QUERY_CLIENT_ID = 'client_id';
    public const QUERY_COMPARE_PARTICIPANT_ID = 'compare_participant_id';
    public const QUERY_COMPETITION_ID = 'competition_id';
    public const QUERY_EVENT_ID = 'event_id';
    public const QUERY_PARTICIPANT_ID = 'participant_id';
    public const QUERY_PRODUCT = 'product';
    public const QUERY_SPORT_ID = 'sport_id';
    public const QUERY_STAGE_ID = 'stage_id';
    public const QUERY_STANDING_ID = 'standing_id';
    public const QUERY_TIMESTAMP = 'timestamp';

    /**
     * @var ApiService
     */
    protected $service;

    /**
     * @var Serializer
     */
    protected $serializer;

    /**
     * AbstractService constructor.
     * @param ApiService $service
     */
    public function __construct(ApiService $service)
    {
        $this->service = $service;
        $this->serializer = $service->serializer;
    }
}
