<?php

namespace AGrimes94\Esi\Api;

/**
 * Calendar Endpoints (https://esi.tech.ccp.is/ui/#/Calendar).
 *
 * @license LGPL-3.0 (https://www.gnu.org/licenses/lgpl-3.0.en.html)
 */
class Calendar extends AbstractApi
{
    /**
     * Endpoint: /characters/{character_id}/calendar/
     *
     * HTTP Method: GET
     *
     * Get 50 event summaries from the calendar.
     * If no from_event ID is given, the resource will return the next 50 chronological event summaries from now.
     *
     * If a from_event ID is specified, it will return the next 50 chronological
     * event summaries from after that event.
     *
     * @param int      $characterId
     * @param int|null $fromEvent
     *
     * @throws \Http\Client\Exception
     *
     * @return mixed
     */
    public function listEventSummaries(int $characterId, int $fromEvent = null)
    {
        $params = [];
        if (!is_null($fromEvent)) {
            $params['from_event'] = $fromEvent;
        }

        return $this->get('/characters/' . $this->encodePath($characterId) . '/calendar/', $params);
    }

    /**
     * Endpoint: /characters/{character_id}/calendar/{event_id}/
     *
     * HTTP Method: GET
     *
     * Get all the information for a specific event.
     *
     * @param int $characterId
     * @param int $eventId
     *
     * @throws \Http\Client\Exception
     *
     * @return mixed
     */
    public function getEvent(int $characterId, int $eventId)
    {
        return $this->get('/characters/' . $this->encodePath($characterId) . '/calendar/' . $this->encodePath($eventId) . '/');
    }

    /**
     * Endpoint: /characters/{character_id}/calendar/{event_id}/
     *
     * HTTP Method: PUT
     *
     * Set your response status to an event.
     *
     * @param int   $characterId
     * @param int   $eventId
     * @param array $response    ['response' => 'accepted', 'declined', 'tentative'].
     *
     * @throws \Http\Client\Exception
     *
     * @return array|string
     */
    public function respondToEvent(int $characterId, int $eventId, array $response = ['response' => 'accepted'])
    {
        return $this->put('/characters/' . $this->encodePath($characterId) . '/calendar/' . $this->encodePath($eventId) . '/', $response);
    }

    /**
     * Endpoint: /characters/{character_id}/calendar/{event_id}/attendees/
     *
     * HTTP Method: GET
     *
     * Get all invited attendees for a given event.
     *
     * @param int $characterId
     * @param int $eventId
     *
     * @throws \Http\Client\Exception
     *
     * @return mixed
     */
    public function getEventAttendees(int $characterId, int $eventId)
    {
        return $this->get('/characters/' . $this->encodePath($characterId) . '/calendar/' . $this->encodePath($eventId) . '/attendees/');
    }
}
