<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;

class BlvtInfoTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testBlvtInfo()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/blvt/tokenInfo'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'tokenName' => 'BTCUP'
            ]))
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->blvtInfo([
            'tokenName' => 'BTCUP'
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
