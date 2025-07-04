<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;

class SystemStatusTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testSystemStatus()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/system/status'))
            ->withMethod('GET')
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->systemStatus();

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
