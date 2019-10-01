<?php

namespace Statscore\Service;

use Statscore\Service\Serializer\Serializer;

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
    public const QUERY_TOKEN = 'token';

    public const ROUTE_AREAS = 'areas';
    public const ROUTE_BOOKED_EVENTS = 'booked-events';
    public const ROUTE_COMPETITIONS = 'competitions';
    public const ROUTE_EVENTS = 'events';
    public const ROUTE_FEED = 'feed';
    public const ROUTE_GROUPS = 'groups';
    public const ROUTE_INCIDENTS = 'incidents';
    public const ROUTE_LANGUAGES = 'languages';
    public const ROUTE_LIVESCORE = 'livescore';
    public const ROUTE_PARTICIPANTS = 'participants';
    public const ROUTE_ROUNDS = 'rounds';
    public const ROUTE_SEASONS = 'seasons';
    public const ROUTE_SPORTS = 'sports';
    public const ROUTE_STAGES = 'stages';
    public const ROUTE_STANDINGS = 'standings';
    public const ROUTE_STATUSES = 'statuses';
    public const ROUTE_TOURS = 'tours';
    public const ROUTE_VENUES = 'venues';

    public const API_VERSION = 'v2';
    public const API_URI = 'https://api.statscore.com';

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
