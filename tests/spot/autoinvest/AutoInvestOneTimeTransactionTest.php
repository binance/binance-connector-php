<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;

class AutoInvestOneTimeTransactionTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testAutoInvestOneTimeTransactionThrowsExceptionWithoutSourceType()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->autoInvestOneTimeTransaction('', 10.1, 'USDT');
    }

    public function testAutoInvestOneTimeTransactionThrowsExceptionWithoutSourceAsset()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->autoInvestOneTimeTransaction('MAIN_SITE', 10.1, '');
    }

    public function testAutoInvestOneTimeTransaction()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/lending/auto-invest/one-off'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'sourceType' => 'MAIN_SITE',
                'requestId' => 'TR12354859',
                'subscriptionAmount' => '10.1',
                'sourceAsset' => 'USDT',
                'flexibleAllowedToUse' => 'true',
                'planId' => '12345',
                'indexId' => '1',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->autoInvestOneTimeTransaction('MAIN_SITE', 10.1, 'USDT', [
            'requestId' => 'TR12354859',
            'flexibleAllowedToUse' => true,
            'planId' => 12345,
            'indexId' => 1,
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
