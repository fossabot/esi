<?php

namespace AGrimes94\Esi\HttpClient\Util;

use Psr\Http\Message\ResponseInterface;

/**
 * Utilities to parse response headers and content.
 *
 * @license LGPL-3.0 (https://www.gnu.org/licenses/lgpl-3.0.en.html)
 */
final class ResponseMediator
{
    /**
     * Return the response body as a string or json array if content type is application/json.
     *
     * If endpoint is paginated prepend array with page count array of structure:
     *
     *      ['pages' => 10, ]
     *
     * Can then be accessed as [0] index element in return array.
     *
     * @param ResponseInterface $response
     *
     * @return array|string
     */
    public static function getContent(ResponseInterface $response)
    {
        // TODO Check for error limit i.e. if error at 599 or 600, throw exception at 600, check response code?
        $body = $response->getBody()->__toString();

        if (strpos($response->getHeaderLine('Content-Type'), 'application/json') === 0) {
            $content = json_decode($body, true);

            if (JSON_ERROR_NONE === json_last_error()) {
                if ($response->hasHeader('X-Pages')) {
                    array_unshift($content, [
                            'pages' => $response->getHeader('X-Pages')[0], // TODO Do not return if null, throw exception
                        ]
                    );
                }

                return $content;
            }
        }

        return $body;
    }
}
