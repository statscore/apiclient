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
     * @var string
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
     * @return string
     */
    public function getUt(): string
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
}