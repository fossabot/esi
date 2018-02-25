<?php

namespace AGrimes94\Esi\HttpClient\Util;

use AGrimes94\Esi\Exception\ForbiddenResourceException;
use AGrimes94\Esi\Exception\ResourceNotFoundException;
use AGrimes94\Esi\Exception\ServerErrorException;
use AGrimes94\Esi\Exception\TooManyRequestsException;
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
     * @throws ForbiddenResourceException
     * @throws ResourceNotFoundException
     * @throws ServerErrorException
     * @throws TooManyRequestsException
     * @throws \Exception
     *
     * @return \stdClass
     */
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
                $exception = json_decode($responseObj->getBody()->__toString(), true);

                throw new ForbiddenResourceException($exception['error']);
            case 404:
                $exception = json_decode($responseObj->getBody()->__toString(), true);

                throw new ResourceNotFoundException($exception['error']);
            case 409:
                $exception = json_decode($responseObj->getBody()->__toString(), true);

                throw new TooManyRequestsException($exception['error']);
            case 500:
                $exception = json_decode($responseObj->getBody()->__toString(), true);

                throw new ServerErrorException($exception['error']);
            default:
                $exception = json_decode($responseObj->getBody()->__toString(), true);

                throw new \Exception($exception['error']);
        }
    }
}
