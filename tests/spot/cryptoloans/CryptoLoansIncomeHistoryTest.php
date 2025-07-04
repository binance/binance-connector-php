<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class CryptoLoansIncomeHistoryTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testCryptoLoansIncomeHistoryThrowsExceptionWithoutAsset()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->cryptoLoansIncomeHistory('');
    }

    public function testCryptoLoansIncomeHistory()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/loan/income'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'asset' => 'BTC',
                'type' => 'borrowIn',
                'startTime' => '1640995200000',
                'endTime' => '1640995200000',
                'limit' => '20',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->cryptoLoansIncomeHistory('BTC', [
            'type' => 'borrowIn',
            'startTime' => 1640995200000,
            'endTime' => 1640995200000,
            'limit' => 20,
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
