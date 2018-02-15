<?php

namespace AGrimes94\Esi\HttpClient\Plugin;

use Http\Client\Common\Plugin;
use Psr\Http\Message\RequestInterface;

/**
 * Prefix path with desired api version to query.
 *
 * @author Anthony Grimes <contact@anthonygrimes.co.uk>
 */
class ApiVersion implements Plugin
{
    /**
     * @var string
     */
    private $apiVersion;

    /**
     * @param string $apiVersion
     */
    public function __construct($apiVersion = 'latest')
    {
        $this->apiVersion = $apiVersion;
    }

    /**
     * {@inheritdoc}
     */
    public function handleRequest(RequestInterface $request, callable $next, callable $first)
    {
        $uri = $request->getUri();

        if (substr($uri->getPath(), 0, 8) !== '/latest/') {
            $request = $request->withUri($uri->withPath($this->apiVersion . $uri->getPath()));
        }

        return $next($request);
    }
}
