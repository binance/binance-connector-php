# Binance\Client\VipLoan\TradeApi

All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**vipLoanBorrow()**](TradeApi.md#vipLoanBorrow) | **POST** /sapi/v1/loan/vip/borrow | VIP Loan Borrow(TRADE) |
| [**vipLoanRenew()**](TradeApi.md#vipLoanRenew) | **POST** /sapi/v1/loan/vip/renew | VIP Loan Renew(TRADE) |
| [**vipLoanRepay()**](TradeApi.md#vipLoanRepay) | **POST** /sapi/v1/loan/vip/repay | VIP Loan Repay(TRADE) |


## `vipLoanBorrow()`

```php
vipLoanBorrow($vipLoanBorrowRequest): \Binance\Client\VipLoan\Model\VipLoanBorrowResponse
```

VIP Loan Borrow(TRADE)

VIP loan is available for VIP users only.  * loanAccountId refer to loan receiving account * Only master account applications are supported * loanAccountId and collateralAccountId under same master account * loanTerm is mandatory if user choose stable rate  Weight: 0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\VipLoan\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vipLoanBorrowRequest = new \Binance\Client\VipLoan\Model\VipLoanBorrowRequest(); // \Binance\Client\VipLoan\Model\VipLoanBorrowRequest

try {
    $result = $apiInstance->vipLoanBorrow($vipLoanBorrowRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->vipLoanBorrow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **vipLoanBorrowRequest** | [**\Binance\Client\VipLoan\Model\VipLoanBorrowRequest**](../Model/VipLoanBorrowRequest.md)|  | |

### Return type

[**\Binance\Client\VipLoan\Model\VipLoanBorrowResponse**](../Model/VipLoanBorrowResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vipLoanRenew()`

```php
vipLoanRenew($vipLoanRenewRequest): \Binance\Client\VipLoan\Model\VipLoanRenewResponse
```

VIP Loan Renew(TRADE)

VIP loan is available for VIP users only.  Weight: 6000

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\VipLoan\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vipLoanRenewRequest = new \Binance\Client\VipLoan\Model\VipLoanRenewRequest(); // \Binance\Client\VipLoan\Model\VipLoanRenewRequest

try {
    $result = $apiInstance->vipLoanRenew($vipLoanRenewRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->vipLoanRenew: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **vipLoanRenewRequest** | [**\Binance\Client\VipLoan\Model\VipLoanRenewRequest**](../Model/VipLoanRenewRequest.md)|  | |

### Return type

[**\Binance\Client\VipLoan\Model\VipLoanRenewResponse**](../Model/VipLoanRenewResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vipLoanRepay()`

```php
vipLoanRepay($vipLoanRepayRequest): \Binance\Client\VipLoan\Model\VipLoanRepayResponse
```

VIP Loan Repay(TRADE)

VIP loan is available for VIP users only.  Weight: 6000

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\VipLoan\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vipLoanRepayRequest = new \Binance\Client\VipLoan\Model\VipLoanRepayRequest(); // \Binance\Client\VipLoan\Model\VipLoanRepayRequest

try {
    $result = $apiInstance->vipLoanRepay($vipLoanRepayRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->vipLoanRepay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **vipLoanRepayRequest** | [**\Binance\Client\VipLoan\Model\VipLoanRepayRequest**](../Model/VipLoanRepayRequest.md)|  | |

### Return type

[**\Binance\Client\VipLoan\Model\VipLoanRepayResponse**](../Model/VipLoanRepayResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
