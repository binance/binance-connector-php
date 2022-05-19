<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class SavingsFlexibleRedemptionQuotaTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testSavingsFlexibleRedemptionQuotaThrowsExceptionWithoutProductId()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->savingsFlexibleRedemptionQuota('', 'FAST');
    }

    public function testSavingsFlexibleRedemptionQuotaThrowsExceptionWithoutType()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->savingsFlexibleRedemptionQuota('1234', '');
    }

    public function testSavingsFlexibleRedemptionQuota()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/lending/daily/userRedemptionQuota'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'productId' => '1234',
                'type' => 'FAST',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->savingsFlexibleRedemptionQuota('1234', 'FAST', [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
