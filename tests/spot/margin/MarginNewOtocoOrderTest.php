<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class MarginNewOtocoOrderTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testMarginNewOtocoOrderThrowsExceptionWithoutSymbol()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->marginNewOtocoOrder('BNBUSDT', '', '', 600, 1, 'SELL', 1, 'LIMIT_MAKER');
    }

    public function testMarginNewOtocoOrder()
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
                'workingIcebergQty' => '0.1',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->marginNewOtocoOrder('BNBUSDT', 'LIMIT', 'BUY', 600, 1, 'SELL', 1, 'LIMIT_MAKER', [
            'workingTimeInForce' => 'GTC',
            'pendingAbovePrice' => 605,
            'pendingBelowType' => 'LIMIT_MAKER',
            'pendingBelowPrice' => 595,
            'workingIcebergQty' => 0.1,
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
