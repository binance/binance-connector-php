<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;

class TickerTradingDayTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testTickerTradingDay()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/api/v3/ticker/tradingDay'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'symbol' => 'BNBUSDT',
                'recvWindow' => '5000'
            ]))
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->tickerTradingDay([
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
