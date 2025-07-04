<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class NewOrderListOtoTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testNewOrderListOtoThrowsExceptionWithoutSymbol()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->newOrderListOto('BNBUSDT', 'LIMIT', '', 600, 1, 'LIMIT', '', 1);
    }

    public function testNewOrderListOto()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/api/v3/orderList/oto'))
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

        $response = $this->spotClient->newOrderListOto('BNBUSDT', 'LIMIT', 'BUY', 600, 1, 'LIMIT', 'BUY', 1, [
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
