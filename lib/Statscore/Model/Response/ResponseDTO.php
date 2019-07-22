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
}