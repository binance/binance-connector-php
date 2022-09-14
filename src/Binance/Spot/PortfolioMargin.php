<?php

namespace Binance\Spot;

trait PortfolioMargin
{
    /**
     * Get Portfolio Margin Account Info (USER_DATA)
     *
     * GET /sapi/v1/portfolio/account
     *
     * Weight(IP): 1
     *
     * @param array $options
     */
    public function portfolioMarginAccount(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/portfolio/account', $options);
    }

    /**
     * Portfolio Margin Collateral Rate (MARKET_DATA)
     *
     * GET /sapi/v1/portfolio/collateralRate
     *
     * Portfolio Margin Collateral Rate.
     *
     * Weight(IP): 50
     */
    public function portfolioMarginCollateralRate()
    {
        return $this->publicRequest('GET', '/sapi/v1/portfolio/collateralRate');
    }

    /**
     * Query Portfolio Margin Bankruptcy Loan Amount (USER_DATA)
     *
     * GET /sapi/v1/portfolio/pmLoan
     *
     * Query Portfolio Margin Bankruptcy Loan Amount.
     *
     * Weight(UID): 500
     *
     * @param array $options
     */
    public function portfolioMarginBankruptcyLoanAmount(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/portfolio/pmLoan', $options);
    }

    /**
     * Portfolio Margin Bankruptcy Loan Repay (USER_DATA)
     *
     * POST /sapi/v1/portfolio/repay
     *
     * Repay Portfolio Margin Bankruptcy Loan.
     *
     * Weight(UID): 3000
     *
     * @param array $options
     */
    public function portfolioMarginBankruptcyLoanRepay(array $options = [])
    {
        return $this->signRequest('POST', '/sapi/v1/portfolio/repay', $options);
    }
}
