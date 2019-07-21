<?php

namespace UnitTests;

use GuzzleHttp\Exception\GuzzleException;
use Itav\Component\Serializer\SerializerException;

/**
 * Class AreaTest
 * @package UnitTests
 */
class AreaTest extends TestCase
{
    /**
     * @throws GuzzleException
     * @throws SerializerException
     */
    public function testGetAll()
    {
        $this->client->area->getAll();
    }
}