<?php

namespace AGrimes94\Esi;

use AGrimes94\Esi\HttpClient\HttpClientFactory;
use AGrimes94\Esi\HttpClient\Plugin\ApiVersionPlugin;
use AGrimes94\Esi\HttpClient\Plugin\DataSourcePlugin;
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

    /**
     * Alter data source in request.
     *
     * @param string $dataSource
     *
     * @return $this
     */
    public function dataSource($dataSource): self
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
    public function apiVersion($apiVersion): self
    {
        $this->httpClientFactory->removePlugin(ApiVersionPlugin::class);
        $this->httpClientFactory->addPlugin(new ApiVersionPlugin($apiVersion));

        return $this;
    }
}
