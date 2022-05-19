<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class SwapSendTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testSwapSendThrowsExceptionWithoutQuoteAsset()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->swapSend('', 'BUSD', 12415.2);
    }

    public function testSwapSendThrowsExceptionWithoutBaseAsset()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->swapSend('USDT', '', 12415.2);
    }

    public function testSwapSend()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/bswap/swap'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'quoteAsset' => 'USDT',
                'baseAsset' => 'BUSD',
                'quoteQty' => '12415.2',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->swapSend('USDT', 'BUSD', 12415.2, [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
