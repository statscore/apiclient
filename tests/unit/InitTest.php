<?php

namespace UnitTests;

use Statscore\Client;

/**
 * Class InitTests
 * @package UnitTests
 */
class InitTests extends TestCase
{

    public function testInitClass()
    {
        $this->assertInstanceOf(Client::class, $this->client);
    }

    public function testSetClientId()
    {
        $this->assertInstanceOf(Client::class, $this->client->setClientId(1));
    }

    public function testSetSecretKey()
    {
        $this->assertInstanceOf(Client::class, $this->client->setSecretKey('dsadsadas'));
    }
}