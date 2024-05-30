<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class DualInvestmentListTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testDualInvestmentListThrowsExceptionWithoutOptionType()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->dualInvestmentList('', 'BNB', 'USDT');
    }

    public function testDualInvestmentListThrowsExceptionWithoutExercisedCoin()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->dualInvestmentList('CALL', '', 'USDT');
    }

    public function testDualInvestmentListThrowsExceptionWithoutInvestCoin()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->dualInvestmentList('CALL', 'BNB', '');
    }

    public function testDualInvestmentList()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/dci/product/list'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'optionType' => 'CALL',
                'exercisedCoin' => 'BNB',
                'investCoin' => 'USDT',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->dualInvestmentList('CALL', 'BNB', 'USDT', [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
