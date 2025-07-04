<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class IsolatedMarginNewListenKeyTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testIsolatedMarginNewListenKeyThrowsExceptionWithoutSymbol()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->isolatedMarginNewListenKey('');
    }

    public function testIsolatedMarginNewListenKey()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/userDataStream/isolated'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'symbol' => 'BTCUSDT'
            ]))
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->isolatedMarginNewListenKey('BTCUSDT');

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
