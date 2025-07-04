<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;
use Binance\Exception\InvalidArgumentException;

class GiftCardBuyCodeTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testGiftCardBuyCodeThrowsExceptionWithoutBaseToken()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->giftCardBuyCode('', 'BNB', 1.002);
    }

    public function testGiftCardBuyCodeThrowsExceptionWithoutFaceToken()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->giftCardBuyCode('BUSD', '', 1.002);
    }

    public function testGiftCardBuyCodeThrowsExceptionWithoutBaseTokenAmount()
    {
        $this->expectException(InvalidArgumentException::class);
        $response = $this->spotClient->giftCardBuyCode('BUSD', 'BNB', 0.0);
    }

    public function testGiftCardBuyCode()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/giftcard/buyCode'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'baseToken' => 'BUSD',
                'faceToken' => 'BNB',
                'baseTokenAmount' => '1.01',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->giftCardBuyCode('BUSD', 'BNB', 1.01, [
            'recvWindow' => 5000
        ]);


        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
