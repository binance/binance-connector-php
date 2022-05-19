<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class StakingHistoryTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testStakingHistoryThrowsExceptionWithoutProduct()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->stakingHistory('', 'SUBSCRIPTION');
    }

    public function testStakingHistoryThrowsExceptionWithoutTxnType()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->stakingHistory('STAKING', '');
    }

    public function testStakingHistory()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/staking/stakingRecord'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'product' => 'STAKING',
                'txnType' => 'SUBSCRIPTION',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->stakingHistory('STAKING', 'SUBSCRIPTION', [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
