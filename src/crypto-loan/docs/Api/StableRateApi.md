# Binance\Client\CryptoLoan\StableRateApi



All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCryptoLoansIncomeHistory()**](StableRateApi.md#getCryptoLoansIncomeHistory) | **GET** /sapi/v1/loan/income | Get Crypto Loans Income History (USER_DATA) |
| [**getLoanBorrowHistory()**](StableRateApi.md#getLoanBorrowHistory) | **GET** /sapi/v1/loan/borrow/history | Get Loan Borrow History (USER_DATA) |
| [**getLoanLtvAdjustmentHistory()**](StableRateApi.md#getLoanLtvAdjustmentHistory) | **GET** /sapi/v1/loan/ltv/adjustment/history | Get Loan LTV Adjustment History (USER_DATA) |
| [**getLoanRepaymentHistory()**](StableRateApi.md#getLoanRepaymentHistory) | **GET** /sapi/v1/loan/repay/history | Get Loan Repayment History (USER_DATA) |


## `getCryptoLoansIncomeHistory()`

```php
getCryptoLoansIncomeHistory($asset, $type, $startTime, $endTime, $limit, $recvWindow): \Binance\Client\CryptoLoan\Model\GetCryptoLoansIncomeHistoryResponse
```

Get Crypto Loans Income History (USER_DATA)

Get Crypto Loans Income History  Weight(UID): 6000  Security Type: USER_DATA  Notes: - If `startTime` and `endTime` are both omitted, the most recent 7 days of data are returned. - The maximum interval between `startTime` and `endTime` is 30 days.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\CryptoLoan\Api\StableRateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asset = BUSD; // string
$type = new \Binance\Client\CryptoLoan\Model\\Binance\Client\CryptoLoan\Model\OrderType(); // \Binance\Client\CryptoLoan\Model\OrderType | All types will be returned by default.
$startTime = 1623319461670; // int
$endTime = 1641782889000; // int
$limit = 10; // int | Number of records to return
$recvWindow = 5000; // int | Request validity window in milliseconds

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
| **type** | [**\Binance\Client\CryptoLoan\Model\OrderType**](../Model/.md)| All types will be returned by default. | [optional] |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **limit** | **int**| Number of records to return | [optional] |
| **recvWindow** | **int**| Request validity window in milliseconds | [optional] |

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

Get Loan Borrow History (USER_DATA)

Get Loan Borrow History  Weight(IP): 400  Security Type: USER_DATA  Notes: - If `startTime` and `endTime` are not sent, the recent 90-day data is returned. - The max interval between `startTime` and `endTime` is 180 days.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\CryptoLoan\Api\StableRateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$orderId = 1; // int | orderId in `POST /sapi/v1/loan/borrow`
$loanCoin = BUSD; // string
$collateralCoin = BNB; // string
$startTime = 1623319461670; // int
$endTime = 1641782889000; // int
$current = 1; // int | Current querying page
$limit = 10; // int | Number of records to return
$recvWindow = 5000; // int | Request validity window in milliseconds

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
| **current** | **int**| Current querying page | [optional] |
| **limit** | **int**| Number of records to return | [optional] |
| **recvWindow** | **int**| Request validity window in milliseconds | [optional] |

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

Get Loan LTV Adjustment History (USER_DATA)

Get Loan LTV Adjustment History  Weight(IP): 400  Security Type: USER_DATA  Notes: - If `startTime` and `endTime` are not sent, the recent 90-day data is returned. - The max interval between `startTime` and `endTime` is 180 days.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\CryptoLoan\Api\StableRateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$orderId = 1; // int | orderId in `POST /sapi/v1/loan/borrow`
$loanCoin = BUSD; // string
$collateralCoin = BNB; // string
$startTime = 1623319461670; // int
$endTime = 1641782889000; // int
$current = 1; // int | Current querying page
$limit = 10; // int | Number of records to return
$recvWindow = 5000; // int | Request validity window in milliseconds

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
| **current** | **int**| Current querying page | [optional] |
| **limit** | **int**| Number of records to return | [optional] |
| **recvWindow** | **int**| Request validity window in milliseconds | [optional] |

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

Get Loan Repayment History (USER_DATA)

Get Loan Repayment History  Weight(IP): 400  Security Type: USER_DATA  Notes: - If `startTime` and `endTime` are not sent, the recent 90-day data is returned. - The max interval between `startTime` and `endTime` is 180 days.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\CryptoLoan\Api\StableRateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$orderId = 1; // int | orderId in `POST /sapi/v1/loan/borrow`
$loanCoin = BUSD; // string
$collateralCoin = BNB; // string
$startTime = 1623319461670; // int
$endTime = 1641782889000; // int
$current = 1; // int | Current querying page
$limit = 10; // int | Number of records to return
$recvWindow = 5000; // int | Request validity window in milliseconds

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
| **current** | **int**| Current querying page | [optional] |
| **limit** | **int**| Number of records to return | [optional] |
| **recvWindow** | **int**| Request validity window in milliseconds | [optional] |

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
