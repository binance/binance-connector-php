<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class SavingsFlexibleRedeemTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testSavingsFlexibleRedeemThrowsExceptionWithoutProductId()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->savingsFlexibleRedeem('', 1.01, 'FAST');
    }

    public function testSavingsFlexibleRedeemThrowsExceptionWithoutType()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->savingsFlexibleRedeem('1234', 1.01, '');
    }

    public function testSavingsFlexibleRedeem()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/lending/daily/redeem'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'productId' => '1234',
                'amount' => '1.01',
                'type' => 'FAST',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->savingsFlexibleRedeem('1234', 1.01, 'FAST', [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
