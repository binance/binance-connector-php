# Binance\Client\Staking\SoftStakingApi

All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getSoftStakingProductList()**](SoftStakingApi.md#getSoftStakingProductList) | **GET** /sapi/v1/soft-staking/list | Get Soft Staking Product List (USER_DATA) |
| [**getSoftStakingRewardsHistory()**](SoftStakingApi.md#getSoftStakingRewardsHistory) | **GET** /sapi/v1/soft-staking/history/rewardsRecord | Get Soft Staking Rewards History(USER_DATA) |
| [**setSoftStaking()**](SoftStakingApi.md#setSoftStaking) | **GET** /sapi/v1/soft-staking/set | Set Soft Staking (USER_DATA) |


## `getSoftStakingProductList()`

```php
getSoftStakingProductList($asset, $current, $size, $recvWindow): \Binance\Client\Staking\Model\GetSoftStakingProductListResponse
```

Get Soft Staking Product List (USER_DATA)

Get the available Soft Staking product list.  Weight: 50

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Staking\Api\SoftStakingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asset = 'asset_example'; // string
$current = 56; // int | Currently querying page. Start from 1. Default:1
$size = 56; // int | Default:10, Max:100
$recvWindow = 56; // int

try {
    $result = $apiInstance->getSoftStakingProductList($asset, $current, $size, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SoftStakingApi->getSoftStakingProductList: ', $e->getMessage(), PHP_EOL;
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

[**\Binance\Client\Staking\Model\GetSoftStakingProductListResponse**](../Model/GetSoftStakingProductListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSoftStakingRewardsHistory()`

```php
getSoftStakingRewardsHistory($asset, $startTime, $endTime, $current, $size, $recvWindow): \Binance\Client\Staking\Model\GetSoftStakingRewardsHistoryResponse
```

Get Soft Staking Rewards History(USER_DATA)

* The time between `startTime` and `endTime` cannot be longer than 3 months. * If `startTime` and `endTime` are both not sent, then the last 30 days' data will be returned. * If `startTime` is sent but `endTime` is not sent, the next 30 days' data beginning from `startTime` will be returned. * If `endTime` is sent but `startTime` is not sent, the 30 days' data before `endTime` will be returned.  Weight: 50

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Staking\Api\SoftStakingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asset = 'asset_example'; // string
$startTime = 56; // int
$endTime = 56; // int
$current = 56; // int | Currently querying page. Start from 1. Default:1
$size = 56; // int | Default:10, Max:100
$recvWindow = 56; // int

try {
    $result = $apiInstance->getSoftStakingRewardsHistory($asset, $startTime, $endTime, $current, $size, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SoftStakingApi->getSoftStakingRewardsHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset** | **string**|  | [optional] |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **current** | **int**| Currently querying page. Start from 1. Default:1 | [optional] |
| **size** | **int**| Default:10, Max:100 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\Staking\Model\GetSoftStakingRewardsHistoryResponse**](../Model/GetSoftStakingRewardsHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setSoftStaking()`

```php
setSoftStaking($softStaking, $recvWindow): \Binance\Client\Staking\Model\SetSoftStakingResponse
```

Set Soft Staking (USER_DATA)

Enable or disable Soft Staking.  Weight: 50

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Staking\Api\SoftStakingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$softStaking = True; // bool | true or false
$recvWindow = 56; // int

try {
    $result = $apiInstance->setSoftStaking($softStaking, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SoftStakingApi->setSoftStaking: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **softStaking** | **bool**| true or false | |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\Staking\Model\SetSoftStakingResponse**](../Model/SetSoftStakingResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
