<?php

namespace Binance\Spot;

use Binance\Util\Strings;
use Binance\Exception\MissingArgumentException;

trait Market
{
    /**
     * Test Connectivity
     *
     * GET /api/v3/ping
     *
     * Test connectivity to the Rest API.
     *
     * Weight(IP): 1
     */
    public function ping()
    {
        return $this->publicRequest('GET', '/api/v3/ping');
    }

    /**
     * Check Server Time
     *
     * GET /api/v3/time
     *
     * Test connectivity to the Rest API and get the current server time.
     *
     * Weight(IP): 1
     */
    public function time()
    {
        return $this->publicRequest('GET', '/api/v3/time');
    }

    /**
     * Exchange Information
     *
     * GET /api/v3/exchangeInfo
     *
     * Current exchange trading rules and symbol information
     *
     * - If any symbol provided in either symbol or symbols do not exist, the endpoint will throw an error.
     *
     * Weight(IP): 10
     *
     * @param array $options
     */
    public function exchangeInfo(array $options = [])
    {
        return $this->publicRequest('GET', '/api/v3/exchangeInfo', $options);
    }

    /**
     * Order Book
     *
     * GET /api/v3/depth
     *
     * | Limit               | Weight(IP)  |
     * |---------------------|-------------|
     * | 1-100               | 1           |
     * | 101-500             | 5           |
     * | 501-1000            | 10          |
     * | 1001-5000           | 50          |
     *
     * @param string $symbol
     * @param array $options
     */
    public function depth(string $symbol, array $options = [])
    {
        if (Strings::isEmpty($symbol)) {
            throw new MissingArgumentException('symbol');
        }

        return $this->publicRequest('GET', '/api/v3/depth', array_merge(
            $options,
            [
                'symbol' => $symbol
            ]
        ));
    }

    /**
     * Recent Trades List
     *
     * GET /api/v3/trades
     *
     * Get recent trades.
     *
     * Weight(IP): 1
     *
     * @param string $symbol
     * @param array $options
     */
    public function trades(string $symbol, array $options = [])
    {
        if (Strings::isEmpty($symbol)) {
            throw new MissingArgumentException('symbol');
        }

        return $this->publicRequest('GET', '/api/v3/trades', array_merge(
            $options,
            [
                'symbol' => $symbol
            ]
        ));
    }

    /**
     * Old Trade Lookup (MARKET_DATA)
     *
     * GET /api/v3/historicalTrades
     *
     * Get older market trades.
     *
     * Weight(IP): 5
     *
     * @param string $symbol
     * @param array $options
     */
    public function historicalTrades(string $symbol, array $options = [])
    {
        if (Strings::isEmpty($symbol)) {
            throw new MissingArgumentException('symbol');
        }

        return $this->publicRequest('GET', '/api/v3/historicalTrades', array_merge(
            $options,
            [
                'symbol' => $symbol
            ]
        ));
    }

    /**
     * Compressed/Aggregate Trades List
     *
     * GET /api/v3/aggTrades
     *
     * Get compressed, aggregate trades. Trades that fill at the time, from the same order, with the same price will have the quantity aggregated.
     * - If `startTime` and `endTime` are sent, time between startTime and endTime must be less than 1 hour.
     * - If `fromId`, `startTime`, and `endTime` are not sent, the most recent aggregate trades will be returned.
     *
     * Weight(IP): 1
     *
     * @param string $symbol
     * @param array $options
     */
    public function aggTrades(string $symbol, array $options = [])
    {
        if (Strings::isEmpty($symbol)) {
            throw new MissingArgumentException('symbol');
        }

        return $this->publicRequest('GET', '/api/v3/aggTrades', array_merge(
            $options,
            [
                'symbol' => $symbol
            ]
        ));
    }

    /**
     * Kline/Candlestick Data
     *
     * GET /api/v3/klines
     *
     * Kline/candlestick bars for a symbol.
     * Klines are uniquely identified by their open time.
     *
     * - If `startTime` and `endTime` are not sent, the most recent klines are returned.
     *
     * Weight(IP): 1
     *
     * @param string $symbol
     * @param string $interval
     * @param array $options
     */
    public function klines(string $symbol, string $interval, array $options = [])
    {
        if (Strings::isEmpty($symbol)) {
            throw new MissingArgumentException('symbol');
        }
        if (Strings::isEmpty($interval)) {
            throw new MissingArgumentException('interval');
        }

        return $this->publicRequest('GET', '/api/v3/klines', array_merge(
            $options,
            [
                'symbol' => $symbol,
                'interval' => $interval
            ]
        ));
    }

    /**
     * Current Average Price
     *
     * GET /api/v3/avgPrice
     *
     * Current average price for a symbol.
     *
     * Weight(IP): 1
     *
     * @param string $symbol
     */
    public function avgPrice(string $symbol)
    {
        if (Strings::isEmpty($symbol)) {
            throw new MissingArgumentException('symbol');
        }

        return $this->publicRequest(
            'GET',
            '/api/v3/avgPrice',
            [
                'symbol' => $symbol
            ]
        );
    }

    /**
     * 24hr Ticker Price Change Statistics
     *
     * GET /api/v3/ticker/24hr
     *
     * 24 hour rolling window price change statistics. Careful when accessing this with no symbol.
     *
     * - If the symbol is not sent, tickers for all symbols will be returned in an array.
     *
     * Weight(IP):
     * - `1` for a single symbol;
     * - `40` when the symbol parameter is omitted;
     *
     * @param array $options
     */
    public function ticker24hr(array $options = [])
    {
        return $this->publicRequest('GET', '/api/v3/ticker/24hr', $options);
    }

    /**
     * Symbol Price Ticker
     *
     * GET /api/v3/ticker/price
     *
     * Latest price for a symbol or symbols.
     *
     * - If the symbol is not sent, prices for all symbols will be returned in an array.
     *
     * Weight(IP):
     * - `1` for a single symbol;
     * - `2` when the symbol parameter is omitted;
     *
     * @param array $options
     */
    public function tickerPrice(array $options = [])
    {
        return $this->publicRequest('GET', '/api/v3/ticker/price', $options);
    }

    /**
     * Symbol Order Book Ticker
     *
     * GET /api/v3/ticker/bookTicker
     *
     * Best price/qty on the order book for a symbol or symbols.
     *
     * - If the symbol is not sent, bookTickers for all symbols will be returned in an array.
     *
     * Weight(IP):
     * - `1` for a single symbol;
     * - `2` when the symbol parameter is omitted;
     *
     * @param array $options
     */
    public function bookTicker(array $options = [])
    {
        return $this->publicRequest('GET', '/api/v3/ticker/bookTicker', $options);
    }

    /**
     * Rolling window price change statistics
     *
     * GET /api/v3/ticker
     *
     * The window used to compute statistics is typically slightly wider than requested windowSize.
     *
     * openTime for /api/v3/ticker always starts on a minute, while the closeTime is the current time of the request. As such, the effective window might be up to 1 minute wider than requested.
     *
     * E.g. If the closeTime is 1641287867099 (January 04, 2022 09:17:47:099 UTC) , and the windowSize is 1d. the openTime will be: 1641201420000 (January 3, 2022, 09:17:00 UTC)
     *
     * Weight(IP): 2 for each requested symbol regardless of windowSize.
     *
     * The weight for this request will cap at 100 once the number of symbols in the request is more than 50.
     *
     * @param array $options
     */
    public function rollingWindowTicker(array $options = [])
    {
        return $this->publicRequest('GET', '/api/v3/ticker', $options);
    }
}
