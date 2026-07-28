<?php

namespace Binance\Client\C2c\Api;

use Binance\Client\C2c\Model\GetC2CTradeHistoryResponse;
use Binance\Client\C2c\Model\TradeType;
use Binance\Common\ApiException;
use Binance\Common\Configuration\ClientConfiguration;
use Binance\Common\Dtos\ApiResponse;

class C2cRestApi
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
     * Operation getC2CTradeHistory.
     *
     * Get C2C Trade History (USER_DATA)
     *
     * @param null|TradeType $tradeType      Trade side filter (optional)
     * @param null|int       $startTimestamp startTimestamp (optional)
     * @param null|int       $endTimestamp   endTimestamp (optional)
     * @param null|int       $page           Page number (optional)
     * @param null|int       $rows           Number of records per page (optional)
     *
     * @return ApiResponse<GetC2CTradeHistoryResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getC2CTradeHistory($tradeType = null, $startTimestamp = null, $endTimestamp = null, $page = null, $rows = null): ApiResponse
    {
        return $this->defaultApi->getC2CTradeHistory($tradeType, $startTimestamp, $endTimestamp, $page, $rows);
    }
}
