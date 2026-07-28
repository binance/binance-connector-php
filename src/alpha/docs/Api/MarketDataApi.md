# Binance\Client\Alpha\MarketDataApi



All URIs are relative to https://www.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aggregatedTrades()**](MarketDataApi.md#aggregatedTrades) | **GET** /bapi/defi/v1/public/alpha-trade/agg-trades | Aggregated Trades |
| [**fullDepth()**](MarketDataApi.md#fullDepth) | **GET** /bapi/defi/v1/public/alpha-trade/fullDepth | Full Depth |
| [**getExchangeInfo()**](MarketDataApi.md#getExchangeInfo) | **GET** /bapi/defi/v1/public/alpha-trade/get-exchange-info | Get Exchange Info |
| [**klines()**](MarketDataApi.md#klines) | **GET** /bapi/defi/v1/public/alpha-trade/klines | Klines |
| [**ticker()**](MarketDataApi.md#ticker) | **GET** /bapi/defi/v1/public/alpha-trade/ticker | Ticker |
| [**tokenList()**](MarketDataApi.md#tokenList) | **GET** /bapi/defi/v1/public/wallet-direct/buw/wallet/cex/alpha/all/token/list | Token List |


## `aggregatedTrades()`

```php
aggregatedTrades($symbol, $fromId, $startTime, $endTime, $limit): \Binance\Client\Alpha\Model\AggregatedTradesResponse
```

Aggregated Trades

Retrieves compressed, aggregated historical trades for a specific symbol. Useful for recent trade history.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Alpha\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = ALPHA_118USDC; // string | Trading pair symbol, e.g. ALPHA_118USDC (use token ID from Token List).
$fromId = 58470; // int | Starting aggregate trade ID to fetch from.
$startTime = 1752568680000; // int | Start timestamp in milliseconds.
$endTime = 1752572280000; // int | End timestamp in milliseconds.
$limit = 500; // int | Number of results to return.

try {
    $result = $apiInstance->aggregatedTrades($symbol, $fromId, $startTime, $endTime, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->aggregatedTrades: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**| Trading pair symbol, e.g. ALPHA_118USDC (use token ID from Token List). | |
| **fromId** | **int**| Starting aggregate trade ID to fetch from. | [optional] |
| **startTime** | **int**| Start timestamp in milliseconds. | [optional] |
| **endTime** | **int**| End timestamp in milliseconds. | [optional] |
| **limit** | **int**| Number of results to return. | [optional] |

### Return type

[**\Binance\Client\Alpha\Model\AggregatedTradesResponse**](../Model/AggregatedTradesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fullDepth()`

```php
fullDepth($symbol, $limit): \Binance\Client\Alpha\Model\FullDepthResponse
```

Full Depth

Fetches the full order book depth (UI & API orders) for a symbol, including bid and ask orders with their prices and quantities.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Alpha\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = ALPHA_175USDT; // string | Trading pair symbol, e.g. ALPHA_175USDT (use token ID from Token List).
$limit = new \Binance\Client\Alpha\Model\\Binance\Client\Alpha\Model\Limit(); // \Binance\Client\Alpha\Model\Limit | Number of price levels to return. Valid values: 5, 10, 20, 50, 100, 500, 1000.

try {
    $result = $apiInstance->fullDepth($symbol, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->fullDepth: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**| Trading pair symbol, e.g. ALPHA_175USDT (use token ID from Token List). | |
| **limit** | [**\Binance\Client\Alpha\Model\Limit**](../Model/.md)| Number of price levels to return. Valid values: 5, 10, 20, 50, 100, 500, 1000. | [optional] |

### Return type

[**\Binance\Client\Alpha\Model\FullDepthResponse**](../Model/FullDepthResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExchangeInfo()`

```php
getExchangeInfo(): \Binance\Client\Alpha\Model\GetExchangeInfoResponse
```

Get Exchange Info

Fetches general exchange information, such as supported symbols, rate limits, and server time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Alpha\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getExchangeInfo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->getExchangeInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Binance\Client\Alpha\Model\GetExchangeInfoResponse**](../Model/GetExchangeInfoResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `klines()`

```php
klines($symbol, $interval, $limit, $startTime, $endTime): \Binance\Client\Alpha\Model\KlinesResponse
```

Klines

Fetches Kline/candlestick bars for a symbol, which include open/high/low/close prices and volume over intervals. Useful for charting and analysis.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Alpha\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = ALPHA_175USDT; // string | Trading pair symbol, e.g. ALPHA_175USDT (use token ID from Token List).
$interval = new \Binance\Client\Alpha\Model\\Binance\Client\Alpha\Model\Interval(); // \Binance\Client\Alpha\Model\Interval | Kline interval.
$limit = 500; // int | Number of klines to return.
$startTime = 1752642000000; // int | Start timestamp in milliseconds.
$endTime = 1752645599999; // int | End timestamp in milliseconds.

try {
    $result = $apiInstance->klines($symbol, $interval, $limit, $startTime, $endTime);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->klines: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**| Trading pair symbol, e.g. ALPHA_175USDT (use token ID from Token List). | |
| **interval** | [**\Binance\Client\Alpha\Model\Interval**](../Model/.md)| Kline interval. | |
| **limit** | **int**| Number of klines to return. | [optional] |
| **startTime** | **int**| Start timestamp in milliseconds. | [optional] |
| **endTime** | **int**| End timestamp in milliseconds. | [optional] |

### Return type

[**\Binance\Client\Alpha\Model\KlinesResponse**](../Model/KlinesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ticker()`

```php
ticker($symbol): \Binance\Client\Alpha\Model\TickerResponse
```

Ticker

Gets the 24-hour rolling window price change statistics for a symbol, including volume and price changes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Alpha\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = ALPHA_175USDT; // string | Trading pair symbol, e.g. ALPHA_175USDT (use token ID from Token List).

try {
    $result = $apiInstance->ticker($symbol);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->ticker: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**| Trading pair symbol, e.g. ALPHA_175USDT (use token ID from Token List). | |

### Return type

[**\Binance\Client\Alpha\Model\TickerResponse**](../Model/TickerResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tokenList()`

```php
tokenList(): \Binance\Client\Alpha\Model\TokenListResponse
```

Token List

Retrieves a list of all available ALPHA tokens, including their IDs and symbols. Use this to find the token ID for constructing symbols in other endpoints.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Alpha\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->tokenList();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->tokenList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Binance\Client\Alpha\Model\TokenListResponse**](../Model/TokenListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
