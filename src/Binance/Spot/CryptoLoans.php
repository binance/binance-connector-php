<?php

namespace Binance\Spot;

use Binance\Util\Strings;
use Binance\Exception\MissingArgumentException;

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
}
