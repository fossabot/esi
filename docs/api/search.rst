Search
======

All of the following examples use the following client:

.. code-block:: php

    $esiClient = \AGrimes94\Esi\EsiClient::create()->authenticate('ACCESS_TOKEN');

Public Search
-------------

:HTTP Method: GET
:Endpoint: /search/
:Summary: Search for entities that match a given sub-string.
:Types: - string $search
        - array  $categories ['agent', 'alliance', 'character', 'constellation, 'corporation', 'faction', 'inventory_type', 'region', 'solar_system', 'station']
        - bool   $strict
:Default: - string $search = ''
            - array $categories = []
            - bool $strict = false

.. code-block:: php

    $esiClient->search()->searchPublic(string $search = '', array $categories = [], bool $strict = false);

Private Search
--------------

:HTTP Method: GET
:Endpoint: /characters/{character_id}/search/
:Summary: Search for entities that match a given sub-string.
:Types: - int    $characterId
        - string $search
        - array  $categories  ['agent', 'alliance', 'character', 'constellation, 'corporation', 'faction', 'inventory_type', 'region', 'solar_system', 'station']
        - bool   $strict
:Default: - string $search = ''
            - array $categories = []
            - bool $strict = false

.. code-block:: php

    $esiClient->search()->searchPrivate(int $characterId, string $search = '', array $categories = [], bool $strict = false);
