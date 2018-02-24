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
     * @throws \Http\Client\Exception
     *
     * @return mixed
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
     * @throws \Http\Client\Exception
     *
     * @return mixed
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
     * @throws \Http\Client\Exception
     *
     * @return mixed
     */
    public function getSovereigntyStructures()
    {
        return $this->get('/sovereignty/structures/');
    }
}
