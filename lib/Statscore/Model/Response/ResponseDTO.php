<?php

namespace Statscore\Model\Response;

/**
 * Class ResponseDTO
 * @package Statscore\Model\Response
 */
class ResponseDTO
{
    /**
     * @var string
     */
    private $ver;

    /**
     * @var string
     */
    private $timestamp;

    /**
     * @var MethodDTO
     */
    private $method;

    /**
     * @var array
     */
    private $data = [];

    /**
     * @return string
     */
    public function getVer(): string
    {
        return $this->ver;
    }

    /**
     * @return string
     */
    public function getTimestamp(): string
    {
        return $this->timestamp;
    }

    /**
     * @return MethodDTO
     */
    public function getMethod(): MethodDTO
    {
        return $this->method;
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param array $data
     * @return ResponseDTO
     */
    public function setData(array $data): ResponseDTO
    {
        $this->data = $data;

        return $this;
    }
}