<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class SubAccountDeleteIpListTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testSubAccountDeleteIpListThrowsExceptionWithoutEmail()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->subAccountDeleteIpList('', 'subAccountApiKey', '000.000.000.000');
    }

    public function testSubAccountDeleteIpListThrowsExceptionWithoutSubAccountApiKey()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->subAccountDeleteIpList('testaccount@email.com', '', '000.000.000.000');
    }

    public function testSubAccountDeleteIpListThrowsExceptionWithoutIpAddress()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->subAccountDeleteIpList('testaccount@email.com', 'subAccountApiKey', '');
    }

    public function testSubAccountDeleteIpList()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/sub-account/subAccountApi/ipRestriction/ipList'))
            ->withMethod('DELETE')
            ->withQueryParams(new Expect\ArrayEquals([
                'email' => 'testaccount@email.com',
                'subAccountApiKey' => 'subAccountApiKey',
                'ipAddress' => '000.000.000.000',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->subAccountDeleteIpList('testaccount@email.com', 'subAccountApiKey', '000.000.000.000', [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
