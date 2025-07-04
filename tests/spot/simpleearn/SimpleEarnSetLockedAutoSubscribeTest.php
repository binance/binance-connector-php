<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class SimpleEarnSetLockedAutoSubscribeTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testSimpleEarnSetLockedAutoSubscribeThrowsExceptionWithoutPositionId()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->simpleEarnSetLockedAutoSubscribe('', true);
    }

    public function testSimpleEarnSetLockedAutoSubscribe()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/simple-earn/locked/setAutoSubscribe'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'positionId' => '1',
                'autoSubscribe' => 'true',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->simpleEarnSetLockedAutoSubscribe('1', true, [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
