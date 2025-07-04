<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class SubAccountUniversalTransferTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testSubAccountUniversalTransferThrowsExceptionWithoutFromAccountType()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->subAccountUniversalTransfer('', 'COIN_FUTURE', 'BTC', 1.01);
    }

    public function testSubAccountUniversalTransferThrowsExceptionWithoutToAccountType()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->subAccountUniversalTransfer('SPOT', '', 'BTC', 1.01);
    }

    public function testSubAccountUniversalTransferThrowsExceptionWithoutAsset()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->subAccountUniversalTransfer('SPOT', 'COIN_FUTURE', '', 1.01);
    }

    public function testSubAccountUniversalTransfer()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/sub-account/universalTransfer'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'fromAccountType' => 'SPOT',
                'toAccountType' => 'COIN_FUTURE',
                'asset' => 'BTC',
                'amount' => '1.01',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->subAccountUniversalTransfer('SPOT', 'COIN_FUTURE', 'BTC', 1.01, [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
