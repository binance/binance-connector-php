<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class MarginRenewListenKeyTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testMarginRenewListenKeyThrowsExceptionWithoutListenKey()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->marginRenewListenKey('');
    }

    public function testMarginRenewListenKey()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/userDataStream'))
            ->withMethod('PUT')
            ->withQueryParams(new Expect\ArrayEquals([
                'listenKey' => 'listen-key'
            ]))
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->marginRenewListenKey('listen-key');

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
