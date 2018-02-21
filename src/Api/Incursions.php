<?php

namespace AGrimes94\Esi\Api;

/**
 * Incursions Endpoints (https://esi.tech.ccp.is/ui/#/Incursions).
 *
 * @license LGPL-3.0 (https://www.gnu.org/licenses/lgpl-3.0.en.html)
 */
class Incursions extends AbstractApi
{
    /**
     * Endpoint: /incursions/
     *
     * HTTP Method: GET
     *
     * Return a list of current incursions.
     *
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function getIncursions()
    {
        return $this->get('/incursions/');
    }
}