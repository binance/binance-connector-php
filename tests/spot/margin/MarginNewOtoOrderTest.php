<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class MarginNewOtoOrderTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testMarginNewOtoOrderThrowsExceptionWithoutSymbol()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->marginNewOtoOrder('BNBUSDT', 'LIMIT', '', 600, 1, 'LIMIT', '', 1);
    }

    public function testMarginNewOtoOrder()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/margin/order/oto'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'symbol' => 'BNBUSDT',
                'workingType' => 'LIMIT',
                'workingSide' => 'BUY',
                'workingPrice' => '600',
                'workingQuantity' => '1',
                'pendingType' => 'LIMIT',
                'pendingSide' => 'BUY',
                'pendingQuantity' => '1',
                'workingTimeInForce' => 'GTC',
                'pendingPrice' => '595',
                'pendingTimeInForce' => 'GTC'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->marginNewOtoOrder('BNBUSDT', 'LIMIT', 'BUY', 600, 1, 'LIMIT', 'BUY', 1, [
            'workingTimeInForce' => 'GTC',
            'pendingPrice' => 595,
            'pendingTimeInForce' => 'GTC'
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
