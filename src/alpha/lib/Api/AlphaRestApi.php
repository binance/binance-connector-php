<?php

namespace Binance\Client\Alpha\Api;

use Binance\Client\Alpha\Model\AggregatedTradesResponse;
use Binance\Client\Alpha\Model\GetExchangeInfoResponse;
use Binance\Client\Alpha\Model\KlinesResponse;
use Binance\Client\Alpha\Model\TickerResponse;
use Binance\Client\Alpha\Model\TokenListResponse;
use Binance\Common\ApiException;
use Binance\Common\Configuration\ClientConfiguration;
use Binance\Common\Dtos\ApiResponse;

class AlphaRestApi
{
    /**
     * @var MarketDataApi
     */
    private $marketDataApi;

    public function __construct(
        ?ClientConfiguration $clientConfig = new ClientConfiguration(),
    ) {
        $this->marketDataApi = new MarketDataApi($clientConfig);
    }

    /**
     * Operation aggregatedTrades.
     *
     * Aggregated Trades
     *
     * @param string   $symbol    e.g., \&quot;ALPHA_175USDT\&quot; – use token ID from Token List (required)
     * @param null|int $fromId    starting trade ID to fetch from (optional)
     * @param null|int $startTime start timestamp (milliseconds) (optional)
     * @param null|int $endTime   end timestamp (milliseconds) (optional)
     * @param null|int $limit     number of results to return (default 500, max 1000) (optional)
     *
     * @return ApiResponse<AggregatedTradesResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function aggregatedTrades($symbol, $fromId = null, $startTime = null, $endTime = null, $limit = null): ApiResponse
    {
        return $this->marketDataApi->aggregatedTrades($symbol, $fromId, $startTime, $endTime, $limit);
    }

    /**
     * Operation getExchangeInfo.
     *
     * Get Exchange Info
     *
     * @return ApiResponse<GetExchangeInfoResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function getExchangeInfo(): ApiResponse
    {
        return $this->marketDataApi->getExchangeInfo();
    }

    /**
     * Operation klines.
     *
     * Klines (Candlestick Data)
     *
     * @param string   $symbol    e.g., \&quot;ALPHA_175USDT\&quot; – use token ID from Token List (required)
     * @param string   $interval  e.g., \&quot;1h\&quot; – supported intervals: 1s, 15s, 1m, 3m, 5m, 15m, 30m, 1h, 2h, 4h, 6h, 8h, 12h, 1d, 3d, 1w, 1M (required)
     * @param null|int $limit     number of results to return (default 500, max 1000) (optional)
     * @param null|int $startTime start timestamp (milliseconds) (optional)
     * @param null|int $endTime   end timestamp (milliseconds) (optional)
     *
     * @return ApiResponse<KlinesResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function klines($symbol, $interval, $limit = null, $startTime = null, $endTime = null): ApiResponse
    {
        return $this->marketDataApi->klines($symbol, $interval, $limit, $startTime, $endTime);
    }

    /**
     * Operation ticker.
     *
     * Ticker (24hr Price Statistics)
     *
     * @param string $symbol e.g., \&quot;ALPHA_175USDT\&quot; – use token ID from Token List (required)
     *
     * @return ApiResponse<TickerResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function ticker($symbol): ApiResponse
    {
        return $this->marketDataApi->ticker($symbol);
    }

    /**
     * Operation tokenList.
     *
     * Token List
     *
     * @return ApiResponse<TokenListResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function tokenList(): ApiResponse
    {
        return $this->marketDataApi->tokenList();
    }
}
