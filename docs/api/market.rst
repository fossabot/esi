Market
======

All of the following examples use the following client:

.. code-block:: php

    $esiClient = \AGrimes94\Esi\EsiClient::create()->authenticate('ACCESS_TOKEN');

Get Character Orders
--------------------

:HTTP Method: GET
:Endpoint: /characters/{character_id}/orders/
:Summary: List market orders placed by a character.
:Types: - int $characterId
:Default: None

.. code-block:: php

    $esiClient->market()->getCharacterOrders(int $characterId);

Get Character Historical Orders
---------------------

:HTTP Method: GET
:Endpoint: /characters/{character_id}/orders/history/
:Summary: List cancelled and expired market orders placed by a character up to 90 days in the past.
:Types: - int $characterId
        - int $page
:Default: - int $page = 1

.. code-block:: php

    $esiClient->market()->getHistoricalCharacterOrders(int $characterId, int $page = 1);

Get Corporation Orders
----------------------

:HTTP Method: GET
:Endpoint: /corporations/{corporation_id}/orders/
:Summary: List open market orders placed on behalf of a corporation.
:Types: - int $corporationId
        - int $page
:Default: - int $page = 1

.. code-block:: php

    $esiClient->market()->getCorporationOrders(int $corporationId, int $page = 1);

Get Corporation Historical Orders
---------------------------------

:HTTP Method: GET
:Endpoint: /corporations/{corporation_id}/orders/history/
:Summary: List cancelled and expired market orders placed on behalf of a corporation up to 90 days in the past.
:Types: - int $corporationId
        - int $page
:Default: - int $page = 1

.. code-block:: php

    $esiClient->market()->getHistoricalCorporationOrders(int $corporationId, int $page = 1);

Get Historical Type In Region Statistics
----------------------------------------

:HTTP Method: GET
:Endpoint: /markets/{region_id}/history/
:Summary: Return a list of historical market statistics for the specified type in a region.
:Types: - int $regionId
        - int $typeId
:Default: None

.. code-block:: php

    $esiClient->market()->getHistoricalTypeInRegionStatistics(int $regionId, int $typeId);

Get Orders in Region
--------------------

:HTTP Method: GET
:Endpoint: /markets/{region_id}/orders/
:Summary: Return a list of orders in a region.
:Types: - int      $regionId
        - string   $orderType
        - int|null $typeId
        - int      $page
:Default: - string $orderType = 'all'
            - int $typeId = null
            -  int $page = 1

.. code-block:: php

    $esiClient->market()->getOrdersInRegion(int $regionId, string $orderType = 'all', int $typeId = null, int $page = 1);

Get Active Types in Region
--------------------------

:HTTP Method: GET
:Endpoint: /markets/{region_id}/types/
:Summary: Return a list of type IDs that have active orders in the region, for efficient market indexing.
:Types: - int $regionId
        - int $page
:Default: -  int $page = 1

.. code-block:: php

    $esiClient->market()->getActiveTypesInRegion(int $regionId, int $page = 1);

Get Item Groups
---------------

:HTTP Method: GET
:Endpoint: /markets/groups/
:Summary: Get a list of item groups.
:Types: None
:Default: None

.. code-block:: php

    $esiClient->market()->getItemGroups();

Get Item Group Information
--------------------------

:HTTP Method: GET
:Endpoint: /markets/groups/{market_group_id}/
:Summary: Get information on an item group.
:Types: - int $marketGroupId
:Default: None

.. code-block:: php

    $esiClient->market()->getItemGroupInformation(int $marketGroupId);

Get Market Prices
-----------------

:HTTP Method: GET
:Endpoint: /markets/prices/
:Summary: Return a list of prices.
:Types: None
:Default: None

.. code-block:: php

    $esiClient->market()->getMarketPrices();

Get Structure Orders
--------------------

:HTTP Method: GET
:Endpoint: /markets/structures/{structure_id}/
:Summary: Return all orders in a structure.
:Types: - int $structureId
        - int $page
:Default: - int $page = 1

.. code-block:: php

    $esiClient->market()->getStructureOrders(int $structureId, int $page = 1);
