<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class NewOrderTestTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testNewOrderTestThrowsExceptionWithoutSymbol()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->newOrderTest('', 'SELL', 'MARKET');
    }

    public function testNewOrderTestThrowsExceptionWithoutSide()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->newOrderTest('BNBUSDT', '', 'MARKET');
    }

    public function testNewOrderTestThrowsExceptionWithoutType()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->newOrderTest('BNBUSDT', 'SELL', '');
    }

    public function testNewOrderTest()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/api/v3/order/test'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'symbol' => 'BNBUSDT',
                'side' => 'SELL',
                'type' => 'MARKET',
                'stopPrice' => '20.01',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->newOrderTest('BNBUSDT', 'SELL', 'MARKET', [
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
