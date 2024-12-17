<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;

class CryptoLoansAdjustLtvHistoryTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testCryptoLoansAdjustLtvHistory()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v2/loan/flexible/ltv/adjustment/history'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'loanCoin' => 'BUSD',
                'collateralCoin' => 'BNB',
                'current' => '1',
                'limit' => '5',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->cryptoLoansAdjustLtvHistory([
            'loanCoin' => 'BUSD',
            'collateralCoin' => 'BNB',
            'current' => 1,
            'limit' => 5,
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
