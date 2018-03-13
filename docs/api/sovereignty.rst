Sovereignty
===========

All of the following examples use the following client:

.. code-block:: php

    $esiClient = \AGrimes94\Esi\EsiClient::create()->authenticate('ACCESS_TOKEN');

Get Sovereignty Campaigns
-------------------------

:HTTP Method: GET
:Endpoint: /sovereignty/campaigns/
:Summary: Shows sovereignty data for campaigns.
:Types: None
:Default: None

.. code-block:: php

    $esiClient->skills()->getSovereigntyCampaigns();

Get Sovereignty Systems
-----------------------

:HTTP Method: GET
:Endpoint: /sovereignty/map/
:Summary: Shows sovereignty information for solar systems.
:Types: None
:Default: None

.. code-block:: php

    $esiClient->skills()->getSovereigntySystems();

Get Sovereignty Structures
--------------------------

:HTTP Method: GET
:Endpoint: /sovereignty/structures/
:Summary: Shows sovereignty data for structures.
:Types: None
:Default: None

.. code-block:: php

    $esiClient->skills()->getSovereigntyStructures();
