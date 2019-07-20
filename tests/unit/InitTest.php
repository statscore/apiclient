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

}