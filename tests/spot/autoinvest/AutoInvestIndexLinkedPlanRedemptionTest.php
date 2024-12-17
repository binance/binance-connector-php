<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;

class AutoInvestIndexLinkedPlanRedemptionTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testAutoInvestIndexLinkedPlanRedemption()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/lending/auto-invest/redeem'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'indexId' => '123456',
                'requestId' => 'TR12354859',
                'redemptionPercentage' => '10',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->autoInvestIndexLinkedPlanRedemption(123456, 10, [
            'requestId' => 'TR12354859',
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
