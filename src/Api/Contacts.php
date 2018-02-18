<?php

namespace AGrimes94\Esi\Api;

/**
 * Contacts Endpoints (https://esi.tech.ccp.is/ui/#/Contacts).
 *
 * @license LGPL-3.0 (https://www.gnu.org/licenses/lgpl-3.0.en.html)
 */
class Contacts extends AbstractApi
{
    /**
     * Endpoint: /alliances/{alliance_id}/contacts/
     * HTTP Method: GET
     *
     * Return contacts of an alliance.
     *
     * @param int $allianceId
     * @param int $page
     *
     * @return mixed
     *
     * @throws \Http\Client\Exception
     */
    public function getAllianceContacts(int $allianceId, int $page = 1)
    {
        return $this->get('/alliances/' . $this->encodePath($allianceId) . '/contacts/', $this->paginateQuery($page));
    }

    /**
     * Endpoint: /characters/{character_id}/contacts/
     * HTTP Method: GET
     *
     * Return contacts of a character.
     *
     * @param int $characterId
     * @param int $page
     *
     * @return mixed
     *
     * @throws \Http\Client\Exception
     */
    public function getContacts(int $characterId, int $page)
    {
        return $this->get('/characters/' . $this->encodePath($characterId) . '/contacts/', $this->paginateQuery($page));
    }

    /**
     * Endpoint: /characters/{character_id}/contacts/
     * HTTP Method: POST
     *
     * Bulk add contacts with same settings.
     *
     * @param int $characterId
     * @param array $contactIds
     * @param int $standing -10, -5, 0, 5, 10
     * @param int|null $labelId
     * @param bool|null $isWatched
     *
     * @return array|string
     *
     * @throws \Http\Client\Exception
     */
    public function addContacts(int $characterId, array $contactIds = [], int $standing = 0, int $labelId = null, bool $isWatched = null)
    {
        $path = '/characters/' . $this->encodePath($characterId) . '/contacts/';

        $params = ['standing' => $standing,];

        if (!is_null($labelId)) {
            $params['label_id'] = $labelId;
        }

        if (!is_null($isWatched)) {
            $params['watched'] = $isWatched;
        }

        $path = $this->preparePath($path, $params); // TODO Perhaps alter how POST/PUT are handling params to avoid DRY

        return $this->post($path, $contactIds);
    }

    /**
     * Endpoint: /characters/{character_id}/contacts/
     * HTTP Method: PUT
     *
     * Bulk edit contacts with same settings.
     *
     * @param int $characterId
     * @param array $contactIds
     * @param int $standing
     * @param int|null $labelId
     * @param bool|null $isWatched
     *
     * @return array|string
     *
     * @throws \Http\Client\Exception
     */
    public function editContacts(int $characterId, array $contactIds = [], int $standing = 0, int $labelId = null, bool $isWatched = null)
    {
        $path = '/characters/' . $this->encodePath($characterId) . '/contacts/';

        $params = ['standing' => $standing,];

        if (!is_null($labelId)) {
            $params['label_id'] = $labelId;
        }

        if (!is_null($isWatched)) {
            $params['watched'] = $isWatched;
        }

        $path = $this->preparePath($path, $params); // TODO Perhaps alter how POST/PUT are handling params to avoid DRY

        return $this->put($path, $contactIds);
    }

    /**
     * Endpoint: /characters/{character_id}/contacts/
     * HTTP Method: DELETE
     *
     * Bulk delete contacts.
     *
     * @param int $characterId
     * @param array $contactIds
     *
     * @return array|string
     *
     * @throws \Http\Client\Exception
     */
    public function deleteContacts(int $characterId, array $contactIds = [])
    {
        $contactIds = implode(",", $contactIds);

        $params['contact_ids'] = $contactIds;

        return $this->delete('/characters/' . $this->encodePath($characterId) . '/contacts/', $params);
    }

    /**
     * Endpoint: /characters/{character_id}/contacts/labels/
     * HTTP Method: GET
     *
     * Return custom labels for contacts the character defined.
     *
     * @param int $characterId
     *
     * @return mixed
     *
     * @throws \Http\Client\Exception
     */
    public function getLabels(int $characterId)
    {
        return $this->get('/characters/' . $this->encodePath($characterId) . '/contacts/labels/');
    }

    /**
     * Endpoint: /corporations/{corporation_id}/contacts/
     * HTTP Method: GET
     *
     * Return contacts of a corporation.
     *
     * @param int $corporationId
     *
     * @return mixed
     *
     * @throws \Http\Client\Exception
     */
    public function getCorporationContacts(int $corporationId)
    {
        return $this->get('/corporations/' . $this->encodePath($corporationId) . '/contacts/');
    }
}