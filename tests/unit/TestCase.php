<?php

namespace UnitTests;

use PHPUnit\Framework\TestCase as BaseTest;
use Statscore\Client;

abstract class TestCase extends BaseTest
{
    /**
     * @var Client
     */
    protected $client;

    public function setUp(): void
    {
        parent::setUp();

        $this->client = new Client();
    }
}