<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class NextHourlyInterestRateTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testNextHourlyInterestRateThrowsExceptionWithoutAssets()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->nextHourlyInterestRate('', true);
    }

    public function testNextHourlyInterestRate()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/margin/next-hourly-interest-rate'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'assets' => 'BNB',
                'isIsolated' => 'true'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->nextHourlyInterestRate('BNB', true);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
