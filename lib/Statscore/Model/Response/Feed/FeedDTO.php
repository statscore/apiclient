<?php

namespace Statscore\Model\Response\Feed;

/**
 * Class FeedDTO
 * @package Statscore\Model\Response\Feed
 */
class FeedDTO
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $type;

    /**
     * @var int
     */
    private $ut;

    /**
     * @var integer
     */
    private $source;

    /**
     * @var FeedDataDTO
     */
    private $data;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return integer
     */
    public function getUt(): int
    {
        return $this->ut;
    }

    /**
     * @return int
     */
    public function getSource(): int
    {
        return $this->source;
    }

    /**
     * @return FeedDataDTO
     */
    public function getData(): FeedDataDTO
    {
        return $this->data;
    }

    /**
     * @param int $id
     * @return FeedDTO
     */
    public function setId(int $id): FeedDTO
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param string $type
     * @return FeedDTO
     */
    public function setType(string $type): FeedDTO
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @param int $ut
     * @return FeedDTO
     */
    public function setUt(int $ut): FeedDTO
    {
        $this->ut = $ut;

        return $this;
    }

    /**
     * @param int $source
     * @return FeedDTO
     */
    public function setSource(int $source): FeedDTO
    {
        $this->source = $source;

        return $this;
    }

    /**
     * @param FeedDataDTO $data
     * @return FeedDTO
     */
    public function setData(FeedDataDTO $data): FeedDTO
    {
        $this->data = $data;

        return $this;
    }

}