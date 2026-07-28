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

Get Cross Margin Transfer History  Weight(IP): 1  Security Type: USER_DATA  Notes: - Response in descending order - The max interval between `startTime` and `endTime` is 30 days. - Returns data for last 7 days by default

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\TransferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asset = BNB; // string
$type = new \Binance\Client\MarginTrading\Model\\Binance\Client\MarginTrading\Model\OrderType(); // \Binance\Client\MarginTrading\Model\OrderType
$startTime = 1623319461670; // int
$endTime = 1641782889000; // int
$current = 1; // int
$size = 10; // int
$isolatedSymbol = BNBUSDT; // string
$recvWindow = 5000; // int

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
| **type** | [**\Binance\Client\MarginTrading\Model\OrderType**](../Model/.md)|  | [optional] |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **current** | **int**|  | [optional] |
| **size** | **int**|  | [optional] |
| **isolatedSymbol** | **string**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

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

Query Max Transfer-Out Amount  Weight(IP): 50  Security Type: USER_DATA  Notes: - If isolatedSymbol is not sent, crossed margin data will be sent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\TransferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asset = BTC; // string
$isolatedSymbol = BTCUSDT; // string
$recvWindow = 5000; // int

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
| **isolatedSymbol** | **string**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

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
