<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;

class ExchangeInfoTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testExchangeInfo()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/api/v3/exchangeInfo'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'symbol' => 'BNBUSDT',
                'symbols' => '["BTCUSDT","BNBBTC"]'
            ]))
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->exchangeInfo([
            'symbol' => 'BNBUSDT',
            'symbols' => '["BTCUSDT","BNBBTC"]'
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
