<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class SubAccountCreateVirtualAccountTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testSubAccountCreateVirtualAccountThrowsExceptionWithoutSubAccountString()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->subAccountCreateVirtualAccount('');
    }

    public function testSubAccountCreateVirtualAccount()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/sub-account/virtualSubAccount'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'subAccountString' => 'testaccount',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->subAccountCreateVirtualAccount('testaccount', [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
