<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class SubAccountToggleIpRestrictionTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testSubAccountToggleIpRestrictionThrowsExceptionWithoutEmail()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->subAccountToggleIpRestriction('', 'subAccountApiKey', true);
    }

    public function testSubAccountToggleIpRestrictionThrowsExceptionWithoutSubAccountApiKey()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->subAccountToggleIpRestriction('testaccount@email.com', '', true);
    }

    public function testSubAccountToggleIpRestriction()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/sub-account/subAccountApi/ipRestriction'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'email' => 'testaccount@email.com',
                'subAccountApiKey' => 'subAccountApiKey',
                'ipRestrict' => 'true',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->subAccountToggleIpRestriction('testaccount@email.com', 'subAccountApiKey', true, [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
