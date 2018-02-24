<?php

namespace AGrimes94\Esi\Api;

/**
 * Market Endpoints (https://esi.tech.ccp.is/ui/#/Market).
 *
 * @license LGPL-3.0 (https://www.gnu.org/licenses/lgpl-3.0.en.html)
 */
class Market extends AbstractApi
{
    /**
     * Endpoint: /characters/{character_id}/orders/
     *
     * HTTP Method: GET
     *
     * List market orders placed by a character.
     *
     * @param int $characterId
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function getCharacterOrders(int $characterId)
    {
        return $this->get('/characters/' . $this->encodePath($characterId) . '/orders/');
    }

    /**
     * Endpoint: /characters/{character_id}/orders/history/
     *
     * HTTP Method: GET
     *
     * List cancelled and expired market orders placed by a character up to 90 days in the past.
     *
     * @param int $characterId
     * @param int $page
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function getHistoricalCharacterOrders(int $characterId, int $page = 1)
    {
        return $this->get('/characters/' . $this->encodePath($characterId) . '/orders/history/', $this->paginateQuery($page));
    }

    /**
     * Endpoint: /corporations/{corporation_id}/orders/
     *
     * HTTP Method: GET
     *
     * List open market orders placed on behalf of a corporation.
     *
     * @param int $corporationId
     * @param int $page
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function getCorporationOrders(int $corporationId, int $page = 1)
    {
        return $this->get('/corporations/' . $this->encodePath($corporationId) . '/orders/', $this->paginateQuery($page));
    }

    /**
     * Endpoint: /corporations/{corporation_id}/orders/history/
     *
     * HTTP Method: GET
     *
     * List cancelled and expired market orders placed on behalf of a corporation up to 90 days in the past.
     *
     * @param int $corporationId
     * @param int $page
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function getHistoricalCorporationOrders(int $corporationId, int $page = 1)
    {
        return $this->get('/corporations/' . $this->encodePath($corporationId) . '/orders/history/', $this->paginateQuery($page));
    }

    /**
     * Endpoint: /markets/{region_id}/history/
     *
     * HTTP Method: GET
     *
     * Return a list of historical market statistics for the specified type in a region.
     *
     * @param int $regionId
     * @param int $typeId
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function getHistoricalTypeInRegionStatistics(int $regionId, int $typeId)
    {
        $params = [];
        $params['type_id'] = $typeId;

        return $this->get('/markets/' . $this->encodePath($regionId) . '/history/', $params);
    }

    /**
     * Endpoint: /markets/{region_id}/orders/
     *
     * HTTP Method: GET
     *
     * Return a list of orders in a region.
     *
     * @param int $regionId
     * @param string $orderType 'buy', 'sell', 'all'
     * @param int|null $typeId
     * @param int $page
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function getOrdersInRegion(int $regionId, string $orderType = 'all', int $typeId = null, int $page = 1)
    {
        $params = [];
        $params['order_type'] = $orderType;
        $params['page'] = $page;

        if (!is_null($typeId)) {
            $params['type_id'] = $typeId;
        }

        return $this->get('/markets/' . $this->encodePath($regionId) . '/orders/', $params);
    }

    /**
     * Endpoint: /markets/{region_id}/types/
     *
     * HTTP Method: GET
     *
     * Return a list of type IDs that have active orders in the region, for efficient market indexing.
     *
     * @param int $regionId
     * @param int $page
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function getActiveTypesInRegion(int $regionId, int $page = 1)
    {
        return $this->get('/markets/' . $this->encodePath($regionId) . '/types/', $this->paginateQuery($page));
    }

    /**
     * Endpoint: /markets/groups/
     *
     * HTTP Method: GET
     *
     * Get a list of item groups.
     *
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function getItemGroups()
    {
        return $this->get('/markets/groups/');
    }

    /**
     * Endpoint: /markets/groups/{market_group_id}/
     *
     * HTTP Method: GET
     *
     * Get information on an item group.
     *
     * @param int $marketGroupId
     * @param string $language
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function getItemGroupInformation(int $marketGroupId, string $language = 'en-us')
    {
        $params = [];
        $params['language'] = $language; // TODO Maybe make language plugin if possible for other endpoints, which don't inherently specify language in the api docs

        return $this->get('/markets/groups/' . $this->encodePath($marketGroupId) . '/', $params);
    }

    /**
     * Endpoint: /markets/prices/
     *
     * HTTP Method: GET
     *
     * Return a list of prices.
     *
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function getMarketPrices()
    {
        return $this->get('/markets/prices/');
    }
}