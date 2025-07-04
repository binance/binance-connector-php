# Binance\Client\Staking\OnChainYieldsApi

All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getOnChainYieldsLockedPersonalLeftQuota()**](OnChainYieldsApi.md#getOnChainYieldsLockedPersonalLeftQuota) | **GET** /sapi/v1/onchain-yields/locked/personalLeftQuota | Get On-chain Yields Locked Personal Left Quota (USER_DATA) |
| [**getOnChainYieldsLockedProductList()**](OnChainYieldsApi.md#getOnChainYieldsLockedProductList) | **GET** /sapi/v1/onchain-yields/locked/list | Get On-chain Yields Locked Product List (USER_DATA) |
| [**getOnChainYieldsLockedProductPosition()**](OnChainYieldsApi.md#getOnChainYieldsLockedProductPosition) | **GET** /sapi/v1/onchain-yields/locked/position | Get On-chain Yields Locked Product Position (USER_DATA) |
| [**getOnChainYieldsLockedRedemptionRecord()**](OnChainYieldsApi.md#getOnChainYieldsLockedRedemptionRecord) | **GET** /sapi/v1/onchain-yields/locked/history/redemptionRecord | Get On-chain Yields Locked Redemption Record (USER_DATA) |
| [**getOnChainYieldsLockedRewardsHistory()**](OnChainYieldsApi.md#getOnChainYieldsLockedRewardsHistory) | **GET** /sapi/v1/onchain-yields/locked/history/rewardsRecord | Get On-chain Yields Locked Rewards History (USER_DATA) |
| [**getOnChainYieldsLockedSubscriptionPreview()**](OnChainYieldsApi.md#getOnChainYieldsLockedSubscriptionPreview) | **GET** /sapi/v1/onchain-yields/locked/subscriptionPreview | Get On-chain Yields Locked Subscription Preview (USER_DATA) |
| [**getOnChainYieldsLockedSubscriptionRecord()**](OnChainYieldsApi.md#getOnChainYieldsLockedSubscriptionRecord) | **GET** /sapi/v1/onchain-yields/locked/history/subscriptionRecord | Get On-chain Yields Locked Subscription Record (USER_DATA) |
| [**onChainYieldsAccount()**](OnChainYieldsApi.md#onChainYieldsAccount) | **GET** /sapi/v1/onchain-yields/account | On-chain Yields Account (USER_DATA) |
| [**redeemOnChainYieldsLockedProduct()**](OnChainYieldsApi.md#redeemOnChainYieldsLockedProduct) | **POST** /sapi/v1/onchain-yields/locked/redeem | Redeem On-chain Yields Locked Product (TRADE) |
| [**setOnChainYieldsLockedAutoSubscribe()**](OnChainYieldsApi.md#setOnChainYieldsLockedAutoSubscribe) | **POST** /sapi/v1/onchain-yields/locked/setAutoSubscribe | Set On-chain Yields Locked Auto Subscribe(USER_DATA) |
| [**setOnChainYieldsLockedProductRedeemOption()**](OnChainYieldsApi.md#setOnChainYieldsLockedProductRedeemOption) | **POST** /sapi/v1/onchain-yields/locked/setRedeemOption | Set On-chain Yields Locked Product Redeem Option(USER_DATA) |
| [**subscribeOnChainYieldsLockedProduct()**](OnChainYieldsApi.md#subscribeOnChainYieldsLockedProduct) | **POST** /sapi/v1/onchain-yields/locked/subscribe | Subscribe On-chain Yields Locked Product(TRADE) |


## `getOnChainYieldsLockedPersonalLeftQuota()`

```php
getOnChainYieldsLockedPersonalLeftQuota($projectId, $recvWindow): \Binance\Client\Staking\Model\GetOnChainYieldsLockedPersonalLeftQuotaResponse
```

Get On-chain Yields Locked Personal Left Quota (USER_DATA)

Get On-chain Yields Locked Personal Left Quota  Weight: 50

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Staking\Api\OnChainYieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectId = 'projectId_example'; // string
$recvWindow = 56; // int

try {
    $result = $apiInstance->getOnChainYieldsLockedPersonalLeftQuota($projectId, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnChainYieldsApi->getOnChainYieldsLockedPersonalLeftQuota: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **projectId** | **string**|  | |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\Staking\Model\GetOnChainYieldsLockedPersonalLeftQuotaResponse**](../Model/GetOnChainYieldsLockedPersonalLeftQuotaResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOnChainYieldsLockedProductList()`

```php
getOnChainYieldsLockedProductList($asset, $current, $size, $recvWindow): \Binance\Client\Staking\Model\GetOnChainYieldsLockedProductListResponse
```

Get On-chain Yields Locked Product List (USER_DATA)

Get available On-chain Yields Locked product list  * Get available On-chain Yields Locked product list  Weight: 50

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Staking\Api\OnChainYieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asset = 'asset_example'; // string
$current = 56; // int | Currently querying page. Start from 1. Default:1
$size = 56; // int | Default:10, Max:100
$recvWindow = 56; // int

try {
    $result = $apiInstance->getOnChainYieldsLockedProductList($asset, $current, $size, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnChainYieldsApi->getOnChainYieldsLockedProductList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset** | **string**|  | [optional] |
| **current** | **int**| Currently querying page. Start from 1. Default:1 | [optional] |
| **size** | **int**| Default:10, Max:100 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\Staking\Model\GetOnChainYieldsLockedProductListResponse**](../Model/GetOnChainYieldsLockedProductListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOnChainYieldsLockedProductPosition()`

```php
getOnChainYieldsLockedProductPosition($asset, $positionId, $projectId, $current, $size, $recvWindow): \Binance\Client\Staking\Model\GetOnChainYieldsLockedProductPositionResponse
```

Get On-chain Yields Locked Product Position (USER_DATA)

Get On-chain Yields Locked Product Position  Weight: 50

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Staking\Api\OnChainYieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asset = 'asset_example'; // string
$positionId = 'positionId_example'; // string
$projectId = 'projectId_example'; // string
$current = 56; // int | Currently querying page. Start from 1. Default:1
$size = 56; // int | Default:10, Max:100
$recvWindow = 56; // int

try {
    $result = $apiInstance->getOnChainYieldsLockedProductPosition($asset, $positionId, $projectId, $current, $size, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnChainYieldsApi->getOnChainYieldsLockedProductPosition: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset** | **string**|  | [optional] |
| **positionId** | **string**|  | [optional] |
| **projectId** | **string**|  | [optional] |
| **current** | **int**| Currently querying page. Start from 1. Default:1 | [optional] |
| **size** | **int**| Default:10, Max:100 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\Staking\Model\GetOnChainYieldsLockedProductPositionResponse**](../Model/GetOnChainYieldsLockedProductPositionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOnChainYieldsLockedRedemptionRecord()`

```php
getOnChainYieldsLockedRedemptionRecord($positionId, $redeemId, $asset, $startTime, $endTime, $current, $size, $recvWindow): \Binance\Client\Staking\Model\GetOnChainYieldsLockedRedemptionRecordResponse
```

Get On-chain Yields Locked Redemption Record (USER_DATA)

Get On-chain Yields Locked Redemption Record  * The time between `startTime` and `endTime` cannot be longer than 3 months. * If `startTime` and `endTime` are both not sent, then the last 30 days' data will be returned. * If `startTime` is sent but `endTime` is not sent, the next 30 days' data beginning from `startTime` will be returned. * If `endTime` is sent but `startTime` is not sent, the 30 days' data before `endTime` will be returned.  Weight: 50

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Staking\Api\OnChainYieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$positionId = 'positionId_example'; // string
$redeemId = 'redeemId_example'; // string
$asset = 'asset_example'; // string
$startTime = 56; // int
$endTime = 56; // int
$current = 56; // int | Currently querying page. Start from 1. Default:1
$size = 56; // int | Default:10, Max:100
$recvWindow = 56; // int

try {
    $result = $apiInstance->getOnChainYieldsLockedRedemptionRecord($positionId, $redeemId, $asset, $startTime, $endTime, $current, $size, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnChainYieldsApi->getOnChainYieldsLockedRedemptionRecord: ', $e->getMessage(), PHP_EOL;
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
| **current** | **int**| Currently querying page. Start from 1. Default:1 | [optional] |
| **size** | **int**| Default:10, Max:100 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\Staking\Model\GetOnChainYieldsLockedRedemptionRecordResponse**](../Model/GetOnChainYieldsLockedRedemptionRecordResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOnChainYieldsLockedRewardsHistory()`

```php
getOnChainYieldsLockedRewardsHistory($positionId, $asset, $startTime, $endTime, $current, $size, $recvWindow): \Binance\Client\Staking\Model\GetOnChainYieldsLockedRewardsHistoryResponse
```

Get On-chain Yields Locked Rewards History (USER_DATA)

Get On-chain Yields Locked Rewards History  * The time between `startTime` and `endTime` cannot be longer than 3 months. * If `startTime` and `endTime` are both not sent, then the last 30 days' data will be returned. * If `startTime` is sent but `endTime` is not sent, the next 30 days' data beginning from `startTime` will be returned. * If `endTime` is sent but `startTime` is not sent, the 30 days' data before `endTime` will be returned.  Weight: 50

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Staking\Api\OnChainYieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$positionId = 'positionId_example'; // string
$asset = 'asset_example'; // string
$startTime = 56; // int
$endTime = 56; // int
$current = 56; // int | Currently querying page. Start from 1. Default:1
$size = 56; // int | Default:10, Max:100
$recvWindow = 56; // int

try {
    $result = $apiInstance->getOnChainYieldsLockedRewardsHistory($positionId, $asset, $startTime, $endTime, $current, $size, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnChainYieldsApi->getOnChainYieldsLockedRewardsHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **positionId** | **string**|  | [optional] |
| **asset** | **string**|  | [optional] |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **current** | **int**| Currently querying page. Start from 1. Default:1 | [optional] |
| **size** | **int**| Default:10, Max:100 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\Staking\Model\GetOnChainYieldsLockedRewardsHistoryResponse**](../Model/GetOnChainYieldsLockedRewardsHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOnChainYieldsLockedSubscriptionPreview()`

```php
getOnChainYieldsLockedSubscriptionPreview($projectId, $amount, $autoSubscribe, $recvWindow): \Binance\Client\Staking\Model\GetOnChainYieldsLockedSubscriptionPreviewResponse
```

Get On-chain Yields Locked Subscription Preview (USER_DATA)

Get On-chain Yields Locked Subscription Preview  Weight: 50

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Staking\Api\OnChainYieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$projectId = 'projectId_example'; // string
$amount = 3.4; // float
$autoSubscribe = True; // bool | true or false, default true.
$recvWindow = 56; // int

try {
    $result = $apiInstance->getOnChainYieldsLockedSubscriptionPreview($projectId, $amount, $autoSubscribe, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnChainYieldsApi->getOnChainYieldsLockedSubscriptionPreview: ', $e->getMessage(), PHP_EOL;
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

[**\Binance\Client\Staking\Model\GetOnChainYieldsLockedSubscriptionPreviewResponse**](../Model/GetOnChainYieldsLockedSubscriptionPreviewResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOnChainYieldsLockedSubscriptionRecord()`

```php
getOnChainYieldsLockedSubscriptionRecord($purchaseId, $clientId, $asset, $startTime, $endTime, $current, $size, $recvWindow): \Binance\Client\Staking\Model\GetOnChainYieldsLockedSubscriptionRecordResponse
```

Get On-chain Yields Locked Subscription Record (USER_DATA)

Get On-chain Yields Locked Subscription Record  * The time between `startTime` and `endTime` cannot be longer than 3 months. * If `startTime` and `endTime` are both not sent, then the last 30 days' data will be returned. * If `startTime` is sent but `endTime` is not sent, the next 30 days' data beginning from `startTime` will be returned. * If `endTime` is sent but `startTime` is not sent, the 30 days' data before `endTime` will be returned.  Weight: 50

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Staking\Api\OnChainYieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$purchaseId = 'purchaseId_example'; // string
$clientId = 'clientId_example'; // string
$asset = 'asset_example'; // string
$startTime = 56; // int
$endTime = 56; // int
$current = 56; // int | Currently querying page. Start from 1. Default:1
$size = 56; // int | Default:10, Max:100
$recvWindow = 56; // int

try {
    $result = $apiInstance->getOnChainYieldsLockedSubscriptionRecord($purchaseId, $clientId, $asset, $startTime, $endTime, $current, $size, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnChainYieldsApi->getOnChainYieldsLockedSubscriptionRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **purchaseId** | **string**|  | [optional] |
| **clientId** | **string**|  | [optional] |
| **asset** | **string**|  | [optional] |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **current** | **int**| Currently querying page. Start from 1. Default:1 | [optional] |
| **size** | **int**| Default:10, Max:100 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\Staking\Model\GetOnChainYieldsLockedSubscriptionRecordResponse**](../Model/GetOnChainYieldsLockedSubscriptionRecordResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `onChainYieldsAccount()`

```php
onChainYieldsAccount($recvWindow): \Binance\Client\Staking\Model\OnChainYieldsAccountResponse
```

On-chain Yields Account (USER_DATA)

On-chain Yields Account query  Weight: 50

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Staking\Api\OnChainYieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 56; // int

try {
    $result = $apiInstance->onChainYieldsAccount($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnChainYieldsApi->onChainYieldsAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\Staking\Model\OnChainYieldsAccountResponse**](../Model/OnChainYieldsAccountResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `redeemOnChainYieldsLockedProduct()`

```php
redeemOnChainYieldsLockedProduct($redeemOnChainYieldsLockedProductRequest): \Binance\Client\Staking\Model\RedeemOnChainYieldsLockedProductResponse
```

Redeem On-chain Yields Locked Product (TRADE)

Redeem On-chain Yields Locked Product  * You need to open `Enable Spot & Margin Trading` permission for the API Key which requests this endpoint.  Weight: 1/3s per account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Staking\Api\OnChainYieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$redeemOnChainYieldsLockedProductRequest = new \Binance\Client\Staking\Model\RedeemOnChainYieldsLockedProductRequest(); // \Binance\Client\Staking\Model\RedeemOnChainYieldsLockedProductRequest

try {
    $result = $apiInstance->redeemOnChainYieldsLockedProduct($redeemOnChainYieldsLockedProductRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnChainYieldsApi->redeemOnChainYieldsLockedProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **redeemOnChainYieldsLockedProductRequest** | [**\Binance\Client\Staking\Model\RedeemOnChainYieldsLockedProductRequest**](../Model/RedeemOnChainYieldsLockedProductRequest.md)|  | |

### Return type

[**\Binance\Client\Staking\Model\RedeemOnChainYieldsLockedProductResponse**](../Model/RedeemOnChainYieldsLockedProductResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setOnChainYieldsLockedAutoSubscribe()`

```php
setOnChainYieldsLockedAutoSubscribe($setOnChainYieldsLockedAutoSubscribeRequest): \Binance\Client\Staking\Model\SetOnChainYieldsLockedAutoSubscribeResponse
```

Set On-chain Yields Locked Auto Subscribe(USER_DATA)

Set On-chain Yield locked auto subscribe  Weight: 50

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Staking\Api\OnChainYieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$setOnChainYieldsLockedAutoSubscribeRequest = new \Binance\Client\Staking\Model\SetOnChainYieldsLockedAutoSubscribeRequest(); // \Binance\Client\Staking\Model\SetOnChainYieldsLockedAutoSubscribeRequest

try {
    $result = $apiInstance->setOnChainYieldsLockedAutoSubscribe($setOnChainYieldsLockedAutoSubscribeRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnChainYieldsApi->setOnChainYieldsLockedAutoSubscribe: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **setOnChainYieldsLockedAutoSubscribeRequest** | [**\Binance\Client\Staking\Model\SetOnChainYieldsLockedAutoSubscribeRequest**](../Model/SetOnChainYieldsLockedAutoSubscribeRequest.md)|  | |

### Return type

[**\Binance\Client\Staking\Model\SetOnChainYieldsLockedAutoSubscribeResponse**](../Model/SetOnChainYieldsLockedAutoSubscribeResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setOnChainYieldsLockedProductRedeemOption()`

```php
setOnChainYieldsLockedProductRedeemOption($setOnChainYieldsLockedProductRedeemOptionRequest): \Binance\Client\Staking\Model\SetOnChainYieldsLockedProductRedeemOptionResponse
```

Set On-chain Yields Locked Product Redeem Option(USER_DATA)

Set On-chain Yields redeem option for Locked product  Weight: 50

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Staking\Api\OnChainYieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$setOnChainYieldsLockedProductRedeemOptionRequest = new \Binance\Client\Staking\Model\SetOnChainYieldsLockedProductRedeemOptionRequest(); // \Binance\Client\Staking\Model\SetOnChainYieldsLockedProductRedeemOptionRequest

try {
    $result = $apiInstance->setOnChainYieldsLockedProductRedeemOption($setOnChainYieldsLockedProductRedeemOptionRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnChainYieldsApi->setOnChainYieldsLockedProductRedeemOption: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **setOnChainYieldsLockedProductRedeemOptionRequest** | [**\Binance\Client\Staking\Model\SetOnChainYieldsLockedProductRedeemOptionRequest**](../Model/SetOnChainYieldsLockedProductRedeemOptionRequest.md)|  | |

### Return type

[**\Binance\Client\Staking\Model\SetOnChainYieldsLockedProductRedeemOptionResponse**](../Model/SetOnChainYieldsLockedProductRedeemOptionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subscribeOnChainYieldsLockedProduct()`

```php
subscribeOnChainYieldsLockedProduct($subscribeOnChainYieldsLockedProductRequest): \Binance\Client\Staking\Model\SubscribeOnChainYieldsLockedProductResponse
```

Subscribe On-chain Yields Locked Product(TRADE)

Subscribe On-chain Yields Locked Product  * You need to open `Enable Spot & Margin Trading` permission for the API Key which requests this endpoint.  Weight: 200

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Staking\Api\OnChainYieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$subscribeOnChainYieldsLockedProductRequest = new \Binance\Client\Staking\Model\SubscribeOnChainYieldsLockedProductRequest(); // \Binance\Client\Staking\Model\SubscribeOnChainYieldsLockedProductRequest

try {
    $result = $apiInstance->subscribeOnChainYieldsLockedProduct($subscribeOnChainYieldsLockedProductRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OnChainYieldsApi->subscribeOnChainYieldsLockedProduct: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscribeOnChainYieldsLockedProductRequest** | [**\Binance\Client\Staking\Model\SubscribeOnChainYieldsLockedProductRequest**](../Model/SubscribeOnChainYieldsLockedProductRequest.md)|  | |

### Return type

[**\Binance\Client\Staking\Model\SubscribeOnChainYieldsLockedProductResponse**](../Model/SubscribeOnChainYieldsLockedProductResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
