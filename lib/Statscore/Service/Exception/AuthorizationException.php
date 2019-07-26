<?php

namespace Statscore\Service\Exception;

use Exception;

/**
 * Class AuthorizationException
 * @package Statscore\Service\Exception
 */
class AuthorizationException extends Exception
{
    const ERROR_AUTHORIZATION_CLIENT_ID = 'Client ID missing.';
    const ERROR_AUTHORIZATION_SECRET_KEY = 'Secret key missing.';
}