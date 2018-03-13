Industry
========

All of the following examples use the following client:

.. code-block:: php

    $esiClient = \AGrimes94\Esi\EsiClient::create()->authenticate('ACCESS_TOKEN');

Get Industry Facilities
-----------------------

:HTTP Method: GET
:Endpoint: /industry/facilities/
:Summary: Return a list of industry facilities.
:Types: None
:Default: None

.. code-block:: php

    $esiClient->industry()->getIndustryFacilities();

Get Solar System Cost Indices
-----------------------------

:HTTP Method: GET
:Endpoint: /industry/systems/
:Summary: Return cost indices for solar systems.
:Types: None
:Default: None

.. code-block:: php

    $esiClient->industry()->getSolarSystemCostIndices();

Get Character Jobs
------------------

:HTTP Method: GET
:Endpoint: /characters/{character_id}/industry/jobs/
:Summary: List industry jobs placed by a character.
:Types: - int $characterId
:Default: None

.. code-block:: php

    $esiClient->industry()->getCharacterJobs(int $characterId);

Get Character Mining Ledger
---------------------------

:HTTP Method: GET
:Endpoint: /characters/{character_id}/mining/
:Summary: Paginated record of all mining done by a character for the past 30 days.
:Types: - int $characterId
        - int $page
:Default: - int $page = 1

.. code-block:: php

    $esiClient->industry()->getCharacterMiningLedger(int $characterId, int $page = 1);

Get Corporation Mining Observers
--------------------------------

:HTTP Method: GET
:Endpoint: /corporation/{corporation_id}/mining/observers/.
:Summary: Paginated list of all entities capable of observing and recording mining for a corporation.
:Types: - int $corporationId
        - int $page
:Default: - int $page = 1

.. code-block:: php

    $esiClient->industry()->getCorporationMiningObservers(int $corporationId, int $page = 1);

Get Observed Corporation Mining
-------------------------------

:HTTP Method: GET
:Endpoint: /corporation/{corporation_id}/mining/observers/{observer_id}/
:Summary: Paginated record of all mining seen by an observer.
:Types: - int $corporationId
        - int $observerId
        - int $page
:Default: - int $page = 1

.. code-block:: php

    $esiClient->industry()->getObservedCorporationMining(int $corporationId, int $observerId, int $page = 1);

Get Corporation Jobs
--------------------

:HTTP Method: GET
:Endpoint: /corporations/{corporation_id}/industry/jobs/
:Summary: List industry jobs run by a corporation.
:Types: - int $corporationId
        - int $page
:Default: - int $page = 1

.. code-block:: php

    $esiClient->industry()->getCorporationJobs(int $corporationId, int $page = 1);

Get Moon Extraction Timers
--------------------------

:HTTP Method: GET
:Endpoint: /corporation/{corporation_id}/mining/extractions/
:Summary: Extraction timers for all moon chunks being extracted by refineries belonging to a corporation.
:Types: - int $corporationId
:Default: None

.. code-block:: php

    $esiClient->industry()->getMoonExtractionTimers(int $corporationId);
