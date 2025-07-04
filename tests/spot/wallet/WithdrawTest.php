<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class WithdrawTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testWithdrawThrowsExceptionWithoutCoin()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->withdraw('', 'address', 1.01);
    }

    public function testWithdrawThrowsExceptionWithoutAddress()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->withdraw('BNB', '', 1.01);
    }

    public function testWithdraw()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/capital/withdraw/apply'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'coin' => 'BNB',
                'address' => 'address',
                'amount' => '1.01',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->withdraw('BNB', 'address', 1.01, [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
