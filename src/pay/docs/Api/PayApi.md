# Binance\Client\Pay\PayApi

All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getPayTradeHistory()**](PayApi.md#getPayTradeHistory) | **GET** /sapi/v1/pay/transactions | Get Pay Trade History |


## `getPayTradeHistory()`

```php
getPayTradeHistory($startTime, $endTime, $limit, $recvWindow): \Binance\Client\Pay\Model\GetPayTradeHistoryResponse
```

Get Pay Trade History

Get Pay Trade History  * If startTime and endTime are not sent, the recent 90 days' data will be returned. * The max interval between startTime and endTime is 90 days. * Support for querying orders within the last 18 months. * For payerInfo and receiverInfo，there are different return values in different orderTypes. * Sender's perspective when orderType is C2C * payerInfo : binanceId * receiverInfo : name, binanceId/accountId/email/countryCode/phoneNumber/mobileCode (based on user input) * Receiver's perspective when orderType is C2C * payerInfo : name * receiverInfo : binanceId * Sender's perspective when orderType is CRYPTO_BOX * payerInfo : binanceId * receiverInfo : name(the value is always \"Crypto Box\") * Receiver's perspective when orderType is CRYPTO_BOX * payerInfo : name * receiverInfo : binanceId * Sender's perspective when orderType is PAY * payerInfo : binanceId * receiverInfo : name * Receiver's perspective when orderType is PAY * payerInfo : name * receiverInfo : binanceId, name * Sender's perspective when orderType is PAY_REFUND * payerInfo : binanceId, name * receiverInfo : name, accountId * Receiver's perspective when orderType is PAY_REFUND * payerInfo : name * receiverInfo :  binanceId * Sender's perspective when orderType is PAYOUT * payerInfo : binanceId, name * receiverInfo : name, accountId * Receiver's perspective when orderType is PAYOUT * payerInfo : name * receiverInfo :  binanceId * Receiver's perspective when orderType is CRYPTO_BOX_RF * payerInfo : name(the value is always \"Crypto Box\") * receiverInfo : binanceId * Sender's perspective when orderType is REMITTANCE * payerInfo : binanceId * receiverInfo : name, institutionName, cardNumber, digitalWalletId  Weight: 3000

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Pay\Api\PayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startTime = 56; // int
$endTime = 56; // int
$limit = 56; // int | default 100, max 100
$recvWindow = 56; // int

try {
    $result = $apiInstance->getPayTradeHistory($startTime, $endTime, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayApi->getPayTradeHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **limit** | **int**| default 100, max 100 | [optional] |
| **recvWindow** | **int**|  | [optional] |

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
