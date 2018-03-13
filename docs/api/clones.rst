Clones
======

All of the following examples use the following client:

.. code-block:: php

    $esiClient = \AGrimes94\Esi\EsiClient::create()->authenticate('ACCESS_TOKEN');

Get Clones
----------

:HTTP Method: GET
:Endpoint: /characters/{character_id}/clones/
:Summary: A list of the character’s clones.
:Types: - int $characterId
:Default: None

.. code-block:: php

    $esiClient->clones()->getClones(int $characterId);

Get Active Implants
-------------------

:HTTP Method: GET
:Endpoint: /characters/{character_id}/implants/
:Summary: Return implants on the active clone of a character.
:Types: - int $characterId
:Default: None

.. code-block:: php

    $esiClient->clones()->getActiveImplants(int $characterId);
