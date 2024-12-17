<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class SimpleEarnSetFlexibleAutoSubscribeTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testSimpleEarnSetFlexibleAutoSubscribeThrowsExceptionWithoutProductId()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->simpleEarnSetFlexibleAutoSubscribe('', true);
    }

    public function testSimpleEarnSetFlexibleAutoSubscribe()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/simple-earn/flexible/setAutoSubscribe'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'productId' => '1',
                'autoSubscribe' => 'true',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->simpleEarnSetFlexibleAutoSubscribe('1', true, [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
