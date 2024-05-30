<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\InvalidArgumentException;

class ExchangeSmallLiabilityHistoryTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testExchangeSmallLiabilityHistoryThrowsExceptionWithoutCurrent()
    {
        $this->expectException(InvalidArgumentException::class);
        $response = $this->spotClient->exchangeSmallLiabilityHistory(0, 10);
    }

    public function testExchangeSmallLiabilityHistoryThrowsExceptionWithoutSize()
    {
        $this->expectException(InvalidArgumentException::class);
        $response = $this->spotClient->exchangeSmallLiabilityHistory(5, 0);
    }

    public function testExchangeSmallLiabilityHistory()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/margin/exchange-small-liability-history'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'current' => '5',
                'size' => '10',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->exchangeSmallLiabilityHistory(5, 10, [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
