<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class AutoInvestPlanAdjustmentTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testAutoInvestPlanAdjustmentThrowsExceptionWithoutSourceAsset()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->autoInvestPlanAdjustment(1, 1, '', 1, '');
    }

    public function testAutoInvestPlanAdjustment()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/lending/auto-invest/plan/edit'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'planId' => '1',
                'subscriptionAmount' => '1',
                'subscriptionCycle' => 'WEEKLY',
                'subscriptionStartTime' => '1',
                'sourceAsset' => 'USDT'
            ]))
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->autoInvestPlanAdjustment(1, 1, 'WEEKLY', 1, 'USDT');

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
