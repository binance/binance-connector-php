<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class MyAllocationsTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testMyAllocationsThrowsExceptionWithoutSymbol()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->myAllocations('');
    }

    public function testMyAllocations()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/api/v3/myAllocations'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'symbol' => 'BNBUSDT',
                'orderId' => '11',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->myAllocations('BNBUSDT', [
            'orderId' => 11,
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
