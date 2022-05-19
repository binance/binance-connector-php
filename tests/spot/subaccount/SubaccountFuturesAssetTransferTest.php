<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class SubAccountFuturesAssetTransferTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testSubAccountFuturesAssetTransferThrowsExceptionWithoutFromEmail()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->subAccountFuturesAssetTransfer('', 'testaccount2@email.com', 2, 'BTC', 1.01);
    }

    public function testSubAccountFuturesAssetTransferThrowsExceptionWithoutToEmail()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->subAccountFuturesAssetTransfer('testaccount@email.com', '', 2, 'BTC', 1.01);
    }

    public function testSubAccountFuturesAssetTransferThrowsExceptionWithoutAsset()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->subAccountFuturesAssetTransfer('testaccount@email.com', 'testaccount2@email.com', 2, '', 1.01);
    }

    public function testSubAccountFuturesAssetTransfer()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/sub-account/futures/internalTransfer'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'fromEmail' => 'testaccount@email.com',
                'toEmail' => 'testaccount2@email.com',
                'futuresType' => '2',
                'asset' => 'BTC',
                'amount' => '1.01',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->subAccountFuturesAssetTransfer('testaccount@email.com', 'testaccount2@email.com', 2, 'BTC', 1.01, [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
