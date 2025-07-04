<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;

class WithdrawAddressListTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testWithdrawAddressList()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/capital/withdraw/address/list'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->withdrawAddressList();

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
