<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;

class FundingWalletTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testFundingWallet()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/asset/get-funding-asset'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'asset' => 'BNB',
                'needBtcValuation' => 'true',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->fundingWallet([
            'asset' => 'BNB',
            'needBtcValuation' => 'true',
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
