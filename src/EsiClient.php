<?php

namespace AGrimes94\Esi;

use AGrimes94\Esi\HttpClient\HttpClientFactory;
use AGrimes94\Esi\HttpClient\Plugin\ApiVersionPlugin;
use AGrimes94\Esi\HttpClient\Plugin\DataSourcePlugin;
use AGrimes94\Esi\HttpClient\Plugin\LanguagePlugin;
use Http\Client\Common\HttpMethodsClient;
use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\AuthenticationPlugin;
use Http\Client\Common\Plugin\HeaderDefaultsPlugin;
use Http\Client\HttpClient;
use Http\Discovery\UriFactoryDiscovery;
use Http\Message\Authentication\Bearer;

/**
 * PHP Http Client for ESI (EVE Swagger Interface).
 *
 * @license LGPL-3.0 (https://www.gnu.org/licenses/lgpl-3.0.en.html)
 */
class EsiClient
{
    /**
     * Factory class to construct HttpClient objects.
     *
     * @var HttpClientFactory
     */
    private $httpClientFactory;

    /**
     * Instantiate a new Esi client.
     *
     * @param HttpClientFactory $httpClientFactory
     */
    public function __construct(HttpClientFactory $httpClientFactory = null)
    {
        $this->httpClientFactory = $httpClientFactory ?: new HttpClientFactory();

        $this->httpClientFactory->addPlugin(new LanguagePlugin());

        $this->httpClientFactory->addPlugin(new DataSourcePlugin());

        $this->httpClientFactory->addPlugin(new ApiVersionPlugin());

        $this->httpClientFactory->addPlugin(new HeaderDefaultsPlugin([
            'User-Agent' => 'agrimes94-esi (https://github.com/aGrimes94/esi)', ]));

        $this->httpClientFactory->addPlugin(new AddHostPlugin(
                UriFactoryDiscovery::find()
                    ->createUri('https://esi.tech.ccp.is'))
        );
    }

    /**
     * Create a Esi client.
     *
     * @return EsiClient
     */
    public static function create(): self
    {
        $client = new self();

        return $client;
    }

    /**
     * Create a Esi client using an HttpClient.
     *
     * @param HttpClient $httpClient
     *
     * @return EsiClient
     */
    public static function createWithHttpClient(HttpClient $httpClient): self
    {
        $factory = new HttpClientFactory($httpClient);

        return new self($factory);
    }

    /**
     * Retrieve current HttpClient.
     *
     * @return HttpMethodsClient
     */
    public function getHttpClient(): HttpMethodsClient
    {
        return $this->httpClientFactory->getHttpClient();
    }

    /**
     * Authenticate a given request.
     *
     * @param string $accessToken
     *
     * @return $this
     */
    public function authenticate(string $accessToken): self
    {
        $this->httpClientFactory->removePlugin(AuthenticationPlugin::class);
        $this->httpClientFactory->addPlugin(new AuthenticationPlugin(new Bearer($accessToken)));

        return $this;
    }

    /**
     * Alter data source in request.
     *
     * @param string $dataSource
     *
     * @return $this
     */
    public function dataSource(string $dataSource): self
    {
        $this->httpClientFactory->removePlugin(DataSourcePlugin::class);
        $this->httpClientFactory->addPlugin(new DataSourcePlugin($dataSource));

        return $this;
    }

    /**
     * Alter api version in request.
     *
     * @param string $apiVersion
     *
     * @return $this
     */
    public function apiVersion(string $apiVersion): self
    {
        $this->httpClientFactory->removePlugin(ApiVersionPlugin::class);
        $this->httpClientFactory->addPlugin(new ApiVersionPlugin($apiVersion));

        return $this;
    }

    /**
     * Alter request response language.
     *
     * Possible: 'en-us', 'de', 'fr', 'ja', 'ru', 'zh'
     *
     * @param string $language
     * @return $this
     */
    public function language(string $language): self
    {
        $this->httpClientFactory->removePlugin(LanguagePlugin::class);
        $this->httpClientFactory->addPlugin(new LanguagePlugin($language));

        return $this;
    }

    /**
     * Query Alliance endpoints.
     *
     * @return Api\Alliance
     */
    public function alliance(): Api\Alliance
    {
        return new Api\Alliance($this);
    }

    /**
     * Query Assets endpoints.
     *
     * @return Api\Assets
     */
    public function assets(): Api\Assets
    {
        return new Api\Assets($this);
    }

    /**
     * Query Bookmarks endpoints.
     *
     * @return Api\Bookmarks
     */
    public function bookmarks(): Api\Bookmarks
    {
        return new Api\Bookmarks($this);
    }

    /**
     * Query Calendar endpoints.
     *
     * @return Api\Calendar
     */
    public function calendar(): Api\Calendar
    {
        return new Api\Calendar($this);
    }

    /**
     * Query Character endpoints.
     *
     * @return Api\Character
     */
    public function character(): Api\Character
    {
        return new Api\Character($this);
    }

    /**
     * Query Clones endpoints.
     *
     * @return Api\Clones
     */
    public function clones(): Api\Clones
    {
        return new Api\Clones($this);
    }

    /**
     * Query Contacts endpoints.
     *
     * @return Api\Contacts
     */
    public function contacts(): Api\Contacts
    {
        return new Api\Contacts($this);
    }

    /**
     * Query Contracts endpoints.
     *
     * @return Api\Contracts
     */
    public function contracts(): Api\Contracts
    {
        return new Api\Contracts($this);
    }

    /**
     * Query Corporation endpoints.
     *
     * @return Api\Corporation
     */
    public function corporation(): Api\Corporation
    {
        return new Api\Corporation($this);
    }

    /**
     * Query Dogma endpoints.
     *
     * @return Api\Dogma
     */
    public function dogma(): Api\Dogma
    {
        return new Api\Dogma($this);
    }

    /**
     * Query Faction Warfare endpoints.
     *
     * @return Api\FactionWarfare
     */
    public function factionWarfare(): Api\FactionWarfare
    {
        return new Api\FactionWarfare($this);
    }

    /**
     * Query Fittings endpoints.
     *
     * @return Api\Fittings
     */
    public function fittings(): Api\Fittings
    {
        return new Api\Fittings($this);
    }

    /**
     * Query Fleets endpoints.
     *
     * @return Api\Fleets
     */
    public function fleets(): Api\Fleets
    {
        return new Api\Fleets($this);
    }

    /**
     * Query Incursions endpoints.
     *
     * @return Api\Incursions
     */
    public function incursions(): Api\Incursions
    {
        return new Api\Incursions($this);
    }

    /**
     * Query Industry endpoints.
     *
     * @return Api\Industry
     */
    public function industry(): Api\Industry
    {
        return new Api\Industry($this);
    }

    /**
     * Query Insurance endpoints.
     *
     * @return Api\Insurance
     */
    public function insurance(): Api\Insurance
    {
        return new Api\Insurance($this);
    }

    /**
     * Query Killmails endpoints.
     *
     * @return Api\Killmails
     */
    public function killmails(): Api\Killmails
    {
        return new Api\Killmails($this);
    }

    /**
     * Query Location endpoints.
     *
     * @return Api\Location
     */
    public function location(): Api\Location
    {
        return new Api\Location($this);
    }

    /**
     * Query Loyalty endpoints.
     *
     * @return Api\Loyalty
     */
    public function loyalty(): Api\Loyalty
    {
        return new Api\Loyalty($this);
    }

    /**
     * Query Mail endpoints.
     *
     * @return Api\Mail
     */
    public function mail(): Api\Mail
    {
        return new Api\Mail($this);
    }

    /**
     * Query Market endpoints.
     *
     * @return Api\Market
     */
    public function market(): Api\Market
    {
        return new Api\Market($this);
    }

    /**
     * Query Opportunities endpoints.
     *
     * @return Api\Opportunities
     */
    public function opportunities(): Api\Opportunities
    {
        return new Api\Opportunities($this);
    }

    /**
     * Query Planetary Interaction endpoints.
     *
     * @return Api\PlanetaryInteraction
     */
    public function planetaryInteraction(): Api\PlanetaryInteraction
    {
        return new Api\PlanetaryInteraction($this);
    }

    /**
     * Query Routes endpoints.
     *
     * @return Api\Routes
     */
    public function routes(): Api\Routes
    {
        return new Api\Routes($this);
    }

    /**
     * Query Search endpoints.
     *
     * @return Api\Search
     */
    public function search(): Api\Search
    {
        return new Api\Search($this);
    }

    /**
     * Query Skills endpoints.
     *
     * @return Api\Skills
     */
    public function skills(): Api\Skills
    {
        return new Api\Skills($this);
    }

    /**
     * Query Sovereignty endpoints.
     *
     * @return Api\Sovereignty
     */
    public function sovereignty(): Api\Sovereignty
    {
        return new Api\Sovereignty($this);
    }

    /**
     * Query Status endpoints.
     *
     * @return Api\Status
     */
    public function status(): Api\Status
    {
        return new Api\Status($this);
    }

    /**
     * Query Universe endpoints.
     *
     * @return Api\Universe
     */
    public function universe(): Api\Universe
    {
        return new Api\Universe($this);
    }

    /**
     * Query User Interface endpoints.
     *
     * @return Api\UserInterface
     */
    public function userInterface(): Api\UserInterface
    {
        return new Api\UserInterface($this);
    }

    /**
     * Query Wallet endpoints.
     *
     * @return Api\Wallet
     */
    public function wallet(): Api\Wallet
    {
        return new Api\Wallet($this);
    }

    /**
     * Query Wars endpoints.
     *
     * @return Api\Wars
     */
    public function wars(): Api\Wars
    {
        return new Api\Wars($this);
    }
}
