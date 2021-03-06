<?php

namespace AGrimes94\Esi\Api;

/**
 * Universe Endpoints (https://esi.tech.ccp.is/ui/#/Universe).
 *
 * @license LGPL-3.0 (https://www.gnu.org/licenses/lgpl-3.0.en.html)
 */
class Universe extends AbstractApi
{
    /**
     * Endpoint: /universe/ancestries/.
     *
     * HTTP Method: GET
     *
     * Get all character ancestries.
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getAncestries()
    {
        return $this->get('/universe/ancestries/');
    }

    /**
     * Endpoint: /universe/bloodlines/.
     *
     * HTTP Method: GET
     *
     * Get a list of bloodlines.
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getBloodlines()
    {
        return $this->get('/universe/bloodlines/');
    }

    /**
     * Endpoint: /universe/categories/.
     *
     * HTTP Method: GET
     *
     * Get a list of item categories.
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getCategories()
    {
        return $this->get('/universe/categories/');
    }

    /**
     * Endpoint: /universe/categories/{category_id}/.
     *
     * HTTP Method: GET
     *
     * Get information of an item category.
     *
     * @param int $categoryId
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getCategoryInformation(int $categoryId)
    {
        return $this->get('/universe/categories/' . $this->encodePath($categoryId) . '/');
    }

    /**
     * Endpoint: /universe/constellations/.
     *
     * HTTP Method: GET
     *
     * Get a list of constellations.
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getConstellations()
    {
        return $this->get('/universe/constellations/');
    }

    /**
     * Endpoint: /universe/constellations/{constellation_id}/.
     *
     * HTTP Method: GET
     *
     * Get information on a constellation.
     *
     * @param int $constellationId
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getConstellationInformation(int $constellationId)
    {
        return $this->get('/universe/constellations/' . $this->encodePath($constellationId) . '/');
    }

    /**
     * Endpoint: /universe/factions/.
     *
     * HTTP Method: GET
     *
     * Get a list of factions.
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getFactions()
    {
        return $this->get('/universe/factions/');
    }

    /**
     * Endpoint: /universe/graphics/.
     *
     * HTTP Method: GET
     *
     * Get a list of graphics.
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getGraphics()
    {
        return $this->get('/universe/graphics/');
    }

    /**
     * Endpoint: /universe/graphics/{graphic_id}/.
     *
     * HTTP Method: GET
     *
     * Get information on a graphic.
     *
     * @param int $graphicId
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getGraphicInformation(int $graphicId)
    {
        return $this->get('/universe/graphics/' . $this->encodePath($graphicId) . '/');
    }

    /**
     * Endpoint: /universe/groups/.
     *
     * HTTP Method: GET
     *
     * Get a list of item groups.
     *
     * @param int $page
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getGroups(int $page = 1)
    {
        return $this->get('/universe/groups/', $this->paginateQuery($page));
    }

    /**
     * Endpoint: /universe/groups/{group_id}/.
     *
     * HTTP Method: GET
     *
     * Get information on an item group.
     *
     * @param int $groupId
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getGroupInformation(int $groupId)
    {
        return $this->get('/universe/groups/' . $this->encodePath($groupId) . '/');
    }

    /**
     * Endpoint: /universe/ids/.
     *
     * HTTP Method: POST
     *
     * Resolve a set of names to IDs in the following categories:
     * agents, alliances, characters, constellations, corporations factions,
     * inventory_types, regions, stations, and systems.
     *
     * Only exact matches will be returned.
     *
     * All names searched for are cached for 12 hours.
     *
     * @param array $names
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function resolveNamesToIds(array $names = [])
    {
        return $this->post('/universe/ids/', $names);
    }

    /**
     * Endpoint: /universe/moons/{moon_id}/.
     *
     * HTTP Method: GET
     *
     * Get information on a moon.
     *
     * @param int $moonId
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getMoonInformation(int $moonId)
    {
        return $this->get('/universe/moons/' . $this->encodePath($moonId) . '/');
    }

    /**
     * Endpoint: /universe/names/.
     *
     * HTTP Method: POST
     *
     * Resolve a set of IDs to names and categories.
     *
     * Supported ID’s for resolving are:
     *
     * Characters, Corporations, Alliances, Stations, Solar Systems, Constellations, Regions, Types.
     *
     * @param array $ids
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function resolveIdsToNames(array $ids = [])
    {
        return $this->post('/universe/names/', $ids);
    }

    /**
     * Endpoint: /universe/planets/{planet_id}/.
     *
     * HTTP Method: GET
     *
     * Get information on a planet.
     *
     * @param int $planetId
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getPlanetInformation(int $planetId)
    {
        return $this->get('/universe/planets/' . $this->encodePath($planetId) . '/');
    }

    /**
     * Endpoint: /universe/races/.
     *
     * HTTP Method: GET
     *
     * Get a list of character races.
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getRaces()
    {
        return $this->get('/universe/races/');
    }

    /**
     * Endpoint: /universe/regions/.
     *
     * HTTP Method: GET
     *
     * Get a list of regions.
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getRegions()
    {
        return $this->get('/universe/regions/');
    }

    /**
     * Endpoint: /universe/regions/{region_id}/.
     *
     * HTTP Method: GET
     *
     * Get information on a region.
     *
     * @param int $regionId
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getRegionInformation(int $regionId)
    {
        return $this->get('/universe/regions/' . $this->encodePath($regionId) . '/');
    }

    /**
     * Endpoint: /universe/stargates/{stargate_id}/.
     *
     * HTTP Method: GET
     *
     * Get information on a stargate.
     *
     * @param int $stargateId
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getStargateInformation(int $stargateId)
    {
        return $this->get('/universe/stargates/' . $this->encodePath($stargateId) . '/');
    }

    /**
     * Endpoint: /universe/stars/{star_id}/.
     *
     * HTTP Method: GET
     *
     * Get information on a star.
     *
     * @param int $starId
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getStarInformation(int $starId)
    {
        return $this->get('/universe/stars/' . $this->encodePath($starId) . '/');
    }

    /**
     * Endpoint: /universe/stations/{station_id}/.
     *
     * HTTP Method: GET
     *
     * Get information on a station.
     *
     * @param int $stationId
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getStationInformation(int $stationId)
    {
        return $this->get('/universe/stations/' . $this->encodePath($stationId) . '/');
    }

    /**
     * Endpoint: /universe/structures/.
     *
     * HTTP Method: GET
     *
     * List all public structures.
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getStructures()
    {
        return $this->get('/universe/structures/');
    }

    /**
     * Endpoint: /universe/structures/{structure_id}/.
     *
     * HTTP Method: GET
     *
     * Returns information on requested structure, if you are on the ACL.
     *
     * Otherwise, returns “Forbidden” for all inputs.
     *
     * @param int $structureId
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getStructureInformation(int $structureId)
    {
        return $this->get('/universe/structures/' . $this->encodePath($structureId) . '/');
    }

    /**
     * Endpoint: /universe/system_jumps/.
     *
     * HTTP Method: GET
     *
     * Get the number of jumps in solar systems within the last hour
     * ending at the timestamp of the Last-Modified header,
     * excluding wormhole space.
     *
     * Only systems with jumps will be listed.
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getSystemJumps()
    {
        return $this->get('/universe/system_jumps/');
    }

    /**
     * Endpoint: /universe/system_kills/.
     *
     * HTTP Method: GET
     *
     * Get the number of ship, pod and NPC kills per solar system within the last hour
     * ending at the timestamp of the Last-Modified header,
     * excluding wormhole space.
     *
     * Only systems with kills will be listed.
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getSystemKills()
    {
        return $this->get('/universe/system_kills/');
    }

    /**
     * Endpoint: /universe/systems/.
     *
     * HTTP Method: GET
     *
     * Get a list of solar systems.
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getSystems()
    {
        return $this->get('/universe/systems/');
    }

    /**
     * Endpoint: /universe/systems/{system_id}/.
     *
     * HTTP Method: GET
     *
     * Get information on a solar system.
     *
     * @param int $systemId
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getSystemInformation(int $systemId)
    {
        return $this->get('/universe/systems/' . $this->encodePath($systemId) . '/');
    }

    /**
     * Endpoint: /universe/types/.
     *
     * HTTP Method: GET
     *
     * Get a list of type ids.
     *
     * @param int $page
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getTypes(int $page = 1)
    {
        return $this->get('/universe/types/', $this->paginateQuery($page));
    }

    /**
     * Endpoint: /universe/types/{type_id}/.
     *
     * HTTP Method: GET
     *
     * Get information on a type.
     *
     * @param int $typeId
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function getTypeInformation(int $typeId)
    {
        return $this->get('/universe/types/' . $this->encodePath($typeId) . '/');
    }
}
