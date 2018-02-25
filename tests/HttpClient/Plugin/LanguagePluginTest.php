<?php

namespace AGrimes94\Esi\Tests\HttpClient\Plugin;

use AGrimes94\Esi\HttpClient\Plugin\LanguagePlugin;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use Http\Client\Promise\HttpFulfilledPromise;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;

class LanguagePluginTest extends TestCase
{
    public function testCallNextCallback()
    {
        $request = new Request('GET', '');

        $plugin = new LanguagePlugin();

        $promise = new HttpFulfilledPromise(new Response());

        $callback = $this->getMockBuilder(\stdClass::class)
            ->setMethods(['next'])
            ->getMock();

        $callback->expects($this->once())
            ->method('next')
            ->with($this->isInstanceOf(RequestInterface::class))
            ->willReturn($promise);

        $this->assertEquals($promise, $plugin->handleRequest($request, [$callback, 'next'], function () {
        }));
    }

    public function testChangingLanguageInQuery()
    {
        $request = new Request('GET', '/test');

        $expected = new Request('GET', '/test?language=test');

        $plugin = new LanguagePlugin('test');

        $callback = $this->getMockBuilder(\stdClass::class)
            ->setMethods(['next'])
            ->getMock();

        $callback->expects($this->once())
            ->method('next')
            ->with($expected);

        $plugin->handleRequest($request, [$callback, 'next'], function () {
        });
    }
}
