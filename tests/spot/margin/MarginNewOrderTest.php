<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class MarginNewOrderTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testMarginNewOrderThrowsExceptionWithoutSymbol()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->marginNewOrder('', 'SELL', 'MARKET');
    }

    public function testMarginNewOrderThrowsExceptionWithoutSide()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->marginNewOrder('BNBUSDT', '', 'MARKET');
    }

    public function testMarginNewOrderThrowsExceptionWithoutType()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->marginNewOrder('BNBUSDT', 'SELL', '');
    }

    public function testMarginNewOrder()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/margin/order'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'symbol' => 'BNBUSDT',
                'side' => 'SELL',
                'type' => 'MARKET',
                'quantity' => '1.01',
                'price' => '10',
                'stopPrice' => '20.01',
                'timeInForce' => 'GTC',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->marginNewOrder('BNBUSDT', 'SELL', 'MARKET', [
            'quantity' => 1.01,
            'price' => 10,
            'stopPrice' => 20.01,
            'timeInForce' => 'GTC',
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
