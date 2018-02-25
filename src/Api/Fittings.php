<?php

namespace AGrimes94\Esi\Api;

/**
 * Fittings Endpoints (https://esi.tech.ccp.is/ui/#/Fittings).
 *
 * @license LGPL-3.0 (https://www.gnu.org/licenses/lgpl-3.0.en.html)
 */
class Fittings extends AbstractApi
{
    /**
     * Endpoint: /characters/{character_id}/fittings/.
     *
     * HTTP Method: GET
     *
     * Return fittings of a character.
     *
     * @param int $characterId
     *
     * @throws \AGrimes94\Esi\Exception\ForbiddenResourceException
     * @throws \AGrimes94\Esi\Exception\ResourceNotFoundException
     * @throws \AGrimes94\Esi\Exception\ServerErrorException
     * @throws \AGrimes94\Esi\Exception\TooManyRequestsException
     * @throws \Exception
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getFittings(int $characterId)
    {
        return $this->get('/characters/' . $this->encodePath($characterId) . '/fittings/');
    }

    /**
     * Endpoint: /characters/{character_id}/fittings/.
     *
     * HTTP Method: POST
     *
     * Save a new fitting for a character.
     *
     * @param int   $characterId
     * @param array $fitting
     *
     * @throws \AGrimes94\Esi\Exception\ForbiddenResourceException
     * @throws \AGrimes94\Esi\Exception\ResourceNotFoundException
     * @throws \AGrimes94\Esi\Exception\ServerErrorException
     * @throws \AGrimes94\Esi\Exception\TooManyRequestsException
     * @throws \Exception
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function createFitting(int $characterId, array $fitting = [])
    {
        return $this->post('/characters/' . $this->encodePath($characterId) . '/fittings/', $fitting);
    }

    /**
     * Endpoint: /characters/{character_id}/fittings/{fitting_id}/.
     *
     * HTTP Method: DELETE
     *
     * Delete a fitting from a character.
     *
     * @param int $characterId
     * @param int $fittingId
     *
     * @throws \AGrimes94\Esi\Exception\ForbiddenResourceException
     * @throws \AGrimes94\Esi\Exception\ResourceNotFoundException
     * @throws \AGrimes94\Esi\Exception\ServerErrorException
     * @throws \AGrimes94\Esi\Exception\TooManyRequestsException
     * @throws \Exception
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function deleteFitting(int $characterId, int $fittingId)
    {
        return $this->delete('/characters/' . $this->encodePath($characterId) . '/fittings/' . $this->encodePath($fittingId) . '/');
    }
}
