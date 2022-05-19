<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;

class SwapLiquidityOperationRecordTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testSwapLiquidityOperationRecord()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/bswap/liquidityOps'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'operationId' => '123',
                'poolId' => '123',
                'operation' => 'ADD',
                'startTime' => '1640995200000',
                'endTime' => '1640995200000',
                'limit' => '100',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->swapLiquidityOperationRecord([
            'operationId' => 123,
            'poolId' => 123,
            'operation' => 'ADD',
            'startTime' => 1640995200000,
            'endTime' => 1640995200000,
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
