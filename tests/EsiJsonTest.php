<?php

namespace AGrimes94\Esi\Tests;

use PHPUnit\Framework\TestCase;

class EsiJsonTest extends TestCase
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

    private const ESI_SCOPES = [
        'esi-alliances.read_contacts.v1',
        'esi-assets.read_assets.v1',
        'esi-assets.read_corporation_assets.v1',
        'esi-bookmarks.read_character_bookmarks.v1',
        'esi-bookmarks.read_corporation_bookmarks.v1',
        'esi-calendar.read_calendar_events.v1',
        'esi-calendar.respond_calendar_events.v1',
        'esi-characters.read_agents_research.v1',
        'esi-characters.read_blueprints.v1',
        'esi-characters.read_chat_channels.v1',
        'esi-characters.read_contacts.v1',
        'esi-characters.read_corporation_roles.v1',
        'esi-characters.read_fatigue.v1',
        'esi-characters.read_fw_stats.v1',
        'esi-characters.read_loyalty.v1',
        'esi-characters.read_medals.v1',
        'esi-characters.read_notifications.v1',
        'esi-characters.read_opportunities.v1',
        'esi-characters.read_standings.v1',
        'esi-characters.read_titles.v1',
        'esi-characters.write_contacts.v1',
        'esi-characterstats.read.v1',
        'esi-clones.read_clones.v1',
        'esi-clones.read_implants.v1',
        'esi-contracts.read_character_contracts.v1',
        'esi-contracts.read_corporation_contracts.v1',
        'esi-corporations.read_blueprints.v1',
        'esi-corporations.read_contacts.v1',
        'esi-corporations.read_container_logs.v1',
        'esi-corporations.read_corporation_membership.v1',
        'esi-corporations.read_divisions.v1',
        'esi-corporations.read_facilities.v1',
        'esi-corporations.read_fw_stats.v1',
        'esi-corporations.read_medals.v1',
        'esi-corporations.read_outposts.v1',
        'esi-corporations.read_standings.v1',
        'esi-corporations.read_starbases.v1',
        'esi-corporations.read_structures.v1',
        'esi-corporations.read_titles.v1',
        'esi-corporations.track_members.v1',
        'esi-fittings.read_fittings.v1',
        'esi-fittings.write_fittings.v1',
        'esi-fleets.read_fleet.v1',
        'esi-fleets.write_fleet.v1',
        'esi-industry.read_character_jobs.v1',
        'esi-industry.read_character_mining.v1',
        'esi-industry.read_corporation_jobs.v1',
        'esi-industry.read_corporation_mining.v1',
        'esi-killmails.read_corporation_killmails.v1',
        'esi-killmails.read_killmails.v1',
        'esi-location.read_location.v1',
        'esi-location.read_online.v1',
        'esi-location.read_ship_type.v1',
        'esi-mail.organize_mail.v1',
        'esi-mail.read_mail.v1',
        'esi-mail.send_mail.v1',
        'esi-markets.read_character_orders.v1',
        'esi-markets.read_corporation_orders.v1',
        'esi-markets.structure_markets.v1',
        'esi-planets.manage_planets.v1',
        'esi-planets.read_customs_offices.v1',
        'esi-search.search_structures.v1',
        'esi-skills.read_skillqueue.v1',
        'esi-skills.read_skills.v1',
        'esi-ui.open_window.v1',
        'esi-ui.write_waypoint.v1',
        'esi-universe.read_structures.v1',
        'esi-wallet.read_character_wallet.v1',
        'esi-wallet.read_corporation_wallets.v1',
    ];

    private $json;

    /**
     * This method is called before each test.
     *
     * Retrieve the latest version of swagger.json, the reference implementation of ESI and
     * decode the json string into a comparable array structure.
     */
    public function setUp()
    {
        $curl = curl_init();

        curl_setopt_array($curl,
            [
                CURLOPT_URL            => 'https://esi.evetech.net/latest/swagger.json?datasource=tranquility',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_USERAGENT      => 'agrimes94-esi (https://github.com/aGrimes94/esi)',
            ]
        );

        $this->json = json_decode(curl_exec($curl), true);

        curl_close($curl);
    }

    /**
     * This method tests that the retrieved latest version of the json swagger reference for esi
     * has the same version as the one currently being developed for. I.e. ESI hasn't been incremented/changed.
     */
    public function testEsiVersionMatches()
    {
        $this->assertEquals(self::ESI_VERSION, $this->json['info']['version']);
    }

    /**
     * This method tests that the retrieved latest version of the json swagger reference for esi
     * has the same paths as the one currently being developed for. I.e. ESI hasn't been incremented/changed.
     */
    public function testEsiPathsForEquality()
    {
        $paths = [];
        foreach ($this->json['paths'] as $key => $value) {
            array_push($paths, $key);
        }

        $this->assertEquals(self::ESI_PATHS, $paths, $message = '', $delta = 0.0, $maxDepth = 10, $canonicalize = true);
    }

    /**
     * This method tests that the retrieved latest version of the json swagger reference for esi
     * has the same scopes as the one currently being developed for. I.e. ESI hasn't been incremented/changed.
     */
    public function testEsiScopesForEquality()
    {
        $scopes = [];
        foreach ($this->json['securityDefinitions']['evesso']['scopes'] as $key => $value) {
            array_push($scopes, $key);
        }

        $this->assertEquals(self::ESI_SCOPES, $scopes, $message = '', $delta = 0.0, $maxDepth = 10, $canonicalize = true);
    }
}
