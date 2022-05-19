<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class SavingsPurchaseRecordTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testSavingsPurchaseRecordThrowsExceptionWithoutLendingType()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->savingsPurchaseRecord('');
    }

    public function testSavingsPurchaseRecord()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/lending/union/purchaseRecord'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'lendingType' => 'DAILY',
                'asset' => 'BNB',
                'current' => '1',
                'size' => '100',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->savingsPurchaseRecord('DAILY', [
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
