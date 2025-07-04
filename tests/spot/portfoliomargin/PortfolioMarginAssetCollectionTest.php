<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class PortfolioMarginAssetCollectionTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testPortfolioMarginAssetCollectionThrowsExceptionWithoutAsset()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->portfolioMarginAssetCollection('');
    }

    public function testPortfolioMarginAssetCollection()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/portfolio/asset-collection'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'asset' => 'BNB',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->portfolioMarginAssetCollection('BNB', [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
