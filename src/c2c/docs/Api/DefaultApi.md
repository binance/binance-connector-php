# Binance\Client\C2c\DefaultApi



All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getC2CTradeHistory()**](DefaultApi.md#getC2CTradeHistory) | **GET** /sapi/v1/c2c/orderMatch/listUserOrderHistory | Get C2C Trade History (USER_DATA) |


## `getC2CTradeHistory()`

```php
getC2CTradeHistory($tradeType, $startTimestamp, $endTimestamp, $page, $rows): \Binance\Client\C2c\Model\GetC2CTradeHistoryResponse
```

Get C2C Trade History (USER_DATA)

Get C2C Trade History  Weight(IP): 1  Security Type: USER_DATA  Notes: - The max interval between `startTimestamp` and `endTimestamp` is 30 days. - If `startTimestamp` and `endTimestamp` are not sent, the recent 30 days' data is returned. - You can only view data from the past 6 months. For all C2C orders, check `https://c2c.binance.com/en/fiatOrder`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\C2c\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tradeType = new \Binance\Client\C2c\Model\\Binance\Client\C2c\Model\TradeType(); // \Binance\Client\C2c\Model\TradeType | Trade side filter
$startTimestamp = 1770736694138; // int
$endTimestamp = 1770736694138; // int
$page = 1; // int | Page number
$rows = 100; // int | Number of records per page

try {
    $result = $apiInstance->getC2CTradeHistory($tradeType, $startTimestamp, $endTimestamp, $page, $rows);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getC2CTradeHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tradeType** | [**\Binance\Client\C2c\Model\TradeType**](../Model/.md)| Trade side filter | [optional] |
| **startTimestamp** | **int**|  | [optional] |
| **endTimestamp** | **int**|  | [optional] |
| **page** | **int**| Page number | [optional] |
| **rows** | **int**| Number of records per page | [optional] |

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
