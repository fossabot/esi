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
     * @param string $language
     *
     * @throws \Http\Client\Exception
     *
     * @return mixed
     */
    public function getInsuranceLevels(string $language = 'en-us')
    {
        $params = [];
        if (!is_null($language)) {
            $params['language'] = $language;
        }

        return $this->get('/insurance/prices/', $params);
    }
}
