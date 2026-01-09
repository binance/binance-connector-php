# Binance\Client\DerivativesTradingOptions\MarketDataApi

All URIs are relative to https://eapi.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**checkServerTime()**](MarketDataApi.md#checkServerTime) | **GET** /eapi/v1/time | Check Server Time |
| [**exchangeInformation()**](MarketDataApi.md#exchangeInformation) | **GET** /eapi/v1/exchangeInfo | Exchange Information |
| [**historicalExerciseRecords()**](MarketDataApi.md#historicalExerciseRecords) | **GET** /eapi/v1/exerciseHistory | Historical Exercise Records |
| [**indexPrice()**](MarketDataApi.md#indexPrice) | **GET** /eapi/v1/index | Index Price |
| [**klineCandlestickData()**](MarketDataApi.md#klineCandlestickData) | **GET** /eapi/v1/klines | Kline/Candlestick Data |
| [**openInterest()**](MarketDataApi.md#openInterest) | **GET** /eapi/v1/openInterest | Open Interest |
| [**optionMarkPrice()**](MarketDataApi.md#optionMarkPrice) | **GET** /eapi/v1/mark | Option Mark Price |
| [**orderBook()**](MarketDataApi.md#orderBook) | **GET** /eapi/v1/depth | Order Book |
| [**recentBlockTradesList()**](MarketDataApi.md#recentBlockTradesList) | **GET** /eapi/v1/blockTrades | Recent Block Trades List |
| [**recentTradesList()**](MarketDataApi.md#recentTradesList) | **GET** /eapi/v1/trades | Recent Trades List |
| [**testConnectivity()**](MarketDataApi.md#testConnectivity) | **GET** /eapi/v1/ping | Test Connectivity |
| [**ticker24hrPriceChangeStatistics()**](MarketDataApi.md#ticker24hrPriceChangeStatistics) | **GET** /eapi/v1/ticker | 24hr Ticker Price Change Statistics |


## `checkServerTime()`

```php
checkServerTime(): \Binance\Client\DerivativesTradingOptions\Model\CheckServerTimeResponse
```

Check Server Time

Test connectivity to the Rest API and get the current server time.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingOptions\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->checkServerTime();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->checkServerTime: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Binance\Client\DerivativesTradingOptions\Model\CheckServerTimeResponse**](../Model/CheckServerTimeResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `exchangeInformation()`

```php
exchangeInformation(): \Binance\Client\DerivativesTradingOptions\Model\ExchangeInformationResponse
```

Exchange Information

Current exchange trading rules and symbol information  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingOptions\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->exchangeInformation();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->exchangeInformation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Binance\Client\DerivativesTradingOptions\Model\ExchangeInformationResponse**](../Model/ExchangeInformationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `historicalExerciseRecords()`

```php
historicalExerciseRecords($underlying, $startTime, $endTime, $limit): \Binance\Client\DerivativesTradingOptions\Model\HistoricalExerciseRecordsResponse
```

Historical Exercise Records

Get historical exercise records. * REALISTIC_VALUE_STRICKEN -> Exercised * EXTRINSIC_VALUE_EXPIRED -> Expired OTM  Weight: 3

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingOptions\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$underlying = 'underlying_example'; // string | underlying, e.g BTCUSDT
$startTime = 56; // int | Start Time, e.g 1593511200000
$endTime = 56; // int | End Time, e.g 1593512200000
$limit = 56; // int | Number of result sets returned Default:100 Max:1000

try {
    $result = $apiInstance->historicalExerciseRecords($underlying, $startTime, $endTime, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->historicalExerciseRecords: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **underlying** | **string**| underlying, e.g BTCUSDT | [optional] |
| **startTime** | **int**| Start Time, e.g 1593511200000 | [optional] |
| **endTime** | **int**| End Time, e.g 1593512200000 | [optional] |
| **limit** | **int**| Number of result sets returned Default:100 Max:1000 | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingOptions\Model\HistoricalExerciseRecordsResponse**](../Model/HistoricalExerciseRecordsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `indexPrice()`

```php
indexPrice($underlying): \Binance\Client\DerivativesTradingOptions\Model\IndexPriceResponse
```

Index Price

Get spot index price for option underlying.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingOptions\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$underlying = 'underlying_example'; // string | Option underlying, e.g BTCUSDT

try {
    $result = $apiInstance->indexPrice($underlying);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->indexPrice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **underlying** | **string**| Option underlying, e.g BTCUSDT | |

### Return type

[**\Binance\Client\DerivativesTradingOptions\Model\IndexPriceResponse**](../Model/IndexPriceResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `klineCandlestickData()`

```php
klineCandlestickData($symbol, $interval, $startTime, $endTime, $limit): \Binance\Client\DerivativesTradingOptions\Model\KlineCandlestickDataResponse
```

Kline/Candlestick Data

Kline/candlestick bars for an option symbol. Klines are uniquely identified by their open time.  * If startTime and endTime are not sent, the most recent klines are returned.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingOptions\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string | Option trading pair, e.g BTC-200730-9000-C
$interval = 'interval_example'; // string | Time interval
$startTime = 56; // int | Start Time, e.g 1593511200000
$endTime = 56; // int | End Time, e.g 1593512200000
$limit = 56; // int | Number of result sets returned Default:100 Max:1000

try {
    $result = $apiInstance->klineCandlestickData($symbol, $interval, $startTime, $endTime, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->klineCandlestickData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**| Option trading pair, e.g BTC-200730-9000-C | |
| **interval** | **string**| Time interval | |
| **startTime** | **int**| Start Time, e.g 1593511200000 | [optional] |
| **endTime** | **int**| End Time, e.g 1593512200000 | [optional] |
| **limit** | **int**| Number of result sets returned Default:100 Max:1000 | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingOptions\Model\KlineCandlestickDataResponse**](../Model/KlineCandlestickDataResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `openInterest()`

```php
openInterest($underlyingAsset, $expiration): \Binance\Client\DerivativesTradingOptions\Model\OpenInterestResponse
```

Open Interest

Get open interest for specific underlying asset on specific expiration date.  Weight: 0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingOptions\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$underlyingAsset = 'underlyingAsset_example'; // string | underlying asset, e.g ETH/BTC
$expiration = 'expiration_example'; // string | expiration date, e.g 221225

try {
    $result = $apiInstance->openInterest($underlyingAsset, $expiration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->openInterest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **underlyingAsset** | **string**| underlying asset, e.g ETH/BTC | |
| **expiration** | **string**| expiration date, e.g 221225 | |

### Return type

[**\Binance\Client\DerivativesTradingOptions\Model\OpenInterestResponse**](../Model/OpenInterestResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `optionMarkPrice()`

```php
optionMarkPrice($symbol): \Binance\Client\DerivativesTradingOptions\Model\OptionMarkPriceResponse
```

Option Mark Price

Option mark price and greek info.  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingOptions\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string | Option trading pair, e.g BTC-200730-9000-C

try {
    $result = $apiInstance->optionMarkPrice($symbol);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->optionMarkPrice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**| Option trading pair, e.g BTC-200730-9000-C | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingOptions\Model\OptionMarkPriceResponse**](../Model/OptionMarkPriceResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderBook()`

```php
orderBook($symbol, $limit): \Binance\Client\DerivativesTradingOptions\Model\OrderBookResponse
```

Order Book

Check orderbook depth on specific symbol  Weight: limit         | weight ------------  | ------------ 5, 10, 20, 50 | 1 100           | 5 500           | 10 1000          | 20

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingOptions\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string | Option trading pair, e.g BTC-200730-9000-C
$limit = 56; // int | Number of result sets returned Default:100 Max:1000

try {
    $result = $apiInstance->orderBook($symbol, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->orderBook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**| Option trading pair, e.g BTC-200730-9000-C | |
| **limit** | **int**| Number of result sets returned Default:100 Max:1000 | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingOptions\Model\OrderBookResponse**](../Model/OrderBookResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recentBlockTradesList()`

```php
recentBlockTradesList($symbol, $limit): \Binance\Client\DerivativesTradingOptions\Model\RecentBlockTradesListResponse
```

Recent Block Trades List

Get recent block trades  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingOptions\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string | Option trading pair, e.g BTC-200730-9000-C
$limit = 56; // int | Number of result sets returned Default:100 Max:1000

try {
    $result = $apiInstance->recentBlockTradesList($symbol, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->recentBlockTradesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**| Option trading pair, e.g BTC-200730-9000-C | [optional] |
| **limit** | **int**| Number of result sets returned Default:100 Max:1000 | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingOptions\Model\RecentBlockTradesListResponse**](../Model/RecentBlockTradesListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recentTradesList()`

```php
recentTradesList($symbol, $limit): \Binance\Client\DerivativesTradingOptions\Model\RecentTradesListResponse
```

Recent Trades List

Get recent market trades  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingOptions\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string | Option trading pair, e.g BTC-200730-9000-C
$limit = 56; // int | Number of result sets returned Default:100 Max:1000

try {
    $result = $apiInstance->recentTradesList($symbol, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->recentTradesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**| Option trading pair, e.g BTC-200730-9000-C | |
| **limit** | **int**| Number of result sets returned Default:100 Max:1000 | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingOptions\Model\RecentTradesListResponse**](../Model/RecentTradesListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `testConnectivity()`

```php
testConnectivity()
```

Test Connectivity

Test connectivity to the Rest API.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingOptions\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->testConnectivity();
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->testConnectivity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ticker24hrPriceChangeStatistics()`

```php
ticker24hrPriceChangeStatistics($symbol): \Binance\Client\DerivativesTradingOptions\Model\Ticker24hrPriceChangeStatisticsResponse
```

24hr Ticker Price Change Statistics

24 hour rolling window price change statistics.  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingOptions\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string | Option trading pair, e.g BTC-200730-9000-C

try {
    $result = $apiInstance->ticker24hrPriceChangeStatistics($symbol);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->ticker24hrPriceChangeStatistics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**| Option trading pair, e.g BTC-200730-9000-C | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingOptions\Model\Ticker24hrPriceChangeStatisticsResponse**](../Model/Ticker24hrPriceChangeStatisticsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
