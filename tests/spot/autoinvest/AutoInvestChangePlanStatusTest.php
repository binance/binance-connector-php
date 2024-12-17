<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;

class AutoInvestChangePlanStatusTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testAutoInvestChangePlanStatus()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/lending/auto-invest/plan/edit-status'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'planId' => '1',
                'status' => 'ONGOING',
                'recvWindow' => '5000'
            ]))
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->autoInvestChangePlanStatus(1, 'ONGOING', [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
