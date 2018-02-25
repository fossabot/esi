<?php

namespace AGrimes94\Esi\Api;

/**
 * Planetary Interaction Endpoints (https://esi.tech.ccp.is/ui/#/Planetary_Interaction).
 *
 * @license LGPL-3.0 (https://www.gnu.org/licenses/lgpl-3.0.en.html)
 */
class PlanetaryInteraction extends AbstractApi
{
    /**
     * Endpoint: /characters/{character_id}/planets/.
     *
     * HTTP Method: GET
     *
     * Returns a list of all planetary colonies owned by a character.
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
    public function getCharacterColonies(int $characterId)
    {
        return $this->get('/characters/' . $this->encodePath($characterId) . '/planets/');
    }

    /**
     * Endpoint: /characters/{character_id}/planets/{planet_id}/.
     *
     * HTTP Method: GET
     *
     * Returns full details on the layout of a single planetary colony, including links, pins and routes.
     * Note: Planetary information is only recalculated when the colony is viewed through the client.
     * Information will not update until this criteria is met.
     *
     * @param int $characterId
     * @param int $planetId
     * @return \stdClass
     * @throws \AGrimes94\Esi\Exception\ForbiddenResourceException
     * @throws \AGrimes94\Esi\Exception\ResourceNotFoundException
     * @throws \AGrimes94\Esi\Exception\ServerErrorException
     * @throws \AGrimes94\Esi\Exception\TooManyRequestsException
     * @throws \Exception
     * @throws \Http\Client\Exception
     */
    public function getCharacterColonyLayout(int $characterId, int $planetId)
    {
        return $this->get('/characters/' . $this->encodePath($characterId) . '/planets/' . $this->encodePath($planetId) . '/');
    }

    /**
     * Endpoint: /universe/schematics/{schematic_id}/.
     *
     * HTTP Method: GET
     *
     * Get information on a planetary factory schematic.
     *
     * @param int $schematicId
     * @return \stdClass
     * @throws \AGrimes94\Esi\Exception\ForbiddenResourceException
     * @throws \AGrimes94\Esi\Exception\ResourceNotFoundException
     * @throws \AGrimes94\Esi\Exception\ServerErrorException
     * @throws \AGrimes94\Esi\Exception\TooManyRequestsException
     * @throws \Exception
     * @throws \Http\Client\Exception
     */
    public function getSchematicInformation(int $schematicId)
    {
        return $this->get('/universe/schematics/' . $this->encodePath($schematicId) . '/');
    }

    /**
     * Endpoint: /corporations/{corporation_id}/customs_offices/.
     *
     * HTTP Method: GET
     *
     * List customs offices owned by a corporation.
     *
     * @param int $corporationId
     * @param int $page
     * @return \stdClass
     * @throws \AGrimes94\Esi\Exception\ForbiddenResourceException
     * @throws \AGrimes94\Esi\Exception\ResourceNotFoundException
     * @throws \AGrimes94\Esi\Exception\ServerErrorException
     * @throws \AGrimes94\Esi\Exception\TooManyRequestsException
     * @throws \Exception
     * @throws \Http\Client\Exception
     */
    public function getCorporationCustomsOffices(int $corporationId, int $page = 1)
    {
        return $this->get('/corporations/' . $this->encodePath($corporationId) . '/customs_offices/', $this->paginateQuery($page));
    }
}
