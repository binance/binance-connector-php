# Binance\Client\DerivativesTradingPortfolioMarginPro\AccountApi

All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**bnbTransfer()**](AccountApi.md#bnbTransfer) | **POST** /sapi/v1/portfolio/bnb-transfer | BNB transfer(USER_DATA) |
| [**changeAutoRepayFuturesStatus()**](AccountApi.md#changeAutoRepayFuturesStatus) | **POST** /sapi/v1/portfolio/repay-futures-switch | Change Auto-repay-futures Status(TRADE) |
| [**fundAutoCollection()**](AccountApi.md#fundAutoCollection) | **POST** /sapi/v1/portfolio/auto-collection | Fund Auto-collection(USER_DATA) |
| [**fundCollectionByAsset()**](AccountApi.md#fundCollectionByAsset) | **POST** /sapi/v1/portfolio/asset-collection | Fund Collection by Asset(USER_DATA) |
| [**getAutoRepayFuturesStatus()**](AccountApi.md#getAutoRepayFuturesStatus) | **GET** /sapi/v1/portfolio/repay-futures-switch | Get Auto-repay-futures Status(USER_DATA) |
| [**getPortfolioMarginProAccountBalance()**](AccountApi.md#getPortfolioMarginProAccountBalance) | **GET** /sapi/v1/portfolio/balance | Get Portfolio Margin Pro Account Balance(USER_DATA) |
| [**getPortfolioMarginProAccountInfo()**](AccountApi.md#getPortfolioMarginProAccountInfo) | **GET** /sapi/v1/portfolio/account | Get Portfolio Margin Pro Account Info(USER_DATA) |
| [**getPortfolioMarginProSpanAccountInfo()**](AccountApi.md#getPortfolioMarginProSpanAccountInfo) | **GET** /sapi/v2/portfolio/account | Get Portfolio Margin Pro SPAN Account Info(USER_DATA) |
| [**getTransferableEarnAssetBalanceForPortfolioMargin()**](AccountApi.md#getTransferableEarnAssetBalanceForPortfolioMargin) | **GET** /sapi/v1/portfolio/earn-asset-balance | Get Transferable Earn Asset Balance for Portfolio Margin (USER_DATA) |
| [**portfolioMarginProBankruptcyLoanRepay()**](AccountApi.md#portfolioMarginProBankruptcyLoanRepay) | **POST** /sapi/v1/portfolio/repay | Portfolio Margin Pro Bankruptcy Loan Repay |
| [**queryPortfolioMarginProBankruptcyLoanAmount()**](AccountApi.md#queryPortfolioMarginProBankruptcyLoanAmount) | **GET** /sapi/v1/portfolio/pmLoan | Query Portfolio Margin Pro Bankruptcy Loan Amount(USER_DATA) |
| [**queryPortfolioMarginProBankruptcyLoanRepayHistory()**](AccountApi.md#queryPortfolioMarginProBankruptcyLoanRepayHistory) | **GET** /sapi/v1/portfolio/pmloan-history | Query Portfolio Margin Pro Bankruptcy Loan Repay History(USER_DATA) |
| [**queryPortfolioMarginProNegativeBalanceInterestHistory()**](AccountApi.md#queryPortfolioMarginProNegativeBalanceInterestHistory) | **GET** /sapi/v1/portfolio/interest-history | Query Portfolio Margin Pro Negative Balance Interest History(USER_DATA) |
| [**repayFuturesNegativeBalance()**](AccountApi.md#repayFuturesNegativeBalance) | **POST** /sapi/v1/portfolio/repay-futures-negative-balance | Repay futures Negative Balance(USER_DATA) |
| [**transferLdusdtRwusdForPortfolioMargin()**](AccountApi.md#transferLdusdtRwusdForPortfolioMargin) | **POST** /sapi/v1/portfolio/earn-asset-transfer | Transfer LDUSDT/RWUSD for Portfolio Margin(TRADE) |


## `bnbTransfer()`

```php
bnbTransfer($bnbTransferRequest): \Binance\Client\DerivativesTradingPortfolioMarginPro\Model\BnbTransferResponse
```

BNB transfer(USER_DATA)

BNB transfer can be between Margin Account and USDM Account   * You can only use this function 2 times per 10 minutes in a rolling manner  Weight: 1500

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMarginPro\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bnbTransferRequest = new \Binance\Client\DerivativesTradingPortfolioMarginPro\Model\BnbTransferRequest(); // \Binance\Client\DerivativesTradingPortfolioMarginPro\Model\BnbTransferRequest

try {
    $result = $apiInstance->bnbTransfer($bnbTransferRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->bnbTransfer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bnbTransferRequest** | [**\Binance\Client\DerivativesTradingPortfolioMarginPro\Model\BnbTransferRequest**](../Model/BnbTransferRequest.md)|  | |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMarginPro\Model\BnbTransferResponse**](../Model/BnbTransferResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `changeAutoRepayFuturesStatus()`

```php
changeAutoRepayFuturesStatus($changeAutoRepayFuturesStatusRequest): \Binance\Client\DerivativesTradingPortfolioMarginPro\Model\ChangeAutoRepayFuturesStatusResponse
```

Change Auto-repay-futures Status(TRADE)

Change Auto-repay-futures Status  Weight: 1500

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMarginPro\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$changeAutoRepayFuturesStatusRequest = new \Binance\Client\DerivativesTradingPortfolioMarginPro\Model\ChangeAutoRepayFuturesStatusRequest(); // \Binance\Client\DerivativesTradingPortfolioMarginPro\Model\ChangeAutoRepayFuturesStatusRequest

try {
    $result = $apiInstance->changeAutoRepayFuturesStatus($changeAutoRepayFuturesStatusRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->changeAutoRepayFuturesStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **changeAutoRepayFuturesStatusRequest** | [**\Binance\Client\DerivativesTradingPortfolioMarginPro\Model\ChangeAutoRepayFuturesStatusRequest**](../Model/ChangeAutoRepayFuturesStatusRequest.md)|  | |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMarginPro\Model\ChangeAutoRepayFuturesStatusResponse**](../Model/ChangeAutoRepayFuturesStatusResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fundAutoCollection()`

```php
fundAutoCollection($fundAutoCollectionRequest): \Binance\Client\DerivativesTradingPortfolioMarginPro\Model\FundAutoCollectionResponse
```

Fund Auto-collection(USER_DATA)

Transfers all assets from Futures Account to Margin account  * The BNB would not be collected from UM-PM account to the Portfolio Margin account. * You can only use this function 500 times per hour in a rolling manner.  Weight: 1500

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMarginPro\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fundAutoCollectionRequest = new \Binance\Client\DerivativesTradingPortfolioMarginPro\Model\FundAutoCollectionRequest(); // \Binance\Client\DerivativesTradingPortfolioMarginPro\Model\FundAutoCollectionRequest

try {
    $result = $apiInstance->fundAutoCollection($fundAutoCollectionRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->fundAutoCollection: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fundAutoCollectionRequest** | [**\Binance\Client\DerivativesTradingPortfolioMarginPro\Model\FundAutoCollectionRequest**](../Model/FundAutoCollectionRequest.md)|  | |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMarginPro\Model\FundAutoCollectionResponse**](../Model/FundAutoCollectionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fundCollectionByAsset()`

```php
fundCollectionByAsset($fundCollectionByAssetRequest): \Binance\Client\DerivativesTradingPortfolioMarginPro\Model\FundCollectionByAssetResponse
```

Fund Collection by Asset(USER_DATA)

Transfers specific asset from Futures Account to Margin account  * The BNB transfer is not be supported  Weight: 60

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMarginPro\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fundCollectionByAssetRequest = new \Binance\Client\DerivativesTradingPortfolioMarginPro\Model\FundCollectionByAssetRequest(); // \Binance\Client\DerivativesTradingPortfolioMarginPro\Model\FundCollectionByAssetRequest

try {
    $result = $apiInstance->fundCollectionByAsset($fundCollectionByAssetRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->fundCollectionByAsset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fundCollectionByAssetRequest** | [**\Binance\Client\DerivativesTradingPortfolioMarginPro\Model\FundCollectionByAssetRequest**](../Model/FundCollectionByAssetRequest.md)|  | |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMarginPro\Model\FundCollectionByAssetResponse**](../Model/FundCollectionByAssetResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAutoRepayFuturesStatus()`

```php
getAutoRepayFuturesStatus($recvWindow): \Binance\Client\DerivativesTradingPortfolioMarginPro\Model\GetAutoRepayFuturesStatusResponse
```

Get Auto-repay-futures Status(USER_DATA)

Query Auto-repay-futures Status  Weight: 30

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMarginPro\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 56; // int

try {
    $result = $apiInstance->getAutoRepayFuturesStatus($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getAutoRepayFuturesStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMarginPro\Model\GetAutoRepayFuturesStatusResponse**](../Model/GetAutoRepayFuturesStatusResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPortfolioMarginProAccountBalance()`

```php
getPortfolioMarginProAccountBalance($asset, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMarginPro\Model\GetPortfolioMarginProAccountBalanceResponse
```

Get Portfolio Margin Pro Account Balance(USER_DATA)

Query Portfolio Margin Pro account balance  Weight: 20

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMarginPro\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asset = 'asset_example'; // string
$recvWindow = 56; // int

try {
    $result = $apiInstance->getPortfolioMarginProAccountBalance($asset, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getPortfolioMarginProAccountBalance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset** | **string**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMarginPro\Model\GetPortfolioMarginProAccountBalanceResponse**](../Model/GetPortfolioMarginProAccountBalanceResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPortfolioMarginProAccountInfo()`

```php
getPortfolioMarginProAccountInfo($recvWindow): \Binance\Client\DerivativesTradingPortfolioMarginPro\Model\GetPortfolioMarginProAccountInfoResponse
```

Get Portfolio Margin Pro Account Info(USER_DATA)

Get Portfolio Margin Pro Account Info  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMarginPro\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 56; // int

try {
    $result = $apiInstance->getPortfolioMarginProAccountInfo($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getPortfolioMarginProAccountInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMarginPro\Model\GetPortfolioMarginProAccountInfoResponse**](../Model/GetPortfolioMarginProAccountInfoResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPortfolioMarginProSpanAccountInfo()`

```php
getPortfolioMarginProSpanAccountInfo($recvWindow): \Binance\Client\DerivativesTradingPortfolioMarginPro\Model\GetPortfolioMarginProSpanAccountInfoResponse
```

Get Portfolio Margin Pro SPAN Account Info(USER_DATA)

Get Portfolio Margin Pro SPAN Account Info (For Portfolio Margin Pro SPAN users only)  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMarginPro\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 56; // int

try {
    $result = $apiInstance->getPortfolioMarginProSpanAccountInfo($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getPortfolioMarginProSpanAccountInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMarginPro\Model\GetPortfolioMarginProSpanAccountInfoResponse**](../Model/GetPortfolioMarginProSpanAccountInfoResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTransferableEarnAssetBalanceForPortfolioMargin()`

```php
getTransferableEarnAssetBalanceForPortfolioMargin($asset, $transferType, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMarginPro\Model\GetTransferableEarnAssetBalanceForPortfolioMarginResponse
```

Get Transferable Earn Asset Balance for Portfolio Margin (USER_DATA)

Get transferable earn asset balance for all types of Portfolio Margin account  Weight: 1500

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMarginPro\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asset = 'asset_example'; // string | `LDUSDT` only
$transferType = 'transferType_example'; // string | `EARN_TO_FUTURE` /`FUTURE_TO_EARN`
$recvWindow = 56; // int

try {
    $result = $apiInstance->getTransferableEarnAssetBalanceForPortfolioMargin($asset, $transferType, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getTransferableEarnAssetBalanceForPortfolioMargin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset** | **string**| &#x60;LDUSDT&#x60; only | |
| **transferType** | **string**| &#x60;EARN_TO_FUTURE&#x60; /&#x60;FUTURE_TO_EARN&#x60; | |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMarginPro\Model\GetTransferableEarnAssetBalanceForPortfolioMarginResponse**](../Model/GetTransferableEarnAssetBalanceForPortfolioMarginResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `portfolioMarginProBankruptcyLoanRepay()`

```php
portfolioMarginProBankruptcyLoanRepay($portfolioMarginProBankruptcyLoanRepayRequest): \Binance\Client\DerivativesTradingPortfolioMarginPro\Model\PortfolioMarginProBankruptcyLoanRepayResponse
```

Portfolio Margin Pro Bankruptcy Loan Repay

Repay Portfolio Margin Pro Bankruptcy Loan  Weight: 3000

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMarginPro\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$portfolioMarginProBankruptcyLoanRepayRequest = new \Binance\Client\DerivativesTradingPortfolioMarginPro\Model\PortfolioMarginProBankruptcyLoanRepayRequest(); // \Binance\Client\DerivativesTradingPortfolioMarginPro\Model\PortfolioMarginProBankruptcyLoanRepayRequest

try {
    $result = $apiInstance->portfolioMarginProBankruptcyLoanRepay($portfolioMarginProBankruptcyLoanRepayRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->portfolioMarginProBankruptcyLoanRepay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **portfolioMarginProBankruptcyLoanRepayRequest** | [**\Binance\Client\DerivativesTradingPortfolioMarginPro\Model\PortfolioMarginProBankruptcyLoanRepayRequest**](../Model/PortfolioMarginProBankruptcyLoanRepayRequest.md)|  | |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMarginPro\Model\PortfolioMarginProBankruptcyLoanRepayResponse**](../Model/PortfolioMarginProBankruptcyLoanRepayResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryPortfolioMarginProBankruptcyLoanAmount()`

```php
queryPortfolioMarginProBankruptcyLoanAmount($recvWindow): \Binance\Client\DerivativesTradingPortfolioMarginPro\Model\QueryPortfolioMarginProBankruptcyLoanAmountResponse
```

Query Portfolio Margin Pro Bankruptcy Loan Amount(USER_DATA)

Query Portfolio Margin Pro Bankruptcy Loan Amount  * If there’s no classic portfolio margin bankruptcy loan, the amount would be 0  Weight: 500

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMarginPro\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 56; // int

try {
    $result = $apiInstance->queryPortfolioMarginProBankruptcyLoanAmount($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->queryPortfolioMarginProBankruptcyLoanAmount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMarginPro\Model\QueryPortfolioMarginProBankruptcyLoanAmountResponse**](../Model/QueryPortfolioMarginProBankruptcyLoanAmountResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryPortfolioMarginProBankruptcyLoanRepayHistory()`

```php
queryPortfolioMarginProBankruptcyLoanRepayHistory($startTime, $endTime, $current, $size, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMarginPro\Model\QueryPortfolioMarginProBankruptcyLoanRepayHistoryResponse
```

Query Portfolio Margin Pro Bankruptcy Loan Repay History(USER_DATA)

Query repay history of pmloan for portfolio margin pro.  * `startTime` and `endTime` cannot be longer than 360 days * If `startTime` and `endTime` not sent, return records of the last 30 days by default. * If `startTime`is sent and `endTime` is not sent, return records of [startTime, startTime+30d]. * If `startTime` is not sent and `endTime` is sent, return records of [endTime-30d, endTime].  Weight: 500

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMarginPro\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startTime = 56; // int
$endTime = 56; // int
$current = 56; // int | Currently querying page. Start from 1. Default:1
$size = 56; // int | Default:10 Max:100
$recvWindow = 56; // int

try {
    $result = $apiInstance->queryPortfolioMarginProBankruptcyLoanRepayHistory($startTime, $endTime, $current, $size, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->queryPortfolioMarginProBankruptcyLoanRepayHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **current** | **int**| Currently querying page. Start from 1. Default:1 | [optional] |
| **size** | **int**| Default:10 Max:100 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMarginPro\Model\QueryPortfolioMarginProBankruptcyLoanRepayHistoryResponse**](../Model/QueryPortfolioMarginProBankruptcyLoanRepayHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryPortfolioMarginProNegativeBalanceInterestHistory()`

```php
queryPortfolioMarginProNegativeBalanceInterestHistory($asset, $startTime, $endTime, $size, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMarginPro\Model\QueryPortfolioMarginProNegativeBalanceInterestHistoryResponse
```

Query Portfolio Margin Pro Negative Balance Interest History(USER_DATA)

Query interest history of negative balance for portfolio margin.  Weight: 50

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMarginPro\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asset = 'asset_example'; // string
$startTime = 56; // int
$endTime = 56; // int
$size = 56; // int | Default:10 Max:100
$recvWindow = 56; // int

try {
    $result = $apiInstance->queryPortfolioMarginProNegativeBalanceInterestHistory($asset, $startTime, $endTime, $size, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->queryPortfolioMarginProNegativeBalanceInterestHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset** | **string**|  | [optional] |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **size** | **int**| Default:10 Max:100 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMarginPro\Model\QueryPortfolioMarginProNegativeBalanceInterestHistoryResponse**](../Model/QueryPortfolioMarginProNegativeBalanceInterestHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `repayFuturesNegativeBalance()`

```php
repayFuturesNegativeBalance($repayFuturesNegativeBalanceRequest): \Binance\Client\DerivativesTradingPortfolioMarginPro\Model\RepayFuturesNegativeBalanceResponse
```

Repay futures Negative Balance(USER_DATA)

Repay futures Negative Balance  Weight: 1500

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMarginPro\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repayFuturesNegativeBalanceRequest = new \Binance\Client\DerivativesTradingPortfolioMarginPro\Model\RepayFuturesNegativeBalanceRequest(); // \Binance\Client\DerivativesTradingPortfolioMarginPro\Model\RepayFuturesNegativeBalanceRequest

try {
    $result = $apiInstance->repayFuturesNegativeBalance($repayFuturesNegativeBalanceRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->repayFuturesNegativeBalance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **repayFuturesNegativeBalanceRequest** | [**\Binance\Client\DerivativesTradingPortfolioMarginPro\Model\RepayFuturesNegativeBalanceRequest**](../Model/RepayFuturesNegativeBalanceRequest.md)|  | |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMarginPro\Model\RepayFuturesNegativeBalanceResponse**](../Model/RepayFuturesNegativeBalanceResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transferLdusdtRwusdForPortfolioMargin()`

```php
transferLdusdtRwusdForPortfolioMargin($transferLdusdtRwusdForPortfolioMarginRequest): \Binance\Client\DerivativesTradingPortfolioMarginPro\Model\TransferLdusdtRwusdForPortfolioMarginResponse
```

Transfer LDUSDT/RWUSD for Portfolio Margin(TRADE)

Transfer LDUSDT/RWUSD as collateral for all types of Portfolio Margin account  Weight: 1500

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMarginPro\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$transferLdusdtRwusdForPortfolioMarginRequest = new \Binance\Client\DerivativesTradingPortfolioMarginPro\Model\TransferLdusdtRwusdForPortfolioMarginRequest(); // \Binance\Client\DerivativesTradingPortfolioMarginPro\Model\TransferLdusdtRwusdForPortfolioMarginRequest

try {
    $result = $apiInstance->transferLdusdtRwusdForPortfolioMargin($transferLdusdtRwusdForPortfolioMarginRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->transferLdusdtRwusdForPortfolioMargin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transferLdusdtRwusdForPortfolioMarginRequest** | [**\Binance\Client\DerivativesTradingPortfolioMarginPro\Model\TransferLdusdtRwusdForPortfolioMarginRequest**](../Model/TransferLdusdtRwusdForPortfolioMarginRequest.md)|  | |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMarginPro\Model\TransferLdusdtRwusdForPortfolioMarginResponse**](../Model/TransferLdusdtRwusdForPortfolioMarginResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
