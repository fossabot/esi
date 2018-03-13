<?php

namespace AGrimes94\Esi\Api;

/**
 * Insurance Endpoints (https://esi.tech.ccp.is/ui/#/Insurance).
 *
 * @license LGPL-3.0 (https://www.gnu.org/licenses/lgpl-3.0.en.html)
 */
class Insurance extends AbstractApi
{
    /**
     * Endpoint: /insurance/prices/.
     *
     * HTTP Method: GET
     *
     * Return available insurance levels for all ship types.
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getInsuranceLevels()
    {
        return $this->get('/insurance/prices/');
    }
}
