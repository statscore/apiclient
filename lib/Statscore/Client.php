<?php

namespace Statscore;

use GuzzleHttp\Client as Guzzle;
use GuzzleHttp\Exception\GuzzleException;
use Itav\Component\Serializer\Serializer;
use Itav\Component\Serializer\SerializerException;
use Statscore\Model\Response\Authorization\AuthorizationDTO;
use Statscore\Service\Areas\AreasService;
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
     * Statscore constructor.
     * @param int $clientId
     * @param string $secretKey
     */
    public function __construct(int $clientId, string $secretKey)
    {
        $this->service = new ApiService(new Guzzle([]), new Serializer());
        $this->service->setClientId($clientId);
        $this->service->setSecretKey($secretKey);
        $this->areas = new AreasService($this->service);
        $this->competitions = new CompetitionsService($this->service);
        $this->events = new EventsService($this->service);
        $this->feeds = new FeedsService($this->service);
        $this->groups = new GroupsService($this->service);
        $this->incidents = new IncidentsService($this->service);
        $this->languages = new LanguagesService($this->service);
        $this->livescore = new LivescoreService($this->service);
        $this->participants = new ParticipantsService($this->service);
        $this->rounds = new RoundsService($this->service);
    }

    /**
     * @return AuthorizationDTO
     * @throws AuthorizationException
     * @throws GuzzleException
     * @throws SerializerException
     */
    public function getToken(): AuthorizationDTO
    {
        return $this->service->getToken();
    }

    /**
     * @param string $token
     * @return Client
     */
    public function setToken(string $token)
    {
        $this->service->setToken($token);

        return $this;
    }
}