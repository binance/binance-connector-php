<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;

class NftDepositHistoryTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testNftDepositHistory()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/nft/history/deposit'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'startTime' => '1640995200000',
                'endTime' => '1640995200000',
                'limit' => '50',
                'page' => '1',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->nftDepositHistory([
            'startTime' => 1640995200000,
            'endTime' => 1640995200000,
            'limit' => 50,
            'page' => 1,
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
