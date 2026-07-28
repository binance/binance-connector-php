# Binance\Client\Spot\MarketApi



All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aggTrades()**](MarketApi.md#aggTrades) | **GET** /api/v3/aggTrades | Compressed/Aggregate trades list |
| [**avgPrice()**](MarketApi.md#avgPrice) | **GET** /api/v3/avgPrice | Current average price |
| [**depth()**](MarketApi.md#depth) | **GET** /api/v3/depth | Order book |
| [**getTrades()**](MarketApi.md#getTrades) | **GET** /api/v3/trades | Recent trades list |
| [**historicalBlockTrades()**](MarketApi.md#historicalBlockTrades) | **GET** /api/v3/historicalBlockTrades | Historical Block Trades (MARKET_DATA) |
| [**historicalTrades()**](MarketApi.md#historicalTrades) | **GET** /api/v3/historicalTrades | Old trade lookup |
| [**klines()**](MarketApi.md#klines) | **GET** /api/v3/klines | Kline/Candlestick data |
| [**referencePrice()**](MarketApi.md#referencePrice) | **GET** /api/v3/referencePrice | Query Reference Price |
| [**referencePriceCalculation()**](MarketApi.md#referencePriceCalculation) | **GET** /api/v3/referencePrice/calculation | Query Reference Price Calculation |
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

Get compressed, aggregate trades. Trades that fill at the time, from the same taker order, with the same price will have the quantity aggregated.  Weight(IP): 4  Security Type: NONE  Notes: **Data Source:** Database  - If fromId, startTime, and endTime are not sent, the most recent aggregate trades will be returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BNBUSDT; // string
$fromId = 1; // int | ID to get aggregate trades from INCLUSIVE.
$startTime = 1735693200000; // int | Timestamp in ms to get aggregate trades from INCLUSIVE.
$endTime = 1735693200000; // int | Timestamp in ms to get aggregate trades until INCLUSIVE.
$limit = 1; // int

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
| **limit** | **int**|  | [optional] |

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

Current average price for a symbol.  Weight(IP): 2  Security Type: NONE  Notes: **Data Source:** Memory

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BNBUSDT; // string

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

Order book  Weight: Adjusted based on the limit:  |Limit|Request Weight ------|------- 1-100|  5 101-500| 25 501-1000| 50 1001-5000| 250  Security Type: NONE  Notes: **Data Source:** Memory

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BNBUSDT; // string
$limit = 1; // int | If limit > 5000, only 5000 entries will be returned.
$symbolStatus = new \Binance\Client\Spot\Model\\Binance\Client\Spot\Model\SymbolStatus(); // \Binance\Client\Spot\Model\SymbolStatus | Filters for symbols that have this `tradingStatus`. A status mismatch returns error `-1220 SYMBOL_DOES_NOT_MATCH_STATUS`.

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
| **limit** | **int**| If limit &gt; 5000, only 5000 entries will be returned. | [optional] |
| **symbolStatus** | [**\Binance\Client\Spot\Model\SymbolStatus**](../Model/.md)| Filters for symbols that have this &#x60;tradingStatus&#x60;. A status mismatch returns error &#x60;-1220 SYMBOL_DOES_NOT_MATCH_STATUS&#x60;. | [optional] |

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

Get recent trades.  Weight(IP): 25  Security Type: NONE  Notes: **Data Source:** Memory

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BNBUSDT; // string
$limit = 1; // int

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
| **limit** | **int**|  | [optional] |

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

## `historicalBlockTrades()`

```php
historicalBlockTrades($symbol, $fromId, $limit): \Binance\Client\Spot\Model\HistoricalBlockTradesResponse
```

Historical Block Trades (MARKET_DATA)

Get block trades.  Weight(IP): 25  Security Type: MARKET_DATA  Notes: - Data Source: Database

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BNBBTC; // string
$fromId = 582; // int | Block trade ID to fetch from
$limit = 500; // int | Default: 500; Maximum: 1000

try {
    $result = $apiInstance->historicalBlockTrades($symbol, $fromId, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->historicalBlockTrades: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **fromId** | **int**| Block trade ID to fetch from | |
| **limit** | **int**| Default: 500; Maximum: 1000 | [optional] |

### Return type

[**\Binance\Client\Spot\Model\HistoricalBlockTradesResponse**](../Model/HistoricalBlockTradesResponse.md)

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

Get older trades.  Weight(IP): 25  Security Type: NONE  Notes: **Data Source:** Database

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BNBUSDT; // string
$limit = 1; // int
$fromId = 1; // int | TradeId to fetch from. Default gets most recent trades.

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
| **limit** | **int**|  | [optional] |
| **fromId** | **int**| TradeId to fetch from. Default gets most recent trades. | [optional] |

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

Kline/candlestick bars for a symbol. Klines are uniquely identified by their open time.  Weight(IP): 2  Security Type: NONE  Notes: **Data Source:** Database  Supported kline intervals (case-sensitive):  Interval  | `interval` value --------- | ---------------- seconds   | `1s` minutes   | `1m`, `3m`, `5m`, `15m`, `30m` hours     | `1h`, `2h`, `4h`, `6h`, `8h`, `12h` days      | `1d`, `3d` weeks     | `1w` months    | `1M`  **Notes:**  * If `startTime` and `endTime` are not sent, the most recent klines are returned. * Supported values for `timeZone`:   * Hours and minutes (e.g. `-1:00`, `05:45`)   * Only hours (e.g. `0`, `8`, `4`)   * Accepted range is strictly [-12:00 to +14:00] inclusive * If `timeZone` provided, kline intervals are interpreted in that timezone instead of UTC. * Note that `startTime` and `endTime` are always interpreted in UTC, regardless of `timeZone`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BNBUSDT; // string
$interval = new \Binance\Client\Spot\Model\\Binance\Client\Spot\Model\Interval(); // \Binance\Client\Spot\Model\Interval
$startTime = 1735693200000; // int
$endTime = 1735693200000; // int
$timeZone = 0; // string | Default: 0 (UTC)
$limit = 1; // int

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
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **timeZone** | **string**| Default: 0 (UTC) | [optional] |
| **limit** | **int**|  | [optional] |

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

## `referencePrice()`

```php
referencePrice($symbol): \Binance\Client\Spot\Model\ReferencePriceResponse
```

Query Reference Price

Query the reference price for a symbol.  Weight(IP): 2  Security Type: NONE  Notes: **Data Source:** Memory

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BNBUSDT; // string

try {
    $result = $apiInstance->referencePrice($symbol);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->referencePrice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |

### Return type

[**\Binance\Client\Spot\Model\ReferencePriceResponse**](../Model/ReferencePriceResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `referencePriceCalculation()`

```php
referencePriceCalculation($symbol, $symbolStatus): \Binance\Client\Spot\Model\ReferencePriceCalculationResponse
```

Query Reference Price Calculation

Describes how reference price is calculated for a given symbol.  Weight(IP): 2  Security Type: NONE  Notes: **Data Source:** Memory

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BNBUSDT; // string
$symbolStatus = new \Binance\Client\Spot\Model\\Binance\Client\Spot\Model\SymbolStatus(); // \Binance\Client\Spot\Model\SymbolStatus | Supported values: `TRADING`, `HALT`, `BREAK`

try {
    $result = $apiInstance->referencePriceCalculation($symbol, $symbolStatus);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketApi->referencePriceCalculation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **symbolStatus** | [**\Binance\Client\Spot\Model\SymbolStatus**](../Model/.md)| Supported values: &#x60;TRADING&#x60;, &#x60;HALT&#x60;, &#x60;BREAK&#x60; | [optional] |

### Return type

[**\Binance\Client\Spot\Model\ReferencePriceCalculationResponse**](../Model/ReferencePriceCalculationResponse.md)

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

**Note:** This endpoint differs from `GET /api/v3/ticker/24hr`.  The statistical time range of this endpoint can be up to 59999ms longer than the requested `windowSize`.  `openTime` starts at the beginning of a minute, while the end time is the current time. Therefore, the actual interval can be up to 59999ms longer than the requested window.  For example, if `closeTime` is 1641287867099 (January 04, 2022 09:17:47:099 UTC) and `windowSize` is `1d`, then `openTime` is 1641201420000 (January 3, 2022, 09:17:00 UTC).  Weight: 4 for each requested symbol regardless of windowSize.  The weight for this request will cap at 200 once the number of `symbols` in the request is more than 50.  Security Type: NONE  Notes: **Data Source:** Database

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BNBUSDT; // string | Either `symbol` or `symbols` must be provided
$symbols = array('symbols_example'); // \Binance\Client\Spot\Model\Symbols | Either `symbol` or `symbols` must be provided  Examples of accepted format for the `symbols` parameter: [\"BTCUSDT\",\"BNBUSDT\"] or %5B%22BTCUSDT%22,%22BNBUSDT%22%5D  The maximum number of symbols allowed in a request is 100.
$windowSize = new \Binance\Client\Spot\Model\\Binance\Client\Spot\Model\WindowSize(); // \Binance\Client\Spot\Model\WindowSize | Units cannot be combined (e.g. `1d2h` is not allowed).
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
| **symbol** | **string**| Either &#x60;symbol&#x60; or &#x60;symbols&#x60; must be provided | [optional] |
| **symbols** | [**\Binance\Client\Spot\Model\Symbols**](../Model/string.md)| Either &#x60;symbol&#x60; or &#x60;symbols&#x60; must be provided  Examples of accepted format for the &#x60;symbols&#x60; parameter: [\&quot;BTCUSDT\&quot;,\&quot;BNBUSDT\&quot;] or %5B%22BTCUSDT%22,%22BNBUSDT%22%5D  The maximum number of symbols allowed in a request is 100. | [optional] |
| **windowSize** | [**\Binance\Client\Spot\Model\WindowSize**](../Model/.md)| Units cannot be combined (e.g. &#x60;1d2h&#x60; is not allowed). | [optional] |
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

24 hour rolling window price change statistics. **Careful** when accessing this with no symbol.  Weight: <table>   <thead>       <tr>           <th>Parameter</th>           <th>Symbols Provided</th>           <th>Weight</th>       </tr>   </thead>   <tbody>       <tr>           <td rowspan=\"2\">symbol</td>           <td>1</td>           <td>2</td>       </tr>       <tr>           <td>symbol parameter is omitted</td>           <td>80</td>       </tr>       <tr>           <td rowspan=\"4\">symbols</td>           <td>1-20</td>           <td>2</td>       </tr>       <tr>           <td>21-100</td>           <td>40</td>       </tr>       <tr>           <td>101 or more</td>           <td>80</td>       </tr>       <tr>           <td>symbols parameter is omitted</td>           <td>80</td>       </tr>   </tbody> </table>  Security Type: NONE  Notes: **Data Source:** Memory

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BNBUSDT; // string | Either `symbol` or `symbols` must be provided
$symbols = array('symbols_example'); // \Binance\Client\Spot\Model\Symbols | Either `symbol` or `symbols` must be provided  Examples of accepted format for the `symbols` parameter: [\"BTCUSDT\",\"BNBUSDT\"] or %5B%22BTCUSDT%22,%22BNBUSDT%22%5D  The maximum number of symbols allowed in a request is 100.
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
| **symbol** | **string**| Either &#x60;symbol&#x60; or &#x60;symbols&#x60; must be provided | [optional] |
| **symbols** | [**\Binance\Client\Spot\Model\Symbols**](../Model/string.md)| Either &#x60;symbol&#x60; or &#x60;symbols&#x60; must be provided  Examples of accepted format for the &#x60;symbols&#x60; parameter: [\&quot;BTCUSDT\&quot;,\&quot;BNBUSDT\&quot;] or %5B%22BTCUSDT%22,%22BNBUSDT%22%5D  The maximum number of symbols allowed in a request is 100. | [optional] |
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

Best price/qty on the order book for a symbol or symbols.  Weight: |Parameter|Symbols Provided|Weight| |---|---|---| |symbol| 1 |2| | |omitted| 4| |symbols| Any |4|  Security Type: NONE  Notes: **Data Source:** Memory

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BNBUSDT; // string | Parameter symbol and symbols cannot be used in combination. If neither parameter is sent, `bookTickers` for all symbols will be returned in an array.
$symbols = array('symbols_example'); // \Binance\Client\Spot\Model\Symbols | Parameter symbol and symbols cannot be used in combination. If neither parameter is sent, `bookTickers` for all symbols will be returned in an array. Examples of accepted format for the symbols parameter: [\"BTCUSDT\",\"BNBUSDT\"] or %5B%22BTCUSDT%22,%22BNBUSDT%22%5D
$symbolStatus = new \Binance\Client\Spot\Model\\Binance\Client\Spot\Model\SymbolStatus(); // \Binance\Client\Spot\Model\SymbolStatus | Filters for symbols that have this `tradingStatus`. For a single symbol, a status mismatch returns error `-1220 SYMBOL_DOES_NOT_MATCH_STATUS`. For multiple or all symbols, non-matching ones are simply excluded from the response.

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
| **symbol** | **string**| Parameter symbol and symbols cannot be used in combination. If neither parameter is sent, &#x60;bookTickers&#x60; for all symbols will be returned in an array. | [optional] |
| **symbols** | [**\Binance\Client\Spot\Model\Symbols**](../Model/string.md)| Parameter symbol and symbols cannot be used in combination. If neither parameter is sent, &#x60;bookTickers&#x60; for all symbols will be returned in an array. Examples of accepted format for the symbols parameter: [\&quot;BTCUSDT\&quot;,\&quot;BNBUSDT\&quot;] or %5B%22BTCUSDT%22,%22BNBUSDT%22%5D | [optional] |
| **symbolStatus** | [**\Binance\Client\Spot\Model\SymbolStatus**](../Model/.md)| Filters for symbols that have this &#x60;tradingStatus&#x60;. For a single symbol, a status mismatch returns error &#x60;-1220 SYMBOL_DOES_NOT_MATCH_STATUS&#x60;. For multiple or all symbols, non-matching ones are simply excluded from the response. | [optional] |

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

Latest price for a symbol or symbols.  Weight: |Parameter|Symbols Provided|Weight| |---|---|---| |symbol| 1 |2| | |omitted| 4| |symbols| Any |4|  Security Type: NONE  Notes: **Data Source:** Memory

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BNBUSDT; // string | Parameter symbol and symbols cannot be used in combination. If neither parameter is sent, prices for all symbols will be returned in an array.
$symbols = array('symbols_example'); // \Binance\Client\Spot\Model\Symbols | Parameter symbol and symbols cannot be used in combination. If neither parameter is sent, prices for all symbols will be returned in an array. Examples of accepted format for the symbols parameter: [\"BTCUSDT\",\"BNBUSDT\"] or %5B%22BTCUSDT%22,%22BNBUSDT%22%5D
$symbolStatus = new \Binance\Client\Spot\Model\\Binance\Client\Spot\Model\SymbolStatus(); // \Binance\Client\Spot\Model\SymbolStatus | Filters for symbols that have this `tradingStatus`. For a single symbol, a status mismatch returns error `-1220 SYMBOL_DOES_NOT_MATCH_STATUS`. For multiple or all symbols, non-matching ones are simply excluded from the response.

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
| **symbol** | **string**| Parameter symbol and symbols cannot be used in combination. If neither parameter is sent, prices for all symbols will be returned in an array. | [optional] |
| **symbols** | [**\Binance\Client\Spot\Model\Symbols**](../Model/string.md)| Parameter symbol and symbols cannot be used in combination. If neither parameter is sent, prices for all symbols will be returned in an array. Examples of accepted format for the symbols parameter: [\&quot;BTCUSDT\&quot;,\&quot;BNBUSDT\&quot;] or %5B%22BTCUSDT%22,%22BNBUSDT%22%5D | [optional] |
| **symbolStatus** | [**\Binance\Client\Spot\Model\SymbolStatus**](../Model/.md)| Filters for symbols that have this &#x60;tradingStatus&#x60;. For a single symbol, a status mismatch returns error &#x60;-1220 SYMBOL_DOES_NOT_MATCH_STATUS&#x60;. For multiple or all symbols, non-matching ones are simply excluded from the response. | [optional] |

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

Price change statistics for a trading day.  Weight: 4 for each requested symbol. The weight for this request will cap at 200 once the number of symbols in the request is more than 50.  Security Type: NONE  Notes: **Data Source:** Database  **Notes:**:   - Supported values for `timeZone`:     - Hours and minutes (e.g. `-1:00`, `05:45`)     - Only hours (e.g. `0`, `8`, `4`)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BNBUSDT; // string | Either `symbol` or `symbols` must be provided.
$symbols = array('symbols_example'); // \Binance\Client\Spot\Model\Symbols | Either `symbol` or `symbols` must be provided. Examples of accepted format for the `symbols` parameter: [\"BTCUSDT\",\"BNBUSDT\"] or %5B%22BTCUSDT%22,%22BNBUSDT%22%5D. The maximum number of `symbols` allowed in a request is 100.
$timeZone = 0; // string | Default: 0 (UTC)
$type = new \Binance\Client\Spot\Model\\Binance\Client\Spot\Model\TickerType(); // \Binance\Client\Spot\Model\TickerType
$symbolStatus = new \Binance\Client\Spot\Model\\Binance\Client\Spot\Model\SymbolStatus(); // \Binance\Client\Spot\Model\SymbolStatus | Filters for symbols that have this `tradingStatus`. For a single symbol, a status mismatch returns error `-1220 SYMBOL_DOES_NOT_MATCH_STATUS`. For multiple symbols, non-matching ones are simply excluded from the response.

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
| **symbol** | **string**| Either &#x60;symbol&#x60; or &#x60;symbols&#x60; must be provided. | [optional] |
| **symbols** | [**\Binance\Client\Spot\Model\Symbols**](../Model/string.md)| Either &#x60;symbol&#x60; or &#x60;symbols&#x60; must be provided. Examples of accepted format for the &#x60;symbols&#x60; parameter: [\&quot;BTCUSDT\&quot;,\&quot;BNBUSDT\&quot;] or %5B%22BTCUSDT%22,%22BNBUSDT%22%5D. The maximum number of &#x60;symbols&#x60; allowed in a request is 100. | [optional] |
| **timeZone** | **string**| Default: 0 (UTC) | [optional] |
| **type** | [**\Binance\Client\Spot\Model\TickerType**](../Model/.md)|  | [optional] |
| **symbolStatus** | [**\Binance\Client\Spot\Model\SymbolStatus**](../Model/.md)| Filters for symbols that have this &#x60;tradingStatus&#x60;. For a single symbol, a status mismatch returns error &#x60;-1220 SYMBOL_DOES_NOT_MATCH_STATUS&#x60;. For multiple symbols, non-matching ones are simply excluded from the response. | [optional] |

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

The request is similar to klines having the same parameters and response.  `uiKlines` return modified kline data, optimized for presentation of candlestick charts.  Weight(IP): 2  Security Type: NONE  Notes: **Data Source:** Database  - If `startTime` and `endTime` are not sent, the most recent klines are returned. - Supported values for `timeZone`:   - Hours and minutes (e.g. `-1:00`, `05:45`)   - Only hours (e.g. `0`, `8`, `4`)   - Accepted range is strictly [-12:00 to +14:00] inclusive - If `timeZone` provided, kline intervals are interpreted in that timezone instead of UTC. - Note that `startTime` and `endTime` are always interpreted in UTC, regardless of `timeZone`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\MarketApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BNBUSDT; // string
$interval = new \Binance\Client\Spot\Model\\Binance\Client\Spot\Model\Interval(); // \Binance\Client\Spot\Model\Interval
$startTime = 1735693200000; // int
$endTime = 1735693200000; // int
$timeZone = 0; // string | Default: 0 (UTC)
$limit = 1; // int

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
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **timeZone** | **string**| Default: 0 (UTC) | [optional] |
| **limit** | **int**|  | [optional] |

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
