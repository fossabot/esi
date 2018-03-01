<?php

namespace AGrimes94\Esi\Api;

/**
 * Location Endpoints (https://esi.tech.ccp.is/ui/#/Location).
 *
 * @license LGPL-3.0 (https://www.gnu.org/licenses/lgpl-3.0.en.html)
 */
class Location extends AbstractApi
{
    /**
     * Endpoint: /characters/{character_id}/location/.
     *
     * HTTP Method: GET
     *
     * Information about the characters current location.
     * Returns the current solar system id, and also the current station or structure ID if applicable.
     *
     * @param int $characterId
     *
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getCharacterLocation(int $characterId)
    {
        return $this->get('/characters/' . $this->encodePath($characterId) . '/location/');
    }

    /**
     * Endpoint: /characters/{character_id}/ship/.
     *
     * HTTP Method: GET
     *
     * Get the current ship type, name and id.
     *
     * @param int $characterId
     *
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getCharacterCurrentShip(int $characterId)
    {
        return $this->get('/characters/' . $this->encodePath($characterId) . '/ship/');
    }

    /**
     * Endpoint: /characters/{character_id}/online/.
     *
     * HTTP Method: GET
     *
     * Checks if the character is currently online.
     *
     * @param int $characterId
     *
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getCharacterOnline(int $characterId)
    {
        return $this->get('/characters/' . $this->encodePath($characterId) . '/online/');
    }
}
