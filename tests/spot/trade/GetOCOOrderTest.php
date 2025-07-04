<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;

class GetOcoOrderTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testGetOcoOrder()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/api/v3/orderList'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'orderListId' => '11',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->getOcoOrder([
            'orderListId' => 11,
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
