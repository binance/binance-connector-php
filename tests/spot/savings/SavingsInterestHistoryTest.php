<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class SavingsInterestHistoryTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testSavingsInterestHistoryThrowsExceptionWithoutLendingType()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->savingsInterestHistory('');
    }

    public function testSavingsInterestHistory()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/lending/union/interestHistory'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'lendingType' => 'DAILY',
                'asset' => 'BNB',
                'current' => '1',
                'size' => '100',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->savingsInterestHistory('DAILY', [
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
