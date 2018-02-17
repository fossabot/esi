<?php

namespace AGrimes94\Esi\HttpClient\Plugin;

use Http\Client\Common\Plugin;
use Psr\Http\Message\RequestInterface;

/**
 * Plugin to designate data source to query against.
 *
 * @license LGPL-3.0 (https://www.gnu.org/licenses/lgpl-3.0.en.html)
 */
class DataSourcePlugin implements Plugin
{
    /**
     * Data source to query against.
     *
     * Possible: tranquility, singularity
     *
     * @var string
     */
    private $dataSource;

    /**
     * DataSourcePlugin constructor.
     *
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

        if ($uri->getQuery() == '') {
            $request = $request->withUri($uri->withQuery($uri->getQuery() . 'datasource=' . $this->dataSource));
        }

        return $next($request);
    }
}
