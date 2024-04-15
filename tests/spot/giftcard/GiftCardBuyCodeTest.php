<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class GiftCardBuyCodeTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testGiftCardBuyCodeThrowsExceptionWithoutReferenceNo()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->giftCardBuyCode('','',1.01);
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
