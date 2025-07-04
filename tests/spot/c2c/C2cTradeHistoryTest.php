<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class C2cTradeHistoryTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testC2cTradeHistoryThrowsExceptionWithoutTradeType()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->c2cTradeHistory('');
    }

    public function testC2cTradeHistory()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/c2c/orderMatch/listUserOrderHistory'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'tradeType' => 'BUY',
                'page' => '1',
                'rows' => '100',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->c2cTradeHistory('BUY', [
            'page' => 1,
            'rows' => 100,
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
