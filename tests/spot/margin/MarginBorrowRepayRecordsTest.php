<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class MarginBorrowRepayRecordsTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testMarginBorrowRepayRecordsThrowsExceptionWithoutType()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->marginBorrowRepayRecords('');
    }

    public function testMarginBorrowRepayRecords()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/margin/borrow-repay'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'type' => 'BORROW',
                'asset' => 'BNB',
                'recvWindow' => '5000',
                'startTime' => '1563438204000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->marginBorrowRepayRecords('BORROW', [
            'asset' => 'BNB',
            'recvWindow' => 5000,
            'startTime' => 1563438204000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
