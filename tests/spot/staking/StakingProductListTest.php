<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class StakingProductListTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testStakingProductListThrowsExceptionWithoutProduct()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->stakingProductList('');
    }

    public function testStakingProductList()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/staking/productList'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'product' => 'STAKING',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->stakingProductList('STAKING', [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
