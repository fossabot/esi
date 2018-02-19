<?php

namespace AGrimes94\Esi\Tests;

use PHPUnit\Framework\TestCase;

class ESIVersionTest extends TestCase
{
    private const ESI_VERSION = '0.7.5';

    private const ESI_PATHS = [
        '/alliances/{alliance_id}/',
        '/alliances/{alliance_id}/corporations/',
        '/alliances/names/',
        '/alliances/{alliance_id}/icons/',
        '/alliances/',
        '/characters/{character_id}/assets/',
        '/corporations/{corporation_id}/assets/',
        '/characters/{character_id}/assets/names/',
        '/characters/{character_id}/assets/locations/',
        '/corporations/{corporation_id}/assets/names/',
        '/corporations/{corporation_id}/assets/locations/',
        '/characters/{character_id}/bookmarks/',
        '/characters/{character_id}/bookmarks/folders/',
        '/corporations/{corporation_id}/bookmarks/',
        '/corporations/{corporation_id}/bookmarks/folders/',
        '/characters/{character_id}/calendar/',
        '/characters/{character_id}/calendar/{event_id}/',
        '/characters/{character_id}/calendar/{event_id}/attendees/',
        '/characters/{character_id}/stats/',
        '/characters/{character_id}/',
        '/characters/affiliation/',
        '/characters/{character_id}/cspa/',
        '/characters/names/',
        '/characters/{character_id}/portrait/',
        '/characters/{character_id}/corporationhistory/',
        '/characters/{character_id}/chat_channels/',
        '/characters/{character_id}/medals/',
        '/characters/{character_id}/standings/',
        '/characters/{character_id}/agents_research/',
        '/characters/{character_id}/blueprints/',
        '/characters/{character_id}/fatigue/',
        '/characters/{character_id}/notifications/contacts/',
        '/characters/{character_id}/notifications/',
        '/characters/{character_id}/roles/',
        '/characters/{character_id}/titles/',
        '/characters/{character_id}/clones/',
        '/characters/{character_id}/implants/',
        '/characters/{character_id}/contacts/',
        '/corporations/{corporation_id}/contacts/',
        '/alliances/{alliance_id}/contacts/',
        '/characters/{character_id}/contacts/labels/',
        '/characters/{character_id}/contracts/',
        '/characters/{character_id}/contacts/labels/',
        '/characters/{character_id}/contracts/',
        '/characters/{character_id}/contracts/{contract_id}/items/',
        '/characters/{character_id}/contracts/{contract_id}/bids/',
        '/corporations/{corporation_id}/contracts/',
        '/corporations/{corporation_id}/contracts/{contract_id}/items/',
        '/corporations/{corporation_id}/contracts/{contract_id}/bids/',
        '/corporations/{corporation_id}/',
        '/corporations/{corporation_id}/alliancehistory/',
        '/corporations/names/',
        '/corporations/{corporation_id}/members/',
        '/corporations/{corporation_id}/roles/',
        '/corporations/{corporation_id}/roles/history/',
        '/corporations/{corporation_id}/icons/',
        '/corporations/npccorps/',
        '/corporations/{corporation_id}/structures/',
        '/corporations/{corporation_id}/membertracking/',
        '/corporations/{corporation_id}/divisions/',
        '/corporations/{corporation_id}/members/limit/',
        '/corporations/{corporation_id}/titles/',
        '/corporations/{corporation_id}/members/titles/',
        '/corporations/{corporation_id}/blueprints/',
        '/corporations/{corporation_id}/standings/',
        '/corporations/{corporation_id}/starbases/',
        '/corporations/{corporation_id}/starbases/{starbase_id}/',
        '/corporations/{corporation_id}/containers/logs/',
        '/corporations/{corporation_id}/facilities/',
        '/corporations/{corporation_id}/medals/',
        '/corporations/{corporation_id}/medals/issued/',
        '/corporations/{corporation_id}/outposts/',
        '/corporations/{corporation_id}/outposts/{outpost_id}/',
        '/corporations/{corporation_id}/shareholders/',
        '/dogma/attributes/',
        '/dogma/attributes/{attribute_id}/',
        '/dogma/effects/',
        '/dogma/effects/{effect_id}/',
        '/fw/wars/',
        '/fw/stats/',
        '/fw/systems/',
        '/fw/leaderboards/',
        '/fw/leaderboards/characters/',
        '/fw/leaderboards/corporations/',
        '/corporations/{corporation_id}/fw/stats/',
        '/characters/{character_id}/fw/stats/',
        '/characters/{character_id}/fittings/{fitting_id}/',
        '/characters/{character_id}/fittings/',
        '/fleets/{fleet_id}/',
        '/characters/{character_id}/fleet/',
        '/fleets/{fleet_id}/members/',
        '/fleets/{fleet_id}/members/{member_id}/',
        '/fleets/{fleet_id}/wings/',
        '/fleets/{fleet_id}/wings/{wing_id}/',
        '/fleets/{fleet_id}/wings/{wing_id}/squads/',
        '/fleets/{fleet_id}/squads/{squad_id}/',
        '/incursions/',
        '/industry/facilities/',
        '/industry/systems/',
        '/characters/{character_id}/industry/jobs/',
        '/characters/{character_id}/mining/',
        '/corporation/{corporation_id}/mining/observers/',
        '/corporation/{corporation_id}/mining/observers/{observer_id}/',
        '/corporations/{corporation_id}/industry/jobs/',
        '/corporation/{corporation_id}/mining/extractions/',
        '/insurance/prices/',
        '/killmails/{killmail_id}/{killmail_hash}/',
        '/characters/{character_id}/killmails/recent/',
        '/corporations/{corporation_id}/killmails/recent/',
        '/characters/{character_id}/location/',
        '/characters/{character_id}/ship/',
        '/characters/{character_id}/online/',
        '/loyalty/stores/{corporation_id}/offers/',
        '/characters/{character_id}/loyalty/points/',
        '/characters/{character_id}/mail/',
        '/characters/{character_id}/mail/labels/',
        '/characters/{character_id}/mail/labels/{label_id}/',
        '/characters/{character_id}/mail/lists/',
        '/characters/{character_id}/mail/{mail_id}/',
        '/markets/prices/',
        '/markets/{region_id}/orders/',
        '/markets/{region_id}/history/',
        '/markets/structures/{structure_id}/',
        '/markets/groups/',
        '/markets/groups/{market_group_id}/',
        '/characters/{character_id}/orders/',
        '/characters/{character_id}/orders/history/',
        '/markets/{region_id}/types/',
        '/corporations/{corporation_id}/orders/',
        '/corporations/{corporation_id}/orders/history/',
        '/opportunities/groups/',
        '/opportunities/groups/{group_id}/',
        '/opportunities/tasks/',
        '/opportunities/tasks/{task_id}/',
        '/characters/{character_id}/opportunities/',
        '/characters/{character_id}/planets/',
        '/characters/{character_id}/planets/{planet_id}/',
        '/universe/schematics/{schematic_id}/',
        '/corporations/{corporation_id}/customs_offices/',
        '/route/{origin}/{destination}/',
        '/characters/{character_id}/search/',
        '/search/',
        '/characters/{character_id}/skillqueue/',
        '/characters/{character_id}/skills/',
        '/characters/{character_id}/attributes/',
        '/sovereignty/structures/',
        '/sovereignty/campaigns/',
        '/sovereignty/map/',
        '/status/',
        '/universe/ids/',
        '/universe/planets/{planet_id}/',
        '/universe/stations/{station_id}/',
        '/universe/structures/{structure_id}/',
        '/universe/systems/{system_id}/',
        '/universe/systems/',
        '/universe/types/{type_id}/',
        '/universe/types/',
        '/universe/groups/',
        '/universe/groups/{group_id}/',
        '/universe/categories/',
        '/universe/categories/{category_id}/',
        '/universe/names/',
        '/universe/structures/',
        '/universe/races/',
        '/universe/factions/',
        '/universe/bloodlines/',
        '/universe/regions/',
        '/universe/regions/{region_id}/',
        '/universe/constellations/',
        '/universe/constellations/{constellation_id}/',
        '/universe/moons/{moon_id}/',
        '/universe/stargates/{stargate_id}/',
        '/universe/graphics/',
        '/universe/graphics/{graphic_id}/',
        '/universe/system_jumps/',
        '/universe/system_kills/',
        '/universe/stars/{star_id}/',
        '/universe/ancestries/',
        '/ui/openwindow/marketdetails/',
        '/ui/openwindow/contract/',
        '/ui/openwindow/information/',
        '/ui/autopilot/waypoint/',
        '/ui/openwindow/newmail/',
        '/characters/{character_id}/wallet/',
        '/characters/{character_id}/wallet/journal/',
        '/characters/{character_id}/wallet/transactions/',
        '/corporations/{corporation_id}/wallets/',
        '/corporations/{corporation_id}/wallets/{division}/journal/',
        '/corporations/{corporation_id}/wallets/{division}/transactions/',
        '/wars/',
        '/wars/{war_id}/',
        '/wars/{war_id}/killmails/',
    ];

    private $json;

    public function setUp()
    {
        $curl = curl_init();

        curl_setopt_array($curl,
            array(
                CURLOPT_URL => 'https://esi.tech.ccp.is/latest/swagger.json?datasource=tranquility',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_USERAGENT => 'agrimes94-esi (https://github.com/aGrimes94/esi)',
            )
        );

        $this->json = json_decode(curl_exec($curl), true);

        curl_close($curl);
    }

    public function testEsiVersion()
    {
        $this->assertEquals(self::ESI_VERSION, $this->json['info']['version']);
    }

    public function testEsiPaths()
    {
        foreach ($this->json['paths'] as $key => $value) {
            $this->assertContains($key, self::ESI_PATHS);
        }
    }
}