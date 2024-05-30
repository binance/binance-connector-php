<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;

class ConvertExchangeInfoTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testConvertExchangeInfo()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/convert/exchangeInfo'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'fromAsset' => 'BNB',
                'toAsset' => 'USDT'
            ]))
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->convertExchangeInfo('BNB', 'USDT');

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
