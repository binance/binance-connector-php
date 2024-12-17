<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class SimpleEarnSubscribeFlexibleProductTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testSimpleEarnSubscribeFlexibleProductThrowsExceptionWithoutProductId()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->simpleEarnSubscribeFlexibleProduct('', 1.01);
    }

    public function testSimpleEarnSubscribeFlexibleProduct()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/simple-earn/flexible/subscribe'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'productId' => '1',
                'amount' => '1.01',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->simpleEarnSubscribeFlexibleProduct('1', 1.01, [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
