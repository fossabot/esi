<?php

namespace AGrimes94\Esi\Api;

/**
 * Loyalty Endpoints (https://esi.tech.ccp.is/ui/#/Loyalty).
 *
 * @license LGPL-3.0 (https://www.gnu.org/licenses/lgpl-3.0.en.html)
 */
class Loyalty extends AbstractApi
{
    /**
     * Endpoint: /characters/{character_id}/loyalty/points/.
     *
     * HTTP Method: GET
     *
     * Return a list of loyalty points for all corporations the character has worked for.
     *
     * @param int $characterId
     *
     * @throws \Http\Client\Exception
     *
     * @return mixed
     */
    public function getLoyaltyPoints(int $characterId)
    {
        return $this->get('/characters/' . $this->encodePath($characterId) . '/loyalty/points/');
    }

    /**
     * Endpoint: /loyalty/stores/{corporation_id}/offers/.
     *
     * HTTP Method: GET
     *
     * Return a list of offers from a specific corporation’s loyalty store.
     *
     * @param int $corporationId
     *
     * @throws \Http\Client\Exception
     *
     * @return mixed
     */
    public function getStoreOffers(int $corporationId)
    {
        return $this->get('/loyalty/stores/' . $this->encodePath($corporationId) . '/offers/');
    }
}
