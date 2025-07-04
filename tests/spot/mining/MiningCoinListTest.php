<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;

class MiningCoinListTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testMiningCoinList()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/mining/pub/coinList'))
            ->withMethod('GET')
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->miningCoinList();

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
