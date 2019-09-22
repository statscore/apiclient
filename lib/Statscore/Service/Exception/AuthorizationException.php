<?php

namespace Statscore\Service\Exception;

use Exception;

/**
 * Class AuthorizationException
 * @package Statscore\Service\Exception
 */
final class AuthorizationException extends Exception
{
    public const ERROR_AUTHORIZATION_CLIENT_ID = 'Client ID missing.';
    public const ERROR_AUTHORIZATION_SECRET_KEY = 'Secret key missing.';
}