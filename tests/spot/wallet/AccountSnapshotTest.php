<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class AccountSnapshotTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testAccountSnapshotThrowsExceptionWithoutType()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->accountSnapshot('');
    }

    public function testAccountSnapshot()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/accountSnapshot'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'type' => 'SPOT',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->accountSnapshot('SPOT', [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
