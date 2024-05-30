<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class CommissionRatesTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testCommissionRatesThrowsExceptionWithoutSymbol()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->commissionRates('');
    }

    public function testCommissionRates()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/api/v3/account/commission'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'symbol' => 'BNBUSDT',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->commissionRates('BNBUSDT', [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
