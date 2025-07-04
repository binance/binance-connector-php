<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;

class IsolatedMarginAccountTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testIsolatedMarginAccount()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/margin/isolated/account'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'symbols' => 'BTCUSDT,BNBUSDT,ADAUSDT',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->isolatedMarginAccount([
            'symbols' => 'BTCUSDT,BNBUSDT,ADAUSDT',
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
