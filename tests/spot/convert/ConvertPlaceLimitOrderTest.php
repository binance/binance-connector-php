<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;
use Binance\Exception\InvalidArgumentException;

class ConvertPlaceLimitOrderTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testConvertPlaceLimitOrderThrowsExceptionWithoutBaseAsset()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->convertPlaceLimitOrder('', 'BTC', 0.0, 'BUY', 'expiredType');
    }

    public function testConvertPlaceLimitOrderThrowsExceptionWithoutQuoteAsset()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->convertPlaceLimitOrder('BNB', '', 0.0, 'BUY', 'expiredType');
    }

    public function testConvertPlaceLimitOrderThrowsExceptionWithoutLimitPrice()
    {
        $this->expectException(InvalidArgumentException::class);
        $response = $this->spotClient->convertPlaceLimitOrder('BNB', 'BTC', 0.0, 'BUY', 'expiredType');
    }

    public function testConvertPlaceLimitOrderThrowsExceptionWithoutSide()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->convertPlaceLimitOrder('BNB', 'BTC', 1.01, '', 'expiredType');
    }

    public function testConvertPlaceLimitOrderThrowsExceptionWithoutExpiredType()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->convertPlaceLimitOrder('BNB', 'BTC', 1.01, 'BUY', '');
    }

    public function testConvertPlaceLimitOrder()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/convert/limit/placeOrder'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'baseAsset' => 'BNB',
                'quoteAsset' => 'BTC',
                'limitPrice' => '1.01',
                'side' => 'BUY',
                'expiredType' => 'SPOT',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->convertPlaceLimitOrder(
            'BNB',
            'BTC',
            1.01,
            'BUY',
            'SPOT',
            [
                'recvWindow' => 5000
            ]
        );

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
