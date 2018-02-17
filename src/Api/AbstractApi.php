<?php

namespace AGrimes94\Esi\Api;

use AGrimes94\Esi\EsiClient;
use AGrimes94\Esi\HttpClient\Util\ResponseMediator;
use AGrimes94\Esi\HttpClient\Util\QueryStringBuilder;
use Http\Message\StreamFactory;
use Http\Discovery\StreamFactoryDiscovery;
use Psr\Http\Message\ResponseInterface;

/**
 * Abstract class for API endpoints.
 *
 * @license LGPL-3.0 (https://www.gnu.org/licenses/lgpl-3.0.en.html)
 */
abstract class AbstractApi
{
    /**
     * @var EsiClient
     */
    protected $esiClient;

    /**
     * @var StreamFactory
     */
    private $streamFactory;

    /**
     * AbstractApi constructor.
     *
     * @param EsiClient $esiClient
     * @param StreamFactory|null $streamFactory
     */
    public function __construct(EsiClient $esiClient, StreamFactory $streamFactory = null)
    {
        $this->esiClient = $esiClient;
        $this->streamFactory = $streamFactory ?: StreamFactoryDiscovery::find();
    }

    /**
     * Perform GET request.
     *
     * @param string $path
     * @param array $parameters
     * @param array $requestHeaders
     *
     * @return mixed
     *
     * @throws \Http\Client\Exception
     */
    public function get($path, array $parameters = [], array $requestHeaders = [])
    {
        return ResponseMediator::getContent($this->getAsResponse($path, $parameters, $requestHeaders));
    }

    /**
     * Performs a GET query and returns the response as a PSR-7 response object.
     *
     * @param string $path
     * @param array $parameters
     * @param array $requestHeaders
     *
     * @return ResponseInterface
     *
     * @throws \Http\Client\Exception
     */
    protected function getAsResponse($path, array $parameters = [], $requestHeaders = [])
    {
        $path = $this->preparePath($path, $parameters);

        return $this->esiClient->getHttpClient()->get($path, $requestHeaders);
    }

    /**
     * Prepare path with query string for given parameters.
     *
     * @param $path
     * @param array $parameters
     *
     * @return string
     */
    private function preparePath($path, array $parameters = [])
    {
        if (count($parameters) > 0) {
            $path .= '?' . QueryStringBuilder::build($parameters);
        }

        return $path;
    }

    /**
     * Encodes a path string.
     *
     * @param string $path
     * @return string
     */
    protected function encodePath($path)
    {
        $path = rawurlencode($path);

        return str_replace('.', '%2E', $path);
    }
}