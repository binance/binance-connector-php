<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;

class RollingWindowTickerTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testRollingWindowTicker()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/api/v3/ticker'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'symbol' => 'BNBUSDT',
                'windowSize' => '1d'
            ]))
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->rollingWindowTicker([
            'symbol' => 'BNBUSDT',
            'windowSize' => '1d'
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
