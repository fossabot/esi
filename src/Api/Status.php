<?php

namespace AGrimes94\Esi\Api;

/**
 * Status Endpoints (https://esi.tech.ccp.is/ui/#/Status).
 *
 * @license LGPL-3.0 (https://www.gnu.org/licenses/lgpl-3.0.en.html)
 */
class Status extends AbstractApi
{
    /**
     * Endpoint: /status/
     *
     * HTTP Method: GET
     *
     * EVE Server status.
     *
     * @throws \Http\Client\Exception
     *
     * @return mixed
     */
    public function getStatus()
    {
        return $this->get('/status/');
    }
}
