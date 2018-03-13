Fitting
=======

All of the following examples use the following client:

.. code-block:: php

    $esiClient = \AGrimes94\Esi\EsiClient::create()->authenticate('ACCESS_TOKEN');

Get Fittings
------------

:HTTP Method: GET
:Endpoint: /characters/{character_id}/fittings/
:Summary: Return fittings of a character.
:Types: - int $characterId
:Default: None

.. code-block:: php

    $esiClient->fittings()->getFittings(int $characterId);

Create Fitting
--------------

:HTTP Method: POST
:Endpoint: /characters/{character_id}/fittings/
:Summary: Save a new fitting for a character.
:Types: - int $characterId
        - array $fitting
:Default: - array $fitting = []

.. code-block:: php

    $esiClient->fittings()->createFitting(int $characterId, array $fitting = []);

Delete Fitting
--------------

:HTTP Method: DELETE
:Endpoint: /characters/{character_id}/fittings/{fitting_id}/
:Summary: Delete a fitting from a character.
:Types: - int $characterId
        - int $fittingId
:Default: None

.. code-block:: php

    $esiClient->fittings()->deleteFitting(int $characterId, int $fittingId);
