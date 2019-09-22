<?php

namespace Statscore\Model\Response\Participant;

/**
 * Class ParticipantDetailsDTO
 * @package Statscore\Model\Response\Participant
 */
final class ParticipantDetailsDTO
{
    /**
     * @var string
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
     * @var string
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
     * @var string
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
     * @return string
     */
    public function getFounded(): string
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
     * @return string
     */
    public function getVenueId(): string
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
     * @return string
     */
    public function getPositionId(): string
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

    /**
     * @param string $founded
     * @return ParticipantDetailsDTO
     */
    public function setFounded(string $founded): ParticipantDetailsDTO
    {
        $this->founded = $founded;

        return $this;
    }

    /**
     * @param string $phone
     * @return ParticipantDetailsDTO
     */
    public function setPhone(string $phone): ParticipantDetailsDTO
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * @param string $email
     * @return ParticipantDetailsDTO
     */
    public function setEmail(string $email): ParticipantDetailsDTO
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @param string $address
     * @return ParticipantDetailsDTO
     */
    public function setAddress(string $address): ParticipantDetailsDTO
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @param string $venueId
     * @return ParticipantDetailsDTO
     */
    public function setVenueId(string $venueId): ParticipantDetailsDTO
    {
        $this->venueId = $venueId;

        return $this;
    }

    /**
     * @param string $venueName
     * @return ParticipantDetailsDTO
     */
    public function setVenueName(string $venueName): ParticipantDetailsDTO
    {
        $this->venueName = $venueName;

        return $this;
    }

    /**
     * @param string $weight
     * @return ParticipantDetailsDTO
     */
    public function setWeight(string $weight): ParticipantDetailsDTO
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * @param string $height
     * @return ParticipantDetailsDTO
     */
    public function setHeight(string $height): ParticipantDetailsDTO
    {
        $this->height = $height;

        return $this;
    }

    /**
     * @param string $nickname
     * @return ParticipantDetailsDTO
     */
    public function setNickname(string $nickname): ParticipantDetailsDTO
    {
        $this->nickname = $nickname;

        return $this;
    }

    /**
     * @param string $positionName
     * @return ParticipantDetailsDTO
     */
    public function setPositionName(string $positionName): ParticipantDetailsDTO
    {
        $this->positionName = $positionName;

        return $this;
    }

    /**
     * @param string $positionId
     * @return ParticipantDetailsDTO
     */
    public function setPositionId(string $positionId): ParticipantDetailsDTO
    {
        $this->positionId = $positionId;

        return $this;
    }

    /**
     * @param string $birthdate
     * @return ParticipantDetailsDTO
     */
    public function setBirthdate(string $birthdate): ParticipantDetailsDTO
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * @param string $bornPlace
     * @return ParticipantDetailsDTO
     */
    public function setBornPlace(string $bornPlace): ParticipantDetailsDTO
    {
        $this->bornPlace = $bornPlace;

        return $this;
    }

    /**
     * @param string $isRetired
     * @return ParticipantDetailsDTO
     */
    public function setIsRetired(string $isRetired): ParticipantDetailsDTO
    {
        $this->isRetired = $isRetired;

        return $this;
    }

    /**
     * @param string $subtype
     * @return ParticipantDetailsDTO
     */
    public function setSubtype(string $subtype): ParticipantDetailsDTO
    {
        $this->subtype = $subtype;

        return $this;
    }
}
