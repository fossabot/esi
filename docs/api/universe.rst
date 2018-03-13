Universe
========

All of the following examples use the following client:

.. code-block:: php

    $esiClient = \AGrimes94\Esi\EsiClient::create()->authenticate('ACCESS_TOKEN');

Get Ancestries
--------------

:HTTP Method: GET
:Endpoint: /universe/ancestries/
:Summary: Get all character ancestries.
:Types: None
:Default: None

.. code-block:: php

    $esiClient->universe()->getAncestries();

Get Bloodlines
--------------

:HTTP Method: GET
:Endpoint: /universe/bloodlines/
:Summary: Get a list of bloodlines.
:Types: None
:Default: None

.. code-block:: php

    $esiClient->universe()->getBloodlines();

Get Categories
--------------

:HTTP Method: GET
:Endpoint: /universe/categories/
:Summary: Get a list of item categories.
:Types: None
:Default: None

.. code-block:: php

    $esiClient->universe()->getCategories();

Get Category Information
------------------------

:HTTP Method: GET
:Endpoint: /universe/categories/{category_id}/
:Summary: Get information of an item category.
:Types: - int $categoryId
:Default: None

.. code-block:: php

    $esiClient->universe()->getCategoryInformation(int $categoryId);

Get Constellations
------------------

:HTTP Method: GET
:Endpoint: /universe/constellations/
:Summary: Get a list of constellations.
:Types: None
:Default: None

.. code-block:: php

    $esiClient->universe()->getConstellations();

Get Constellation Information
-----------------------------

:HTTP Method: GET
:Endpoint: /universe/constellations/{constellation_id}/
:Summary: Get information on a constellation.
:Types: - int $constellationId
:Default: None

.. code-block:: php

    $esiClient->universe()->getConstellationInformation(int $constellationId);

Get Factions
------------

:HTTP Method: GET
:Endpoint: /universe/factions/
:Summary: Get a list of factions.
:Types: None
:Default: None

.. code-block:: php

    $esiClient->universe()->getFactions();

Get Graphics
------------

:HTTP Method: GET
:Endpoint: /universe/graphics/
:Summary: Get a list of graphics.
:Types: None
:Default: None

.. code-block:: php

    $esiClient->universe()->getGraphics();

Get Graphic Information
-----------------------

:HTTP Method: GET
:Endpoint: /universe/graphics/{graphic_id}/
:Summary: Get information on a graphic.
:Types: - int $graphicId
:Default: None

.. code-block:: php

    $esiClient->universe()->getGraphicInformation(int $graphicId);

Get Groups
----------

:HTTP Method: GET
:Endpoint: /universe/groups/
:Summary: Get a list of item groups.
:Types: - int $page
:Default: - int $page = 1

.. code-block:: php

    $esiClient->universe()->getGroups(int $page = 1)

Get Group Information
---------------------

:HTTP Method: GET
:Endpoint: /universe/groups/{group_id}/
:Summary: Get information on an item group.
:Types: - int $groupId
:Default: None

.. code-block:: php

    $esiClient->universe()->getGroupInformation(int $groupId);

Resolve Names to Ids
--------------------

:HTTP Method: POST
:Endpoint: /universe/ids/
:Summary: Resolve a set of names to IDs in the following categories:agents, alliances, characters, constellations, corporations factions, inventory_types, regions, stations, and systems. Only exact matches will be returned. All names searched for are cached for 12 hours.
:Types: - array $names
:Default: - array $names = []

.. code-block:: php

    $esiClient->universe()->resolveNamesToIds(array $names = []);

Get Moon Information
--------------------

:HTTP Method: GET
:Endpoint: /universe/moons/{moon_id}/
:Summary: Get information on a moon.
:Types: - int $moonId
:Default: None

.. code-block:: php

    $esiClient->universe()->getMoonInformation(int $moonId);

Resolve Ids to Names
--------------------

:HTTP Method: POST
:Endpoint: /universe/names/
:Summary: Resolve a set of IDs to names and categories. Supported ID’s for resolving are: Characters, Corporations, Alliances, Stations, Solar Systems, Constellations, Regions, Types.
:Types: - array $ids
:Default: - array $ids = []

.. code-block:: php

    $esiClient->universe()->resolveIdsToNames(array $ids = []);

Get Planet Information
----------------------

:HTTP Method: GET
:Endpoint: /universe/planets/{planet_id}/
:Summary: Get information on a planet.
:Types: - int $planetId
:Default: None

.. code-block:: php

    $esiClient->universe()->getPlanetInformation(int $planetId);

Get Races
---------

:HTTP Method: GET
:Endpoint: /universe/races/
:Summary: Get a list of character races.
:Types: None
:Default: None

.. code-block:: php

    $esiClient->universe()->getRaces();

Get Regions
-----------

:HTTP Method: GET
:Endpoint: /universe/regions/
:Summary: Get a list of regions.
:Types: None
:Default: None

.. code-block:: php

    $esiClient->universe()->getRegions();

Get Region Information
----------------------

:HTTP Method: GET
:Endpoint: /universe/regions/{region_id}/
:Summary: Get information on a region.
:Types: - int $regionId
:Default: None

.. code-block:: php

    $esiClient->universe()->getRegionInformation(int $regionId);

Get Stargate Information
------------------------

:HTTP Method: GET
:Endpoint: /universe/stargates/{stargate_id}/
:Summary: Get information on a stargate.
:Types: - int $stargateId
:Default: None

.. code-block:: php

    $esiClient->universe()->getStargateInformation(int $stargateId);

Get Star Information
--------------------

:HTTP Method: GET
:Endpoint: /universe/stars/{star_id}/
:Summary: Get information on a star.
:Types: - int $starId
:Default: None

.. code-block:: php

    $esiClient->universe()->getStarInformation(int $starId);

Get Station Information
-----------------------

:HTTP Method: GET
:Endpoint: /universe/stations/{station_id}/
:Summary: Get information on a station.
:Types: - int $stationId
:Default: None

.. code-block:: php

    $esiClient->universe()->getStationInformation(int $stationId);

Get Structures
--------------

:HTTP Method: GET
:Endpoint: /universe/structures/
:Summary: List all public structures.
:Types: None
:Default: None

.. code-block:: php

    $esiClient->universe()->getStructures();

Get Structure Information
-------------------------

:HTTP Method: GET
:Endpoint: /universe/structures/{structure_id}/
:Summary: Returns information on requested structure, if you are on the ACL. Otherwise, returns “Forbidden” for all inputs.
:Types: - int $structureId
:Default: None

.. code-block:: php

    $esiClient->universe()->getStructureInformation(int $structureId);

Get System Jumps
----------------

:HTTP Method: GET
:Endpoint: /universe/system_jumps/
:Summary: Get the number of jumps in solar systems within the last hour ending at the timestamp of the Last-Modified header, excluding wormhole space. Only systems with jumps will be listed.
:Types: None
:Default: None

.. code-block:: php

    $esiClient->universe()->getSystemJumps();

Get System Kills
----------------

:HTTP Method: GET
:Endpoint: /universe/system_kills/
:Summary: Get the number of ship, pod and NPC kills per solar system within the last hour ending at the timestamp of the Last-Modified header, excluding wormhole space. Only systems with kills will be listed.
:Types: None
:Default: None

.. code-block:: php

    $esiClient->universe()->getSystemKills();

Get Systems
-----------

:HTTP Method: GET
:Endpoint: /universe/systems/
:Summary: Get a list of solar systems.
:Types: None
:Default: None

.. code-block:: php

    $esiClient->universe()->getSystems();

Get System Information
----------------------

:HTTP Method: GET
:Endpoint: /universe/systems/{system_id}/
:Summary: Get information on a solar system.
:Types: - int $systemId
:Default: None

.. code-block:: php

    $esiClient->universe()->getSystemInformation(int $systemId);

Get Types
---------

:HTTP Method: GET
:Endpoint: /universe/types/
:Summary: Get a list of type ids.
:Types: - int $page
:Default: - int $page = 1

.. code-block:: php

    $esiClient->universe()->getTypes(int $page = 1);

Get Type Information
--------------------

:HTTP Method: GET
:Endpoint: /universe/types/{type_id}/
:Summary: Get information on a type.
:Types: - int $typeId
:Default: None

.. code-block:: php

    $esiClient->universe()->getTypeInformation(int $typeId);
