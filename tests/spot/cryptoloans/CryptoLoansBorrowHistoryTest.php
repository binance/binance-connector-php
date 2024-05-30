<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;

class CryptoLoansBorrowHistoryTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testCryptoLoansBorrowHistory()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/loan/borrow/history'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'loanCoin' => 'BUSD',
                'collateralCoin' => 'BNB',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->cryptoLoansBorrowHistory([
            'loanCoin' => 'BUSD',
            'collateralCoin' => 'BNB',
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
