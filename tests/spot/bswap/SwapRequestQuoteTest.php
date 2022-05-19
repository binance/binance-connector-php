<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class SwapRequestQuoteTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testSwapRequestQuoteThrowsExceptionWithoutQuoteAsset()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->swapRequestQuote('', 'BUSD', 12415.2);
    }

    public function testSwapRequestQuoteThrowsExceptionWithoutBaseAsset()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->swapRequestQuote('USDT', '', 12415.2);
    }

    public function testSwapRequestQuote()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/bswap/quote'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'quoteAsset' => 'USDT',
                'baseAsset' => 'BUSD',
                'quoteQty' => '12415.2',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->swapRequestQuote('USDT', 'BUSD', 12415.2, [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
