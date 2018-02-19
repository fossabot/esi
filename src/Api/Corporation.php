<?php

namespace AGrimes94\Esi\Api;

/**
 * Corporation Endpoints (https://esi.tech.ccp.is/ui/#/Corporation).
 *
 * @license LGPL-3.0 (https://www.gnu.org/licenses/lgpl-3.0.en.html)
 */
class Corporation extends AbstractApi
{
    /**
     * Endpoint: /corporations/{corporation_id}/
     * HTTP Method: GET
     *
     * Public information about a corporation.
     *
     * @param int $corporationId
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function getInformation(int $corporationId)
    {
        return $this->get('/corporations/' . $this->encodePath($corporationId) . '/');
    }

    /**
     * Endpoint: /corporations/{corporation_id}/alliancehistory/
     * HTTP Method: GET
     *
     * Get a list of all the alliances a corporation has been a member of.
     *
     * @param int $corporationId
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function getAllianceHistory(int $corporationId)
    {
        return $this->get('/corporations/' . $this->encodePath($corporationId) . '/alliancehistory/');
    }

    /**
     * Endpoint: /corporations/names/
     * HTTP Method: GET
     *
     * Resolve a set of corporation IDs to corporation names.
     *
     * @param array $corporationIds [1000171, 1003455]
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function getNames(array $corporationIds = [])
    {
        return $this->get('/corporations/names/', $corporationIds);
    }

    /**
     * Endpoint: /corporations/{corporation_id}/members/
     * HTTP Method: GET
     *
     * Return the current member list of a corporation, the token's character need to be a member of the corporation.
     *
     * @param int $corporationId
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function getMembers(int $corporationId)
    {
        return $this->get('/corporations/' . $this->encodePath($corporationId) . '/members/');
    }

    /**
     * Endpoint: /corporations/{corporation_id}/roles/
     * HTTP Method: GET
     *
     * Return the roles of all members if the character has the personnel manager role or any grantable role.
     *
     * @param int $corporationId
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function getRoles(int $corporationId)
    {
        return $this->get('/corporations/' . $this->encodePath($corporationId) . '/roles/');
    }

    /**
     * Endpoint: /corporations/{corporation_id}/roles/history/
     * HTTP Method: GET
     *
     * Return how roles have changed for a coporation's members, up to a month.
     *
     * @param int $corporationId
     * @param int $page
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function getRoleHistory(int $corporationId, int $page = 1)
    {
        return $this->get('/corporations/' . $this->encodePath($corporationId) . '/roles/history/', $this->paginateQuery($page));
    }

    /**
     * Endpoint: /corporations/{corporation_id}/icons/
     * HTTP Method: GET
     *
     * Get the icon urls for a corporation.
     *
     * @param int $corporationId
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function getIcons(int $corporationId)
    {
        return $this->get('/corporations/' . $this->encodePath($corporationId) . '/icons/');
    }

    /**
     * Endpoint: /corporations/npccorps/
     * HTTP Method: GET
     *
     * Get a list of npc corporations.
     *
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function getNpcCorporations()
    {
        return $this->get('/corporations/npccorps/');
    }

    /**
     * Endpoint: /corporations/{corporation_id}/structures/
     * HTTP Method: GET
     *
     * Get a list of corporation structures.
     *
     * @param int $corporationId
     * @param int $page
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function getStructures(int $corporationId, int $page = 1)
    {
        return $this->get('/corporations/' . $this->encodePath($corporationId) . '/structures/', $this->paginateQuery($page));
    }

    /**
     * Endpoint: /corporations/{corporation_id}/membertracking/
     * HTTP Method: GET
     *
     * Returns additional information about a corporation's members which helps tracking their activities.
     *
     * @param int $corporationId
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function getMemberTracking(int $corporationId)
    {
        return $this->get('/corporations/' . $this->encodePath($corporationId) . '/membertracking/');
    }

    /**
     * Endpoint: /corporations/{corporation_id}/divisions/
     * HTTP Method: GET
     *
     * Return corporation hangar and wallet division names, only show if a division is not using the default name.
     *
     * @param int $corporationId
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function getDivisions(int $corporationId)
    {
        return $this->get('/corporations/' . $this->encodePath($corporationId) . '/divisions/');
    }

    /**
     * Endpoint: /corporations/{corporation_id}/members/limit/
     * HTTP Method: GET
     *
     * Return a corporation's member limit, not including CEO himself.
     *
     * @param int $corporationId
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function getMemberLimit(int $corporationId)
    {
        return $this->get('/corporations/' . $this->encodePath($corporationId) . '/members/limit/');
    }

    /**
     * Endpoint: /corporations/{corporation_id}/titles/
     * HTTP Method: GET
     *
     * Returns a corporation's titles.
     *
     * @param int $corporationId
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function getTitles(int $corporationId)
    {
        return $this->get('/corporations/' . $this->encodePath($corporationId) . '/titles/');
    }

    /**
     * Endpoint: /corporations/{corporation_id}/members/titles/
     * HTTP Method: GET
     *
     * Returns a corporation's members' titles.
     *
     * @param int $corporationId
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function getMemberTitles(int $corporationId)
    {
        return $this->get('/corporations/' . $this->encodePath($corporationId) . '/members/titles/');
    }

    /**
     * Endpoint: /corporations/{corporation_id}/blueprints/
     * HTTP Method: GET
     *
     * Returns a list of blueprints the corporation owns.
     *
     * @param int $corporationId
     * @param int $page
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function getBlueprints(int $corporationId, int $page = 1)
    {
        return $this->get('/corporations/' . $this->encodePath($corporationId) . '/blueprints/', $this->paginateQuery($page));
    }

    /**
     * Endpoint: /corporations/{corporation_id}/standings/
     * HTTP Method: GET
     *
     * Return corporation standings from agents, NPC corporations, and factions.
     *
     * @param int $corporationId
     * @param int $page
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function getStandings(int $corporationId, int $page = 1)
    {
        return $this->get('/corporations/' . $this->encodePath($corporationId) . '/standings/', $this->paginateQuery($page));
    }

    /**
     * Endpoint: /corporations/{corporation_id}/starbases/
     * HTTP Method: GET
     *
     * Returns list of corporation starbases (POSes).
     *
     * @param int $corporationId
     * @param int $page
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function getStarbases(int $corporationId, int $page = 1)
    {
        return $this->get('/corporations/' . $this->encodePath($corporationId) . '/starbases/', $this->paginateQuery($page));
    }

    /**
     * Endpoint: /corporations/{corporation_id}/starbases/{starbase_id}/
     * HTTP Method: GET
     *
     * Returns various settings and fuels of a starbase (POS).
     *
     * @param int $corporationId
     * @param int $starbaseId
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function getStarbaseInformation(int $corporationId, int $starbaseId)
    {
        return $this->get('/corporations/' . $this->encodePath($corporationId) . '/starbases/' . $this->encodePath($starbaseId) . '/');
    }

    /**
     * Endpoint: /corporations/{corporation_id}/containers/logs/
     * HTTP Method: GET
     *
     * Returns logs recorded in the past seven days from all audit log secure containers
     * (ALSC) owned by a given corporation.
     *
     * @param int $corporationId
     * @param int $page
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function getContainerLogs(int $corporationId, int $page = 1)
    {
        return $this->get('/corporations/' . $this->encodePath($corporationId) . '/containers/logs/', $this->paginateQuery($page));
    }

    /**
     * Endpoint: /corporations/{corporation_id}/facilities/
     * HTTP Method: GET
     *
     * Return a corporation's facilities.
     *
     * @param int $corporationId
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function getFacilities(int $corporationId)
    {
        return $this->get('/corporations/' . $this->encodePath($corporationId) . '/facilities/');
    }

    /**
     * Endpoint: /corporations/{corporation_id}/medals/
     * HTTP Method: GET
     *
     * Returns a corporation's medals.
     *
     * @param int $corporationId
     * @param int $page
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function getMedals(int $corporationId, int $page = 1)
    {
        return $this->get('/corporations/' . $this->encodePath($corporationId) . '/medals/', $this->paginateQuery($page));
    }

    /**
     * Endpoint: /corporations/{corporation_id}/medals/issued/
     * HTTP Method: GET
     *
     * Returns medals issued by a corporation.
     *
     * @param int $corporationId
     * @param int $page
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function getMedalsIssued(int $corporationId, int $page = 1)
    {
        return $this->get('/corporations/' . $this->encodePath($corporationId) . '/medals/issued/', $this->paginateQuery($page));
    }

    /**
     * Endpoint: /corporations/{corporation_id}/outposts/
     * HTTP Method: GET
     *
     * Get a list of corporation outpost IDs
     * Note: This endpoint will be removed once outposts are migrated to Citadels as talked about in this blog:
     * https://community.eveonline.com/news/dev-blogs/the-next-steps-in-structure-transition/ .
     *
     * @param int $corporationId
     * @param int $page
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function getOutposts(int $corporationId, int $page = 1)
    {
        return $this->get('/corporations/' . $this->encodePath($corporationId) . '/outposts/', $this->paginateQuery($page));
    }

    /**
     * Endpoint: /corporations/{corporation_id}/outposts/{outpost_id}/
     * HTTP Method: GET
     *
     * Get details about a given outpost.
     * Note: This endpoint will be removed once outposts are migrated to Citadels as talked about in this blog:
     * https://community.eveonline.com/news/dev-blogs/the-next-steps-in-structure-transition/ .
     *
     * @param int $corporationId
     * @param int $outpostId
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function getOutpostInformation(int $corporationId, int $outpostId)
    {
        return $this->get('/corporations/' . $this->encodePath($corporationId) . '/outposts/' . $this->encodePath($outpostId) . '/');
    }

    /**
     * Endpoint: /corporations/{corporation_id}/shareholders/
     * HTTP Method: GET
     *
     * Return the current shareholders of a corporation.
     *
     * @param int $corporationId
     * @param int $page
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function getShareholders(int $corporationId, int $page = 1)
    {
        return $this->get('/corporations/' . $this->encodePath($corporationId) . '/shareholders/', $this->paginateQuery($page));
    }
}