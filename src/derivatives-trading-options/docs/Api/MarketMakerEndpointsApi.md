# Binance\Client\DerivativesTradingOptions\MarketMakerEndpointsApi

All URIs are relative to https://eapi.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**autoCancelAllOpenOrders()**](MarketMakerEndpointsApi.md#autoCancelAllOpenOrders) | **POST** /eapi/v1/countdownCancelAllHeartBeat | Auto-Cancel All Open Orders (Kill-Switch) Heartbeat (TRADE) |
| [**getAutoCancelAllOpenOrders()**](MarketMakerEndpointsApi.md#getAutoCancelAllOpenOrders) | **GET** /eapi/v1/countdownCancelAll | Get Auto-Cancel All Open Orders (Kill-Switch) Config (TRADE) |
| [**getMarketMakerProtectionConfig()**](MarketMakerEndpointsApi.md#getMarketMakerProtectionConfig) | **GET** /eapi/v1/mmp | Get Market Maker Protection Config (TRADE) |
| [**resetMarketMakerProtectionConfig()**](MarketMakerEndpointsApi.md#resetMarketMakerProtectionConfig) | **POST** /eapi/v1/mmpReset | Reset Market Maker Protection Config (TRADE) |
| [**setAutoCancelAllOpenOrders()**](MarketMakerEndpointsApi.md#setAutoCancelAllOpenOrders) | **POST** /eapi/v1/countdownCancelAll | Set Auto-Cancel All Open Orders (Kill-Switch) Config (TRADE) |
| [**setMarketMakerProtectionConfig()**](MarketMakerEndpointsApi.md#setMarketMakerProtectionConfig) | **POST** /eapi/v1/mmpSet | Set Market Maker Protection Config (TRADE) |


## `autoCancelAllOpenOrders()`

```php
autoCancelAllOpenOrders($autoCancelAllOpenOrdersRequest): \Binance\Client\DerivativesTradingOptions\Model\AutoCancelAllOpenOrdersResponse
```

Auto-Cancel All Open Orders (Kill-Switch) Heartbeat (TRADE)

This endpoint resets the time from which the countdown will begin to the time this messaged is received.  It should be called repeatedly as heartbeats.  Multiple heartbeats can be updated at once by specifying the underlying symbols as a list (ex. BTCUSDT,ETHUSDT) in the underlyings parameter.  * The response will only include underlying symbols where the heartbeat has been successfully updated.  Weight: 10

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingOptions\Api\MarketMakerEndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$autoCancelAllOpenOrdersRequest = new \Binance\Client\DerivativesTradingOptions\Model\AutoCancelAllOpenOrdersRequest(); // \Binance\Client\DerivativesTradingOptions\Model\AutoCancelAllOpenOrdersRequest

try {
    $result = $apiInstance->autoCancelAllOpenOrders($autoCancelAllOpenOrdersRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketMakerEndpointsApi->autoCancelAllOpenOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **autoCancelAllOpenOrdersRequest** | [**\Binance\Client\DerivativesTradingOptions\Model\AutoCancelAllOpenOrdersRequest**](../Model/AutoCancelAllOpenOrdersRequest.md)|  | |

### Return type

[**\Binance\Client\DerivativesTradingOptions\Model\AutoCancelAllOpenOrdersResponse**](../Model/AutoCancelAllOpenOrdersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAutoCancelAllOpenOrders()`

```php
getAutoCancelAllOpenOrders($underlying, $recvWindow): \Binance\Client\DerivativesTradingOptions\Model\GetAutoCancelAllOpenOrdersResponse
```

Get Auto-Cancel All Open Orders (Kill-Switch) Config (TRADE)

This endpoint returns the auto-cancel parameters for each underlying symbol. Note only active auto-cancel parameters will be returned, if countdownTime is set to 0 (ie. countdownTime has been turned off), the underlying symbol and corresponding countdownTime parameter will not be returned in the response.  * countdownTime = 0 means the function is disabled.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingOptions\Api\MarketMakerEndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$underlying = 'underlying_example'; // string | underlying, e.g BTCUSDT
$recvWindow = 56; // int

try {
    $result = $apiInstance->getAutoCancelAllOpenOrders($underlying, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketMakerEndpointsApi->getAutoCancelAllOpenOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **underlying** | **string**| underlying, e.g BTCUSDT | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingOptions\Model\GetAutoCancelAllOpenOrdersResponse**](../Model/GetAutoCancelAllOpenOrdersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMarketMakerProtectionConfig()`

```php
getMarketMakerProtectionConfig($underlying, $recvWindow): \Binance\Client\DerivativesTradingOptions\Model\GetMarketMakerProtectionConfigResponse
```

Get Market Maker Protection Config (TRADE)

Get config for MMP.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingOptions\Api\MarketMakerEndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$underlying = 'underlying_example'; // string | underlying, e.g BTCUSDT
$recvWindow = 56; // int

try {
    $result = $apiInstance->getMarketMakerProtectionConfig($underlying, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketMakerEndpointsApi->getMarketMakerProtectionConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **underlying** | **string**| underlying, e.g BTCUSDT | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingOptions\Model\GetMarketMakerProtectionConfigResponse**](../Model/GetMarketMakerProtectionConfigResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resetMarketMakerProtectionConfig()`

```php
resetMarketMakerProtectionConfig($resetMarketMakerProtectionConfigRequest): \Binance\Client\DerivativesTradingOptions\Model\ResetMarketMakerProtectionConfigResponse
```

Reset Market Maker Protection Config (TRADE)

Reset MMP, start MMP order again.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingOptions\Api\MarketMakerEndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$resetMarketMakerProtectionConfigRequest = new \Binance\Client\DerivativesTradingOptions\Model\ResetMarketMakerProtectionConfigRequest(); // \Binance\Client\DerivativesTradingOptions\Model\ResetMarketMakerProtectionConfigRequest

try {
    $result = $apiInstance->resetMarketMakerProtectionConfig($resetMarketMakerProtectionConfigRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketMakerEndpointsApi->resetMarketMakerProtectionConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **resetMarketMakerProtectionConfigRequest** | [**\Binance\Client\DerivativesTradingOptions\Model\ResetMarketMakerProtectionConfigRequest**](../Model/ResetMarketMakerProtectionConfigRequest.md)|  | |

### Return type

[**\Binance\Client\DerivativesTradingOptions\Model\ResetMarketMakerProtectionConfigResponse**](../Model/ResetMarketMakerProtectionConfigResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setAutoCancelAllOpenOrders()`

```php
setAutoCancelAllOpenOrders($setAutoCancelAllOpenOrdersRequest): \Binance\Client\DerivativesTradingOptions\Model\SetAutoCancelAllOpenOrdersResponse
```

Set Auto-Cancel All Open Orders (Kill-Switch) Config (TRADE)

This endpoint sets the parameters of the auto-cancel feature which cancels all open orders (both market maker protection and non market maker protection order types) of the underlying symbol at the end of the specified countdown time period if no heartbeat message is sent.  After the countdown time period, all open orders will be cancelled and new orders will be rejected with error code -2010 until either a heartbeat message is sent or the auto-cancel feature is turned off by setting countdownTime to 0.   * This rest endpoint sets up the parameters to cancel your open orders in case of an outage or disconnection. * Example usage: Call this endpoint with a countdownTime value of 10000 (10 seconds) to turn on the auto-cancel feature. If the corresponding countdownCancelAllHeartBeat endpoint is not called within 10 seconds with the specified underlying symbol, all open orders of the specified symbol will be automatically canceled. If this endpoint is called with an countdownTime of 0, the countdown timer will be stopped. * The system will check all countdowns approximately every 1000 milliseconds, **please note that sufficient redundancy should be considered when using this function**. We do not recommend setting the countdown time to be too precise or too small.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingOptions\Api\MarketMakerEndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$setAutoCancelAllOpenOrdersRequest = new \Binance\Client\DerivativesTradingOptions\Model\SetAutoCancelAllOpenOrdersRequest(); // \Binance\Client\DerivativesTradingOptions\Model\SetAutoCancelAllOpenOrdersRequest

try {
    $result = $apiInstance->setAutoCancelAllOpenOrders($setAutoCancelAllOpenOrdersRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketMakerEndpointsApi->setAutoCancelAllOpenOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **setAutoCancelAllOpenOrdersRequest** | [**\Binance\Client\DerivativesTradingOptions\Model\SetAutoCancelAllOpenOrdersRequest**](../Model/SetAutoCancelAllOpenOrdersRequest.md)|  | |

### Return type

[**\Binance\Client\DerivativesTradingOptions\Model\SetAutoCancelAllOpenOrdersResponse**](../Model/SetAutoCancelAllOpenOrdersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setMarketMakerProtectionConfig()`

```php
setMarketMakerProtectionConfig($setMarketMakerProtectionConfigRequest): \Binance\Client\DerivativesTradingOptions\Model\SetMarketMakerProtectionConfigResponse
```

Set Market Maker Protection Config (TRADE)

Set config for MMP. Market Maker Protection(MMP) is a set of protection mechanism for option market maker, this mechanism is able to prevent mass trading in short period time. Once market maker's account branches the threshold, the Market Maker Protection will be triggered. When Market Maker Protection triggers, all the current MMP orders will be canceled, new MMP orders will be rejected. Market maker can use this time to reevaluate market and modify order price.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingOptions\Api\MarketMakerEndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$setMarketMakerProtectionConfigRequest = new \Binance\Client\DerivativesTradingOptions\Model\SetMarketMakerProtectionConfigRequest(); // \Binance\Client\DerivativesTradingOptions\Model\SetMarketMakerProtectionConfigRequest

try {
    $result = $apiInstance->setMarketMakerProtectionConfig($setMarketMakerProtectionConfigRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketMakerEndpointsApi->setMarketMakerProtectionConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **setMarketMakerProtectionConfigRequest** | [**\Binance\Client\DerivativesTradingOptions\Model\SetMarketMakerProtectionConfigRequest**](../Model/SetMarketMakerProtectionConfigRequest.md)|  | |

### Return type

[**\Binance\Client\DerivativesTradingOptions\Model\SetMarketMakerProtectionConfigResponse**](../Model/SetMarketMakerProtectionConfigResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
