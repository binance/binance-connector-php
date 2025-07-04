<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class UniversalTransferTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testUniversalTransferThrowsExceptionWithoutType()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->universalTransfer('', 'BTC', 1.01);
    }

    public function testUniversalTransferThrowsExceptionWithoutAsset()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->universalTransfer('MAIN_UMFUTURE', '', 1.01);
    }

    public function testUniversalTransfer()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/asset/transfer'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'type' => 'MAIN_UMFUTURE',
                'asset' => 'BTC',
                'amount' => '1.01',
                'fromSymbol' => 'BNBUSDT',
                'toSymbol' => 'BNBUSDT',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->universalTransfer('MAIN_UMFUTURE', 'BTC', 1.01, [
            'fromSymbol' => 'BNBUSDT',
            'toSymbol' => 'BNBUSDT',
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
