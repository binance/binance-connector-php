<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;

class RebateSpotHistoryRecordsTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testRebateSpotHistoryRecords()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/rebate/taxQuery'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'startTime' => '1640995200000',
                'endTime' => '1640995200000',
                'page' => '1',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->rebateSpotHistoryRecords([
            'startTime' => 1640995200000,
            'endTime' => 1640995200000,
            'page' => 1,
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
