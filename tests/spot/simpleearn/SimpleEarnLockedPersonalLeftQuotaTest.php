<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class SimpleEarnLockedPersonalLeftQuotaTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testSimpleEarnLockedPersonalLeftQuotaThrowsExceptionWithoutProjectId()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->simpleEarnLockedPersonalLeftQuota('');
    }

    public function testSimpleEarnLockedPersonalLeftQuota()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/simple-earn/locked/personalLeftQuota'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'projectId' => '1',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->simpleEarnLockedPersonalLeftQuota('1', [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
