<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;

class SwapListAllPoolsTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testSwapListAllPools()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/bswap/pools'))
            ->withMethod('GET')
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->swapListAllPools();

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
