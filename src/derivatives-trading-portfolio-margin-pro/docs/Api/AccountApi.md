# Binance\Client\DerivativesTradingPortfolioMarginPro\AccountApi



All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**bnbTransfer()**](AccountApi.md#bnbTransfer) | **POST** /sapi/v1/portfolio/bnb-transfer | BNB transfer (USER_DATA) |
| [**changeAutoRepayFuturesStatus()**](AccountApi.md#changeAutoRepayFuturesStatus) | **POST** /sapi/v1/portfolio/repay-futures-switch | Change Auto-repay-futures Status (TRADE) |
| [**deleteMarginCallLevel()**](AccountApi.md#deleteMarginCallLevel) | **DELETE** /sapi/v1/portfolio/margin-call-level | Delete Margin Call Level (USER_DATA) |
| [**fundAutoCollection()**](AccountApi.md#fundAutoCollection) | **POST** /sapi/v1/portfolio/auto-collection | Fund Auto-collection (USER_DATA) |
| [**fundCollectionByAsset()**](AccountApi.md#fundCollectionByAsset) | **POST** /sapi/v1/portfolio/asset-collection | Fund Collection by Asset (USER_DATA) |
| [**getAutoRepayFuturesStatus()**](AccountApi.md#getAutoRepayFuturesStatus) | **GET** /sapi/v1/portfolio/repay-futures-switch | Get Auto-repay-futures Status (USER_DATA) |
| [**getDeltaModeStatus()**](AccountApi.md#getDeltaModeStatus) | **GET** /sapi/v1/portfolio/delta-mode | Get Delta Mode Status (USER_DATA) |
| [**getMarginCallLevel()**](AccountApi.md#getMarginCallLevel) | **GET** /sapi/v1/portfolio/margin-call-level | Get Margin Call Level (USER_DATA) |
| [**getPortfolioMarginProAccountBalance()**](AccountApi.md#getPortfolioMarginProAccountBalance) | **GET** /sapi/v1/portfolio/balance | Get Portfolio Margin Pro Account Balance (USER_DATA) |
| [**getPortfolioMarginProAccountInfo()**](AccountApi.md#getPortfolioMarginProAccountInfo) | **GET** /sapi/v1/portfolio/account | Get Portfolio Margin Pro Account Info (USER_DATA) |
| [**getPortfolioMarginProSpanAccountInfo()**](AccountApi.md#getPortfolioMarginProSpanAccountInfo) | **GET** /sapi/v2/portfolio/account | Get Portfolio Margin Pro SPAN Account Info (USER_DATA) |
| [**getTransferableEarnAssetBalanceForPortfolioMargin()**](AccountApi.md#getTransferableEarnAssetBalanceForPortfolioMargin) | **GET** /sapi/v1/portfolio/earn-asset-balance | Get Transferable Earn Asset Balance for Portfolio Margin (USER_DATA) |
| [**portfolioMarginProBankruptcyLoanRepay()**](AccountApi.md#portfolioMarginProBankruptcyLoanRepay) | **POST** /sapi/v1/portfolio/repay | Portfolio Margin Pro Bankruptcy Loan Repay (TRADE) |
| [**queryPortfolioMarginProBankruptcyLoanAmount()**](AccountApi.md#queryPortfolioMarginProBankruptcyLoanAmount) | **GET** /sapi/v1/portfolio/pmLoan | Query Portfolio Margin Pro Bankruptcy Loan Amount (USER_DATA) |
| [**queryPortfolioMarginProBankruptcyLoanRepayHistory()**](AccountApi.md#queryPortfolioMarginProBankruptcyLoanRepayHistory) | **GET** /sapi/v1/portfolio/pmloan-history | Query Portfolio Margin Pro Bankruptcy Loan Repay History (USER_DATA) |
| [**queryPortfolioMarginProNegativeBalanceInterestHistory()**](AccountApi.md#queryPortfolioMarginProNegativeBalanceInterestHistory) | **GET** /sapi/v1/portfolio/interest-history | Query Portfolio Margin Pro Negative Balance Interest History (USER_DATA) |
| [**repayFuturesNegativeBalance()**](AccountApi.md#repayFuturesNegativeBalance) | **POST** /sapi/v1/portfolio/repay-futures-negative-balance | Repay futures Negative Balance (USER_DATA) |
| [**setMarginCallLevel()**](AccountApi.md#setMarginCallLevel) | **POST** /sapi/v1/portfolio/margin-call-level | Set Margin Call Level (USER_DATA) |
| [**switchDeltaMode()**](AccountApi.md#switchDeltaMode) | **POST** /sapi/v1/portfolio/delta-mode | Switch Delta Mode (TRADE) |
| [**transferLdusdtRwusdForPortfolioMargin()**](AccountApi.md#transferLdusdtRwusdForPortfolioMargin) | **POST** /sapi/v1/portfolio/earn-asset-transfer | Transfer LDUSDT/RWUSD for Portfolio Margin (TRADE) |


## `bnbTransfer()`

```php
bnbTransfer($bnbTransferRequest): \Binance\Client\DerivativesTradingPortfolioMarginPro\Model\BnbTransferResponse
```

BNB transfer (USER_DATA)

BNB transfer can be between Margin Account and USDM Account  Weight(IP): 1500  Security Type: USER_DATA  Notes: - You can only use this function 2 times per 10 minutes in a rolling manner

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

Change Auto-repay-futures Status (TRADE)

Change Auto-repay-futures Status  Weight(IP): 1500  Security Type: TRADE

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

## `deleteMarginCallLevel()`

```php
deleteMarginCallLevel($recvWindow): \Binance\Client\DerivativesTradingPortfolioMarginPro\Model\DeleteMarginCallLevelResponse
```

Delete Margin Call Level (USER_DATA)

Delete the margin call level for a Portfolio Margin account.  Weight(IP): 1500  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMarginPro\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 5000; // int | Request validity window in milliseconds

try {
    $result = $apiInstance->deleteMarginCallLevel($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->deleteMarginCallLevel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**| Request validity window in milliseconds | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMarginPro\Model\DeleteMarginCallLevelResponse**](../Model/DeleteMarginCallLevelResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fundAutoCollection()`

```php
fundAutoCollection($fundAutoCollectionRequest): \Binance\Client\DerivativesTradingPortfolioMarginPro\Model\FundAutoCollectionResponse
```

Fund Auto-collection (USER_DATA)

Transfers all assets from Futures Account to Margin account  Weight(IP): 1500  Security Type: USER_DATA  Notes: - The BNB would not be collected from UM-PM account to the Portfolio Margin account. - You can only use this function 500 times per hour in a rolling manner.

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
| **fundAutoCollectionRequest** | [**\Binance\Client\DerivativesTradingPortfolioMarginPro\Model\FundAutoCollectionRequest**](../Model/FundAutoCollectionRequest.md)|  | [optional] |

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

Fund Collection by Asset (USER_DATA)

Transfers specific asset from Futures Account to Margin account  Weight(IP): 60  Security Type: USER_DATA  Notes: - The BNB transfer is not be supported

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

Get Auto-repay-futures Status (USER_DATA)

Query Auto-repay-futures Status  Weight(IP): 30  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMarginPro\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 5000; // int

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

## `getDeltaModeStatus()`

```php
getDeltaModeStatus($recvWindow): \Binance\Client\DerivativesTradingPortfolioMarginPro\Model\GetDeltaModeStatusResponse
```

Get Delta Mode Status (USER_DATA)

Query the Delta mode status of current account.  Weight(IP): 1500  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMarginPro\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 5000; // int

try {
    $result = $apiInstance->getDeltaModeStatus($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getDeltaModeStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMarginPro\Model\GetDeltaModeStatusResponse**](../Model/GetDeltaModeStatusResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMarginCallLevel()`

```php
getMarginCallLevel($recvWindow): \Binance\Client\DerivativesTradingPortfolioMarginPro\Model\GetMarginCallLevelResponse
```

Get Margin Call Level (USER_DATA)

Get the margin call level for a Portfolio Margin account.  Weight(IP): 1500  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMarginPro\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 5000; // int | Request validity window in milliseconds

try {
    $result = $apiInstance->getMarginCallLevel($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getMarginCallLevel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**| Request validity window in milliseconds | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMarginPro\Model\GetMarginCallLevelResponse**](../Model/GetMarginCallLevelResponse.md)

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

Get Portfolio Margin Pro Account Balance (USER_DATA)

Query Portfolio Margin Pro account balance  Weight(IP): 20  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMarginPro\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asset = BTC; // string
$recvWindow = 5000; // int

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

Get Portfolio Margin Pro Account Info (USER_DATA)

Get Portfolio Margin Pro Account Info  Weight(UID): 5  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMarginPro\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 5000; // int

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

Get Portfolio Margin Pro SPAN Account Info (USER_DATA)

Get Portfolio Margin Pro SPAN Account Info (For Portfolio Margin Pro SPAN users only)  Weight(IP): 5  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMarginPro\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 5000; // int

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

Get transferable earn asset balance for all types of Portfolio Margin account  Weight(IP): 1500  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMarginPro\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asset = LDUSDT; // string | `LDUSDT` only
$transferType = new \Binance\Client\DerivativesTradingPortfolioMarginPro\Model\\Binance\Client\DerivativesTradingPortfolioMarginPro\Model\TransferType(); // \Binance\Client\DerivativesTradingPortfolioMarginPro\Model\TransferType
$recvWindow = 5000; // int

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
| **transferType** | [**\Binance\Client\DerivativesTradingPortfolioMarginPro\Model\TransferType**](../Model/.md)|  | |
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

Portfolio Margin Pro Bankruptcy Loan Repay (TRADE)

Repay Portfolio Margin Pro Bankruptcy Loan  Weight(UID): 3000  Security Type: TRADE  Notes: - Please note that the API Key has enabled Spot & Margin Trading permissions to access this endpoint.

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
| **portfolioMarginProBankruptcyLoanRepayRequest** | [**\Binance\Client\DerivativesTradingPortfolioMarginPro\Model\PortfolioMarginProBankruptcyLoanRepayRequest**](../Model/PortfolioMarginProBankruptcyLoanRepayRequest.md)|  | [optional] |

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

Query Portfolio Margin Pro Bankruptcy Loan Amount (USER_DATA)

Query Portfolio Margin Pro Bankruptcy Loan Amount  Weight(UID): 500  Security Type: USER_DATA  Notes: - If there’s no classic portfolio margin bankruptcy loan, the amount would be 0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMarginPro\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 5000; // int

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
queryPortfolioMarginProBankruptcyLoanRepayHistory($startTime, $endTime, $size, $current, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMarginPro\Model\QueryPortfolioMarginProBankruptcyLoanRepayHistoryResponse
```

Query Portfolio Margin Pro Bankruptcy Loan Repay History (USER_DATA)

Query repay history of pmloan for portfolio margin pro.  Weight(IP): 500  Security Type: USER_DATA  Notes: - `startTime` and `endTime` cannot be longer than 360 days - If `startTime` and `endTime` not sent, return records of the last 30 days by default. - If `startTime`is sent and `endTime` is not sent, return records of [startTime, startTime+30d]. - If `startTime` is not sent and `endTime` is sent, return records of [endTime-30d, endTime].

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMarginPro\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startTime = 1623319461670; // int | Start time
$endTime = 1641782889000; // int | End time
$size = 10; // int | Number of results returned.
$current = 1; // int | Currently querying page. Start from 1.
$recvWindow = 5000; // int

try {
    $result = $apiInstance->queryPortfolioMarginProBankruptcyLoanRepayHistory($startTime, $endTime, $size, $current, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->queryPortfolioMarginProBankruptcyLoanRepayHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **startTime** | **int**| Start time | [optional] |
| **endTime** | **int**| End time | [optional] |
| **size** | **int**| Number of results returned. | [optional] |
| **current** | **int**| Currently querying page. Start from 1. | [optional] |
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

Query Portfolio Margin Pro Negative Balance Interest History (USER_DATA)

Query interest history of negative balance for portfolio margin.  Weight(IP): 50  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMarginPro\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asset = USDT; // string
$startTime = 1623319461670; // int | Start time
$endTime = 1641782889000; // int | End time
$size = 10; // int | Number of results returned.
$recvWindow = 5000; // int

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
| **startTime** | **int**| Start time | [optional] |
| **endTime** | **int**| End time | [optional] |
| **size** | **int**| Number of results returned. | [optional] |
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

Repay futures Negative Balance (USER_DATA)

Repay futures Negative Balance  Weight(IP): 1500  Security Type: USER_DATA

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
| **repayFuturesNegativeBalanceRequest** | [**\Binance\Client\DerivativesTradingPortfolioMarginPro\Model\RepayFuturesNegativeBalanceRequest**](../Model/RepayFuturesNegativeBalanceRequest.md)|  | [optional] |

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

## `setMarginCallLevel()`

```php
setMarginCallLevel($setMarginCallLevelRequest): \Binance\Client\DerivativesTradingPortfolioMarginPro\Model\SetMarginCallLevelResponse
```

Set Margin Call Level (USER_DATA)

Set the margin call level for a Portfolio Margin account. When the account's uniMMR drops to the specified level, a notification will be sent via email and SMS.  Weight(IP): 1500  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMarginPro\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$setMarginCallLevelRequest = new \Binance\Client\DerivativesTradingPortfolioMarginPro\Model\SetMarginCallLevelRequest(); // \Binance\Client\DerivativesTradingPortfolioMarginPro\Model\SetMarginCallLevelRequest

try {
    $result = $apiInstance->setMarginCallLevel($setMarginCallLevelRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->setMarginCallLevel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **setMarginCallLevelRequest** | [**\Binance\Client\DerivativesTradingPortfolioMarginPro\Model\SetMarginCallLevelRequest**](../Model/SetMarginCallLevelRequest.md)|  | |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMarginPro\Model\SetMarginCallLevelResponse**](../Model/SetMarginCallLevelResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `switchDeltaMode()`

```php
switchDeltaMode($switchDeltaModeRequest): \Binance\Client\DerivativesTradingPortfolioMarginPro\Model\SwitchDeltaModeResponse
```

Switch Delta Mode (TRADE)

Switch the Delta mode for existing PM PRO / PM RETAIL accounts.  Weight(IP): 1500  Security Type: TRADE

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMarginPro\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$switchDeltaModeRequest = new \Binance\Client\DerivativesTradingPortfolioMarginPro\Model\SwitchDeltaModeRequest(); // \Binance\Client\DerivativesTradingPortfolioMarginPro\Model\SwitchDeltaModeRequest

try {
    $result = $apiInstance->switchDeltaMode($switchDeltaModeRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->switchDeltaMode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **switchDeltaModeRequest** | [**\Binance\Client\DerivativesTradingPortfolioMarginPro\Model\SwitchDeltaModeRequest**](../Model/SwitchDeltaModeRequest.md)|  | |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMarginPro\Model\SwitchDeltaModeResponse**](../Model/SwitchDeltaModeResponse.md)

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

Transfer LDUSDT/RWUSD for Portfolio Margin (TRADE)

Transfer LDUSDT/RWUSD as collateral for all types of Portfolio Margin account  Weight(UID): 1500  Security Type: TRADE

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
