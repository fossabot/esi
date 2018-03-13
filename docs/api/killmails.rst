Killmails
=========

All of the following examples use the following client:

.. code-block:: php

    $esiClient = \AGrimes94\Esi\EsiClient::create()->authenticate('ACCESS_TOKEN');

Get Killmail
------------

:HTTP Method: GET
:Endpoint: /killmails/{killmail_id}/{killmail_hash}/
:Summary: Return a single killmail from its ID and hash.
:Types: - int    $killmailId
        - string $killmailHash
:Default: None

.. code-block:: php

    $esiClient->killmails()->getKillmail(int $killmailId, string $killmailHash);

Get Character Recent Kills
--------------------------

:HTTP Method: GET
:Endpoint: /characters/{character_id}/killmails/recent/
:Summary: Return a list of character's recent kills and losses.
:Types: - int $characterId
:Default: None

.. code-block:: php

    $esiClient->killmails()->getCharacterRecentKillmails(int $characterId);

Get Corporation Recent Kills
----------------------------

:HTTP Method: GET
:Endpoint: /corporations/{corporation_id}/killmails/recent/
:Summary: Get a list of corporation's recent kills and losses.
:Types: - int $corporationId
:Default: None

.. code-block:: php

    $esiClient->killmails()->getCorporationRecentKillmails(int $corporationId);
