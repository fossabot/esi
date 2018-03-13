Skills
======

All of the following examples use the following client:

.. code-block:: php

    $esiClient = \AGrimes94\Esi\EsiClient::create()->authenticate('ACCESS_TOKEN');

Get Character Attributes
------------------------

:HTTP Method: GET
:Endpoint: /characters/{character_id}/attributes/
:Summary: Return attributes of a character.
:Types: - int $characterId
:Default: None

.. code-block:: php

    $esiClient->skills()->getCharacterAttributes(int $characterId);

Get Character Skillqueue
------------------------

:HTTP Method: GET
:Endpoint: /characters/{character_id}/skillqueue/
:Summary: List the configured skill queue for the given character.
:Types: - int $characterId
:Default: None

.. code-block:: php

    $esiClient->skills()->getCharacterSkillqueue(int $characterId);

Get Character Skills
--------------------

:HTTP Method: GET
:Endpoint: /characters/{character_id}/skills/
:Summary: List all trained skills for the given character
:Types: - int $characterId
:Default: None

.. code-block:: php

    $esiClient->skills()->getCharacterSkills(int $characterId);
