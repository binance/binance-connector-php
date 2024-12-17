<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class NewOrderListOtocoTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testNewOrderListOtocoThrowsExceptionWithoutSymbol()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->newOrderListOtoco('BNBUSDT', '', '', 600, 1, 'SELL', 1, 'LIMIT_MAKER');
    }

    public function testNewOrderListOtoco()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/api/v3/orderList/otoco'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'symbol' => 'BNBUSDT',
                'workingType' => 'LIMIT',
                'workingSide' => 'BUY',
                'workingPrice' => '600',
                'workingQuantity' => '1',
                'pendingSide' => 'SELL',
                'pendingQuantity' => '1',
                'pendingAboveType' => 'LIMIT_MAKER',
                'workingTimeInForce' => 'GTC',
                'pendingAbovePrice' => '605',
                'pendingBelowType' => 'LIMIT_MAKER',
                'pendingBelowPrice' => '595',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->newOrderListOtoco('BNBUSDT', 'LIMIT', 'BUY', 600, 1, 'SELL', 1, 'LIMIT_MAKER', [
            'workingTimeInForce' => 'GTC',
            'pendingAbovePrice' => 605,
            'pendingBelowType' => 'LIMIT_MAKER',
            'pendingBelowPrice' => 595,
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
