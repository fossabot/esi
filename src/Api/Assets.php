<?php

namespace AGrimes94\Esi\Api;

/**
 * Assets Endpoints (https://esi.tech.ccp.is/ui/#/Assets).
 *
 * @license LGPL-3.0 (https://www.gnu.org/licenses/lgpl-3.0.en.html)
 */
class Assets extends AbstractApi
{
    /**
     * Endpoint: /characters/{character_id}/assets/.
     *
     * HTTP Method: GET
     *
     * Return a list of the characters assets.
     *
     * @param int $characterId
     * @param int $page
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getCharacterAssets(int $characterId, int $page = 1)
    {
        return $this->get('/characters/' . $this->encodePath($characterId) . '/assets/', $this->paginateQuery($page));
    }

    /**
     * Endpoint: /characters/{character_id}/assets/locations/.
     *
     * HTTP Method: POST
     *
     * Return locations for a set of item ids, which you can get from character assets endpoint.
     * Coordinates for items in hangars or stations are set to (0,0,0).
     *
     * @param int   $characterId
     * @param array $itemIds
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getCharacterAssetLocations(int $characterId, array $itemIds = [])
    {
        return $this->post('/characters/' . $this->encodePath($characterId) . '/assets/locations/', $itemIds);
    }

    /**
     * Endpoint: /characters/{character_id}/assets/names/.
     *
     * HTTP Method: POST
     *
     * Return names for a set of item ids, which you can get from character assets endpoint.
     * Typically used for items that can customize names, like containers or ships.
     *
     * @param int   $characterId
     * @param array $itemIds
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getCharacterAssetNames(int $characterId, array $itemIds = [])
    {
        return $this->post('/characters/' . $this->encodePath($characterId) . '/assets/names/', $itemIds);
    }

    /**
     * Endpoint: /corporations/{corporation_id}/assets/.
     *
     * HTTP Method: GET
     *
     * Return a list of the corporation assets.
     *
     * @param int $corporationId
     * @param int $page
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getCorporationAssets(int $corporationId, int $page = 1)
    {
        return $this->get('/corporations/' . $this->encodePath($corporationId) . '/assets/', $this->paginateQuery($page));
    }

    /**
     * Endpoint: /corporations/{corporation_id}/assets/locations/.
     *
     * HTTP Method: POST
     *
     * Return locations for a set of item ids, which you can get from corporation assets endpoint.
     * Coordinates for items in hangars or stations are set to (0,0,0).
     *
     * @param int   $corporationId
     * @param array $itemIds
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getCorporationAssetLocations(int $corporationId, array $itemIds = [])
    {
        return $this->post('/corporations/' . $this->encodePath($corporationId) . '/assets/locations/', $itemIds);
    }

    /**
     * Endpoint: /corporations/{corporation_id}/assets/names/.
     *
     * HTTP Method: POST
     *
     * Return names for a set of item ids, which you can get from corporation assets endpoint.
     * Only valid for items that can customize names, like containers or ships.
     *
     * @param int   $corporationId
     * @param array $itemIds
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getCorporationAssetNames(int $corporationId, array $itemIds = [])
    {
        return $this->post('/corporations/' . $this->encodePath($corporationId) . '/assets/names/', $itemIds);
    }
}
