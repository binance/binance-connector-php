<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;

class CryptoLoansRepayHistoryTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testCryptoLoansRepayHistory()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/loan/repay/history'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'orderId' => '100000001',
                'loanCoin' => 'BUSD',
                'startTime' => '1575010000000',
                'endTime' => '1575020000000',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->cryptoLoansRepayHistory([
            'orderId' => 100000001,
            'loanCoin' => 'BUSD',
            'startTime' => 1575010000000,
            'endTime' => 1575020000000,
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
