<?php

namespace AGrimes94\Esi\Api;

/**
 * User Interface Endpoints (https://esi.tech.ccp.is/ui/#/User_Interface).
 *
 * @license LGPL-3.0 (https://www.gnu.org/licenses/lgpl-3.0.en.html)
 */
class UserInterface extends AbstractApi
{
    /**
     * Endpoint: /ui/autopilot/waypoint/.
     *
     * HTTP Method: POST
     *
     * Set a solar system as autopilot waypoint.
     *
     * @param int       $destinationId
     * @param bool|null $addToBeginning
     * @param bool|null $clearOtherWaypoints
     *
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function setAutopilotWaypoint(int $destinationId, bool $addToBeginning = null, bool $clearOtherWaypoints = null)
    {
        $params = [];
        $params['destination_id'] = $destinationId;

        if (!is_null($addToBeginning)) {
            $params['add_to_beginning'] = $addToBeginning;
        }

        if (!is_null($clearOtherWaypoints)) {
            $params['clear_other_waypoints'] = $clearOtherWaypoints;
        }

        $path = $this->preparePath('/ui/autopilot/waypoint/', $params);

        return $this->post($path);
    }

    /**
     * Endpoint: /ui/openwindow/contract/.
     *
     * HTTP Method: POST
     *
     * Open the contract window inside the client.
     *
     * @param int $contractId
     *
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function openContractWindow(int $contractId)
    {
        $params = [];
        $params['contract_id'] = $contractId;

        $path = $this->preparePath('/ui/openwindow/contract/', $params);

        return $this->post($path);
    }

    /**
     * Endpoint: /ui/openwindow/marketdetails/.
     *
     * HTTP Method: POST
     *
     * Open the information window for a character, corporation or alliance inside the client.
     *
     * @param int $targetId
     *
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function openInformationWindow(int $targetId)
    {
        $params = [];
        $params['target_id'] = $targetId;

        $path = $this->preparePath('/ui/openwindow/information/', $params);

        return $this->post($path);
    }

    /**
     * Endpoint: /ui/openwindow/marketdetails/.
     *
     * HTTP Method: POST
     *
     * Open the market details window for a specific typeID inside the client.
     *
     * @param int $typeId
     *
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function openMarketWindow(int $typeId)
    {
        $params = [];
        $params['type_id'] = $typeId;

        $path = $this->preparePath('/ui/openwindow/marketdetails/', $params);

        return $this->post($path);
    }

    /**
     * Endpoint: /ui/openwindow/newmail/.
     *
     * HTTP Method: POST
     *
     * Open the New Mail window, according to settings from the request if applicable.
     *
     * @param array $newMail
     *
     *
     * @throws \Http\Client\Exception
     *
     * @return \stdClass
     */
    public function openNewMailWindow(array $newMail = [])
    {
        return $this->post('/ui/openwindow/newmail/', $newMail);
    }
}
