<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class SubAccountEnableOptionsForSubaccountTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testSubAccountEnableOptionsForSubaccountThrowsExceptionWithoutEmail()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->subAccountEnableOptionsForSubaccount('');
    }

    public function testSubAccountEnableOptionsForSubaccount()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/sub-account/eoptions/enable'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'email' => 'test@test',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->subAccountEnableOptionsForSubaccount('test@test', [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
