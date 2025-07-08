# Binance\Client\CryptoLoan\StableRateApi

All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**checkCollateralRepayRateStableRate()**](StableRateApi.md#checkCollateralRepayRateStableRate) | **GET** /sapi/v1/loan/repay/collateral/rate | Check Collateral Repay Rate(USER_DATA) |
| [**getCryptoLoansIncomeHistory()**](StableRateApi.md#getCryptoLoansIncomeHistory) | **GET** /sapi/v1/loan/income | Get Crypto Loans Income History(USER_DATA) |
| [**getLoanBorrowHistory()**](StableRateApi.md#getLoanBorrowHistory) | **GET** /sapi/v1/loan/borrow/history | Get Loan Borrow History(USER_DATA) |
| [**getLoanLtvAdjustmentHistory()**](StableRateApi.md#getLoanLtvAdjustmentHistory) | **GET** /sapi/v1/loan/ltv/adjustment/history | Get Loan LTV Adjustment History(USER_DATA) |
| [**getLoanRepaymentHistory()**](StableRateApi.md#getLoanRepaymentHistory) | **GET** /sapi/v1/loan/repay/history | Get Loan Repayment History(USER_DATA) |


## `checkCollateralRepayRateStableRate()`

```php
checkCollateralRepayRateStableRate($loanCoin, $collateralCoin, $repayAmount, $recvWindow): \Binance\Client\CryptoLoan\Model\CheckCollateralRepayRateStableRateResponse
```

Check Collateral Repay Rate(USER_DATA)

Get the the rate of collateral coin / loan coin when using collateral repay, the rate will be valid within 8 second.  Weight: 6000

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\CryptoLoan\Api\StableRateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$loanCoin = 'loanCoin_example'; // string
$collateralCoin = 'collateralCoin_example'; // string
$repayAmount = 3.4; // float | repay amount of loanCoin
$recvWindow = 56; // int

try {
    $result = $apiInstance->checkCollateralRepayRateStableRate($loanCoin, $collateralCoin, $repayAmount, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StableRateApi->checkCollateralRepayRateStableRate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **loanCoin** | **string**|  | |
| **collateralCoin** | **string**|  | |
| **repayAmount** | **float**| repay amount of loanCoin | |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\CryptoLoan\Model\CheckCollateralRepayRateStableRateResponse**](../Model/CheckCollateralRepayRateStableRateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCryptoLoansIncomeHistory()`

```php
getCryptoLoansIncomeHistory($asset, $type, $startTime, $endTime, $limit, $recvWindow): \Binance\Client\CryptoLoan\Model\GetCryptoLoansIncomeHistoryResponse
```

Get Crypto Loans Income History(USER_DATA)

Get Crypto Loans Income History  * If startTime and endTime are not sent, the recent 7-day data will be returned. * The max interval between startTime and endTime is 30 days.  Weight: 6000

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\CryptoLoan\Api\StableRateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asset = 'asset_example'; // string
$type = 'type_example'; // string | All types will be returned by default. Enum：`borrowIn` ,`collateralSpent`, `repayAmount`, `collateralReturn`(Collateral return after repayment), `addCollateral`, `removeCollateral`, `collateralReturnAfterLiquidation`
$startTime = 56; // int
$endTime = 56; // int
$limit = 56; // int | Default: 10; max: 100
$recvWindow = 56; // int

try {
    $result = $apiInstance->getCryptoLoansIncomeHistory($asset, $type, $startTime, $endTime, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StableRateApi->getCryptoLoansIncomeHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset** | **string**|  | [optional] |
| **type** | **string**| All types will be returned by default. Enum：&#x60;borrowIn&#x60; ,&#x60;collateralSpent&#x60;, &#x60;repayAmount&#x60;, &#x60;collateralReturn&#x60;(Collateral return after repayment), &#x60;addCollateral&#x60;, &#x60;removeCollateral&#x60;, &#x60;collateralReturnAfterLiquidation&#x60; | [optional] |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **limit** | **int**| Default: 10; max: 100 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\CryptoLoan\Model\GetCryptoLoansIncomeHistoryResponse**](../Model/GetCryptoLoansIncomeHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLoanBorrowHistory()`

```php
getLoanBorrowHistory($orderId, $loanCoin, $collateralCoin, $startTime, $endTime, $current, $limit, $recvWindow): \Binance\Client\CryptoLoan\Model\GetLoanBorrowHistoryResponse
```

Get Loan Borrow History(USER_DATA)

Get Loan Borrow History  * If startTime and endTime are not sent, the recent 90-day data will be returned. * The max interval between startTime and endTime is 180 days.  Weight: 400

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\CryptoLoan\Api\StableRateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$orderId = 56; // int | orderId in `POST /sapi/v1/loan/borrow`
$loanCoin = 'loanCoin_example'; // string
$collateralCoin = 'collateralCoin_example'; // string
$startTime = 56; // int
$endTime = 56; // int
$current = 56; // int | Current querying page. Start from 1; default: 1; max: 1000
$limit = 56; // int | Default: 10; max: 100
$recvWindow = 56; // int

try {
    $result = $apiInstance->getLoanBorrowHistory($orderId, $loanCoin, $collateralCoin, $startTime, $endTime, $current, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StableRateApi->getLoanBorrowHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderId** | **int**| orderId in &#x60;POST /sapi/v1/loan/borrow&#x60; | [optional] |
| **loanCoin** | **string**|  | [optional] |
| **collateralCoin** | **string**|  | [optional] |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **current** | **int**| Current querying page. Start from 1; default: 1; max: 1000 | [optional] |
| **limit** | **int**| Default: 10; max: 100 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\CryptoLoan\Model\GetLoanBorrowHistoryResponse**](../Model/GetLoanBorrowHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLoanLtvAdjustmentHistory()`

```php
getLoanLtvAdjustmentHistory($orderId, $loanCoin, $collateralCoin, $startTime, $endTime, $current, $limit, $recvWindow): \Binance\Client\CryptoLoan\Model\GetLoanLtvAdjustmentHistoryResponse
```

Get Loan LTV Adjustment History(USER_DATA)

Get Loan LTV Adjustment History  * If startTime and endTime are not sent, the recent 90-day data will be returned. * The max interval between startTime and endTime is 180 days.  Weight: 400

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\CryptoLoan\Api\StableRateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$orderId = 56; // int | orderId in `POST /sapi/v1/loan/borrow`
$loanCoin = 'loanCoin_example'; // string
$collateralCoin = 'collateralCoin_example'; // string
$startTime = 56; // int
$endTime = 56; // int
$current = 56; // int | Current querying page. Start from 1; default: 1; max: 1000
$limit = 56; // int | Default: 10; max: 100
$recvWindow = 56; // int

try {
    $result = $apiInstance->getLoanLtvAdjustmentHistory($orderId, $loanCoin, $collateralCoin, $startTime, $endTime, $current, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StableRateApi->getLoanLtvAdjustmentHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderId** | **int**| orderId in &#x60;POST /sapi/v1/loan/borrow&#x60; | [optional] |
| **loanCoin** | **string**|  | [optional] |
| **collateralCoin** | **string**|  | [optional] |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **current** | **int**| Current querying page. Start from 1; default: 1; max: 1000 | [optional] |
| **limit** | **int**| Default: 10; max: 100 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\CryptoLoan\Model\GetLoanLtvAdjustmentHistoryResponse**](../Model/GetLoanLtvAdjustmentHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLoanRepaymentHistory()`

```php
getLoanRepaymentHistory($orderId, $loanCoin, $collateralCoin, $startTime, $endTime, $current, $limit, $recvWindow): \Binance\Client\CryptoLoan\Model\GetLoanRepaymentHistoryResponse
```

Get Loan Repayment History(USER_DATA)

Get Loan Repayment History  * If startTime and endTime are not sent, the recent 90-day data will be returned. * The max interval between startTime and endTime is 180 days.  Weight: 400

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\CryptoLoan\Api\StableRateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$orderId = 56; // int | orderId in `POST /sapi/v1/loan/borrow`
$loanCoin = 'loanCoin_example'; // string
$collateralCoin = 'collateralCoin_example'; // string
$startTime = 56; // int
$endTime = 56; // int
$current = 56; // int | Current querying page. Start from 1; default: 1; max: 1000
$limit = 56; // int | Default: 10; max: 100
$recvWindow = 56; // int

try {
    $result = $apiInstance->getLoanRepaymentHistory($orderId, $loanCoin, $collateralCoin, $startTime, $endTime, $current, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StableRateApi->getLoanRepaymentHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderId** | **int**| orderId in &#x60;POST /sapi/v1/loan/borrow&#x60; | [optional] |
| **loanCoin** | **string**|  | [optional] |
| **collateralCoin** | **string**|  | [optional] |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **current** | **int**| Current querying page. Start from 1; default: 1; max: 1000 | [optional] |
| **limit** | **int**| Default: 10; max: 100 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\CryptoLoan\Model\GetLoanRepaymentHistoryResponse**](../Model/GetLoanRepaymentHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
