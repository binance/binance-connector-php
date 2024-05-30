<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;

class DualInvestmentPositionsTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testDualInvestmentPositions()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/dci/product/positions'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'status' => 'PENDING',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->dualInvestmentPositions([
            'status' => 'PENDING',
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
