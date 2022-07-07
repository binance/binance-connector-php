<?php

namespace Binance\Spot;

use Binance\Util\Strings;
use Binance\Exception\MissingArgumentException;

trait Fiat
{
    /**
     * Get Fiat Deposit/Withdraw History (USER_DATA)
     *
     * GET /sapi/v1/fiat/orders
     *
     * - If beginTime and endTime are not sent, the recent 30-day data will be returned.
     *
     * Weight(UID): 90000
     *
     * @param string $transactionType
     * @param array $options
     */
    public function fiatDepositWithdrawHistory(string $transactionType, array $options = [])
    {
        if (Strings::isEmpty($transactionType)) {
            throw new MissingArgumentException('transactionType');
        }

        return $this->signRequest('GET', '/sapi/v1/fiat/orders', array_merge(
            $options,
            [
                'transactionType' => $transactionType
            ]
        ));
    }

    /**
     * Get Fiat Payments History (USER_DATA)
     *
     * GET /sapi/v1/fiat/payments
     *
     * - If beginTime and endTime are not sent, the recent 30-day data will be returned.
     *
     * Weight(IP): 1
     *
     * @param int $transactionType
     * @param array $options
     */
    public function fiatPaymentsHistory(int $transactionType, array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/fiat/payments', array_merge(
            $options,
            [
                'transactionType' => $transactionType
            ]
        ));
    }
}
