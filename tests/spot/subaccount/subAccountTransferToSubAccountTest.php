<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class SubAccountTransferToSubAccountTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testSubAccountTransferToSubAccountThrowsExceptionWithoutToEmail()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->subAccountTransferToSubAccount('', 'BTC', 1.01);
    }

    public function testSubAccountTransferToSubAccountThrowsExceptionWithoutAsset()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->subAccountTransferToSubAccount('testaccount@email.com', '', 1.01);
    }

    public function testSubAccountTransferToSubAccount()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/sub-account/transfer/subToSub'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'toEmail' => 'testaccount@email.com',
                'asset' => 'BTC',
                'amount' => '1.01',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->subAccountTransferToSubAccount('testaccount@email.com', 'BTC', 1.01, [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
