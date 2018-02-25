<?php

namespace AGrimes94\Esi\Api;

/**
 * Sovereignty Endpoints (https://esi.tech.ccp.is/ui/#/Sovereignty).
 *
 * @license LGPL-3.0 (https://www.gnu.org/licenses/lgpl-3.0.en.html)
 */
class Sovereignty extends AbstractApi
{
    /**
     * Endpoint: /sovereignty/campaigns/.
     *
     * HTTP Method: GET
     *
     * Shows sovereignty data for campaigns.
     *
     * @throws \AGrimes94\Esi\Exception\ForbiddenResourceException
     * @throws \AGrimes94\Esi\Exception\ResourceNotFoundException
     * @throws \AGrimes94\Esi\Exception\ServerErrorException
     * @throws \AGrimes94\Esi\Exception\TooManyRequestsException
     * @throws \Exception
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getSovereigntyCampaigns()
    {
        return $this->get('/sovereignty/campaigns/');
    }

    /**
     * Endpoint: /sovereignty/map/.
     *
     * HTTP Method: GET
     *
     * Shows sovereignty information for solar systems.
     *
     * @throws \AGrimes94\Esi\Exception\ForbiddenResourceException
     * @throws \AGrimes94\Esi\Exception\ResourceNotFoundException
     * @throws \AGrimes94\Esi\Exception\ServerErrorException
     * @throws \AGrimes94\Esi\Exception\TooManyRequestsException
     * @throws \Exception
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getSovereigntySystems()
    {
        return $this->get('/sovereignty/map/');
    }

    /**
     * Endpoint: /sovereignty/structures/.
     *
     * HTTP Method: GET
     *
     * Shows sovereignty data for structures.
     *
     * @throws \AGrimes94\Esi\Exception\ForbiddenResourceException
     * @throws \AGrimes94\Esi\Exception\ResourceNotFoundException
     * @throws \AGrimes94\Esi\Exception\ServerErrorException
     * @throws \AGrimes94\Esi\Exception\TooManyRequestsException
     * @throws \Exception
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getSovereigntyStructures()
    {
        return $this->get('/sovereignty/structures/');
    }
}
