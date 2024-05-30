<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;

class PortfolioMarginRepayFuturesStatusTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testPortfolioMarginRepayFuturesStatus()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/portfolio/repay-futures-switch'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->portfolioMarginRepayFuturesStatus([
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
