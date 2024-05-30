<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class SwitchConvertCoinTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testSwitchConvertCoinThrowsExceptionWithoutCoin()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->switchConvertCoin('', true);
    }

    public function testSwitchConvertCoin()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/capital/contract/convertible-coins'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'coin' => 'USDC',
                'enable' => 'true',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->SwitchConvertCoin('USDC', true, [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
