<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class SimpleEarnFlexibleRewardsHistoryTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testSimpleEarnFlexibleRewardsHistoryThrowsExceptionWithoutType()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->simpleEarnFlexibleRewardsHistory('');
    }

    public function testSimpleEarnFlexibleRewardsHistory()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/simple-earn/flexible/history/rewardsRecord'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'type' => 'ALL'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->simpleEarnFlexibleRewardsHistory('ALL');

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
