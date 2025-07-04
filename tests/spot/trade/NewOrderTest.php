<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class NewOrderTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testNewOrderThrowsExceptionWithoutSymbol()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->newOrder('', 'SELL', 'MARKET');
    }

    public function testNewOrderThrowsExceptionWithoutSide()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->newOrder('BNBUSDT', '', 'MARKET');
    }

    public function testNewOrderThrowsExceptionWithoutType()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->newOrder('BNBUSDT', 'SELL', '');
    }

    public function testNewOrder()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/api/v3/order'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'symbol' => 'BNBUSDT',
                'side' => 'SELL',
                'type' => 'MARKET',
                'stopPrice' => '20.01',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->newOrder('BNBUSDT', 'SELL', 'MARKET', [
            'stopPrice' => 20.01,
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
