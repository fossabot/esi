<?php

namespace AGrimes94\Esi\Api;

/**
 * Routes Endpoints (https://esi.tech.ccp.is/ui/#/Routes).
 *
 * @license LGPL-3.0 (https://www.gnu.org/licenses/lgpl-3.0.en.html)
 */
class Routes extends AbstractApi
{
    /**
     * Endpoint: /route/{origin}/{destination}/.
     *
     * HTTP Method: GET
     *
     * Get the systems between origin and destination.
     *
     * @param int        $originId
     * @param int        $destinationId
     * @param string     $flag          'shortest', 'secure', 'insecure'
     * @param array|null $avoid         [30002771, 30002770, 30002769]
     * @param array|null $connections   [30002771, 30002770, 30002769]
     *
     * @throws \Http\Client\Exception
     *
     * @return mixed
     */
    public function getRoute(int $originId, int $destinationId, string $flag = 'shortest', array $avoid = null, array $connections = null)
    {
        $params = [
            'flag' => $flag,
        ];

        if (!is_null($avoid)) {
            $params['avoid'] = $avoid;
        }

        if (!is_null($connections)) {
            $params['connections'] = $connections;
        }

        return $this->get('/route/' . $this->encodePath($originId) . '/' . $this->encodePath($destinationId) . '/', $params);
    }
}
