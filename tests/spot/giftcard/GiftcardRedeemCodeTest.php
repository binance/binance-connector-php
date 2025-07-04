<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class GiftCardRedeemCodeTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testGiftCardRedeemCodeThrowsExceptionWithoutCode()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->giftCardRedeemCode('');
    }

    public function testGiftCardRedeemCode()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/giftcard/redeemCode'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'code' => '000000',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->giftCardRedeemCode('000000', [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
