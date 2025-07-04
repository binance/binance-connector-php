<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;

class MarginOpenOcoOrderTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testMarginOpenOcoOrder()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/margin/openOrderList'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'isIsolated' => 'TRUE',
                'symbol' => 'BNBUSDT',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->marginOpenOcoOrder([
            'isIsolated' => 'TRUE',
            'symbol' => 'BNBUSDT',
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
