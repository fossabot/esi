Fleets
======

All of the following examples use the following client:

.. code-block:: php

    $esiClient = \AGrimes94\Esi\EsiClient::create()->authenticate('ACCESS_TOKEN');

Get Character Fleet Information
-------------------------------

:HTTP Method: GET
:Endpoint: /characters/{character_id}/fleet/
:Summary: Return the fleet ID the character is in, if any.
:Types: - int $characterId
:Default: None

.. code-block:: php

    $esiClient->fleets()->getCharacterFleetInformation(int $characterId);

Get Fleet Information
---------------------

:HTTP Method: GET
:Endpoint: /fleets/{fleet_id}/
:Summary: Return details about a fleet.
:Types: - int $fleetId
:Default: None

.. code-block:: php

    $esiClient->fleets()->getFleetInformation(int $fleetId);

Update Settings
---------------

:HTTP Method: PUT
:Endpoint: /fleets/{fleet_id}/
:Summary: Update settings about a fleet.
:Types: - int   $fleetId
        - array $settings
:Default: - array $settings = []

.. code-block:: php

    $esiClient->fleets()->updateSettings(int $fleetId, array $settings = []);

Get Members
------------

:HTTP Method: GET
:Endpoint: /fleets/{fleet_id}/members/
:Summary: Return information about fleet members.
:Types: - int $fleetId
:Default: None

.. code-block:: php

    $esiClient->fleets()->getMembers(int $fleetId);

Create Invite
-------------

:HTTP Method: POST
:Endpoint: /fleets/{fleet_id}/members/
:Summary: Invite a character into the fleet. If a character has a CSPA charge set it is not possible to invite them to the fleet using ESI.
:Types: - int   $fleetId
        - array $invite
:Default: - array $invite = []

.. code-block:: php

    $esiClient->fleets()->createInvite(int $fleetId, array $invite = []);

Kick Member
-----------

:HTTP Method: DELETE
:Endpoint: /fleets/{fleet_id}/members/{member_id}/
:Summary: Kick a fleet member.
:Types: - int $fleetId
        - int $memberId
:Default: None

.. code-block:: php

    $esiClient->fleets()->kickMember(int $fleetId, int $memberId);

Move Member
-----------

:HTTP Method: PUT
:Endpoint: /fleets/{fleet_id}/members/{member_id}/
:Summary: Move a fleet member around.
:Types: - int   $fleetId
        - int   $memberId
        - array $movement
:Default: - array $movement = []

.. code-block:: php

    $esiClient->fleets()->moveMember(int $fleetId, int $memberId, array $movement = []);

Create Squad
------------

:HTTP Method: POST
:Endpoint: /fleets/{fleet_id}/wings/{wing_id}/squads/
:Summary: Create a new squad in a fleet.
:Types: - int $fleetId
        - int $wingId
:Default: None

.. code-block:: php

    $esiClient->fleets()->createSquad(int $fleetId, int $wingId);

Rename Squad
------------

:HTTP Method: PUT
:Endpoint: /fleets/{fleet_id}/squads/{squad_id}/
:Summary: Rename a fleet squad.
:Types: - int   $fleetId
        - int   $squadId
        - array $naming
:Default: - array $naming = []

.. code-block:: php

    $esiClient->fleets()->renameSquad(int $fleetId, int $squadId, array $naming = []);

Delete Squad
------------

:HTTP Method: DELETE
:Endpoint: /fleets/{fleet_id}/squads/{squad_id}/
:Summary: Delete a fleet squad, only empty squads can be deleted.
:Types: - int $fleetId
        - int $squadId
:Default: None

.. code-block:: php

    $esiClient->fleets()->deleteSquad(int $fleetId, int $squadId);

Get Wings
---------

:HTTP Method: GET
:Endpoint: /fleets/{fleet_id}/wings/
:Summary: Return information about wings in a fleet.
:Types: - int $fleetId
:Default: None

.. code-block:: php

    $esiClient->fleets()->getWings(int $fleetId);

Create Wing
-----------

:HTTP Method: POST
:Endpoint: /fleets/{fleet_id}/wings/
:Summary: Create a new wing in a fleet.
:Types: - int $fleetId
:Default: None

.. code-block:: php

    $esiClient->fleets()->createWing(int $fleetId);

Rename Wing
-----------

:HTTP Method: PUT
:Endpoint: /fleets/{fleet_id}/wings/{wing_id}/
:Summary: Create a new wing in a fleet.
:Types: - int   $fleetId
        - int   $wingId
        - array $naming
:Default: - array $naming = []

.. code-block:: php

    $esiClient->fleets()->renameWing(int $fleetId, int $wingId, array $naming = []);

Delete Wing
-----------

:HTTP Method: DELETE
:Endpoint: /fleets/{fleet_id}/wings/{wing_id}/
:Summary: Delete a fleet wing, only empty wings can be deleted. The wing may contain squads, but the squads must be empty
:Types: - int $fleetId
            - int $wingId
:Default: None

.. code-block:: php

    $esiClient->fleets()->deleteWing(int $fleetId, int $wingId);
