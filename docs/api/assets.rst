Assets
======

All of the following examples use the following client:

.. code-block:: php

    $esiClient = \AGrimes94\Esi\EsiClient::create()->authenticate('ACCESS_TOKEN');

Get Character Assets
--------------------

:HTTP Method: GET
:Endpoint: /characters/{character_id}/assets/
:Summary: Return a list of the characters assets.
:Types: - int $characterId
        - int $page
:Default: - $page = 1

.. code-block:: php

    $esiClient->assets()->getCharacterAssets(int $characterId, int $page = 1);

Get Character Asset Locations
-----------------------------

:HTTP Method: POST
:Endpoint: /characters/{character_id}/assets/locations/
:Summary: Return locations for a set of item ids, which you can get from character assets endpoint. Coordinates for items in hangars or stations are set to (0,0,0).
:Types: - int   $characterId
        - array $itemIds
:Default: - $itemIds = []

.. code-block:: php

    $esiClient->assets()->getCharacterAssetLocations(int $characterId, array $itemIds = []);

Get Character Asset Names
-------------------------

:HTTP Method: POST
:Endpoint: /characters/{character_id}/assets/names/
:Summary: Return names for a set of item ids, which you can get from character assets endpoint. Typically used for items that can customize names, like containers or ships.
:Types: - int   $characterId
        - array $itemIds
:Default: - $itemIds = []

.. code-block:: php

    $esiClient->assets()->getCharacterAssetNames(int $characterId, array $itemIds = []);

Get Corporation Assets
----------------------

:HTTP Method: GET
:Endpoint: /corporations/{corporation_id}/assets/
:Summary: Return a list of the corporation assets.
:Types: - int $corporationId
        - int $page
:Default: - $page = 1

.. code-block:: php

    $esiClient->assets()->getCorporationAssets(int $corporationId, int $page = 1);

Get Corporation Asset Locations
-------------------------------

:HTTP Method: POST
:Endpoint: /corporations/{corporation_id}/assets/locations/
:Summary: Return locations for a set of item ids, which you can get from corporation assets endpoint. Coordinates for items in hangars or stations are set to (0,0,0).
:Types: - int $corporationId
        - array $itemIds
:Default: - $itemIds = []

.. code-block:: php

    $esiClient->assets()->getCorporationAssetLocations(int $corporationId, array $itemIds = []);

Get Corporation Asset Names
---------------------------

:HTTP Method: POST
:Endpoint: /corporations/{corporation_id}/assets/names/
:Summary: Return names for a set of item ids, which you can get from corporation assets endpoint. Only valid for items that can customize names, like containers or ships.
:Types: - int $corporationId
        - array $itemIds
:Default: - $itemIds = []

.. code-block:: php

    $esiClient->assets()->getCorporationAssetNames(int $corporationId, array $itemIds = []);
