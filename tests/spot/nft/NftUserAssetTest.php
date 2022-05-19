<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;

class NftUserAssetTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testNftUserAsset()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/nft/user/getAsset'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'limit' => '50',
                'page' => '1',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->nftUserAsset([
            'limit' => 50,
            'page' => 1,
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
