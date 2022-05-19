<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class BlvtSubscribeTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testBlvtSubscribeThrowsExceptionWithoutTokenName()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->blvtSubscribe('', 1.01);
    }

    public function testBlvtSubscribe()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/blvt/subscribe'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'tokenName' => 'BTCDOWN',
                'cost' => '1.01',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->blvtSubscribe('BTCDOWN', 1.01, [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
