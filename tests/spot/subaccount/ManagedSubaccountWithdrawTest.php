<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class ManagedSubAccountWithdrawTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testManagedSubAccountWithdrawThrowsExceptionWithoutFromEmail()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->managedSubAccountWithdraw('', 'BTC', 1.01);
    }

    public function testManagedSubAccountWithdrawThrowsExceptionWithoutAsset()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->managedSubAccountWithdraw('testaccount@email.com', '', 1.01);
    }

    public function testManagedSubAccountWithdraw()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/managed-subaccount/withdraw'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'fromEmail' => 'testaccount@email.com',
                'asset' => 'BTC',
                'amount' => '1.01',
                'transferDate' => '1640995200000',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->managedSubAccountWithdraw('testaccount@email.com', 'BTC', 1.01, [
            'transferDate' => 1640995200000,
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
