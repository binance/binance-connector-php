<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class SwapAddLiquidityPreviewTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testSwapAddLiquidityPreviewThrowsExceptionWithoutType()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->swapAddLiquidityPreview(2, '', 'USDT', 12415.2);
    }

    public function testSwapAddLiquidityPreviewThrowsExceptionWithoutQuoteAsset()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->swapAddLiquidityPreview(2, 'SINGLE', '', 12415.2);
    }

    public function testSwapAddLiquidityPreview()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/bswap/addLiquidityPreview'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'poolId' => '2',
                'type' => 'SINGLE',
                'quoteAsset' => 'USDT',
                'quoteQty' => '12415.2',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->swapAddLiquidityPreview(2, 'SINGLE', 'USDT', 12415.2, [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
