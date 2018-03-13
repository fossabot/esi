Corporation
===========

All of the following examples use the following client:

.. code-block:: php

    $esiClient = \AGrimes94\Esi\EsiClient::create()->authenticate('ACCESS_TOKEN');

Get Public Information about a Corporation
------------------------------------------

:HTTP Method: GET
:Endpoint: /corporations/{corporation_id}/
:Summary: Public information about a corporation.
:Types: - int $corporationId
:Default: None

.. code-block:: php

    $esiClient->corporation()->getInformation(int $corporationId);

Get Alliance History
--------------------

:HTTP Method: GET
:Endpoint: /corporations/{corporation_id}/alliancehistory/
:Summary: Get a list of all the alliances a corporation has been a member of.
:Types: - int $corporationId
:Default: None

.. code-block:: php

    $esiClient->corporation()->getAllianceHistory(int $corporationId);

Get Names
---------

:HTTP Method: GET
:Endpoint: /corporations/names/
:Summary: Resolve a set of corporation IDs to corporation names.
:Types: - array $corporationIds
:Default: - array $corporationIds = []

.. code-block:: php

    $esiClient->corporation()->getNames(array $corporationIds = []);

Get Members
-----------

:HTTP Method: GET
:Endpoint: /corporations/{corporation_id}/members/
:Summary: Return the current member list of a corporation, the token's character need to be a member of the corporation.
:Types: - int $corporationId
:Default: None

.. code-block:: php

    $esiClient->corporation()->getMembers(int $corporationId);

Get Roles
---------

:HTTP Method: GET
:Endpoint: /corporations/{corporation_id}/roles/
:Summary: Return the roles of all members if the character has the personnel manager role or any grantable role.
:Types: - int $corporationId
:Default: None

.. code-block:: php

    $esiClient->corporation()->getRoles(int $corporationId);

Get Role History
----------------

:HTTP Method: GET
:Endpoint: /corporations/{corporation_id}/roles/history/
:Summary: Return how roles have changed for a coporation's members, up to a month.
:Types: - int $corporationId
        - int $page
:Default: - int $page = 1

.. code-block:: php

    $esiClient->corporation()->getRoleHistory(int $corporationId, int $page = 1);

Get Icons
---------

:HTTP Method: GET
:Endpoint: /corporations/{corporation_id}/icons/
:Summary: Get the icon urls for a corporation.
:Types: - int $corporationId
:Default: None

.. code-block:: php

    $esiClient->corporation()->getIcons(int $corporationId);

Get NPC Corporations
--------------------

:HTTP Method: GET
:Endpoint: /corporations/npccorps/
:Summary: Get a list of npc corporations.
:Types: None
:Default: None

.. code-block:: php

    $esiClient->corporation()->getNpcCorporations();

Get Structures
--------------

:HTTP Method: GET
:Endpoint: /corporations/{corporation_id}/structures/
:Summary: Get a list of corporation structures.
:Types: - int $corporationId
        - int $page
:Default: - int $page = 1

.. code-block:: php

    $esiClient->corporation()->getStructures(int $corporationId, int $page = 1);

Get Member Tracking
-------------------

:HTTP Method: GET
:Endpoint: /corporations/{corporation_id}/membertracking/
:Summary: Returns additional information about a corporation's members which helps tracking their activities.
:Types: - int $corporationId
:Default: None

.. code-block:: php

    $esiClient->corporation()->getMemberTracking(int $corporationId);

Get Divisions
-------------

:HTTP Method: GET
:Endpoint: /corporations/{corporation_id}/divisions/
:Summary: Return corporation hangar and wallet division names, only show if a division is not using the default name.
:Types: - int $corporationId
:Default: None

.. code-block:: php

    $esiClient->corporation()->getDivisions(int $corporationId);

Get Member Limit
----------------

:HTTP Method: GET
:Endpoint: /corporations/{corporation_id}/members/limit/
:Summary: Return a corporation's member limit, not including CEO himself.
:Types: - int $corporationId
:Default: None

.. code-block:: php

    $esiClient->corporation()->getMemberLimit(int $corporationId);

Get Titles
----------

:HTTP Method: GET
:Endpoint: /corporations/{corporation_id}/titles/
:Summary: Returns a corporation's titles.
:Types: - int $corporationId
:Default: None

.. code-block:: php

    $esiClient->corporation()->getTitles(int $corporationId);

Get Member Titles
-----------------

:HTTP Method: GET
:Endpoint: /corporations/{corporation_id}/members/titles/
:Summary: Returns a corporation's members' titles.
:Types: - int $corporationId
:Default: None

.. code-block:: php

    $esiClient->corporation()->getMemberTitles(int $corporationId);

Get Blueprints
--------------

:HTTP Method: GET
:Endpoint: /corporations/{corporation_id}/blueprints/
:Summary: Returns a list of blueprints the corporation owns.
:Types: - int $corporationId
        - int $page
:Default: - int $page = 1

.. code-block:: php

    $esiClient->corporation()->getBlueprints(int $corporationId, int $page = 1);

Get Standings
-------------

:HTTP Method: GET
:Endpoint: /corporations/{corporation_id}/standings/
:Summary: Return corporation standings from agents, NPC corporations, and factions.
:Types: - int $corporationId
        - int $page
:Default: - int $page = 1

.. code-block:: php

    $esiClient->corporation()->getStandings(int $corporationId, int $page = 1);

Get Starbases
-------------

:HTTP Method: GET
:Endpoint: /corporations/{corporation_id}/starbases/
:Summary: Returns list of corporation starbases (POSes).
:Types: - int $corporationId
        - int $page
:Default: - int $page = 1

.. code-block:: php

    $esiClient->corporation()->getStarbases(int $corporationId, int $page = 1);

Get Starbase Information
------------------------

:HTTP Method: GET
:Endpoint: /corporations/{corporation_id}/starbases/{starbase_id}/
:Summary: Returns various settings and fuels of a starbase (POS).
:Types: - int $corporationId
        - int $starbaseId
:Default: None

.. code-block:: php

    $esiClient->corporation()->getStarbaseInformation(int $corporationId, int $starbaseId);

Get Container Logs
------------------

:HTTP Method: GET
:Endpoint: /corporations/{corporation_id}/containers/logs/
:Summary: Returns logs recorded in the past seven days from all audit log secure containers (ALSC) owned by a given corporation.
:Types: - int $corporationId
        - int $page
:Default: - int $page = 1

.. code-block:: php

    $esiClient->corporation()->getContainerLogs(int $corporationId, int $page = 1);

Get Facilities
--------------

:HTTP Method: GET
:Endpoint: /corporations/{corporation_id}/medals/
:Summary: Returns a corporation's medals.
:Types: - int $corporationId
        - int $page
:Default: - int $page = 1

.. code-block:: php

    $esiClient->corporation()->getMedals(int $corporationId, int $page = 1);

Get Medals Issued
-----------------

:HTTP Method: GET
:Endpoint: /corporations/{corporation_id}/medals/issued/
:Summary: Returns medals issued by a corporation.
:Types: - int $corporationId
        - int $page
:Default: - int $page = 1

.. code-block:: php

    $esiClient->corporation()->getMedalsIssued(int $corporationId, int $page = 1);

Get Outputs
-----------

:HTTP Method: GET
:Endpoint: /corporations/{corporation_id}/outposts/
:Summary: Get a list of corporation outpost IDs Note: This endpoint will be removed once outposts are migrated to Citadels as talked about in this blog: https://community.eveonline.com/news/dev-blogs/the-next-steps-in-structure-transition/ .
:Types: - int $corporationId
        - int $page
:Default: - int $page = 1

.. code-block:: php

    $esiClient->corporation()->getOutposts(int $corporationId, int $page = 1);

Get Outpost Information
-----------------------

:HTTP Method: GET
:Endpoint: /corporations/{corporation_id}/outposts/{outpost_id}/
:Summary: Get details about a given outpost. Note: This endpoint will be removed once outposts are migrated to Citadels as talked about in this blog: https://community.eveonline.com/news/dev-blogs/the-next-steps-in-structure-transition/ .
:Types: - int $corporationId
        - int $outpostId
:Default: None

.. code-block:: php

    $esiClient->corporation()->getOutpostInformation(int $corporationId, int $outpostId);

Get Shareholders
----------------

:HTTP Method: GET
:Endpoint: /corporations/{corporation_id}/shareholders/
:Summary: Return the current shareholders of a corporation.
:Types: - int $corporationId
        - int $page
:Default: - int $page = 1

.. code-block:: php

    $esiClient->corporation()->getShareholders(int $corporationId, int $page = 1);
