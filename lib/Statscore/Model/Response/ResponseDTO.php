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
     * @var object
     */
    private $data;

    /**
     * @return string
     */
    public function getVer(): string
    {
        return $this->ver;
    }

    /**
     * @param string $ver
     * @return ResponseDTO
     */
    public function setVer(string $ver): ResponseDTO
    {
        $this->ver = $ver;

        return $this;
    }

    /**
     * @return string
     */
    public function getTimestamp(): string
    {
        return $this->timestamp;
    }

    /**
     * @param string $timestamp
     * @return ResponseDTO
     */
    public function setTimestamp(string $timestamp): ResponseDTO
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * @return MethodDTO
     */
    public function getMethod(): MethodDTO
    {
        return $this->method;
    }

    /**
     * @param MethodDTO $method
     * @return ResponseDTO
     */
    public function setMethod(MethodDTO $method): ResponseDTO
    {
        $this->method = $method;

        return $this;
    }

    /**
     * @return object
     */
    public function getData(): object
    {
        return $this->data;
    }

    /**
     * @param object $data
     * @return ResponseDTO
     */
    public function setData(object $data): ResponseDTO
    {
        $this->data = $data;

        return $this;
    }
}