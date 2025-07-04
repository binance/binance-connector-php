# Binance\Client\Spot\GeneralApi

All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**exchangeInfo()**](GeneralApi.md#exchangeInfo) | **GET** /api/v3/exchangeInfo | Exchange information |
| [**ping()**](GeneralApi.md#ping) | **GET** /api/v3/ping | Test connectivity |
| [**time()**](GeneralApi.md#time) | **GET** /api/v3/time | Check server time |


## `exchangeInfo()`

```php
exchangeInfo($symbol, $symbols, $permissions, $showPermissionSets, $symbolStatus): \Binance\Client\Spot\Model\ExchangeInfoResponse
```

Exchange information

Current exchange trading rules and symbol information Weight: 20

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\GeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string | Symbol to query
$symbols = array('symbols_example'); // \Binance\Client\Spot\Model\Symbols | List of symbols to query
$permissions = array('permissions_example'); // \Binance\Client\Spot\Model\Permissions | List of permissions to query
$showPermissionSets = True; // bool | Controls whether the content of the `permissionSets` field is populated or not. Defaults to `true`
$symbolStatus = new \Binance\Client\Spot\Model\\Binance\Client\Spot\Model\SymbolStatus(); // \Binance\Client\Spot\Model\SymbolStatus

try {
    $result = $apiInstance->exchangeInfo($symbol, $symbols, $permissions, $showPermissionSets, $symbolStatus);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->exchangeInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**| Symbol to query | [optional] |
| **symbols** | [**\Binance\Client\Spot\Model\Symbols**](../Model/string.md)| List of symbols to query | [optional] |
| **permissions** | [**\Binance\Client\Spot\Model\Permissions**](../Model/string.md)| List of permissions to query | [optional] |
| **showPermissionSets** | **bool**| Controls whether the content of the &#x60;permissionSets&#x60; field is populated or not. Defaults to &#x60;true&#x60; | [optional] |
| **symbolStatus** | [**\Binance\Client\Spot\Model\SymbolStatus**](../Model/.md)|  | [optional] |

### Return type

[**\Binance\Client\Spot\Model\ExchangeInfoResponse**](../Model/ExchangeInfoResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ping()`

```php
ping()
```

Test connectivity

Test connectivity to the Rest API. Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\GeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->ping();
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->ping: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `time()`

```php
time(): \Binance\Client\Spot\Model\TimeResponse
```

Check server time

Test connectivity to the Rest API and get the current server time. Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\GeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->time();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeneralApi->time: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Binance\Client\Spot\Model\TimeResponse**](../Model/TimeResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
