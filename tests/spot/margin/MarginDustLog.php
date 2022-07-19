<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class MarginDustLogTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testMarginDustLog()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/margin/dribblet'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'startTime' => 1640995200000,
                'endTime' => 1640995200000,
                'recvWindow' => 5000
            ]))
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->marginDustLog([
            'startTime' => 1640995200000,
            'endTime' => 1640995200000,
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
