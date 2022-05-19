<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class StakingPurchaseProductTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testStakingPurchaseProductThrowsExceptionWithoutProduct()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->stakingPurchaseProduct('', 'Axs*90', 10.1);
    }

    public function testStakingPurchaseProductThrowsExceptionWithoutProductId()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->stakingPurchaseProduct('STAKING', '', 10.1);
    }

    public function testStakingPurchaseProduct()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/staking/purchase'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'product' => 'STAKING',
                'productId' => 'Axs*90',
                'amount' => '10.1',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->stakingPurchaseProduct('STAKING', 'Axs*90', 10.1, [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
