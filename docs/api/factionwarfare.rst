Faction Warfare
===============

All of the following examples use the following client:

.. code-block:: php

    $esiClient = \AGrimes94\Esi\EsiClient::create()->authenticate('ACCESS_TOKEN');

Get NPC Wars
------------

:HTTP Method: GET
:Endpoint: /fw/wars/
:Summary: Data about which NPC factions are at war.
:Types: None
:Default: None

.. code-block:: php

    $esiClient->factionWarfare()->getNpcWars();

Get System Owners
-----------------

:HTTP Method: GET
:Endpoint: /fw/systems/
:Summary: An overview of the current ownership of faction warfare solar systems.
:Types: None
:Default: None

.. code-block:: php

    $esiClient->factionWarfare()->getSystemOwners();

Get Faction Stats
-----------------

:HTTP Method: GET
:Endpoint: /fw/stats/
:Summary: Statistical overviews of factions involved in faction warfare.
:Types: None
:Default: None

.. code-block:: php

    $esiClient->factionWarfare()->getFactionStats();

Get Character Stats
-------------------

:HTTP Method: GET
:Endpoint: /characters/{character_id}/fw/stats/
:Summary: Statistical overview of a character involved in faction warfare.
:Types: - int $characterId
:Default: None

.. code-block:: php

    $esiClient->factionWarfare()->getCharacterStats(int $characterId);

Get Corporation Stats
---------------------

:HTTP Method: GET
:Endpoint: /corporations/{corporation_id}/fw/stats/
:Summary: Statistics about a corporation involved in faction warfare.
:Types: - int $corporationId
:Default: None

.. code-block:: php

    $esiClient->factionWarfare()->getCorporationStats(int $corporationId);

Get Faction Leaderboard
-----------------------

:HTTP Method: GET
:Endpoint: /fw/leaderboards/
:Summary: Top 4 leaderboard of factions for kills and victory points separated by total, last week and yesterday.
:Types: None
:Default: None

.. code-block:: php

    $esiClient->factionWarfare()->getFactionLeaderboard();

Get Character Leaderboard
-------------------------

:HTTP Method: GET
:Endpoint: /fw/leaderboards/characters/
:Summary: Top 100 leaderboard of pilots for kills and victory points separated by total, last week and yesterday.
:Types: None
:Default: None

.. code-block:: php

    $esiClient->factionWarfare()->getCharacterLeaderboard();

Get Corporation Leaderboard
---------------------------

:HTTP Method: GET
:Endpoint: /fw/leaderboards/corporations/
:Summary: Top 10 leaderboard of corporations for kills and victory points separated by total, last week and yesterday.
:Types: None
:Default: None

.. code-block:: php

    $esiClient->factionWarfare()->getCorporationLeaderboard();
