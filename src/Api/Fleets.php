<?php

namespace AGrimes94\Esi\Api;

/**
 * Fleets Endpoints (https://esi.tech.ccp.is/ui/#/Fleets).
 *
 * @license LGPL-3.0 (https://www.gnu.org/licenses/lgpl-3.0.en.html)
 */
class Fleets extends AbstractApi
{
    /**
     * Endpoint: /characters/{character_id}/fleet/
     *
     * HTTP Method: GET
     *
     * Return the fleet ID the character is in, if any.
     *
     * @param int $characterId
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function getCharacterFleetInformation(int $characterId)
    {
        return $this->get('/characters/' . $this->encodePath($characterId) . '/fleet/');
    }

    /**
     * Endpoint: /fleets/{fleet_id}/
     *
     * HTTP Method: GET
     *
     * Return details about a fleet.
     *
     * @param int $fleetId
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function getFleetInformation(int $fleetId)
    {
        return $this->get('/fleets/' . $this->encodePath($fleetId) . '/');
    }

    /**
     * Endpoint: /fleets/{fleet_id}/
     *
     * HTTP Method: PUT
     *
     * Update settings about a fleet.
     *
     * @param int $fleetId
     * @param array $settings
     * @return array|string
     * @throws \Http\Client\Exception
     */
    public function updateSettings(int $fleetId, array $settings = [])
    {
        return $this->put('/fleets/' . $this->encodePath($fleetId) . '/', $settings);
    }

    /**
     * Endpoint: /fleets/{fleet_id}/members/
     *
     * HTTP Method: GET
     *
     * Return information about fleet members.
     *
     * @param int $fleetId
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function getMembers(int $fleetId)
    {
        return $this->get('/fleets/' . $this->encodePath($fleetId) . '/members/');
    }

    /**
     * Endpoint: /fleets/{fleet_id}/members/
     *
     * HTTP Method: POST
     *
     * Invite a character into the fleet.
     *
     * If a character has a CSPA charge set it is not possible
     * to invite them to the fleet using ESI.
     *
     * @param int $fleetId
     * @param array $invite
     * @return array|string
     * @throws \Http\Client\Exception
     */
    public function createInvite(int $fleetId, array $invite = [])
    {
        return $this->post('/fleets/' . $this->encodePath($fleetId) . '/members/', $invite);
    }

    /**
     * Endpoint: /fleets/{fleet_id}/members/{member_id}/
     *
     * HTTP Method: DELETE
     *
     * Kick a fleet member.
     *
     * @param int $fleetId
     * @param int $memberId
     * @return array|string
     * @throws \Http\Client\Exception
     */
    public function kickMember(int $fleetId, int $memberId)
    {
        return $this->delete('/fleets/' . $this->encodePath($fleetId) . '/members/' . $this->encodePath($memberId) . '/');
    }

    /**
     * Endpoint: /fleets/{fleet_id}/members/{member_id}/
     *
     * HTTP Method: PUT
     *
     * Move a fleet member around.
     *
     * @param int $fleetId
     * @param int $memberId
     * @param array $movement
     * @return array|string
     * @throws \Http\Client\Exception
     */
    public function moveMember(int $fleetId, int $memberId, array $movement = [])
    {
        return $this->put('/fleets/' . $this->encodePath($fleetId) . '/members/' . $this->encodePath($memberId) . '/', $movement);
    }

    /**
     * Endpoint: /fleets/{fleet_id}/wings/{wing_id}/squads/
     *
     * HTTP Method: GET
     *
     * Create a new squad in a fleet.
     *
     * @param int $fleetId
     * @param int $wingId
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function createSquad(int $fleetId, int $wingId)
    {
        return $this->post('/fleets/' . $this->encodePath($fleetId) . '/wings/' . $this->encodePath($wingId) . '/squads/');
    }

    /**
     * Endpoint: /fleets/{fleet_id}/squads/{squad_id}/
     *
     * HTTP Method: PUT
     *
     * Rename a fleet squad.
     *
     * @param int $fleetId
     * @param int $squadId
     * @param array $naming
     * @return array|string
     * @throws \Http\Client\Exception
     */
    public function renameSquad(int $fleetId, int $squadId, array $naming = [])
    {
        return $this->put('/fleets/' . $this->encodePath($fleetId) . '/squads/' . $this->encodePath($squadId) . '/', $naming);
    }

    /**
     * Endpoint: /fleets/{fleet_id}/squads/{squad_id}/
     *
     * HTTP Method: DELETE
     *
     * Delete a fleet squad, only empty squads can be deleted.
     *
     * @param int $fleetId
     * @param int $squadId
     * @return array|string
     * @throws \Http\Client\Exception
     */
    public function deleteSquad(int $fleetId, int $squadId)
    {
        return $this->delete('/fleets/' . $this->encodePath($fleetId) . '/squads/' . $this->encodePath($squadId) . '/');
    }

    /**
     * Endpoint: /fleets/{fleet_id}/wings/
     *
     * HTTP Method: GET
     *
     * Return information about wings in a fleet.
     *
     * @param int $fleetId
     * @return mixed
     * @throws \Http\Client\Exception
     */
    public function getWings(int $fleetId)
    {
        return $this->get('/fleets/' . $this->encodePath($fleetId) . '/wings/');
    }

    /**
     * Endpoint: /fleets/{fleet_id}/wings/
     *
     * HTTP Method: POST
     *
     * Create a new wing in a fleet.
     *
     * @param int $fleetId
     * @return array|string
     * @throws \Http\Client\Exception
     */
    public function createWing(int $fleetId)
    {
        return $this->post('/fleets/' . $this->encodePath($fleetId) . '/wings/');
    }

    /**
     * Endpoint: /fleets/{fleet_id}/wings/{wing_id}/
     *
     * HTTP Method: PUT
     *
     * Rename a fleet wing.
     *
     * @param int $fleetId
     * @param int $wingId
     * @param array $naming
     * @return array|string
     * @throws \Http\Client\Exception
     */
    public function renameWing(int $fleetId, int $wingId, array $naming = [])
    {
        return $this->put('/fleets/' . $this->encodePath($fleetId) . '/wings/' . $this->encodePath($wingId) . '/', $naming);
    }

    /**
     * Endpoint: /fleets/{fleet_id}/wings/{wing_id}/
     *
     * HTTP Method: DELETE
     *
     * Delete a fleet wing, only empty wings can be deleted.
     *
     * The wing may contain squads, but the squads must be empty
     *
     * @param int $fleetId
     * @param int $wingId
     * @return array|string
     * @throws \Http\Client\Exception
     */
    public function deleteWing(int $fleetId, int $wingId)
    {
        return $this->delete('/fleets/' . $this->encodePath($fleetId) . '/wings/' . $this->encodePath($wingId) . '/');
    }
}