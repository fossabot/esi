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
     * Endpoint: /incursions/.
     *
     * HTTP Method: GET
     *
     * Return a list of current incursions.
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
    public function getIncursions()
    {
        return $this->get('/incursions/');
    }
}
