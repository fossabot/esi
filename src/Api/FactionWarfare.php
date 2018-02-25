<?php

namespace AGrimes94\Esi\Api;

/**
 * Faction Warfare Endpoints (https://esi.tech.ccp.is/ui/#/Faction_Warfare).
 *
 * @license LGPL-3.0 (https://www.gnu.org/licenses/lgpl-3.0.en.html)
 */
class FactionWarfare extends AbstractApi
{
    /**
     * Endpoint: /fw/wars/.
     *
     * HTTP Method: GET
     *
     * Data about which NPC factions are at war.
     *
     * @return \stdClass
     * @throws \AGrimes94\Esi\Exception\ForbiddenResourceException
     * @throws \AGrimes94\Esi\Exception\ResourceNotFoundException
     * @throws \AGrimes94\Esi\Exception\ServerErrorException
     * @throws \AGrimes94\Esi\Exception\TooManyRequestsException
     * @throws \Exception
     * @throws \Http\Client\Exception
     */
    public function getNpcWars()
    {
        return $this->get('/fw/wars/');
    }

    /**
     * Endpoint: /fw/systems/.
     *
     * HTTP Method: GET
     *
     * An overview of the current ownership of faction warfare solar systems.
     *
     * @return \stdClass
     * @throws \AGrimes94\Esi\Exception\ForbiddenResourceException
     * @throws \AGrimes94\Esi\Exception\ResourceNotFoundException
     * @throws \AGrimes94\Esi\Exception\ServerErrorException
     * @throws \AGrimes94\Esi\Exception\TooManyRequestsException
     * @throws \Exception
     * @throws \Http\Client\Exception
     */
    public function getSystemOwners()
    {
        return $this->get('/fw/systems/');
    }

    /**
     * Endpoint: /fw/stats/.
     *
     * HTTP Method: GET
     *
     * Statistical overviews of factions involved in faction warfare.
     *
     * @return \stdClass
     * @throws \AGrimes94\Esi\Exception\ForbiddenResourceException
     * @throws \AGrimes94\Esi\Exception\ResourceNotFoundException
     * @throws \AGrimes94\Esi\Exception\ServerErrorException
     * @throws \AGrimes94\Esi\Exception\TooManyRequestsException
     * @throws \Exception
     * @throws \Http\Client\Exception
     */
    public function getFactionStats()
    {
        return $this->get('/fw/stats/');
    }

    /**
     * Endpoint: /characters/{character_id}/fw/stats/.
     *
     * HTTP Method: GET
     *
     * Statistical overview of a character involved in faction warfare.
     *
     * @param int $characterId
     * @return \stdClass
     * @throws \AGrimes94\Esi\Exception\ForbiddenResourceException
     * @throws \AGrimes94\Esi\Exception\ResourceNotFoundException
     * @throws \AGrimes94\Esi\Exception\ServerErrorException
     * @throws \AGrimes94\Esi\Exception\TooManyRequestsException
     * @throws \Exception
     * @throws \Http\Client\Exception
     */
    public function getCharacterStats(int $characterId)
    {
        return $this->get('/characters/' . $this->encodePath($characterId) . '/fw/stats/');
    }

    /**
     * Endpoint: /corporations/{corporation_id}/fw/stats/.
     *
     * HTTP Method: GET
     *
     * Statistics about a corporation involved in faction warfare.
     *
     * @param int $corporationId
     * @return \stdClass
     * @throws \AGrimes94\Esi\Exception\ForbiddenResourceException
     * @throws \AGrimes94\Esi\Exception\ResourceNotFoundException
     * @throws \AGrimes94\Esi\Exception\ServerErrorException
     * @throws \AGrimes94\Esi\Exception\TooManyRequestsException
     * @throws \Exception
     * @throws \Http\Client\Exception
     */
    public function getCorporationStats(int $corporationId)
    {
        return $this->get('/corporations/' . $this->encodePath($corporationId) . '/fw/stats/');
    }

    /**
     * Endpoint: /fw/leaderboards/.
     *
     * HTTP Method: GET
     *
     * Top 4 leaderboard of factions for kills and victory points separated by total, last week and yesterday.
     *
     * @return \stdClass
     * @throws \AGrimes94\Esi\Exception\ForbiddenResourceException
     * @throws \AGrimes94\Esi\Exception\ResourceNotFoundException
     * @throws \AGrimes94\Esi\Exception\ServerErrorException
     * @throws \AGrimes94\Esi\Exception\TooManyRequestsException
     * @throws \Exception
     * @throws \Http\Client\Exception
     */
    public function getFactionLeaderboard()
    {
        return $this->get('/fw/leaderboards/');
    }

    /**
     * Endpoint: /fw/leaderboards/characters/.
     *
     * HTTP Method: GET
     *
     * Top 100 leaderboard of pilots for kills and victory points separated by total, last week and yesterday.
     *
     * @return \stdClass
     * @throws \AGrimes94\Esi\Exception\ForbiddenResourceException
     * @throws \AGrimes94\Esi\Exception\ResourceNotFoundException
     * @throws \AGrimes94\Esi\Exception\ServerErrorException
     * @throws \AGrimes94\Esi\Exception\TooManyRequestsException
     * @throws \Exception
     * @throws \Http\Client\Exception
     */
    public function getCharacterLeaderboard()
    {
        return $this->get('/fw/leaderboards/characters/');
    }

    /**
     * Endpoint: /fw/leaderboards/corporations/.
     *
     * HTTP Method: GET
     *
     * Top 10 leaderboard of corporations for kills and victory points separated by total, last week and yesterday.
     *
     * @return \stdClass
     * @throws \AGrimes94\Esi\Exception\ForbiddenResourceException
     * @throws \AGrimes94\Esi\Exception\ResourceNotFoundException
     * @throws \AGrimes94\Esi\Exception\ServerErrorException
     * @throws \AGrimes94\Esi\Exception\TooManyRequestsException
     * @throws \Exception
     * @throws \Http\Client\Exception
     */
    public function getCorporationLeaderboard()
    {
        return $this->get('/fw/leaderboards/corporations/');
    }
}
