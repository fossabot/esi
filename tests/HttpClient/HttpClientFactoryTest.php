<?php

namespace AGrimes94\Esi\Tests\HttpClient;

use PHPUnit\Framework\TestCase;
use AGrimes94\Esi\HttpClient\HttpClientFactory;
use Http\Client\Common\Plugin;
use Http\Client\Common\HttpMethodsClient;
use Http\Client\HttpClient;
use Http\Message\RequestFactory;
use Http\Message\StreamFactory;

class HttpClientFactoryTest extends TestCase
{
    /**
     * @var HttpClientFactory
     */
    private $esiClientFactory;

    /**
     * This method is called before each test.
     *
     * Create Factory class object with mock params.
     *
     * @throws \ReflectionException
     */
    public function setUp()
    {
        $this->esiClientFactory = new HttpClientFactory(
            $this->createMock(HttpClient::class),
            $this->createMock(RequestFactory::class),
            $this->createMock(StreamFactory::class)
        );
    }

    /**
     * Ensure that when client is modified by adding plugin that it is invalidated.
     *
     * @throws \ReflectionException
     */
    public function testAddPluginShouldInvalidateHttpClient()
    {
        $client = $this->esiClientFactory->getHttpClient();
        $this->esiClientFactory->addPlugin($this->createMock(Plugin::class));
        $this->assertNotSame($client, $this->esiClientFactory->getHttpClient());
    }

    /**
     * Ensure that when client is modified by removing plugin that it is invalidated.
     *
     * @throws \ReflectionException
     */
    public function testRemovePluginShouldInvalidateHttpClient()
    {
        $this->esiClientFactory->addPlugin($this->createMock(Plugin::class));
        $client = $this->esiClientFactory->getHttpClient();
        $this->esiClientFactory->removePlugin(Plugin::class);
        $this->assertNotSame($client, $this->esiClientFactory->getHttpClient());
    }

    /**
     * Ensure that returned httpClient is of HttpMethodsClient class.
     */
    public function testHttpClientShouldBeAnHttpMethodsClient()
    {
        $this->assertInstanceOf(HttpMethodsClient::class, $this->esiClientFactory->getHttpClient());
    }
}