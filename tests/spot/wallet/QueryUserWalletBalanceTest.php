<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;

class QueryUserWalletBalanceTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testQueryUserWalletBalance()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/asset/wallet/balance'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->queryUserWalletBalance([
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
