<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class MarginManualLiquidationTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testMarginManualLiquidationThrowsExceptionWithoutType()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->marginManualLiquidation('');
    }

    public function testMarginManualLiquidation()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/margin/manual-liquidation'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'type' => 'MARGIN',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->marginManualLiquidation('MARGIN', [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
