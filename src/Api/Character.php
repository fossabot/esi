<?php

namespace AGrimes94\Esi\Api;

/**
 * Character Endpoints (https://esi.tech.ccp.is/ui/#/Character).
 *
 * @license LGPL-3.0 (https://www.gnu.org/licenses/lgpl-3.0.en.html)
 */
class Character extends AbstractApi
{
    /**
     * Endpoint: /characters/{character_id}/stats/
     * HTTP Method: GET
     *
     * Returns aggregate yearly stats for a character.
     *
     * @param int $characterId
     *
     * @return mixed
     *
     * @throws \Http\Client\Exception
     */
    public function getYearlyAggregateStats(int $characterId)
    {
        return $this->get('/characters/' . $this->encodePath($characterId) . '/stats/');
    }

    /**
     * Endpoint: /characters/{character_id}/
     * HTTP Method: GET
     *
     * Public information about a character.
     *
     * @param int $characterId
     *
     * @return mixed
     *
     * @throws \Http\Client\Exception
     */
    public function getPublicInformation(int $characterId)
    {
        return $this->get('/characters/' . $this->encodePath($characterId) . '/');
    }

    /**
     * Endpoint: /characters/affiliation/
     * HTTP Method: POST
     *
     * Bulk lookup of character IDs to corporation, alliance and faction.
     *
     * @param array $characterIds [1245, 9875]
     *
     * @return mixed
     *
     * @throws \Http\Client\Exception
     */
    public function getCharactersAffiliations(array $characterIds = [])
    {
        return $this->post('/characters/affiliation/', $characterIds);
    }

    /**
     * Endpoint: /characters/{character_id}/cspa/
     * HTTP Method: POST
     *
     * Takes a source character ID in the url and a set of target
     * character ID's in the body, returns a CSPA charge cost.
     *
     * @param int $characterId
     *
     * @param array $targetCharacters [1245, 9875]
     *
     * @return array|string
     *
     * @throws \Http\Client\Exception
     */
    public function calcCSPA(int $characterId, array $targetCharacters = [])
    {
        return $this->post('/characters/' . $this->encodePath($characterId) . '/cspa/', $targetCharacters);
    }

    /**
     * Endpoint: /characters/names/
     * HTTP Method: GET
     *
     * Resolve a set of character IDs to character names.
     *
     * @param array $characterIds [1245, 9875]
     *
     * @return mixed
     *
     * @throws \Http\Client\Exception
     */
    public function getCharacterNames(array $characterIds = [])
    {
        $characterIds = implode(",", $characterIds);

        $params = [
            'character_ids' => $characterIds,
        ];

        return $this->get('/characters/names/', $params);
    }

    /**
     * Endpoint: /characters/{character_id}/portrait/
     * HTTP Method: GET
     *
     * Get portrait urls for a character.
     *
     * @param int $characterId
     *
     * @return mixed
     *
     * @throws \Http\Client\Exception
     */
    public function getCharacterPortraits(int $characterId)
    {
        return $this->get('/characters/' . $this->encodePath($characterId) . '/portrait/');
    }

    /**
     * Endpoint: /characters/{character_id}/corporationhistory/
     * HTTP Method: GET
     *
     * Get a list of all the corporations a character has been a member of.
     *
     * @param int $characterId
     *
     * @return mixed
     *
     * @throws \Http\Client\Exception
     */
    public function getCharacterCorpHistory(int $characterId)
    {
        return $this->get('/characters/' . $this->encodePath($characterId) . '/corporationhistory/');
    }

    /**
     * Endpoint: /characters/{character_id}/chat_channels/
     * HTTP Method: GET
     *
     * Return chat channels that a character is the owner or operator of.
     *
     * @param int $characterId
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function getCharacterChatChannels(int $characterId)
    {
        return $this->get('/characters/' . $this->encodePath($characterId) . '/chat_channels/');
    }
}