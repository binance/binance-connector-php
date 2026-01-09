# Binance\Client\CryptoLoan\FlexibleRateApi

All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**checkCollateralRepayRate()**](FlexibleRateApi.md#checkCollateralRepayRate) | **GET** /sapi/v2/loan/flexible/repay/rate | Check Collateral Repay Rate (USER_DATA) |
| [**flexibleLoanAdjustLtv()**](FlexibleRateApi.md#flexibleLoanAdjustLtv) | **POST** /sapi/v2/loan/flexible/adjust/ltv | Flexible Loan Adjust LTV(TRADE) |
| [**flexibleLoanBorrow()**](FlexibleRateApi.md#flexibleLoanBorrow) | **POST** /sapi/v2/loan/flexible/borrow | Flexible Loan Borrow(TRADE) |
| [**flexibleLoanRepay()**](FlexibleRateApi.md#flexibleLoanRepay) | **POST** /sapi/v2/loan/flexible/repay | Flexible Loan Repay(TRADE) |
| [**getFlexibleLoanAssetsData()**](FlexibleRateApi.md#getFlexibleLoanAssetsData) | **GET** /sapi/v2/loan/flexible/loanable/data | Get Flexible Loan Assets Data(USER_DATA) |
| [**getFlexibleLoanBorrowHistory()**](FlexibleRateApi.md#getFlexibleLoanBorrowHistory) | **GET** /sapi/v2/loan/flexible/borrow/history | Get Flexible Loan Borrow History(USER_DATA) |
| [**getFlexibleLoanCollateralAssetsData()**](FlexibleRateApi.md#getFlexibleLoanCollateralAssetsData) | **GET** /sapi/v2/loan/flexible/collateral/data | Get Flexible Loan Collateral Assets Data(USER_DATA) |
| [**getFlexibleLoanInterestRateHistory()**](FlexibleRateApi.md#getFlexibleLoanInterestRateHistory) | **GET** /sapi/v2/loan/interestRateHistory | Get Flexible Loan Interest Rate History (USER_DATA) |
| [**getFlexibleLoanLiquidationHistory()**](FlexibleRateApi.md#getFlexibleLoanLiquidationHistory) | **GET** /sapi/v2/loan/flexible/liquidation/history | Get Flexible Loan Liquidation History (USER_DATA) |
| [**getFlexibleLoanLtvAdjustmentHistory()**](FlexibleRateApi.md#getFlexibleLoanLtvAdjustmentHistory) | **GET** /sapi/v2/loan/flexible/ltv/adjustment/history | Get Flexible Loan LTV Adjustment History(USER_DATA) |
| [**getFlexibleLoanOngoingOrders()**](FlexibleRateApi.md#getFlexibleLoanOngoingOrders) | **GET** /sapi/v2/loan/flexible/ongoing/orders | Get Flexible Loan Ongoing Orders(USER_DATA) |
| [**getFlexibleLoanRepaymentHistory()**](FlexibleRateApi.md#getFlexibleLoanRepaymentHistory) | **GET** /sapi/v2/loan/flexible/repay/history | Get Flexible Loan Repayment History(USER_DATA) |


## `checkCollateralRepayRate()`

```php
checkCollateralRepayRate($loanCoin, $collateralCoin, $recvWindow): \Binance\Client\CryptoLoan\Model\CheckCollateralRepayRateResponse
```

Check Collateral Repay Rate (USER_DATA)

Weight: 6000

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\CryptoLoan\Api\FlexibleRateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$loanCoin = 'loanCoin_example'; // string
$collateralCoin = 'collateralCoin_example'; // string
$recvWindow = 56; // int

try {
    $result = $apiInstance->checkCollateralRepayRate($loanCoin, $collateralCoin, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlexibleRateApi->checkCollateralRepayRate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **loanCoin** | **string**|  | |
| **collateralCoin** | **string**|  | |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\CryptoLoan\Model\CheckCollateralRepayRateResponse**](../Model/CheckCollateralRepayRateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `flexibleLoanAdjustLtv()`

```php
flexibleLoanAdjustLtv($flexibleLoanAdjustLtvRequest): \Binance\Client\CryptoLoan\Model\FlexibleLoanAdjustLtvResponse
```

Flexible Loan Adjust LTV(TRADE)

Flexible Loan Adjust LTV  * API Key needs Spot & Margin Trading permission for this endpoint  Weight: 6000

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\CryptoLoan\Api\FlexibleRateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flexibleLoanAdjustLtvRequest = new \Binance\Client\CryptoLoan\Model\FlexibleLoanAdjustLtvRequest(); // \Binance\Client\CryptoLoan\Model\FlexibleLoanAdjustLtvRequest

try {
    $result = $apiInstance->flexibleLoanAdjustLtv($flexibleLoanAdjustLtvRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlexibleRateApi->flexibleLoanAdjustLtv: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flexibleLoanAdjustLtvRequest** | [**\Binance\Client\CryptoLoan\Model\FlexibleLoanAdjustLtvRequest**](../Model/FlexibleLoanAdjustLtvRequest.md)|  | |

### Return type

[**\Binance\Client\CryptoLoan\Model\FlexibleLoanAdjustLtvResponse**](../Model/FlexibleLoanAdjustLtvResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `flexibleLoanBorrow()`

```php
flexibleLoanBorrow($flexibleLoanBorrowRequest): \Binance\Client\CryptoLoan\Model\FlexibleLoanBorrowResponse
```

Flexible Loan Borrow(TRADE)

Borrow Flexible Loan   * Only available for master account * You can customize LTV by entering loanAmount and collateralAmount.  Weight: 6000

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\CryptoLoan\Api\FlexibleRateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flexibleLoanBorrowRequest = new \Binance\Client\CryptoLoan\Model\FlexibleLoanBorrowRequest(); // \Binance\Client\CryptoLoan\Model\FlexibleLoanBorrowRequest

try {
    $result = $apiInstance->flexibleLoanBorrow($flexibleLoanBorrowRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlexibleRateApi->flexibleLoanBorrow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flexibleLoanBorrowRequest** | [**\Binance\Client\CryptoLoan\Model\FlexibleLoanBorrowRequest**](../Model/FlexibleLoanBorrowRequest.md)|  | |

### Return type

[**\Binance\Client\CryptoLoan\Model\FlexibleLoanBorrowResponse**](../Model/FlexibleLoanBorrowResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `flexibleLoanRepay()`

```php
flexibleLoanRepay($flexibleLoanRepayRequest): \Binance\Client\CryptoLoan\Model\FlexibleLoanRepayResponse
```

Flexible Loan Repay(TRADE)

Flexible Loan Repay   * repayAmount is mandatory even fullRepayment = FALSE  Weight: 6000

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\CryptoLoan\Api\FlexibleRateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flexibleLoanRepayRequest = new \Binance\Client\CryptoLoan\Model\FlexibleLoanRepayRequest(); // \Binance\Client\CryptoLoan\Model\FlexibleLoanRepayRequest

try {
    $result = $apiInstance->flexibleLoanRepay($flexibleLoanRepayRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlexibleRateApi->flexibleLoanRepay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flexibleLoanRepayRequest** | [**\Binance\Client\CryptoLoan\Model\FlexibleLoanRepayRequest**](../Model/FlexibleLoanRepayRequest.md)|  | |

### Return type

[**\Binance\Client\CryptoLoan\Model\FlexibleLoanRepayResponse**](../Model/FlexibleLoanRepayResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFlexibleLoanAssetsData()`

```php
getFlexibleLoanAssetsData($loanCoin, $recvWindow): \Binance\Client\CryptoLoan\Model\GetFlexibleLoanAssetsDataResponse
```

Get Flexible Loan Assets Data(USER_DATA)

Get interest rate and borrow limit of flexible loanable assets. The borrow limit is shown in USD value.  Weight: 400

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\CryptoLoan\Api\FlexibleRateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$loanCoin = 'loanCoin_example'; // string
$recvWindow = 56; // int

try {
    $result = $apiInstance->getFlexibleLoanAssetsData($loanCoin, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlexibleRateApi->getFlexibleLoanAssetsData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **loanCoin** | **string**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\CryptoLoan\Model\GetFlexibleLoanAssetsDataResponse**](../Model/GetFlexibleLoanAssetsDataResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFlexibleLoanBorrowHistory()`

```php
getFlexibleLoanBorrowHistory($loanCoin, $collateralCoin, $startTime, $endTime, $current, $limit, $recvWindow): \Binance\Client\CryptoLoan\Model\GetFlexibleLoanBorrowHistoryResponse
```

Get Flexible Loan Borrow History(USER_DATA)

Get Flexible Loan Borrow History  * If startTime and endTime are not sent, the recent 90-day data will be returned. * The max interval between startTime and endTime is 180 days.  Weight: 400

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\CryptoLoan\Api\FlexibleRateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$loanCoin = 'loanCoin_example'; // string
$collateralCoin = 'collateralCoin_example'; // string
$startTime = 56; // int
$endTime = 56; // int
$current = 56; // int | Current querying page. Start from 1; default: 1; max: 1000
$limit = 56; // int | Default: 10; max: 100
$recvWindow = 56; // int

try {
    $result = $apiInstance->getFlexibleLoanBorrowHistory($loanCoin, $collateralCoin, $startTime, $endTime, $current, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlexibleRateApi->getFlexibleLoanBorrowHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **loanCoin** | **string**|  | [optional] |
| **collateralCoin** | **string**|  | [optional] |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **current** | **int**| Current querying page. Start from 1; default: 1; max: 1000 | [optional] |
| **limit** | **int**| Default: 10; max: 100 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\CryptoLoan\Model\GetFlexibleLoanBorrowHistoryResponse**](../Model/GetFlexibleLoanBorrowHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFlexibleLoanCollateralAssetsData()`

```php
getFlexibleLoanCollateralAssetsData($collateralCoin, $recvWindow): \Binance\Client\CryptoLoan\Model\GetFlexibleLoanCollateralAssetsDataResponse
```

Get Flexible Loan Collateral Assets Data(USER_DATA)

Get LTV information and collateral limit of flexible loan's collateral assets. The collateral limit is shown in USD value.  Weight: 400

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\CryptoLoan\Api\FlexibleRateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$collateralCoin = 'collateralCoin_example'; // string
$recvWindow = 56; // int

try {
    $result = $apiInstance->getFlexibleLoanCollateralAssetsData($collateralCoin, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlexibleRateApi->getFlexibleLoanCollateralAssetsData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **collateralCoin** | **string**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\CryptoLoan\Model\GetFlexibleLoanCollateralAssetsDataResponse**](../Model/GetFlexibleLoanCollateralAssetsDataResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFlexibleLoanInterestRateHistory()`

```php
getFlexibleLoanInterestRateHistory($coin, $recvWindow, $startTime, $endTime, $current, $limit): \Binance\Client\CryptoLoan\Model\GetFlexibleLoanInterestRateHistoryResponse
```

Get Flexible Loan Interest Rate History (USER_DATA)

Check Flexible Loan interest rate history  * If startTime and endTime are not sent, the recent 90-day data will be returned * The max interval between startTime and endTime is 90 days. * Time based on UTC+0.  Weight: 400

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\CryptoLoan\Api\FlexibleRateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$coin = 'coin_example'; // string
$recvWindow = 56; // int
$startTime = 56; // int
$endTime = 56; // int
$current = 56; // int | Current querying page. Start from 1; default: 1; max: 1000
$limit = 56; // int | Default: 10; max: 100

try {
    $result = $apiInstance->getFlexibleLoanInterestRateHistory($coin, $recvWindow, $startTime, $endTime, $current, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlexibleRateApi->getFlexibleLoanInterestRateHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **coin** | **string**|  | |
| **recvWindow** | **int**|  | |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **current** | **int**| Current querying page. Start from 1; default: 1; max: 1000 | [optional] |
| **limit** | **int**| Default: 10; max: 100 | [optional] |

### Return type

[**\Binance\Client\CryptoLoan\Model\GetFlexibleLoanInterestRateHistoryResponse**](../Model/GetFlexibleLoanInterestRateHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFlexibleLoanLiquidationHistory()`

```php
getFlexibleLoanLiquidationHistory($loanCoin, $collateralCoin, $startTime, $endTime, $current, $limit, $recvWindow): \Binance\Client\CryptoLoan\Model\GetFlexibleLoanLiquidationHistoryResponse
```

Get Flexible Loan Liquidation History (USER_DATA)

Weight: 400

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\CryptoLoan\Api\FlexibleRateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$loanCoin = 'loanCoin_example'; // string
$collateralCoin = 'collateralCoin_example'; // string
$startTime = 56; // int
$endTime = 56; // int
$current = 56; // int | Current querying page. Start from 1; default: 1; max: 1000
$limit = 56; // int | Default: 10; max: 100
$recvWindow = 56; // int

try {
    $result = $apiInstance->getFlexibleLoanLiquidationHistory($loanCoin, $collateralCoin, $startTime, $endTime, $current, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlexibleRateApi->getFlexibleLoanLiquidationHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **loanCoin** | **string**|  | [optional] |
| **collateralCoin** | **string**|  | [optional] |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **current** | **int**| Current querying page. Start from 1; default: 1; max: 1000 | [optional] |
| **limit** | **int**| Default: 10; max: 100 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\CryptoLoan\Model\GetFlexibleLoanLiquidationHistoryResponse**](../Model/GetFlexibleLoanLiquidationHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFlexibleLoanLtvAdjustmentHistory()`

```php
getFlexibleLoanLtvAdjustmentHistory($loanCoin, $collateralCoin, $startTime, $endTime, $current, $limit, $recvWindow): \Binance\Client\CryptoLoan\Model\GetFlexibleLoanLtvAdjustmentHistoryResponse
```

Get Flexible Loan LTV Adjustment History(USER_DATA)

Get Flexible Loan LTV Adjustment History  * If startTime and endTime are not sent, the recent 90-day data will be returned. * The max interval between startTime and endTime is 180 days.  Weight: 400

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\CryptoLoan\Api\FlexibleRateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$loanCoin = 'loanCoin_example'; // string
$collateralCoin = 'collateralCoin_example'; // string
$startTime = 56; // int
$endTime = 56; // int
$current = 56; // int | Current querying page. Start from 1; default: 1; max: 1000
$limit = 56; // int | Default: 10; max: 100
$recvWindow = 56; // int

try {
    $result = $apiInstance->getFlexibleLoanLtvAdjustmentHistory($loanCoin, $collateralCoin, $startTime, $endTime, $current, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlexibleRateApi->getFlexibleLoanLtvAdjustmentHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **loanCoin** | **string**|  | [optional] |
| **collateralCoin** | **string**|  | [optional] |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **current** | **int**| Current querying page. Start from 1; default: 1; max: 1000 | [optional] |
| **limit** | **int**| Default: 10; max: 100 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\CryptoLoan\Model\GetFlexibleLoanLtvAdjustmentHistoryResponse**](../Model/GetFlexibleLoanLtvAdjustmentHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFlexibleLoanOngoingOrders()`

```php
getFlexibleLoanOngoingOrders($loanCoin, $collateralCoin, $current, $limit, $recvWindow): \Binance\Client\CryptoLoan\Model\GetFlexibleLoanOngoingOrdersResponse
```

Get Flexible Loan Ongoing Orders(USER_DATA)

Get Flexible Loan Ongoing Orders  Weight: 300

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\CryptoLoan\Api\FlexibleRateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$loanCoin = 'loanCoin_example'; // string
$collateralCoin = 'collateralCoin_example'; // string
$current = 56; // int | Current querying page. Start from 1; default: 1; max: 1000
$limit = 56; // int | Default: 10; max: 100
$recvWindow = 56; // int

try {
    $result = $apiInstance->getFlexibleLoanOngoingOrders($loanCoin, $collateralCoin, $current, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlexibleRateApi->getFlexibleLoanOngoingOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **loanCoin** | **string**|  | [optional] |
| **collateralCoin** | **string**|  | [optional] |
| **current** | **int**| Current querying page. Start from 1; default: 1; max: 1000 | [optional] |
| **limit** | **int**| Default: 10; max: 100 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\CryptoLoan\Model\GetFlexibleLoanOngoingOrdersResponse**](../Model/GetFlexibleLoanOngoingOrdersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFlexibleLoanRepaymentHistory()`

```php
getFlexibleLoanRepaymentHistory($loanCoin, $collateralCoin, $startTime, $endTime, $current, $limit, $recvWindow): \Binance\Client\CryptoLoan\Model\GetFlexibleLoanRepaymentHistoryResponse
```

Get Flexible Loan Repayment History(USER_DATA)

Get Flexible Loan Repayment History  * If startTime and endTime are not sent, the recent 90-day data will be returned. * The max interval between startTime and endTime is 180 days.  Weight: 400

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\CryptoLoan\Api\FlexibleRateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$loanCoin = 'loanCoin_example'; // string
$collateralCoin = 'collateralCoin_example'; // string
$startTime = 56; // int
$endTime = 56; // int
$current = 56; // int | Current querying page. Start from 1; default: 1; max: 1000
$limit = 56; // int | Default: 10; max: 100
$recvWindow = 56; // int

try {
    $result = $apiInstance->getFlexibleLoanRepaymentHistory($loanCoin, $collateralCoin, $startTime, $endTime, $current, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FlexibleRateApi->getFlexibleLoanRepaymentHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **loanCoin** | **string**|  | [optional] |
| **collateralCoin** | **string**|  | [optional] |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **current** | **int**| Current querying page. Start from 1; default: 1; max: 1000 | [optional] |
| **limit** | **int**| Default: 10; max: 100 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\CryptoLoan\Model\GetFlexibleLoanRepaymentHistoryResponse**](../Model/GetFlexibleLoanRepaymentHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
