<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class UiKlinesTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testUiKlinesThrowsExceptionWithoutSymbol()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->uiKlines('', '1m');
    }

    public function testUiKlinesThrowsExceptionWithoutInterval()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->uiKlines('BNBUSDT', '');
    }

    public function testUiKlines()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/api/v3/uiKlines'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'symbol' => 'BNBUSDT',
                'interval' => '1m',
                'startTime' => '1640995200000',
                'endTime' => '1640995200000'
            ]))
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->uiKlines('BNBUSDT', '1m', [
            'startTime' => 1640995200000,
            'endTime' => 1640995200000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
