<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class IsolatedMarginTransferTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testIsolatedMarginTransferThrowsExceptionWithoutAsset()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->isolatedMarginTransfer('', 'BNBUSDT', 'SPOT', 'ISOLATED_MARGIN', 1.01);
    }

    public function testIsolatedMarginTransferThrowsExceptionWithoutSymbol()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->isolatedMarginTransfer('BTC', '', 'SPOT', 'ISOLATED_MARGIN', 1.01);
    }

    public function testIsolatedMarginTransferThrowsExceptionWithoutTransFrom()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->isolatedMarginTransfer('BTC', 'BNBUSDT', '', 'ISOLATED_MARGIN', 1.01);
    }

    public function testIsolatedMarginTransferThrowsExceptionWithoutTransTo()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->isolatedMarginTransfer('BTC', 'BNBUSDT', 'SPOT', '', 1.01);
    }

    public function testIsolatedMarginTransfer()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/margin/isolated/transfer'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'asset' => 'BTC',
                'symbol' => 'BNBUSDT',
                'transFrom' => 'SPOT',
                'transTo' => 'ISOLATED_MARGIN',
                'amount' => '1.01',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->isolatedMarginTransfer('BTC', 'BNBUSDT', 'SPOT', 'ISOLATED_MARGIN', 1.01, [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
