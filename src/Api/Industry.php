<?php

namespace AGrimes94\Esi\Api;

/**
 * Industry Endpoints (https://esi.tech.ccp.is/ui/#/Industry).
 *
 * @license LGPL-3.0 (https://www.gnu.org/licenses/lgpl-3.0.en.html)
 */
class Industry extends AbstractApi
{
    /**
     * Endpoint: /industry/facilities.
     *
     * HTTP Method: GET
     *
     * Return a list of industry facilities.
     *
     * @return \stdClass
     * @throws \AGrimes94\Esi\Exception\ForbiddenResourceException
     * @throws \AGrimes94\Esi\Exception\ResourceNotFoundException
     * @throws \AGrimes94\Esi\Exception\ServerErrorException
     * @throws \AGrimes94\Esi\Exception\TooManyRequestsException
     * @throws \Exception
     * @throws \Http\Client\Exception
     */
    public function getIndustryFacilities()
    {
        return $this->get('/industry/facilities/');
    }

    /**
     * Endpoint: /industry/systems/.
     *
     * HTTP Method: GET
     *
     * Return cost indices for solar systems.
     *
     * @return \stdClass
     * @throws \AGrimes94\Esi\Exception\ForbiddenResourceException
     * @throws \AGrimes94\Esi\Exception\ResourceNotFoundException
     * @throws \AGrimes94\Esi\Exception\ServerErrorException
     * @throws \AGrimes94\Esi\Exception\TooManyRequestsException
     * @throws \Exception
     * @throws \Http\Client\Exception
     */
    public function getSolarSystemCostIndices()
    {
        return $this->get('/industry/systems/');
    }

    /**
     * Endpoint: /characters/{character_id}/industry/jobs/.
     *
     * HTTP Method: GET
     *
     * List industry jobs placed by a character.
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
    public function getCharacterJobs(int $characterId)
    {
        return $this->get('/characters/' . $this->encodePath($characterId) . '/industry/jobs/');
    }

    /**
     * Endpoint: /characters/{character_id}/mining/.
     *
     * HTTP Method: GET
     *
     * Paginated record of all mining done by a character for the past 30 days.
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
    public function getCharacterMiningLedger(int $characterId, int $page = 1)
    {
        return $this->get('/characters/' . $this->encodePath($characterId) . '/mining/', $this->paginateQuery($page));
    }

    /**
     * Endpoint: /corporation/{corporation_id}/mining/observers/.
     *
     * HTTP Method: GET
     *
     * Paginated list of all entities capable of observing and recording mining for a corporation.
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
    public function getCorporationMiningObservers(int $corporationId, int $page = 1)
    {
        return $this->get('/corporation/' . $this->encodePath($corporationId) . '/mining/observers/', $this->paginateQuery($page));
    }

    /**
     * Endpoint: /corporation/{corporation_id}/mining/observers/{observer_id}/.
     *
     * HTTP Method: GET
     *
     * Paginated record of all mining seen by an observer.
     *
     * @param int $corporationId
     * @param int $observerId
     * @param int $page
     * @return \stdClass
     * @throws \AGrimes94\Esi\Exception\ForbiddenResourceException
     * @throws \AGrimes94\Esi\Exception\ResourceNotFoundException
     * @throws \AGrimes94\Esi\Exception\ServerErrorException
     * @throws \AGrimes94\Esi\Exception\TooManyRequestsException
     * @throws \Exception
     * @throws \Http\Client\Exception
     */
    public function getObservedCorporationMining(int $corporationId, int $observerId, int $page = 1)
    {
        return $this->get('/corporation/' . $this->encodePath($corporationId) . '/mining/observers/' . $this->encodePath($observerId) . '/', $this->paginateQuery($page));
    }

    /**
     * Endpoint: /corporations/{corporation_id}/industry/jobs/.
     *
     * HTTP Method: GET
     *
     * List industry jobs run by a corporation.
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
    public function getCorporationJobs(int $corporationId, int $page = 1)
    {
        return $this->get('/corporations/' . $this->encodePath($corporationId) . '/industry/jobs/', $this->paginateQuery($page));
    }

    /**
     * Endpoint: /corporation/{corporation_id}/mining/extractions/.
     *
     * HTTP Method: GET
     *
     * Extraction timers for all moon chunks being extracted by refineries belonging to a corporation.
     *
     * @param int $corporationId
     * @return \stdClass
     * @throws \AGrimes94\Esi\Exception\ForbiddenResourceException
     * @throws \AGrimes94\Esi\Exception\ResourceNotFoundException
     * @throws \AGrimes94\Esi\Exception\ServerErrorException
     * @throws \AGrimes94\Esi\Exception\TooManyRequestsException
     * @throws \Exception
     * @throws \Http\Client\Exception
     */
    public function getMoonExtractionTimers(int $corporationId)
    {
        return $this->get('/corporation/' . $this->encodePath($corporationId) . '/mining/extractions/');
    }
}
