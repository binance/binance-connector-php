# Binance\Client\VipLoan\UserInformationApi



All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**checkVIPLoanCollateralAccount()**](UserInformationApi.md#checkVIPLoanCollateralAccount) | **GET** /sapi/v1/loan/vip/collateral/account | Check VIP Loan Collateral Account (USER_DATA) |
| [**getVIPLoanAccruedInterest()**](UserInformationApi.md#getVIPLoanAccruedInterest) | **GET** /sapi/v1/loan/vip/accruedInterest | Get VIP Loan Accrued Interest (USER_DATA) |
| [**getVIPLoanOngoingOrders()**](UserInformationApi.md#getVIPLoanOngoingOrders) | **GET** /sapi/v1/loan/vip/ongoing/orders | Get VIP Loan Ongoing Orders (USER_DATA) |
| [**getVIPLoanRepaymentHistory()**](UserInformationApi.md#getVIPLoanRepaymentHistory) | **GET** /sapi/v1/loan/vip/repay/history | Get VIP Loan Repayment History (USER_DATA) |
| [**queryApplicationStatus()**](UserInformationApi.md#queryApplicationStatus) | **GET** /sapi/v1/loan/vip/request/data | Query Application Status (USER_DATA) |


## `checkVIPLoanCollateralAccount()`

```php
checkVIPLoanCollateralAccount($orderId, $collateralAccountId, $recvWindow): \Binance\Client\VipLoan\Model\CheckVIPLoanCollateralAccountResponse
```

Check VIP Loan Collateral Account (USER_DATA)

VIP loan is available for VIP users only  Weight(IP): 6000  Security Type: USER_DATA  Notes: - If the logged-in account is a borrowing account, all collateral accounts bound to that borrowing account can be queried. - If the logged-in account is a collateral account, only collateral assets under that account can be queried.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\VipLoan\Api\UserInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$orderId = 1; // int
$collateralAccountId = 1; // int
$recvWindow = 5000; // int

try {
    $result = $apiInstance->checkVIPLoanCollateralAccount($orderId, $collateralAccountId, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserInformationApi->checkVIPLoanCollateralAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderId** | **int**|  | [optional] |
| **collateralAccountId** | **int**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\VipLoan\Model\CheckVIPLoanCollateralAccountResponse**](../Model/CheckVIPLoanCollateralAccountResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVIPLoanAccruedInterest()`

```php
getVIPLoanAccruedInterest($orderId, $loanCoin, $startTime, $endTime, $current, $limit, $recvWindow): \Binance\Client\VipLoan\Model\GetVIPLoanAccruedInterestResponse
```

Get VIP Loan Accrued Interest (USER_DATA)

Check VIP Loan interest record  Weight(IP): 400  Security Type: USER_DATA  Notes: - If `startTime` and `endTime` are not sent, recent 90-day data is returned. - The maximum interval between `startTime` and `endTime` is 90 days.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\VipLoan\Api\UserInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$orderId = 1; // int
$loanCoin = BTC; // string
$startTime = 1623319461670; // int | If both startTime and endTime are omitted, the most recent 90 days are returned.
$endTime = 1641782889000; // int | Maximum interval between startTime and endTime is 90 days.
$current = 1; // int | Current page number, starting from 1.
$limit = 10; // int | Number of records per page.
$recvWindow = 5000; // int

try {
    $result = $apiInstance->getVIPLoanAccruedInterest($orderId, $loanCoin, $startTime, $endTime, $current, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserInformationApi->getVIPLoanAccruedInterest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderId** | **int**|  | [optional] |
| **loanCoin** | **string**|  | [optional] |
| **startTime** | **int**| If both startTime and endTime are omitted, the most recent 90 days are returned. | [optional] |
| **endTime** | **int**| Maximum interval between startTime and endTime is 90 days. | [optional] |
| **current** | **int**| Current page number, starting from 1. | [optional] |
| **limit** | **int**| Number of records per page. | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\VipLoan\Model\GetVIPLoanAccruedInterestResponse**](../Model/GetVIPLoanAccruedInterestResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVIPLoanOngoingOrders()`

```php
getVIPLoanOngoingOrders($orderId, $collateralAccountId, $loanCoin, $collateralCoin, $current, $limit, $recvWindow): \Binance\Client\VipLoan\Model\GetVIPLoanOngoingOrdersResponse
```

Get VIP Loan Ongoing Orders (USER_DATA)

VIP loan is available for VIP users only.  Weight(IP): 400  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\VipLoan\Api\UserInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$orderId = 1; // int
$collateralAccountId = 1; // int
$loanCoin = BUSD; // string
$collateralCoin = BNB,BTC,ETH; // string
$current = 1; // int
$limit = 10; // int
$recvWindow = 5000; // int

try {
    $result = $apiInstance->getVIPLoanOngoingOrders($orderId, $collateralAccountId, $loanCoin, $collateralCoin, $current, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserInformationApi->getVIPLoanOngoingOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderId** | **int**|  | [optional] |
| **collateralAccountId** | **int**|  | [optional] |
| **loanCoin** | **string**|  | [optional] |
| **collateralCoin** | **string**|  | [optional] |
| **current** | **int**|  | [optional] |
| **limit** | **int**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\VipLoan\Model\GetVIPLoanOngoingOrdersResponse**](../Model/GetVIPLoanOngoingOrdersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVIPLoanRepaymentHistory()`

```php
getVIPLoanRepaymentHistory($orderId, $loanCoin, $startTime, $endTime, $current, $limit, $recvWindow): \Binance\Client\VipLoan\Model\GetVIPLoanRepaymentHistoryResponse
```

Get VIP Loan Repayment History (USER_DATA)

VIP Loans are available only to VIP users.  Weight(IP): 400  Security Type: USER_DATA  Notes: - If `startTime` and `endTime` are not sent, recent 90-day data is returned. - The maximum interval between `startTime` and `endTime` is 180 days.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\VipLoan\Api\UserInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$orderId = 1; // int
$loanCoin = BUSD; // string
$startTime = 1623319461670; // int | If both startTime and endTime are omitted, the most recent 90 days are returned.
$endTime = 1641782889000; // int | Maximum interval between startTime and endTime is 180 days.
$current = 1; // int | Current page number, starting from 1.
$limit = 10; // int | Number of records per page.
$recvWindow = 5000; // int

try {
    $result = $apiInstance->getVIPLoanRepaymentHistory($orderId, $loanCoin, $startTime, $endTime, $current, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserInformationApi->getVIPLoanRepaymentHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderId** | **int**|  | [optional] |
| **loanCoin** | **string**|  | [optional] |
| **startTime** | **int**| If both startTime and endTime are omitted, the most recent 90 days are returned. | [optional] |
| **endTime** | **int**| Maximum interval between startTime and endTime is 180 days. | [optional] |
| **current** | **int**| Current page number, starting from 1. | [optional] |
| **limit** | **int**| Number of records per page. | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\VipLoan\Model\GetVIPLoanRepaymentHistoryResponse**](../Model/GetVIPLoanRepaymentHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryApplicationStatus()`

```php
queryApplicationStatus($current, $limit, $recvWindow): \Binance\Client\VipLoan\Model\QueryApplicationStatusResponse
```

Query Application Status (USER_DATA)

Query Application Status  Weight(UID): 400  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\VipLoan\Api\UserInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$current = 1; // int | Current page number, starting from 1.
$limit = 10; // int
$recvWindow = 5000; // int

try {
    $result = $apiInstance->queryApplicationStatus($current, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserInformationApi->queryApplicationStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **current** | **int**| Current page number, starting from 1. | [optional] |
| **limit** | **int**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\VipLoan\Model\QueryApplicationStatusResponse**](../Model/QueryApplicationStatusResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
