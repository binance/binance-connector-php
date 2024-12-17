<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;

class AutoInvestIndexLinkedPlanPositionDetailsTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testAutoInvestIndexLinkedPlanPositionDetails()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/lending/auto-invest/index/user-summary'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'indexId' => '1',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->autoInvestIndexLinkedPlanPositionDetails(1, [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
