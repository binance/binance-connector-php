<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class SubAccountFuturesAssetTransferHistoryTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testSubAccountFuturesAssetTransferHistoryThrowsExceptionWithoutEmail()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->subAccountFuturesAssetTransferHistory('', 2);
    }

    public function testSubAccountFuturesAssetTransferHistory()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/sub-account/futures/internalTransfer'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'email' => 'testaccount@email.com',
                'futuresType' => '2',
                'startTime' => '1640995200000',
                'endTime' => '1640995200000',
                'page' => '1',
                'limit' => '123',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->subAccountFuturesAssetTransferHistory('testaccount@email.com', 2, [
            'startTime' => 1640995200000,
            'endTime' => 1640995200000,
            'page' => 1,
            'limit' => 123,
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
