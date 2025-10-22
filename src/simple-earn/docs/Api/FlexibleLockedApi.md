# Binance\Client\SimpleEarn\FlexibleLockedApi

All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCollateralRecord()**](FlexibleLockedApi.md#getCollateralRecord) | **GET** /sapi/v1/simple-earn/flexible/history/collateralRecord | Get Collateral Record(USER_DATA) |
| [**getFlexiblePersonalLeftQuota()**](FlexibleLockedApi.md#getFlexiblePersonalLeftQuota) | **GET** /sapi/v1/simple-earn/flexible/personalLeftQuota | Get Flexible Personal Left Quota(USER_DATA) |
| [**getFlexibleProductPosition()**](FlexibleLockedApi.md#getFlexibleProductPosition) | **GET** /sapi/v1/simple-earn/flexible/position | Get Flexible Product Position(USER_DATA) |
| [**getFlexibleRedemptionRecord()**](FlexibleLockedApi.md#getFlexibleRedemptionRecord) | **GET** /sapi/v1/simple-earn/flexible/history/redemptionRecord | Get Flexible Redemption Record(USER_DATA) |
| [**getFlexibleRewardsHistory()**](FlexibleLockedApi.md#getFlexibleRewardsHistory) | **GET** /sapi/v1/simple-earn/flexible/history/rewardsRecord | Get Flexible Rewards History(USER_DATA) |
| [**getFlexibleSubscriptionPreview()**](FlexibleLockedApi.md#getFlexibleSubscriptionPreview) | **GET** /sapi/v1/simple-earn/flexible/subscriptionPreview | Get Flexible Subscription Preview(USER_DATA) |
| [**getFlexibleSubscriptionRecord()**](FlexibleLockedApi.md#getFlexibleSubscriptionRecord) | **GET** /sapi/v1/simple-earn/flexible/history/subscriptionRecord | Get Flexible Subscription Record(USER_DATA) |
| [**getLockedPersonalLeftQuota()**](FlexibleLockedApi.md#getLockedPersonalLeftQuota) | **GET** /sapi/v1/simple-earn/locked/personalLeftQuota | Get Locked Personal Left Quota(USER_DATA) |
| [**getLockedProductPosition()**](FlexibleLockedApi.md#getLockedProductPosition) | **GET** /sapi/v1/simple-earn/locked/position | Get Locked Product Position |
| [**getLockedRedemptionRecord()**](FlexibleLockedApi.md#getLockedRedemptionRecord) | **GET** /sapi/v1/simple-earn/locked/history/redemptionRecord | Get Locked Redemption Record(USER_DATA) |
| [**getLockedRewardsHistory()**](FlexibleLockedApi.md#getLockedRewardsHistory) | **GET** /sapi/v1/simple-earn/locked/history/rewardsRecord | Get Locked Rewards History(USER_DATA) |
| [**getLockedSubscriptionPreview()**](FlexibleLockedApi.md#getLockedSubscriptionPreview) | **GET** /sapi/v1/simple-earn/locked/subscriptionPreview | Get Locked Subscription Preview(USER_DATA) |
| [**getLockedSubscriptionRecord()**](FlexibleLockedApi.md#getLockedSubscriptionRecord) | **GET** /sapi/v1/simple-earn/locked/history/subscriptionRecord | Get Locked Subscription Record(USER_DATA) |
| [**getRateHistory()**](FlexibleLockedApi.md#getRateHistory) | **GET** /sapi/v1/simple-earn/flexible/history/rateHistory | Get Rate History(USER_DATA) |
| [**getSimpleEarnFlexibleProductList()**](FlexibleLockedApi.md#getSimpleEarnFlexibleProductList) | **GET** /sapi/v1/simple-earn/flexible/list | Get Simple Earn Flexible Product List(USER_DATA) |
| [**getSimpleEarnLockedProductList()**](FlexibleLockedApi.md#getSimpleEarnLockedProductList) | **GET** /sapi/v1/simple-earn/locked/list | Get Simple Earn Locked Product List(USER_DATA) |
| [**redeemFlexibleProduct()**](FlexibleLockedApi.md#redeemFlexibleProduct) | **POST** /sapi/v1/simple-earn/flexible/redeem | Redeem Flexible Product(TRADE) |
| [**redeemLockedProduct()**](FlexibleLockedApi.md#redeemLockedProduct) | **POST** /sapi/v1/simple-earn/locked/redeem | Redeem Locked Product(TRADE) |
| [**setFlexibleAutoSubscribe()**](FlexibleLockedApi.md#setFlexibleAutoSubscribe) | **POST** /sapi/v1/simple-earn/flexible/setAutoSubscribe | Set Flexible Auto Subscribe(USER_DATA) |
| [**setLockedAutoSubscribe()**](FlexibleLockedApi.md#setLockedAutoSubscribe) | **POST** /sapi/v1/simple-earn/locked/setAutoSubscribe | Set Locked Auto Subscribe(USER_DATA) |
| [**setLockedProductRedeemOption()**](FlexibleLockedApi.md#setLockedProductRedeemOption) | **POST** /sapi/v1/simple-earn/locked/setRedeemOption | Set Locked Product Redeem Option(USER_DATA) |
| [**simpleAccount()**](FlexibleLockedApi.md#simpleAccount) | **GET** /sapi/v1/simple-earn/account | Simple Account(USER_DATA) |
| [**subscribeFlexibleProduct()**](FlexibleLockedApi.md#subscribeFlexibleProduct) | **POST** /sapi/v1/simple-earn/flexible/subscribe | Subscribe Flexible Product(TRADE) |
| [**subscribeLockedProduct()**](FlexibleLockedApi.md#subscribeLockedProduct) | **POST** /sapi/v1/simple-earn/locked/subscribe | Subscribe Locked Product(TRADE) |


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



$apiInstance = new Binance\Client\SimpleEarn\Api\FlexibleLockedApi(
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
    echo 'Exception when calling FlexibleLockedApi->getCollateralRecord: ', $e->getMessage(), PHP_EOL;
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

## `getFlexiblePersonalLeftQuota()`

```php
getFlexiblePersonalLeftQuota($productId, $recvWindow): \Binance\Client\SimpleEarn\Model\GetFlexiblePersonalLeftQuotaResponse
```

Get Flexible Personal Left Quota(USER_DATA)

Get Flexible Personal Left Quota  Weight: 150

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SimpleEarn\Api\FlexibleLockedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$productId = 'productId_example'; // string
$recvWindow = 56; // int

try {
    $result = $apiInstance->getFlexiblePersonalLeftQuota($productId, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlexibleLockedApi->getFlexiblePersonalLeftQuota: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **productId** | **string**|  | |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\SimpleEarn\Model\GetFlexiblePersonalLeftQuotaResponse**](../Model/GetFlexiblePersonalLeftQuotaResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFlexibleProductPosition()`

```php
getFlexibleProductPosition($asset, $productId, $current, $size, $recvWindow): \Binance\Client\SimpleEarn\Model\GetFlexibleProductPositionResponse
```

Get Flexible Product Position(USER_DATA)

Get Flexible Product Position  Weight: 150

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SimpleEarn\Api\FlexibleLockedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asset = 'asset_example'; // string | USDC or USDT
$productId = 'productId_example'; // string
$current = 56; // int | Currently querying the page. Start from 1. Default:1
$size = 56; // int | Default:10, Max:100
$recvWindow = 56; // int

try {
    $result = $apiInstance->getFlexibleProductPosition($asset, $productId, $current, $size, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlexibleLockedApi->getFlexibleProductPosition: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset** | **string**| USDC or USDT | [optional] |
| **productId** | **string**|  | [optional] |
| **current** | **int**| Currently querying the page. Start from 1. Default:1 | [optional] |
| **size** | **int**| Default:10, Max:100 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\SimpleEarn\Model\GetFlexibleProductPositionResponse**](../Model/GetFlexibleProductPositionResponse.md)

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



$apiInstance = new Binance\Client\SimpleEarn\Api\FlexibleLockedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$productId = 'productId_example'; // string
$redeemId = 'redeemId_example'; // string
$asset = 'asset_example'; // string | USDC or USDT
$startTime = 56; // int
$endTime = 56; // int
$current = 56; // int | Currently querying the page. Start from 1. Default:1
$size = 56; // int | Default:10, Max:100
$recvWindow = 56; // int

try {
    $result = $apiInstance->getFlexibleRedemptionRecord($productId, $redeemId, $asset, $startTime, $endTime, $current, $size, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlexibleLockedApi->getFlexibleRedemptionRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **productId** | **string**|  | [optional] |
| **redeemId** | **string**|  | [optional] |
| **asset** | **string**| USDC or USDT | [optional] |
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



$apiInstance = new Binance\Client\SimpleEarn\Api\FlexibleLockedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$type = 'type_example'; // string | `BONUS` - Bonus tiered APR, `REALTIME` Real-time APR, `REWARDS` Historical rewards,`ALL`(set to default)
$productId = 'productId_example'; // string
$asset = 'asset_example'; // string | USDC or USDT
$startTime = 56; // int
$endTime = 56; // int
$current = 56; // int | Currently querying the page. Start from 1. Default:1
$size = 56; // int | Default:10, Max:100
$recvWindow = 56; // int

try {
    $result = $apiInstance->getFlexibleRewardsHistory($type, $productId, $asset, $startTime, $endTime, $current, $size, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlexibleLockedApi->getFlexibleRewardsHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**| &#x60;BONUS&#x60; - Bonus tiered APR, &#x60;REALTIME&#x60; Real-time APR, &#x60;REWARDS&#x60; Historical rewards,&#x60;ALL&#x60;(set to default) | |
| **productId** | **string**|  | [optional] |
| **asset** | **string**| USDC or USDT | [optional] |
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

## `getFlexibleSubscriptionPreview()`

```php
getFlexibleSubscriptionPreview($productId, $amount, $recvWindow): \Binance\Client\SimpleEarn\Model\GetFlexibleSubscriptionPreviewResponse
```

Get Flexible Subscription Preview(USER_DATA)

Get Flexible Subscription Preview  Weight: 150

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SimpleEarn\Api\FlexibleLockedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$productId = 'productId_example'; // string
$amount = 3.4; // float
$recvWindow = 56; // int

try {
    $result = $apiInstance->getFlexibleSubscriptionPreview($productId, $amount, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlexibleLockedApi->getFlexibleSubscriptionPreview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **productId** | **string**|  | |
| **amount** | **float**|  | |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\SimpleEarn\Model\GetFlexibleSubscriptionPreviewResponse**](../Model/GetFlexibleSubscriptionPreviewResponse.md)

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



$apiInstance = new Binance\Client\SimpleEarn\Api\FlexibleLockedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$productId = 'productId_example'; // string
$purchaseId = 'purchaseId_example'; // string
$asset = 'asset_example'; // string | USDC or USDT
$startTime = 56; // int
$endTime = 56; // int
$current = 56; // int | Currently querying the page. Start from 1. Default:1
$size = 56; // int | Default:10, Max:100
$recvWindow = 56; // int

try {
    $result = $apiInstance->getFlexibleSubscriptionRecord($productId, $purchaseId, $asset, $startTime, $endTime, $current, $size, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlexibleLockedApi->getFlexibleSubscriptionRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **productId** | **string**|  | [optional] |
| **purchaseId** | **string**|  | [optional] |
| **asset** | **string**| USDC or USDT | [optional] |
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

## `getLockedPersonalLeftQuota()`

```php
getLockedPersonalLeftQuota($projectId, $recvWindow): \Binance\Client\SimpleEarn\Model\GetLockedPersonalLeftQuotaResponse
```

Get Locked Personal Left Quota(USER_DATA)

Get Locked Personal Left Quota  Weight: 150

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SimpleEarn\Api\FlexibleLockedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectId = 'projectId_example'; // string
$recvWindow = 56; // int

try {
    $result = $apiInstance->getLockedPersonalLeftQuota($projectId, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlexibleLockedApi->getLockedPersonalLeftQuota: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**|  | |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\SimpleEarn\Model\GetLockedPersonalLeftQuotaResponse**](../Model/GetLockedPersonalLeftQuotaResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLockedProductPosition()`

```php
getLockedProductPosition($asset, $positionId, $projectId, $current, $size, $recvWindow): \Binance\Client\SimpleEarn\Model\GetLockedProductPositionResponse
```

Get Locked Product Position

Get Locked Product Position  Weight: 150

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SimpleEarn\Api\FlexibleLockedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asset = 'asset_example'; // string | USDC or USDT
$positionId = 'positionId_example'; // string
$projectId = 'projectId_example'; // string
$current = 56; // int | Currently querying the page. Start from 1. Default:1
$size = 56; // int | Default:10, Max:100
$recvWindow = 56; // int

try {
    $result = $apiInstance->getLockedProductPosition($asset, $positionId, $projectId, $current, $size, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlexibleLockedApi->getLockedProductPosition: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset** | **string**| USDC or USDT | [optional] |
| **positionId** | **string**|  | [optional] |
| **projectId** | **string**|  | [optional] |
| **current** | **int**| Currently querying the page. Start from 1. Default:1 | [optional] |
| **size** | **int**| Default:10, Max:100 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\SimpleEarn\Model\GetLockedProductPositionResponse**](../Model/GetLockedProductPositionResponse.md)

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



$apiInstance = new Binance\Client\SimpleEarn\Api\FlexibleLockedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$positionId = 'positionId_example'; // string
$redeemId = 'redeemId_example'; // string
$asset = 'asset_example'; // string | USDC or USDT
$startTime = 56; // int
$endTime = 56; // int
$current = 56; // int | Currently querying the page. Start from 1. Default:1
$size = 56; // int | Default:10, Max:100
$recvWindow = 56; // int

try {
    $result = $apiInstance->getLockedRedemptionRecord($positionId, $redeemId, $asset, $startTime, $endTime, $current, $size, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlexibleLockedApi->getLockedRedemptionRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **positionId** | **string**|  | [optional] |
| **redeemId** | **string**|  | [optional] |
| **asset** | **string**| USDC or USDT | [optional] |
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



$apiInstance = new Binance\Client\SimpleEarn\Api\FlexibleLockedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$positionId = 'positionId_example'; // string
$asset = 'asset_example'; // string | USDC or USDT
$startTime = 56; // int
$endTime = 56; // int
$current = 56; // int | Currently querying the page. Start from 1. Default:1
$size = 56; // int | Default:10, Max:100
$recvWindow = 56; // int

try {
    $result = $apiInstance->getLockedRewardsHistory($positionId, $asset, $startTime, $endTime, $current, $size, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlexibleLockedApi->getLockedRewardsHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **positionId** | **string**|  | [optional] |
| **asset** | **string**| USDC or USDT | [optional] |
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

## `getLockedSubscriptionPreview()`

```php
getLockedSubscriptionPreview($projectId, $amount, $autoSubscribe, $recvWindow): \Binance\Client\SimpleEarn\Model\GetLockedSubscriptionPreviewResponse
```

Get Locked Subscription Preview(USER_DATA)

Get Locked Subscription Preview  Weight: 150

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SimpleEarn\Api\FlexibleLockedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectId = 'projectId_example'; // string
$amount = 3.4; // float
$autoSubscribe = True; // bool | true or false, default true.
$recvWindow = 56; // int

try {
    $result = $apiInstance->getLockedSubscriptionPreview($projectId, $amount, $autoSubscribe, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlexibleLockedApi->getLockedSubscriptionPreview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**|  | |
| **amount** | **float**|  | |
| **autoSubscribe** | **bool**| true or false, default true. | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\SimpleEarn\Model\GetLockedSubscriptionPreviewResponse**](../Model/GetLockedSubscriptionPreviewResponse.md)

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



$apiInstance = new Binance\Client\SimpleEarn\Api\FlexibleLockedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$purchaseId = 'purchaseId_example'; // string
$asset = 'asset_example'; // string | USDC or USDT
$startTime = 56; // int
$endTime = 56; // int
$current = 56; // int | Currently querying the page. Start from 1. Default:1
$size = 56; // int | Default:10, Max:100
$recvWindow = 56; // int

try {
    $result = $apiInstance->getLockedSubscriptionRecord($purchaseId, $asset, $startTime, $endTime, $current, $size, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlexibleLockedApi->getLockedSubscriptionRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchaseId** | **string**|  | [optional] |
| **asset** | **string**| USDC or USDT | [optional] |
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



$apiInstance = new Binance\Client\SimpleEarn\Api\FlexibleLockedApi(
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
    echo 'Exception when calling FlexibleLockedApi->getRateHistory: ', $e->getMessage(), PHP_EOL;
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

## `getSimpleEarnFlexibleProductList()`

```php
getSimpleEarnFlexibleProductList($asset, $current, $size, $recvWindow): \Binance\Client\SimpleEarn\Model\GetSimpleEarnFlexibleProductListResponse
```

Get Simple Earn Flexible Product List(USER_DATA)

Get available Simple Earn flexible product list  Weight: 150

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SimpleEarn\Api\FlexibleLockedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asset = 'asset_example'; // string | USDC or USDT
$current = 56; // int | Currently querying the page. Start from 1. Default:1
$size = 56; // int | Default:10, Max:100
$recvWindow = 56; // int

try {
    $result = $apiInstance->getSimpleEarnFlexibleProductList($asset, $current, $size, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlexibleLockedApi->getSimpleEarnFlexibleProductList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset** | **string**| USDC or USDT | [optional] |
| **current** | **int**| Currently querying the page. Start from 1. Default:1 | [optional] |
| **size** | **int**| Default:10, Max:100 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\SimpleEarn\Model\GetSimpleEarnFlexibleProductListResponse**](../Model/GetSimpleEarnFlexibleProductListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSimpleEarnLockedProductList()`

```php
getSimpleEarnLockedProductList($asset, $current, $size, $recvWindow): \Binance\Client\SimpleEarn\Model\GetSimpleEarnLockedProductListResponse
```

Get Simple Earn Locked Product List(USER_DATA)

Get Simple Earn Locked Product List  * Get available Simple Earn locked product list  Weight: 150

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SimpleEarn\Api\FlexibleLockedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asset = 'asset_example'; // string | USDC or USDT
$current = 56; // int | Currently querying the page. Start from 1. Default:1
$size = 56; // int | Default:10, Max:100
$recvWindow = 56; // int

try {
    $result = $apiInstance->getSimpleEarnLockedProductList($asset, $current, $size, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlexibleLockedApi->getSimpleEarnLockedProductList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset** | **string**| USDC or USDT | [optional] |
| **current** | **int**| Currently querying the page. Start from 1. Default:1 | [optional] |
| **size** | **int**| Default:10, Max:100 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\SimpleEarn\Model\GetSimpleEarnLockedProductListResponse**](../Model/GetSimpleEarnLockedProductListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `redeemFlexibleProduct()`

```php
redeemFlexibleProduct($redeemFlexibleProductRequest): \Binance\Client\SimpleEarn\Model\RedeemFlexibleProductResponse
```

Redeem Flexible Product(TRADE)

Redeem Flexible Product  * You need to open `Enable Spot & Margin Trading` permission for the API Key which requests this endpoint.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SimpleEarn\Api\FlexibleLockedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$redeemFlexibleProductRequest = new \Binance\Client\SimpleEarn\Model\RedeemFlexibleProductRequest(); // \Binance\Client\SimpleEarn\Model\RedeemFlexibleProductRequest

try {
    $result = $apiInstance->redeemFlexibleProduct($redeemFlexibleProductRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlexibleLockedApi->redeemFlexibleProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **redeemFlexibleProductRequest** | [**\Binance\Client\SimpleEarn\Model\RedeemFlexibleProductRequest**](../Model/RedeemFlexibleProductRequest.md)|  | |

### Return type

[**\Binance\Client\SimpleEarn\Model\RedeemFlexibleProductResponse**](../Model/RedeemFlexibleProductResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `redeemLockedProduct()`

```php
redeemLockedProduct($redeemLockedProductRequest): \Binance\Client\SimpleEarn\Model\RedeemLockedProductResponse
```

Redeem Locked Product(TRADE)

Redeem Locked Product  * You need to open `Enable Spot & Margin Trading` permission for the API Key which requests this endpoint.  Weight: 1/3s per account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SimpleEarn\Api\FlexibleLockedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$redeemLockedProductRequest = new \Binance\Client\SimpleEarn\Model\RedeemLockedProductRequest(); // \Binance\Client\SimpleEarn\Model\RedeemLockedProductRequest

try {
    $result = $apiInstance->redeemLockedProduct($redeemLockedProductRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlexibleLockedApi->redeemLockedProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **redeemLockedProductRequest** | [**\Binance\Client\SimpleEarn\Model\RedeemLockedProductRequest**](../Model/RedeemLockedProductRequest.md)|  | |

### Return type

[**\Binance\Client\SimpleEarn\Model\RedeemLockedProductResponse**](../Model/RedeemLockedProductResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setFlexibleAutoSubscribe()`

```php
setFlexibleAutoSubscribe($setFlexibleAutoSubscribeRequest): \Binance\Client\SimpleEarn\Model\SetFlexibleAutoSubscribeResponse
```

Set Flexible Auto Subscribe(USER_DATA)

Set Flexible Auto Subscribe  Weight: 150

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SimpleEarn\Api\FlexibleLockedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$setFlexibleAutoSubscribeRequest = new \Binance\Client\SimpleEarn\Model\SetFlexibleAutoSubscribeRequest(); // \Binance\Client\SimpleEarn\Model\SetFlexibleAutoSubscribeRequest

try {
    $result = $apiInstance->setFlexibleAutoSubscribe($setFlexibleAutoSubscribeRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlexibleLockedApi->setFlexibleAutoSubscribe: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **setFlexibleAutoSubscribeRequest** | [**\Binance\Client\SimpleEarn\Model\SetFlexibleAutoSubscribeRequest**](../Model/SetFlexibleAutoSubscribeRequest.md)|  | |

### Return type

[**\Binance\Client\SimpleEarn\Model\SetFlexibleAutoSubscribeResponse**](../Model/SetFlexibleAutoSubscribeResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setLockedAutoSubscribe()`

```php
setLockedAutoSubscribe($setLockedAutoSubscribeRequest): \Binance\Client\SimpleEarn\Model\SetLockedAutoSubscribeResponse
```

Set Locked Auto Subscribe(USER_DATA)

Set locked auto subscribe  Weight: 150

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SimpleEarn\Api\FlexibleLockedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$setLockedAutoSubscribeRequest = new \Binance\Client\SimpleEarn\Model\SetLockedAutoSubscribeRequest(); // \Binance\Client\SimpleEarn\Model\SetLockedAutoSubscribeRequest

try {
    $result = $apiInstance->setLockedAutoSubscribe($setLockedAutoSubscribeRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlexibleLockedApi->setLockedAutoSubscribe: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **setLockedAutoSubscribeRequest** | [**\Binance\Client\SimpleEarn\Model\SetLockedAutoSubscribeRequest**](../Model/SetLockedAutoSubscribeRequest.md)|  | |

### Return type

[**\Binance\Client\SimpleEarn\Model\SetLockedAutoSubscribeResponse**](../Model/SetLockedAutoSubscribeResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setLockedProductRedeemOption()`

```php
setLockedProductRedeemOption($setLockedProductRedeemOptionRequest): \Binance\Client\SimpleEarn\Model\SetLockedProductRedeemOptionResponse
```

Set Locked Product Redeem Option(USER_DATA)

Set redeem option for Locked product  Weight: 50

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SimpleEarn\Api\FlexibleLockedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$setLockedProductRedeemOptionRequest = new \Binance\Client\SimpleEarn\Model\SetLockedProductRedeemOptionRequest(); // \Binance\Client\SimpleEarn\Model\SetLockedProductRedeemOptionRequest

try {
    $result = $apiInstance->setLockedProductRedeemOption($setLockedProductRedeemOptionRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlexibleLockedApi->setLockedProductRedeemOption: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **setLockedProductRedeemOptionRequest** | [**\Binance\Client\SimpleEarn\Model\SetLockedProductRedeemOptionRequest**](../Model/SetLockedProductRedeemOptionRequest.md)|  | |

### Return type

[**\Binance\Client\SimpleEarn\Model\SetLockedProductRedeemOptionResponse**](../Model/SetLockedProductRedeemOptionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `simpleAccount()`

```php
simpleAccount($recvWindow): \Binance\Client\SimpleEarn\Model\SimpleAccountResponse
```

Simple Account(USER_DATA)

Simple Account query  Weight: 150

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SimpleEarn\Api\FlexibleLockedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 56; // int

try {
    $result = $apiInstance->simpleAccount($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlexibleLockedApi->simpleAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\SimpleEarn\Model\SimpleAccountResponse**](../Model/SimpleAccountResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subscribeFlexibleProduct()`

```php
subscribeFlexibleProduct($subscribeFlexibleProductRequest): \Binance\Client\SimpleEarn\Model\SubscribeFlexibleProductResponse
```

Subscribe Flexible Product(TRADE)

Subscribe Flexible Product  * You need to open `Enable Spot & Margin Trading` permission for the API Key which requests this endpoint.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SimpleEarn\Api\FlexibleLockedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$subscribeFlexibleProductRequest = new \Binance\Client\SimpleEarn\Model\SubscribeFlexibleProductRequest(); // \Binance\Client\SimpleEarn\Model\SubscribeFlexibleProductRequest

try {
    $result = $apiInstance->subscribeFlexibleProduct($subscribeFlexibleProductRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlexibleLockedApi->subscribeFlexibleProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscribeFlexibleProductRequest** | [**\Binance\Client\SimpleEarn\Model\SubscribeFlexibleProductRequest**](../Model/SubscribeFlexibleProductRequest.md)|  | |

### Return type

[**\Binance\Client\SimpleEarn\Model\SubscribeFlexibleProductResponse**](../Model/SubscribeFlexibleProductResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subscribeLockedProduct()`

```php
subscribeLockedProduct($subscribeLockedProductRequest): \Binance\Client\SimpleEarn\Model\SubscribeLockedProductResponse
```

Subscribe Locked Product(TRADE)

Subscribe Locked Product  * You need to open `Enable Spot & Margin Trading` permission for the API Key which requests this endpoint.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SimpleEarn\Api\FlexibleLockedApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$subscribeLockedProductRequest = new \Binance\Client\SimpleEarn\Model\SubscribeLockedProductRequest(); // \Binance\Client\SimpleEarn\Model\SubscribeLockedProductRequest

try {
    $result = $apiInstance->subscribeLockedProduct($subscribeLockedProductRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlexibleLockedApi->subscribeLockedProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscribeLockedProductRequest** | [**\Binance\Client\SimpleEarn\Model\SubscribeLockedProductRequest**](../Model/SubscribeLockedProductRequest.md)|  | |

### Return type

[**\Binance\Client\SimpleEarn\Model\SubscribeLockedProductResponse**](../Model/SubscribeLockedProductResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
