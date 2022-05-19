<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class FiatDepositWithdrawHistoryTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testFiatDepositWithdrawHistoryThrowsExceptionWithoutTransactionType()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->fiatDepositWithdrawHistory('');
    }

    public function testFiatDepositWithdrawHistory()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/fiat/orders'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'transactionType' => '0',
                'beginTime' => '1626144956000',
                'endTime' => '1640995200000',
                'page' => '1',
                'rows' => '300',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->fiatDepositWithdrawHistory('0', [
            'beginTime' => 1626144956000,
            'endTime' => 1640995200000,
            'page' => 1,
            'rows' => 300,
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
