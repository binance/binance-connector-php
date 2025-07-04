# Binance\Client\SimpleEarn\HistoryApi

All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCollateralRecord()**](HistoryApi.md#getCollateralRecord) | **GET** /sapi/v1/simple-earn/flexible/history/collateralRecord | Get Collateral Record(USER_DATA) |
| [**getFlexibleRedemptionRecord()**](HistoryApi.md#getFlexibleRedemptionRecord) | **GET** /sapi/v1/simple-earn/flexible/history/redemptionRecord | Get Flexible Redemption Record(USER_DATA) |
| [**getFlexibleRewardsHistory()**](HistoryApi.md#getFlexibleRewardsHistory) | **GET** /sapi/v1/simple-earn/flexible/history/rewardsRecord | Get Flexible Rewards History(USER_DATA) |
| [**getFlexibleSubscriptionRecord()**](HistoryApi.md#getFlexibleSubscriptionRecord) | **GET** /sapi/v1/simple-earn/flexible/history/subscriptionRecord | Get Flexible Subscription Record(USER_DATA) |
| [**getLockedRedemptionRecord()**](HistoryApi.md#getLockedRedemptionRecord) | **GET** /sapi/v1/simple-earn/locked/history/redemptionRecord | Get Locked Redemption Record(USER_DATA) |
| [**getLockedRewardsHistory()**](HistoryApi.md#getLockedRewardsHistory) | **GET** /sapi/v1/simple-earn/locked/history/rewardsRecord | Get Locked Rewards History(USER_DATA) |
| [**getLockedSubscriptionRecord()**](HistoryApi.md#getLockedSubscriptionRecord) | **GET** /sapi/v1/simple-earn/locked/history/subscriptionRecord | Get Locked Subscription Record(USER_DATA) |
| [**getRateHistory()**](HistoryApi.md#getRateHistory) | **GET** /sapi/v1/simple-earn/flexible/history/rateHistory | Get Rate History(USER_DATA) |


## `getCollateralRecord()`

```php
getCollateralRecord($productId, $startTime, $endTime, $current, $size, $recvWindow): \Binance\Client\SimpleEarn\Model\GetCollateralRecordResponse
```

Get Collateral Record(USER_DATA)

Get Collateral Record  * The time between `startTime` and `endTime` cannot be longer than 30 days. * If `startTime` and `endTime` are both not sent, then the last 30 days' data will be returned. * If `startTime` is sent but `endTime` is not sent, the next 30 days' data beginning from `startTime` will be returned. * If `endTime` is sent but `startTime` is not sent, the 30 days' data before `endTime` will be returned.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SimpleEarn\Api\HistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$productId = 'productId_example'; // string
$startTime = 56; // int
$endTime = 56; // int
$current = 56; // int | Currently querying the page. Start from 1. Default:1
$size = 56; // int | Default:10, Max:100
$recvWindow = 56; // int

try {
    $result = $apiInstance->getCollateralRecord($productId, $startTime, $endTime, $current, $size, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryApi->getCollateralRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **productId** | **string**|  | [optional] |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **current** | **int**| Currently querying the page. Start from 1. Default:1 | [optional] |
| **size** | **int**| Default:10, Max:100 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\SimpleEarn\Model\GetCollateralRecordResponse**](../Model/GetCollateralRecordResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFlexibleRedemptionRecord()`

```php
getFlexibleRedemptionRecord($productId, $redeemId, $asset, $startTime, $endTime, $current, $size, $recvWindow): \Binance\Client\SimpleEarn\Model\GetFlexibleRedemptionRecordResponse
```

Get Flexible Redemption Record(USER_DATA)

Get Flexible Redemption Record  * The time between `startTime` and `endTime` cannot be longer than 3 months. * If `startTime` and `endTime` are both not sent, then the last 30 days' data will be returned. * If `startTime` is sent but `endTime` is not sent, the next 30 days' data beginning from `startTime` will be returned. * If `endTime` is sent but `startTime` is not sent, the 30 days' data before `endTime` will be returned.  Weight: 150

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SimpleEarn\Api\HistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$productId = 'productId_example'; // string
$redeemId = 'redeemId_example'; // string
$asset = 'asset_example'; // string
$startTime = 56; // int
$endTime = 56; // int
$current = 56; // int | Currently querying the page. Start from 1. Default:1
$size = 56; // int | Default:10, Max:100
$recvWindow = 56; // int

try {
    $result = $apiInstance->getFlexibleRedemptionRecord($productId, $redeemId, $asset, $startTime, $endTime, $current, $size, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryApi->getFlexibleRedemptionRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **productId** | **string**|  | [optional] |
| **redeemId** | **string**|  | [optional] |
| **asset** | **string**|  | [optional] |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **current** | **int**| Currently querying the page. Start from 1. Default:1 | [optional] |
| **size** | **int**| Default:10, Max:100 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\SimpleEarn\Model\GetFlexibleRedemptionRecordResponse**](../Model/GetFlexibleRedemptionRecordResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFlexibleRewardsHistory()`

```php
getFlexibleRewardsHistory($type, $productId, $asset, $startTime, $endTime, $current, $size, $recvWindow): \Binance\Client\SimpleEarn\Model\GetFlexibleRewardsHistoryResponse
```

Get Flexible Rewards History(USER_DATA)

Get Flexible Rewards History  * The time between `startTime` and `endTime` cannot be longer than 3 months. * If `startTime` and `endTime` are both not sent, then the last 30 days' data will be returned. * If `startTime` is sent but `endTime` is not sent, the next 30 days' data beginning from `startTime` will be returned. * If `endTime` is sent but `startTime` is not sent, the 30 days' data before `endTime` will be returned.  Weight: 150

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SimpleEarn\Api\HistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = 'type_example'; // string | `Bonus` - Bonus tiered APR, `REALTIME` Real-time APR, `REWARDS` Historical rewards,`ALL`(set to default)
$productId = 'productId_example'; // string
$asset = 'asset_example'; // string
$startTime = 56; // int
$endTime = 56; // int
$current = 56; // int | Currently querying the page. Start from 1. Default:1
$size = 56; // int | Default:10, Max:100
$recvWindow = 56; // int

try {
    $result = $apiInstance->getFlexibleRewardsHistory($type, $productId, $asset, $startTime, $endTime, $current, $size, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryApi->getFlexibleRewardsHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**| &#x60;Bonus&#x60; - Bonus tiered APR, &#x60;REALTIME&#x60; Real-time APR, &#x60;REWARDS&#x60; Historical rewards,&#x60;ALL&#x60;(set to default) | |
| **productId** | **string**|  | [optional] |
| **asset** | **string**|  | [optional] |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **current** | **int**| Currently querying the page. Start from 1. Default:1 | [optional] |
| **size** | **int**| Default:10, Max:100 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\SimpleEarn\Model\GetFlexibleRewardsHistoryResponse**](../Model/GetFlexibleRewardsHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFlexibleSubscriptionRecord()`

```php
getFlexibleSubscriptionRecord($productId, $purchaseId, $asset, $startTime, $endTime, $current, $size, $recvWindow): \Binance\Client\SimpleEarn\Model\GetFlexibleSubscriptionRecordResponse
```

Get Flexible Subscription Record(USER_DATA)

Get Flexible Subscription Record  * The time between `startTime` and `endTime` cannot be longer than 3 months. * If `startTime` and `endTime` are both not sent, then the last 30 days' data will be returned. * If `startTime` is sent but `endTime` is not sent, the next 30 days' data beginning from `startTime` will be returned. * If `endTime` is sent but `startTime` is not sent, the 30 days' data before `endTime` will be returned.  Weight: 150

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SimpleEarn\Api\HistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$productId = 'productId_example'; // string
$purchaseId = 'purchaseId_example'; // string
$asset = 'asset_example'; // string
$startTime = 56; // int
$endTime = 56; // int
$current = 56; // int | Currently querying the page. Start from 1. Default:1
$size = 56; // int | Default:10, Max:100
$recvWindow = 56; // int

try {
    $result = $apiInstance->getFlexibleSubscriptionRecord($productId, $purchaseId, $asset, $startTime, $endTime, $current, $size, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryApi->getFlexibleSubscriptionRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **productId** | **string**|  | [optional] |
| **purchaseId** | **string**|  | [optional] |
| **asset** | **string**|  | [optional] |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **current** | **int**| Currently querying the page. Start from 1. Default:1 | [optional] |
| **size** | **int**| Default:10, Max:100 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\SimpleEarn\Model\GetFlexibleSubscriptionRecordResponse**](../Model/GetFlexibleSubscriptionRecordResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLockedRedemptionRecord()`

```php
getLockedRedemptionRecord($positionId, $redeemId, $asset, $startTime, $endTime, $current, $size, $recvWindow): \Binance\Client\SimpleEarn\Model\GetLockedRedemptionRecordResponse
```

Get Locked Redemption Record(USER_DATA)

Get Locked Redemption Record  * The time between `startTime` and `endTime` cannot be longer than 3 months. * If `startTime` and `endTime` are both not sent, then the last 30 days' data will be returned. * If `startTime` is sent but `endTime` is not sent, the next 30 days' data beginning from `startTime` will be returned. * If `endTime` is sent but `startTime` is not sent, the 30 days' data before `endTime` will be returned.  Weight: 150

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SimpleEarn\Api\HistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$positionId = 'positionId_example'; // string
$redeemId = 'redeemId_example'; // string
$asset = 'asset_example'; // string
$startTime = 56; // int
$endTime = 56; // int
$current = 56; // int | Currently querying the page. Start from 1. Default:1
$size = 56; // int | Default:10, Max:100
$recvWindow = 56; // int

try {
    $result = $apiInstance->getLockedRedemptionRecord($positionId, $redeemId, $asset, $startTime, $endTime, $current, $size, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryApi->getLockedRedemptionRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **positionId** | **string**|  | [optional] |
| **redeemId** | **string**|  | [optional] |
| **asset** | **string**|  | [optional] |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **current** | **int**| Currently querying the page. Start from 1. Default:1 | [optional] |
| **size** | **int**| Default:10, Max:100 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\SimpleEarn\Model\GetLockedRedemptionRecordResponse**](../Model/GetLockedRedemptionRecordResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLockedRewardsHistory()`

```php
getLockedRewardsHistory($positionId, $asset, $startTime, $endTime, $current, $size, $recvWindow): \Binance\Client\SimpleEarn\Model\GetLockedRewardsHistoryResponse
```

Get Locked Rewards History(USER_DATA)

Get Locked Rewards History  * The time between `startTime` and `endTime` cannot be longer than 3 months. * If `startTime` and `endTime` are both not sent, then the last 30 days' data will be returned. * If `startTime` is sent but `endTime` is not sent, the next 30 days' data beginning from `startTime` will be returned. * If `endTime` is sent but `startTime` is not sent, the 30 days' data before `endTime` will be returned.  Weight: 150

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SimpleEarn\Api\HistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$positionId = 'positionId_example'; // string
$asset = 'asset_example'; // string
$startTime = 56; // int
$endTime = 56; // int
$current = 56; // int | Currently querying the page. Start from 1. Default:1
$size = 56; // int | Default:10, Max:100
$recvWindow = 56; // int

try {
    $result = $apiInstance->getLockedRewardsHistory($positionId, $asset, $startTime, $endTime, $current, $size, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryApi->getLockedRewardsHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **positionId** | **string**|  | [optional] |
| **asset** | **string**|  | [optional] |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **current** | **int**| Currently querying the page. Start from 1. Default:1 | [optional] |
| **size** | **int**| Default:10, Max:100 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\SimpleEarn\Model\GetLockedRewardsHistoryResponse**](../Model/GetLockedRewardsHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLockedSubscriptionRecord()`

```php
getLockedSubscriptionRecord($purchaseId, $asset, $startTime, $endTime, $current, $size, $recvWindow): \Binance\Client\SimpleEarn\Model\GetLockedSubscriptionRecordResponse
```

Get Locked Subscription Record(USER_DATA)

Get Locked Subscription Record  * The time between `startTime` and `endTime` cannot be longer than 3 months. * If `startTime` and `endTime` are both not sent, then the last 30 days' data will be returned. * If `startTime` is sent but `endTime` is not sent, the next 30 days' data beginning from `startTime` will be returned. * If `endTime` is sent but `startTime` is not sent, the 30 days' data before `endTime` will be returned.  Weight: 150

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SimpleEarn\Api\HistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$purchaseId = 'purchaseId_example'; // string
$asset = 'asset_example'; // string
$startTime = 56; // int
$endTime = 56; // int
$current = 56; // int | Currently querying the page. Start from 1. Default:1
$size = 56; // int | Default:10, Max:100
$recvWindow = 56; // int

try {
    $result = $apiInstance->getLockedSubscriptionRecord($purchaseId, $asset, $startTime, $endTime, $current, $size, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryApi->getLockedSubscriptionRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchaseId** | **string**|  | [optional] |
| **asset** | **string**|  | [optional] |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **current** | **int**| Currently querying the page. Start from 1. Default:1 | [optional] |
| **size** | **int**| Default:10, Max:100 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\SimpleEarn\Model\GetLockedSubscriptionRecordResponse**](../Model/GetLockedSubscriptionRecordResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRateHistory()`

```php
getRateHistory($productId, $aprPeriod, $startTime, $endTime, $current, $size, $recvWindow): \Binance\Client\SimpleEarn\Model\GetRateHistoryResponse
```

Get Rate History(USER_DATA)

Get Rate History  * The time between startTime and endTime cannot be longer than 1 year. * If `startTime` and `endTime` are both not sent, then the last 30 days' data will be returned. * If `startTime` is sent but `endTime` is not sent, the next 30 days' data beginning from `startTime` will be returned. * If `endTime` is sent but `startTime` is not sent, the 30 days' data before `endTime` will be returned.  Weight: 150

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SimpleEarn\Api\HistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$productId = 'productId_example'; // string
$aprPeriod = 'aprPeriod_example'; // string | \"DAY\",\"YEAR\",default\"DAY\"
$startTime = 56; // int
$endTime = 56; // int
$current = 56; // int | Currently querying the page. Start from 1. Default:1
$size = 56; // int | Default:10, Max:100
$recvWindow = 56; // int

try {
    $result = $apiInstance->getRateHistory($productId, $aprPeriod, $startTime, $endTime, $current, $size, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HistoryApi->getRateHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **productId** | **string**|  | |
| **aprPeriod** | **string**| \&quot;DAY\&quot;,\&quot;YEAR\&quot;,default\&quot;DAY\&quot; | [optional] |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **current** | **int**| Currently querying the page. Start from 1. Default:1 | [optional] |
| **size** | **int**| Default:10, Max:100 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\SimpleEarn\Model\GetRateHistoryResponse**](../Model/GetRateHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
