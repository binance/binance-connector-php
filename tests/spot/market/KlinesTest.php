<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class KlinesTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testKlinesThrowsExceptionWithoutSymbol()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->klines('', '1m');
    }

    public function testKlinesThrowsExceptionWithoutInterval()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->klines('BNBUSDT', '');
    }

    public function testKlines()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/api/v3/klines'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'symbol' => 'BNBUSDT',
                'interval' => '1m',
                'startTime' => '1640995200000',
                'endTime' => '1640995200000',
                'limit' => '500'
            ]))
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->klines('BNBUSDT', '1m', [
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
