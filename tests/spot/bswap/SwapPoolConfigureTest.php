<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;

class SwapPoolConfigureTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testSwapPoolConfigure()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/bswap/poolConfigure'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'poolId' => '2',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->swapPoolConfigure([
            'poolId' => 2,
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
