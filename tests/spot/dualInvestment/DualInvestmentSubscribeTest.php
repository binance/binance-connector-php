<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;
use Binance\Exception\InvalidArgumentException;

class DualInvestmentSubscribeTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testDualInvestmentSubscribeThrowsExceptionWithoutId()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->dualInvestmentSubscribe('', '8257205859', 1.01, 'STANDARD');
    }

    public function testDualInvestmentSubscribeThrowsExceptionWithoutOrderId()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->dualInvestmentSubscribe('741590', '', 1.01, 'STANDARD');
    }

    public function testDualInvestmentSubscribeThrowsExceptionWithoutDepositAmount()
    {
        $this->expectException(InvalidArgumentException::class);
        $response = $this->spotClient->dualInvestmentSubscribe('741590', '8257205859', 0.0, 'STANDARD');
    }

    public function testDualInvestmentSubscribeThrowsExceptionWithoutAutoCompoundPlan()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->dualInvestmentSubscribe('741590', '8257205859', 1.01, '');
    }

    public function testDualInvestmentSubscribe()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/dci/product/subscribe'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'id' => '741590',
                'orderId' => '8257205859',
                'depositAmount' => '1.01',
                'autoCompoundPlan' => 'STANDARD',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->dualInvestmentSubscribe('741590', '8257205859', 1.01, 'STANDARD', [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
