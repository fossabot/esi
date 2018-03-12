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

