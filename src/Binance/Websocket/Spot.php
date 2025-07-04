<?php

namespace Binance\Websocket;

use Binance\Websocket;

class Spot extends Websocket
{
    public function __construct(array $args = [])
    {
        $args['baseURL'] = $args['baseURL'] ?? 'wss://stream.binance.com:9443';
        parent::__construct($args);
    }

    /*
     * Aggregate Trade Streams
     *
     * The Aggregate Trade Streams push trade information that is aggregated for a single taker order.
     * Stream Name: <symbol>@aggTrade
     * Update Speed: Real-time
     *
     */
    public function aggTrade($symbol, $callback)
    {
        $url = "{$this->baseURL}/ws/". strtolower($symbol). "@aggTrade";
        $this->handleCallBack($url, $callback);
    }

    /*
     * Trade Streams
     *
     * The Trade Streams push raw trade information; each trade has a unique buyer and seller.
     *
     * Stream Name: <symbol>@trade
     * Update Speed: Real-time
     *
     */
    public function trade($symbol, $callback)
    {
        $url = "{$this->baseURL}/ws/". strtolower($symbol). "@trade";
        $this->handleCallBack($url, $callback);
    }

    /*
     * Kline/Candlestick Streams
     *
     * The Kline/Candlestick Stream push updates to the current klines/candlestick every second.
     *
     * Stream Name: <symbol>@kline_<interval>
     *
     * interval:
     * m -> minutes; h -> hours; d -> days; w -> weeks; M -> months
     *
     * - 1m
     * - 3m
     * - 5m
     * - 15m
     * - 30m
     * - 1h
     * - 2h
     * - 4h
     * - 6h
     * - 8h
     * - 12h
     * - 1d
     * - 3d
     * - 1w
     * - 1M
     *
     * Update Speed: 2000ms
     */
    public function kline($symbol, $interval, $callback)
    {
        $url = "{$this->baseURL}/ws/". strtolower($symbol) . "@kline_{$interval}";
        $this->handleCallBack($url, $callback);
    }


    /*
    * Individual symbol or all symbols mini ticker
    *
    * 24hr rolling window mini-ticker statistics.
    * These are NOT the statistics of the UTC day, but a 24hr rolling window for the previous 24hrs
    *
    * Stream Name: <symbol>@miniTicker or
    * Stream Name: !miniTicker@arr
    *
    * Update Speed: 1000ms
    */
    public function miniTicker($callback, $symbol = null)
    {
        if ($symbol) {
            $url = "{$this->baseURL}/ws/". strtolower($symbol) . "@miniTicker";
        } else {
            $url = "{$this->baseURL}/ws/!miniTicker@arr";
        }
        $this->handleCallBack($url, $callback);
    }

    /*
    * Individual symbol or all symbols ticker
    *
    * 24hr rollwing window ticker statistics for a single symbol.
    *
    * These are NOT the statistics of the UTC day, but a 24hr rolling window for the previous 24hrs.
    *
    * Stream Name: <symbol>@ticker or
    * Stream Name: !ticker@arr
    *
    * Update Speed: 1000ms
    */
    public function ticker($callback, $symbol = null)
    {
        if ($symbol) {
            $url = "{$this->baseURL}/ws/". strtolower($symbol) . "@ticker";
        } else {
            $url = "{$this->baseURL}/ws/!ticker@arr";
        }
        $this->handleCallBack($url, $callback);
    }

    /*
     * Individual symbol or all book ticker
     *
     * Pushes any update to the best bid or ask's price or quantity in real-time for a specified symbol.
     *
     * Stream Name: <symbol>@bookTicker or
     * Stream Name: !bookTicker
     *
     * Update Speed: realtime
     */
    public function bookTicker($callback, $symbol = null)
    {
        if ($symbol) {
            $url = "{$this->baseURL}/ws/". strtolower($symbol) . "@bookTicker";
        } else {
            $url = "{$this->baseURL}/ws/!bookTicker";
        }
        $this->handleCallBack($url, $callback);
    }

    /*
     * Individual Symbol Rolling Window Statistics Streams
     *
     * Rolling window ticker statistics for a single symbol, computed over multiple windows.
     *
     * Stream Name: <symbol>@ticker_<window_size>
     * Window Sizes: 1h, 4h
     * Update Speed: 1000ms
     */
    public function rollingWindowTicker($symbol, $windowSize, $callback)
    {
        $url = "{$this->baseURL}/ws/".strtolower($symbol)."@ticker_".$windowSize;
        $this->handleCallBack($url, $callback);
    }

    /*
     * All Market Rolling Window Statistics Streams
     *
     * Rolling window ticker statistics for all market symbols, computed over multiple windows. Note that only tickers that have changed will be present in the array.
     *
     * Stream Name: !ticker_<window-size>@arr
     * Window Sizes: 1h, 4h
     * Update Speed: 1000ms
     */
    public function rollingWindowTickerAllSymbols($windowSize, $callback)
    {
        $url = "{$this->baseURL}/ws/!ticker_".$windowSize."@arr";
        $this->handleCallBack($url, $callback);
    }

    /*
     * Partial Book Depth Streams
     *
     * Top bids and asks, Valid are 5, 10, or 20.
     *
     * Stream Names: <symbol>@depth<levels> OR
     * <symbol>@depth<levels>@100ms.
     *
     * Update Speed: 1000ms or 100ms
     *
     */
    public function partialBookDepth($symbol, $levels, $speed, $callback)
    {
        $url = "{$this->baseURL}/ws/". strtolower($symbol). "@depth{$levels}@{$speed}";
        $this->handleCallBack($url, $callback);
    }

    /*
     * Partial Book Depth Streams
     *
     * Top bids and asks, Valid are 5, 10, or 20.
     *
     * Stream Names: <symbol>@depth<levels> OR
     * <symbol>@depth<levels>@100ms.
     *
     * Update Speed: 1000ms or 100ms
     *
     */
    public function diffBookDepth($symbol, $speed, $callback)
    {
        $url = "{$this->baseURL}/ws/". strtolower($symbol). "@depth@{$speed}";
        $this->handleCallBack($url, $callback);
    }

    /*
     * Listen to User data stream
     *
     */
    public function userData($listenKey, $callback)
    {
        $url = "{$this->baseURL}/ws/{$listenKey}";
        $this->handleCallBack($url, $callback);
    }

    /*
     * Listen to User data stream
     *
     *
     * $client->userData(['btcusdt@miniTicker', 'ethusdt@tikcer'], $callbacks);
     *
     */
    public function combined(array $streams, $callback)
    {
        $url = "{$this->baseURL}/stream?streams=". implode('/', $streams);
        $this->handleCallBack($url, $callback);
    }
}
