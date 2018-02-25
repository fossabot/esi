<?php

namespace AGrimes94\Esi\Tests\HttpClient\Plugin;

use AGrimes94\Esi\HttpClient\Plugin\ApiVersionPlugin;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use Http\Client\Promise\HttpFulfilledPromise;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;

class ApiVersionPluginTest extends TestCase
{
    public function testCallNextCallback()
    {
        $request = new Request('GET', '');

        $plugin = new ApiVersionPlugin();

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

    public function testChangingApiVersionInPath()
    {
        $request = new Request('GET', '/test');

        $expected = new Request('GET', '/dev/test');

        $plugin = new ApiVersionPlugin('dev');

        $callback = $this->getMockBuilder(\stdClass::class)
            ->setMethods(['next'])
            ->getMock();

        $callback->expects($this->once())
            ->method('next')
            ->with($expected);

        $plugin->handleRequest($request, [$callback, 'next'], function () {
        });
    }

    public function testNoRequirementToSetApiVersion()
    {
        $request = new Request('GET', '/test');

        $expected = new Request('GET', '/latest/test');

        $plugin = new ApiVersionPlugin();

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
