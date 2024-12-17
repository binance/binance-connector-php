<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;

class AutoInvestIndexLinkedPlanRedemptionHistoryTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testAutoInvestIndexLinkedPlanRedemptionHistory()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/lending/auto-invest/redeem/history'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'requestId' => '12345',
                'current' => '1',
                'asset' => 'BTC',
                'size' => '100',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->autoInvestIndexLinkedPlanRedemptionHistory(12345, [
            'current' => 1,
            'asset' => 'BTC',
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
