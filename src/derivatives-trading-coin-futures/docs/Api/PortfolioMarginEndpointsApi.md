# Binance\Client\DerivativesTradingCoinFutures\PortfolioMarginEndpointsApi

All URIs are relative to https://dapi.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**classicPortfolioMarginAccountInformation()**](PortfolioMarginEndpointsApi.md#classicPortfolioMarginAccountInformation) | **GET** /dapi/v1/pmAccountInfo | Classic Portfolio Margin Account Information (USER_DATA) |


## `classicPortfolioMarginAccountInformation()`

```php
classicPortfolioMarginAccountInformation($asset, $recvWindow): \Binance\Client\DerivativesTradingCoinFutures\Model\ClassicPortfolioMarginAccountInformationResponse
```

Classic Portfolio Margin Account Information (USER_DATA)

Get Classic Portfolio Margin current account information.  * maxWithdrawAmount is for asset transfer out to the spot wallet.  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingCoinFutures\Api\PortfolioMarginEndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asset = 'asset_example'; // string
$recvWindow = 56; // int

try {
    $result = $apiInstance->classicPortfolioMarginAccountInformation($asset, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortfolioMarginEndpointsApi->classicPortfolioMarginAccountInformation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset** | **string**|  | |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingCoinFutures\Model\ClassicPortfolioMarginAccountInformationResponse**](../Model/ClassicPortfolioMarginAccountInformationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
