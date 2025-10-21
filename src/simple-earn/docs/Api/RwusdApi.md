# Binance\Client\SimpleEarn\RwusdApi

All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getRwusdAccount()**](RwusdApi.md#getRwusdAccount) | **GET** /sapi/v1/rwusd/account | Get RWUSD Account (USER_DATA) |
| [**getRwusdQuotaDetails()**](RwusdApi.md#getRwusdQuotaDetails) | **GET** /sapi/v1/rwusd/quota | Get RWUSD Quota Details (USER_DATA) |
| [**getRwusdRateHistory()**](RwusdApi.md#getRwusdRateHistory) | **GET** /sapi/v1/rwusd/history/rateHistory | Get RWUSD Rate History (USER_DATA) |
| [**getRwusdRedemptionHistory()**](RwusdApi.md#getRwusdRedemptionHistory) | **GET** /sapi/v1/rwusd/history/redemptionHistory | Get RWUSD Redemption History (USER_DATA) |
| [**getRwusdRewardsHistory()**](RwusdApi.md#getRwusdRewardsHistory) | **GET** /sapi/v1/rwusd/history/rewardsHistory | Get RWUSD Rewards History (USER_DATA) |
| [**getRwusdSubscriptionHistory()**](RwusdApi.md#getRwusdSubscriptionHistory) | **GET** /sapi/v1/rwusd/history/subscriptionHistory | Get RWUSD subscription history(USER_DATA) |
| [**redeemRwusd()**](RwusdApi.md#redeemRwusd) | **POST** /sapi/v1/rwusd/redeem | Redeem RWUSD(TRADE) |
| [**subscribeRwusd()**](RwusdApi.md#subscribeRwusd) | **POST** /sapi/v1/rwusd/subscribe | Subscribe RWUSD(TRADE) |


## `getRwusdAccount()`

```php
getRwusdAccount($recvWindow): \Binance\Client\SimpleEarn\Model\GetRwusdAccountResponse
```

Get RWUSD Account (USER_DATA)

Get RWUSD account information.  Weight: 150

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SimpleEarn\Api\RwusdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 56; // int

try {
    $result = $apiInstance->getRwusdAccount($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RwusdApi->getRwusdAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\SimpleEarn\Model\GetRwusdAccountResponse**](../Model/GetRwusdAccountResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRwusdQuotaDetails()`

```php
getRwusdQuotaDetails($recvWindow): \Binance\Client\SimpleEarn\Model\GetRwusdQuotaDetailsResponse
```

Get RWUSD Quota Details (USER_DATA)

Get RWUSD quota details including subscription quota, fast redemption quota, and standard redemption quota.  Weight: 150

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SimpleEarn\Api\RwusdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 56; // int

try {
    $result = $apiInstance->getRwusdQuotaDetails($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RwusdApi->getRwusdQuotaDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\SimpleEarn\Model\GetRwusdQuotaDetailsResponse**](../Model/GetRwusdQuotaDetailsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRwusdRateHistory()`

```php
getRwusdRateHistory($startTime, $endTime, $current, $size, $recvWindow): \Binance\Client\SimpleEarn\Model\GetRwusdRateHistoryResponse
```

Get RWUSD Rate History (USER_DATA)

Get RWUSD rate history sorted by descending order.  * The time between `startTime` and `endTime` cannot be longer than 6 months. * If `startTime` and `endTime` are both not sent, then the last 30 days' data will be returned. * If `startTime` is sent but `endTime` is not sent, `endTime` will default to current time, and results from `startTime` onward will be returned. * If `endTime` is sent but `startTime` is not sent, `startTime` defaults to the current time minus one month, and data between `startTime` and `endTime` will be returned.  Weight: 150

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SimpleEarn\Api\RwusdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startTime = 56; // int
$endTime = 56; // int
$current = 56; // int | Currently querying the page. Start from 1. Default:1
$size = 56; // int | Default:10, Max:100
$recvWindow = 56; // int

try {
    $result = $apiInstance->getRwusdRateHistory($startTime, $endTime, $current, $size, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RwusdApi->getRwusdRateHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **current** | **int**| Currently querying the page. Start from 1. Default:1 | [optional] |
| **size** | **int**| Default:10, Max:100 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\SimpleEarn\Model\GetRwusdRateHistoryResponse**](../Model/GetRwusdRateHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRwusdRedemptionHistory()`

```php
getRwusdRedemptionHistory($startTime, $endTime, $current, $size, $recvWindow): \Binance\Client\SimpleEarn\Model\GetRwusdRedemptionHistoryResponse
```

Get RWUSD Redemption History (USER_DATA)

Get RWUSD redemption history.  * The time between `startTime` and `endTime` cannot be longer than 6 months. * If `startTime` and `endTime` are both not sent, then the last 30 days' data will be returned. * If `startTime` is sent but `endTime` is not sent, `endTime` will default to current time, and results from `startTime` onward will be returned. * If `endTime` is sent but `startTime` is not sent, `startTime` defaults to the current time minus one month, and data between `startTime` and `endTime` will be returned.  Weight: 150

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SimpleEarn\Api\RwusdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startTime = 56; // int
$endTime = 56; // int
$current = 56; // int | Currently querying the page. Start from 1. Default:1
$size = 56; // int | Default:10, Max:100
$recvWindow = 56; // int

try {
    $result = $apiInstance->getRwusdRedemptionHistory($startTime, $endTime, $current, $size, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RwusdApi->getRwusdRedemptionHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **current** | **int**| Currently querying the page. Start from 1. Default:1 | [optional] |
| **size** | **int**| Default:10, Max:100 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\SimpleEarn\Model\GetRwusdRedemptionHistoryResponse**](../Model/GetRwusdRedemptionHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRwusdRewardsHistory()`

```php
getRwusdRewardsHistory($startTime, $endTime, $current, $size, $recvWindow): \Binance\Client\SimpleEarn\Model\GetRwusdRewardsHistoryResponse
```

Get RWUSD Rewards History (USER_DATA)

Get RWUSD rewards history.  * The time between `startTime` and `endTime` cannot be longer than 6 months. * If `startTime` and `endTime` are both not sent, then the last 30 days' data will be returned. * If `startTime` is sent but `endTime` is not sent, `endTime` will default to current time, and results from `startTime` onward will be returned. * If `endTime` is sent but `startTime` is not sent, `startTime` defaults to the current time minus one month, and data between `startTime` and `endTime` will be returned.  Weight: 150

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SimpleEarn\Api\RwusdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startTime = 56; // int
$endTime = 56; // int
$current = 56; // int | Currently querying the page. Start from 1. Default:1
$size = 56; // int | Default:10, Max:100
$recvWindow = 56; // int

try {
    $result = $apiInstance->getRwusdRewardsHistory($startTime, $endTime, $current, $size, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RwusdApi->getRwusdRewardsHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **current** | **int**| Currently querying the page. Start from 1. Default:1 | [optional] |
| **size** | **int**| Default:10, Max:100 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\SimpleEarn\Model\GetRwusdRewardsHistoryResponse**](../Model/GetRwusdRewardsHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRwusdSubscriptionHistory()`

```php
getRwusdSubscriptionHistory($asset, $startTime, $endTime, $current, $size, $recvWindow): \Binance\Client\SimpleEarn\Model\GetRwusdSubscriptionHistoryResponse
```

Get RWUSD subscription history(USER_DATA)

Get RWUSD subscription history  * The time between `startTime` and `endTime` cannot be longer than 6 months. * If `startTime` and `endTime` are both not sent, then the last 30 days' data will be returned. * If `startTime` is sent but `endTime` is not sent, `endTime` will default to current time, and results from `startTime` onward will be returned. * If `endTime` is sent but `startTime` is not sent, `startTime` defaults to the current time advanced by one month, and data between `startTime` and `endTime` will be returned.  Weight: 150

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SimpleEarn\Api\RwusdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asset = 'asset_example'; // string | USDC or USDT
$startTime = 56; // int
$endTime = 56; // int
$current = 56; // int | Currently querying the page. Start from 1. Default:1
$size = 56; // int | Default:10, Max:100
$recvWindow = 56; // int

try {
    $result = $apiInstance->getRwusdSubscriptionHistory($asset, $startTime, $endTime, $current, $size, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RwusdApi->getRwusdSubscriptionHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset** | **string**| USDC or USDT | [optional] |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **current** | **int**| Currently querying the page. Start from 1. Default:1 | [optional] |
| **size** | **int**| Default:10, Max:100 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\SimpleEarn\Model\GetRwusdSubscriptionHistoryResponse**](../Model/GetRwusdSubscriptionHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `redeemRwusd()`

```php
redeemRwusd($redeemRwusdRequest): \Binance\Client\SimpleEarn\Model\RedeemRwusdResponse
```

Redeem RWUSD(TRADE)

Redeem RWUSD to USDC  * You need to open Enable Spot & Margin Trading permission for the API Key which requests this endpoint.  Weight: 150

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SimpleEarn\Api\RwusdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$redeemRwusdRequest = new \Binance\Client\SimpleEarn\Model\RedeemRwusdRequest(); // \Binance\Client\SimpleEarn\Model\RedeemRwusdRequest

try {
    $result = $apiInstance->redeemRwusd($redeemRwusdRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RwusdApi->redeemRwusd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **redeemRwusdRequest** | [**\Binance\Client\SimpleEarn\Model\RedeemRwusdRequest**](../Model/RedeemRwusdRequest.md)|  | |

### Return type

[**\Binance\Client\SimpleEarn\Model\RedeemRwusdResponse**](../Model/RedeemRwusdResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subscribeRwusd()`

```php
subscribeRwusd($subscribeRwusdRequest): \Binance\Client\SimpleEarn\Model\SubscribeRwusdResponse
```

Subscribe RWUSD(TRADE)

Subscribe RWUSD  * You need to open Enable Spot & Margin Trading permission for the API Key which requests this endpoint.  Weight: 150

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\SimpleEarn\Api\RwusdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$subscribeRwusdRequest = new \Binance\Client\SimpleEarn\Model\SubscribeRwusdRequest(); // \Binance\Client\SimpleEarn\Model\SubscribeRwusdRequest

try {
    $result = $apiInstance->subscribeRwusd($subscribeRwusdRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RwusdApi->subscribeRwusd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscribeRwusdRequest** | [**\Binance\Client\SimpleEarn\Model\SubscribeRwusdRequest**](../Model/SubscribeRwusdRequest.md)|  | |

### Return type

[**\Binance\Client\SimpleEarn\Model\SubscribeRwusdResponse**](../Model/SubscribeRwusdResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
