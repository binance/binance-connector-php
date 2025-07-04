<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;

class PayTradeHistoryTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testPayTradeHistory()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/pay/transactions'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'startTime' => '1640995200000',
                'endTime' => '1640995200000',
                'limit' => '100',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->payTradeHistory([
            'startTime' => 1640995200000,
            'endTime' => 1640995200000,
            'limit' => 100,
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
