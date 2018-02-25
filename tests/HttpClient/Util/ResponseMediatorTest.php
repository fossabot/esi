<?php

namespace AGrimes94\Esi\Tests\HttpClient\Util;

use PHPUnit\Framework\TestCase;
use AGrimes94\Esi\HttpClient\Util\ResponseMediator;
use GuzzleHttp\Psr7\Response;
use Http\Mock\Client;
use AGrimes94\Esi\Exception\ForbiddenResourceException;
use AGrimes94\Esi\Exception\ResourceNotFoundException;
use AGrimes94\Esi\Exception\TooManyRequestsException;
use AGrimes94\Esi\Exception\ServerErrorException;

class ResponseMediatorTest extends TestCase
{
    /**
     * Ensure retrieved content is of stdClass and structured correctly.
     *
     * @throws \AGrimes94\Esi\Exception\ForbiddenResourceException
     * @throws \AGrimes94\Esi\Exception\ResourceNotFoundException
     * @throws \AGrimes94\Esi\Exception\ServerErrorException
     * @throws \AGrimes94\Esi\Exception\TooManyRequestsException
     * @throws \Exception
     */
    public function testGetContent()
    {
        $body = array('foo' => 'bar');

        $response = new Response(
            200,
            array('Content-Type' => 'application/json'),
            \GuzzleHttp\Psr7\stream_for(json_encode($body))
        );

        $expected = new \stdClass();
        $expected->reasonPhrase = 'OK';
        $expected->statusCode = 200;
        $expected->headers = ['Content-Type' => ['application/json']];
        $expected->body = $body;

        $this->assertEquals($expected, ResponseMediator::getContent($response));
    }

    public function testForbiddenResourceExceptionThrows()
    {
        $this->expectException(ForbiddenResourceException::class);

        $client = new Client();

        $exception = new ForbiddenResourceException('');
        $client->addException($exception);

        $client->sendRequest($this->createMock('Psr\Http\Message\RequestInterface'));
    }

    public function testResourceNotFoundExceptionThrows()
    {
        $this->expectException(ResourceNotFoundException::class);

        $client = new Client();

        $exception = new ResourceNotFoundException('');
        $client->addException($exception);

        $client->sendRequest($this->createMock('Psr\Http\Message\RequestInterface'));
    }

    public function testServerErrorExceptionThrows()
    {
        $this->expectException(ServerErrorException::class);

        $client = new Client();

        $exception = new ServerErrorException('');
        $client->addException($exception);

        $client->sendRequest($this->createMock('Psr\Http\Message\RequestInterface'));
    }

    public function testTooManyRequestsExceptionThrows()
    {
        $this->expectException(TooManyRequestsException::class);

        $client = new Client();

        $exception = new TooManyRequestsException('');
        $client->addException($exception);

        $client->sendRequest($this->createMock('Psr\Http\Message\RequestInterface'));
    }
}