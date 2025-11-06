# Binance\Client\SimpleEarn\BfusdApi

All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getBfusdAccount()**](BfusdApi.md#getBfusdAccount) | **GET** /sapi/v1/bfusd/account | Get BFUSD Account (USER_DATA) |
| [**getBfusdQuotaDetails()**](BfusdApi.md#getBfusdQuotaDetails) | **GET** /sapi/v1/bfusd/quota | Get BFUSD Quota Details (USER_DATA) |
| [**getBfusdRateHistory()**](BfusdApi.md#getBfusdRateHistory) | **GET** /sapi/v1/bfusd/history/rateHistory | Get BFUSD Rate History (USER_DATA) |
| [**getBfusdRedemptionHistory()**](BfusdApi.md#getBfusdRedemptionHistory) | **GET** /sapi/v1/bfusd/history/redemptionHistory | Get BFUSD Redemption History (USER_DATA) |
| [**getBfusdRewardsHistory()**](BfusdApi.md#getBfusdRewardsHistory) | **GET** /sapi/v1/bfusd/history/rewardsHistory | Get BFUSD Rewards History (USER_DATA) |
| [**getBfusdSubscriptionHistory()**](BfusdApi.md#getBfusdSubscriptionHistory) | **GET** /sapi/v1/bfusd/history/subscriptionHistory | Get BFUSD subscription history(USER_DATA) |
| [**redeemBfusd()**](BfusdApi.md#redeemBfusd) | **POST** /sapi/v1/bfusd/redeem | Redeem BFUSD(TRADE) |
| [**subscribeBfusd()**](BfusdApi.md#subscribeBfusd) | **POST** /sapi/v1/bfusd/subscribe | Subscribe BFUSD(TRADE) |


## `getBfusdAccount()`

```php
getBfusdAccount($recvWindow): \Binance\Client\SimpleEarn\Model\GetBfusdAccountResponse
```

Get BFUSD Account (USER_DATA)

Get BFUSD account information.  Weight: 150

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SimpleEarn\Api\BfusdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 56; // int | The value cannot be greater than 60000 (ms)

try {
    $result = $apiInstance->getBfusdAccount($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BfusdApi->getBfusdAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**| The value cannot be greater than 60000 (ms) | [optional] |

### Return type

[**\Binance\Client\SimpleEarn\Model\GetBfusdAccountResponse**](../Model/GetBfusdAccountResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBfusdQuotaDetails()`

```php
getBfusdQuotaDetails($recvWindow): \Binance\Client\SimpleEarn\Model\GetBfusdQuotaDetailsResponse
```

Get BFUSD Quota Details (USER_DATA)

Get BFUSD quota details including fast redemption quota and standard redemption quota.  Weight: 150

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SimpleEarn\Api\BfusdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 56; // int | The value cannot be greater than 60000 (ms)

try {
    $result = $apiInstance->getBfusdQuotaDetails($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BfusdApi->getBfusdQuotaDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**| The value cannot be greater than 60000 (ms) | [optional] |

### Return type

[**\Binance\Client\SimpleEarn\Model\GetBfusdQuotaDetailsResponse**](../Model/GetBfusdQuotaDetailsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBfusdRateHistory()`

```php
getBfusdRateHistory($startTime, $endTime, $current, $size, $recvWindow): \Binance\Client\SimpleEarn\Model\GetBfusdRateHistoryResponse
```

Get BFUSD Rate History (USER_DATA)

Get BFUSD rate history sorted by descending order.  * The time between `startTime` and `endTime` cannot be longer than 6 months. * If `startTime` and `endTime` are both not sent, then the last 30 days' data will be returned. * If `startTime` is sent but `endTime` is not sent, `endTime` will default to current time, and results from `startTime` onward will be returned. * If `endTime` is sent but `startTime` is not sent, `startTime` defaults to the current time minus one month, and data between `startTime` and `endTime` will be returned.  Weight: 150

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SimpleEarn\Api\BfusdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startTime = 56; // int
$endTime = 56; // int
$current = 56; // int | Currently querying page. Starts from 1. Default: 1
$size = 56; // int | Number of results per page. Default: 10, Max: 100
$recvWindow = 56; // int | The value cannot be greater than 60000 (ms)

try {
    $result = $apiInstance->getBfusdRateHistory($startTime, $endTime, $current, $size, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BfusdApi->getBfusdRateHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **current** | **int**| Currently querying page. Starts from 1. Default: 1 | [optional] |
| **size** | **int**| Number of results per page. Default: 10, Max: 100 | [optional] |
| **recvWindow** | **int**| The value cannot be greater than 60000 (ms) | [optional] |

### Return type

[**\Binance\Client\SimpleEarn\Model\GetBfusdRateHistoryResponse**](../Model/GetBfusdRateHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBfusdRedemptionHistory()`

```php
getBfusdRedemptionHistory($startTime, $endTime, $current, $size, $recvWindow): \Binance\Client\SimpleEarn\Model\GetBfusdRedemptionHistoryResponse
```

Get BFUSD Redemption History (USER_DATA)

Get BFUSD redemption history.  * The time between `startTime` and `endTime` cannot be longer than 6 months. * If `startTime` and `endTime` are both not sent, then the last 30 days' data will be returned. * If `startTime` is sent but `endTime` is not sent, `endTime` will default to current time, and results from `startTime` onward will be returned. * If `endTime` is sent but `startTime` is not sent, `startTime` defaults to the current time minus one month, and data between `startTime` and `endTime` will be returned.  Weight: 150

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SimpleEarn\Api\BfusdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startTime = 56; // int
$endTime = 56; // int
$current = 56; // int | Currently querying page. Starts from 1. Default: 1
$size = 56; // int | Number of results per page. Default: 10, Max: 100
$recvWindow = 56; // int | The value cannot be greater than 60000 (ms)

try {
    $result = $apiInstance->getBfusdRedemptionHistory($startTime, $endTime, $current, $size, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BfusdApi->getBfusdRedemptionHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **current** | **int**| Currently querying page. Starts from 1. Default: 1 | [optional] |
| **size** | **int**| Number of results per page. Default: 10, Max: 100 | [optional] |
| **recvWindow** | **int**| The value cannot be greater than 60000 (ms) | [optional] |

### Return type

[**\Binance\Client\SimpleEarn\Model\GetBfusdRedemptionHistoryResponse**](../Model/GetBfusdRedemptionHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBfusdRewardsHistory()`

```php
getBfusdRewardsHistory($startTime, $endTime, $current, $size, $recvWindow): \Binance\Client\SimpleEarn\Model\GetBfusdRewardsHistoryResponse
```

Get BFUSD Rewards History (USER_DATA)

Get BFUSD rewards history.  * The time between `startTime` and `endTime` cannot be longer than 6 months. * If `startTime` and `endTime` are both not sent, then the last 30 days' data will be returned. * If `startTime` is sent but `endTime` is not sent, `endTime` will default to current time, and results from `startTime` onward will be returned. * If `endTime` is sent but `startTime` is not sent, `startTime` defaults to the current time minus one month, and data between `startTime` and `endTime` will be returned.  Weight: 150

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SimpleEarn\Api\BfusdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startTime = 56; // int
$endTime = 56; // int
$current = 56; // int | Currently querying page. Starts from 1. Default: 1
$size = 56; // int | Number of results per page. Default: 10, Max: 100
$recvWindow = 56; // int | The value cannot be greater than 60000 (ms)

try {
    $result = $apiInstance->getBfusdRewardsHistory($startTime, $endTime, $current, $size, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BfusdApi->getBfusdRewardsHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **current** | **int**| Currently querying page. Starts from 1. Default: 1 | [optional] |
| **size** | **int**| Number of results per page. Default: 10, Max: 100 | [optional] |
| **recvWindow** | **int**| The value cannot be greater than 60000 (ms) | [optional] |

### Return type

[**\Binance\Client\SimpleEarn\Model\GetBfusdRewardsHistoryResponse**](../Model/GetBfusdRewardsHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBfusdSubscriptionHistory()`

```php
getBfusdSubscriptionHistory($asset, $startTime, $endTime, $current, $size, $recvWindow): \Binance\Client\SimpleEarn\Model\GetBfusdSubscriptionHistoryResponse
```

Get BFUSD subscription history(USER_DATA)

Get BFUSD subscription history  * The time between `startTime` and `endTime` cannot be longer than 6 months. * If `startTime` and `endTime` are both not sent, then the last 30 days' data will be returned. * If `startTime` is sent but `endTime` is not sent, `endTime` will default to current time, and results from `startTime` onward will be returned. * If `endTime` is sent but `startTime` is not sent, `startTime` defaults to the current time advanced by one month, and data between `startTime` and `endTime` will be returned.  Weight: 150

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SimpleEarn\Api\BfusdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asset = 'asset_example'; // string | USDC or USDT
$startTime = 56; // int
$endTime = 56; // int
$current = 56; // int | Currently querying page. Starts from 1. Default: 1
$size = 56; // int | Number of results per page. Default: 10, Max: 100
$recvWindow = 56; // int | The value cannot be greater than 60000 (ms)

try {
    $result = $apiInstance->getBfusdSubscriptionHistory($asset, $startTime, $endTime, $current, $size, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BfusdApi->getBfusdSubscriptionHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset** | **string**| USDC or USDT | [optional] |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **current** | **int**| Currently querying page. Starts from 1. Default: 1 | [optional] |
| **size** | **int**| Number of results per page. Default: 10, Max: 100 | [optional] |
| **recvWindow** | **int**| The value cannot be greater than 60000 (ms) | [optional] |

### Return type

[**\Binance\Client\SimpleEarn\Model\GetBfusdSubscriptionHistoryResponse**](../Model/GetBfusdSubscriptionHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `redeemBfusd()`

```php
redeemBfusd($redeemBfusdRequest): \Binance\Client\SimpleEarn\Model\RedeemBfusdResponse
```

Redeem BFUSD(TRADE)

Redeem BFUSD to USDT  * You need to open Enable Spot & Margin Trading permission for the API Key which requests this endpoint.  Weight: 150

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SimpleEarn\Api\BfusdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$redeemBfusdRequest = new \Binance\Client\SimpleEarn\Model\RedeemBfusdRequest(); // \Binance\Client\SimpleEarn\Model\RedeemBfusdRequest

try {
    $result = $apiInstance->redeemBfusd($redeemBfusdRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BfusdApi->redeemBfusd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **redeemBfusdRequest** | [**\Binance\Client\SimpleEarn\Model\RedeemBfusdRequest**](../Model/RedeemBfusdRequest.md)|  | |

### Return type

[**\Binance\Client\SimpleEarn\Model\RedeemBfusdResponse**](../Model/RedeemBfusdResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subscribeBfusd()`

```php
subscribeBfusd($subscribeBfusdRequest): \Binance\Client\SimpleEarn\Model\SubscribeBfusdResponse
```

Subscribe BFUSD(TRADE)

Subscribe BFUSD  * You need to open Enable Spot & Margin Trading permission for the API Key which requests this endpoint.  Weight: 150

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SimpleEarn\Api\BfusdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$subscribeBfusdRequest = new \Binance\Client\SimpleEarn\Model\SubscribeBfusdRequest(); // \Binance\Client\SimpleEarn\Model\SubscribeBfusdRequest

try {
    $result = $apiInstance->subscribeBfusd($subscribeBfusdRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BfusdApi->subscribeBfusd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscribeBfusdRequest** | [**\Binance\Client\SimpleEarn\Model\SubscribeBfusdRequest**](../Model/SubscribeBfusdRequest.md)|  | |

### Return type

[**\Binance\Client\SimpleEarn\Model\SubscribeBfusdResponse**](../Model/SubscribeBfusdResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
