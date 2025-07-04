<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class SubAccountAddIpListTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testSubAccountAddIpListThrowsExceptionWithoutEmail()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->subAccountAddIpList('', 'subAccountApiKey', '000.000.000.000');
    }

    public function testSubAccountAddIpListThrowsExceptionWithoutSubAccountApiKey()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->subAccountAddIpList('testaccount@email.com', '', '000.000.000.000');
    }

    public function testSubAccountAddIpListThrowsExceptionWithoutIpAddress()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->subAccountAddIpList('testaccount@email.com', 'subAccountApiKey', '');
    }

    public function testSubAccountAddIpList()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/sub-account/subAccountApi/ipRestriction/ipList'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'email' => 'testaccount@email.com',
                'subAccountApiKey' => 'subAccountApiKey',
                'ipAddress' => '000.000.000.000',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->subAccountAddIpList('testaccount@email.com', 'subAccountApiKey', '000.000.000.000', [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
