<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class AutoInvestPlanCreationTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testAutoInvestPlanCreationThrowsExceptionWithoutSourceAsset()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->autoInvestPlanCreation('MAIN_SITE', 'SINGLE', 1.0, 'WEEKLY', 2, '', [['targetAsset' => 'BNB', 'percentage' => 50]]);
    }

    public function testAutoInvestPlanCreation()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/lending/auto-invest/plan/add'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'sourceType' => 'MAIN_SITE',
                'planType' => 'SINGLE',
                'subscriptionAmount' => '1',
                'subscriptionCycle' => 'WEEKLY',
                'subscriptionStartTime' => '2',
                'sourceAsset' => 'USDT',
                'details' => json_encode([['targetAsset' => 'BNB', 'percentage' => 50]]),
                'flexibleAllowedToUse' => 'true',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->autoInvestPlanCreation(
            'MAIN_SITE',
            'SINGLE',
            1,
            'WEEKLY',
            2,
            'USDT',
            [
                [
                    'targetAsset' => 'BNB',
                    'percentage' => 50
                ]
            ],
            [
                'flexibleAllowedToUse' => true,
                'recvWindow' => 5000
            ]
        );
        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
