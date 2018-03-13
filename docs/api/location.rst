Location
========

All of the following examples use the following client:

.. code-block:: php

    $esiClient = \AGrimes94\Esi\EsiClient::create()->authenticate('ACCESS_TOKEN');

Get Character Location
----------------------

:HTTP Method: GET
:Endpoint: /characters/{character_id}/location/
:Summary: Information about the characters current location. Returns the current solar system id, and also the current station or structure ID if applicable.
:Types: - int $characterId
:Default: None

.. code-block:: php

    $esiClient->location()->getCharacterLocation(int $characterId);

Get Character Current Ship
--------------------------

:HTTP Method: GET
:Endpoint: /characters/{character_id}/ship/
:Summary: Get the current ship type, name and id.
:Types: - int $characterId
:Default: None

.. code-block:: php

    $esiClient->location()->getCharacterCurrentShip(int $characterId);

Get Character Online
--------------------

:HTTP Method: GET
:Endpoint: /characters/{character_id}/online/
:Summary: Checks if the character is currently online.
:Types: - int $characterId
:Default: None

.. code-block:: php

    $esiClient->location()->getCharacterOnline(int $characterId);
