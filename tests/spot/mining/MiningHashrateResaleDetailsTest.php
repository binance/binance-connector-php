<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class MiningHashrateResaleDetailsTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testMiningHashrateResaleDetailsThrowsExceptionWithoutConfigId()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->miningHashrateResaleDetails('', 'username');
    }

    public function testMiningHashrateResaleDetailsThrowsExceptionWithoutUserName()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->miningHashrateResaleDetails('168', '');
    }

    public function testMiningHashrateResaleDetails()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/mining/hash-transfer/profit/details'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'configId' => '168',
                'userName' => 'username',
                'pageIndex' => '2',
                'pageSize' => '20',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->miningHashrateResaleDetails('168', 'username', [
            'pageIndex' => 2,
            'pageSize' => 20,
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
