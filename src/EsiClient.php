<?php

namespace AGrimes94\Esi;

use AGrimes94\Esi\HttpClient\HttpClientFactory;
use AGrimes94\Esi\HttpClient\Plugin\ApiVersion;
use AGrimes94\Esi\HttpClient\Plugin\DataSource;
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
 * @author Anthony Grimes <contact@anthonygrimes.co.uk>
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

        $this->httpClientFactory->addPlugin(new HeaderDefaultsPlugin([
            'User-Agent' => 'agrimes94-esi (https://github.com/aGrimes94/esi)', ]));

        $this->httpClientFactory->addPlugin(new AddHostPlugin(
                UriFactoryDiscovery::find()
                    ->createUri('https://esi.tech.ccp.is'))
        );

        $this->httpClientFactory->addPlugin(new ApiVersion()); // TODO Allow user to set apiversion

        $this->httpClientFactory->addPlugin(new DataSource()); // TODO Allow user to set datasource
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
        $builder = new HttpClientFactory($httpClient);

        return new self($builder);
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
    public function authenticate($accessToken): self
    {
        $this->httpClientFactory->removePlugin(AuthenticationPlugin::class);
        $this->httpClientFactory->addPlugin(new AuthenticationPlugin(new Bearer($accessToken)));

        return $this;
    }
}
