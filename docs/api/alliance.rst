Alliance
========

All of the following examples use the following client:

.. code-block:: php

    $esiClient = \AGrimes94\Esi\EsiClient::create()->authenticate('ACCESS_TOKEN');

List Alliances
--------------

:HTTP Method: GET
:Endpoint: /alliances/
:Summary: List all active player alliances.
:Types: None
:Default: None

.. code-block:: php

    $esiClient->alliance()->listAlliances();

Get Alliance Information
------------------------

:HTTP Method: GET
:Endpoint: /alliances/{alliance_id}/
:Summary: Public information about an alliance.
:Types: - int $allianceId
:Default: None

.. code-block:: php

    $esiClient->alliance()->getAllianceInformation(int $allianceId);

List Alliance Corporations
--------------------------

:HTTP Method: GET
:Endpoint: /alliances/{alliance_id}/corporations/
:Summary: List all current member corporations of an alliance.
:Types: - int $allianceId
:Default: None

.. code-block:: php

    $esiClient->alliance()->listAllianceCorporations(int $allianceId);

Get Alliance Icons
------------------

:HTTP Method: GET
:Endpoint:  /alliances/{alliance_id}/icons/
:Summary: Get the icon urls for a alliance.
:Types: - int $allianceId
:Default: None

.. code-block:: php

    $esiClient->alliance()->getAllianceIcons(int $allianceId);

Get Alliance Names
------------------

:HTTP Method: GET
:Endpoint:  /alliances/names/
:Summary: Resolve a set of alliance IDs to alliance names.
:Types: - array $allianceIds
:Default: $allianceIds = []

.. code-block:: php

    $esiClient->alliance()->getAllianceNames(array $allianceIds = []);
