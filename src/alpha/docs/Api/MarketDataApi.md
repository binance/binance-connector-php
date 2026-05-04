# Binance\Client\Alpha\MarketDataApi

All URIs are relative to https://www.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aggregatedTrades()**](MarketDataApi.md#aggregatedTrades) | **GET** /bapi/defi/v1/public/alpha-trade/agg-trades | Aggregated Trades |
| [**getExchangeInfo()**](MarketDataApi.md#getExchangeInfo) | **GET** /bapi/defi/v1/public/alpha-trade/get-exchange-info | Get Exchange Info |
| [**klines()**](MarketDataApi.md#klines) | **GET** /bapi/defi/v1/public/alpha-trade/klines | Klines (Candlestick Data) |
| [**ticker()**](MarketDataApi.md#ticker) | **GET** /bapi/defi/v1/public/alpha-trade/ticker | Ticker (24hr Price Statistics) |
| [**tokenList()**](MarketDataApi.md#tokenList) | **GET** /bapi/defi/v1/public/wallet-direct/buw/wallet/cex/alpha/all/token/list | Token List |


## `aggregatedTrades()`

```php
aggregatedTrades($symbol, $fromId, $startTime, $endTime, $limit): \Binance\Client\Alpha\Model\AggregatedTradesResponse
```

Aggregated Trades

Retrieves compressed, aggregated historical trades for a specific symbol. Useful for recent trade history.  Weight: 0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Alpha\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string | e.g., \"ALPHA_175USDT\" – use token ID from Token List
$fromId = 56; // int | starting trade ID to fetch from
$startTime = 56; // int | start timestamp (milliseconds)
$endTime = 56; // int | end timestamp (milliseconds)
$limit = 56; // int | number of results to return (default 500, max 1000)

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
| **symbol** | **string**| e.g., \&quot;ALPHA_175USDT\&quot; – use token ID from Token List | |
| **fromId** | **int**| starting trade ID to fetch from | [optional] |
| **startTime** | **int**| start timestamp (milliseconds) | [optional] |
| **endTime** | **int**| end timestamp (milliseconds) | [optional] |
| **limit** | **int**| number of results to return (default 500, max 1000) | [optional] |

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

## `getExchangeInfo()`

```php
getExchangeInfo(): \Binance\Client\Alpha\Model\GetExchangeInfoResponse
```

Get Exchange Info

Fetches general exchange information, such as supported symbols, rate limits, and server time.  Weight: 0

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

Klines (Candlestick Data)

Fetches Kline/candlestick bars for a symbol, which include open/high/low/close prices and volume over intervals. Useful for charting and analysis.  Weight: 0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Alpha\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string | e.g., \"ALPHA_175USDT\" – use token ID from Token List
$interval = 'interval_example'; // string | e.g., \"1h\" – supported intervals: 1s, 15s, 1m, 3m, 5m, 15m, 30m, 1h, 2h, 4h, 6h, 8h, 12h, 1d, 3d, 1w, 1M
$limit = 56; // int | number of results to return (default 500, max 1000)
$startTime = 56; // int | start timestamp (milliseconds)
$endTime = 56; // int | end timestamp (milliseconds)

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
| **symbol** | **string**| e.g., \&quot;ALPHA_175USDT\&quot; – use token ID from Token List | |
| **interval** | **string**| e.g., \&quot;1h\&quot; – supported intervals: 1s, 15s, 1m, 3m, 5m, 15m, 30m, 1h, 2h, 4h, 6h, 8h, 12h, 1d, 3d, 1w, 1M | |
| **limit** | **int**| number of results to return (default 500, max 1000) | [optional] |
| **startTime** | **int**| start timestamp (milliseconds) | [optional] |
| **endTime** | **int**| end timestamp (milliseconds) | [optional] |

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

Ticker (24hr Price Statistics)

Gets the 24-hour rolling window price change statistics for a symbol, including volume and price changes.  Weight: 0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Alpha\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string | e.g., \"ALPHA_175USDT\" – use token ID from Token List

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
| **symbol** | **string**| e.g., \&quot;ALPHA_175USDT\&quot; – use token ID from Token List | |

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

Retrieves a list of all available ALPHA tokens, including their IDs and symbols. Use this to find the token ID for constructing symbols in other endpoints.  Weight: 0

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
