Routes
======

All of the following examples use the following client:

.. code-block:: php

    $esiClient = \AGrimes94\Esi\EsiClient::create()->authenticate('ACCESS_TOKEN');

Get Route
---------

:HTTP Method: GET
:Endpoint: /route/{origin}/{destination}/
:Summary: Get the systems between origin and destination.
:Types: - int        $originId
        - int        $destinationId
        - string     $flag          'shortest', 'secure', 'insecure'
        - array|null $avoid         [30002771, 30002770, 30002769]
        - array|null $connections   [30002771, 30002770, 30002769]
:Default: - string $flag = 'shortest'
            - array $avoid = null
            - array $connections = null

.. code-block:: php

    $esiClient->routes()->getRoute(int $originId, int $destinationId, string $flag = 'shortest', array $avoid = null, array $connections = null);
