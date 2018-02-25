<?php

namespace AGrimes94\Esi\Tests;

use AGrimes94\Esi\EsiClient;
use Http\Client\Common\HttpMethodsClient;
use Http\Mock\Client;
use PHPUnit\Framework\TestCase;

class EsiClientTest extends TestCase
{
    /**
     * Test that a client isn't required to be passed to constructor.
     */
    public function testDoNotHaveToPassHttpClientToConstructor()
    {
        $esiClient = EsiClient::create();
        self::assertInstanceOf(HttpMethodsClient::class, $esiClient->getHttpClient());
    }

    /**
     * Test that passing a client to the constructor is set correctly.
     */
    public function testPassHttpClientToConstructor()
    {
        $mockClient = new Client();
        $client = EsiClient::createWithHttpClient($mockClient);

        $this->assertInstanceOf(HttpMethodsClient::class, $client->getHttpClient());
    }
}
