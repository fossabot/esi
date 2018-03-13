Calendar
========

All of the following examples use the following client:

.. code-block:: php

    $esiClient = \AGrimes94\Esi\EsiClient::create()->authenticate('ACCESS_TOKEN');

List Event Summaries
--------------------

:HTTP Method: GET
:Endpoint: /characters/{character_id}/calendar/
:Summary: Get 50 event summaries from the calendar. If no from_event ID is given, the resource will return the next 50 chronological event summaries from now.
:Types: - int      $characterId
        - int|null $fromEvent
:Default: - int $fromEvent = null

.. code-block:: php

    $esiClient->calendar()->listEventSummaries(int $characterId, int $fromEvent = null);

Get Event
---------

:HTTP Method: GET
:Endpoint: /characters/{character_id}/calendar/{event_id}/
:Summary: Get all the information for a specific event.
:Types: - int $characterId
        - int $eventId
:Default: None

.. code-block:: php

    $esiClient->calendar()->getEvent(int $characterId, int $eventId);

Respond to Event
----------------

:HTTP Method: PUT
:Endpoint: /characters/{character_id}/calendar/{event_id}/
:Summary: Set your response status to an event.
:Types: - int   $characterId
        - int   $eventId
        - array $response
:Default: - array $response = ['response' => 'accepted']

.. code-block:: php

    $esiClient->calendar()->respondToEvent(int $characterId, int $eventId, array $response = ['response' => 'accepted']);

Get Event Attendees
-------------------

:HTTP Method: GET
:Endpoint: /characters/{character_id}/calendar/{event_id}/attendees/
:Summary: Set your response status to an event.
:Types: - int $characterId
        - int $eventId
:Default: None

.. code-block:: php

    $esiClient->calendar()->getEventAttendees(int $characterId, int $eventId);
