<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;

class BlvtRedemptionRecordTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testBlvtRedemptionRecord()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/blvt/redeem/record'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'tokenName' => 'BTCUP',
                'id' => '123',
                'startTime' => '1640995200000',
                'endTime' => '1640995200000',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->blvtRedemptionRecord([
            'tokenName' => 'BTCUP',
            'id' => 123,
            'startTime' => 1640995200000,
            'endTime' => 1640995200000,
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
