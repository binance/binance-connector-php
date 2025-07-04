<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class SubAccountFuturesTransferTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testSubAccountFuturesTransferThrowsExceptionWithoutEmail()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->subAccountFuturesTransfer('', 'BTC', 1.01, 1);
    }

    public function testSubAccountFuturesTransferThrowsExceptionWithoutAsset()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->subAccountFuturesTransfer('testaccount@email.com', '', 1.01, 1);
    }

    public function testSubAccountFuturesTransfer()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/sub-account/futures/transfer'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'email' => 'testaccount@email.com',
                'asset' => 'BTC',
                'amount' => '1.01',
                'type' => '1',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->subAccountFuturesTransfer('testaccount@email.com', 'BTC', 1.01, 1, [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
