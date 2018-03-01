<?php

namespace AGrimes94\Esi\Api;

/**
 * Wallet Endpoints (https://esi.tech.ccp.is/ui/#/Wallet).
 *
 * @license LGPL-3.0 (https://www.gnu.org/licenses/lgpl-3.0.en.html)
 */
class Wallet extends AbstractApi
{
    /**
     * Endpoint: /characters/{character_id}/wallet/.
     *
     * HTTP Method: GET
     *
     * Returns a character’s wallet balance.
     *
     * @param int $characterId
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getCharacterBalance(int $characterId)
    {
        return $this->get('/characters/' . $this->encodePath($characterId) . '/wallet/');
    }

    /**
     * Endpoint: /characters/{character_id}/wallet/journal/.
     *
     * HTTP Method: GET
     *
     * Retrieve character wallet journal.
     *
     * @param int      $characterId
     * @param int|null $fromId
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getCharacterJournal(int $characterId, int $fromId = null)
    {
        $params = [];
        if (!is_null($fromId)) {
            $params['from_id'] = $fromId;
        }

        return $this->get('/characters/' . $this->encodePath($characterId) . '/wallet/journal/', $params);
    }

    /**
     * Endpoint: /characters/{character_id}/wallet/transactions/.
     *
     * HTTP Method: GET
     *
     * Get wallet transactions of a character.
     *
     * @param int      $characterId
     * @param int|null $fromId
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getCharacterTransactions(int $characterId, int $fromId = null)
    {
        $params = [];
        if (!is_null($fromId)) {
            $params['from_id'] = $fromId;
        }

        return $this->get('/characters/' . $this->encodePath($characterId) . '/wallet/transactions/', $params);
    }

    /**
     * Endpoint: /corporations/{corporation_id}/wallets/.
     *
     * HTTP Method: GET
     *
     * Get a corporation’s wallets.
     *
     * @param int $corporationId
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getCorporationBalance(int $corporationId)
    {
        return $this->get('/corporations/' . $this->encodePath($corporationId) . '/wallets/');
    }

    /**
     * Endpoint: /corporations/{corporation_id}/wallets/{division}/journal/.
     *
     * HTTP Method: GET
     *
     * Retrieve corporation wallet journal.
     *
     * @param int      $corporationId
     * @param int      $divisionId
     * @param int|null $fromId
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getCorporationJournal(int $corporationId, int $divisionId, int $fromId = null)
    {
        $params = [];
        if (!is_null($fromId)) {
            $params['from_id'] = $fromId;
        }

        return $this->get('/corporations/' . $this->encodePath($corporationId) . '/wallets/' . $this->encodePath($divisionId) . '/journal/', $params);
    }

    /**
     * Endpoint: /corporations/{corporation_id}/wallets/{division}/transactions/.
     *
     * HTTP Method: GET
     *
     * Get wallet transactions of a corporation.
     *
     * @param int      $corporationId
     * @param int      $divisionId
     * @param int|null $fromId
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getCorporationTransactions(int $corporationId, int $divisionId, int $fromId = null)
    {
        $params = [];
        if (!is_null($fromId)) {
            $params['from_id'] = $fromId;
        }

        return $this->get('/corporations/' . $this->encodePath($corporationId) . '/wallets/' . $this->encodePath($divisionId) . '/transactions/', $params);
    }
}
