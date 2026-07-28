# Binance\Client\Pay\DefaultApi



All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getPayTradeHistory()**](DefaultApi.md#getPayTradeHistory) | **GET** /sapi/v1/pay/transactions | Get Pay Trade History |


## `getPayTradeHistory()`

```php
getPayTradeHistory($startTime, $endTime, $limit, $recvWindow): \Binance\Client\Pay\Model\GetPayTradeHistoryResponse
```

Get Pay Trade History

Get Pay Trade History  Weight(UID): 3000  Notes: - If `startTime` and `endTime` are not sent, the recent 90 days' data will be returned. - The max interval between `startTime` and `endTime` is 90 days. - Support for querying orders within the last 18 months. - `payerInfo` and `receiverInfo` return different fields in different `orderType` values:   - C2C sender: `payerInfo=binanceId`; `receiverInfo=name, binanceId/accountId/email/countryCode/phoneNumber/mobileCode` (based on user input).   - C2C receiver: `payerInfo=name`; `receiverInfo=binanceId`.   - CRYPTO_BOX sender: `payerInfo=binanceId`; `receiverInfo=name` (always `\"Crypto Box\"`).   - CRYPTO_BOX receiver: `payerInfo=name`; `receiverInfo=binanceId`.   - PAY sender: `payerInfo=binanceId`; `receiverInfo=name`.   - PAY receiver: `payerInfo=name`; `receiverInfo=binanceId, name`.   - PAY_REFUND sender: `payerInfo=binanceId, name`; `receiverInfo=name, accountId`.   - PAY_REFUND receiver: `payerInfo=name`; `receiverInfo=binanceId`.   - PAYOUT sender: `payerInfo=binanceId, name`; `receiverInfo=name, accountId`.   - PAYOUT receiver: `payerInfo=name`; `receiverInfo=binanceId`.   - CRYPTO_BOX_RF receiver: `payerInfo=name` (always `\"Crypto Box\"`); `receiverInfo=binanceId`.   - REMITTANCE sender: `payerInfo=binanceId`; `receiverInfo=name, institutionName, cardNumber, digitalWalletId`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Pay\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startTime = 1623319461670; // int | Start time in milliseconds.
$endTime = 1641782889000; // int | End time in milliseconds.
$limit = 100; // int | Number of records to return.
$recvWindow = 5000; // int | Request validity window in milliseconds.

try {
    $result = $apiInstance->getPayTradeHistory($startTime, $endTime, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getPayTradeHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **startTime** | **int**| Start time in milliseconds. | [optional] |
| **endTime** | **int**| End time in milliseconds. | [optional] |
| **limit** | **int**| Number of records to return. | [optional] |
| **recvWindow** | **int**| Request validity window in milliseconds. | [optional] |

### Return type

[**\Binance\Client\Pay\Model\GetPayTradeHistoryResponse**](../Model/GetPayTradeHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
