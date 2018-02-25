<?php

namespace AGrimes94\Esi\HttpClient\Plugin;

use Http\Client\Common\Plugin;
use Psr\Http\Message\RequestInterface;

/**
 * Prefix path with desired api version to query.
 *
 * @license LGPL-3.0 (https://www.gnu.org/licenses/lgpl-3.0.en.html)
 */
class ApiVersionPlugin implements Plugin
{
    /**
     * @var string
     */
    private $apiVersion;

    /**
     * ApiVersionPlugin constructor.
     *
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

        if (substr($uri->getPath(), 0, 7) !== '/latest') {
            $request = $request->withUri($uri->withPath('/' . $this->apiVersion . $uri->getPath()));
        }

        return $next($request);
    }
}
