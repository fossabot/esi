<?php

namespace AGrimes94\Esi\HttpClient\Util;

use Psr\Http\Message\ResponseInterface;

/**
 * Utilities to parse response headers and content.
 *
 * @license LGPL-3.0 (https://www.gnu.org/licenses/lgpl-3.0.en.html)
 */
class ResponseMediator
{
    /**
     * Return the response body as a string or json array if content type is application/json.
     *.
     * @param ResponseInterface $response
     *
     * @return array|string
     */
    public static function getContent(ResponseInterface $response)
    {
        $body = $response->getBody()->__toString();
        if (strpos($response->getHeaderLine('Content-Type'), 'application/json') === 0) {
            $content = json_decode($body, true);
            if (JSON_ERROR_NONE === json_last_error()) {
                return $content;
            }
        }

        return $body;
    }
}
