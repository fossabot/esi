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
     * Endpoint: /alliances/.
     *
     * HTTP Method: GET
     *
     * List all active player alliances.
     *
     * @return \stdClass
     * @throws \AGrimes94\Esi\Exception\ForbiddenResourceException
     * @throws \AGrimes94\Esi\Exception\ResourceNotFoundException
     * @throws \AGrimes94\Esi\Exception\ServerErrorException
     * @throws \AGrimes94\Esi\Exception\TooManyRequestsException
     * @throws \Exception
     * @throws \Http\Client\Exception
     */
    public function listAlliances()
    {
        return $this->get('/alliances/');
    }

    /**
     * Endpoint: /alliances/{alliance_id}/.
     *
     * HTTP Method: GET
     *
     * Public information about an alliance.
     *
     * @param int $allianceId
     * @return \stdClass
     * @throws \AGrimes94\Esi\Exception\ForbiddenResourceException
     * @throws \AGrimes94\Esi\Exception\ResourceNotFoundException
     * @throws \AGrimes94\Esi\Exception\ServerErrorException
     * @throws \AGrimes94\Esi\Exception\TooManyRequestsException
     * @throws \Exception
     * @throws \Http\Client\Exception
     */
    public function getAllianceInformation(int $allianceId)
    {
        return $this->get('/alliances/' . $this->encodePath($allianceId) . '/');
    }

    /**
     * Endpoint: /alliances/{alliance_id}/corporations/.
     *
     * HTTP Method: GET
     *
     * List all current member corporations of an alliance.
     *
     * @param int $allianceId
     * @return \stdClass
     * @throws \AGrimes94\Esi\Exception\ForbiddenResourceException
     * @throws \AGrimes94\Esi\Exception\ResourceNotFoundException
     * @throws \AGrimes94\Esi\Exception\ServerErrorException
     * @throws \AGrimes94\Esi\Exception\TooManyRequestsException
     * @throws \Exception
     * @throws \Http\Client\Exception
     */
    public function listAllianceCorporations(int $allianceId)
    {
        return $this->get('/alliances/' . $this->encodePath($allianceId) . '/corporations/');
    }


    /**
     * Endpoint: /alliances/{alliance_id}/icons/.
     *
     * HTTP Method: GET
     *
     * Get the icon urls for a alliance.
     *
     * @param int $allianceId
     * @return \stdClass
     * @throws \AGrimes94\Esi\Exception\ForbiddenResourceException
     * @throws \AGrimes94\Esi\Exception\ResourceNotFoundException
     * @throws \AGrimes94\Esi\Exception\ServerErrorException
     * @throws \AGrimes94\Esi\Exception\TooManyRequestsException
     * @throws \Exception
     * @throws \Http\Client\Exception
     */
    public function getAllianceIcons(int $allianceId)
    {
        return $this->get('/alliances/' . $this->encodePath($allianceId) . '/icons/');
    }

    /**
     * Endpoint: /alliances/names/.
     *
     * HTTP Method: GET
     *
     * Resolve a set of alliance IDs to alliance names.
     *
     * @param array $allianceIds
     * @return \stdClass
     * @throws \AGrimes94\Esi\Exception\ForbiddenResourceException
     * @throws \AGrimes94\Esi\Exception\ResourceNotFoundException
     * @throws \AGrimes94\Esi\Exception\ServerErrorException
     * @throws \AGrimes94\Esi\Exception\TooManyRequestsException
     * @throws \Exception
     * @throws \Http\Client\Exception
     */
    public function getAllianceNames(array $allianceIds = [])
    {
        $allianceIds = implode(',', $allianceIds);

        $params = [
            'alliance_ids' => $allianceIds,
        ];

        return $this->get('/alliances/names/', $params);
    }
}
