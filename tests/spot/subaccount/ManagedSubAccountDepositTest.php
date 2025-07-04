<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class ManagedSubAccountDepositTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testManagedSubAccountDepositThrowsExceptionWithoutToEmail()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->managedSubAccountDeposit('', 'BTC', 1.01);
    }

    public function testManagedSubAccountDepositThrowsExceptionWithoutAsset()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->managedSubAccountDeposit('testaccount@email.com', '', 1.01);
    }

    public function testManagedSubAccountDeposit()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/managed-subaccount/deposit'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'toEmail' => 'testaccount@email.com',
                'asset' => 'BTC',
                'amount' => '1.01',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->managedSubAccountDeposit('testaccount@email.com', 'BTC', 1.01, [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
