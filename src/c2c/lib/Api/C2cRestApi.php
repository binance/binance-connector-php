<?php

namespace Binance\Client\C2c\Api;

use Binance\Client\C2c\Model\GetC2CTradeHistoryResponse;
use Binance\Common\ApiException;
use Binance\Common\Configuration\ClientConfiguration;
use Binance\Common\Dtos\ApiResponse;

class C2cRestApi
{
    /**
     * @var C2CApi
     */
    private $c2CApi;

    public function __construct(
        ?ClientConfiguration $clientConfig = new ClientConfiguration(),
    ) {
        $this->c2CApi = new C2CApi($clientConfig);
    }

    /**
     * Operation getC2CTradeHistory.
     *
     * Get C2C Trade History (USER_DATA)
     *
     * @param null|string $tradeType      BUY, SELL (optional)
     * @param null|int    $startTimestamp startTimestamp (optional)
     * @param null|int    $endTimestamp   endTimestamp (optional)
     * @param null|int    $page           Default 1 (optional)
     * @param null|int    $rows           default 100, max 100 (optional)
     * @param null|int    $recvWindow     recvWindow (optional)
     *
     * @return ApiResponse<GetC2CTradeHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getC2CTradeHistory($tradeType = null, $startTimestamp = null, $endTimestamp = null, $page = null, $rows = null, $recvWindow = null): ApiResponse
    {
        return $this->c2CApi->getC2CTradeHistory($tradeType, $startTimestamp, $endTimestamp, $page, $rows, $recvWindow);
    }
}
