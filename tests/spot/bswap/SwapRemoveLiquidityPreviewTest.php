<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class SwapRemoveLiquidityPreviewTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testSwapRemoveLiquidityPreviewThrowsExceptionWithoutType()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->swapRemoveLiquidityPreview(2, '', 'USDT', 12415.2);
    }

    public function testSwapRemoveLiquidityPreviewThrowsExceptionWithoutQuoteAsset()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->swapRemoveLiquidityPreview(2, 'SINGLE', '', 12415.2);
    }

    public function testSwapRemoveLiquidityPreview()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/bswap/removeLiquidityPreview'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'poolId' => '2',
                'type' => 'SINGLE',
                'quoteAsset' => 'USDT',
                'shareAmount' => '12415.2',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->swapRemoveLiquidityPreview(2, 'SINGLE', 'USDT', 12415.2, [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
