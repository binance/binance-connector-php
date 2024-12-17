<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class SubaccountApiUpdateIpRestrictionTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testSubaccountApiUpdateIpRestrictionThrowsExceptionWithoutEmail()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->subAccountApiUpdateIpRestriction('', 'apikey', '1');
    }

    public function testSubaccountApiUpdateIpRestrictionThrowsExceptionWithoutSubAccountApiKey()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->subAccountApiUpdateIpRestriction('test@test', '', '1');
    }

    public function testSubaccountApiUpdateIpRestrictionThrowsExceptionWithoutStatus()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->subAccountApiUpdateIpRestriction('test@test', 'apikey', '');
    }

    public function testSubaccountApiUpdateIpRestriction()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v2/sub-account/subAccountApi/ipRestriction'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'email' => 'test@test',
                'subAccountApiKey' => 'apikey',
                'status' => '1',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->subAccountApiUpdateIpRestriction('test@test', 'apikey', '1', [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
