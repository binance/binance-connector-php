<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\InvalidArgumentException;

class CryptoLoansCustomizeMarginCallTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testCryptoLoansCustomizeMarginCallThrowsExceptionWithoutMarginCall()
    {
        $this->expectException(InvalidArgumentException::class);
        $response = $this->spotClient->cryptoLoansCustomizeMarginCall(0.0);
    }

    public function testCryptoLoansCustomizeMarginCall()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/loan/customize/margin_call'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'marginCall' => '0.1',
                'orderID' => '100000001',
                'collateralCoin' => 'BNB',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->cryptoLoansCustomizeMarginCall(0.1, [
            'orderID' => 100000001,
            'collateralCoin' => 'BNB',
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
