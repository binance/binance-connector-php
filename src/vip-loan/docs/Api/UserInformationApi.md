# Binance\Client\VipLoan\UserInformationApi

All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**checkVIPLoanCollateralAccount()**](UserInformationApi.md#checkVIPLoanCollateralAccount) | **GET** /sapi/v1/loan/vip/collateral/account | Check VIP Loan Collateral Account (USER_DATA) |
| [**getVIPLoanAccruedInterest()**](UserInformationApi.md#getVIPLoanAccruedInterest) | **GET** /sapi/v1/loan/vip/accruedInterest | Get VIP Loan Accrued Interest (USER_DATA) |
| [**getVIPLoanOngoingOrders()**](UserInformationApi.md#getVIPLoanOngoingOrders) | **GET** /sapi/v1/loan/vip/ongoing/orders | Get VIP Loan Ongoing Orders(USER_DATA) |
| [**queryApplicationStatus()**](UserInformationApi.md#queryApplicationStatus) | **GET** /sapi/v1/loan/vip/request/data | Query Application Status(USER_DATA) |


## `checkVIPLoanCollateralAccount()`

```php
checkVIPLoanCollateralAccount($orderId, $collateralAccountId, $recvWindow): \Binance\Client\VipLoan\Model\CheckVIPLoanCollateralAccountResponse
```

Check VIP Loan Collateral Account (USER_DATA)

VIP loan is available for VIP users only  * If the login account is loan account, all collateral accounts under the loan account can be queried. * If the login account is collateral account, only the current collateral account can be queried.  Weight: 6000

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\VipLoan\Api\UserInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$orderId = 56; // int
$collateralAccountId = 56; // int
$recvWindow = 56; // int

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

Check VIP Loan interest record  * If startTime and endTime are not sent, the recent 90-day data will be returned. * The max interval between startTime and endTime is 90 days.  Weight: 400

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\VipLoan\Api\UserInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$orderId = 56; // int
$loanCoin = 'loanCoin_example'; // string
$startTime = 56; // int
$endTime = 56; // int
$current = 56; // int | Current querying page. Start from 1; default: 1; max: 1000
$limit = 56; // int | Default: 10; max: 100
$recvWindow = 56; // int

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
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **current** | **int**| Current querying page. Start from 1; default: 1; max: 1000 | [optional] |
| **limit** | **int**| Default: 10; max: 100 | [optional] |
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

Get VIP Loan Ongoing Orders(USER_DATA)

VIP loan is available for VIP users only.  Weight: 400

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\VipLoan\Api\UserInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$orderId = 56; // int
$collateralAccountId = 56; // int
$loanCoin = 'loanCoin_example'; // string
$collateralCoin = 'collateralCoin_example'; // string
$current = 56; // int | Current querying page. Start from 1; default: 1; max: 1000
$limit = 56; // int | Default: 10; max: 100
$recvWindow = 56; // int

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
| **current** | **int**| Current querying page. Start from 1; default: 1; max: 1000 | [optional] |
| **limit** | **int**| Default: 10; max: 100 | [optional] |
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

## `queryApplicationStatus()`

```php
queryApplicationStatus($current, $limit, $recvWindow): \Binance\Client\VipLoan\Model\QueryApplicationStatusResponse
```

Query Application Status(USER_DATA)

Query Application Status  Weight: 400

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\VipLoan\Api\UserInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$current = 56; // int | Current querying page. Start from 1; default: 1; max: 1000
$limit = 56; // int | Default: 10; max: 100
$recvWindow = 56; // int

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
| **current** | **int**| Current querying page. Start from 1; default: 1; max: 1000 | [optional] |
| **limit** | **int**| Default: 10; max: 100 | [optional] |
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
