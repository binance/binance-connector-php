<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class CancelAndReplaceTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testCancelAndReplaceThrowsExceptionWithoutSymbol()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->cancelAndReplace('', 'SELL', 'LIMIT', 'STOP_ON_FAILURE');
    }

    public function testCancelAndReplaceThrowsExceptionWithoutSide()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->cancelAndReplace('BNBUSDT', '', 'LIMIT', 'STOP_ON_FAILURE');
    }

    public function testCancelAndReplaceThrowsExceptionWithoutType()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->cancelAndReplace('BNBUSDT', 'SELL', '', 'STOP_ON_FAILURE');
    }

    public function testCancelAndReplaceThrowsExceptionWithoutCancelReplaceMode()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->cancelAndReplace('BNBUSDT', 'SELL', 'LIMIT', '');
    }

    public function testCancelAndReplace()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/api/v3/order/cancelReplace'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'symbol' => 'BNBUSDT',
                'side' => 'SELL',
                'type' => 'LIMIT',
                'cancelReplaceMode' => 'STOP_ON_FAILURE',
                'timeInForce' => 'GTC',
                'quantity' => '10.1',
                'price' => '295.92',
                'cancelOrderId' => '12',
                'stopPrice' => '20.01',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->cancelAndReplace('BNBUSDT', 'SELL', 'LIMIT', 'STOP_ON_FAILURE', [
            'timeInForce' => 'GTC',
            'quantity' => 10.1,
            'price' => 295.92,
            'cancelOrderId' => 12,
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
