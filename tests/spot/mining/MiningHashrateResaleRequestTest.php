<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class MiningHashrateResaleRequestTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testMiningHashrateResaleRequestThrowsExceptionWithoutUserName()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->miningHashrateResaleRequest('', 'sha256', 'username', 100000000);
    }

    public function testMiningHashrateResaleRequestThrowsExceptionWithoutAlgo()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->miningHashrateResaleRequest('username', '', 'username', 100000000);
    }

    public function testMiningHashrateResaleRequestThrowsExceptionWithoutToPoolUser()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->miningHashrateResaleRequest('username', 'sha256', '', 100000000);
    }

    public function testMiningHashrateResaleRequest()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/mining/hash-transfer/config'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'userName' => 'username',
                'algo' => 'sha256',
                'startDate' => '1640995200000',
                'endDate' => '1640995200000',
                'toPoolUser' => 'username',
                'hashRate' => '100000000',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->miningHashrateResaleRequest('username', 'sha256', 'username', 100000000, [
            'startDate' => 1640995200000,
            'endDate' => 1640995200000,
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
