<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class MiningEarningListTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testMiningEarningListThrowsExceptionWithoutAlgo()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->miningEarningList('', 'username');
    }

    public function testMiningEarningListThrowsExceptionWithoutUserName()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->miningEarningList('sha256', '');
    }

    public function testMiningEarningList()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/mining/payment/list'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'algo' => 'sha256',
                'userName' => 'username',
                'coin' => 'BNB',
                'startDate' => '1640995200000',
                'endDate' => '1640995200000',
                'pageIndex' => '2',
                'pageSize' => '20',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->miningEarningList('sha256', 'username', [
            'coin' => 'BNB',
            'startDate' => 1640995200000,
            'endDate' => 1640995200000,
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
