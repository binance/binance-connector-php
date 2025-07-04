<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class RenewListenKeyTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testRenewListenKeyThrowsExceptionWithoutListenKey()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->renewListenKey('');
    }

    public function testRenewListenKey()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/api/v3/userDataStream'))
            ->withMethod('PUT')
            ->withQueryParams(new Expect\ArrayEquals([
                'listenKey' => 'listen-key'
            ]))
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->renewListenKey('listen-key');

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
