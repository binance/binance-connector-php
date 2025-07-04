<?php

namespace Binance\Spot;

use Binance\Util\Strings;
use Binance\Exception\MissingArgumentException;
use Binance\Exception\InvalidArgumentException;

trait CryptoLoans
{
    /**
     * Get Crypto Loans Income History (USER_DATA)
     *
     * GET /sapi/v1/loan/income
     *
     * - If startTime and endTime are not sent, the recent 7-day data will be returned.
     * - The max interval between startTime and endTime is 30 days.
     *
     * Weight(UID): 6000
     *
     * @param string $asset
     * @param array $options
     */
    public function cryptoLoansIncomeHistory(string $asset, array $options = [])
    {
        if (Strings::isEmpty($asset)) {
            throw new MissingArgumentException('asset');
        }

        return $this->signRequest('GET', '/sapi/v1/loan/income', array_merge(
            $options,
            [
                'asset' => $asset
            ]
        ));
    }

    /**
     * Borrow - Get Loan Borrow History (USER_DATA)
     *
     * GET /sapi/v1/loan/borrow/history
     *
     * - If startTime and endTime are not sent, the recent 90-day data will be returned.
     * - The max interval between startTime and endTime is 180 days.
     *
     * Weight(IP): 400
     *
     * @param array $options
     */
    public function cryptoLoansBorrowHistory(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/loan/borrow/history', $options);
    }

    /**
     * Repay - Get Loan Repayment History (USER_DATA)
     *
     * GET /sapi/v1/loan/repay/history
     *
     * - If startTime and endTime are not sent, the recent 90-day data will be returned.
     * - The max interval between startTime and endTime is 180 days.
     *
     * Weight(IP): 400
     *
     * @param array $options
     */
    public function cryptoLoansRepayHistory(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/loan/repay/history', $options);
    }

    /**
     * Adjust LTV - Get Loan LTV Adjustment History (USER_DATA)
     *
     * GET /sapi/v1/loan/ltv/adjustment/history
     *
     * - If startTime and endTime are not sent, the recent 90-day data will be returned.
     * - The max interval between startTime and endTime is 180 days.
     *
     * Weight(IP): 400
     *
     * @param array $options
     */
    public function cryptoLoansLtvAdjustmentHistory(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/loan/ltv/adjustment/history', $options);
    }

    /**
     * Borrow - Flexible Loan Borrow (TRADE)
     *
     * POST /sapi/v2/loan/flexible/borrow
     *
     * Only available for master account
     *
     * Weight(UID): 6000
     *
     * @param string $loanCoin
     * @param string $collateralCoin
     * @param array $options
     */
    public function cryptoLoansFlexibleBorrow(string $loanCoin, string $collateralCoin, array $options = [])
    {
        if (Strings::isEmpty($loanCoin)) {
            throw new MissingArgumentException('loanCoin');
        }
        if (Strings::isEmpty($collateralCoin)) {
            throw new MissingArgumentException('collateralCoin');
        }

        return $this->signRequest('POST', '/sapi/v2/loan/flexible/borrow', array_merge(
            $options,
            [
                'loanCoin' => $loanCoin,
                'collateralCoin' => $collateralCoin
            ]
        ));
    }

    /**
     * Borrow - Get Flexible Loan Ongoing Orders (USER_DATA)
     *
     * GET /sapi/v2/loan/flexible/ongoing/orders
     *
     * Weight(IP): 300
     *
     * @param array $options
     */
    public function cryptoLoansFlexibleOngoingOrders(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v2/loan/flexible/ongoing/orders', $options);
    }

    /**
     * Borrow - Get Flexible Loan Borrow History (USER_DATA)
     *
     * GET /sapi/v2/loan/flexible/borrow/history
     *
     * - If startTime and endTime are not sent, the recent 90-day data will be returned.
     * - The max interval between startTime and endTime is 180 days.
     *
     * Weight(IP): 400
     *
     * @param array $options
     */
    public function cryptoLoansFlexibleBorrowHistory(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v2/loan/flexible/borrow/history', $options);
    }

    /**
     * Repay - Flexible Loan Repay (TRADE)
     *
     * POST /sapi/v2/loan/flexible/repay
     *
     * - repayAmount is mandatory even fullRepayment = FALSE
     *
     * Weight(IP): 6000
     *
     * @param string $loanCoin
     * @param string $collateralCoin
     * @param mixed $repayAmount
     * @param array $options
     */
    public function cryptoLoansFlexibleRepay(string $loanCoin, string $collateralCoin, $repayAmount, array $options = [])
    {
        if (Strings::isEmpty($loanCoin)) {
            throw new MissingArgumentException('loanCoin');
        }
        if (Strings::isEmpty($collateralCoin)) {
            throw new MissingArgumentException('collateralCoin');
        }
        return $this->signRequest('POST', '/sapi/v2/loan/flexible/repay', array_merge(
            $options,
            [
                'loanCoin' => $loanCoin,
                'collateralCoin' => $collateralCoin,
                'repayAmount' => $repayAmount
            ]
        ));
    }

    /**
     * Repay - Get Flexible Loan Repayment History (USER_DATA)
     *
     * GET /sapi/v2/loan/flexible/repay/history
     *
     * - If startTime and endTime are not sent, the recent 90-day data will be returned.
     * - The max interval between startTime and endTime is 180 days.
     *
     * Weight(IP): 400
     *
     * @param array $options
     */
    public function cryptoLoansFlexibleRepayHistory(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v2/loan/flexible/repay/history', $options);
    }

    /**
     * Adjust LTV - Flexible Loan Adjust LTV (TRADE)
     *
     * POST /sapi/v2/loan/flexible/adjust/ltv
     *
     * - API Key needs Spot & Margin Trading permission for this endpoint
     *
     * Weight(UID): 6000
     *
     * @param string $loanCoin
     * @param string $collateralCoin
     * @param mixed $adjustmentAmount
     * @param string $direction
     * @param array $options
     */
    public function cryptoLoansAdjustLtv(string $loanCoin, string $collateralCoin, $adjustmentAmount, string $direction, array $options = [])
    {
        if (Strings::isEmpty($loanCoin)) {
            throw new MissingArgumentException('loanCoin');
        }
        if (Strings::isEmpty($collateralCoin)) {
            throw new MissingArgumentException('collateralCoin');
        }
        if (Strings::isEmpty($direction)) {
            throw new MissingArgumentException('direction');
        }

        return $this->signRequest('POST', '/sapi/v2/loan/flexible/adjust/ltv', array_merge(
            $options,
            [
                'loanCoin' => $loanCoin,
                'collateralCoin' => $collateralCoin,
                'adjustmentAmount' => $adjustmentAmount,
                'direction' => $direction
            ]
        ));
    }

    /**
     * Adjust LTV - Get Flexible Loan LTV Adjustment History (USER_DATA)
     *
     * GET /sapi/v2/loan/flexible/ltv/adjustment/history
     *
     * - If startTime and endTime are not sent, the recent 90-day data will be returned.
     * - The max interval between startTime and endTime is 180 days.
     *
     * Weight(IP): 400
     *
     * @param array $options
     */
    public function cryptoLoansAdjustLtvHistory(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v2/loan/flexible/ltv/adjustment/history', $options);
    }

    /**
     * Get Flexible Loan Assets Data (USER_DATA)
     *
     * GET /sapi/v2/loan/flexible/loanable/data
     *
     * Get interest rate and borrow limit of flexible loanable assets. The borrow limit is shown in USD value.
     *
     * Weight(IP): 400
     *
     * @param array $options
     */
    public function cryptoLoansFlexibleAssetsData(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v2/loan/flexible/loanable/data', $options);
    }

    /**
     * Get Flexible Loan Collateral Assets Data (USER_DATA)
     *
     * GET /sapi/v2/loan/flexible/collateral/data
     *
     * Get LTV information and collateral limit of flexible loan's collateral assets. The collateral limit is shown in USD value.
     *
     * Weight(IP): 400
     *
     * @param array $options
     */
    public function cryptoLoansFlexibleCollateralAssetsData(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v2/loan/flexible/collateral/data', $options);
    }
}
