<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class GiftCardVerifyCodeTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testGiftCardVerifyCodeThrowsExceptionWithoutReferenceNo()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->giftCardVerifyCode('');
    }

    public function testGiftCardVerifyCode()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/giftcard/verify'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'referenceNo' => '000000000000000000',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->giftCardVerifyCode('000000000000000000', [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
