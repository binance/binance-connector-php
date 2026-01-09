# Binance\Client\DerivativesTradingUsdsFutures\MarketDataApi

All URIs are relative to https://fapi.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**adlRisk()**](MarketDataApi.md#adlRisk) | **GET** /fapi/v1/symbolAdlRisk | ADL Risk |
| [**basis()**](MarketDataApi.md#basis) | **GET** /futures/data/basis | Basis |
| [**checkServerTime()**](MarketDataApi.md#checkServerTime) | **GET** /fapi/v1/time | Check Server Time |
| [**compositeIndexSymbolInformation()**](MarketDataApi.md#compositeIndexSymbolInformation) | **GET** /fapi/v1/indexInfo | Composite Index Symbol Information |
| [**compressedAggregateTradesList()**](MarketDataApi.md#compressedAggregateTradesList) | **GET** /fapi/v1/aggTrades | Compressed/Aggregate Trades List |
| [**continuousContractKlineCandlestickData()**](MarketDataApi.md#continuousContractKlineCandlestickData) | **GET** /fapi/v1/continuousKlines | Continuous Contract Kline/Candlestick Data |
| [**exchangeInformation()**](MarketDataApi.md#exchangeInformation) | **GET** /fapi/v1/exchangeInfo | Exchange Information |
| [**getFundingRateHistory()**](MarketDataApi.md#getFundingRateHistory) | **GET** /fapi/v1/fundingRate | Get Funding Rate History |
| [**getFundingRateInfo()**](MarketDataApi.md#getFundingRateInfo) | **GET** /fapi/v1/fundingInfo | Get Funding Rate Info |
| [**indexPriceKlineCandlestickData()**](MarketDataApi.md#indexPriceKlineCandlestickData) | **GET** /fapi/v1/indexPriceKlines | Index Price Kline/Candlestick Data |
| [**klineCandlestickData()**](MarketDataApi.md#klineCandlestickData) | **GET** /fapi/v1/klines | Kline/Candlestick Data |
| [**longShortRatio()**](MarketDataApi.md#longShortRatio) | **GET** /futures/data/globalLongShortAccountRatio | Long/Short Ratio |
| [**markPrice()**](MarketDataApi.md#markPrice) | **GET** /fapi/v1/premiumIndex | Mark Price |
| [**markPriceKlineCandlestickData()**](MarketDataApi.md#markPriceKlineCandlestickData) | **GET** /fapi/v1/markPriceKlines | Mark Price Kline/Candlestick Data |
| [**multiAssetsModeAssetIndex()**](MarketDataApi.md#multiAssetsModeAssetIndex) | **GET** /fapi/v1/assetIndex | Multi-Assets Mode Asset Index |
| [**oldTradesLookup()**](MarketDataApi.md#oldTradesLookup) | **GET** /fapi/v1/historicalTrades | Old Trades Lookup (MARKET_DATA) |
| [**openInterest()**](MarketDataApi.md#openInterest) | **GET** /fapi/v1/openInterest | Open Interest |
| [**openInterestStatistics()**](MarketDataApi.md#openInterestStatistics) | **GET** /futures/data/openInterestHist | Open Interest Statistics |
| [**orderBook()**](MarketDataApi.md#orderBook) | **GET** /fapi/v1/depth | Order Book |
| [**premiumIndexKlineData()**](MarketDataApi.md#premiumIndexKlineData) | **GET** /fapi/v1/premiumIndexKlines | Premium index Kline Data |
| [**quarterlyContractSettlementPrice()**](MarketDataApi.md#quarterlyContractSettlementPrice) | **GET** /futures/data/delivery-price | Quarterly Contract Settlement Price |
| [**queryIndexPriceConstituents()**](MarketDataApi.md#queryIndexPriceConstituents) | **GET** /fapi/v1/constituents | Query Index Price Constituents |
| [**queryInsuranceFundBalanceSnapshot()**](MarketDataApi.md#queryInsuranceFundBalanceSnapshot) | **GET** /fapi/v1/insuranceBalance | Query Insurance Fund Balance Snapshot |
| [**recentTradesList()**](MarketDataApi.md#recentTradesList) | **GET** /fapi/v1/trades | Recent Trades List |
| [**rpiOrderBook()**](MarketDataApi.md#rpiOrderBook) | **GET** /fapi/v1/rpiDepth | RPI Order Book |
| [**symbolOrderBookTicker()**](MarketDataApi.md#symbolOrderBookTicker) | **GET** /fapi/v1/ticker/bookTicker | Symbol Order Book Ticker |
| [**symbolPriceTicker()**](MarketDataApi.md#symbolPriceTicker) | **GET** /fapi/v1/ticker/price | Symbol Price Ticker |
| [**symbolPriceTickerV2()**](MarketDataApi.md#symbolPriceTickerV2) | **GET** /fapi/v2/ticker/price | Symbol Price Ticker V2 |
| [**takerBuySellVolume()**](MarketDataApi.md#takerBuySellVolume) | **GET** /futures/data/takerlongshortRatio | Taker Buy/Sell Volume |
| [**testConnectivity()**](MarketDataApi.md#testConnectivity) | **GET** /fapi/v1/ping | Test Connectivity |
| [**ticker24hrPriceChangeStatistics()**](MarketDataApi.md#ticker24hrPriceChangeStatistics) | **GET** /fapi/v1/ticker/24hr | 24hr Ticker Price Change Statistics |
| [**topTraderLongShortRatioAccounts()**](MarketDataApi.md#topTraderLongShortRatioAccounts) | **GET** /futures/data/topLongShortAccountRatio | Top Trader Long/Short Ratio (Accounts) |
| [**topTraderLongShortRatioPositions()**](MarketDataApi.md#topTraderLongShortRatioPositions) | **GET** /futures/data/topLongShortPositionRatio | Top Trader Long/Short Ratio (Positions) |
| [**tradingSchedule()**](MarketDataApi.md#tradingSchedule) | **GET** /fapi/v1/tradingSchedule | Trading Schedule |


## `adlRisk()`

```php
adlRisk($symbol): \Binance\Client\DerivativesTradingUsdsFutures\Model\AdlRiskResponse
```

ADL Risk

Query the symbol-level ADL risk rating. The ADL risk rating measures the likelihood of ADL during liquidation, and the rating takes into account the insurance fund balance, position concentration on the symbol, order book depth, price volatility, average leverage, unrealized PnL, and margin utilization at the symbol level. The rating can be high, medium and low, and is updated every 30 minutes.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string

try {
    $result = $apiInstance->adlRisk($symbol);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->adlRisk: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\AdlRiskResponse**](../Model/AdlRiskResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `basis()`

```php
basis($pair, $contractType, $period, $limit, $startTime, $endTime): \Binance\Client\DerivativesTradingUsdsFutures\Model\BasisResponse
```

Basis

Query future basis  * If startTime and endTime are not sent, the most recent data is returned. * Only the data of the latest 30 days is available.  Weight: 0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pair = 'pair_example'; // string
$contractType = new \Binance\Client\DerivativesTradingUsdsFutures\Model\\Binance\Client\DerivativesTradingUsdsFutures\Model\ContractType(); // \Binance\Client\DerivativesTradingUsdsFutures\Model\ContractType
$period = new \Binance\Client\DerivativesTradingUsdsFutures\Model\\Binance\Client\DerivativesTradingUsdsFutures\Model\Period(); // \Binance\Client\DerivativesTradingUsdsFutures\Model\Period | \"5m\",\"15m\",\"30m\",\"1h\",\"2h\",\"4h\",\"6h\",\"12h\",\"1d\"
$limit = 56; // int | Default 30,Max 500
$startTime = 56; // int
$endTime = 56; // int

try {
    $result = $apiInstance->basis($pair, $contractType, $period, $limit, $startTime, $endTime);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->basis: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pair** | **string**|  | |
| **contractType** | [**\Binance\Client\DerivativesTradingUsdsFutures\Model\ContractType**](../Model/.md)|  | |
| **period** | [**\Binance\Client\DerivativesTradingUsdsFutures\Model\Period**](../Model/.md)| \&quot;5m\&quot;,\&quot;15m\&quot;,\&quot;30m\&quot;,\&quot;1h\&quot;,\&quot;2h\&quot;,\&quot;4h\&quot;,\&quot;6h\&quot;,\&quot;12h\&quot;,\&quot;1d\&quot; | |
| **limit** | **int**| Default 30,Max 500 | |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\BasisResponse**](../Model/BasisResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `checkServerTime()`

```php
checkServerTime(): \Binance\Client\DerivativesTradingUsdsFutures\Model\CheckServerTimeResponse
```

Check Server Time

Test connectivity to the Rest API and get the current server time.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\MarketDataApi(
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

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\CheckServerTimeResponse**](../Model/CheckServerTimeResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `compositeIndexSymbolInformation()`

```php
compositeIndexSymbolInformation($symbol): \Binance\Client\DerivativesTradingUsdsFutures\Model\CompositeIndexSymbolInformationResponse
```

Composite Index Symbol Information

Query composite index symbol information  * Only for composite index symbols  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string

try {
    $result = $apiInstance->compositeIndexSymbolInformation($symbol);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->compositeIndexSymbolInformation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\CompositeIndexSymbolInformationResponse**](../Model/CompositeIndexSymbolInformationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `compressedAggregateTradesList()`

```php
compressedAggregateTradesList($symbol, $fromId, $startTime, $endTime, $limit): \Binance\Client\DerivativesTradingUsdsFutures\Model\CompressedAggregateTradesListResponse
```

Compressed/Aggregate Trades List

Get compressed, aggregate market trades. Market trades that fill in 100ms with the same price and the same taking side will have the quantity aggregated.   Retail Price Improvement(RPI) orders are aggregated and without special tags to be distinguished. * support querying futures trade histories that are not older than one year * If both `startTime` and `endTime` are sent, time between `startTime` and `endTime` must be less than 1 hour. * If `fromId`, `startTime`, and `endTime` are not sent, the most recent aggregate trades will be returned. * Only market trades will be aggregated and returned, which means the insurance fund trades and ADL trades won't be aggregated. * Sending both `startTime`/`endTime` and `fromId` might cause response timeout, please send either `fromId` or `startTime`/`endTime`  Weight: 20

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$fromId = 56; // int | ID to get aggregate trades from INCLUSIVE.
$startTime = 56; // int
$endTime = 56; // int
$limit = 56; // int | Default 100; max 1000

try {
    $result = $apiInstance->compressedAggregateTradesList($symbol, $fromId, $startTime, $endTime, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->compressedAggregateTradesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **fromId** | **int**| ID to get aggregate trades from INCLUSIVE. | [optional] |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **limit** | **int**| Default 100; max 1000 | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\CompressedAggregateTradesListResponse**](../Model/CompressedAggregateTradesListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `continuousContractKlineCandlestickData()`

```php
continuousContractKlineCandlestickData($pair, $contractType, $interval, $startTime, $endTime, $limit): \Binance\Client\DerivativesTradingUsdsFutures\Model\ContinuousContractKlineCandlestickDataResponse
```

Continuous Contract Kline/Candlestick Data

Kline/candlestick bars for a specific contract type. Klines are uniquely identified by their open time.  * If startTime and endTime are not sent, the most recent klines are returned. * Contract type: * PERPETUAL * CURRENT_QUARTER * NEXT_QUARTER * TRADIFI_PERPETUAL  Weight: based on parameter LIMIT | LIMIT       | weight | | ----------- | ------ | | [1,100)     | 1      | | [100, 500)  | 2      | | [500, 1000] | 5      | | > 1000      | 10     |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pair = 'pair_example'; // string
$contractType = new \Binance\Client\DerivativesTradingUsdsFutures\Model\\Binance\Client\DerivativesTradingUsdsFutures\Model\ContractType(); // \Binance\Client\DerivativesTradingUsdsFutures\Model\ContractType
$interval = new \Binance\Client\DerivativesTradingUsdsFutures\Model\\Binance\Client\DerivativesTradingUsdsFutures\Model\Interval(); // \Binance\Client\DerivativesTradingUsdsFutures\Model\Interval
$startTime = 56; // int
$endTime = 56; // int
$limit = 56; // int | Default 100; max 1000

try {
    $result = $apiInstance->continuousContractKlineCandlestickData($pair, $contractType, $interval, $startTime, $endTime, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->continuousContractKlineCandlestickData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pair** | **string**|  | |
| **contractType** | [**\Binance\Client\DerivativesTradingUsdsFutures\Model\ContractType**](../Model/.md)|  | |
| **interval** | [**\Binance\Client\DerivativesTradingUsdsFutures\Model\Interval**](../Model/.md)|  | |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **limit** | **int**| Default 100; max 1000 | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\ContinuousContractKlineCandlestickDataResponse**](../Model/ContinuousContractKlineCandlestickDataResponse.md)

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
exchangeInformation(): \Binance\Client\DerivativesTradingUsdsFutures\Model\ExchangeInformationResponse
```

Exchange Information

Current exchange trading rules and symbol information  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\MarketDataApi(
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

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\ExchangeInformationResponse**](../Model/ExchangeInformationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFundingRateHistory()`

```php
getFundingRateHistory($symbol, $startTime, $endTime, $limit): \Binance\Client\DerivativesTradingUsdsFutures\Model\GetFundingRateHistoryResponse
```

Get Funding Rate History

Get Funding Rate History   * If `startTime` and `endTime` are not sent, the most recent 200 records are returned. * If the number of data between `startTime` and `endTime` is larger than `limit`, return as `startTime` + `limit`. * In ascending order.  Weight: share 500/5min/IP rate limit with GET /fapi/v1/fundingInfo

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$startTime = 56; // int
$endTime = 56; // int
$limit = 56; // int | Default 100; max 1000

try {
    $result = $apiInstance->getFundingRateHistory($symbol, $startTime, $endTime, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->getFundingRateHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | [optional] |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **limit** | **int**| Default 100; max 1000 | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\GetFundingRateHistoryResponse**](../Model/GetFundingRateHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFundingRateInfo()`

```php
getFundingRateInfo(): \Binance\Client\DerivativesTradingUsdsFutures\Model\GetFundingRateInfoResponse
```

Get Funding Rate Info

Query funding rate info for symbols that had FundingRateCap/ FundingRateFloor / fundingIntervalHours adjustment  Weight: 0 share 500/5min/IP rate limit with GET /fapi/v1/fundingInfo

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getFundingRateInfo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->getFundingRateInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\GetFundingRateInfoResponse**](../Model/GetFundingRateInfoResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `indexPriceKlineCandlestickData()`

```php
indexPriceKlineCandlestickData($pair, $interval, $startTime, $endTime, $limit): \Binance\Client\DerivativesTradingUsdsFutures\Model\IndexPriceKlineCandlestickDataResponse
```

Index Price Kline/Candlestick Data

Kline/candlestick bars for the index price of a pair. Klines are uniquely identified by their open time.   * If startTime and endTime are not sent, the most recent klines are returned.  Weight: based on parameter LIMIT | LIMIT       | weight | | ----------- | ------ | | [1,100)     | 1      | | [100, 500)  | 2      | | [500, 1000] | 5      | | > 1000      | 10     |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pair = 'pair_example'; // string
$interval = new \Binance\Client\DerivativesTradingUsdsFutures\Model\\Binance\Client\DerivativesTradingUsdsFutures\Model\Interval(); // \Binance\Client\DerivativesTradingUsdsFutures\Model\Interval
$startTime = 56; // int
$endTime = 56; // int
$limit = 56; // int | Default 100; max 1000

try {
    $result = $apiInstance->indexPriceKlineCandlestickData($pair, $interval, $startTime, $endTime, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->indexPriceKlineCandlestickData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pair** | **string**|  | |
| **interval** | [**\Binance\Client\DerivativesTradingUsdsFutures\Model\Interval**](../Model/.md)|  | |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **limit** | **int**| Default 100; max 1000 | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\IndexPriceKlineCandlestickDataResponse**](../Model/IndexPriceKlineCandlestickDataResponse.md)

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
klineCandlestickData($symbol, $interval, $startTime, $endTime, $limit): \Binance\Client\DerivativesTradingUsdsFutures\Model\KlineCandlestickDataResponse
```

Kline/Candlestick Data

Kline/candlestick bars for a symbol. Klines are uniquely identified by their open time.  * If startTime and endTime are not sent, the most recent klines are returned.  Weight: based on parameter LIMIT | LIMIT       | weight | | ----------- | ------ | | [1,100)     | 1      | | [100, 500)  | 2      | | [500, 1000] | 5      | | > 1000      | 10     |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$interval = new \Binance\Client\DerivativesTradingUsdsFutures\Model\\Binance\Client\DerivativesTradingUsdsFutures\Model\Interval(); // \Binance\Client\DerivativesTradingUsdsFutures\Model\Interval
$startTime = 56; // int
$endTime = 56; // int
$limit = 56; // int | Default 100; max 1000

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
| **symbol** | **string**|  | |
| **interval** | [**\Binance\Client\DerivativesTradingUsdsFutures\Model\Interval**](../Model/.md)|  | |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **limit** | **int**| Default 100; max 1000 | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\KlineCandlestickDataResponse**](../Model/KlineCandlestickDataResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `longShortRatio()`

```php
longShortRatio($symbol, $period, $limit, $startTime, $endTime): \Binance\Client\DerivativesTradingUsdsFutures\Model\LongShortRatioResponse
```

Long/Short Ratio

Query symbol Long/Short Ratio  * If startTime and endTime are not sent, the most recent data is returned. * Only the data of the latest 30 days is available. * IP rate limit 1000 requests/5min  Weight: 0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$period = new \Binance\Client\DerivativesTradingUsdsFutures\Model\\Binance\Client\DerivativesTradingUsdsFutures\Model\Period(); // \Binance\Client\DerivativesTradingUsdsFutures\Model\Period | \"5m\",\"15m\",\"30m\",\"1h\",\"2h\",\"4h\",\"6h\",\"12h\",\"1d\"
$limit = 56; // int | Default 100; max 1000
$startTime = 56; // int
$endTime = 56; // int

try {
    $result = $apiInstance->longShortRatio($symbol, $period, $limit, $startTime, $endTime);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->longShortRatio: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **period** | [**\Binance\Client\DerivativesTradingUsdsFutures\Model\Period**](../Model/.md)| \&quot;5m\&quot;,\&quot;15m\&quot;,\&quot;30m\&quot;,\&quot;1h\&quot;,\&quot;2h\&quot;,\&quot;4h\&quot;,\&quot;6h\&quot;,\&quot;12h\&quot;,\&quot;1d\&quot; | |
| **limit** | **int**| Default 100; max 1000 | [optional] |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\LongShortRatioResponse**](../Model/LongShortRatioResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `markPrice()`

```php
markPrice($symbol): \Binance\Client\DerivativesTradingUsdsFutures\Model\MarkPriceResponse
```

Mark Price

Mark Price and Funding Rate  Weight: 1 with symbol, 10 without symbol

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string

try {
    $result = $apiInstance->markPrice($symbol);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->markPrice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\MarkPriceResponse**](../Model/MarkPriceResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `markPriceKlineCandlestickData()`

```php
markPriceKlineCandlestickData($symbol, $interval, $startTime, $endTime, $limit): \Binance\Client\DerivativesTradingUsdsFutures\Model\MarkPriceKlineCandlestickDataResponse
```

Mark Price Kline/Candlestick Data

Kline/candlestick bars for the mark price of a symbol. Klines are uniquely identified by their open time.  * If startTime and endTime are not sent, the most recent klines are returned.  Weight: based on parameter LIMIT | LIMIT       | weight | | ----------- | ------ | | [1,100)     | 1      | | [100, 500)  | 2      | | [500, 1000] | 5      | | > 1000      | 10     |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$interval = new \Binance\Client\DerivativesTradingUsdsFutures\Model\\Binance\Client\DerivativesTradingUsdsFutures\Model\Interval(); // \Binance\Client\DerivativesTradingUsdsFutures\Model\Interval
$startTime = 56; // int
$endTime = 56; // int
$limit = 56; // int | Default 100; max 1000

try {
    $result = $apiInstance->markPriceKlineCandlestickData($symbol, $interval, $startTime, $endTime, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->markPriceKlineCandlestickData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **interval** | [**\Binance\Client\DerivativesTradingUsdsFutures\Model\Interval**](../Model/.md)|  | |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **limit** | **int**| Default 100; max 1000 | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\MarkPriceKlineCandlestickDataResponse**](../Model/MarkPriceKlineCandlestickDataResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `multiAssetsModeAssetIndex()`

```php
multiAssetsModeAssetIndex($symbol): \Binance\Client\DerivativesTradingUsdsFutures\Model\MultiAssetsModeAssetIndexResponse
```

Multi-Assets Mode Asset Index

asset index for Multi-Assets mode  Weight: 1 for a single symbol; 10 when the symbol parameter is omitted

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string

try {
    $result = $apiInstance->multiAssetsModeAssetIndex($symbol);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->multiAssetsModeAssetIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\MultiAssetsModeAssetIndexResponse**](../Model/MultiAssetsModeAssetIndexResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `oldTradesLookup()`

```php
oldTradesLookup($symbol, $limit, $fromId): \Binance\Client\DerivativesTradingUsdsFutures\Model\OldTradesLookupResponse
```

Old Trades Lookup (MARKET_DATA)

Get older market historical trades.  * Market trades means trades filled in the order book. Only market trades will be returned, which means the insurance fund trades and ADL trades won't be returned. * Only supports data from within the last three months  Weight: 20

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$limit = 56; // int | Default 100; max 1000
$fromId = 56; // int | ID to get aggregate trades from INCLUSIVE.

try {
    $result = $apiInstance->oldTradesLookup($symbol, $limit, $fromId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->oldTradesLookup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **limit** | **int**| Default 100; max 1000 | [optional] |
| **fromId** | **int**| ID to get aggregate trades from INCLUSIVE. | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\OldTradesLookupResponse**](../Model/OldTradesLookupResponse.md)

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
openInterest($symbol): \Binance\Client\DerivativesTradingUsdsFutures\Model\OpenInterestResponse
```

Open Interest

Get present open interest of a specific symbol.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string

try {
    $result = $apiInstance->openInterest($symbol);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->openInterest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\OpenInterestResponse**](../Model/OpenInterestResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `openInterestStatistics()`

```php
openInterestStatistics($symbol, $period, $limit, $startTime, $endTime): \Binance\Client\DerivativesTradingUsdsFutures\Model\OpenInterestStatisticsResponse
```

Open Interest Statistics

Open Interest Statistics  * If startTime and endTime are not sent, the most recent data is returned. * Only the data of the latest 1 month is available. * IP rate limit 1000 requests/5min  Weight: 0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$period = new \Binance\Client\DerivativesTradingUsdsFutures\Model\\Binance\Client\DerivativesTradingUsdsFutures\Model\Period(); // \Binance\Client\DerivativesTradingUsdsFutures\Model\Period | \"5m\",\"15m\",\"30m\",\"1h\",\"2h\",\"4h\",\"6h\",\"12h\",\"1d\"
$limit = 56; // int | Default 100; max 1000
$startTime = 56; // int
$endTime = 56; // int

try {
    $result = $apiInstance->openInterestStatistics($symbol, $period, $limit, $startTime, $endTime);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->openInterestStatistics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **period** | [**\Binance\Client\DerivativesTradingUsdsFutures\Model\Period**](../Model/.md)| \&quot;5m\&quot;,\&quot;15m\&quot;,\&quot;30m\&quot;,\&quot;1h\&quot;,\&quot;2h\&quot;,\&quot;4h\&quot;,\&quot;6h\&quot;,\&quot;12h\&quot;,\&quot;1d\&quot; | |
| **limit** | **int**| Default 100; max 1000 | [optional] |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\OpenInterestStatisticsResponse**](../Model/OpenInterestStatisticsResponse.md)

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
orderBook($symbol, $limit): \Binance\Client\DerivativesTradingUsdsFutures\Model\OrderBookResponse
```

Order Book

Query symbol orderbook  Retail Price Improvement(RPI) orders are not visible and excluded in the response message.  Weight: Adjusted based on the limit: | Limit         | Weight | | ------------- | ------ | | 5, 10, 20, 50 | 2      | | 100           | 5      | | 500           | 10     | | 1000          | 20     |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$limit = 56; // int | Default 100; max 1000

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
| **symbol** | **string**|  | |
| **limit** | **int**| Default 100; max 1000 | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\OrderBookResponse**](../Model/OrderBookResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `premiumIndexKlineData()`

```php
premiumIndexKlineData($symbol, $interval, $startTime, $endTime, $limit): \Binance\Client\DerivativesTradingUsdsFutures\Model\PremiumIndexKlineDataResponse
```

Premium index Kline Data

Premium index kline bars of a symbol. Klines are uniquely identified by their open time.   * If startTime and endTime are not sent, the most recent klines are returned.  Weight: based on parameter LIMIT | LIMIT       | weight | | ----------- | ------ | | [1,100)     | 1      | | [100, 500)  | 2      | | [500, 1000] | 5      | | > 1000      | 10     |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$interval = new \Binance\Client\DerivativesTradingUsdsFutures\Model\\Binance\Client\DerivativesTradingUsdsFutures\Model\Interval(); // \Binance\Client\DerivativesTradingUsdsFutures\Model\Interval
$startTime = 56; // int
$endTime = 56; // int
$limit = 56; // int | Default 100; max 1000

try {
    $result = $apiInstance->premiumIndexKlineData($symbol, $interval, $startTime, $endTime, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->premiumIndexKlineData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **interval** | [**\Binance\Client\DerivativesTradingUsdsFutures\Model\Interval**](../Model/.md)|  | |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **limit** | **int**| Default 100; max 1000 | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\PremiumIndexKlineDataResponse**](../Model/PremiumIndexKlineDataResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `quarterlyContractSettlementPrice()`

```php
quarterlyContractSettlementPrice($pair): \Binance\Client\DerivativesTradingUsdsFutures\Model\QuarterlyContractSettlementPriceResponse
```

Quarterly Contract Settlement Price

Latest price for a symbol or symbols.  Weight: 0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pair = 'pair_example'; // string

try {
    $result = $apiInstance->quarterlyContractSettlementPrice($pair);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->quarterlyContractSettlementPrice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pair** | **string**|  | |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\QuarterlyContractSettlementPriceResponse**](../Model/QuarterlyContractSettlementPriceResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryIndexPriceConstituents()`

```php
queryIndexPriceConstituents($symbol): \Binance\Client\DerivativesTradingUsdsFutures\Model\QueryIndexPriceConstituentsResponse
```

Query Index Price Constituents

Query index price constituents   **Note**:  Prices from constituents of TradFi perps will be hiden and displayed as -1.  Weight: 2

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string

try {
    $result = $apiInstance->queryIndexPriceConstituents($symbol);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->queryIndexPriceConstituents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\QueryIndexPriceConstituentsResponse**](../Model/QueryIndexPriceConstituentsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryInsuranceFundBalanceSnapshot()`

```php
queryInsuranceFundBalanceSnapshot($symbol): \Binance\Client\DerivativesTradingUsdsFutures\Model\QueryInsuranceFundBalanceSnapshotResponse
```

Query Insurance Fund Balance Snapshot

Query Insurance Fund Balance Snapshot  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string

try {
    $result = $apiInstance->queryInsuranceFundBalanceSnapshot($symbol);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->queryInsuranceFundBalanceSnapshot: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\QueryInsuranceFundBalanceSnapshotResponse**](../Model/QueryInsuranceFundBalanceSnapshotResponse.md)

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
recentTradesList($symbol, $limit): \Binance\Client\DerivativesTradingUsdsFutures\Model\RecentTradesListResponse
```

Recent Trades List

Get recent market trades  * Market trades means trades filled in the order book. Only market trades will be returned, which means the insurance fund trades and ADL trades won't be returned.  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$limit = 56; // int | Default 100; max 1000

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
| **symbol** | **string**|  | |
| **limit** | **int**| Default 100; max 1000 | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\RecentTradesListResponse**](../Model/RecentTradesListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rpiOrderBook()`

```php
rpiOrderBook($symbol, $limit): \Binance\Client\DerivativesTradingUsdsFutures\Model\RpiOrderBookResponse
```

RPI Order Book

Query symbol orderbook with RPI orders  RPI(Retail Price Improvement) orders are included and aggreated in the response message. Crossed price levels are hidden and invisible.  Weight: Adjusted based on the limit: | Limit         | Weight | | ------------- | ------ | | 1000          | 20     |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$limit = 56; // int | Default 100; max 1000

try {
    $result = $apiInstance->rpiOrderBook($symbol, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->rpiOrderBook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **limit** | **int**| Default 100; max 1000 | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\RpiOrderBookResponse**](../Model/RpiOrderBookResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `symbolOrderBookTicker()`

```php
symbolOrderBookTicker($symbol): \Binance\Client\DerivativesTradingUsdsFutures\Model\SymbolOrderBookTickerResponse
```

Symbol Order Book Ticker

Best price/qty on the order book for a symbol or symbols.  Retail Price Improvement(RPI) orders are not visible and excluded in the response message. * If the symbol is not sent, bookTickers for all symbols will be returned in an array. * The field `X-MBX-USED-WEIGHT-1M` in response header is not accurate from this endpoint, please ignore.  Weight: 2 for a single symbol; 5 when the symbol parameter is omitted

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string

try {
    $result = $apiInstance->symbolOrderBookTicker($symbol);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->symbolOrderBookTicker: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\SymbolOrderBookTickerResponse**](../Model/SymbolOrderBookTickerResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `symbolPriceTicker()`

```php
symbolPriceTicker($symbol): \Binance\Client\DerivativesTradingUsdsFutures\Model\SymbolPriceTickerResponse
```

Symbol Price Ticker

Latest price for a symbol or symbols.  * If the symbol is not sent, prices for all symbols will be returned in an array.  Weight: 1 for a single symbol; 2 when the symbol parameter is omitted

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string

try {
    $result = $apiInstance->symbolPriceTicker($symbol);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->symbolPriceTicker: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\SymbolPriceTickerResponse**](../Model/SymbolPriceTickerResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `symbolPriceTickerV2()`

```php
symbolPriceTickerV2($symbol): \Binance\Client\DerivativesTradingUsdsFutures\Model\SymbolPriceTickerV2Response
```

Symbol Price Ticker V2

Latest price for a symbol or symbols.  * If the symbol is not sent, prices for all symbols will be returned in an array. * The field `X-MBX-USED-WEIGHT-1M` in response header is not accurate from this endpoint, please ignore.  Weight: 1 for a single symbol; 2 when the symbol parameter is omitted

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string

try {
    $result = $apiInstance->symbolPriceTickerV2($symbol);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->symbolPriceTickerV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\SymbolPriceTickerV2Response**](../Model/SymbolPriceTickerV2Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `takerBuySellVolume()`

```php
takerBuySellVolume($symbol, $period, $limit, $startTime, $endTime): \Binance\Client\DerivativesTradingUsdsFutures\Model\TakerBuySellVolumeResponse
```

Taker Buy/Sell Volume

Taker Buy/Sell Volume  * If startTime and endTime are not sent, the most recent data is returned. * Only the data of the latest 30 days is available. * IP rate limit 1000 requests/5min  Weight: 0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$period = new \Binance\Client\DerivativesTradingUsdsFutures\Model\\Binance\Client\DerivativesTradingUsdsFutures\Model\Period(); // \Binance\Client\DerivativesTradingUsdsFutures\Model\Period | \"5m\",\"15m\",\"30m\",\"1h\",\"2h\",\"4h\",\"6h\",\"12h\",\"1d\"
$limit = 56; // int | Default 100; max 1000
$startTime = 56; // int
$endTime = 56; // int

try {
    $result = $apiInstance->takerBuySellVolume($symbol, $period, $limit, $startTime, $endTime);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->takerBuySellVolume: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **period** | [**\Binance\Client\DerivativesTradingUsdsFutures\Model\Period**](../Model/.md)| \&quot;5m\&quot;,\&quot;15m\&quot;,\&quot;30m\&quot;,\&quot;1h\&quot;,\&quot;2h\&quot;,\&quot;4h\&quot;,\&quot;6h\&quot;,\&quot;12h\&quot;,\&quot;1d\&quot; | |
| **limit** | **int**| Default 100; max 1000 | [optional] |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\TakerBuySellVolumeResponse**](../Model/TakerBuySellVolumeResponse.md)

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



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\MarketDataApi(
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
ticker24hrPriceChangeStatistics($symbol): \Binance\Client\DerivativesTradingUsdsFutures\Model\Ticker24hrPriceChangeStatisticsResponse
```

24hr Ticker Price Change Statistics

24 hour rolling window price change statistics. **Careful** when accessing this with no symbol.  * If the symbol is not sent, tickers for all symbols will be returned in an array.  Weight: 1 for a single symbol; 40 when the symbol parameter is omitted

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string

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
| **symbol** | **string**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\Ticker24hrPriceChangeStatisticsResponse**](../Model/Ticker24hrPriceChangeStatisticsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `topTraderLongShortRatioAccounts()`

```php
topTraderLongShortRatioAccounts($symbol, $period, $limit, $startTime, $endTime): \Binance\Client\DerivativesTradingUsdsFutures\Model\TopTraderLongShortRatioAccountsResponse
```

Top Trader Long/Short Ratio (Accounts)

The proportion of net long and net short accounts to total accounts of the top 20% users with the highest margin balance. Each account is counted once only. Long Account % = Accounts of top traders with net long positions / Total accounts of top traders with open positions Short Account % = Accounts of top traders with net short positions / Total accounts of top traders with open positions Long/Short Ratio (Accounts) = Long Account % / Short Account %  * If startTime and endTime are not sent, the most recent data is returned. * Only the data of the latest 30 days is available. * IP rate limit 1000 requests/5min  Weight: 0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$period = new \Binance\Client\DerivativesTradingUsdsFutures\Model\\Binance\Client\DerivativesTradingUsdsFutures\Model\Period(); // \Binance\Client\DerivativesTradingUsdsFutures\Model\Period | \"5m\",\"15m\",\"30m\",\"1h\",\"2h\",\"4h\",\"6h\",\"12h\",\"1d\"
$limit = 56; // int | Default 100; max 1000
$startTime = 56; // int
$endTime = 56; // int

try {
    $result = $apiInstance->topTraderLongShortRatioAccounts($symbol, $period, $limit, $startTime, $endTime);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->topTraderLongShortRatioAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **period** | [**\Binance\Client\DerivativesTradingUsdsFutures\Model\Period**](../Model/.md)| \&quot;5m\&quot;,\&quot;15m\&quot;,\&quot;30m\&quot;,\&quot;1h\&quot;,\&quot;2h\&quot;,\&quot;4h\&quot;,\&quot;6h\&quot;,\&quot;12h\&quot;,\&quot;1d\&quot; | |
| **limit** | **int**| Default 100; max 1000 | [optional] |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\TopTraderLongShortRatioAccountsResponse**](../Model/TopTraderLongShortRatioAccountsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `topTraderLongShortRatioPositions()`

```php
topTraderLongShortRatioPositions($symbol, $period, $limit, $startTime, $endTime): \Binance\Client\DerivativesTradingUsdsFutures\Model\TopTraderLongShortRatioPositionsResponse
```

Top Trader Long/Short Ratio (Positions)

The proportion of net long and net short positions to total open positions of the top 20% users with the highest margin balance. Long Position % = Long positions of top traders / Total open positions of top traders Short Position % = Short positions of top traders / Total open positions of top traders Long/Short Ratio (Positions) = Long Position % / Short Position %  * If startTime and endTime are not sent, the most recent data is returned. * Only the data of the latest 30 days is available. * IP rate limit 1000 requests/5min  Weight: 0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$period = new \Binance\Client\DerivativesTradingUsdsFutures\Model\\Binance\Client\DerivativesTradingUsdsFutures\Model\Period(); // \Binance\Client\DerivativesTradingUsdsFutures\Model\Period | \"5m\",\"15m\",\"30m\",\"1h\",\"2h\",\"4h\",\"6h\",\"12h\",\"1d\"
$limit = 56; // int | Default 100; max 1000
$startTime = 56; // int
$endTime = 56; // int

try {
    $result = $apiInstance->topTraderLongShortRatioPositions($symbol, $period, $limit, $startTime, $endTime);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->topTraderLongShortRatioPositions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **period** | [**\Binance\Client\DerivativesTradingUsdsFutures\Model\Period**](../Model/.md)| \&quot;5m\&quot;,\&quot;15m\&quot;,\&quot;30m\&quot;,\&quot;1h\&quot;,\&quot;2h\&quot;,\&quot;4h\&quot;,\&quot;6h\&quot;,\&quot;12h\&quot;,\&quot;1d\&quot; | |
| **limit** | **int**| Default 100; max 1000 | [optional] |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\TopTraderLongShortRatioPositionsResponse**](../Model/TopTraderLongShortRatioPositionsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tradingSchedule()`

```php
tradingSchedule(): \Binance\Client\DerivativesTradingUsdsFutures\Model\TradingScheduleResponse
```

Trading Schedule

Trading session schedules for the underlying assets of TradFi Perps are provided for a one-week period starting from the day prior to the query time, covering both the U.S. equity and commodity markets. Equity market session types include \"PRE_MARKET\", \"REGULAR\", \"AFTER_MARKET\", \"OVERNIGHT\", and \"NO_TRADING\", while commodity market session types include \"REGULAR\" and \"NO_TRADING\".  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->tradingSchedule();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->tradingSchedule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\TradingScheduleResponse**](../Model/TradingScheduleResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
