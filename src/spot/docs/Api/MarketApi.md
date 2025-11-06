# Binance\Client\Spot\MarketApi

All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aggTrades()**](MarketApi.md#aggTrades) | **GET** /api/v3/aggTrades | Compressed/Aggregate trades list |
| [**avgPrice()**](MarketApi.md#avgPrice) | **GET** /api/v3/avgPrice | Current average price |
| [**depth()**](MarketApi.md#depth) | **GET** /api/v3/depth | Order book |
| [**getTrades()**](MarketApi.md#getTrades) | **GET** /api/v3/trades | Recent trades list |
| [**historicalTrades()**](MarketApi.md#historicalTrades) | **GET** /api/v3/historicalTrades | Old trade lookup |
| [**klines()**](MarketApi.md#klines) | **GET** /api/v3/klines | Kline/Candlestick data |
| [**ticker()**](MarketApi.md#ticker) | **GET** /api/v3/ticker | Rolling window price change statistics |
| [**ticker24hr()**](MarketApi.md#ticker24hr) | **GET** /api/v3/ticker/24hr | 24hr ticker price change statistics |
| [**tickerBookTicker()**](MarketApi.md#tickerBookTicker) | **GET** /api/v3/ticker/bookTicker | Symbol order book ticker |
| [**tickerPrice()**](MarketApi.md#tickerPrice) | **GET** /api/v3/ticker/price | Symbol price ticker |
| [**tickerTradingDay()**](MarketApi.md#tickerTradingDay) | **GET** /api/v3/ticker/tradingDay | Trading Day Ticker |
| [**uiKlines()**](MarketApi.md#uiKlines) | **GET** /api/v3/uiKlines | UIKlines |


## `aggTrades()`

```php
aggTrades($symbol, $fromId, $startTime, $endTime, $limit): \Binance\Client\Spot\Model\AggTradesResponse
```

Compressed/Aggregate trades list

Get compressed, aggregate trades. Trades that fill at the time, from the same taker order, with the same price will have the quantity aggregated. Weight: 4

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$fromId = 56; // int | ID to get aggregate trades from INCLUSIVE.
$startTime = 56; // int | Timestamp in ms to get aggregate trades from INCLUSIVE.
$endTime = 56; // int | Timestamp in ms to get aggregate trades until INCLUSIVE.
$limit = 56; // int | Default: 500; Maximum: 1000.

try {
    $result = $apiInstance->aggTrades($symbol, $fromId, $startTime, $endTime, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->aggTrades: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **fromId** | **int**| ID to get aggregate trades from INCLUSIVE. | [optional] |
| **startTime** | **int**| Timestamp in ms to get aggregate trades from INCLUSIVE. | [optional] |
| **endTime** | **int**| Timestamp in ms to get aggregate trades until INCLUSIVE. | [optional] |
| **limit** | **int**| Default: 500; Maximum: 1000. | [optional] |

### Return type

[**\Binance\Client\Spot\Model\AggTradesResponse**](../Model/AggTradesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `avgPrice()`

```php
avgPrice($symbol): \Binance\Client\Spot\Model\AvgPriceResponse
```

Current average price

Current average price for a symbol. Weight: 2

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string

try {
    $result = $apiInstance->avgPrice($symbol);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->avgPrice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |

### Return type

[**\Binance\Client\Spot\Model\AvgPriceResponse**](../Model/AvgPriceResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `depth()`

```php
depth($symbol, $limit, $symbolStatus): \Binance\Client\Spot\Model\DepthResponse
```

Order book

Weight: Adjusted based on the limit:  |Limit|Request Weight ------|------- 1-100|  5 101-500| 25 501-1000| 50 1001-5000| 250

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$limit = 56; // int | Default: 500; Maximum: 1000.
$symbolStatus = new \Binance\Client\Spot\Model\\Binance\Client\Spot\Model\SymbolStatus(); // \Binance\Client\Spot\Model\SymbolStatus

try {
    $result = $apiInstance->depth($symbol, $limit, $symbolStatus);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->depth: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **limit** | **int**| Default: 500; Maximum: 1000. | [optional] |
| **symbolStatus** | [**\Binance\Client\Spot\Model\SymbolStatus**](../Model/.md)|  | [optional] |

### Return type

[**\Binance\Client\Spot\Model\DepthResponse**](../Model/DepthResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTrades()`

```php
getTrades($symbol, $limit): \Binance\Client\Spot\Model\GetTradesResponse
```

Recent trades list

Get recent trades. Weight: 25

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$limit = 56; // int | Default: 500; Maximum: 1000.

try {
    $result = $apiInstance->getTrades($symbol, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->getTrades: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **limit** | **int**| Default: 500; Maximum: 1000. | [optional] |

### Return type

[**\Binance\Client\Spot\Model\GetTradesResponse**](../Model/GetTradesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `historicalTrades()`

```php
historicalTrades($symbol, $limit, $fromId): \Binance\Client\Spot\Model\HistoricalTradesResponse
```

Old trade lookup

Get older trades. Weight: 25

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$limit = 56; // int | Default: 500; Maximum: 1000.
$fromId = 56; // int | ID to get aggregate trades from INCLUSIVE.

try {
    $result = $apiInstance->historicalTrades($symbol, $limit, $fromId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->historicalTrades: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **limit** | **int**| Default: 500; Maximum: 1000. | [optional] |
| **fromId** | **int**| ID to get aggregate trades from INCLUSIVE. | [optional] |

### Return type

[**\Binance\Client\Spot\Model\HistoricalTradesResponse**](../Model/HistoricalTradesResponse.md)

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
klines($symbol, $interval, $startTime, $endTime, $timeZone, $limit): \Binance\Client\Spot\Model\KlinesResponse
```

Kline/Candlestick data

Kline/candlestick bars for a symbol. Klines are uniquely identified by their open time. Weight: 2

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$interval = new \Binance\Client\Spot\Model\\Binance\Client\Spot\Model\Interval(); // \Binance\Client\Spot\Model\Interval
$startTime = 56; // int | Timestamp in ms to get aggregate trades from INCLUSIVE.
$endTime = 56; // int | Timestamp in ms to get aggregate trades until INCLUSIVE.
$timeZone = 'timeZone_example'; // string | Default: 0 (UTC)
$limit = 56; // int | Default: 500; Maximum: 1000.

try {
    $result = $apiInstance->klines($symbol, $interval, $startTime, $endTime, $timeZone, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->klines: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **interval** | [**\Binance\Client\Spot\Model\Interval**](../Model/.md)|  | |
| **startTime** | **int**| Timestamp in ms to get aggregate trades from INCLUSIVE. | [optional] |
| **endTime** | **int**| Timestamp in ms to get aggregate trades until INCLUSIVE. | [optional] |
| **timeZone** | **string**| Default: 0 (UTC) | [optional] |
| **limit** | **int**| Default: 500; Maximum: 1000. | [optional] |

### Return type

[**\Binance\Client\Spot\Model\KlinesResponse**](../Model/KlinesResponse.md)

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
ticker($symbol, $symbols, $windowSize, $type, $symbolStatus): \Binance\Client\Spot\Model\TickerResponse
```

Rolling window price change statistics

Weight: 4 for each requested <tt>symbol</tt> regardless of <tt>windowSize</tt>. <br/><br/> The weight for this request will cap at 200 once the number of `symbols` in the request is more than 50.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string | Symbol to query
$symbols = array('symbols_example'); // \Binance\Client\Spot\Model\Symbols | List of symbols to query
$windowSize = new \Binance\Client\Spot\Model\\Binance\Client\Spot\Model\WindowSize(); // \Binance\Client\Spot\Model\WindowSize
$type = new \Binance\Client\Spot\Model\\Binance\Client\Spot\Model\TickerType(); // \Binance\Client\Spot\Model\TickerType
$symbolStatus = new \Binance\Client\Spot\Model\\Binance\Client\Spot\Model\SymbolStatus(); // \Binance\Client\Spot\Model\SymbolStatus

try {
    $result = $apiInstance->ticker($symbol, $symbols, $windowSize, $type, $symbolStatus);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->ticker: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**| Symbol to query | [optional] |
| **symbols** | [**\Binance\Client\Spot\Model\Symbols**](../Model/string.md)| List of symbols to query | [optional] |
| **windowSize** | [**\Binance\Client\Spot\Model\WindowSize**](../Model/.md)|  | [optional] |
| **type** | [**\Binance\Client\Spot\Model\TickerType**](../Model/.md)|  | [optional] |
| **symbolStatus** | [**\Binance\Client\Spot\Model\SymbolStatus**](../Model/.md)|  | [optional] |

### Return type

[**\Binance\Client\Spot\Model\TickerResponse**](../Model/TickerResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ticker24hr()`

```php
ticker24hr($symbol, $symbols, $type, $symbolStatus): \Binance\Client\Spot\Model\Ticker24hrResponse
```

24hr ticker price change statistics

24 hour rolling window price change statistics. **Careful** when accessing this with no symbol. Weight: <table> <thead>     <tr>         <th>Parameter</th>         <th>Symbols Provided</th>         <th>Weight</th>     </tr> </thead> <tbody>     <tr>         <td rowspan=\"2\">symbol</td>         <td>1</td>         <td>2</td>     </tr>     <tr>         <td>symbol parameter is omitted</td>         <td>80</td>     </tr>     <tr>         <td rowspan=\"4\">symbols</td>         <td>1-20</td>         <td>2</td>     </tr>     <tr>         <td>21-100</td>         <td>40</td>     </tr>     <tr>         <td>101 or more</td>         <td>80</td>     </tr>     <tr>         <td>symbols parameter is omitted</td>         <td>80</td>     </tr> </tbody> </table>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string | Symbol to query
$symbols = array('symbols_example'); // \Binance\Client\Spot\Model\Symbols | List of symbols to query
$type = new \Binance\Client\Spot\Model\\Binance\Client\Spot\Model\TickerType(); // \Binance\Client\Spot\Model\TickerType
$symbolStatus = new \Binance\Client\Spot\Model\\Binance\Client\Spot\Model\SymbolStatus(); // \Binance\Client\Spot\Model\SymbolStatus

try {
    $result = $apiInstance->ticker24hr($symbol, $symbols, $type, $symbolStatus);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->ticker24hr: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**| Symbol to query | [optional] |
| **symbols** | [**\Binance\Client\Spot\Model\Symbols**](../Model/string.md)| List of symbols to query | [optional] |
| **type** | [**\Binance\Client\Spot\Model\TickerType**](../Model/.md)|  | [optional] |
| **symbolStatus** | [**\Binance\Client\Spot\Model\SymbolStatus**](../Model/.md)|  | [optional] |

### Return type

[**\Binance\Client\Spot\Model\Ticker24hrResponse**](../Model/Ticker24hrResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tickerBookTicker()`

```php
tickerBookTicker($symbol, $symbols, $symbolStatus): \Binance\Client\Spot\Model\TickerBookTickerResponse
```

Symbol order book ticker

Best price/qty on the order book for a symbol or symbols. Weight: <table> <thead>     <tr>         <th>Parameter</th>         <th>Symbols Provided</th>         <th>Weight</th>     </tr> </thead> <tbody>     <tr>         <td rowspan=\"2\">symbol</td>         <td>1</td>         <td>2</td>     </tr>     <tr>         <td>symbol parameter is omitted</td>         <td>4</td>     </tr>     <tr>         <td>symbols</td>         <td>Any</td>         <td>4</td>     </tr> </tbody> </table>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string | Symbol to query
$symbols = array('symbols_example'); // \Binance\Client\Spot\Model\Symbols | List of symbols to query
$symbolStatus = new \Binance\Client\Spot\Model\\Binance\Client\Spot\Model\SymbolStatus(); // \Binance\Client\Spot\Model\SymbolStatus

try {
    $result = $apiInstance->tickerBookTicker($symbol, $symbols, $symbolStatus);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->tickerBookTicker: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**| Symbol to query | [optional] |
| **symbols** | [**\Binance\Client\Spot\Model\Symbols**](../Model/string.md)| List of symbols to query | [optional] |
| **symbolStatus** | [**\Binance\Client\Spot\Model\SymbolStatus**](../Model/.md)|  | [optional] |

### Return type

[**\Binance\Client\Spot\Model\TickerBookTickerResponse**](../Model/TickerBookTickerResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tickerPrice()`

```php
tickerPrice($symbol, $symbols, $symbolStatus): \Binance\Client\Spot\Model\TickerPriceResponse
```

Symbol price ticker

Latest price for a symbol or symbols. Weight: <table> <thead>     <tr>         <th>Parameter</th>         <th>Symbols Provided</th>         <th>Weight</th>     </tr> </thead> <tbody>     <tr>         <td rowspan=\"2\">symbol</td>         <td>1</td>         <td>2</td>     </tr>     <tr>         <td>symbol parameter is omitted</td>         <td>4</td>     </tr>     <tr>         <td>symbols</td>         <td>Any</td>         <td>4</td>     </tr> </tbody> </table>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string | Symbol to query
$symbols = array('symbols_example'); // \Binance\Client\Spot\Model\Symbols | List of symbols to query
$symbolStatus = new \Binance\Client\Spot\Model\\Binance\Client\Spot\Model\SymbolStatus(); // \Binance\Client\Spot\Model\SymbolStatus

try {
    $result = $apiInstance->tickerPrice($symbol, $symbols, $symbolStatus);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->tickerPrice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**| Symbol to query | [optional] |
| **symbols** | [**\Binance\Client\Spot\Model\Symbols**](../Model/string.md)| List of symbols to query | [optional] |
| **symbolStatus** | [**\Binance\Client\Spot\Model\SymbolStatus**](../Model/.md)|  | [optional] |

### Return type

[**\Binance\Client\Spot\Model\TickerPriceResponse**](../Model/TickerPriceResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tickerTradingDay()`

```php
tickerTradingDay($symbol, $symbols, $timeZone, $type, $symbolStatus): \Binance\Client\Spot\Model\TickerTradingDayResponse
```

Trading Day Ticker

Price change statistics for a trading day. Weight: 4 for each requested <tt>symbol</tt>. <br/><br/> The weight for this request will cap at 200 once the number of `symbols` in the request is more than 50.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string | Symbol to query
$symbols = array('symbols_example'); // \Binance\Client\Spot\Model\Symbols | List of symbols to query
$timeZone = 'timeZone_example'; // string | Default: 0 (UTC)
$type = new \Binance\Client\Spot\Model\\Binance\Client\Spot\Model\TickerType(); // \Binance\Client\Spot\Model\TickerType
$symbolStatus = new \Binance\Client\Spot\Model\\Binance\Client\Spot\Model\SymbolStatus(); // \Binance\Client\Spot\Model\SymbolStatus

try {
    $result = $apiInstance->tickerTradingDay($symbol, $symbols, $timeZone, $type, $symbolStatus);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->tickerTradingDay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**| Symbol to query | [optional] |
| **symbols** | [**\Binance\Client\Spot\Model\Symbols**](../Model/string.md)| List of symbols to query | [optional] |
| **timeZone** | **string**| Default: 0 (UTC) | [optional] |
| **type** | [**\Binance\Client\Spot\Model\TickerType**](../Model/.md)|  | [optional] |
| **symbolStatus** | [**\Binance\Client\Spot\Model\SymbolStatus**](../Model/.md)|  | [optional] |

### Return type

[**\Binance\Client\Spot\Model\TickerTradingDayResponse**](../Model/TickerTradingDayResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uiKlines()`

```php
uiKlines($symbol, $interval, $startTime, $endTime, $timeZone, $limit): \Binance\Client\Spot\Model\UiKlinesResponse
```

UIKlines

The request is similar to klines having the same parameters and response.  `uiKlines` return modified kline data, optimized for presentation of candlestick charts. Weight: 2

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$interval = new \Binance\Client\Spot\Model\\Binance\Client\Spot\Model\Interval(); // \Binance\Client\Spot\Model\Interval
$startTime = 56; // int | Timestamp in ms to get aggregate trades from INCLUSIVE.
$endTime = 56; // int | Timestamp in ms to get aggregate trades until INCLUSIVE.
$timeZone = 'timeZone_example'; // string | Default: 0 (UTC)
$limit = 56; // int | Default: 500; Maximum: 1000.

try {
    $result = $apiInstance->uiKlines($symbol, $interval, $startTime, $endTime, $timeZone, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->uiKlines: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **interval** | [**\Binance\Client\Spot\Model\Interval**](../Model/.md)|  | |
| **startTime** | **int**| Timestamp in ms to get aggregate trades from INCLUSIVE. | [optional] |
| **endTime** | **int**| Timestamp in ms to get aggregate trades until INCLUSIVE. | [optional] |
| **timeZone** | **string**| Default: 0 (UTC) | [optional] |
| **limit** | **int**| Default: 500; Maximum: 1000. | [optional] |

### Return type

[**\Binance\Client\Spot\Model\UiKlinesResponse**](../Model/UiKlinesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
