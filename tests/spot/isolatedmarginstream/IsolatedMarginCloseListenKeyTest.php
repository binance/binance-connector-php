<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class IsolatedMarginCloseListenKeyTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testIsolatedMarginCloseListenKeyThrowsExceptionWithoutSymbol()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->isolatedMarginCloseListenKey('', 'listen-key');
    }

    public function testIsolatedMarginCloseListenKeyThrowsExceptionWithoutListenKey()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->isolatedMarginCloseListenKey('BTCUSDT', '');
    }

    public function testIsolatedMarginCloseListenKey()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/userDataStream/isolated'))
            ->withMethod('DELETE')
            ->withQueryParams(new Expect\ArrayEquals([
                'symbol' => 'BTCUSDT',
                'listenKey' => 'listen-key'
            ]))
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->isolatedMarginCloseListenKey('BTCUSDT', 'listen-key');

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
