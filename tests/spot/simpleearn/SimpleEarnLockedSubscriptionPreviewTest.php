<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class SimpleEarnLockedSubscriptionPreviewTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testSimpleEarnLockedSubscriptionPreviewThrowsExceptionWithoutProjectId()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->simpleEarnLockedSubscriptionPreview('', 1.01);
    }

    public function testSimpleEarnLockedSubscriptionPreview()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/simple-earn/locked/subscriptionPreview'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'projectId' => '1',
                'amount' => '1.01',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->simpleEarnLockedSubscriptionPreview('1', 1.01, [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
