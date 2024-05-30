<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class ConvertAcceptQuoteTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testConvertAcceptQuoteThrowsExceptionWithoutQuoteId()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->convertAcceptQuote('');
    }

    public function testConvertAcceptQuote()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/convert/acceptQuote'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'quoteId' => '12415572564',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->convertAcceptQuote('12415572564', [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
