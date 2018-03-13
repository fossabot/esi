Wars
====

All of the following examples use the following client:

.. code-block:: php

    $esiClient = \AGrimes94\Esi\EsiClient::create()->authenticate('ACCESS_TOKEN');

Get Wars
--------

:HTTP Method: GET
:Endpoint: /wars/
:Summary: Return a list of wars.
:Types: - int|null $maxWarId
:Default: - int $maxWarId = null

.. code-block:: php

    $esiClient->wars()->getWars(int $maxWarId = null);

Get War Information
-------------------

:HTTP Method: GET
:Endpoint: /wars/{war_id}/
:Summary: Return details about a war.
:Types: - int $warId
:Default: - int $maxWarId = null

.. code-block:: php

    $esiClient->wars()->getWarInformation(int $warId);

Get War Killmails
-----------------

:HTTP Method: GET
:Endpoint: /wars/{war_id}/killmails/
:Summary: Return a list of kills related to a war.
:Types: - int $warId
        - int $page
:Default: - int $page = 1

.. code-block:: php

    $esiClient->wars()->getWarKillmails(int $warId, int $page = 1);
