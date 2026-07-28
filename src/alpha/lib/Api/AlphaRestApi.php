<?php

namespace Binance\Client\Alpha\Api;

use Binance\Client\Alpha\Model\AggregatedTradesResponse;
use Binance\Client\Alpha\Model\FullDepthResponse;
use Binance\Client\Alpha\Model\GetExchangeInfoResponse;
use Binance\Client\Alpha\Model\Interval;
use Binance\Client\Alpha\Model\KlinesResponse;
use Binance\Client\Alpha\Model\Limit;
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
     * @param string   $symbol    Trading pair symbol, e.g. ALPHA_118USDC (use token ID from Token List). (required)
     * @param null|int $fromId    Starting aggregate trade ID to fetch from. (optional)
     * @param null|int $startTime Start timestamp in milliseconds. (optional)
     * @param null|int $endTime   End timestamp in milliseconds. (optional)
     * @param null|int $limit     Number of results to return. (optional)
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
     * Operation fullDepth.
     *
     * Full Depth
     *
     * @param string     $symbol Trading pair symbol, e.g. ALPHA_175USDT (use token ID from Token List). (required)
     * @param null|Limit $limit  Number of price levels to return. Valid values: 5, 10, 20, 50, 100, 500, 1000. (optional)
     *
     * @return ApiResponse<FullDepthResponse>
     *
     * @throws ApiException              on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     */
    public function fullDepth($symbol, $limit = null): ApiResponse
    {
        return $this->marketDataApi->fullDepth($symbol, $limit);
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
     * Klines
     *
     * @param string   $symbol    Trading pair symbol, e.g. ALPHA_175USDT (use token ID from Token List). (required)
     * @param Interval $interval  Kline interval. (required)
     * @param null|int $limit     Number of klines to return. (optional)
     * @param null|int $startTime Start timestamp in milliseconds. (optional)
     * @param null|int $endTime   End timestamp in milliseconds. (optional)
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
     * Ticker
     *
     * @param string $symbol Trading pair symbol, e.g. ALPHA_175USDT (use token ID from Token List). (required)
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
