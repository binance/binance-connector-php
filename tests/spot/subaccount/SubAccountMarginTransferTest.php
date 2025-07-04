<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class SubAccountMarginTransferTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testSubAccountMarginTransferThrowsExceptionWithoutEmail()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->subAccountMarginTransfer('', 'BTC', 1.01, 1);
    }

    public function testSubAccountMarginTransferThrowsExceptionWithoutAsset()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->subAccountMarginTransfer('testaccount@email.com', '', 1.01, 1);
    }

    public function testSubAccountMarginTransfer()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/sub-account/margin/transfer'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'email' => 'testaccount@email.com',
                'asset' => 'BTC',
                'amount' => '1.01',
                'type' => '1',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->subAccountMarginTransfer('testaccount@email.com', 'BTC', 1.01, 1, [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
