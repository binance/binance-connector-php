<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class SubAccountIpRestrictionTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testSubAccountIpRestrictionThrowsExceptionWithoutEmail()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->subAccountIpRestriction('', 'subAccountApiKey');
    }

    public function testSubAccountIpRestrictionThrowsExceptionWithoutSubAccountApiKey()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->subAccountIpRestriction('testaccount@email.com', '');
    }

    public function testSubAccountIpRestriction()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/sub-account/subAccountApi/ipRestriction'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'email' => 'testaccount@email.com',
                'subAccountApiKey' => 'subAccountApiKey',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->subAccountIpRestriction('testaccount@email.com', 'subAccountApiKey', [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
