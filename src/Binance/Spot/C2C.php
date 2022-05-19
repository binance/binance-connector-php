<?php

namespace Binance\Spot;

use Binance\Util\Strings;
use Binance\Exception\MissingArgumentException;

trait C2C
{
    /**
     * Get C2C Trade History (USER_DATA)
     *
     * GET /sapi/v1/c2c/orderMatch/listUserOrderHistory
     *
     * - If startTimestamp and endTimestamp are not sent, the recent 30-day data will be returned.
     * - The max interval between startTimestamp and endTimestamp is 30 days.
     *
     * Weight(IP): 1
     *
     * @param string $tradeType
     * @param array $options
     */
    public function c2cTradeHistory(string $tradeType, array $options = [])
    {
        if (Strings::isEmpty($tradeType)) {
            throw new MissingArgumentException('tradeType');
        }

        return $this->signRequest('GET', '/sapi/v1/c2c/orderMatch/listUserOrderHistory', array_merge(
            $options,
            [
                'tradeType' => $tradeType
            ]
        ));
    }
}
