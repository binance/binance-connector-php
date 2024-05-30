<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;

class CrossMarginCollateralRatioTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testCrossMarginCollateralRatio()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/margin/crossMarginCollateralRatio'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([]))
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->crossMarginCollateralRatio();

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
