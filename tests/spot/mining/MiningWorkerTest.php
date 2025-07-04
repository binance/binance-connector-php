<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class MiningWorkerTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testMiningWorkerThrowsExceptionWithoutAlgo()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->miningWorker('', 'username', 'workername');
    }

    public function testMiningWorkerThrowsExceptionWithoutUserName()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->miningWorker('sha256', '', 'workername');
    }

    public function testMiningWorkerThrowsExceptionWithoutWorkerName()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->miningWorker('sha256', 'username', '');
    }

    public function testMiningWorker()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/mining/worker/detail'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'algo' => 'sha256',
                'userName' => 'username',
                'workerName' => 'workername',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->miningWorker('sha256', 'username', 'workername', [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
