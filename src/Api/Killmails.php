<?php

namespace AGrimes94\Esi\Api;

/**
 * Killmails Endpoints (https://esi.tech.ccp.is/ui/#/Killmails).
 *
 * @license LGPL-3.0 (https://www.gnu.org/licenses/lgpl-3.0.en.html)
 */
class Killmails extends AbstractApi
{
    /**
     * Endpoint: /killmails/{killmail_id}/{killmail_hash}/.
     *
     * HTTP Method: GET
     *
     * Return a single killmail from its ID and hash.
     *
     * @param int    $killmailId
     * @param string $killmailHash
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getKillmail(int $killmailId, string $killmailHash)
    {
        return $this->get('/killmails/' . $this->encodePath($killmailId) . '/' . $this->encodePath($killmailHash) . '/');
    }

    /**
     * Endpoint: /characters/{character_id}/killmails/recent/.
     *
     * HTTP Method: GET
     *
     * Return a list of character's recent kills and losses.
     *
     * @param int $characterId
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getCharacterRecentKillmails(int $characterId)
    {
        return $this->get('/characters/' . $this->encodePath($characterId) . '/killmails/recent/');
    }

    /**
     * Endpoint: /corporations/{corporation_id}/killmails/recent/.
     *
     * HTTP Method: GET
     *
     * Get a list of corporation's recent kills and losses.
     *
     * @param int $corporationId
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getCorporationRecentKillmails(int $corporationId)
    {
        return $this->get('/corporations/' . $this->encodePath($corporationId) . '/killmails/recent/');
    }
}
