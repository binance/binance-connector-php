<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class GiftCardTokenLimitTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testGiftCardTokenLimitThrowsExceptionWithoutBaseToken()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->giftCardTokenLimit('');
    }

    public function testGiftCardTokenLimit()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/giftcard/buyCode/token-limit'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'baseToken' => 'BUSD',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->giftCardTokenLimit('BUSD', [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
