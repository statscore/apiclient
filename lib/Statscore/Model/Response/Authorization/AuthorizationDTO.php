<?php

namespace Statscore\Model\Response\Authorization;

/**
 * Class AuthorizationDTO
 * @package Statscore\Model\Response\Authorization
 */
class AuthorizationDTO
{
    /**
     * @var string
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
     * @return string
     */
    public function getClientId(): string
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

    /**
     * @param string $clientId
     * @return AuthorizationDTO
     */
    public function setClientId(string $clientId): AuthorizationDTO
    {
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * @param string $token
     * @return AuthorizationDTO
     */
    public function setToken(string $token): AuthorizationDTO
    {
        $this->token = $token;

        return $this;
    }

    /**
     * @param int $tokenExpiration
     * @return AuthorizationDTO
     */
    public function setTokenExpiration(int $tokenExpiration): AuthorizationDTO
    {
        $this->tokenExpiration = $tokenExpiration;

        return $this;
    }
}