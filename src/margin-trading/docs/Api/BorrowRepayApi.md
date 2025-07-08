# Binance\Client\MarginTrading\BorrowRepayApi

All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getFutureHourlyInterestRate()**](BorrowRepayApi.md#getFutureHourlyInterestRate) | **GET** /sapi/v1/margin/next-hourly-interest-rate | Get future hourly interest rate (USER_DATA) |
| [**getInterestHistory()**](BorrowRepayApi.md#getInterestHistory) | **GET** /sapi/v1/margin/interestHistory | Get Interest History (USER_DATA) |
| [**marginAccountBorrowRepay()**](BorrowRepayApi.md#marginAccountBorrowRepay) | **POST** /sapi/v1/margin/borrow-repay | Margin account borrow/repay(MARGIN) |
| [**queryBorrowRepayRecordsInMarginAccount()**](BorrowRepayApi.md#queryBorrowRepayRecordsInMarginAccount) | **GET** /sapi/v1/margin/borrow-repay | Query borrow/repay records in Margin account(USER_DATA) |
| [**queryMarginInterestRateHistory()**](BorrowRepayApi.md#queryMarginInterestRateHistory) | **GET** /sapi/v1/margin/interestRateHistory | Query Margin Interest Rate History (USER_DATA) |
| [**queryMaxBorrow()**](BorrowRepayApi.md#queryMaxBorrow) | **GET** /sapi/v1/margin/maxBorrowable | Query Max Borrow (USER_DATA) |


## `getFutureHourlyInterestRate()`

```php
getFutureHourlyInterestRate($assets, $isIsolated): \Binance\Client\MarginTrading\Model\GetFutureHourlyInterestRateResponse
```

Get future hourly interest rate (USER_DATA)

Get future hourly interest rate  Weight: 100

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\BorrowRepayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$assets = 'assets_example'; // string | List of assets, separated by commas, up to 20
$isIsolated = 'isIsolated_example'; // string | for isolated margin or not, \"TRUE\", \"FALSE\"

try {
    $result = $apiInstance->getFutureHourlyInterestRate($assets, $isIsolated);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BorrowRepayApi->getFutureHourlyInterestRate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **assets** | **string**| List of assets, separated by commas, up to 20 | |
| **isIsolated** | **string**| for isolated margin or not, \&quot;TRUE\&quot;, \&quot;FALSE\&quot; | |

### Return type

[**\Binance\Client\MarginTrading\Model\GetFutureHourlyInterestRateResponse**](../Model/GetFutureHourlyInterestRateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInterestHistory()`

```php
getInterestHistory($asset, $isolatedSymbol, $startTime, $endTime, $current, $size, $recvWindow): \Binance\Client\MarginTrading\Model\GetInterestHistoryResponse
```

Get Interest History (USER_DATA)

Get Interest History  * Response in descending order * If isolatedSymbol is not sent, crossed margin data will be returned * The max interval between `startTime` and `endTime` is 30 days.  It is a MUST to ensure data correctness. * If `startTime`and `endTime` not sent, return records of the last 7 days by default. * If `startTime` is sent and `endTime` is not sent, return records of [max(`startTime`, now-30d), now]. * If `startTime` is not sent and `endTime` is sent, return records of [`endTime`-7, `endTime`] * `type` in response has 4 enums: * `PERIODIC` interest charged per hour * `ON_BORROW` first interest charged on borrow * `PERIODIC_CONVERTED` interest charged per hour converted into BNB * `ON_BORROW_CONVERTED` first interest charged on borrow converted into BNB * `PORTFOLIO` interest charged daily on the portfolio margin negative balance  Weight: 1(IP)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\BorrowRepayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asset = 'asset_example'; // string
$isolatedSymbol = 'isolatedSymbol_example'; // string | isolated symbol
$startTime = 56; // int | 只支持查询最近90天的数据
$endTime = 56; // int
$current = 56; // int | Currently querying page. Start from 1. Default:1
$size = 56; // int | Default:10 Max:100
$recvWindow = 56; // int | No more than 60000

try {
    $result = $apiInstance->getInterestHistory($asset, $isolatedSymbol, $startTime, $endTime, $current, $size, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BorrowRepayApi->getInterestHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset** | **string**|  | [optional] |
| **isolatedSymbol** | **string**| isolated symbol | [optional] |
| **startTime** | **int**| 只支持查询最近90天的数据 | [optional] |
| **endTime** | **int**|  | [optional] |
| **current** | **int**| Currently querying page. Start from 1. Default:1 | [optional] |
| **size** | **int**| Default:10 Max:100 | [optional] |
| **recvWindow** | **int**| No more than 60000 | [optional] |

### Return type

[**\Binance\Client\MarginTrading\Model\GetInterestHistoryResponse**](../Model/GetInterestHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `marginAccountBorrowRepay()`

```php
marginAccountBorrowRepay($marginAccountBorrowRepayRequest): \Binance\Client\MarginTrading\Model\MarginAccountBorrowRepayResponse
```

Margin account borrow/repay(MARGIN)

Margin account borrow/repay(MARGIN)  Weight: 1500

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\BorrowRepayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$marginAccountBorrowRepayRequest = new \Binance\Client\MarginTrading\Model\MarginAccountBorrowRepayRequest(); // \Binance\Client\MarginTrading\Model\MarginAccountBorrowRepayRequest

try {
    $result = $apiInstance->marginAccountBorrowRepay($marginAccountBorrowRepayRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BorrowRepayApi->marginAccountBorrowRepay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **marginAccountBorrowRepayRequest** | [**\Binance\Client\MarginTrading\Model\MarginAccountBorrowRepayRequest**](../Model/MarginAccountBorrowRepayRequest.md)|  | |

### Return type

[**\Binance\Client\MarginTrading\Model\MarginAccountBorrowRepayResponse**](../Model/MarginAccountBorrowRepayResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryBorrowRepayRecordsInMarginAccount()`

```php
queryBorrowRepayRecordsInMarginAccount($type, $asset, $isolatedSymbol, $txId, $startTime, $endTime, $current, $size, $recvWindow): \Binance\Client\MarginTrading\Model\QueryBorrowRepayRecordsInMarginAccountResponse
```

Query borrow/repay records in Margin account(USER_DATA)

Query borrow/repay records in Margin account  * `txId` or `startTime` must be sent. `txId` takes precedence. * If an asset is sent, data within 30 days before `endTime`; If an asset is not sent, data within 7 days before `endTime` * If neither `startTime` nor `endTime` is sent, the recent 7-day data will be returned. * `startTime` set as `endTime` - 7days by default, `endTime` set as current time by default  Weight: 10(IP)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\BorrowRepayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = 'type_example'; // string | MARGIN,ISOLATED
$asset = 'asset_example'; // string
$isolatedSymbol = 'isolatedSymbol_example'; // string | isolated symbol
$txId = 56; // int | `tranId` in `POST /sapi/v1/margin/loan`
$startTime = 56; // int | 只支持查询最近90天的数据
$endTime = 56; // int
$current = 56; // int | Currently querying page. Start from 1. Default:1
$size = 56; // int | Default:10 Max:100
$recvWindow = 56; // int | No more than 60000

try {
    $result = $apiInstance->queryBorrowRepayRecordsInMarginAccount($type, $asset, $isolatedSymbol, $txId, $startTime, $endTime, $current, $size, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BorrowRepayApi->queryBorrowRepayRecordsInMarginAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**| MARGIN,ISOLATED | |
| **asset** | **string**|  | [optional] |
| **isolatedSymbol** | **string**| isolated symbol | [optional] |
| **txId** | **int**| &#x60;tranId&#x60; in &#x60;POST /sapi/v1/margin/loan&#x60; | [optional] |
| **startTime** | **int**| 只支持查询最近90天的数据 | [optional] |
| **endTime** | **int**|  | [optional] |
| **current** | **int**| Currently querying page. Start from 1. Default:1 | [optional] |
| **size** | **int**| Default:10 Max:100 | [optional] |
| **recvWindow** | **int**| No more than 60000 | [optional] |

### Return type

[**\Binance\Client\MarginTrading\Model\QueryBorrowRepayRecordsInMarginAccountResponse**](../Model/QueryBorrowRepayRecordsInMarginAccountResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryMarginInterestRateHistory()`

```php
queryMarginInterestRateHistory($asset, $vipLevel, $startTime, $endTime, $recvWindow): \Binance\Client\MarginTrading\Model\QueryMarginInterestRateHistoryResponse
```

Query Margin Interest Rate History (USER_DATA)

Query Margin Interest Rate History  Weight: 1(IP)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\BorrowRepayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asset = 'asset_example'; // string
$vipLevel = 56; // int | User's current specific margin data will be returned if vipLevel is omitted
$startTime = 56; // int | 只支持查询最近90天的数据
$endTime = 56; // int
$recvWindow = 56; // int | No more than 60000

try {
    $result = $apiInstance->queryMarginInterestRateHistory($asset, $vipLevel, $startTime, $endTime, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BorrowRepayApi->queryMarginInterestRateHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset** | **string**|  | |
| **vipLevel** | **int**| User&#39;s current specific margin data will be returned if vipLevel is omitted | [optional] |
| **startTime** | **int**| 只支持查询最近90天的数据 | [optional] |
| **endTime** | **int**|  | [optional] |
| **recvWindow** | **int**| No more than 60000 | [optional] |

### Return type

[**\Binance\Client\MarginTrading\Model\QueryMarginInterestRateHistoryResponse**](../Model/QueryMarginInterestRateHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryMaxBorrow()`

```php
queryMaxBorrow($asset, $isolatedSymbol, $recvWindow): \Binance\Client\MarginTrading\Model\QueryMaxBorrowResponse
```

Query Max Borrow (USER_DATA)

Query Max Borrow  * If isolatedSymbol is not sent, crossed margin data will be sent. * `borrowLimit` is also available from [https://www.binance.com/en/margin-fee](https://www.binance.com/en/margin-fee)  Weight: 50(IP)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\BorrowRepayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asset = 'asset_example'; // string
$isolatedSymbol = 'isolatedSymbol_example'; // string | isolated symbol
$recvWindow = 56; // int | No more than 60000

try {
    $result = $apiInstance->queryMaxBorrow($asset, $isolatedSymbol, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BorrowRepayApi->queryMaxBorrow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset** | **string**|  | |
| **isolatedSymbol** | **string**| isolated symbol | [optional] |
| **recvWindow** | **int**| No more than 60000 | [optional] |

### Return type

[**\Binance\Client\MarginTrading\Model\QueryMaxBorrowResponse**](../Model/QueryMaxBorrowResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
