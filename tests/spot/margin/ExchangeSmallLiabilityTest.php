<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class ExchangeSmallLiabilityTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testExchangeSmallLiabilityThrowsExceptionWithoutAssetNames()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->exchangeSmallLiability([]);
    }

    public function testExchangeSmallLiability()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/margin/exchange-small-liability'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'assetNames' => 'BNB',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->exchangeSmallLiability(['BNB'], [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
