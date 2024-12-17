<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;

class AutoInvestSubscriptionTransactionHistoryTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testAutoInvestSubscriptionTransactionHistory()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/lending/auto-invest/history/list'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'size' => '100',
                'current' => '1',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->autoInvestSubscriptionTransactionHistory([
            'size' => 100,
            'current' => 1,
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
