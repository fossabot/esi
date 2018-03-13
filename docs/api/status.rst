Status
======

All of the following examples use the following client:

.. code-block:: php

    $esiClient = \AGrimes94\Esi\EsiClient::create()->authenticate('ACCESS_TOKEN');

Get Status
----------

:HTTP Method: GET
:Endpoint: /status/
:Summary: EVE Server status.
:Types: None
:Default: None

.. code-block:: php

    $esiClient->status()->getStatus();
