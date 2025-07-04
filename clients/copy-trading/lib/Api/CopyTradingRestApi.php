<?php

namespace Binance\Client\CopyTrading\Api;

use Binance\Client\CopyTrading\Model\GetFuturesLeadTraderStatusResponse;
use Binance\Client\CopyTrading\Model\GetFuturesLeadTradingSymbolWhitelistResponse;
use Binance\Common\ApiException;
use Binance\Common\Configuration\ClientConfiguration;
use Binance\Common\Dtos\ApiResponse;

class CopyTradingRestApi
{
    /**
     * @var FutureCopyTradingApi
     */
    private $futureCopyTradingApi;

    public function __construct(
        ?ClientConfiguration $clientConfig = new ClientConfiguration(),
    ) {
        $this->futureCopyTradingApi = new FutureCopyTradingApi($clientConfig);
    }

    /**
     * Operation getFuturesLeadTraderStatus.
     *
     * Get Futures Lead Trader Status(TRADE)
     *
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetFuturesLeadTraderStatusResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getFuturesLeadTraderStatus($recvWindow = null): ApiResponse
    {
        return $this->futureCopyTradingApi->getFuturesLeadTraderStatus($recvWindow);
    }

    /**
     * Operation getFuturesLeadTradingSymbolWhitelist.
     *
     * Get Futures Lead Trading Symbol Whitelist(USER_DATA)
     *
     * @param null|int $recvWindow recvWindow (optional)
     *
     * @return ApiResponse<GetFuturesLeadTradingSymbolWhitelistResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getFuturesLeadTradingSymbolWhitelist($recvWindow = null): ApiResponse
    {
        return $this->futureCopyTradingApi->getFuturesLeadTradingSymbolWhitelist($recvWindow);
    }
}
