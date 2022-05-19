<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class SwapAddLiquidityTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testSwapAddLiquidityThrowsExceptionWithoutAsset()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->swapAddLiquidity(2, '', 12415.2);
    }

    public function testSwapAddLiquidity()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/bswap/liquidityAdd'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'poolId' => '2',
                'type' => 'Single',
                'asset' => 'BTC',
                'quantity' => '12415.2',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->swapAddLiquidity(2, 'BTC', 12415.2, [
            'type' => 'Single',
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
