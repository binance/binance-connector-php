<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;

class PortfolioMarginAssetLeverageTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testPortfolioMarginAssetLeverage()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/portfolio/margin-asset-leverage'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->portfolioMarginAssetLeverage();

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
