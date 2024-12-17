<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class NewOrderListOcoTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testNewOrderListOcoThrowsExceptionWithoutSymbol()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->newOrderListOco('', 'SELL', 1, 'LIMIT_MAKER', 'LIMIT_MAKER');
    }

    public function testNewOrderListOcoThrowsExceptionWithoutSide()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->newOrderListOco('BNBUSDT', '', 1, 'LIMIT_MAKER', 'LIMIT_MAKER');
    }

    public function testNewOrderListOcoThrowsExceptionWithoutAboveType()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->newOrderListOco('BNBUSDT', 'SELL', 1, '', 'LIMIT_MAKER');
    }

    public function testNewOrderListOcoThrowsExceptionWithoutBelowType()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->newOrderListOco('BNBUSDT', 'SELL', 1, 'LIMIT_MAKER', '');
    }

    public function testNewOrderListOco()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/api/v3/orderList/oco'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'symbol' => 'BNBUSDT',
                'side' => 'SELL',
                'quantity' => '1',
                'aboveType' => 'LIMIT_MAKER',
                'belowType' => 'LIMIT_MAKER',
                'abovePrice' => '600',
                'belowPrice' => '590',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->newOrderListOco('BNBUSDT', 'SELL', 1, 'LIMIT_MAKER', 'LIMIT_MAKER', [
            'abovePrice' => 600,
            'belowPrice' => 590,
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
