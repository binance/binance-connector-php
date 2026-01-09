# Binance\Client\Fiat\FiatApi

All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deposit()**](FiatApi.md#deposit) | **POST** /sapi/v1/fiat/deposit | Deposit(TRADE) |
| [**fiatWithdraw()**](FiatApi.md#fiatWithdraw) | **POST** /sapi/v2/fiat/withdraw | Fiat Withdraw(WITHDRAW) |
| [**getFiatDepositWithdrawHistory()**](FiatApi.md#getFiatDepositWithdrawHistory) | **GET** /sapi/v1/fiat/orders | Get Fiat Deposit/Withdraw History (USER_DATA) |
| [**getFiatPaymentsHistory()**](FiatApi.md#getFiatPaymentsHistory) | **GET** /sapi/v1/fiat/payments | Get Fiat Payments History (USER_DATA) |
| [**getOrderDetail()**](FiatApi.md#getOrderDetail) | **GET** /sapi/v1/fiat/get-order-detail | Get Order Detail(USER_DATA) |


## `deposit()`

```php
deposit($depositRequest): \Binance\Client\Fiat\Model\DepositResponse
```

Deposit(TRADE)

Submit deposit request, in this version, we only support BRL deposit via pix.    For BRL deposit via pix, you need to place an order before making a transfer from your bank.  Before calling this api, please make sure you have already completed your KYC or KYB, and already activated your fiat service on our website.  Weight: 45000

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Fiat\Api\FiatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$depositRequest = new \Binance\Client\Fiat\Model\DepositRequest(); // \Binance\Client\Fiat\Model\DepositRequest

try {
    $result = $apiInstance->deposit($depositRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiatApi->deposit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **depositRequest** | [**\Binance\Client\Fiat\Model\DepositRequest**](../Model/DepositRequest.md)|  | |

### Return type

[**\Binance\Client\Fiat\Model\DepositResponse**](../Model/DepositResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fiatWithdraw()`

```php
fiatWithdraw($fiatWithdrawRequest): \Binance\Client\Fiat\Model\FiatWithdrawResponse
```

Fiat Withdraw(WITHDRAW)

Submit withdraw request, in this version, we only support BRL withdrawal via bank_transfer.  You need to call this api first, and call query order detail api in a loop to get the status of the order until this order is successful.  Before calling this api, please make sure you have already completed your KYC or KYB, and already activated your fiat service on our website.  you need to bind your bank account on web/app before using the corresponding account number  Weight: 45000

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Fiat\Api\FiatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fiatWithdrawRequest = new \Binance\Client\Fiat\Model\FiatWithdrawRequest(); // \Binance\Client\Fiat\Model\FiatWithdrawRequest

try {
    $result = $apiInstance->fiatWithdraw($fiatWithdrawRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiatApi->fiatWithdraw: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fiatWithdrawRequest** | [**\Binance\Client\Fiat\Model\FiatWithdrawRequest**](../Model/FiatWithdrawRequest.md)|  | |

### Return type

[**\Binance\Client\Fiat\Model\FiatWithdrawResponse**](../Model/FiatWithdrawResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

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

## `getOrderDetail()`

```php
getOrderDetail($orderNo, $recvWindow): \Binance\Client\Fiat\Model\GetOrderDetailResponse
```

Get Order Detail(USER_DATA)

Get Order Detail  Before calling this api, please make sure you have already completed your KYC or KYB, and already activated your fiat service on our website.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Fiat\Api\FiatApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$orderNo = 'orderNo_example'; // string | order id retrieved from the api call of withdrawal
$recvWindow = 56; // int

try {
    $result = $apiInstance->getOrderDetail($orderNo, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FiatApi->getOrderDetail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderNo** | **string**| order id retrieved from the api call of withdrawal | |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\Fiat\Model\GetOrderDetailResponse**](../Model/GetOrderDetailResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
