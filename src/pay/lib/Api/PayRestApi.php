<?php

namespace Binance\Client\Pay\Api;

use Binance\Client\Pay\Model\GetPayTradeHistoryResponse;
use Binance\Common\ApiException;
use Binance\Common\Configuration\ClientConfiguration;
use Binance\Common\Dtos\ApiResponse;

class PayRestApi
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
     * Operation getPayTradeHistory.
     *
     * Get Pay Trade History
     *
     * @param null|int $startTime  Start time in milliseconds. (optional)
     * @param null|int $endTime    End time in milliseconds. (optional)
     * @param null|int $limit      Number of records to return. (optional)
     * @param null|int $recvWindow Request validity window in milliseconds. (optional)
     *
     * @return ApiResponse<GetPayTradeHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getPayTradeHistory($startTime = null, $endTime = null, $limit = null, $recvWindow = null): ApiResponse
    {
        return $this->defaultApi->getPayTradeHistory($startTime, $endTime, $limit, $recvWindow);
    }
}
