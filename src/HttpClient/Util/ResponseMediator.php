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
     * Parse response object into stdClass for user property retrieval.
     *
     * @param ResponseInterface $responseObj
     *
     * @return \stdClass
     */
    public static function getContent(ResponseInterface $responseObj)
    {
        $response = new \stdClass();
        $response->reasonPhrase = $responseObj->getReasonPhrase();
        $response->statusCode = $responseObj->getStatusCode();
        $response->headers = $responseObj->getHeaders();

        $body = $responseObj->getBody()->__toString();

        if (strpos($responseObj->getHeaderLine('Content-Type'), 'application/json') === 0) {
            $content = json_decode($body, true);

            if (JSON_ERROR_NONE === json_last_error()) {
                $response->body = $content;

                return $response;
            }
        }

        $response->body = $body;

        return $response;
    }
}
