# Binance\Client\DerivativesTradingPortfolioMargin\MarketDataApi

All URIs are relative to https://papi.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**testConnectivity()**](MarketDataApi.md#testConnectivity) | **GET** /papi/v1/ping | Test Connectivity |


## `testConnectivity()`

```php
testConnectivity()
```

Test Connectivity

Test connectivity to the Rest API.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\MarketDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->testConnectivity();
} catch (Exception $e) {
    echo 'Exception when calling MarketDataApi->testConnectivity: ', $e->getMessage(), PHP_EOL;
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
