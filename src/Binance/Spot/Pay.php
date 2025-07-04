<?php

namespace Binance\Spot;

trait Pay
{
    /**
     * Get Pay Trade History (USER_DATA)
     *
     * GET /sapi/v1/pay/transactions
     *
     * - If startTime and endTime are not sent, the recent 90 days' data will be returned.
     * - The max interval between startTime and endTime is 90 days.
     * - Support for querying orders within the last 18 months.
     *
     * Weight(UID): 3000
     *
     * @param array $options
     */
    public function payTradeHistory(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/pay/transactions', $options);
    }
}
