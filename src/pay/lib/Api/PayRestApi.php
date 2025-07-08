<?php

namespace Binance\Client\Pay\Api;

use Binance\Client\Pay\Model\GetPayTradeHistoryResponse;
use Binance\Common\ApiException;
use Binance\Common\Configuration\ClientConfiguration;
use Binance\Common\Dtos\ApiResponse;

class PayRestApi
{
    /**
     * @var PayApi
     */
    private $payApi;

    public function __construct(
        ?ClientConfiguration $clientConfig = new ClientConfiguration(),
    ) {
        $this->payApi = new PayApi($clientConfig);
    }

    /**
     * Operation getPayTradeHistory.
     *
     * Get Pay Trade History
     *
     * @param null|int $startTime  startTime (optional)
     * @param null|int $endTime    endTime (optional)
     * @param null|int $limit      default 100, max 100 (optional)
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetPayTradeHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getPayTradeHistory($startTime = null, $endTime = null, $limit = null, $recvWindow = null): ApiResponse
    {
        return $this->payApi->getPayTradeHistory($startTime, $endTime, $limit, $recvWindow);
    }
}
