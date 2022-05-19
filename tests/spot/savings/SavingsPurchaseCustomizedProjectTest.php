<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class SavingsPurchaseCustomizedProjectTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testSavingsPurchaseCustomizedProjectThrowsExceptionWithoutProjectId()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->savingsPurchaseCustomizedProject('', 1);
    }

    public function testSavingsPurchaseCustomizedProject()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/lending/customizedFixed/purchase'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'projectId' => '1234',
                'lot' => '1',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->savingsPurchaseCustomizedProject('1234', 1, [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
