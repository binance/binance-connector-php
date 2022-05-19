<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class AggTradesTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testAggTradesThrowsExceptionWithoutSymbol()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->aggTrades('');
    }

    public function testAggTrades()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/api/v3/aggTrades'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'symbol' => 'BNBUSDT',
                'fromId' => '123',
                'startTime' => '1640995200000',
                'endTime' => '1640995200000',
                'limit' => '500'
            ]))
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->aggTrades('BNBUSDT', [
            'fromId' => 123,
            'startTime' => 1640995200000,
            'endTime' => 1640995200000,
            'limit' => 500
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
