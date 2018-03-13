Incursions
==========

All of the following examples use the following client:

.. code-block:: php

    $esiClient = \AGrimes94\Esi\EsiClient::create()->authenticate('ACCESS_TOKEN');

Get Incursions
--------------

:HTTP Method: GET
:Endpoint: /incursions/
:Summary: Return a list of current incursions.
:Types: None
:Default: None

.. code-block:: php

    $esiClient->incursions()->getIncursions();
