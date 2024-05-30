<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class DualInvestmentEditStatusTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testDualInvestmentEditStatusThrowsExceptionWithoutPositionId()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->dualInvestmentEditStatus('');
    }

    public function testDualInvestmentEditStatus()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/dci/product/auto_compound/edit-status'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'positionId' => '123456789',
                'AutoCompoundPlan' => 'STANDARD',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->dualInvestmentEditStatus('123456789', [
            'AutoCompoundPlan' => 'STANDARD',
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
