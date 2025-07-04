<?php

namespace Binance\Client\Rebate\Api;

use Binance\Client\Rebate\Model\GetSpotRebateHistoryRecordsResponse;
use Binance\Common\ApiException;
use Binance\Common\Configuration\ClientConfiguration;
use Binance\Common\Dtos\ApiResponse;

class RebateRestApi
{
    /**
     * @var RebateApi
     */
    private $rebateApi;

    public function __construct(
        ?ClientConfiguration $clientConfig = new ClientConfiguration(),
    ) {
        $this->rebateApi = new RebateApi($clientConfig);
    }

    /**
     * Operation getSpotRebateHistoryRecords.
     *
     * Get Spot Rebate History Records (USER_DATA)
     *
     * @param null|int $startTime  startTime (optional)
     * @param null|int $endTime    endTime (optional)
     * @param null|int $page       Default 1 (optional)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetSpotRebateHistoryRecordsResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getSpotRebateHistoryRecords($startTime = null, $endTime = null, $page = null, $recvWindow = null): ApiResponse
    {
        return $this->rebateApi->getSpotRebateHistoryRecords($startTime, $endTime, $page, $recvWindow);
    }
}
