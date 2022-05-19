<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class BlvtRedeemTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testBlvtRedeemThrowsExceptionWithoutTokenName()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->blvtRedeem('', 1.01);
    }

    public function testBlvtRedeem()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/blvt/redeem'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'tokenName' => 'BTCDOWN',
                'amount' => '1.01',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->blvtRedeem('BTCDOWN', 1.01, [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
