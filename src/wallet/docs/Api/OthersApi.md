# Binance\Client\Wallet\OthersApi



All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getSymbolsDelistScheduleForSpot()**](OthersApi.md#getSymbolsDelistScheduleForSpot) | **GET** /sapi/v1/spot/delist-schedule | Get Spot Delist Schedule (MARKET_DATA) |
| [**systemStatus()**](OthersApi.md#systemStatus) | **GET** /sapi/v1/system/status | System Status |


## `getSymbolsDelistScheduleForSpot()`

```php
getSymbolsDelistScheduleForSpot($recvWindow): \Binance\Client\Wallet\Model\GetSymbolsDelistScheduleForSpotResponse
```

Get Spot Delist Schedule (MARKET_DATA)

Get symbols delist schedule for spot  Weight(IP): 100  Security Type: MARKET_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Wallet\Api\OthersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 5000; // int

try {
    $result = $apiInstance->getSymbolsDelistScheduleForSpot($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OthersApi->getSymbolsDelistScheduleForSpot: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\Wallet\Model\GetSymbolsDelistScheduleForSpotResponse**](../Model/GetSymbolsDelistScheduleForSpotResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `systemStatus()`

```php
systemStatus(): \Binance\Client\Wallet\Model\SystemStatusResponse
```

System Status

Fetch system status.  Weight(IP): 1  Security Type: System

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Wallet\Api\OthersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->systemStatus();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OthersApi->systemStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Binance\Client\Wallet\Model\SystemStatusResponse**](../Model/SystemStatusResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
