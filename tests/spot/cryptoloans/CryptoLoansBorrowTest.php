<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;
use Binance\Exception\InvalidArgumentException;

class CryptoLoansBorrowTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testCryptoLoansBorrowThrowsExceptionWithoutLoanCoin()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->cryptoLoansBorrow('', 'BNB', 15);
    }

    public function testCryptoLoansBorrowThrowsExceptionWithoutCollateralCoin()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->cryptoLoansBorrow('BUSD', '', 15);
    }

    public function testCryptoLoansBorrowThrowsExceptionWithoutLoanTerm()
    {
        $this->expectException(InvalidArgumentException::class);
        $response = $this->spotClient->cryptoLoansBorrow('BUSD', 'BNB', 0);
    }

    public function testCryptoLoansBorrow()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/loan/borrow'))
            ->withMethod('POST')
            ->withQueryParams(new Expect\ArrayEquals([
                'loanCoin' => 'BUSD',
                'collateralCoin' => 'BNB',
                'loanTerm' => '15',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->cryptoLoansBorrow('BUSD', 'BNB', 15, [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
