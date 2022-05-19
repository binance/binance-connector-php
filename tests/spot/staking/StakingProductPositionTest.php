<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class StakingProductPositionTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testStakingProductPositionThrowsExceptionWithoutProduct()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->stakingProductPosition('');
    }

    public function testStakingProductPosition()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/staking/position'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'product' => 'STAKING',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->stakingProductPosition('STAKING', [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
