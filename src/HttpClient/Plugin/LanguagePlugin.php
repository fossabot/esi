<?php

namespace AGrimes94\Esi\HttpClient\Plugin;

use AGrimes94\Esi\HttpClient\Util\QueryStringBuilder;
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

        if (null !== $uri->getQuery()) {
            $params = [
                'language' => $this->language,
            ];

            parse_str($uri->getQuery(), $query);

            $params = array_merge($query, $params);

            $request = $request->withUri($uri->withQuery(QueryStringBuilder::build($params)));
        }

        return $next($request);
    }
}
