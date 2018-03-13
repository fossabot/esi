Contracts
=========

All of the following examples use the following client:

.. code-block:: php

    $esiClient = \AGrimes94\Esi\EsiClient::create()->authenticate('ACCESS_TOKEN');

Get Character Contracts
-----------------------

:HTTP Method: GET
:Endpoint: /characters/{character_id}/contracts/
:Summary: Returns contracts available to a character, only if the character is issuer, acceptor or assignee. Only returns contracts no older than 30 days, or if the status is "in_progress".
:Types: - int $characterId
        - int $page
:Default: - int $page = 1

.. code-block:: php

    $esiClient->contracts()->getCharacterContracts(int $characterId, int $page = 1);

Get Character Contract Items
----------------------------

:HTTP Method: GET
:Endpoint: /characters/{character_id}/contracts/{contract_id}/items/
:Summary: Lists items of a particular contract.
:Types: - int $characterId
        - int $contractId
:Default: None

.. code-block:: php

    $esiClient->contracts()->getCharacterContractItems(int $characterId, int $contractId);

Get Character Contract Bids
---------------------------

:HTTP Method: GET
:Endpoint: /characters/{character_id}/contracts/{contract_id}/bids/
:Summary: Lists bids on a particular auction contract.
:Types: - int $characterId
        - int $contractId
:Default: None

.. code-block:: php

    $esiClient->contracts()->getCharacterContractBids(int $characterId, int $contractId);

Get Corporation Contracts
-------------------------

:HTTP Method: GET
:Endpoint: /corporations/{corporation_id}/contracts/
:Summary: Returns contracts available to a coporation, only if the corporation is issuer, acceptor or assignee. Only returns contracts no older than 30 days, or if the status is "in_progress".
:Types: - int $corporationId
        - int $page
:Default: - int $page = 1

.. code-block:: php

    $esiClient->contracts()->getCorporationContracts(int $corporationId, int $page = 1);

Get Corporation Contract Items
------------------------------

:HTTP Method: GET
:Endpoint: /corporations/{corporation_id}/contracts/{contract_id}/items/
:Summary: Lists items of a particular contract.
:Types: - int $corporationId
        - int $contractId
:Default: None

.. code-block:: php

    $esiClient->contracts()->getCorporationContractItems(int $corporationId, int $contractId);

Get Corporation Contract Bids
-----------------------------

:HTTP Method: GET
:Endpoint: /corporations/{corporation_id}/contracts/{contract_id}/bids/
:Summary: Lists bids on a particular auction contract.
:Types: - int $corporationId
        - int $contractId
        - int $page
:Default: - int $page = 1

.. code-block:: php

    $esiClient->contracts()->getCorporationContractBids(int $corporationId, int $contractId, $page = 1)
