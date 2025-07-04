# Binance\Client\MarginTrading\TransferApi

All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCrossMarginTransferHistory()**](TransferApi.md#getCrossMarginTransferHistory) | **GET** /sapi/v1/margin/transfer | Get Cross Margin Transfer History (USER_DATA) |
| [**queryMaxTransferOutAmount()**](TransferApi.md#queryMaxTransferOutAmount) | **GET** /sapi/v1/margin/maxTransferable | Query Max Transfer-Out Amount (USER_DATA) |


## `getCrossMarginTransferHistory()`

```php
getCrossMarginTransferHistory($asset, $type, $startTime, $endTime, $current, $size, $isolatedSymbol, $recvWindow): \Binance\Client\MarginTrading\Model\GetCrossMarginTransferHistoryResponse
```

Get Cross Margin Transfer History (USER_DATA)

Get Cross Margin Transfer History  * Response in descending order * The max interval between `startTime` and `endTime` is 30 days. * Returns data for last 7 days by default  Weight: 1(IP)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\TransferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asset = 'asset_example'; // string
$type = 'type_example'; // string | Transfer Type: ROLL_IN, ROLL_OUT
$startTime = 56; // int | 只支持查询最近90天的数据
$endTime = 56; // int
$current = 56; // int | Currently querying page. Start from 1. Default:1
$size = 56; // int | Default:10 Max:100
$isolatedSymbol = 'isolatedSymbol_example'; // string | isolated symbol
$recvWindow = 56; // int | No more than 60000

try {
    $result = $apiInstance->getCrossMarginTransferHistory($asset, $type, $startTime, $endTime, $current, $size, $isolatedSymbol, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransferApi->getCrossMarginTransferHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset** | **string**|  | [optional] |
| **type** | **string**| Transfer Type: ROLL_IN, ROLL_OUT | [optional] |
| **startTime** | **int**| 只支持查询最近90天的数据 | [optional] |
| **endTime** | **int**|  | [optional] |
| **current** | **int**| Currently querying page. Start from 1. Default:1 | [optional] |
| **size** | **int**| Default:10 Max:100 | [optional] |
| **isolatedSymbol** | **string**| isolated symbol | [optional] |
| **recvWindow** | **int**| No more than 60000 | [optional] |

### Return type

[**\Binance\Client\MarginTrading\Model\GetCrossMarginTransferHistoryResponse**](../Model/GetCrossMarginTransferHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryMaxTransferOutAmount()`

```php
queryMaxTransferOutAmount($asset, $isolatedSymbol, $recvWindow): \Binance\Client\MarginTrading\Model\QueryMaxTransferOutAmountResponse
```

Query Max Transfer-Out Amount (USER_DATA)

Query Max Transfer-Out Amount  * If isolatedSymbol is not sent, crossed margin data will be sent.  Weight: 50(IP)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\TransferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asset = 'asset_example'; // string
$isolatedSymbol = 'isolatedSymbol_example'; // string | isolated symbol
$recvWindow = 56; // int | No more than 60000

try {
    $result = $apiInstance->queryMaxTransferOutAmount($asset, $isolatedSymbol, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransferApi->queryMaxTransferOutAmount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset** | **string**|  | |
| **isolatedSymbol** | **string**| isolated symbol | [optional] |
| **recvWindow** | **int**| No more than 60000 | [optional] |

### Return type

[**\Binance\Client\MarginTrading\Model\QueryMaxTransferOutAmountResponse**](../Model/QueryMaxTransferOutAmountResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
