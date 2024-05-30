<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;
use Binance\Exception\InvalidArgumentException;

class CryptoLoansAdjustLtvTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testCryptoLoansAdjustLtvThrowsExceptionWithoutAmount()
    {
        $this->expectException(InvalidArgumentException::class);
        $response = $this->spotClient->cryptoLoansAdjustLtv(100000001, 0.0, 'ADDITIONAL');
    }

    public function testCryptoLoansAdjustLtvThrowsExceptionWithoutDirection()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->cryptoLoansAdjustLtv(100000001, 1.01, '');
    }

    public function testCryptoLoansAdjustLtv()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/loan/adjust/ltv'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'orderId' => '100000001',
                'amount' => '1.01',
                'direction' => 'ADDITIONAL',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->cryptoLoansAdjustLtv(100000001, 1.01, 'ADDITIONAL', [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
