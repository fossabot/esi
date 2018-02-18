<?php

namespace AGrimes94\Esi\Api;

/**
 * Bookmarks Endpoints (https://esi.tech.ccp.is/ui/#/Bookmarks).
 *
 * @license LGPL-3.0 (https://www.gnu.org/licenses/lgpl-3.0.en.html)
 */
class Bookmarks extends AbstractApi
{
    /**
     * Endpoint: /characters/{character_id}/bookmarks/
     * HTTP Method: GET
     *
     * A list of your character's personal bookmarks.
     *
     * @param int $characterId
     * @param int $page
     *
     * @return mixed
     *
     * @throws \Http\Client\Exception
     */
    public function listCharacterBookmarks(int $characterId, int $page = 1)
    {
        return $this->get('/characters/' . $this->encodePath($characterId) . '/bookmarks/', $this->paginateQuery($page));
    }

    /**
     * Endpoint: /characters/{character_id}/bookmarks/folders/
     * HTTP Method: GET
     *
     * A list of your character's personal bookmark folders.
     *
     * @param int $characterId
     * @param int $page
     *
     * @return mixed
     *
     * @throws \Http\Client\Exception
     */
    public function listCharacterBookmarkFolders(int $characterId, int $page = 1)
    {
        return $this->get('/characters/' . $this->encodePath($characterId) . '/bookmarks/folders/', $this->paginateQuery($page));
    }

    /**
     * Endpoint: /corporations/{corporation_id}/bookmarks/
     * HTTP Method: GET
     *
     * A list of your corporation's bookmarks.
     *
     * @param int $corporationId
     * @param int $page
     *
     * @return mixed
     *
     * @throws \Http\Client\Exception
     */
    public function listCorporationBookmarks(int $corporationId, int $page = 1)
    {
        return $this->get('/corporations/' . $this->encodePath($corporationId) . '/bookmarks/', $this->paginateQuery($page));
    }

    /**
     * Endpoint: /corporations/{corporation_id}/bookmarks/folders/
     * HTTP Method: GET
     *
     * A list of your corporation's bookmark folders.
     *
     * @param int $corporationId
     * @param int $page
     *
     * @return mixed
     *
     * @throws \Http\Client\Exception
     */
    public function listCorporationBookmarkFolders(int $corporationId, int $page = 1)
    {
        return $this->get('/corporations/' . $this->encodePath($corporationId) . '/bookmarks/folders/', $this->paginateQuery($page));
    }
}