<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\InvalidArgumentException;

class CryptoLoansRepayTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testCryptoLoansRepayThrowsExceptionWithoutAmount()
    {
        $this->expectException(InvalidArgumentException::class);
        $response = $this->spotClient->cryptoLoansRepay(100000001, 0.0);
    }

    public function testCryptoLoansRepay()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/loan/repay'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'orderId' => '100000001',
                'amount' => '1.01',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->cryptoLoansRepay(100000001, 1.01, [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
