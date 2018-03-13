Insurance
=========

All of the following examples use the following client:

.. code-block:: php

    $esiClient = \AGrimes94\Esi\EsiClient::create()->authenticate('ACCESS_TOKEN');

Get Insurance Levels
--------------------

:HTTP Method: GET
:Endpoint: /insurance/prices/
:Summary: Return available insurance levels for all ship types.
:Types: None
:Default: None

.. code-block:: php

    $esiClient->industry()->getInsuranceLevels();
