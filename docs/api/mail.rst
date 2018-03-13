Mail
====

All of the following examples use the following client:

.. code-block:: php

    $esiClient = \AGrimes94\Esi\EsiClient::create()->authenticate('ACCESS_TOKEN');

Get Mail Headers
----------------

:HTTP Method: GET
:Endpoint: /characters/{character_id}/mail/
:Summary: Return the 50 most recent mail headers belonging to the character that match the query criteria. Queries can be filtered by label, and last_mail_id can be used to paginate backwards.
:Types: - int        $characterId
        - array|null $byLabels
        - int|null   $lastMailId
:Default: - array $byLabels = null
            - int $lastMailId = null

.. code-block:: php

    $esiClient->mail()->getMailHeaders(int $characterId, array $byLabels = null, int $lastMailId = null);

Send Mail
---------

:HTTP Method: POST
:Endpoint: /characters/{character_id}/mail/
:Summary: Create and send a new mail.
:Types: - int   $characterId
        - array $mail
:Default: - array $mail = []

.. code-block:: php

    $esiClient->mail()->sendMail(int $characterId, array $mail = []);

Delete Mail
-----------

:HTTP Method: DELETE
:Endpoint: /characters/{character_id}/mail/{mail_id}/
:Summary: Delete a mail.
:Types: - int $characterId
        - int $mailId
:Default: None

.. code-block:: php

    $esiClient->mail()->deleteMail(int $characterId, int $mailId);

Return Mail
-----------

:HTTP Method: GET
:Endpoint: /characters/{character_id}/mail/{mail_id}/
:Summary: Return the contents of an EVE mail.
:Types: - int $characterId
        - int $mailId
:Default: None

.. code-block:: php

    $esiClient->mail()->returnMail(int $characterId, int $mailId);

Update Mail Metadata
--------------------

:HTTP Method: PUT
:Endpoint: /characters/{character_id}/mail/{mail_id}/
:Summary: Update metadata about a mail.
:Types: - int   $characterId
        - int   $mailId
        - array $contents
:Default: - array $contents = []

.. code-block:: php

    $esiClient->mail()->updateMailMetadata(int $characterId, int $mailId, array $contents = []);

Get Labels
----------

:HTTP Method: GET
:Endpoint: /characters/{character_id}/mail/labels/
:Summary: Return a list of the users mail labels, unread counts for each label and a total unread count.
:Types: - int $characterId
:Default: None

.. code-block:: php

    $esiClient->mail()->getLabels(int $characterId);

Create Label
------------

:HTTP Method: POST
:Endpoint: /characters/{character_id}/mail/labels/
:Summary: Create a mail label.
:Types: - int   $characterId
        - array $label
:Default: - array $label = []

.. code-block:: php

    $esiClient->mail()->createLabel(int $characterId, array $label = []);

Delete Label
------------

:HTTP Method: DELETE
:Endpoint: /characters/{character_id}/mail/labels/{label_id}/
:Summary: Delete a mail label.
:Types: - int $characterId
        - int $labelId
:Default: None

.. code-block:: php

    $esiClient->mail()->deleteLabel(int $characterId, int $labelId);

Get Mailing List Subscriptions
------------------------------

:HTTP Method: GET
:Endpoint: /characters/{character_id}/mail/lists/
:Summary: Return all mailing lists that the character is subscribed to.
:Types: - int $characterId
:Default: None

.. code-block:: php

    $esiClient->mail()->getMailingListSubscriptions(int $characterId);
