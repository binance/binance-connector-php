<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class MarginCloseListenKeyTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testMarginCloseListenKeyThrowsExceptionWithoutListenKey()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->marginCloseListenKey('');
    }

    public function testMarginCloseListenKey()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/userDataStream'))
            ->withMethod('DELETE')
            ->withQueryParams(new Expect\ArrayEquals([
                'listenKey' => 'listen-key'
            ]))
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->marginCloseListenKey('listen-key');

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
