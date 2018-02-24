<?php

namespace AGrimes94\Esi\Api;

/**
 * Contracts Endpoints (https://esi.tech.ccp.is/ui/#/Contracts).
 *
 * @license LGPL-3.0 (https://www.gnu.org/licenses/lgpl-3.0.en.html)
 */
class Contracts extends AbstractApi
{
    /**
     * Endpoint: /characters/{character_id}/contracts/.
     *
     * HTTP Method: GET
     *
     * Returns contracts available to a character, only if the character is issuer,
     * acceptor or assignee. Only returns contracts no older than 30 days,
     * or if the status is "in_progress".
     *
     * @param int $characterId
     * @param int $page
     *
     * @throws \Http\Client\Exception
     *
     * @return mixed
     */
    public function getCharacterContracts(int $characterId, int $page = 1)
    {
        return $this->get('/characters/' . $this->encodePath($characterId) . '/contracts/', $this->paginateQuery($page));
    }

    /**
     * Endpoint: /characters/{character_id}/contracts/{contract_id}/items/.
     *
     * HTTP Method: GET
     *
     * Lists items of a particular contract.
     *
     * @param int $characterId
     * @param int $contractId
     *
     * @throws \Http\Client\Exception
     *
     * @return mixed
     */
    public function getCharacterContractItems(int $characterId, int $contractId)
    {
        return $this->get('/characters/' . $this->encodePath($characterId) . '/contracts/' . $this->encodePath($contractId) . '/items/');
    }

    /**
     * Endpoint: /characters/{character_id}/contracts/{contract_id}/bids/.
     *
     * HTTP Method: GET
     *
     * Lists bids on a particular auction contract.
     *
     * @param int $characterId
     * @param int $contractId
     *
     * @throws \Http\Client\Exception
     *
     * @return mixed
     */
    public function getCharacterContractBids(int $characterId, int $contractId)
    {
        return $this->get('/characters/' . $this->encodePath($characterId) . '/contracts/' . $this->encodePath($contractId) . '/bids/');
    }

    /**
     * Endpoint: /corporations/{corporation_id}/contracts/.
     *
     * HTTP Method: GET
     *
     * Returns contracts available to a coporation, only if the corporation is issuer,
     * acceptor or assignee. Only returns contracts no older than 30 days,
     * or if the status is "in_progress".
     *
     * @param int $corporationId
     * @param int $page
     *
     * @throws \Http\Client\Exception
     *
     * @return mixed
     */
    public function getCorporationContracts(int $corporationId, int $page)
    {
        return $this->get('/corporations/' . $this->encodePath($corporationId) . '/contracts/', $this->paginateQuery($page));
    }

    /**
     * Endpoint: /corporations/{corporation_id}/contracts/{contract_id}/items/.
     *
     * HTTP Method: GET
     *
     * Lists items of a particular contract.
     *
     * @param int $corporationId
     * @param int $contractId
     *
     * @throws \Http\Client\Exception
     *
     * @return mixed
     */
    public function getCorporationContractItems(int $corporationId, int $contractId)
    {
        return $this->get('/corporations/' . $this->encodePath($corporationId) . '/contracts/' . $this->encodePath($contractId) . '/items/');
    }

    /**
     * Endpoint: /corporations/{corporation_id}/contracts/{contract_id}/bids/.
     *
     * HTTP Method: GET
     *
     * Lists bids on a particular auction contract.
     *
     * @param int $corporationId
     * @param int $contractId
     * @param int $page
     *
     * @throws \Http\Client\Exception
     *
     * @return mixed
     */
    public function getCorporationContractBids(int $corporationId, int $contractId, $page = 1)
    {
        return $this->get('/corporations/' . $this->encodePath($corporationId) . '/contracts/' . $this->encodePath($contractId) . '/bids/', $this->paginateQuery($page));
    }
}
