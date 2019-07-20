<?php

namespace Statscore\Service\Exception;

use Exception;

class AuthorizationException extends Exception
{

    const ERROR_AUTHORIZATION_CLIENT_ID = 'Client ID missing.';
    const ERROR_AUTHORIZATION_SECRET_KEY = 'Secret key missing.';

    /**
     * AuthorizationException constructor.
     * @param $message
     * @param int $code
     * @param Exception|null $previous
     */
    public function __construct(string $message, int $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}