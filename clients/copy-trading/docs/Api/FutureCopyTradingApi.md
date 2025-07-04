# Binance\Client\CopyTrading\FutureCopyTradingApi

All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getFuturesLeadTraderStatus()**](FutureCopyTradingApi.md#getFuturesLeadTraderStatus) | **GET** /sapi/v1/copyTrading/futures/userStatus | Get Futures Lead Trader Status(TRADE) |
| [**getFuturesLeadTradingSymbolWhitelist()**](FutureCopyTradingApi.md#getFuturesLeadTradingSymbolWhitelist) | **GET** /sapi/v1/copyTrading/futures/leadSymbol | Get Futures Lead Trading Symbol Whitelist(USER_DATA) |


## `getFuturesLeadTraderStatus()`

```php
getFuturesLeadTraderStatus($recvWindow): \Binance\Client\CopyTrading\Model\GetFuturesLeadTraderStatusResponse
```

Get Futures Lead Trader Status(TRADE)

Get Futures Lead Trader Status  Weight: 20

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\CopyTrading\Api\FutureCopyTradingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 56; // int

try {
    $result = $apiInstance->getFuturesLeadTraderStatus($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FutureCopyTradingApi->getFuturesLeadTraderStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\CopyTrading\Model\GetFuturesLeadTraderStatusResponse**](../Model/GetFuturesLeadTraderStatusResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFuturesLeadTradingSymbolWhitelist()`

```php
getFuturesLeadTradingSymbolWhitelist($recvWindow): \Binance\Client\CopyTrading\Model\GetFuturesLeadTradingSymbolWhitelistResponse
```

Get Futures Lead Trading Symbol Whitelist(USER_DATA)

Get Futures Lead Trading Symbol Whitelist  Weight: 20

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\CopyTrading\Api\FutureCopyTradingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 56; // int

try {
    $result = $apiInstance->getFuturesLeadTradingSymbolWhitelist($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FutureCopyTradingApi->getFuturesLeadTradingSymbolWhitelist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\CopyTrading\Model\GetFuturesLeadTradingSymbolWhitelistResponse**](../Model/GetFuturesLeadTradingSymbolWhitelistResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
