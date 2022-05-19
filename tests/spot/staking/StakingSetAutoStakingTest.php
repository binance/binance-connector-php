<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class StakingSetAutoStakingTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testStakingSetAutoStakingThrowsExceptionWithoutProduct()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->stakingSetAutoStaking('', '1234', 'true');
    }

    public function testStakingSetAutoStakingThrowsExceptionWithoutPositionId()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->stakingSetAutoStaking('STAKING', '', 'true');
    }

    public function testStakingSetAutoStakingThrowsExceptionWithoutRenewable()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->stakingSetAutoStaking('STAKING', '1234', '');
    }

    public function testStakingSetAutoStaking()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/staking/setAutoStaking'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'product' => 'STAKING',
                'positionId' => '1234',
                'renewable' => 'true',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->stakingSetAutoStaking('STAKING', '1234', 'true', [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
