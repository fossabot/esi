Loyalty
=======

All of the following examples use the following client:

.. code-block:: php

    $esiClient = \AGrimes94\Esi\EsiClient::create()->authenticate('ACCESS_TOKEN');

Get Loyalty Points
------------------

:HTTP Method: GET
:Endpoint: /characters/{character_id}/loyalty/points/
:Summary: Return a list of loyalty points for all corporations the character has worked for.
:Types: - int $characterId
:Default: None

.. code-block:: php

    $esiClient->loyalty()->getLoyaltyPoints(int $characterId);

Get Store Offers
----------------

:HTTP Method: GET
:Endpoint: /loyalty/stores/{corporation_id}/offers/
:Summary: Return a list of offers from a specific corporation’s loyalty store.
:Types: - int $corporationId
:Default: None

.. code-block:: php

    $esiClient->loyalty()->getStoreOffers(int $corporationId);
