<?php

namespace Statscore\Model\Response;

/**
 * Class ResponseDTO
 * @package Statscore\Model\Response
 */
final class ResponseDTO
{
    /**
     * @var string
     */
    private $ver;

    /**
     * @var integer
     */
    private $timestamp;

    /**
     * @var MethodDTO
     */
    private $method;

    /**
     * @var mixed
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
     * @return integer
     */
    public function getTimestamp(): int
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
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     * @return ResponseDTO
     */
    public function setData($data): ResponseDTO
    {
        $this->data = $data;

        return $this;
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
     * @param int $timestamp
     * @return ResponseDTO
     */
    public function setTimestamp(int $timestamp): ResponseDTO
    {
        $this->timestamp = $timestamp;

        return $this;
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
}
