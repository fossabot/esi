Planetary Interaction
=====================

All of the following examples use the following client:

.. code-block:: php

    $esiClient = \AGrimes94\Esi\EsiClient::create()->authenticate('ACCESS_TOKEN');

Get Character Colonies
----------------------

:HTTP Method: GET
:Endpoint: /characters/{character_id}/planets/
:Summary: Returns a list of all planetary colonies owned by a character.
:Types: - int $characterId
:Default: None

.. code-block:: php

    $esiClient->planetaryInteraction()->getCharacterColonies(int $characterId);

Get Character Colony Layout
---------------------------

:HTTP Method: GET
:Endpoint: /characters/{character_id}/planets/{planet_id}/
:Summary: Returns full details on the layout of a single planetary colony, including links, pins and routes. Note: Planetary information is only recalculated when the colony is viewed through the client. Information will not update until this criteria is met.
:Types: - int $characterId
        - int $planetId
:Default: None

.. code-block:: php

    $esiClient->planetaryInteraction()->getCharacterColonyLayout(int $characterId, int $planetId);

Get Schematic Information
-------------------------

:HTTP Method: GET
:Endpoint: /universe/schematics/{schematic_id}/
:Summary: Get information on a planetary factory schematic.
:Types: - int $schematicId
:Default: None

.. code-block:: php

    $esiClient->planetaryInteraction()->getSchematicInformation(int $schematicId);

Get Corporation Customs Offices
-------------------------------

:HTTP Method: GET
:Endpoint: /corporations/{corporation_id}/customs_offices/
:Summary: List customs offices owned by a corporation.
:Types: - int $corporationId
        - int $page
:Default: - int $page = 1

.. code-block:: php

    $esiClient->planetaryInteraction()->getCorporationCustomsOffices(int $corporationId, int $page = 1);
