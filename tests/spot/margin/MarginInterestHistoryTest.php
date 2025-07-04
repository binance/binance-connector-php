<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;

class MarginInterestHistoryTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testMarginInterestHistory()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/margin/interestHistory'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'asset' => 'BNB',
                'current' => '1',
                'size' => '100',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->marginInterestHistory([
            'asset' => 'BNB',
            'current' => 1,
            'size' => 100,
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
