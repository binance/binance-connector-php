# Binance\Client\DerivativesTradingCoinFutures\MarketDataApi



All URIs are relative to https://dapi.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**basis()**](MarketDataApi.md#basis) | **GET** /futures/data/basis | Basis |
| [**checkServerTime()**](MarketDataApi.md#checkServerTime) | **GET** /dapi/v1/time | Check Server time |
| [**compressedAggregateTradesList()**](MarketDataApi.md#compressedAggregateTradesList) | **GET** /dapi/v1/aggTrades | Compressed/Aggregate Trades List |
| [**continuousContractKlineCandlestickData()**](MarketDataApi.md#continuousContractKlineCandlestickData) | **GET** /dapi/v1/continuousKlines | Continuous Contract Kline/Candlestick Data |
| [**exchangeInformation()**](MarketDataApi.md#exchangeInformation) | **GET** /dapi/v1/exchangeInfo | Exchange Information |
| [**getFundingRateHistoryOfPerpetualFutures()**](MarketDataApi.md#getFundingRateHistoryOfPerpetualFutures) | **GET** /dapi/v1/fundingRate | Get Funding Rate History of Perpetual Futures |
| [**getFundingRateInfo()**](MarketDataApi.md#getFundingRateInfo) | **GET** /dapi/v1/fundingInfo | Get Funding Rate Info |
| [**indexPriceAndMarkPrice()**](MarketDataApi.md#indexPriceAndMarkPrice) | **GET** /dapi/v1/premiumIndex | Index Price and Mark Price |
| [**indexPriceKlineCandlestickData()**](MarketDataApi.md#indexPriceKlineCandlestickData) | **GET** /dapi/v1/indexPriceKlines | Index Price Kline/Candlestick Data |
| [**klineCandlestickData()**](MarketDataApi.md#klineCandlestickData) | **GET** /dapi/v1/klines | Kline/Candlestick Data |
| [**longShortRatio()**](MarketDataApi.md#longShortRatio) | **GET** /futures/data/globalLongShortAccountRatio | Long/Short Ratio |
| [**markPriceKlineCandlestickData()**](MarketDataApi.md#markPriceKlineCandlestickData) | **GET** /dapi/v1/markPriceKlines | Mark Price Kline/Candlestick Data |
| [**oldTradesLookup()**](MarketDataApi.md#oldTradesLookup) | **GET** /dapi/v1/historicalTrades | Old Trades Lookup (MARKET_DATA) |
| [**openInterest()**](MarketDataApi.md#openInterest) | **GET** /dapi/v1/openInterest | Open Interest |
| [**openInterestStatistics()**](MarketDataApi.md#openInterestStatistics) | **GET** /futures/data/openInterestHist | Open Interest Statistics |
| [**orderBook()**](MarketDataApi.md#orderBook) | **GET** /dapi/v1/depth | Order Book |
| [**premiumIndexKlineData()**](MarketDataApi.md#premiumIndexKlineData) | **GET** /dapi/v1/premiumIndexKlines | Premium index Kline Data |
| [**queryIndexPriceConstituents()**](MarketDataApi.md#queryIndexPriceConstituents) | **GET** /dapi/v1/constituents | Query Index Price Constituents |
| [**recentTradesList()**](MarketDataApi.md#recentTradesList) | **GET** /dapi/v1/trades | Recent Trades List |
| [**symbolOrderBookTicker()**](MarketDataApi.md#symbolOrderBookTicker) | **GET** /dapi/v1/ticker/bookTicker | Symbol Order Book Ticker |
| [**symbolPriceTicker()**](MarketDataApi.md#symbolPriceTicker) | **GET** /dapi/v1/ticker/price | Symbol Price Ticker |
| [**takerBuySellVolume()**](MarketDataApi.md#takerBuySellVolume) | **GET** /futures/data/takerBuySellVol | Taker Buy/Sell Volume |
| [**testConnectivity()**](MarketDataApi.md#testConnectivity) | **GET** /dapi/v1/ping | Test Connectivity |
| [**ticker24hrPriceChangeStatistics()**](MarketDataApi.md#ticker24hrPriceChangeStatistics) | **GET** /dapi/v1/ticker/24hr | 24hr Ticker Price Change Statistics |
| [**topTraderLongShortRatioAccounts()**](MarketDataApi.md#topTraderLongShortRatioAccounts) | **GET** /futures/data/topLongShortAccountRatio | Top Trader Long/Short Account Ratio |
| [**topTraderLongShortRatioPositions()**](MarketDataApi.md#topTraderLongShortRatioPositions) | **GET** /futures/data/topLongShortPositionRatio | Top Trader Long/Short Position Ratio |


## `basis()`

```php
basis($pair, $contractType, $period, $limit, $startTime, $endTime): \Binance\Client\DerivativesTradingCoinFutures\Model\BasisResponse
```

Basis

Query basis  Weight(IP): 1  Notes: - If startTime and endTime are not sent, the most recent data is returned. - Only the data of the latest 30 days is available.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingCoinFutures\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pair = 'pair_example'; // string | Pair.
$contractType = new \Binance\Client\DerivativesTradingCoinFutures\Model\\Binance\Client\DerivativesTradingCoinFutures\Model\ContractType(); // \Binance\Client\DerivativesTradingCoinFutures\Model\ContractType | Contract type.
$period = new \Binance\Client\DerivativesTradingCoinFutures\Model\\Binance\Client\DerivativesTradingCoinFutures\Model\Period(); // \Binance\Client\DerivativesTradingCoinFutures\Model\Period | Period interval.
$limit = 30; // int | Maximum number of records to return.
$startTime = 1623319461670; // int
$endTime = 1641782889000; // int

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
| **pair** | **string**| Pair. | |
| **contractType** | [**\Binance\Client\DerivativesTradingCoinFutures\Model\ContractType**](../Model/.md)| Contract type. | |
| **period** | [**\Binance\Client\DerivativesTradingCoinFutures\Model\Period**](../Model/.md)| Period interval. | |
| **limit** | **int**| Maximum number of records to return. | [optional] |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingCoinFutures\Model\BasisResponse**](../Model/BasisResponse.md)

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
checkServerTime(): \Binance\Client\DerivativesTradingCoinFutures\Model\CheckServerTimeResponse
```

Check Server time

Test connectivity to the Rest API and get the current server time.  Weight(IP): 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingCoinFutures\Api\MarketDataApi(
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

[**\Binance\Client\DerivativesTradingCoinFutures\Model\CheckServerTimeResponse**](../Model/CheckServerTimeResponse.md)

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
compressedAggregateTradesList($symbol, $fromId, $startTime, $endTime, $limit): \Binance\Client\DerivativesTradingCoinFutures\Model\CompressedAggregateTradesListResponse
```

Compressed/Aggregate Trades List

Get compressed, aggregate trades. Market trades that fill in 100ms with the same price and the same taking side will have the quantity aggregated.  Weight(IP): 20  Notes: - support querying futures trade histories that are not older than 24 hours - If both `startTime` and `endTime` are sent, time between `startTime` and `endTime` must be less than 1 hour. - If `fromId`, `startTime`, and `endTime` are not sent, the most recent aggregate trades will be returned. - Only market trades will be aggregated and returned, which means the insurance fund trades and ADL trades won't be aggregated. - Sending both `startTime`/`endTime` and `fromId` might cause response timeout, please send either `fromId` or `startTime`/`endTime`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingCoinFutures\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string | Symbol
$fromId = 1; // int | ID to get aggregate trades from INCLUSIVE.
$startTime = 1623319461670; // int | Timestamp in ms to get aggregate trades from INCLUSIVE.
$endTime = 1641782889000; // int | Timestamp in ms to get aggregate trades until INCLUSIVE.
$limit = 30; // int | Maximum number of records to return.

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
| **symbol** | **string**| Symbol | |
| **fromId** | **int**| ID to get aggregate trades from INCLUSIVE. | [optional] |
| **startTime** | **int**| Timestamp in ms to get aggregate trades from INCLUSIVE. | [optional] |
| **endTime** | **int**| Timestamp in ms to get aggregate trades until INCLUSIVE. | [optional] |
| **limit** | **int**| Maximum number of records to return. | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingCoinFutures\Model\CompressedAggregateTradesListResponse**](../Model/CompressedAggregateTradesListResponse.md)

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
continuousContractKlineCandlestickData($pair, $contractType, $interval, $startTime, $endTime, $limit): \Binance\Client\DerivativesTradingCoinFutures\Model\ContinuousContractKlineCandlestickDataResponse
```

Continuous Contract Kline/Candlestick Data

Kline/candlestick bars for a specific contract type. Klines are uniquely identified by their open time.  Weight: based on parameter `LIMIT`  | LIMIT | weight | | --- | --- | | [1,100) | 1 | | [100, 500) | 2 | | [500, 1000] | 5 | | > 1000 | 10 |  Notes: - The difference between `startTime` and `endTime` can only be up to 200 days - Between `startTime` and `endTime`, the most recent `limit` data from `endTime` will be returned:   - If `startTime` and `endTime` are not sent, current timestamp will be set as `endTime`, and the most recent data will be returned.   - If `startTime` is sent only, the timestamp of 200 days after `startTime` will be set as `endTime`(up to the current time)   - If `endTime` is sent only, the timestamp of 200 days before `endTime` will be set as `startTime`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingCoinFutures\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pair = BTCUSD; // string | After CM migration, accepts both CM and UM pair values.
$contractType = new \Binance\Client\DerivativesTradingCoinFutures\Model\\Binance\Client\DerivativesTradingCoinFutures\Model\ContractType(); // \Binance\Client\DerivativesTradingCoinFutures\Model\ContractType
$interval = new \Binance\Client\DerivativesTradingCoinFutures\Model\\Binance\Client\DerivativesTradingCoinFutures\Model\Interval(); // \Binance\Client\DerivativesTradingCoinFutures\Model\Interval | Interval
$startTime = 1623319461670; // int | Start time
$endTime = 1641782889000; // int | End time
$limit = 30; // int | Maximum number of records to return.

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
| **pair** | **string**| After CM migration, accepts both CM and UM pair values. | |
| **contractType** | [**\Binance\Client\DerivativesTradingCoinFutures\Model\ContractType**](../Model/.md)|  | |
| **interval** | [**\Binance\Client\DerivativesTradingCoinFutures\Model\Interval**](../Model/.md)| Interval | |
| **startTime** | **int**| Start time | [optional] |
| **endTime** | **int**| End time | [optional] |
| **limit** | **int**| Maximum number of records to return. | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingCoinFutures\Model\ContinuousContractKlineCandlestickDataResponse**](../Model/ContinuousContractKlineCandlestickDataResponse.md)

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
exchangeInformation(): \Binance\Client\DerivativesTradingCoinFutures\Model\ExchangeInformationResponse
```

Exchange Information

Current exchange trading rules and symbol information  Weight(IP): 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingCoinFutures\Api\MarketDataApi(
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

[**\Binance\Client\DerivativesTradingCoinFutures\Model\ExchangeInformationResponse**](../Model/ExchangeInformationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFundingRateHistoryOfPerpetualFutures()`

```php
getFundingRateHistoryOfPerpetualFutures($symbol, $startTime, $endTime, $limit): \Binance\Client\DerivativesTradingCoinFutures\Model\GetFundingRateHistoryOfPerpetualFuturesResponse
```

Get Funding Rate History of Perpetual Futures

Get Funding Rate History of Perpetual Futures  Weight(IP): 1  Notes: - empty array will be returned for delivery symbols.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingCoinFutures\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string | Symbol
$startTime = 1623319461670; // int | Timestamp in ms to get funding rate from INCLUSIVE.
$endTime = 1641782889000; // int | Timestamp in ms to get funding rate until INCLUSIVE.
$limit = 30; // int | Maximum number of records to return.

try {
    $result = $apiInstance->getFundingRateHistoryOfPerpetualFutures($symbol, $startTime, $endTime, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->getFundingRateHistoryOfPerpetualFutures: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**| Symbol | |
| **startTime** | **int**| Timestamp in ms to get funding rate from INCLUSIVE. | [optional] |
| **endTime** | **int**| Timestamp in ms to get funding rate until INCLUSIVE. | [optional] |
| **limit** | **int**| Maximum number of records to return. | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingCoinFutures\Model\GetFundingRateHistoryOfPerpetualFuturesResponse**](../Model/GetFundingRateHistoryOfPerpetualFuturesResponse.md)

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
getFundingRateInfo(): \Binance\Client\DerivativesTradingCoinFutures\Model\GetFundingRateInfoResponse
```

Get Funding Rate Info

Query funding rate info for symbols that had FundingRateCap/FundingRateFloor/fundingIntervalHours adjustment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingCoinFutures\Api\MarketDataApi(
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

[**\Binance\Client\DerivativesTradingCoinFutures\Model\GetFundingRateInfoResponse**](../Model/GetFundingRateInfoResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `indexPriceAndMarkPrice()`

```php
indexPriceAndMarkPrice($symbol, $pair): \Binance\Client\DerivativesTradingCoinFutures\Model\IndexPriceAndMarkPriceResponse
```

Index Price and Mark Price

Query index price and mark price  Weight(IP): 10

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingCoinFutures\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSD_PERP; // string
$pair = BTCUSD; // string

try {
    $result = $apiInstance->indexPriceAndMarkPrice($symbol, $pair);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->indexPriceAndMarkPrice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | [optional] |
| **pair** | **string**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingCoinFutures\Model\IndexPriceAndMarkPriceResponse**](../Model/IndexPriceAndMarkPriceResponse.md)

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
indexPriceKlineCandlestickData($pair, $interval, $startTime, $endTime, $limit): \Binance\Client\DerivativesTradingCoinFutures\Model\IndexPriceKlineCandlestickDataResponse
```

Index Price Kline/Candlestick Data

Kline/candlestick bars for the index price of a pair. Klines are uniquely identified by their open time.  Weight: Based on parameter `LIMIT`  | LIMIT | weight | | --- | --- | | [1,100) | 1 | | [100, 500) | 2 | | [500, 1000] | 5 | | > 1000 | 10 |  Notes: - The difference between `startTime` and `endTime` can only be up to 200 days - Between `startTime` and `endTime`, the most recent `limit` data from `endTime` will be returned:   - If `startTime` and `endTime` are not sent, current timestamp will be set as `endTime`, and the most recent data will be returned.   - If `startTime` is sent only, the timestamp of 200 days after `startTime` will be set as `endTime`(up to the current time)   - If `endTime` is sent only, the timestamp of 200 days before `endTime` will be set as `startTime`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingCoinFutures\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pair = BTCUSD; // string | After CM migration, accepts both CM and UM pair values.
$interval = new \Binance\Client\DerivativesTradingCoinFutures\Model\\Binance\Client\DerivativesTradingCoinFutures\Model\Interval(); // \Binance\Client\DerivativesTradingCoinFutures\Model\Interval | Interval
$startTime = 1623319461670; // int | Start time
$endTime = 1641782889000; // int | End time
$limit = 30; // int | Maximum number of records to return.

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
| **pair** | **string**| After CM migration, accepts both CM and UM pair values. | |
| **interval** | [**\Binance\Client\DerivativesTradingCoinFutures\Model\Interval**](../Model/.md)| Interval | |
| **startTime** | **int**| Start time | [optional] |
| **endTime** | **int**| End time | [optional] |
| **limit** | **int**| Maximum number of records to return. | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingCoinFutures\Model\IndexPriceKlineCandlestickDataResponse**](../Model/IndexPriceKlineCandlestickDataResponse.md)

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
klineCandlestickData($symbol, $interval, $startTime, $endTime, $limit): \Binance\Client\DerivativesTradingCoinFutures\Model\KlineCandlestickDataResponse
```

Kline/Candlestick Data

Kline/candlestick bars for a symbol. Klines are uniquely identified by their open time.  Weight: Based on parameter `LIMIT`  | LIMIT | weight | | --- | --- | | [1,100) | 1 | | [100, 500) | 2 | | [500, 1000] | 5 | | > 1000 | 10 |  Notes: - The difference between `startTime` and `endTime` can only be up to 200 days - Between `startTime` and `endTime`, the most recent `limit` data from `endTime` will be returned:   - If `startTime` and `endTime` are not sent, current timestamp will be set as `endTime`, and the most recent data will be returned.   - If `startTime` is sent only, the timestamp of 200 days after `startTime` will be set as `endTime`(up to the current time)   - If `endTime` is sent only, the timestamp of 200 days before `endTime` will be set as `startTime`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingCoinFutures\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSD; // string | After CM migration, accepts both CM and UM symbols.
$interval = new \Binance\Client\DerivativesTradingCoinFutures\Model\\Binance\Client\DerivativesTradingCoinFutures\Model\Interval(); // \Binance\Client\DerivativesTradingCoinFutures\Model\Interval | Interval
$startTime = 1623319461670; // int | Start time
$endTime = 1641782889000; // int | End time
$limit = 30; // int | Maximum number of records to return.

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
| **symbol** | **string**| After CM migration, accepts both CM and UM symbols. | |
| **interval** | [**\Binance\Client\DerivativesTradingCoinFutures\Model\Interval**](../Model/.md)| Interval | |
| **startTime** | **int**| Start time | [optional] |
| **endTime** | **int**| End time | [optional] |
| **limit** | **int**| Maximum number of records to return. | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingCoinFutures\Model\KlineCandlestickDataResponse**](../Model/KlineCandlestickDataResponse.md)

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
longShortRatio($pair, $period, $limit, $startTime, $endTime): \Binance\Client\DerivativesTradingCoinFutures\Model\LongShortRatioResponse
```

Long/Short Ratio

Query symbol Long/Short Ratio  Weight(IP): 1  Notes: - If startTime and endTime are not sent, the most recent data is returned. - Only the data of the latest 30 days is available.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingCoinFutures\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pair = 'pair_example'; // string | BTCUSD
$period = new \Binance\Client\DerivativesTradingCoinFutures\Model\\Binance\Client\DerivativesTradingCoinFutures\Model\Period(); // \Binance\Client\DerivativesTradingCoinFutures\Model\Period
$limit = 30; // int | Maximum number of records to return.
$startTime = 1623319461670; // int
$endTime = 1641782889000; // int

try {
    $result = $apiInstance->longShortRatio($pair, $period, $limit, $startTime, $endTime);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->longShortRatio: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pair** | **string**| BTCUSD | |
| **period** | [**\Binance\Client\DerivativesTradingCoinFutures\Model\Period**](../Model/.md)|  | |
| **limit** | **int**| Maximum number of records to return. | [optional] |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingCoinFutures\Model\LongShortRatioResponse**](../Model/LongShortRatioResponse.md)

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
markPriceKlineCandlestickData($symbol, $interval, $startTime, $endTime, $limit): \Binance\Client\DerivativesTradingCoinFutures\Model\MarkPriceKlineCandlestickDataResponse
```

Mark Price Kline/Candlestick Data

Kline/candlestick bars for the mark price of a symbol. Klines are uniquely identified by their open time.  Weight: Based on parameter `LIMIT`  | LIMIT | weight | | --- | --- | | [1,100) | 1 | | [100, 500) | 2 | | [500, 1000] | 5 | | > 1000 | 10 |  Notes: - The difference between `startTime` and `endTime` can only be up to 200 days - Between `startTime` and `endTime`, the most recent `limit` data from `endTime` will be returned:   - If `startTime` and `endTime` are not sent, current timestamp will be set as `endTime`, and the most recent data will be returned.   - If `startTime` is sent only, the timestamp of 200 days after `startTime` will be set as `endTime`(up to the current time)   - If `endTime` is sent only, the timestamp of 200 days before `endTime` will be set as `startTime`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingCoinFutures\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSD; // string | After CM migration, accepts both CM and UM symbols.
$interval = new \Binance\Client\DerivativesTradingCoinFutures\Model\\Binance\Client\DerivativesTradingCoinFutures\Model\Interval(); // \Binance\Client\DerivativesTradingCoinFutures\Model\Interval | Interval
$startTime = 1623319461670; // int | Start time
$endTime = 1641782889000; // int | End time
$limit = 30; // int | Maximum number of records to return.

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
| **symbol** | **string**| After CM migration, accepts both CM and UM symbols. | |
| **interval** | [**\Binance\Client\DerivativesTradingCoinFutures\Model\Interval**](../Model/.md)| Interval | |
| **startTime** | **int**| Start time | [optional] |
| **endTime** | **int**| End time | [optional] |
| **limit** | **int**| Maximum number of records to return. | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingCoinFutures\Model\MarkPriceKlineCandlestickDataResponse**](../Model/MarkPriceKlineCandlestickDataResponse.md)

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
oldTradesLookup($symbol, $limit, $fromId): \Binance\Client\DerivativesTradingCoinFutures\Model\OldTradesLookupResponse
```

Old Trades Lookup (MARKET_DATA)

Get older market historical trades.  Weight(IP): 20  Security Type: MARKET_DATA  Notes: - Market trades means trades filled in the order book. Only market trades will be returned, which means the insurance fund trades and ADL trades won't be returned. - Only supports data from within the last one month

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingCoinFutures\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string | Symbol
$limit = 30; // int | Maximum number of records to return.
$fromId = 595103; // int | TradeId to fetch from. Default gets most recent trades.

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
| **symbol** | **string**| Symbol | |
| **limit** | **int**| Maximum number of records to return. | [optional] |
| **fromId** | **int**| TradeId to fetch from. Default gets most recent trades. | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingCoinFutures\Model\OldTradesLookupResponse**](../Model/OldTradesLookupResponse.md)

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
openInterest($symbol): \Binance\Client\DerivativesTradingCoinFutures\Model\OpenInterestResponse
```

Open Interest

Get present open interest of a specific symbol.  Weight(IP): 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingCoinFutures\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSD_200626; // string | Symbol

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
| **symbol** | **string**| Symbol | |

### Return type

[**\Binance\Client\DerivativesTradingCoinFutures\Model\OpenInterestResponse**](../Model/OpenInterestResponse.md)

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
openInterestStatistics($pair, $contractType, $period, $limit, $startTime, $endTime): \Binance\Client\DerivativesTradingCoinFutures\Model\OpenInterestStatisticsResponse
```

Open Interest Statistics

Query open interest stats  Weight(IP): 1  Notes: - If startTime and endTime are not sent, the most recent data is returned. - Only the data of the latest 30 days is available.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingCoinFutures\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pair = BTCUSD; // string
$contractType = new \Binance\Client\DerivativesTradingCoinFutures\Model\\Binance\Client\DerivativesTradingCoinFutures\Model\ContractType(); // \Binance\Client\DerivativesTradingCoinFutures\Model\ContractType
$period = new \Binance\Client\DerivativesTradingCoinFutures\Model\\Binance\Client\DerivativesTradingCoinFutures\Model\Period(); // \Binance\Client\DerivativesTradingCoinFutures\Model\Period
$limit = 30; // int | Maximum number of records to return.
$startTime = 1623319461670; // int
$endTime = 1641782889000; // int

try {
    $result = $apiInstance->openInterestStatistics($pair, $contractType, $period, $limit, $startTime, $endTime);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->openInterestStatistics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pair** | **string**|  | |
| **contractType** | [**\Binance\Client\DerivativesTradingCoinFutures\Model\ContractType**](../Model/.md)|  | |
| **period** | [**\Binance\Client\DerivativesTradingCoinFutures\Model\Period**](../Model/.md)|  | |
| **limit** | **int**| Maximum number of records to return. | [optional] |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingCoinFutures\Model\OpenInterestStatisticsResponse**](../Model/OpenInterestStatisticsResponse.md)

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
orderBook($symbol, $limit): \Binance\Client\DerivativesTradingCoinFutures\Model\OrderBookResponse
```

Order Book

Query orderbook on specific symbol  Weight: Adjusted based on the limit:  | Limit | Weight | | ------------ | ------------ | | 5, 10, 20, 50 | 2 | | 100 | 5 | | 500 | 10 | | 1000 | 20 |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingCoinFutures\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSD_PERP; // string | Symbol
$limit = 500; // int | Valid limits:[5, 10, 20, 50, 100, 500, 1000].

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
| **symbol** | **string**| Symbol | |
| **limit** | **int**| Valid limits:[5, 10, 20, 50, 100, 500, 1000]. | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingCoinFutures\Model\OrderBookResponse**](../Model/OrderBookResponse.md)

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
premiumIndexKlineData($symbol, $interval, $startTime, $endTime, $limit): \Binance\Client\DerivativesTradingCoinFutures\Model\PremiumIndexKlineDataResponse
```

Premium index Kline Data

Premium index kline bars of a symbol. Klines are uniquely identified by their open time.  Weight: Based on parameter `LIMIT`  | LIMIT       | weight | | ----------- | ------ | | [1,100)     | 1      | | [100, 500)  | 2      | | [500, 1000] | 5      | | > 1000      | 10     |  Notes: - If startTime and endTime are not sent, the most recent klines are returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingCoinFutures\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSD; // string | After CM migration, accepts both CM and UM symbols.
$interval = new \Binance\Client\DerivativesTradingCoinFutures\Model\\Binance\Client\DerivativesTradingCoinFutures\Model\Interval(); // \Binance\Client\DerivativesTradingCoinFutures\Model\Interval | Interval
$startTime = 1623319461670; // int | Start time
$endTime = 1641782889000; // int | End time
$limit = 30; // int | Maximum number of records to return.

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
| **symbol** | **string**| After CM migration, accepts both CM and UM symbols. | |
| **interval** | [**\Binance\Client\DerivativesTradingCoinFutures\Model\Interval**](../Model/.md)| Interval | |
| **startTime** | **int**| Start time | [optional] |
| **endTime** | **int**| End time | [optional] |
| **limit** | **int**| Maximum number of records to return. | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingCoinFutures\Model\PremiumIndexKlineDataResponse**](../Model/PremiumIndexKlineDataResponse.md)

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
queryIndexPriceConstituents($symbol): \Binance\Client\DerivativesTradingCoinFutures\Model\QueryIndexPriceConstituentsResponse
```

Query Index Price Constituents

Query index price constituents  Weight(IP): 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingCoinFutures\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSD; // string | Symbol

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
| **symbol** | **string**| Symbol | |

### Return type

[**\Binance\Client\DerivativesTradingCoinFutures\Model\QueryIndexPriceConstituentsResponse**](../Model/QueryIndexPriceConstituentsResponse.md)

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
recentTradesList($symbol, $limit): \Binance\Client\DerivativesTradingCoinFutures\Model\RecentTradesListResponse
```

Recent Trades List

Get recent market trades  Weight(IP): 5  Notes: - Market trades means trades filled in the order book. Only market trades will be returned, which means the insurance fund trades and ADL trades won't be returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingCoinFutures\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSD; // string | Symbol
$limit = 30; // int | Maximum number of records to return.

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
| **symbol** | **string**| Symbol | |
| **limit** | **int**| Maximum number of records to return. | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingCoinFutures\Model\RecentTradesListResponse**](../Model/RecentTradesListResponse.md)

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
symbolOrderBookTicker($symbol, $pair): \Binance\Client\DerivativesTradingCoinFutures\Model\SymbolOrderBookTickerResponse
```

Symbol Order Book Ticker

Best price/qty on the order book for a symbol or symbols.  Weight: **2** for a single symbol, **5** when the symbol parameter is omitted  Notes: - Symbol and pair cannot be sent together - If a pair is sent,tickers for all symbols of the pair will be returned - If either a pair or symbol is sent, tickers for all symbols of all pairs will be returned

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingCoinFutures\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSD_200626; // string | Symbol
$pair = BTCUSD; // string | Symbol

try {
    $result = $apiInstance->symbolOrderBookTicker($symbol, $pair);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->symbolOrderBookTicker: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**| Symbol | [optional] |
| **pair** | **string**| Symbol | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingCoinFutures\Model\SymbolOrderBookTickerResponse**](../Model/SymbolOrderBookTickerResponse.md)

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
symbolPriceTicker($symbol, $pair): \Binance\Client\DerivativesTradingCoinFutures\Model\SymbolPriceTickerResponse
```

Symbol Price Ticker

Latest price for a symbol or symbols.  Weight: **1** for a single symbol, **2** when the symbol parameter is omitted  Notes: - Symbol and pair cannot be sent together - If a pair is sent,tickers for all symbols of the pair will be returned - If either a pair or symbol is sent, tickers for all symbols of all pairs will be returned

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingCoinFutures\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSD_200626; // string | Symbol
$pair = BTCUSD; // string | Pair

try {
    $result = $apiInstance->symbolPriceTicker($symbol, $pair);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->symbolPriceTicker: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**| Symbol | [optional] |
| **pair** | **string**| Pair | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingCoinFutures\Model\SymbolPriceTickerResponse**](../Model/SymbolPriceTickerResponse.md)

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
takerBuySellVolume($pair, $contractType, $period, $limit, $startTime, $endTime): \Binance\Client\DerivativesTradingCoinFutures\Model\TakerBuySellVolumeResponse
```

Taker Buy/Sell Volume

Taker Buy Volume: the total volume of buy orders filled by takers within the period.  Taker Sell Volume: the total volume of sell orders filled by takers within the period.  Weight(IP): 1  Notes: - If startTime and endTime are not sent, the most recent data is returned. - Only the data of the latest 30 days is available.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingCoinFutures\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pair = BTCUSD; // string
$contractType = new \Binance\Client\DerivativesTradingCoinFutures\Model\\Binance\Client\DerivativesTradingCoinFutures\Model\ContractType(); // \Binance\Client\DerivativesTradingCoinFutures\Model\ContractType
$period = new \Binance\Client\DerivativesTradingCoinFutures\Model\\Binance\Client\DerivativesTradingCoinFutures\Model\Period(); // \Binance\Client\DerivativesTradingCoinFutures\Model\Period
$limit = 30; // int | Maximum number of records to return.
$startTime = 1623319461670; // int
$endTime = 1641782889000; // int

try {
    $result = $apiInstance->takerBuySellVolume($pair, $contractType, $period, $limit, $startTime, $endTime);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->takerBuySellVolume: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pair** | **string**|  | |
| **contractType** | [**\Binance\Client\DerivativesTradingCoinFutures\Model\ContractType**](../Model/.md)|  | |
| **period** | [**\Binance\Client\DerivativesTradingCoinFutures\Model\Period**](../Model/.md)|  | |
| **limit** | **int**| Maximum number of records to return. | [optional] |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingCoinFutures\Model\TakerBuySellVolumeResponse**](../Model/TakerBuySellVolumeResponse.md)

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

Test connectivity to the Rest API.  Weight(IP): 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingCoinFutures\Api\MarketDataApi(
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
ticker24hrPriceChangeStatistics($symbol, $pair): \Binance\Client\DerivativesTradingCoinFutures\Model\Ticker24hrPriceChangeStatisticsResponse
```

24hr Ticker Price Change Statistics

24 hour rolling window price change statistics.  Weight: **1** for a single symbol, **40** when the symbol parameter is omitted **Careful** when accessing this with no symbol.  Notes: - Symbol and pair cannot be sent together - If a pair is sent,tickers for all symbols of the pair will be returned - If either a pair or symbol is sent, tickers for all symbols of all pairs will be returned

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingCoinFutures\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSD_200925; // string | Symbol
$pair = BTCUSD; // string | Pair

try {
    $result = $apiInstance->ticker24hrPriceChangeStatistics($symbol, $pair);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->ticker24hrPriceChangeStatistics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**| Symbol | [optional] |
| **pair** | **string**| Pair | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingCoinFutures\Model\Ticker24hrPriceChangeStatisticsResponse**](../Model/Ticker24hrPriceChangeStatisticsResponse.md)

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
topTraderLongShortRatioAccounts($symbol, $period, $limit, $startTime, $endTime): \Binance\Client\DerivativesTradingCoinFutures\Model\TopTraderLongShortRatioAccountsResponse
```

Top Trader Long/Short Account Ratio

The proportion of net long and net short accounts to total accounts of the top 20% users with the highest margin balance. Each account is counted once only.  Long Account % = Accounts of top traders with net long positions / Total accounts of top traders with open positions  Short Account % = Accounts of top traders with net short positions / Total accounts of top traders with open positions  Long/Short Ratio (Accounts) = Long Account % / Short Account %  Weight(IP): 1  Security Type: Accounts  Notes: - If startTime and endTime are not sent, the most recent data is returned. - Only the data of the latest 30 days is available.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingCoinFutures\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string | Symbol
$period = new \Binance\Client\DerivativesTradingCoinFutures\Model\\Binance\Client\DerivativesTradingCoinFutures\Model\Period(); // \Binance\Client\DerivativesTradingCoinFutures\Model\Period
$limit = 30; // int | Maximum number of records to return.
$startTime = 1623319461670; // int
$endTime = 1641782889000; // int

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
| **symbol** | **string**| Symbol | |
| **period** | [**\Binance\Client\DerivativesTradingCoinFutures\Model\Period**](../Model/.md)|  | |
| **limit** | **int**| Maximum number of records to return. | [optional] |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingCoinFutures\Model\TopTraderLongShortRatioAccountsResponse**](../Model/TopTraderLongShortRatioAccountsResponse.md)

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
topTraderLongShortRatioPositions($pair, $period, $limit, $startTime, $endTime): \Binance\Client\DerivativesTradingCoinFutures\Model\TopTraderLongShortRatioPositionsResponse
```

Top Trader Long/Short Position Ratio

The proportion of net long and net short positions to total open positions of the top 20% users with the highest margin balance.  Long Position % = Long positions of top traders / Total open positions of top traders  Short Position % = Short positions of top traders / Total open positions of top traders  Long/Short Ratio (Positions) = Long Position % / Short Position %  Weight(IP): 1  Security Type: Positions  Notes: - If startTime and endTime are not sent, the most recent data is returned. - Only the data of the latest 30 days is available.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingCoinFutures\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pair = BTCUSD; // string
$period = new \Binance\Client\DerivativesTradingCoinFutures\Model\\Binance\Client\DerivativesTradingCoinFutures\Model\Period(); // \Binance\Client\DerivativesTradingCoinFutures\Model\Period
$limit = 30; // int | Maximum number of records to return.
$startTime = 1623319461670; // int
$endTime = 1641782889000; // int

try {
    $result = $apiInstance->topTraderLongShortRatioPositions($pair, $period, $limit, $startTime, $endTime);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->topTraderLongShortRatioPositions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pair** | **string**|  | |
| **period** | [**\Binance\Client\DerivativesTradingCoinFutures\Model\Period**](../Model/.md)|  | |
| **limit** | **int**| Maximum number of records to return. | [optional] |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingCoinFutures\Model\TopTraderLongShortRatioPositionsResponse**](../Model/TopTraderLongShortRatioPositionsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
