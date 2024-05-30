<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class PortfolioMarginRepayFuturesSwitchTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testPortfolioMarginRepayFuturesSwitchThrowsExceptionWithoutAutoRepay()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->portfolioMarginRepayFuturesSwitch('');
    }

    public function testPortfolioMarginRepayFuturesSwitch()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/portfolio/repay-futures-switch'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'autoRepay' => 'true',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->portfolioMarginRepayFuturesSwitch('true', [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
