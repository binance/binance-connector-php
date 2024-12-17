<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class AutoInvestTargetAssetRoiDataTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testAutoInvestTargetAssetRoiDataThrowsExceptionWithoutTargetAsset()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->autoInvestTargetAssetRoiData('', 'FIVE_YEAR');
    }

    public function testAutoInvestTargetAssetRoiDataThrowsExceptionWithoutHisRoiType()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->autoInvestTargetAssetRoiData('BTC', '');
    }

    public function testAutoInvestTargetAssetRoiData()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/lending/auto-invest/target-asset/roi/list'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'targetAsset' => 'BTC',
                'hisRoiType' => 'FIVE_YEAR',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->autoInvestTargetAssetRoiData('BTC', 'FIVE_YEAR', [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
