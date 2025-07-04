<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class MiningExtraBonusListTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testMiningExtraBonusListThrowsExceptionWithoutAlgo()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->miningExtraBonusList('', 'username');
    }

    public function testMiningExtraBonusListThrowsExceptionWithoutUserName()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->miningExtraBonusList('sha256', '');
    }

    public function testMiningExtraBonusList()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/mining/payment/other'))
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

        $response = $this->spotClient->miningExtraBonusList('sha256', 'username', [
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
