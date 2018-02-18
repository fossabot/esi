<?php

namespace AGrimes94\Esi\Api;

/**
 * Alliance Endpoints (https://esi.tech.ccp.is/ui/#/Alliance).
 *
 * @license LGPL-3.0 (https://www.gnu.org/licenses/lgpl-3.0.en.html)
 */
class Alliance extends AbstractApi
{
    /**
     * Endpoint: /alliances/
     * HTTP Type: GET
     *
     * List all active player alliances.
     *
     * @return mixed
     *
     * @throws \Http\Client\Exception
     */
    public function listAlliances()
    {
        return $this->get('/alliances/');
    }

    /**
     * Endpoint: /alliances/{alliance_id}/
     * HTTP Type: GET
     *
     * Public information about an alliance
     *
     * @param int $allianceId
     *
     * @return mixed
     *
     * @throws \Http\Client\Exception
     */
    public function getAllianceInformation(int $allianceId)
    {
        return $this->get('/alliances/' . $this->encodePath($allianceId) . '/');
    }

    /**
     * Endpoint: /alliances/{alliance_id}/corporations/
     * HTTP Type: GET
     *
     * List all current member corporations of an alliance.
     *
     * @param int $allianceId
     *
     * @return mixed
     *
     * @throws \Http\Client\Exception
     */
    public function listAllianceCorporations(int $allianceId)
    {
        return $this->get('/alliances/' . $this->encodePath($allianceId) . '/corporations/');
    }

    /**
     * Endpoint: /alliances/{alliance_id}/icons/
     * HTTP Type: GET
     *
     * Get the icon urls for a alliance.
     *
     * @param int $allianceId
     *
     * @return mixed
     *
     * @throws \Http\Client\Exception
     */
    public function getAllianceIcons(int $allianceId)
    {
        return $this->get('/alliances/' . $this->encodePath($allianceId) . '/icons/');
    }

    /**
     * Endpoint: /alliances/names/
     * HTTP Type: GET
     *
     * Resolve a set of alliance IDs to alliance names.
     *
     * @param array $allianceIds
     *
     * @return mixed
     *
     * @throws \Http\Client\Exception
     */
    public function getAllianceNames(array $allianceIds = [])
    {
        $allianceIds = implode(",", $allianceIds);

        $params = [
            'alliance_ids' => $allianceIds,
        ];

        return $this->get('/alliances/names/', $params);
    }
}