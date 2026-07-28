# Binance\Client\MarginTrading\BorrowRepayApi



All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getFutureHourlyInterestRate()**](BorrowRepayApi.md#getFutureHourlyInterestRate) | **GET** /sapi/v1/margin/next-hourly-interest-rate | Get future hourly interest rate (USER_DATA) |
| [**getInterestHistory()**](BorrowRepayApi.md#getInterestHistory) | **GET** /sapi/v1/margin/interestHistory | Get Interest History (USER_DATA) |
| [**marginAccountBorrowRepay()**](BorrowRepayApi.md#marginAccountBorrowRepay) | **POST** /sapi/v1/margin/borrow-repay | Margin account borrow/repay (USER_DATA) |
| [**queryBorrowRepayRecordsInMarginAccount()**](BorrowRepayApi.md#queryBorrowRepayRecordsInMarginAccount) | **GET** /sapi/v1/margin/borrow-repay | Query borrow/repay records in Margin account (USER_DATA) |
| [**queryMarginInterestRateHistory()**](BorrowRepayApi.md#queryMarginInterestRateHistory) | **GET** /sapi/v1/margin/interestRateHistory | Query Margin Interest Rate History (USER_DATA) |
| [**queryMaxBorrow()**](BorrowRepayApi.md#queryMaxBorrow) | **GET** /sapi/v1/margin/maxBorrowable | Query Max Borrow (USER_DATA) |


## `getFutureHourlyInterestRate()`

```php
getFutureHourlyInterestRate($assets, $isIsolated): \Binance\Client\MarginTrading\Model\GetFutureHourlyInterestRateResponse
```

Get future hourly interest rate (USER_DATA)

Get future hourly interest rate  Weight(IP): 100  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\BorrowRepayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$assets = BTC,ETH; // string
$isIsolated = new \Binance\Client\MarginTrading\Model\\Binance\Client\MarginTrading\Model\IsIsolated(); // \Binance\Client\MarginTrading\Model\IsIsolated

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
| **assets** | **string**|  | |
| **isIsolated** | [**\Binance\Client\MarginTrading\Model\IsIsolated**](../Model/.md)|  | |

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

Get Interest History  Weight(IP): 1  Security Type: USER_DATA  Notes: - Response in descending order  - If isolatedSymbol is not sent, crossed margin data will be returned  - The max interval between `startTime` and `endTime` is 30 days. It is a MUST to ensure data correctness.  - If `startTime`and `endTime` not sent, return records of the last 7 days by default.  - If `startTime` is sent and `endTime` is not sent, return records of [max(`startTime`, now-30d), now].  - If `startTime` is not sent and `endTime` is sent, return records of [`endTime`-7, `endTime`]  - `type` in response has 4 enums:  - `PERIODIC` interest charged per hour  - `ON_BORROW` first interest charged on borrow  - `PERIODIC_CONVERTED` interest charged per hour converted into BNB  - `ON_BORROW_CONVERTED` first interest charged on borrow converted into BNB  - `PORTFOLIO` interest charged daily on the portfolio margin negative balance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\BorrowRepayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asset = USDT; // string
$isolatedSymbol = BNBUSDT; // string
$startTime = 1623319461670; // int | Only supports querying data from the past 90 days.
$endTime = 1641782889000; // int
$current = 1; // int
$size = 10; // int
$recvWindow = 5000; // int

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
| **isolatedSymbol** | **string**|  | [optional] |
| **startTime** | **int**| Only supports querying data from the past 90 days. | [optional] |
| **endTime** | **int**|  | [optional] |
| **current** | **int**|  | [optional] |
| **size** | **int**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

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

Margin account borrow/repay (USER_DATA)

Margin account borrow/repay  Weight(UID): 1500  Security Type: USER_DATA

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

Query borrow/repay records in Margin account (USER_DATA)

Query borrow/repay records in Margin account  Weight(IP): 10  Security Type: USER_DATA  Notes: - `txId` or `startTime` must be sent. `txId` takes precedence.  - Response in descending order  - If an asset is sent, data within 30 days before `endTime`; If an asset is not sent, data within 7 days before `endTime`  - If neither `startTime` nor `endTime` is sent, the recent 7-day data will be returned.  - `startTime` set as `endTime` - 7 days by default, `endTime` set as current time by default

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\BorrowRepayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = new \Binance\Client\MarginTrading\Model\\Binance\Client\MarginTrading\Model\OrderType(); // \Binance\Client\MarginTrading\Model\OrderType
$asset = BNB; // string
$isolatedSymbol = BNBUSDT; // string
$txId = 1; // int
$startTime = 1623319461670; // int
$endTime = 1641782889000; // int
$current = 1; // int
$size = 10; // int
$recvWindow = 5000; // int

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
| **type** | [**\Binance\Client\MarginTrading\Model\OrderType**](../Model/.md)|  | |
| **asset** | **string**|  | [optional] |
| **isolatedSymbol** | **string**|  | [optional] |
| **txId** | **int**|  | [optional] |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **current** | **int**|  | [optional] |
| **size** | **int**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

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

Query Margin Interest Rate History  Weight(IP): 1  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\BorrowRepayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asset = BTC; // string
$vipLevel = 1; // int
$startTime = 1623319461670; // int
$endTime = 1641782889000; // int
$recvWindow = 5000; // int

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
| **vipLevel** | **int**|  | [optional] |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

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

Query Max Borrow  Weight(IP): 50  Security Type: USER_DATA  Notes: - If isolatedSymbol is not sent, crossed margin data will be sent. - `borrowLimit` is also available from [https://www.binance.com/en/margin-fee](https://www.binance.com/en/margin-fee)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\BorrowRepayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asset = BTC; // string
$isolatedSymbol = BTCUSDT; // string
$recvWindow = 5000; // int

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
| **isolatedSymbol** | **string**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

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
