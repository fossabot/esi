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
     * Endpoint: /search/
     * HTTP Method: GET
     *
     * Search for entities that match a given sub-string.
     *
     * @param array $categories ['agent', 'alliance', 'character', 'constellation, 'corporation', 'faction', 'inventory_type', 'region', 'solar_system', 'station']
     * @param string $search
     * @param string $language 'en-us', 'de', 'fr', 'ja', 'ru', 'zh'
     * @param bool $strict
     *
     * @return mixed
     *
     * @throws \Http\Client\Exception
     */
    public function searchPublic(array $categories = [], string $search = '', string $language = 'en-us', bool $strict = false)
    {
        $params = $this->buildSearchParams($categories, $search, $language, $strict);

        return $this->get('/search/', $params);
    }

    /**
     * Endpoint: /characters/{character_id}/search/
     * HTTP Method: GET
     *
     * Search for entities that match a given sub-string.
     *
     * @param int $characterId
     * @param array $categories ['agent', 'alliance', 'character', 'constellation, 'corporation', 'faction', 'inventory_type', 'region', 'solar_system', 'station']
     * @param string $search
     * @param string $language 'en-us', 'de', 'fr', 'ja', 'ru', 'zh'
     * @param bool $strict
     *
     * @return mixed
     *
     * @throws \Http\Client\Exception
     */
    public function searchPrivate(int $characterId, array $categories = [], string $search = '', string $language = 'en-us', bool $strict = false)
    {
        $params = $this->buildSearchParams($categories, $search, $language, $strict);

        return $this->get('/characters/' . $this->encodePath($characterId) . '/search/', $params);
    }

    /**
     * Build a buildable array structure for QueryStringBuilder.
     *
     * @param array $categories
     * @param string $search
     * @param string $language
     * @param bool $strict
     *
     * @return array
     */
    private function buildSearchParams(array $categories = [], string $search = '', string $language = 'en-us', bool $strict = false)
    {
        $categories = implode(",", $categories);

        return $params = [
            'categories' => $categories,
            'search' => $search,
            'language' => $language,
            'strict' => $strict,
        ];
    }
}