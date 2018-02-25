<?php

namespace AGrimes94\Esi\Tests\HttpClient\Plugin;

use AGrimes94\Esi\HttpClient\Plugin\DataSourcePlugin;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use Http\Client\Promise\HttpFulfilledPromise;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;

class DataSourcePluginTest extends TestCase
{
    public function testCallNextCallback()
    {
        $request = new Request('GET', '');

        $plugin = new DataSourcePlugin();

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

    public function testChangingApiVersionInQuery()
    {
        $request = new Request('GET', '/test');

        $expected = new Request('GET', '/test?datasource=test');

        $plugin = new DataSourcePlugin('test');

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
