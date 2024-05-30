<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class ConvertGetQuoteTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testConvertGetQuoteThrowsExceptionWithoutFromAsset()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->convertGetQuote('', 'USDT', ['fromAmount' => 0.1]);
    }

    public function testConvertGetQuoteThrowsExceptionWithoutToAsset()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->convertGetQuote('BNB', '', ['fromAmount' => 0.1]);
    }

    public function testConvertGetQuote()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/convert/getQuote'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'fromAsset' => 'BNB',
                'toAsset' => 'USDT',
                'fromAmount' => '0.1',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->convertGetQuote('BNB', 'USDT', [
            'fromAmount' => 0.1,
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
