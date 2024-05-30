<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;
use Binance\Exception\InvalidArgumentException;

class NewOrderSorTestTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testNewOrderSorTestThrowsExceptionWithoutSymbol()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->newOrderSorTest('', 'BUY', 'LIMIT', 1.01);
    }

    public function testNewOrderSorTestThrowsExceptionWithoutSide()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->newOrderSorTest('BNBUSDT', '', 'LIMIT', 1.01);
    }

    public function testNewOrderSorTestThrowsExceptionWithoutType()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->newOrderSorTest('BNBUSDT', 'BUY', '', 1.01);
    }

    public function testNewOrderSorTestThrowsExceptionWithoutQuantity()
    {
        $this->expectException(InvalidArgumentException::class);
        $response = $this->spotClient->newOrderSorTest('BNBUSDT', 'BUY', 'LIMIT', 0.0);
    }

    public function testNewOrderSorTest()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/api/v3/sor/order/test'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'symbol' => 'BNBUSDT',
                'side' => 'BUY',
                'type' => 'LIMIT',
                'quantity' => '1.01',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->newOrderSorTest('BNBUSDT', 'BUY', 'LIMIT', 1.01, [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
