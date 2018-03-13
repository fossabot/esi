Calendar
========

All of the following examples use the following client:

.. code-block:: php

    $esiClient = \AGrimes94\Esi\EsiClient::create()->authenticate('ACCESS_TOKEN');

Get Public Information about a character
----------------------------------------

:HTTP Method: GET
:Endpoint: /characters/{character_id}/
:Summary: Public information about a character.
:Types: - int $characterId
:Default: None

.. code-block:: php

    $esiClient->character()->getPublicInformation(int $characterId);

Get Agents Research
-------------------

:HTTP Method: GET
:Endpoint: /characters/{character_id}/agents_research/
:Summary: Return a list of agents research information for a character.
:Types: - int $characterId
:Default: None

.. code-block:: php

    $esiClient->character()->getAgentsResearch(int $characterId);

Get Blueprints
--------------

:HTTP Method: GET
:Endpoint: /characters/{character_id}/blueprints/
:Summary: Return a list of blueprints the character owns.
:Types: - int $characterId
        - int $page
:Default: int $page = 1

.. code-block:: php

    $esiClient->character()->getBlueprints(int $characterId, int $page = 1);

Get Chat Channels
-----------------

:HTTP Method: GET
:Endpoint: /characters/{character_id}/chat_channels/
:Summary: Return chat channels that a character is the owner or operator of.
:Types: - int $characterId
:Default: None

.. code-block:: php

    $esiClient->character()->getChatChannels(int $characterId);

Get Corp History
----------------

:HTTP Method: GET
:Endpoint: /characters/{character_id}/corporationhistory/
:Summary: Get a list of all the corporations a character has been a member of.
:Types: - int $characterId
:Default: None

.. code-block:: php

    $esiClient->character()->getCorpHistory(int $characterId);

Calculate CSPA Charge
---------------------

:HTTP Method: POST
:Endpoint: /characters/{character_id}/cspa/
:Summary: Takes a source character ID in the url and a set of target character ID's in the body, returns a CSPA charge cost.
:Types: - int   $characterId
        - array $targetCharacters
:Default: array $targetCharacters = []

.. code-block:: php

    $esiClient->character()->calcCSPA(int $characterId, array $targetCharacters = []);

Get Jump Fatigue
----------------

:HTTP Method: GET
:Endpoint: /characters/{character_id}/fatigue/
:Summary: Return a character’s jump activation and fatigue information.
:Types: - int $characterId
:Default: None

.. code-block:: php

    $esiClient->character()->getJumpFatigue(int $characterId);

Get Medals
----------

:HTTP Method: GET
:Endpoint: /characters/{character_id}/medals/
:Summary: Return a list of medals the character has.
:Types: - int $characterId
:Default: None

.. code-block:: php

    $esiClient->character()->getMedals(int $characterId);

Get Notifications
-----------------

:HTTP Method: GET
:Endpoint: /characters/{character_id}/notifications/
:Summary: Return character notifications.
:Types: - int $characterId
:Default: None

.. code-block:: php

    $esiClient->character()->getNotifications(int $characterId);

Get Contact Notifications
-------------------------

:HTTP Method: GET
:Endpoint: /characters/{character_id}/notifications/contacts/
:Summary: Return notifications about having been added to someone’s contact list.
:Types: - int $characterId
:Default: None

.. code-block:: php

    $esiClient->character()->getContactNotifications(int $characterId);

Get Portraits
-------------

:HTTP Method: GET
:Endpoint: /characters/{character_id}/portrait/
:Summary: Get portrait urls for a character.
:Types: - int $characterId
:Default: None

.. code-block:: php

    $esiClient->character()->getPortraits(int $characterId);

Get Roles
---------

:HTTP Method: GET
:Endpoint: /characters/{character_id}/roles/
:Summary: Returns a character’s corporation roles.
:Types: - int $characterId
:Default: None

.. code-block:: php

    $esiClient->character()->getRoles(int $characterId);

Get Standings
-------------

:HTTP Method: GET
:Endpoint: /characters/{character_id}/standings/
:Summary: Return character standings from agents, NPC corporations, and factions.
:Types: - int $characterId
:Default: None

.. code-block:: php

    $esiClient->character()->getStandings(int $characterId);

Get Aggregate Yearly Stats
--------------------------

:HTTP Method: GET
:Endpoint: /characters/{character_id}/stats/
:Summary: Returns aggregate yearly stats for a character.
:Types: - int $characterId
:Default: None

.. code-block:: php

    $esiClient->character()->getAggregateYearlyStats(int $characterId);

Get Titles
----------

:HTTP Method: GET
:Endpoint: /characters/{character_id}/titles/
:Summary: Returns a character’s titles.
:Types: - int $characterId
:Default: None

.. code-block:: php

    $esiClient->character()->getTitles(int $characterId);

Get Affiliations
----------------

:HTTP Method: POST
:Endpoint: /characters/affiliation/
:Summary: Bulk lookup of character IDs to corporation, alliance and faction.
:Types: - array $characterIds
:Default: array $characterIds = []

.. code-block:: php

    $esiClient->character()->getAffiliations(array $characterIds = []);
