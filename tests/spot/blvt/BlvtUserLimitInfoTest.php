<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;

class BlvtUserLimitInfoTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testBlvtUserLimitInfo()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/blvt/userLimit'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'tokenName' => 'BTCUP',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->blvtUserLimitInfo([
            'tokenName' => 'BTCUP',
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
