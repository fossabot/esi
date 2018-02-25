<?php

namespace AGrimes94\Esi\Api;

/**
 * Bookmarks Endpoints (https://esi.tech.ccp.is/ui/#/Bookmarks).
 *
 * @license LGPL-3.0 (https://www.gnu.org/licenses/lgpl-3.0.en.html)
 */
/**
 * Class Bookmarks
 * @package AGrimes94\Esi\Api
 */
class Bookmarks extends AbstractApi
{
    /**
     * Endpoint: /characters/{character_id}/bookmarks/.
     *
     * HTTP Method: GET
     *
     * A list of your character's personal bookmarks.
     *
     * @param int $characterId
     * @param int $page
     * @return \stdClass
     * @throws \AGrimes94\Esi\Exception\ForbiddenResourceException
     * @throws \AGrimes94\Esi\Exception\ResourceNotFoundException
     * @throws \AGrimes94\Esi\Exception\ServerErrorException
     * @throws \AGrimes94\Esi\Exception\TooManyRequestsException
     * @throws \Exception
     * @throws \Http\Client\Exception
     */
    public function listCharacterBookmarks(int $characterId, int $page = 1)
    {
        return $this->get('/characters/' . $this->encodePath($characterId) . '/bookmarks/', $this->paginateQuery($page));
    }

    /**
     * Endpoint: /characters/{character_id}/bookmarks/folders/.
     *
     * HTTP Method: GET
     *
     * A list of your character's personal bookmark folders.
     *
     * @param int $characterId
     * @param int $page
     * @return \stdClass
     * @throws \AGrimes94\Esi\Exception\ForbiddenResourceException
     * @throws \AGrimes94\Esi\Exception\ResourceNotFoundException
     * @throws \AGrimes94\Esi\Exception\ServerErrorException
     * @throws \AGrimes94\Esi\Exception\TooManyRequestsException
     * @throws \Exception
     * @throws \Http\Client\Exception
     */
    public function listCharacterBookmarkFolders(int $characterId, int $page = 1)
    {
        return $this->get('/characters/' . $this->encodePath($characterId) . '/bookmarks/folders/', $this->paginateQuery($page));
    }

    /**
     * Endpoint: /corporations/{corporation_id}/bookmarks/.
     *
     * HTTP Method: GET
     *
     * A list of your corporation's bookmarks.
     *
     * @param int $corporationId
     * @param int $page
     * @return \stdClass
     * @throws \AGrimes94\Esi\Exception\ForbiddenResourceException
     * @throws \AGrimes94\Esi\Exception\ResourceNotFoundException
     * @throws \AGrimes94\Esi\Exception\ServerErrorException
     * @throws \AGrimes94\Esi\Exception\TooManyRequestsException
     * @throws \Exception
     * @throws \Http\Client\Exception
     */
    public function listCorporationBookmarks(int $corporationId, int $page = 1)
    {
        return $this->get('/corporations/' . $this->encodePath($corporationId) . '/bookmarks/', $this->paginateQuery($page));
    }

    /**
     * Endpoint: /corporations/{corporation_id}/bookmarks/folders/.
     *
     * HTTP Method: GET
     *
     * A list of your corporation's bookmark folders.
     *
     * @param int $corporationId
     * @param int $page
     * @return \stdClass
     * @throws \AGrimes94\Esi\Exception\ForbiddenResourceException
     * @throws \AGrimes94\Esi\Exception\ResourceNotFoundException
     * @throws \AGrimes94\Esi\Exception\ServerErrorException
     * @throws \AGrimes94\Esi\Exception\TooManyRequestsException
     * @throws \Exception
     * @throws \Http\Client\Exception
     */
    public function listCorporationBookmarkFolders(int $corporationId, int $page = 1)
    {
        return $this->get('/corporations/' . $this->encodePath($corporationId) . '/bookmarks/folders/', $this->paginateQuery($page));
    }
}
