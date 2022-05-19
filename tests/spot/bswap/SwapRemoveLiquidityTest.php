<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class SwapRemoveLiquidityTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testSwapRemoveLiquidityThrowsExceptionWithoutType()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->swapRemoveLiquidity(2, '', 12415.2);
    }

    public function testSwapRemoveLiquidity()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/bswap/liquidityRemove'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'poolId' => '2',
                'type' => 'SINGLE',
                'asset' => 'BNB',
                'shareAmount' => '12415.2',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->swapRemoveLiquidity(2, 'SINGLE', 12415.2, [
            'asset' => ['BNB'],
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
