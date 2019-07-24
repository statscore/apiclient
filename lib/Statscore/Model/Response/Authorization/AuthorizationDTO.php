<?php

namespace Statscore\Model\Response\Authorization;

/**
 * Class AuthorizationDTO
 * @package Statscore\Model\Response\Authorization
 */
class AuthorizationDTO
{
    /**
     * @var integer
     */
    private $clientId;

    /**
     * @var string
     */
    private $token;

    /**
     * @var integer
     */
    private $tokenExpiration;

    /**
     * @return int
     */
    public function getClientId(): int
    {
        return $this->clientId;
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * @return int
     */
    public function getTokenExpiration(): int
    {
        return $this->tokenExpiration;
    }

}