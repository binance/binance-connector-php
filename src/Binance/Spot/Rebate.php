<?php

namespace Binance\Spot;

trait Rebate
{
    /**
     * Get Spot Rebate History Records (USER_DATA)
     *
     * GET /sapi/v1/rebate/taxQuery
     *
     * - The max interval between startTime and endTime is 90 days.
     * - If startTime and endTime are not sent, the recent 7 days' data will be returned.
     * - The earliest startTime is supported on June 10, 2020
     *
     * Weight(UID): 3000
     *
     * @param array $options
     */
    public function rebateSpotHistoryRecords(array $options = [])
    {
        return $this->signRequest('GET', '/sapi/v1/rebate/taxQuery', $options);
    }
}
