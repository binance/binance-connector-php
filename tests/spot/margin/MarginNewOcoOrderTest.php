<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class MarginNewOcoOrderTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testMarginNewOcoOrderThrowsExceptionWithoutSymbol()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->marginNewOcoOrder('', 'SELL', 0.1, 400.15, 390.3);
    }

    public function testMarginNewOcoOrderThrowsExceptionWithoutSide()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->marginNewOcoOrder('BNBUSDT', '', 0.1, 400.15, 390.3);
    }

    public function testMarginNewOcoOrder()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/margin/order/oco'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'symbol' => 'BNBUSDT',
                'side' => 'SELL',
                'quantity' => '0.1',
                'price' => '400.15',
                'stopPrice' => '390.3',
                'stopLimitPrice' => '290',
                'stopLimitTimeInForce' => 'GTC',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->marginNewOcoOrder('BNBUSDT', 'SELL', 0.1, 400.15, 390.3, [
            'stopLimitPrice' => 290,
            'stopLimitTimeInForce' => 'GTC',
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
