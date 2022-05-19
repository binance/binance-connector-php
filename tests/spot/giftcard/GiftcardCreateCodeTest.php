<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class GiftCardCreateCodeTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testGiftCardCreateCodeThrowsExceptionWithoutToken()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->giftCardCreateCode('', 1.01);
    }

    public function testGiftCardCreateCode()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/giftcard/createCode'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'token' => 'BTC',
                'amount' => '1.01',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->giftCardCreateCode('BTC', 1.01, [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
