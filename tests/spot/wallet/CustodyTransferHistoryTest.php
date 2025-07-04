<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class CustodyTransferHistoryTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testCustodyTransferHistoryThrowsExceptionWithoutEmail()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->custodyTransferHistory('', 1640995200000, 1640995200000);
    }

    public function testCustodyTransferHistory()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/asset/custody/transfer-history'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'email' => 'testaccount@email.com',
                'startTime' => '1640995200000',
                'endTime' => '1640995200000',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->custodyTransferHistory('testaccount@email.com', 1640995200000, 1640995200000, [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
