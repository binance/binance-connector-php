<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class NewOcoOrderTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testNewOcoOrderThrowsExceptionWithoutSymbol()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->newOcoOrder('', 'SELL', 0.1, 400.15, 390.3);
    }

    public function testNewOcoOrderThrowsExceptionWithoutSide()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->newOcoOrder('BNBUSDT', '', 0.1, 400.15, 390.3);
    }

    public function testNewOcoOrder()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/api/v3/order/oco'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'symbol' => 'BNBUSDT',
                'side' => 'SELL',
                'quantity' => '0.1',
                'price' => '400.15',
                'stopPrice' => '390.3',
                'stopLimitPrice' => '380.3',
                'stopLimitTimeInForce' => 'GTC',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->newOcoOrder('BNBUSDT', 'SELL', 0.1, 400.15, 390.3, [
            'stopLimitPrice' => 380.3,
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
