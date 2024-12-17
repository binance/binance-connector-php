<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class AutoInvestSourceAssetListTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testAutoInvestSourceAssetListThrowsExceptionWithoutUsageType()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->autoInvestSourceAssetList('');
    }

    public function testAutoInvestSourceAssetList()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/lending/auto-invest/source-asset/list'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'usageType' => 'RECURRING',
                'targetAsset' => 'BTC',
                'indexId' => '1',
                'flexibleAllowedToUse' => 'true',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->autoInvestSourceAssetList('RECURRING', [
            'targetAsset' => 'BTC',
            'indexId' => 1,
            'flexibleAllowedToUse' => true,
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
