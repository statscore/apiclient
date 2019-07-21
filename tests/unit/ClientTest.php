<?php

namespace UnitTests;

use GuzzleHttp\Exception\GuzzleException;
use Itav\Component\Serializer\SerializerException;
use Statscore\Client;
use Statscore\Service\Exception\AuthorizationException;

/**
 * Class ClientTest
 * @package UnitTests
 */
class ClientTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
        $this->client = new Client(1, 'dsadsdsads');
    }

    public function testInitClass()
    {
        $this->assertInstanceOf(Client::class, $this->client);
    }

    public function testSetToken()
    {
        $this->assertInstanceOf(Client::class, $this->client->setToken('dsadsadas'));
    }

    /**
     * @throws AuthorizationException
     * @throws GuzzleException
     * @throws SerializerException
     */
    public function testGetToken()
    {
        $this->expectException(AuthorizationException::class);
        $this->client = new Client(0, '');
        $this->client->getToken();
    }

}