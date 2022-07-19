<?php

namespace Binance\Spot;

trait Convert
{
    /**
     * Get Convert Trade History (USER_DATA)
     *
     * GET /sapi/v1/convert/tradeFlow
     *
     * - The max interval between startTime and endTime is 30 days.
     *
     * Weight(UID): 100
     *
     * @param int $startTime
     * @param int $endTime
     * @param array $options
     */
    public function convertTradeHistory(int $startTime, int $endTime, array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/convert/tradeFlow', array_merge(
            $options,
            [
                'startTime' => $startTime,
                'endTime' => $endTime
            ]
        ));
    }
}
