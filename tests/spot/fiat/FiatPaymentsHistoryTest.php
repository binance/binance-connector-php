<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;

class FiatPaymentsHistoryTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testFiatPaymentsHistory()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/fiat/payments'))
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

        $response = $this->spotClient->fiatPaymentsHistory(0, [
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
