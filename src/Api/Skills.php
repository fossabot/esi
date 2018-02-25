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
     * Endpoint: /characters/{character_id}/attributes/.
     *
     * HTTP Method: GET
     *
     * Return attributes of a character.
     *
     * @param int $characterId
     * @return \stdClass
     * @throws \AGrimes94\Esi\Exception\ForbiddenResourceException
     * @throws \AGrimes94\Esi\Exception\ResourceNotFoundException
     * @throws \AGrimes94\Esi\Exception\ServerErrorException
     * @throws \AGrimes94\Esi\Exception\TooManyRequestsException
     * @throws \Exception
     * @throws \Http\Client\Exception
     */
    public function getCharacterAttributes(int $characterId)
    {
        return $this->get('/characters/' . $this->encodePath($characterId) . '/attributes/');
    }

    /**
     * Endpoint: /characters/{character_id}/skillqueue/.
     *
     * HTTP Method: GET
     *
     * List the configured skill queue for the given character.
     *
     * @param int $characterId
     * @return \stdClass
     * @throws \AGrimes94\Esi\Exception\ForbiddenResourceException
     * @throws \AGrimes94\Esi\Exception\ResourceNotFoundException
     * @throws \AGrimes94\Esi\Exception\ServerErrorException
     * @throws \AGrimes94\Esi\Exception\TooManyRequestsException
     * @throws \Exception
     * @throws \Http\Client\Exception
     */
    public function getCharacterSkillqueue(int $characterId)
    {
        return $this->get('/characters/' . $this->encodePath($characterId) . '/skillqueue/');
    }

    /**
     * Endpoint: /characters/{character_id}/skills/.
     *
     * HTTP Method: GET
     *
     * List all trained skills for the given character
     *
     * @param int $characterId
     * @return \stdClass
     * @throws \AGrimes94\Esi\Exception\ForbiddenResourceException
     * @throws \AGrimes94\Esi\Exception\ResourceNotFoundException
     * @throws \AGrimes94\Esi\Exception\ServerErrorException
     * @throws \AGrimes94\Esi\Exception\TooManyRequestsException
     * @throws \Exception
     * @throws \Http\Client\Exception
     */
    public function getCharacterSkills(int $characterId)
    {
        return $this->get('/characters/' . $this->encodePath($characterId) . '/skills/');
    }
}
