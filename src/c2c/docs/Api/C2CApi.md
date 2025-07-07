# Binance\Client\C2c\C2CApi

All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getC2CTradeHistory()**](C2CApi.md#getC2CTradeHistory) | **GET** /sapi/v1/c2c/orderMatch/listUserOrderHistory | Get C2C Trade History (USER_DATA) |


## `getC2CTradeHistory()`

```php
getC2CTradeHistory($startTime, $endTime, $page, $recvWindow): \Binance\Client\C2c\Model\GetC2CTradeHistoryResponse
```

Get C2C Trade History (USER_DATA)

Get C2C Trade History  * The max interval between startTime and endTime is 30 days. * If startTime and endTime are not sent, the recent 7 days' data will be returned. * The earliest startTime is supported on June 10, 2020 * Return up to 200 records per request.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\C2c\Api\C2CApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startTime = 56; // int
$endTime = 56; // int
$page = 56; // int | Default 1
$recvWindow = 56; // int

try {
    $result = $apiInstance->getC2CTradeHistory($startTime, $endTime, $page, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling C2CApi->getC2CTradeHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **page** | **int**| Default 1 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\C2c\Model\GetC2CTradeHistoryResponse**](../Model/GetC2CTradeHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
