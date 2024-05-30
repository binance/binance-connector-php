<?php

namespace Binance\Tests;

use Binance\Spot;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use PHPUnit\Framework\TestCase;

abstract class BaseTestCase extends TestCase
{
    protected $data;
    protected $httpMock;
    protected $spotClient;

    protected function setUp(): void
    {
        $this->httpMock = new \Aeris\GuzzleHttpMock\Mock();
        $this->data = ['key' => 'value', 'key2' => 'value'];
        $guzzleClient = new \GuzzleHttp\Client([
            'handler' => $this->httpMock->getHandlerStackWithMiddleware()
        ]);
        $this->spotClient = new Spot([
            'key' => 'the_key',
            'secret' => 'the_secret',
            'httpClient' => $guzzleClient
        ]);
    }

    /**
     * @return \GuzzleHttp\Client
     */
    protected function getMockClient($status, $response, $headers = array())
    {
        $mock = new MockHandler([
            new Response($status, $headers, is_array($response) ? json_encode($response) : $response)
        ]);
        $handlerStack = HandlerStack::create($mock);
        $client = new \GuzzleHttp\Client(['handler' => $handlerStack]);
        return $client;
    }

    public function tearDown(): void
    {
        $this->httpMock->verify();
    }
}
