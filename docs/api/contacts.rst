Contacts
========

All of the following examples use the following client:

.. code-block:: php

    $esiClient = \AGrimes94\Esi\EsiClient::create()->authenticate('ACCESS_TOKEN');

Get Alliance Contacts
---------------------

:HTTP Method: GET
:Endpoint: /alliances/{alliance_id}/contacts/
:Summary: Return contacts of an alliance.
:Types: - int $allianceId
        - int $page
:Default: - int $page = 1

.. code-block:: php

    $esiClient->contacts()->getAllianceContacts(int $allianceId, int $page = 1);

Get Contacts
------------

:HTTP Method: GET
:Endpoint: /characters/{character_id}/contacts/
:Summary: Return contacts of a character.
:Types: - int $characterId
        - int $page
:Default: - int $page = 1

.. code-block:: php

    $esiClient->contacts()->getContacts(int $characterId, int $page);

Add Contacts
------------

:HTTP Method: POST
:Endpoint: /characters/{character_id}/contacts/
:Summary: Bulk add contacts with same settings.
:Types: - int       $characterId
        - array     $contactIds
        - int       $standing    -10, -5, 0, 5, 10
        - int|null  $labelId
        - bool|null $isWatched
:Default: - array $contactIds = []
            - int $standing = 0
            - int $labelId = null
            - bool $isWatched = null

.. code-block:: php

    $esiClient->contacts()->addContacts(int $characterId, array $contactIds = [], int $standing = 0, int $labelId = null, bool $isWatched = null);

Edit Contacts
-------------

:HTTP Method: PUT
:Endpoint: /characters/{character_id}/contacts/
:Summary: Bulk edit contacts with same settings.
:Types: - int       $characterId
        - array     $contactIds
        - int       $standing    -10, -5, 0, 5, 10
        - int|null  $labelId
        - bool|null $isWatched
:Default: - array $contactIds = []
            - int $standing = 0
            - int $labelId = null
            - bool $isWatched = null

.. code-block:: php

    $esiClient->contacts()->editContacts(int $characterId, array $contactIds = [], int $standing = 0, int $labelId = null, bool $isWatched = null);

Delete Contacts
---------------

:HTTP Method: DELETE
:Endpoint: /characters/{character_id}/contacts/
:Summary: Bulk delete contacts.
:Types: - int   $characterId
        - array $contactIds
:Default: - array $contactIds = []

.. code-block:: php

    $esiClient->contacts()->deleteContacts(int $characterId, array $contactIds = []);

Get Labels
----------

:HTTP Method: GET
:Endpoint: /characters/{character_id}/contacts/labels/
:Summary: Return custom labels for contacts the character defined.
:Types: - int $characterId
:Default: None

.. code-block:: php

    $esiClient->contacts()->getLabels(int $characterId);

Get Corporation Contacts
--------------------------

:HTTP Method: GET
:Endpoint: /corporations/{corporation_id}/contacts/
:Summary: Return contacts of a corporation.
:Types: - int $corporationId
:Default: None

.. code-block:: php

    $esiClient->contacts()->getCorporationContacts(int $corporationId);
