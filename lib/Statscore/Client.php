<?php

namespace Statscore;

use GuzzleHttp\Client as Guzzle;
use GuzzleHttp\Exception\GuzzleException;
use Statscore\Model\Response\Authorization\AuthorizationDTO;
use Statscore\Service\Api;
use Statscore\Service\Areas\AreasService;
use Statscore\Service\BookedEvents\BookedEventsService;
use Statscore\Service\Competitions\CompetitionsService;
use Statscore\Service\Events\EventsService;
use Statscore\Service\Exception\AuthorizationException;
use Statscore\Service\ApiService;
use Statscore\Service\Feeds\FeedsService;
use Statscore\Service\Groups\GroupsService;
use Statscore\Service\Incidents\IncidentsService;
use Statscore\Service\Languages\LanguagesService;
use Statscore\Service\Livescore\LivescoreService;
use Statscore\Service\Participants\ParticipantsService;
use Statscore\Service\Rounds\RoundsService;
use Statscore\Service\Seasons\SeasonsService;
use Statscore\Service\Serializer\Serializer;
use Statscore\Service\Sports\SportsService;
use Statscore\Service\Stages\StagesService;
use Statscore\Service\Standings\StandingsService;
use Statscore\Service\Statuses\StatusesService;
use Statscore\Service\Tours\ToursService;
use Statscore\Service\Venues\VenuesService;
use Symfony\Component\Serializer\Exception\ExceptionInterface;

/**
 * Class Client
 * @package Statscore
 */
final class Client
{
    /**
     * @var ApiService
     */
    private $service;

    /**
     * @var AreasService
     */
    public $areas;

    /**
     * @var CompetitionsService
     */
    public $competitions;

    /**
     * @var EventsService
     */
    public $events;

    /**
     * @var FeedsService
     */
    public $feeds;

    /**
     * @var GroupsService
     */
    public $groups;

    /**
     * @var IncidentsService
     */
    public $incidents;

    /**
     * @var LanguagesService
     */
    public $languages;

    /**
     * @var LivescoreService
     */
    public $livescore;

    /**
     * @var ParticipantsService
     */
    public $participants;

    /**
     * @var RoundsService
     */
    public $rounds;

    /**
     * @var SeasonsService
     */
    public $seasons;

    /**
     * @var SportsService
     */
    public $sports;

    /**
     * @var StagesService
     */
    public $stages;

    /**
     * @var StandingsService
     */
    public $standings;

    /**
     * @var VenuesService
     */
    public $venues;

    /**
     * @var StatusesService
     */
    public $statuses;

    /**
     * @var ToursService
     */
    public $tours;

    /**
     * @var BookedEventsService
     */
    public $bookedEvents;

    /**
     * Statscore constructor.
     * @param int $clientId
     * @param string $secretKey
     * @param string $url
     * @param string $version
     */
    public function __construct(
        int $clientId,
        string $secretKey,
        string $url = Api::API_URI,
        string $version = Api::API_VERSION
    ) {
        $this->service = new ApiService(new Guzzle([]), Serializer::get());
        $this->service->setClientId($clientId);
        $this->service->setSecretKey($secretKey);
        $this->service->setUrl($url);
        $this->service->setVersion($version);
        $this->areas = new AreasService($this->service);
        $this->bookedEvents = new BookedEventsService($this->service);
        $this->competitions = new CompetitionsService($this->service);
        $this->events = new EventsService($this->service);
        $this->feeds = new FeedsService($this->service);
        $this->groups = new GroupsService($this->service);
        $this->incidents = new IncidentsService($this->service);
        $this->languages = new LanguagesService($this->service);
        $this->livescore = new LivescoreService($this->service);
        $this->participants = new ParticipantsService($this->service);
        $this->rounds = new RoundsService($this->service);
        $this->seasons = new SeasonsService($this->service);
        $this->sports = new SportsService($this->service);
        $this->stages = new StagesService($this->service);
        $this->standings = new StandingsService($this->service);
        $this->statuses = new StatusesService($this->service);
        $this->tours = new ToursService($this->service);
        $this->venues = new VenuesService($this->service);
    }

    /**
     * @return AuthorizationDTO
     * @throws AuthorizationException
     * @throws GuzzleException
     * @throws ExceptionInterface
     */
    public function authorize(): AuthorizationDTO
    {
        return $this->service->authorize();
    }

    /**
     * @param string $token
     * @return Client
     */
    public function setToken(string $token): Client
    {
        $this->service->setToken($token);

        return $this;
    }
}
