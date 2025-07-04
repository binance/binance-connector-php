# Binance\Client\SimpleEarn\AccountApi

All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getFlexiblePersonalLeftQuota()**](AccountApi.md#getFlexiblePersonalLeftQuota) | **GET** /sapi/v1/simple-earn/flexible/personalLeftQuota | Get Flexible Personal Left Quota(USER_DATA) |
| [**getFlexibleProductPosition()**](AccountApi.md#getFlexibleProductPosition) | **GET** /sapi/v1/simple-earn/flexible/position | Get Flexible Product Position(USER_DATA) |
| [**getLockedPersonalLeftQuota()**](AccountApi.md#getLockedPersonalLeftQuota) | **GET** /sapi/v1/simple-earn/locked/personalLeftQuota | Get Locked Personal Left Quota(USER_DATA) |
| [**getLockedProductPosition()**](AccountApi.md#getLockedProductPosition) | **GET** /sapi/v1/simple-earn/locked/position | Get Locked Product Position |
| [**getSimpleEarnFlexibleProductList()**](AccountApi.md#getSimpleEarnFlexibleProductList) | **GET** /sapi/v1/simple-earn/flexible/list | Get Simple Earn Flexible Product List(USER_DATA) |
| [**getSimpleEarnLockedProductList()**](AccountApi.md#getSimpleEarnLockedProductList) | **GET** /sapi/v1/simple-earn/locked/list | Get Simple Earn Locked Product List(USER_DATA) |
| [**simpleAccount()**](AccountApi.md#simpleAccount) | **GET** /sapi/v1/simple-earn/account | Simple Account(USER_DATA) |


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



$apiInstance = new Binance\Client\SimpleEarn\Api\AccountApi(
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
    echo 'Exception when calling AccountApi->getFlexiblePersonalLeftQuota: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new Binance\Client\SimpleEarn\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asset = 'asset_example'; // string
$productId = 'productId_example'; // string
$current = 56; // int | Currently querying the page. Start from 1. Default:1
$size = 56; // int | Default:10, Max:100
$recvWindow = 56; // int

try {
    $result = $apiInstance->getFlexibleProductPosition($asset, $productId, $current, $size, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getFlexibleProductPosition: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset** | **string**|  | [optional] |
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



$apiInstance = new Binance\Client\SimpleEarn\Api\AccountApi(
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
    echo 'Exception when calling AccountApi->getLockedPersonalLeftQuota: ', $e->getMessage(), PHP_EOL;
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



$apiInstance = new Binance\Client\SimpleEarn\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asset = 'asset_example'; // string
$positionId = 'positionId_example'; // string
$projectId = 'projectId_example'; // string
$current = 56; // int | Currently querying the page. Start from 1. Default:1
$size = 56; // int | Default:10, Max:100
$recvWindow = 56; // int

try {
    $result = $apiInstance->getLockedProductPosition($asset, $positionId, $projectId, $current, $size, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getLockedProductPosition: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset** | **string**|  | [optional] |
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



$apiInstance = new Binance\Client\SimpleEarn\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asset = 'asset_example'; // string
$current = 56; // int | Currently querying the page. Start from 1. Default:1
$size = 56; // int | Default:10, Max:100
$recvWindow = 56; // int

try {
    $result = $apiInstance->getSimpleEarnFlexibleProductList($asset, $current, $size, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getSimpleEarnFlexibleProductList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset** | **string**|  | [optional] |
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



$apiInstance = new Binance\Client\SimpleEarn\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asset = 'asset_example'; // string
$current = 56; // int | Currently querying the page. Start from 1. Default:1
$size = 56; // int | Default:10, Max:100
$recvWindow = 56; // int

try {
    $result = $apiInstance->getSimpleEarnLockedProductList($asset, $current, $size, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getSimpleEarnLockedProductList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset** | **string**|  | [optional] |
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



$apiInstance = new Binance\Client\SimpleEarn\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 56; // int

try {
    $result = $apiInstance->simpleAccount($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->simpleAccount: ', $e->getMessage(), PHP_EOL;
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
