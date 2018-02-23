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
     * Endpoint: /sovereignty/campaigns/
     *
     * HTTP Method: GET
     *
     * Shows sovereignty data for campaigns.
     *
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function getSovereigntyCampaigns()
    {
        return $this->get('/sovereignty/campaigns/');
    }

    /**
     * Endpoint: /sovereignty/map/
     *
     * HTTP Method :GET
     *
     * Shows sovereignty information for solar systems.
     *
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function getSovereigntySystems()
    {
        return $this->get('/sovereignty/map/');
    }

    /**
     * Endpoint: /sovereignty/structures/
     *
     * HTTP Method: GET
     *
     * Shows sovereignty data for structures.
     *
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function getSovereigntyStructures()
    {
        return $this->get('/sovereignty/structures/');
    }
}