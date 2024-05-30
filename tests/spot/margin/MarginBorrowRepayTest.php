<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class MarginBorrowRepayTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testMarginBorrowRepayThrowsExceptionWithoutAsset()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->marginBorrowRepay('', 'TRUE', 'BNBUSDT', '1.0', 'BORROW');
    }

    public function testMarginBorrowRepayThrowsExceptionWithoutIsIsolated()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->marginBorrowRepay('BNB', '', 'BNBUSDT', '1.0', 'BORROW');
    }

    public function testMarginBorrowRepayThrowsExceptionWithoutSymbol()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->marginBorrowRepay('BNB', 'TRUE', '', '1.0', 'BORROW');
    }

    public function testMarginBorrowRepayThrowsExceptionWithoutAmount()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->marginBorrowRepay('BNB', 'TRUE', 'BNBUSDT', '', 'BORROW');
    }

    public function testMarginBorrowRepayThrowsExceptionWithoutType()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->marginBorrowRepay('BNB', 'TRUE', 'BNBUSDT', '1.0', '');
    }

    public function testMarginBorrowRepay()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/margin/borrow-repay'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'asset' => 'BNB',
                'isIsolated' => 'TRUE',
                'symbol' => 'BNBUSDT',
                'amount' => '1.01',
                'type' => 'BORROW',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->marginBorrowRepay('BNB', 'TRUE', 'BNBUSDT', '1.01', 'BORROW', [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
