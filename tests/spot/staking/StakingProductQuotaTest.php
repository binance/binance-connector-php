<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class StakingProductQuotaTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testStakingProductQuotaThrowsExceptionWithoutProduct()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->stakingProductQuota('', 'Axs*90');
    }

    public function testStakingProductQuotaThrowsExceptionWithoutProductId()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->stakingProductQuota('STAKING', '');
    }

    public function testStakingProductQuota()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/staking/personalLeftQuota'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'product' => 'STAKING',
                'productId' => 'Axs*90'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->stakingProductQuota('STAKING', 'Axs*90', [

        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
