<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;

class NftTransactionHistoryTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testNftTransactionHistory()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/nft/history/transactions'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'orderType' => '1',
                'startTime' => '1640995200000',
                'endTime' => '1640995200000',
                'limit' => '50',
                'page' => '1',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->nftTransactionHistory(1, [
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
