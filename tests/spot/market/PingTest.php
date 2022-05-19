<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;

class PingTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testPing()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/api/v3/ping'))
            ->withMethod('GET')
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->ping();

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
