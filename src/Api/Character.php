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
     * Endpoint: /characters/{character_id}/.
     *
     * HTTP Method: GET
     *
     * Public information about a character.
     *
     * @param int $characterId
     *
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getPublicInformation(int $characterId)
    {
        return $this->get('/characters/' . $this->encodePath($characterId) . '/');
    }

    /**
     * Endpoint: /characters/{character_id}/agents_research/.
     *
     * HTTP Method: GET
     *
     * Return a list of agents research information for a character.
     *
     * The formula for finding the current research points with an agent is:
     * currentPoints = remainderPoints + pointsPerDay * days(currentTime - researchStartDate).
     *
     * @param int $characterId
     *
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getAgentsResearch(int $characterId)
    {
        return $this->get('/characters/' . $this->encodePath($characterId) . '/agents_research/');
    }

    /**
     * Endpoint: /characters/{character_id}/blueprints/.
     *
     * HTTP Method: GET
     *
     * Return a list of blueprints the character owns.
     *
     * @param int $characterId
     * @param int $page
     *
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getBlueprints(int $characterId, int $page = 1)
    {
        return $this->get('/characters/' . $this->encodePath($characterId) . '/blueprints/', $this->paginateQuery($page));
    }

    /**
     * Endpoint: /characters/{character_id}/chat_channels/.
     *
     * HTTP Method: GET
     *
     * Return chat channels that a character is the owner or operator of.
     *
     * @param int $characterId
     *
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getChatChannels(int $characterId)
    {
        return $this->get('/characters/' . $this->encodePath($characterId) . '/chat_channels/');
    }

    /**
     * Endpoint: /characters/{character_id}/corporationhistory/.
     *
     * HTTP Method: GET
     *
     * Get a list of all the corporations a character has been a member of.
     *
     * @param int $characterId
     *
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getCorpHistory(int $characterId)
    {
        return $this->get('/characters/' . $this->encodePath($characterId) . '/corporationhistory/');
    }

    /**
     * Endpoint: /characters/{character_id}/cspa/.
     *
     * HTTP Method: POST
     *
     * Takes a source character ID in the url and a set of target
     * character ID's in the body, returns a CSPA charge cost.
     *
     * @param int   $characterId
     * @param array $targetCharacters
     *
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function calcCSPA(int $characterId, array $targetCharacters = [])
    {
        return $this->post('/characters/' . $this->encodePath($characterId) . '/cspa/', $targetCharacters);
    }

    /**
     * Endpoint: /characters/{character_id}/fatigue/.
     *
     * HTTP Method: GET
     *
     * Return a character’s jump activation and fatigue information.
     *
     * @param int $characterId
     *
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getJumpFatigue(int $characterId)
    {
        return $this->get('/characters/' . $this->encodePath($characterId) . '/fatigue/');
    }

    /**
     * Endpoint: /characters/{character_id}/medals/.
     *
     * HTTP Method: GET
     *
     * Return a list of medals the character has.
     *
     * @param int $characterId
     *
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getMedals(int $characterId)
    {
        return $this->get('/characters/' . $this->encodePath($characterId) . '/medals/');
    }

    /**
     * Endpoint: /characters/{character_id}/notifications/.
     *
     * HTTP Method: GET
     *
     * Return character notifications.
     *
     * @param int $characterId
     *
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getNotifications(int $characterId)
    {
        return $this->get('/characters/' . $this->encodePath($characterId) . '/notifications/');
    }

    /**
     * Endpoint: /characters/{character_id}/notifications/contacts/.
     *
     * HTTP Method: GET
     *
     * Return notifications about having been added to someone’s contact list.
     *
     * @param int $characterId
     *
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getContactNotifications(int $characterId)
    {
        return $this->get('/characters/' . $this->encodePath($characterId) . '/notifications/contacts/');
    }

    /**
     * Endpoint: /characters/{character_id}/portrait/.
     *
     * HTTP Method: GET
     *
     * Get portrait urls for a character.
     *
     * @param int $characterId
     *
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getPortraits(int $characterId)
    {
        return $this->get('/characters/' . $this->encodePath($characterId) . '/portrait/');
    }

    /**
     * Endpoint: /characters/{character_id}/roles/.
     *
     * HTTP Method: GET
     *
     * Returns a character’s corporation roles.
     *
     * @param int $characterId
     *
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getRoles(int $characterId)
    {
        return $this->get('/characters/' . $this->encodePath($characterId) . '/roles/');
    }

    /**
     * Endpoint: /characters/{character_id}/standings/.
     *
     * HTTP Method: GET
     *
     * Return character standings from agents, NPC corporations, and factions.
     *
     * @param int $characterId
     *
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getStandings(int $characterId)
    {
        return $this->get('/characters/' . $this->encodePath($characterId) . '/standings/');
    }

    /**
     * Endpoint: /characters/{character_id}/stats/.
     *
     * HTTP Method: GET
     *
     * Returns aggregate yearly stats for a character.
     *
     * @param int $characterId
     *
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getAggregateYearlyStats(int $characterId)
    {
        return $this->get('/characters/' . $this->encodePath($characterId) . '/stats/');
    }

    /**
     * Endpoint: /characters/{character_id}/titles/.
     *
     * HTTP Method: GET
     *
     * Returns a character’s titles.
     *
     * @param int $characterId
     *
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getTitles(int $characterId)
    {
        return $this->get('/characters/' . $this->encodePath($characterId) . '/titles/');
    }

    /**
     * Endpoint: /characters/affiliation/.
     *
     * HTTP Method: POST
     *
     * Bulk lookup of character IDs to corporation, alliance and faction.
     *
     * @param array $characterIds
     *
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getAffiliations(array $characterIds = [])
    {
        return $this->post('/characters/affiliation/', $characterIds);
    }

    /**
     * Endpoint: /characters/names/.
     *
     * HTTP Method: GET
     *
     * Resolve a set of character IDs to character names.
     *
     * @param array $characterIds
     *
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getNames(array $characterIds = [])
    {
        $characterIds = implode(',', $characterIds);

        $params = [
            'character_ids' => $characterIds,
        ];

        return $this->get('/characters/names/', $params);
    }
}
