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
        $this->assertInstanceOf(HttpMethodsClient::class, $esiClient->getHttpClient());
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

    public function testInstantiation()
    {
        $esiClient = EsiClient::create();
        $this->assertInstanceOf(EsiClient::class, $esiClient);
    }

    /**
     * @dataProvider getApiClassesProvider
     *
     * @param $apiName
     * @param $class
     */
    public function testGetApiInstance($apiName, $class)
    {
        $client = EsiClient::create();
        $this->assertInstanceOf($class, $client->$apiName());
    }

    public function getApiClassesProvider()
    {
        return [
            ['alliance', \AGrimes94\Esi\Api\Alliance::class],
            ['assets', \AGrimes94\Esi\Api\Assets::class],
            ['bookmarks', \AGrimes94\Esi\Api\Bookmarks::class],
            ['calendar', \AGrimes94\Esi\Api\Calendar::class],
            ['character', \AGrimes94\Esi\Api\Character::class],
            ['clones', \AGrimes94\Esi\Api\Clones::class],
            ['contacts', \AGrimes94\Esi\Api\Contacts::class],
            ['contracts', \AGrimes94\Esi\Api\Contracts::class],
            ['corporation', \AGrimes94\Esi\Api\Corporation::class],
            ['dogma', \AGrimes94\Esi\Api\Dogma::class],
            ['factionWarfare', \AGrimes94\Esi\Api\FactionWarfare::class],
            ['fittings', \AGrimes94\Esi\Api\Fittings::class],
            ['fleets', \AGrimes94\Esi\Api\Fleets::class],
            ['incursions', \AGrimes94\Esi\Api\Incursions::class],
            ['industry', \AGrimes94\Esi\Api\Industry::class],
            ['insurance', \AGrimes94\Esi\Api\Insurance::class],
            ['killmails', \AGrimes94\Esi\Api\Killmails::class],
            ['location', \AGrimes94\Esi\Api\Location::class],
            ['loyalty', \AGrimes94\Esi\Api\Loyalty::class],
            ['mail', \AGrimes94\Esi\Api\Mail::class],
            ['market', \AGrimes94\Esi\Api\Market::class],
            ['opportunities', \AGrimes94\Esi\Api\Opportunities::class],
            ['planetaryInteraction', \AGrimes94\Esi\Api\PlanetaryInteraction::class],
            ['routes', \AGrimes94\Esi\Api\Routes::class],
            ['search', \AGrimes94\Esi\Api\Search::class],
            ['skills', \AGrimes94\Esi\Api\Skills::class],
            ['sovereignty', \AGrimes94\Esi\Api\Sovereignty::class],
            ['status', \AGrimes94\Esi\Api\Status::class],
            ['universe', \AGrimes94\Esi\Api\Universe::class],
            ['userInterface', \AGrimes94\Esi\Api\UserInterface::class],
            ['wallet', \AGrimes94\Esi\Api\Wallet::class],
            ['wars', \AGrimes94\Esi\Api\Wars::class],
        ];
    }
}
