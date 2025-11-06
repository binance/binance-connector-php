# Binance\Client\Fiat\FiatApi

All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getFiatDepositWithdrawHistory()**](FiatApi.md#getFiatDepositWithdrawHistory) | **GET** /sapi/v1/fiat/orders | Get Fiat Deposit/Withdraw History (USER_DATA) |
| [**getFiatPaymentsHistory()**](FiatApi.md#getFiatPaymentsHistory) | **GET** /sapi/v1/fiat/payments | Get Fiat Payments History (USER_DATA) |


## `getFiatDepositWithdrawHistory()`

```php
getFiatDepositWithdrawHistory($transactionType, $beginTime, $endTime, $page, $rows, $recvWindow): \Binance\Client\Fiat\Model\GetFiatDepositWithdrawHistoryResponse
```

Get Fiat Deposit/Withdraw History (USER_DATA)

Get Fiat Deposit/Withdraw History  * If beginTime and endTime are not sent, the recent 30-day data will be returned.  Weight: 45000

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Fiat\Api\FiatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$transactionType = 'transactionType_example'; // string | 0-buy,1-sell
$beginTime = 56; // int
$endTime = 56; // int
$page = 56; // int | default 1
$rows = 56; // int | default 100, max 500
$recvWindow = 56; // int

try {
    $result = $apiInstance->getFiatDepositWithdrawHistory($transactionType, $beginTime, $endTime, $page, $rows, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiatApi->getFiatDepositWithdrawHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transactionType** | **string**| 0-buy,1-sell | |
| **beginTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **page** | **int**| default 1 | [optional] |
| **rows** | **int**| default 100, max 500 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\Fiat\Model\GetFiatDepositWithdrawHistoryResponse**](../Model/GetFiatDepositWithdrawHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFiatPaymentsHistory()`

```php
getFiatPaymentsHistory($transactionType, $beginTime, $endTime, $page, $rows, $recvWindow): \Binance\Client\Fiat\Model\GetFiatPaymentsHistoryResponse
```

Get Fiat Payments History (USER_DATA)

Get Fiat Deposit/Withdraw History  * If beginTime and endTime are not sent, the recent 30-day data will be returned. * paymentMethod: Only when requesting payments history for buy (transactionType=0), response contains paymentMethod representing the way of purchase. Now we have: * Cash Balance * Credit Card * Online Banking * Bank Transfer  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Fiat\Api\FiatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$transactionType = 'transactionType_example'; // string | 0-buy,1-sell
$beginTime = 56; // int
$endTime = 56; // int
$page = 56; // int | default 1
$rows = 56; // int | default 100, max 500
$recvWindow = 56; // int

try {
    $result = $apiInstance->getFiatPaymentsHistory($transactionType, $beginTime, $endTime, $page, $rows, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiatApi->getFiatPaymentsHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transactionType** | **string**| 0-buy,1-sell | |
| **beginTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **page** | **int**| default 1 | [optional] |
| **rows** | **int**| default 100, max 500 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\Fiat\Model\GetFiatPaymentsHistoryResponse**](../Model/GetFiatPaymentsHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
