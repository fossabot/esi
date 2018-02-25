<?php

namespace AGrimes94\Esi\Api;

/**
 * Search Endpoints (https://esi.tech.ccp.is/ui/#/Search).
 *
 * @license LGPL-3.0 (https://www.gnu.org/licenses/lgpl-3.0.en.html)
 */
class Search extends AbstractApi
{
    /**
     * Endpoint: /search/.
     *
     * HTTP Method: GET
     *
     * Search for entities that match a given sub-string.
     *
     * @param string $search
     * @param array  $categories ['agent', 'alliance', 'character', 'constellation, 'corporation', 'faction', 'inventory_type', 'region', 'solar_system', 'station']
     * @param bool $strict
     * @return \stdClass
     * @throws \AGrimes94\Esi\Exception\ForbiddenResourceException
     * @throws \AGrimes94\Esi\Exception\ResourceNotFoundException
     * @throws \AGrimes94\Esi\Exception\ServerErrorException
     * @throws \AGrimes94\Esi\Exception\TooManyRequestsException
     * @throws \Exception
     * @throws \Http\Client\Exception
     */
    public function searchPublic(string $search = '', array $categories = [], bool $strict = false)
    {
        $params = $this->buildSearchParams($search, $categories, $strict);

        return $this->get('/search/', $params);
    }

    /**
     * Endpoint: /characters/{character_id}/search/.
     *
     * HTTP Method: GET
     *
     * Search for entities that match a given sub-string.
     *
     * @param int $characterId
     * @param string $search
     * @param array  $categories  ['agent', 'alliance', 'character', 'constellation, 'corporation', 'faction', 'inventory_type', 'region', 'solar_system', 'station']
     * @param bool $strict
     * @return \stdClass
     * @throws \AGrimes94\Esi\Exception\ForbiddenResourceException
     * @throws \AGrimes94\Esi\Exception\ResourceNotFoundException
     * @throws \AGrimes94\Esi\Exception\ServerErrorException
     * @throws \AGrimes94\Esi\Exception\TooManyRequestsException
     * @throws \Exception
     * @throws \Http\Client\Exception
     */
    public function searchPrivate(int $characterId, string $search = '', array $categories = [], bool $strict = false)
    {
        $params = $this->buildSearchParams($search, $categories, $strict);

        return $this->get('/characters/' . $this->encodePath($characterId) . '/search/', $params);
    }

    /**
     * Build a buildable array structure for QueryStringBuilder.
     *
     * @param string $search
     * @param array  $categories
     * @param bool   $strict
     *
     * @return array
     */
    private function buildSearchParams(string $search = '', array $categories = [], bool $strict = false)
    {
        $categories = implode(',', $categories);

        return $params = [
            'search'     => $search,
            'categories' => $categories,
            'strict'     => $strict,
        ];
    }
}
