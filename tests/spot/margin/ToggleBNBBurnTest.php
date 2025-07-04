<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;

class ToggleBnbBurnTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testToggleBnbBurn()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/bnbBurn'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'spotBNBBurn' => 'true',
                'interestBNBBurn' => 'false',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->toggleBnbBurn([
            'spotBNBBurn' => 'true',
            'interestBNBBurn' => 'false',
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
