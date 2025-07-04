<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;

class SubAccountFuturesAccountSummaryV2Test extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testSubAccountFuturesAccountSummaryV2()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v2/sub-account/futures/accountSummary'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'futuresType' => '1',
                'page' => '1',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->subAccountFuturesAccountSummaryV2(1, [
            'page' => 1,
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
