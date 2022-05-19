<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class CloseListenKeyTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testCloseListenKeyThrowsExceptionWithoutListenKey()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->closeListenKey('');
    }

    public function testCloseListenKey()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/api/v3/userDataStream'))
            ->withMethod('DELETE')
            ->withQueryParams(new Expect\ArrayEquals([
                'listenKey' => 'listen-key'
            ]))
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->closeListenKey('listen-key');

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
