<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class UniversalTransferHistoryTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testUniversalTransferHistoryThrowsExceptionWithoutType()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->universalTransferHistory('');
    }

    public function testUniversalTransferHistory()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/asset/transfer'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'type' => 'MAIN_UMFUTURE',
                'startTime' => '1640995200000',
                'endTime' => '1640995200000',
                'current' => '1',
                'size' => '100',
                'fromSymbol' => 'BNBUSDT',
                'toSymbol' => 'BNBUSDT',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->universalTransferHistory('MAIN_UMFUTURE', [
            'startTime' => 1640995200000,
            'endTime' => 1640995200000,
            'current' => 1,
            'size' => 100,
            'fromSymbol' => 'BNBUSDT',
            'toSymbol' => 'BNBUSDT',
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
