<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;

class CryptoLoansAdjustLtvTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testCryptoLoansAdjustLtv()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v2/loan/flexible/adjust/ltv'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'loanCoin' => 'BUSD',
                'collateralCoin' => 'BNB',
                'adjustmentAmount' => '1.01',
                'direction' => 'ADDITIONAL',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->cryptoLoansAdjustLtv('BUSD', 'BNB', 1.01, 'ADDITIONAL', [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
