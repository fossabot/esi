<?php

namespace AGrimes94\Esi\Tests\HttpClient\Util;

use AGrimes94\Esi\HttpClient\Util\ResponseMediator;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

class ResponseMediatorTest extends TestCase
{
    public function testGetContent()
    {
        $body = ['foo' => 'bar'];

        $response = new Response(
            200,
            ['Content-Type' => 'application/json'],
            \GuzzleHttp\Psr7\stream_for(json_encode($body))
        );

        $expected = new \stdClass();
        $expected->reasonPhrase = 'OK';
        $expected->statusCode = 200;
        $expected->headers = ['Content-Type' => ['application/json']];
        $expected->body = $body;

        $this->assertEquals($expected, ResponseMediator::getContent($response));
    }
}
