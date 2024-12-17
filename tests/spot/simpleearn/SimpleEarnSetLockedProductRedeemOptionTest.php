<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class SimpleEarnSetLockedProductRedeemOptionTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testSimpleEarnSetLockedProductRedeemOptionThrowsExceptionWithoutPositionId()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->simpleEarnSetLockedProductRedeemOption('', '');
    }

    public function testSimpleEarnSetLockedProductRedeemOption()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/simple-earn/locked/setRedeemOption'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'positionId' => '1',
                'redeemTo' => 'SPOT',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->simpleEarnSetLockedProductRedeemOption('1', 'SPOT', [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
