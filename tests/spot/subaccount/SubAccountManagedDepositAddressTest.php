<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class SubAccountManagedDepositAddressTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testSubAccountManagedDepositAddressThrowsExceptionWithoutEmail()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->subAccountManagedDepositAddress('', 'BNB');
    }

    public function testSubAccountManagedDepositAddressThrowsExceptionWithoutCoin()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->subAccountManagedDepositAddress('test@test', '');
    }

    public function testSubAccountManagedDepositAddress()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/managed-subaccount/deposit/address'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'email' => 'test@test',
                'coin' => 'BNB',
                'network' => 'BTC',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->subAccountManagedDepositAddress('test@test', 'BNB', [
            'network' => 'BTC',
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
