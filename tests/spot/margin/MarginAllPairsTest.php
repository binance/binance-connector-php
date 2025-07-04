<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;

class MarginAllPairsTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testMarginAllPairs()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/margin/allPairs'))
            ->withMethod('GET')
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->marginAllPairs();

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
