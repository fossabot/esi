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
     * @param array $categories
     * @param string $language
     * @param string $search
     * @param bool $strict
     *
     * @return mixed
     *
     * @throws \Http\Client\Exception
     */
    public function searchPublic(array $categories = [], string $language = 'en-us', string $search = '', bool $strict = false)
    {
        $params = $this->buildSearchParams($categories, $language, $search, $strict);

        return $this->get('/search/', $params);
    }

    /**
     * Endpoint: /characters/{character_id}/search/
     * HTTP Method: GET
     *
     * Search for entities that match a given sub-string.
     *
     * @param int $characterId
     * @param array $categories
     * @param string $language
     * @param string $search
     * @param bool $strict
     *
     * @return mixed
     *
     * @throws \Http\Client\Exception
     */
    public function searchPrivate(int $characterId, array $categories = [], string $language = 'en-us', string $search = '', bool $strict = false)
    {
        $params = $this->buildSearchParams($categories, $language, $search, $strict);

        return $this->get('/characters/' . $this->encodePath($characterId) . '/search/', $params);
    }

    /**
     * Build a buildable array structure for QueryStringBuilder.
     *
     * @param array $categories
     * @param string $language
     * @param string $search
     * @param bool $strict
     *
     * @return array
     */
    private function buildSearchParams(array $categories = [], string $language = 'en-us', string $search = '', bool $strict = false)
    {
        $categories = implode(",", $categories);

        return $params = [
            'categories' => $categories,
            'language' => $language,
            'search' => $search,
            'strict' => $strict,
        ];
    }
}