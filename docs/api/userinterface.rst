User Interface
==============

All of the following examples use the following client:

.. code-block:: php

    $esiClient = \AGrimes94\Esi\EsiClient::create()->authenticate('ACCESS_TOKEN');

Set Autopilot Waypoint
----------------------

:HTTP Method: POST
:Endpoint: /ui/autopilot/waypoint/
:Summary: Set a solar system as autopilot waypoint.
:Types: - int       $destinationId
        - bool|null $addToBeginning
        - bool|null $clearOtherWaypoints
:Default: - bool $addToBeginning = null
            - bool $clearOtherWaypoints = null

.. code-block:: php

    $esiClient->userInterface()->setAutopilotWaypoint(int $destinationId, bool $addToBeginning = null, bool $clearOtherWaypoints = null);

Open Contracts Window
---------------------

:HTTP Method: POST
:Endpoint: /ui/openwindow/contract/
:Summary: Open the contract window inside the client.
:Types: - int $contractId
:Default: None

.. code-block:: php

    $esiClient->userInterface()->openContractWindow(int $contractId);

Open Information Window
-----------------------

:HTTP Method: POST
:Endpoint: /ui/openwindow/information/
:Summary: Open the information window for a character, corporation or alliance inside the client.
:Types: - int $targetId
:Default: None

.. code-block:: php

    $esiClient->userInterface()->openInformationWindow(int $targetId);

Open Market Window
------------------

:HTTP Method: POST
:Endpoint: /ui/openwindow/marketdetails/
:Summary: Open the market details window for a specific typeID inside the client.
:Types: - int $typeId
:Default: None

.. code-block:: php

    $esiClient->userInterface()->openMarketWindow(int $typeId);

Open New Mail Window
--------------------

:HTTP Method: POST
:Endpoint: /ui/openwindow/newmail/
:Summary: Open the New Mail window, according to settings from the request if applicable.
:Types: - array $newMail
:Default: - array $newMail = []

.. code-block:: php

    $esiClient->userInterface()->openNewMailWindow(array $newMail = []);
