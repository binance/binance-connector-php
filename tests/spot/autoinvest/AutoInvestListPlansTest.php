<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class AutoInvestListPlansTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testAutoInvestListPlansThrowsExceptionWithoutPlanType()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->autoInvestListPlans('');
    }

    public function testAutoInvestListPlans()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/lending/auto-invest/plan/list'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'planType' => 'SINGLE',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->autoInvestListPlans('SINGLE', [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
