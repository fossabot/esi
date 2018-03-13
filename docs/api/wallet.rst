Wallet
======

All of the following examples use the following client:

.. code-block:: php

    $esiClient = \AGrimes94\Esi\EsiClient::create()->authenticate('ACCESS_TOKEN');

Get Character Balance
---------------------

:HTTP Method: GET
:Endpoint: /characters/{character_id}/wallet/
:Summary: Returns a character’s wallet balance.
:Types: - int $characterId
:Default: None

.. code-block:: php

    $esiClient->wallet()->getCharacterBalance(int $characterId);

Get Character Journal
---------------------

:HTTP Method: GET
:Endpoint: /characters/{character_id}/wallet/journal/
:Summary: Retrieve character wallet journal.
:Types: - int      $characterId
        - int|null $fromId
:Default: - int $fromId = null

.. code-block:: php

    $esiClient->wallet()->getCharacterJournal(int $characterId, int $fromId = null);

Get Character Transactions
--------------------------

:HTTP Method: GET
:Endpoint: /characters/{character_id}/wallet/transactions/
:Summary: Get wallet transactions of a character.
:Types: - int      $characterId
        - int|null $fromId
:Default: - int $fromId = null

.. code-block:: php

    $esiClient->wallet()->getCharacterTransactions(int $characterId, int $fromId = null);

Get Corporation Balance
-----------------------

:HTTP Method: GET
:Endpoint: /corporations/{corporation_id}/wallets/
:Summary: Get a corporation’s wallets.
:Types: - int $corporationId
:Default: None

.. code-block:: php

    $esiClient->wallet()->getCorporationBalance(int $corporationId);

Get Corporation Journal
-----------------------

:HTTP Method: GET
:Endpoint: /corporations/{corporation_id}/wallets/{division}/journal/
:Summary: Retrieve corporation wallet journal.
:Types: - int      $corporationId
        - int      $divisionId
        - int|null $fromId
:Default: - int $fromId = null

.. code-block:: php

    $esiClient->wallet()->getCorporationJournal(int $corporationId, int $divisionId, int $fromId = null);

Get Corporation Transactions
----------------------------

:HTTP Method: GET
:Endpoint: /corporations/{corporation_id}/wallets/{division}/transactions/
:Summary: Get wallet transactions of a corporation.
:Types: - int      $corporationId
        - int      $divisionId
        - int|null $fromId
:Default: - int $fromId = null

.. code-block:: php

    $esiClient->wallet()->getCorporationTransactions(int $corporationId, int $divisionId, int $fromId = null);
