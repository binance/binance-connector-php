<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class SubAccountEnableLeverageTokenTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testSubAccountEnableLeverageTokenThrowsExceptionWithoutEmail()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->subAccountEnableLeverageToken('', true);
    }

    public function testSubAccountEnableLeverageToken()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/sub-account/blvt/enable'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'email' => 'testaccount@email.com',
                'enableBlvt' => 'true',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->subAccountEnableLeverageToken('testaccount@email.com', true, [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
