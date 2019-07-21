<?php

namespace UnitTests;

use Itav\Component\Serializer\Serializer;
use PHPUnit\Framework\TestCase as BaseTest;
use Statscore\Client;

abstract class TestCase extends BaseTest
{
    /**
     * @var Client
     */
    protected $client;

    /**
     * @var Serializer
     */
    protected $serializer;

    public function setUp(): void
    {
        parent::setUp();

        $this->serializer = new Serializer();
    }
}