# Binance\Client\CryptoLoan\FlexibleRateApi



All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**checkCollateralRepayRate()**](FlexibleRateApi.md#checkCollateralRepayRate) | **GET** /sapi/v2/loan/flexible/repay/rate | Check Collateral Flexible Repay Rate (USER_DATA) |
| [**flexibleLoanAdjustLtv()**](FlexibleRateApi.md#flexibleLoanAdjustLtv) | **POST** /sapi/v2/loan/flexible/adjust/ltv | Flexible Loan Adjust LTV (TRADE) |
| [**flexibleLoanBorrow()**](FlexibleRateApi.md#flexibleLoanBorrow) | **POST** /sapi/v2/loan/flexible/borrow | Flexible Loan Borrow (TRADE) |
| [**flexibleLoanRepay()**](FlexibleRateApi.md#flexibleLoanRepay) | **POST** /sapi/v2/loan/flexible/repay | Flexible Loan Repay (TRADE) |
| [**getFlexibleLoanAssetsData()**](FlexibleRateApi.md#getFlexibleLoanAssetsData) | **GET** /sapi/v2/loan/flexible/loanable/data | Get Flexible Loan Assets Data (USER_DATA) |
| [**getFlexibleLoanBorrowHistory()**](FlexibleRateApi.md#getFlexibleLoanBorrowHistory) | **GET** /sapi/v2/loan/flexible/borrow/history | Get Flexible Loan Borrow History (USER_DATA) |
| [**getFlexibleLoanCollateralAssetsData()**](FlexibleRateApi.md#getFlexibleLoanCollateralAssetsData) | **GET** /sapi/v2/loan/flexible/collateral/data | Get Flexible Loan Collateral Assets Data (USER_DATA) |
| [**getFlexibleLoanInterestRateHistory()**](FlexibleRateApi.md#getFlexibleLoanInterestRateHistory) | **GET** /sapi/v2/loan/interestRateHistory | Get Flexible Loan Interest Rate History (USER_DATA) |
| [**getFlexibleLoanLiquidationHistory()**](FlexibleRateApi.md#getFlexibleLoanLiquidationHistory) | **GET** /sapi/v2/loan/flexible/liquidation/history | Get Flexible Loan Liquidation History (USER_DATA) |
| [**getFlexibleLoanLtvAdjustmentHistory()**](FlexibleRateApi.md#getFlexibleLoanLtvAdjustmentHistory) | **GET** /sapi/v2/loan/flexible/ltv/adjustment/history | Get Flexible Loan LTV Adjustment History (USER_DATA) |
| [**getFlexibleLoanOngoingOrders()**](FlexibleRateApi.md#getFlexibleLoanOngoingOrders) | **GET** /sapi/v2/loan/flexible/ongoing/orders | Get Flexible Loan Ongoing Orders (USER_DATA) |
| [**getFlexibleLoanRepaymentHistory()**](FlexibleRateApi.md#getFlexibleLoanRepaymentHistory) | **GET** /sapi/v2/loan/flexible/repay/history | Get Flexible Loan Repayment History (USER_DATA) |


## `checkCollateralRepayRate()`

```php
checkCollateralRepayRate($loanCoin, $collateralCoin, $recvWindow): \Binance\Client\CryptoLoan\Model\CheckCollateralRepayRateResponse
```

Check Collateral Flexible Repay Rate (USER_DATA)

Get the latest rate of collateral coin/loan coin when using collateral repay.  Weight(IP): 6000  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\CryptoLoan\Api\FlexibleRateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$loanCoin = BUSD; // string
$collateralCoin = BNB; // string
$recvWindow = 5000; // int | Request validity window in milliseconds

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
| **recvWindow** | **int**| Request validity window in milliseconds | [optional] |

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

Flexible Loan Adjust LTV (TRADE)

Flexible Loan Adjust LTV  Weight(UID): 6000  Security Type: TRADE  Notes: - API key needs Spot & Margin Trading permission for this endpoint.

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

Flexible Loan Borrow (TRADE)

Borrow Flexible Loan  Weight(IP): 6000  Security Type: TRADE  Notes: - This endpoint is available for both master and sub-accounts. - You can customize LTV by entering `loanAmount` and `collateralAmount`.

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

Flexible Loan Repay (TRADE)

Flexible Loan Repay  Weight(IP): 6000  Security Type: TRADE  Notes: - `repayAmount` is mandatory even when `fullRepayment = FALSE`.

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

Get Flexible Loan Assets Data (USER_DATA)

Get interest rate and borrow limit of flexible loanable assets. The borrow limit is shown in USD value.  Weight(IP): 400  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\CryptoLoan\Api\FlexibleRateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$loanCoin = BUSD; // string
$recvWindow = 5000; // int | Request validity window in milliseconds

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
| **recvWindow** | **int**| Request validity window in milliseconds | [optional] |

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

Get Flexible Loan Borrow History (USER_DATA)

Get Flexible Loan Borrow History. It can be used to check history before 2024-02-27 08:00.  Weight(IP): 400  Security Type: USER_DATA  Notes: - If `startTime` and `endTime` are not sent, the recent 90-day data is returned. - The max interval between `startTime` and `endTime` is 180 days.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\CryptoLoan\Api\FlexibleRateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$loanCoin = BUSD; // string
$collateralCoin = BNB; // string
$startTime = 1623319461670; // int
$endTime = 1641782889000; // int
$current = 1; // int | Current querying page
$limit = 10; // int | Number of records to return
$recvWindow = 5000; // int | Request validity window in milliseconds

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
| **current** | **int**| Current querying page | [optional] |
| **limit** | **int**| Number of records to return | [optional] |
| **recvWindow** | **int**| Request validity window in milliseconds | [optional] |

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

Get Flexible Loan Collateral Assets Data (USER_DATA)

Get LTV information and collateral limit of flexible loan's collateral assets. The collateral limit is shown in USD value.  Weight(IP): 400  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\CryptoLoan\Api\FlexibleRateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$collateralCoin = BNB; // string
$recvWindow = 5000; // int | Request validity window in milliseconds

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
| **recvWindow** | **int**| Request validity window in milliseconds | [optional] |

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

Check Flexible Loan interest rate history  Weight(IP): 400  Security Type: USER_DATA  Notes: - If `startTime` and `endTime` are not sent, the recent 90-day data is returned. - The max interval between `startTime` and `endTime` is 90 days. - Time is based on UTC+0.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\CryptoLoan\Api\FlexibleRateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$coin = USDT; // string
$recvWindow = 5000; // int | Request validity window in milliseconds
$startTime = 1623319461670; // int
$endTime = 1641782889000; // int
$current = 1; // int | Current querying page
$limit = 10; // int | Number of records to return

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
| **recvWindow** | **int**| Request validity window in milliseconds | |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **current** | **int**| Current querying page | [optional] |
| **limit** | **int**| Number of records to return | [optional] |

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

Get Flexible Loan Liquidation History  Weight(IP): 400  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\CryptoLoan\Api\FlexibleRateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$loanCoin = BUSD; // string
$collateralCoin = BNB; // string
$startTime = 1623319461670; // int
$endTime = 1641782889000; // int
$current = 1; // int | Current querying page
$limit = 10; // int | Number of records to return
$recvWindow = 5000; // int | Request validity window in milliseconds

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
| **current** | **int**| Current querying page | [optional] |
| **limit** | **int**| Number of records to return | [optional] |
| **recvWindow** | **int**| Request validity window in milliseconds | [optional] |

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

Get Flexible Loan LTV Adjustment History (USER_DATA)

Get Flexible Loan LTV Adjustment History. It can be used to check history before 2024-02-27 08:00.  Weight(UID): 400  Security Type: USER_DATA  Notes: - If `startTime` and `endTime` are not sent, the recent 90-day data is returned. - The max interval between `startTime` and `endTime` is 180 days.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\CryptoLoan\Api\FlexibleRateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$loanCoin = BUSD; // string
$collateralCoin = BNB; // string
$startTime = 1623319461670; // int
$endTime = 1641782889000; // int
$current = 1; // int | Current querying page
$limit = 10; // int | Number of records to return
$recvWindow = 5000; // int | Request validity window in milliseconds

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
| **current** | **int**| Current querying page | [optional] |
| **limit** | **int**| Number of records to return | [optional] |
| **recvWindow** | **int**| Request validity window in milliseconds | [optional] |

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

Get Flexible Loan Ongoing Orders (USER_DATA)

Get Flexible Loan Ongoing Orders  Weight(IP): 300  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\CryptoLoan\Api\FlexibleRateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$loanCoin = BUSD; // string
$collateralCoin = BNB; // string
$current = 1; // int | Current querying page
$limit = 10; // int | Number of records to return
$recvWindow = 5000; // int | Request validity window in milliseconds

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
| **current** | **int**| Current querying page | [optional] |
| **limit** | **int**| Number of records to return | [optional] |
| **recvWindow** | **int**| Request validity window in milliseconds | [optional] |

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

Get Flexible Loan Repayment History (USER_DATA)

Get Flexible Loan Repayment History. It can be used to check history before 2024-02-27 08:00.  Weight(IP): 400  Security Type: USER_DATA  Notes: - If `startTime` and `endTime` are not sent, the recent 90-day data is returned. - The max interval between `startTime` and `endTime` is 180 days.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\CryptoLoan\Api\FlexibleRateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$loanCoin = BUSD; // string
$collateralCoin = BNB; // string
$startTime = 1623319461670; // int
$endTime = 1641782889000; // int
$current = 1; // int | Current querying page
$limit = 10; // int | Number of records to return
$recvWindow = 5000; // int | Request validity window in milliseconds

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
| **current** | **int**| Current querying page | [optional] |
| **limit** | **int**| Number of records to return | [optional] |
| **recvWindow** | **int**| Request validity window in milliseconds | [optional] |

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
