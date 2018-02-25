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
     * @return \stdClass
     * @throws \AGrimes94\Esi\Exception\ForbiddenResourceException
     * @throws \AGrimes94\Esi\Exception\ResourceNotFoundException
     * @throws \AGrimes94\Esi\Exception\ServerErrorException
     * @throws \AGrimes94\Esi\Exception\TooManyRequestsException
     * @throws \Exception
     * @throws \Http\Client\Exception
     */
    public function getInsuranceLevels()
    {
        return $this->get('/insurance/prices/');
    }
}
