<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class FetchDepositAddressListNetworkTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testFetchDepositAddressListNetworkThrowsExceptionWithoutCoin()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->fetchDepositAddressListNetwork('');
    }

    public function testFetchDepositAddressListNetwork()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/capital/deposit/address/list'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'coin' => 'BTC',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->fetchDepositAddressListNetwork('BTC', [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
