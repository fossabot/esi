<?php

namespace AGrimes94\Esi\Api;

/**
 * Opportunities Endpoints (https://esi.tech.ccp.is/ui/#/Opportunities).
 *
 * @license LGPL-3.0 (https://www.gnu.org/licenses/lgpl-3.0.en.html)
 */
class Opportunities extends AbstractApi
{
    /**
     * Endpoint: /characters/{character_id}/opportunities/.
     *
     * HTTP Method: GET
     *
     * Return a list of tasks finished by a character.
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
    public function getCompletedTasks(int $characterId)
    {
        return $this->get('/characters/' . $this->encodePath($characterId) . '/opportunities/');
    }

    /**
     * Endpoint: /opportunities/groups/.
     *
     * HTTP Method: GET
     *
     * Return a list of opportunities groups.
     *
     * @return \stdClass
     * @throws \AGrimes94\Esi\Exception\ForbiddenResourceException
     * @throws \AGrimes94\Esi\Exception\ResourceNotFoundException
     * @throws \AGrimes94\Esi\Exception\ServerErrorException
     * @throws \AGrimes94\Esi\Exception\TooManyRequestsException
     * @throws \Exception
     * @throws \Http\Client\Exception
     */
    public function getGroups()
    {
        return $this->get('/opportunities/groups/');
    }

    /**
     * Endpoint: /opportunities/groups/{group_id}/.
     *
     * HTTP Method: GET
     *
     * Return information of an opportunities group.
     *
     * @param int $groupId
     * @return \stdClass
     * @throws \AGrimes94\Esi\Exception\ForbiddenResourceException
     * @throws \AGrimes94\Esi\Exception\ResourceNotFoundException
     * @throws \AGrimes94\Esi\Exception\ServerErrorException
     * @throws \AGrimes94\Esi\Exception\TooManyRequestsException
     * @throws \Exception
     * @throws \Http\Client\Exception
     */
    public function getGroup(int $groupId)
    {
        return $this->get('/opportunities/groups/' . $this->encodePath($groupId) . '/');
    }

    /**
     * Endpoint: /opportunities/tasks/.
     *
     * HTTP Method: GET
     *
     * Return a list of opportunities tasks.
     *
     * @return \stdClass
     * @throws \AGrimes94\Esi\Exception\ForbiddenResourceException
     * @throws \AGrimes94\Esi\Exception\ResourceNotFoundException
     * @throws \AGrimes94\Esi\Exception\ServerErrorException
     * @throws \AGrimes94\Esi\Exception\TooManyRequestsException
     * @throws \Exception
     * @throws \Http\Client\Exception
     */
    public function getTasks()
    {
        return $this->get('/opportunities/tasks/');
    }

    /**
     * Endpoint: /opportunities/tasks/{task_id}/.
     *
     * HTTP Method: GET
     *
     * Return information of an opportunities task.
     *
     * @param int $taskId
     * @return \stdClass
     * @throws \AGrimes94\Esi\Exception\ForbiddenResourceException
     * @throws \AGrimes94\Esi\Exception\ResourceNotFoundException
     * @throws \AGrimes94\Esi\Exception\ServerErrorException
     * @throws \AGrimes94\Esi\Exception\TooManyRequestsException
     * @throws \Exception
     * @throws \Http\Client\Exception
     */
    public function getTask(int $taskId)
    {
        return $this->get('/opportunities/tasks/' . $this->encodePath($taskId) . '/');
    }
}
