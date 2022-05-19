<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class SavingsChangeDailyPositionTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testSavingsChangeDailyPositionThrowsExceptionWithoutProjectId()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->savingsChangeDailyPosition('', 1);
    }

    public function testSavingsChangeDailyPosition()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/lending/positionChanged'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'projectId' => '1234',
                'lot' => '1',
                'positionId' => '100',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->savingsChangeDailyPosition('1234', 1, [
            'positionId' => 100,
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
