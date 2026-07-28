# Binance\Client\VipLoan\TradeApi



All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**vipLoanBorrow()**](TradeApi.md#vipLoanBorrow) | **POST** /sapi/v1/loan/vip/borrow | VIP Loan Borrow (TRADE) |
| [**vipLoanFixedRateBorrow()**](TradeApi.md#vipLoanFixedRateBorrow) | **POST** /sapi/v1/loan/vip/fixed/borrow | VIP Loan Fixed Rate Borrow (TRADE) |
| [**vipLoanRenew()**](TradeApi.md#vipLoanRenew) | **POST** /sapi/v1/loan/vip/renew | VIP Loan Renew (TRADE) |
| [**vipLoanRepay()**](TradeApi.md#vipLoanRepay) | **POST** /sapi/v1/loan/vip/repay | VIP Loan Repay (TRADE) |


## `vipLoanBorrow()`

```php
vipLoanBorrow($vipLoanBorrowRequest): \Binance\Client\VipLoan\Model\VipLoanBorrowResponse
```

VIP Loan Borrow (TRADE)

VIP loan is available for VIP users only.  Weight(UID): 6000  Security Type: TRADE  Notes: - `loanAccountId` refers to the loan receiving account. - Only master account applications are supported. - `loanAccountId` and `collateralAccountId` must be under the same master account. - `loanTerm` is mandatory if the user chooses a fixed rate (`isFlexibleRate = FALSE`).

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

## `vipLoanFixedRateBorrow()`

```php
vipLoanFixedRateBorrow($vipLoanFixedRateBorrowRequest): \Binance\Client\VipLoan\Model\VipLoanFixedRateBorrowResponse
```

VIP Loan Fixed Rate Borrow (TRADE)

Submit a fixed rate borrow request by matching market supply orders.  Weight(UID): 6000  Security Type: TRADE  Notes: - **Rate limit:** 2 requests per second per account. - When multiple `supplyRequest` entries are provided, all `requestId` values must correspond to the same `borrowCoin` and `loanTerm` (validated by collateral facade).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\VipLoan\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vipLoanFixedRateBorrowRequest = new \Binance\Client\VipLoan\Model\VipLoanFixedRateBorrowRequest(); // \Binance\Client\VipLoan\Model\VipLoanFixedRateBorrowRequest

try {
    $result = $apiInstance->vipLoanFixedRateBorrow($vipLoanFixedRateBorrowRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->vipLoanFixedRateBorrow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **vipLoanFixedRateBorrowRequest** | [**\Binance\Client\VipLoan\Model\VipLoanFixedRateBorrowRequest**](../Model/VipLoanFixedRateBorrowRequest.md)|  | |

### Return type

[**\Binance\Client\VipLoan\Model\VipLoanFixedRateBorrowResponse**](../Model/VipLoanFixedRateBorrowResponse.md)

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

VIP Loan Renew (TRADE)

VIP loan is available for VIP users only.  Weight(UID): 6000  Security Type: TRADE

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

VIP Loan Repay (TRADE)

VIP loan is available for VIP users only.  Weight(UID): 6000  Security Type: TRADE

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
