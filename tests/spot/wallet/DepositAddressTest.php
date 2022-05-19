<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class DepositAddressTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testDepositAddressThrowsExceptionWithoutCoin()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->depositAddress('');
    }

    public function testDepositAddress()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/capital/deposit/address'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'coin' => 'BNB',
                'network' => 'ETH',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->depositAddress('BNB', [
            'network' => 'ETH',
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
