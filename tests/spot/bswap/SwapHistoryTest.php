<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;

class SwapHistoryTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testSwapHistory()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/bswap/swap'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'swapId' => '123',
                'startTime' => '1640995200000',
                'endTime' => '1640995200000',
                'status' => '0',
                'quoteAsset' => 'USDT',
                'baseAsset' => 'BUSD',
                'limit' => '100',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->swapHistory([
            'swapId' => 123,
            'startTime' => 1640995200000,
            'endTime' => 1640995200000,
            'status' => 0,
            'quoteAsset' => 'USDT',
            'baseAsset' => 'BUSD',
            'limit' => 100,
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
