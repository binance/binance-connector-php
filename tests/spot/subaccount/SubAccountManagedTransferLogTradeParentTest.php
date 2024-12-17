<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;

class SubAccountManagedTransferLogTradeParentLogTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testSubAccountManagedTransferLogTradeParent()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/managed-subaccount/queryTransLogForTradeParent'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'email' => 'test@test',
                'startTime' => '1563189166000',
                'endTime' => '1563282766000',
                'page' => '1',
                'limit' => '5',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->subAccountManagedTransferLogTradeParent('test@test', 1563189166000, 1563282766000, 1, 5, [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
