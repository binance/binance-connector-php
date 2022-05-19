<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class SavingsPurchaseFlexibleProductTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testSavingsPurchaseFlexibleProductThrowsExceptionWithoutProductId()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->savingsPurchaseFlexibleProduct('', 1.01);
    }

    public function testSavingsPurchaseFlexibleProduct()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/lending/daily/purchase'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'productId' => '1234',
                'amount' => '1.01',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->savingsPurchaseFlexibleProduct('1234', 1.01, [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
