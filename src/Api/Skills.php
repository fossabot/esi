<?php

namespace AGrimes94\Esi\Api;

/**
 * Skills Endpoints (https://esi.tech.ccp.is/ui/#/Skills).
 *
 * @license LGPL-3.0 (https://www.gnu.org/licenses/lgpl-3.0.en.html)
 */
class Skills extends AbstractApi
{
    /**
     * Endpoint: /characters/{character_id}/attributes/
     *
     * Return attributes of a character.
     *
     * @param int $characterId
     *
     * @return mixed
     *
     * @throws \Http\Client\Exception
     */
    public function getCharacterAttributes(int $characterId)
    {
        return $this->get('/characters/' . $this->encodePath($characterId) . '/attributes/');
    }

    /**
     * Endpoint: /characters/{character_id}/skillqueue/
     *
     * List the configured skill queue for the given character.
     *
     * @param int $characterId
     *
     * @return mixed
     *
     * @throws \Http\Client\Exception
     */
    public function getCharacterSkillqueue(int $characterId)
    {
        return $this->get('/characters/' . $this->encodePath($characterId) . '/skillqueue/');
    }

    /**
     * Endpoint: /characters/{character_id}/skills/
     *
     * List all trained skills for the given character
     *
     * @param int $characterId
     *
     * @return mixed
     *
     * @throws \Http\Client\Exception
     */
    public function getCharacterSkills(int $characterId)
    {
        return $this->get('/characters/' . $this->encodePath($characterId) . '/skills/');
    }
}