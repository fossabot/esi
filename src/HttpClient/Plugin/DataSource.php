<?php

namespace AGrimes94\Esi\HttpClient\Plugin;

use Http\Client\Common\Plugin;
use Psr\Http\Message\RequestInterface;

/**
 * Designate data source to use.
 *
 * @author Anthony Grimes <contact@anthonygrimes.co.uk>
 */
class DataSource implements Plugin
{
    /**
     * @var string
     */
    private $dataSource;

    /**
     * @param string $dataSource
     */
    public function __construct($dataSource = 'tranquility')
    {
        $this->dataSource = $dataSource;
    }

    /**
     * {@inheritdoc}
     */
    public function handleRequest(RequestInterface $request, callable $next, callable $first)
    {
        $uri = $request->getUri();

        if ($uri->getQuery() !== 'datasource=tranquility') {
            $request = $request->withUri($uri->withQuery('datasource=' . $this->dataSource));
        }

        return $next($request);
    }
}
