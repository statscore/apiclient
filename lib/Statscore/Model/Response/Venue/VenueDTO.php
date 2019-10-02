<?php

namespace Statscore\Model\Response\Venue;

use Statscore\Model\Response\Sport\SportDTO;

/**
 * @package Statscore\Model\Response\Venue
 */
final class VenueDTO
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
    private $shortName;

    /**
     * @var string
     */
    private $country;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $lat;

    /**
     * @var string
     */
    private $lng;

    /**
     * @var string
     */
    private $opened;

    /**
     * @var string
     */
    private $photo;

    /**
     * @var integer
     */
    private $ut;

    /**
     * @var SportDTO[]
     */
    private $sports;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return VenueDTO
     */
    public function setId(int $id): VenueDTO
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return VenueDTO
     */
    public function setName(string $name): VenueDTO
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getShortName(): string
    {
        return $this->shortName;
    }

    /**
     * @param string $shortName
     * @return VenueDTO
     */
    public function setShortName(string $shortName): VenueDTO
    {
        $this->shortName = $shortName;

        return $this;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return VenueDTO
     */
    public function setCountry(string $country): VenueDTO
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return VenueDTO
     */
    public function setStatus(string $status): VenueDTO
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return VenueDTO
     */
    public function setUrl(string $url): VenueDTO
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return VenueDTO
     */
    public function setCity(string $city): VenueDTO
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return string
     */
    public function getLat(): string
    {
        return $this->lat;
    }

    /**
     * @param string $lat
     * @return VenueDTO
     */
    public function setLat(string $lat): VenueDTO
    {
        $this->lat = $lat;

        return $this;
    }

    /**
     * @return string
     */
    public function getLng(): string
    {
        return $this->lng;
    }

    /**
     * @param string $lng
     * @return VenueDTO
     */
    public function setLng(string $lng): VenueDTO
    {
        $this->lng = $lng;

        return $this;
    }

    /**
     * @return string
     */
    public function getOpened(): string
    {
        return $this->opened;
    }

    /**
     * @param string $opened
     * @return VenueDTO
     */
    public function setOpened(string $opened): VenueDTO
    {
        $this->opened = $opened;

        return $this;
    }

    /**
     * @return string
     */
    public function getPhoto(): string
    {
        return $this->photo;
    }

    /**
     * @param string $photo
     * @return VenueDTO
     */
    public function setPhoto(string $photo): VenueDTO
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * @return int
     */
    public function getUt(): int
    {
        return $this->ut;
    }

    /**
     * @param int $ut
     * @return VenueDTO
     */
    public function setUt(int $ut): VenueDTO
    {
        $this->ut = $ut;

        return $this;
    }

    /**
     * @return SportDTO[]
     */
    public function getSports(): array
    {
        return $this->sports;
    }

    /**
     * @param SportDTO[] $sports
     * @return VenueDTO
     */
    public function setSports(array $sports): VenueDTO
    {
        $this->sports = $sports;

        return $this;
    }
}
