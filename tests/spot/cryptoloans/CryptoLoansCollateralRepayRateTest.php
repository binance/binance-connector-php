<?php

use Binance\Tests\BaseTestCase;
use Aeris\GuzzleHttpMock\Expect;
use Binance\Exception\MissingArgumentException;
use Binance\Exception\InvalidArgumentException;

class CryptoLoansCollateralRepayRateTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function testCryptoLoansCollateralRepayRateThrowsExceptionWithoutLoanCoin()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->cryptoLoansCollateralRepayRate('', 'BNB', 1000);
    }

    public function testCryptoLoansCollateralRepayRateThrowsExceptionWithoutCollateralCoin()
    {
        $this->expectException(MissingArgumentException::class);
        $response = $this->spotClient->cryptoLoansCollateralRepayRate('BUSD', '', 1000);
    }

    public function testCryptoLoansCollateralRepayRateThrowsExceptionWithoutRepayAmount()
    {
        $this->expectException(InvalidArgumentException::class);
        $response = $this->spotClient->cryptoLoansCollateralRepayRate('BUSD', 'BNB', 0.0);
    }

    public function testCryptoLoansCollateralRepayRate()
    {
        $this->httpMock
            ->shouldReceiveRequest()
            ->withUrl(new Expect\Equals('/sapi/v1/loan/repay/collateral/rate'))
            ->withMethod('GET')
            ->withQueryParams(new Expect\ArrayEquals([
                'loanCoin' => 'BUSD',
                'collateralCoin' => 'BNB',
                'repayAmount' => '1000',
                'recvWindow' => '5000'
            ]), ['timestamp', 'signature'])
            ->andRespondWithJson($this->data, $statusCode = 200);

        $response = $this->spotClient->cryptoLoansCollateralRepayRate('BUSD', 'BNB', 1000, [
            'recvWindow' => 5000
        ]);

        $this->assertEquals($response, $this->data);
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }
}
