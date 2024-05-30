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
     * Borrow - Crypto Loan Borrow (TRADE)
     *
     * POST /sapi/v1/loan/borrow
     *
     * Weight(UID): 36000
     * Request Limit: 1 time/second per UID
     *
     * @param string $loanCoin
     * @param string $collateralCoin
     * @param int $loanTerm
     * @param array $options
     */
    public function cryptoLoansBorrow(string $loanCoin, string $collateralCoin, int $loanTerm, array $options = [])
    {
        if (Strings::isEmpty($loanCoin)) {
            throw new MissingArgumentException('loanCoin');
        }
        if (Strings::isEmpty($collateralCoin)) {
            throw new MissingArgumentException('collateralCoin');
        }
        if ($loanTerm < 7 || $loanTerm > 30) {
            throw new InvalidArgumentException('loanTerm', $loanTerm, '7-30', 'Loan term should be between 7 and 30 days');
        }

        return $this->signRequest('POST', '/sapi/v1/loan/borrow', array_merge(
            $options,
            [
                'loanCoin' => $loanCoin,
                'collateralCoin' => $collateralCoin,
                'loanTerm' => $loanTerm
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
     * Borrow - Get Loan Ongoing Orders (USER_DATA)
     *
     * GET /sapi/v1/loan/ongoing/orders
     *
     * Weight(IP): 300
     *
     * @param array $options
     */
    public function cryptoLoansOngoingOrders(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/loan/ongoing/orders', $options);
    }

    /**
     * Repay - Crypto Loan Repay (TRADE)
     *
     * POST /sapi/v1/loan/repay
     *
     * Weight(UID): 6000
     *
     * @param int $orderId
     * @param float $amount
     * @param array $options
     */
    public function cryptoLoansRepay(int $orderId, float $amount, array $options = [])
    {
        if ($amount <= 0) {
            throw new InvalidArgumentException('amount', $amount, 'greater than 0');
        }

        return $this->signRequest('POST', '/sapi/v1/loan/repay', array_merge(
            $options,
            [
                'orderId' => $orderId,
                'amount' => $amount
            ]
        ));
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
     * Adjust LTV - Crypto Loan Adjust LTV (TRADE)
     *
     * POST /sapi/v1/loan/adjust/ltv
     *
     * Weight(UID): 6000
     *
     * @param int $orderId
     * @param float $amount
     * @param string $direction
     * @param array $options
     */
    public function cryptoLoansAdjustLtv(int $orderId, float $amount, string $direction, array $options = [])
    {
        if ($amount <= 0) {
            throw new InvalidArgumentException('amount', $amount, 'greater than 0');
        }
        if (Strings::isEmpty($direction)) {
            throw new MissingArgumentException('direction');
        }

        return $this->signRequest('POST', '/sapi/v1/loan/adjust/ltv', array_merge(
            $options,
            [
                'orderId' => $orderId,
                'amount' => $amount,
                'direction' => $direction
            ]
        ));
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
     * Get Loanable Assets Data (USER_DATA)
     *
     * GET /sapi/v1/loan/loanable/data
     *
     * Get interest rate and borrow limit of loanable assets. The borrow limit is shown in USD value.
     *
     * Weight(IP): 400
     * Request Limit: 1 time/2 seconds per UID
     *
     * @param array $options
     */
    public function cryptoLoansLoanableData(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/loan/loanable/data', $options);
    }

    /**
     * Get Collateral Assets Data (USER_DATA)
     *
     * GET /sapi/v1/loan/collateral/data
     *
     * Get LTV information and collateral limit of collateral assets. The collateral limit is shown in USD value.
     *
     * Weight(IP): 400
     * Request Limit: 1 time/2 seconds per UID
     *
     * @param array $options
     */
    public function cryptoLoansCollateralData(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/loan/collateral/data', $options);
    }

    /**
     * Check Collateral Repay Rate (USER_DATA)
     *
     * GET /sapi/v1/loan/repay/collateral/rate
     *
     * Get the the rate of collateral coin / loan coin when using collateral repay, the rate will be valid within 8 second.
     *
     * Weight(IP): 6000
     *
     * @param string $loanCoin
     * @param string $collateralCoin
     * @param float $repayAmount
     * @param array $options
     */
    public function cryptoLoansCollateralRepayRate(string $loanCoin, string $collateralCoin, float $repayAmount, array $options = [])
    {
        if (Strings::isEmpty($loanCoin)) {
            throw new MissingArgumentException('loanCoin');
        }
        if (Strings::isEmpty($collateralCoin)) {
            throw new MissingArgumentException('collateralCoin');
        }
        if ($repayAmount <= 0) {
            throw new InvalidArgumentException('repayAmount', $repayAmount, 'greater than 0');
        }

        return $this->signRequest('GET', '/sapi/v1/loan/repay/collateral/rate', array_merge(
            $options,
            [
                'loanCoin' => $loanCoin,
                'collateralCoin' => $collateralCoin,
                'repayAmount' => $repayAmount
            ]
        ));
    }

    /**
     * Crypto Loan Customize Margin Call (TRADE)
     *
     * POST /sapi/v1/loan/customize/margin_call
     *
     * Customize margin call for ongoing orders only.
     *
     * Weight(UID): 6000
     *
     * @param float $marginCall
     * @param array $options
     */
    public function cryptoLoansCustomizeMarginCall(float $marginCall, array $options = [])
    {
        if ($marginCall <= 0) {
            throw new InvalidArgumentException('marginCall', $marginCall, 'greater than 0');
        }

        return $this->signRequest('POST', '/sapi/v1/loan/customize/margin_call', array_merge(
            $options,
            [
                'marginCall' => $marginCall
            ]
        ));
    }
}
