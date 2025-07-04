<?php

namespace Binance\Spot;

use Binance\Util\Strings;
use Binance\Exception\MissingArgumentException;
use Binance\Exception\InvalidArgumentException;

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
     * Portfolio Margin Pro Tiered Collateral Rate (USER_DATA)
     *
     * GET /sapi/v2/portfolio/collateralRate
     *
     * Portfolio Margin PRO Tiered Collateral Rate
     *
     * Weight(IP): 50
     *
     * @param array $options
     */
    public function portfolioMarginProTieredCollateralRate(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v2/portfolio/collateralRate', $options);
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

    /**
     * Query Classic Portfolio Margin Negative Balance Interest History (USER_DATA)
     *
     * GET /sapi/v1/portfolio/interest-history
     *
     * Query interest history of negative balance for portfolio margin.
     *
     * Weight(IP): 50
     *
     * @param array $options
     */
    public function portfolioMarginInterestHistory(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/portfolio/interest-history', $options);
    }

    /**
     * Get Portfolio Margin Pro SPAN Account Info (USER_DATA)
     *
     * GET /sapi/v2/portfolio/account
     *
     * Get Portfolio Margin Pro SPAN account info
     *
     * Weight(IP): 5
     *
     * @param array $options
     */
    public function portfolioMarginProSpanAccount(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v2/portfolio/account', $options);
    }

    /**
     * Get Portfolio Margin Pro Account Balance (USER_DATA)
     *
     * GET /sapi/v1/portfolio/balance
     *
     * Query Portfolio Margin Pro account balance
     *
     * Weight(IP): 20
     *
     * @param array $options
     */
    public function portfolioMarginProBalance(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/portfolio/balance', $options);
    }

    /**
     * Query Portfolio Margin Asset Index Price (MARKET_DATA)
     *
     * GET /sapi/v1/portfolio/asset-index-price
     *
     * Query Portfolio Margin Asset Index Price
     *
     * Weight(IP): 1 if send asset or 50 if not send asset
     *
     * @param array $options
     */
    public function portfolioMarginAssetIndexPrice(array $options = [])
    {
        return $this->publicRequest('GET', '/sapi/v1/portfolio/asset-index-price', $options);
    }

    /**
     * Fund Auto-collection (USER_DATA)
     *
     * POST /sapi/v1/portfolio/auto-collection
     *
     * Transfers all assets from Futures Account to Margin account
     *
     * Weight(IP): 1500
     *
     * @param array $options
     */
    public function portfolioMarginAutoCollection(array $options = [])
    {
        return $this->signRequest('POST', '/sapi/v1/portfolio/auto-collection', $options);
    }

    /**
     * Fund Collection by Asset(USER_DATA)
     *
     * POST /sapi/v1/portfolio/asset-collection
     *
     * Transfers specific asset from Futures Account to Margin account
     * - The BNB transfer is not be supported
     *
     * Weight(IP): 60
     *
     * @param string $asset
     * @param array $options
     */
    public function portfolioMarginAssetCollection(string $asset, array $options = [])
    {
        if (Strings::isEmpty($asset)) {
            throw new MissingArgumentException('asset');
        }

        return $this->signRequest('POST', '/sapi/v1/portfolio/asset-collection', array_merge(
            $options,
            [
                'asset' => $asset
            ]
        ));
    }

    /**
     * BNB transfer(USER_DATA)
     *
     * POST /sapi/v1/portfolio/bnb-transfer
     *
     * BNB transfer can be between Margin Account and USDM Account
     * - You can only use this function 2 times per 10 minutes in a rolling manner
     *
     * Weight(IP): 1500
     *
     * @param float $amount
     * @param string $transferSide
     * @param array $options
     */
    public function portfolioMarginBnbTransfer(float $amount, string $transferSide, array $options = [])
    {
        if ($amount <= 0.0) {
            throw new InvalidArgumentException('amount', $amount, 'greater than 0');
        }
        if (Strings::isEmpty($transferSide)) {
            throw new MissingArgumentException('transferSide');
        }

        return $this->signRequest('POST', '/sapi/v1/portfolio/bnb-transfer', array_merge(
            $options,
            [
                'amount' => $amount,
                'transferSide' => $transferSide
            ]
        ));
    }

    /**
     * Change Auto-repay-futures Status (TRADE)
     *
     * POST /sapi/v1/portfolio/repay-futures-switch
     *
     * Change Auto-repay-futures Status
     *
     * Weight(IP): 1500
     *
     * @param string $autoRepay
     * @param array $options
     */
    public function portfolioMarginRepayFuturesSwitch(string $autoRepay, array $options = [])
    {
        if (Strings::isEmpty($autoRepay)) {
            throw new MissingArgumentException('autoRepay');
        }

        return $this->signRequest('POST', '/sapi/v1/portfolio/repay-futures-switch', array_merge(
            $options,
            [
                'autoRepay' => $autoRepay
            ]
        ));
    }

    /**
     * Get Auto-repay-futures Status (USER_DATA)
     *
     * GET /sapi/v1/portfolio/repay-futures-switch
     *
     * Query Auto-repay-futures Status
     *
     * Weight(IP): 30
     *
     * @param array $options
     */
    public function portfolioMarginRepayFuturesStatus(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/portfolio/repay-futures-switch', $options);
    }

    /**
     * Repay futures Negative Balance (USER_DATA)
     *
     * POST /sapi/v1/portfolio/repay-futures-negative-balance
     *
     * Repay futures Negative Balance
     *
     * Weight(IP): 1500
     *
     * @param array $options
     */
    public function portfolioMarginRepayFuturesBalance(array $options = [])
    {
        return $this->signRequest('POST', '/sapi/v1/portfolio/repay-futures-negative-balance', $options);
    }

    /**
     * Get Portfolio Margin Asset Leverage (USER_DATA)
     *
     * GET /sapi/v1/portfolio/margin-asset-leverage
     *
     * Weight(IP): 50
     */
    public function portfolioMarginAssetLeverage()
    {
        return $this->signRequest('GET', '/sapi/v1/portfolio/margin-asset-leverage');
    }
}
