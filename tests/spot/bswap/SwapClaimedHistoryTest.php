<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;

class SwapClaimedHistoryTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testSwapClaimedHistory()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/bswap/claimedHistory'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'poolId' => '123',
                'assetRewards' => 'BNB',
                'type' => '0',
                'startTime' => '1640995200000',
                'endTime' => '1640995200000',
                'limit' => '500',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->swapClaimedHistory([
            'poolId' => 123,
            'assetRewards' => 'BNB',
            'type' => 0,
            'startTime' => 1640995200000,
            'endTime' => 1640995200000,
            'limit' => 500,
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
