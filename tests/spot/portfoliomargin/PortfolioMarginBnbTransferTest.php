<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;
use Binance\Exception\InvalidArgumentException;

class PortfolioMarginBnbTransferTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testPortfolioMarginBnbTransferThrowsExceptionWithoutAmount()
    {
        $this->expectException(InvalidArgumentException::class);
        $response = $this->spotClient->portfolioMarginBnbTransfer(0.0, 'TO_UM');
    }

    public function testPortfolioMarginBnbTransferThrowsExceptionWithoutTransferSide()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->portfolioMarginBnbTransfer(1.0, '');
    }

    public function testPortfolioMarginBnbTransfer()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/portfolio/bnb-transfer'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'amount' => '1.01',
                'transferSide' => 'TO_UM',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->portfolioMarginBnbTransfer(1.01, 'TO_UM', [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
