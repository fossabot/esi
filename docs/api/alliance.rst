Alliance
========

All of the following examples use the following client:

.. code-block:: php

    $esiClient = \AGrimes94\Esi\EsiClient::create()->authenticate('ACCESS_TOKEN');

List Alliances
--------------

:HTTP Type: GET
:Endpoint: /alliances/
:Summary: List all active player alliances.
:Types: None
:Default: None

.. code-block:: php

    $esiClient->alliance()->listAlliances();
