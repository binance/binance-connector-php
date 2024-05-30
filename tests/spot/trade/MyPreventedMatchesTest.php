<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class MyPreventedMatchesTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testMyPreventedMatchesThrowsExceptionWithoutSymbol()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->myPreventedMatches('');
    }

    public function testMyPreventedMatches()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/api/v3/myPreventedMatches'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'symbol' => 'BNBUSDT',
                'orderId' => '11',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->myPreventedMatches('BNBUSDT', [
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
