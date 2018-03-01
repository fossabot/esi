<?php

namespace AGrimes94\Esi\Api;

/**
 * Clones Endpoints (https://esi.tech.ccp.is/ui/#/Clones).
 *
 * @license LGPL-3.0 (https://www.gnu.org/licenses/lgpl-3.0.en.html)
 */
class Clones extends AbstractApi
{
    /**
     * Endpoint: /characters/{character_id}/clones/.
     *
     * HTTP Method: GET
     *
     * A list of the character’s clones.
     *
     * @param int $characterId
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getClones(int $characterId)
    {
        return $this->get('/characters/' . $this->encodePath($characterId) . '/clones/');
    }

    /**
     * Endpoint: /characters/{character_id}/implants/.
     *
     * HTTP Method: GET
     *
     * Return implants on the active clone of a character.
     *
     * @param int $characterId
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getActiveImplants(int $characterId)
    {
        return $this->get('/characters/' . $this->encodePath($characterId) . '/implants/');
    }
}
