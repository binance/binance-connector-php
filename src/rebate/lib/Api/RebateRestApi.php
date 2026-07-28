<?php

namespace Binance\Client\Rebate\Api;

use Binance\Client\Rebate\Model\GetSpotRebateHistoryRecordsResponse;
use Binance\Common\ApiException;
use Binance\Common\Configuration\ClientConfiguration;
use Binance\Common\Dtos\ApiResponse;

class RebateRestApi
{
    /**
     * @var DefaultApi
     */
    private $defaultApi;

    public function __construct(
        ?ClientConfiguration $clientConfig = new ClientConfiguration(),
    ) {
        $this->defaultApi = new DefaultApi($clientConfig);
    }

    /**
     * Operation getSpotRebateHistoryRecords.
     *
     * Get Spot Rebate History Records (USER_DATA)
     *
     * @param null|int $startTime  Start time in milliseconds. (optional)
     * @param null|int $endTime    End time in milliseconds. (optional)
     * @param null|int $page       Page number. (optional)
     * @param null|int $recvWindow Request validity window in milliseconds. (optional)
     *
     * @return ApiResponse<GetSpotRebateHistoryRecordsResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getSpotRebateHistoryRecords($startTime = null, $endTime = null, $page = null, $recvWindow = null): ApiResponse
    {
        return $this->defaultApi->getSpotRebateHistoryRecords($startTime, $endTime, $page, $recvWindow);
    }
}
