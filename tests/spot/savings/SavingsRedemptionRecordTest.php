<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class SavingsRedemptionRecordTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testSavingsRedemptionRecordThrowsExceptionWithoutLendingType()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->savingsRedemptionRecord('');
    }

    public function testSavingsRedemptionRecord()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/lending/union/redemptionRecord'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'lendingType' => 'DAILY',
                'asset' => 'BNB',
                'current' => '1',
                'size' => '100',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->savingsRedemptionRecord('DAILY', [
            'asset' => 'BNB',
            'current' => 1,
            'size' => 100,
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
