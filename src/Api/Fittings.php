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
     * Endpoint: /characters/{character_id}/fittings/
     *
     * HTTP Method: GET
     *
     * Return fittings of a character.
     *
     * @param int $characterId
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function getFittings(int $characterId)
    {
        return $this->get('/characters/' . $this->encodePath($characterId) . '/fittings/');
    }

    /**
     * Endpoint: /characters/{character_id}/fittings/
     *
     * HTTP Method: POST
     *
     * Save a new fitting for a character.
     *
     * @param int $characterId
     * @param array $fitting
     * @return array|string
     * @throws \Http\Client\Exception
     */
    public function createFitting(int $characterId, array $fitting = [])
    {
        return $this->post('/characters/' . $this->encodePath($characterId) . '/fittings/', $fitting);
    }

    /**
     * Endpoint: /characters/{character_id}/fittings/{fitting_id}/
     *
     * HTTP Method: DELETE
     *
     * Delete a fitting from a character.
     *
     * @param int $characterId
     * @param int $fittingId
     * @return array|string
     * @throws \Http\Client\Exception
     */
    public function deleteFitting(int $characterId, int $fittingId)
    {
        return $this->delete('/characters/' . $this->encodePath($characterId) . '/fittings/' . $this->encodePath($fittingId) . '/');
    }
}