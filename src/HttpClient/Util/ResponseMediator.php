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
    public static function getContent(ResponseInterface $responseObj)
    {
        $httpResponseCode = $responseObj->getStatusCode();

        switch ($httpResponseCode) {
            case 200:

                $response = new \stdClass();
                $response->reasonPhrase = $responseObj->getReasonPhrase();
                $response->statusCode = $httpResponseCode;
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

            case 403:
                // TODO Add forbidden resource exception

            case 404:
                // TODO Add resource not found exception

            case 409:
                // TODO Add too many requests exception

            case 500:
                // TODO Add server error exception

            default:
                // TODO Add default response exception

        }
    }
}
