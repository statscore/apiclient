<?php

namespace Statscore\Model\Response\Participant;

/**
 * Class ParticipantDetailsDTO
 * @package Statscore\Model\Response\Participant
 */
class ParticipantDetailsDTO
{
    /**
     * @var integer
     */
    private $founded;

    /**
     * @var string
     */
    private $phone;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $address;

    /**
     * @var integer
     */
    private $venueId;

    /**
     * @var string
     */
    private $venueName;

    /**
     * @var string
     */
    private $weight;

    /**
     * @var string
     */
    private $height;

    /**
     * @var string
     */
    private $nickname;

    /**
     * @var string
     */
    private $positionName;

    /**
     * @var integer
     */
    private $positionId;

    /**
     * @var string
     */
    private $birthdate;

    /**
     * @var string
     */
    private $bornPlace;

    /**
     * @var string
     */
    private $isRetired;

    /**
     * @var string
     */
    private $subtype;

    /**
     * @return int
     */
    public function getFounded(): int
    {
        return $this->founded;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @return int
     */
    public function getVenueId(): int
    {
        return $this->venueId;
    }

    /**
     * @return string
     */
    public function getVenueName(): string
    {
        return $this->venueName;
    }

    /**
     * @return string
     */
    public function getWeight(): string
    {
        return $this->weight;
    }

    /**
     * @return string
     */
    public function getHeight(): string
    {
        return $this->height;
    }

    /**
     * @return string
     */
    public function getNickname(): string
    {
        return $this->nickname;
    }

    /**
     * @return string
     */
    public function getPositionName(): string
    {
        return $this->positionName;
    }

    /**
     * @return int
     */
    public function getPositionId(): int
    {
        return $this->positionId;
    }

    /**
     * @return string
     */
    public function getBirthdate(): string
    {
        return $this->birthdate;
    }

    /**
     * @return string
     */
    public function getBornPlace(): string
    {
        return $this->bornPlace;
    }

    /**
     * @return string
     */
    public function getIsRetired(): string
    {
        return $this->isRetired;
    }

    /**
     * @return string
     */
    public function getSubtype(): string
    {
        return $this->subtype;
    }
}