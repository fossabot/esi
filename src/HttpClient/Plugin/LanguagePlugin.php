<?php

namespace AGrimes94\Esi\HttpClient\Plugin;

use Http\Client\Common\Plugin;
use Psr\Http\Message\RequestInterface;

/**
 * Plugin to designate language for return response.
 *
 * @license LGPL-3.0 (https://www.gnu.org/licenses/lgpl-3.0.en.html)
 */
class LanguagePlugin implements Plugin
{
    /**
     * Language to use in response.
     *
     * Possible: 'en-us', 'de', 'fr', 'ja', 'ru', 'zh'
     *
     * @var string
     */
    private $language;

    /**
     * LanguagePlugin constructor.
     *
     * @param string $language
     */
    public function __construct($language = 'en-us')
    {
        $this->language = $language;
    }

    /**
     * {@inheritdoc}
     */
    public function handleRequest(RequestInterface $request, callable $next, callable $first)
    {
        $uri = $request->getUri();

        if ($uri->getQuery() == '') {
            $request = $request->withUri($uri->withQuery($uri->getQuery() . '&language=' . $this->language));
        }

        return $next($request);
    }
}
