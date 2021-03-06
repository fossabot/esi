<?php

namespace AGrimes94\Esi\Api;

/**
 * Wars Endpoints (https://esi.tech.ccp.is/ui/#/Wars).
 *
 * @license LGPL-3.0 (https://www.gnu.org/licenses/lgpl-3.0.en.html)
 */
class Wars extends AbstractApi
{
    /**
     * Endpoint: /wars/.
     *
     * HTTP Method: GET
     *
     * Return a list of wars.
     *
     * @param int|null $maxWarId
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getWars(int $maxWarId = null)
    {
        $params = [];
        if (!is_null($maxWarId)) {
            $params['max_war_id'] = $maxWarId;
        }

        return $this->get('/wars/', $params);
    }

    /**
     * Endpoint: /wars/{war_id}/.
     *
     * HTTP Method: GET
     *
     * Return details about a war.
     *
     * @param int $warId
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getWarInformation(int $warId)
    {
        return $this->get('/wars/' . $this->encodePath($warId) . '/');
    }

    /**
     * Endpoint: /wars/{war_id}/killmails/.
     *
     * HTTP Method: GET
     *
     * Return a list of kills related to a war.
     *
     * @param int $warId
     * @param int $page
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getWarKillmails(int $warId, int $page = 1)
    {
        return $this->get('/wars/' . $this->encodePath($warId) . '/killmails/', $this->paginateQuery($page));
    }
}
