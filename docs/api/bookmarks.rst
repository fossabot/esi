Bookmarks
=========

All of the following examples use the following client:

.. code-block:: php

    $esiClient = \AGrimes94\Esi\EsiClient::create()->authenticate('ACCESS_TOKEN');

List Character Bookmarks
------------------------

:HTTP Method: GET
:Endpoint: /characters/{character_id}/bookmarks/
:Summary: A list of your character's personal bookmarks.
:Types: - int $characterId
        - int $page
:Default: $page = 1

.. code-block:: php

    $esiClient->bookmarks()->listCharacterBookmarks(int $characterId, int $page = 1);

List Character Bookmark Folders
-------------------------------

:HTTP Method: GET
:Endpoint: /characters/{character_id}/bookmarks/folders/
:Summary: A list of your character's personal bookmark folders.
:Types: - int $characterId
        - int $page
:Default: $page = 1

.. code-block:: php

    $esiClient->bookmarks()->listCharacterBookmarkFolders(int $characterId, int $page = 1);

List Corporation Bookmarks
--------------------------

:HTTP Method: GET
:Endpoint: /corporations/{corporation_id}/bookmarks/
:Summary: A list of your corporation's bookmarks.
:Types: - int $corporationId
        - int $page
:Default: $page = 1

.. code-block:: php

    $esiClient->bookmarks()->listCorporationBookmarks(int $corporationId, int $page = 1);

List Corporation Bookmark Folders
---------------------------------

:HTTP Method: GET
:Endpoint: /corporations/{corporation_id}/bookmarks/folders/
:Summary: A list of your corporation's bookmark folders.
:Types: - int $corporationId
        - int $page
:Default: $page = 1

.. code-block:: php

    $esiClient->bookmarks()->listCorporationBookmarkFolders(int $corporationId, int $page = 1);
