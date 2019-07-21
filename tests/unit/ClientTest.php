<?php

namespace UnitTests;

use Statscore\Client;

/**
 * Class ClientTest
 * @package UnitTests
 */
class ClientTest extends TestCase
{
    public function testInitClass()
    {
        $this->assertInstanceOf(Client::class, $this->client);
    }

    public function testSetToken()
    {
        $this->assertInstanceOf(Client::class, $this->client->setToken('dsadsadas'));
    }

}