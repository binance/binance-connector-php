<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class ManagedSubAccountSnapshotTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testManagedSubAccountSnapshotThrowsExceptionWithoutEmail()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->managedSubAccountSnapshot('', 'SPOT');
    }

    public function testManagedSubAccountSnapshotThrowsExceptionWithoutType()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->managedSubAccountSnapshot('testaccount@email.com', '');
    }

    public function testManagedSubAccountSnapshot()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/managed-subaccount/accountSnapshot'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'email' => 'testaccount@email.com',
                'type' => 'SPOT',
                'startTime' => '1640995200000',
                'endTime' => '1640995200000',
                'limit' => '123',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->managedSubAccountSnapshot('testaccount@email.com', 'SPOT', [
            'startTime' => 1640995200000,
            'endTime' => 1640995200000,
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
