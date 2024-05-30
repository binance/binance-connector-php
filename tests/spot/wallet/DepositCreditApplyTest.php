<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;

class DepositCreditApplyTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testDepositCreditApply()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/capital/deposit/credit-apply'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'subUserId' => '500',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->depositCreditApply([
            'subUserId' => '500',
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
