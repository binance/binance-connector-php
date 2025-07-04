<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class MiningWorkerListTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testMiningWorkerListThrowsExceptionWithoutAlgo()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->miningWorkerList('', 'username');
    }

    public function testMiningWorkerListThrowsExceptionWithoutUserName()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->miningWorkerList('sha256', '');
    }

    public function testMiningWorkerList()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/mining/worker/list'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'algo' => 'sha256',
                'userName' => 'username',
                'pageIndex' => '2',
                'sort' => '0',
                'sortColumn' => '1',
                'workerStatus' => '2',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->miningWorkerList('sha256', 'username', [
            'pageIndex' => 2,
            'sort' => 0,
            'sortColumn' => 1,
            'workerStatus' => 2,
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
