<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;

class MarginLeverageBracketTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testMarginLeverageBracket()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/margin/leverageBracket'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([]))
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->marginLeverageBracket();

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
