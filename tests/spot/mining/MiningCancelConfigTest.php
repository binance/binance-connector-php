<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class MiningCancelConfigTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testMiningCancelConfigThrowsExceptionWithoutUserName()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->miningCancelConfig(168, '');
    }

    public function testMiningCancelConfig()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/mining/hash-transfer/config/cancel'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'configId' => '168',
                'userName' => 'username',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->miningCancelConfig(168, 'username', [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
