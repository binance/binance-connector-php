# Binance\Client\DerivativesTradingPortfolioMargin\AccountApi

All URIs are relative to https://papi.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**accountBalance()**](AccountApi.md#accountBalance) | **GET** /papi/v1/balance | Account Balance(USER_DATA) |
| [**accountInformation()**](AccountApi.md#accountInformation) | **GET** /papi/v1/account | Account Information(USER_DATA) |
| [**bnbTransfer()**](AccountApi.md#bnbTransfer) | **POST** /papi/v1/bnb-transfer | BNB transfer (TRADE) |
| [**changeAutoRepayFuturesStatus()**](AccountApi.md#changeAutoRepayFuturesStatus) | **POST** /papi/v1/repay-futures-switch | Change Auto-repay-futures Status(TRADE) |
| [**changeCmInitialLeverage()**](AccountApi.md#changeCmInitialLeverage) | **POST** /papi/v1/cm/leverage | Change CM Initial Leverage (TRADE) |
| [**changeCmPositionMode()**](AccountApi.md#changeCmPositionMode) | **POST** /papi/v1/cm/positionSide/dual | Change CM Position Mode(TRADE) |
| [**changeUmInitialLeverage()**](AccountApi.md#changeUmInitialLeverage) | **POST** /papi/v1/um/leverage | Change UM Initial Leverage(TRADE) |
| [**changeUmPositionMode()**](AccountApi.md#changeUmPositionMode) | **POST** /papi/v1/um/positionSide/dual | Change UM Position Mode(TRADE) |
| [**cmNotionalAndLeverageBrackets()**](AccountApi.md#cmNotionalAndLeverageBrackets) | **GET** /papi/v1/cm/leverageBracket | CM Notional and Leverage Brackets(USER_DATA) |
| [**fundAutoCollection()**](AccountApi.md#fundAutoCollection) | **POST** /papi/v1/auto-collection | Fund Auto-collection(TRADE) |
| [**fundCollectionByAsset()**](AccountApi.md#fundCollectionByAsset) | **POST** /papi/v1/asset-collection | Fund Collection by Asset(TRADE) |
| [**getAutoRepayFuturesStatus()**](AccountApi.md#getAutoRepayFuturesStatus) | **GET** /papi/v1/repay-futures-switch | Get Auto-repay-futures Status(USER_DATA) |
| [**getCmAccountDetail()**](AccountApi.md#getCmAccountDetail) | **GET** /papi/v1/cm/account | Get CM Account Detail(USER_DATA) |
| [**getCmCurrentPositionMode()**](AccountApi.md#getCmCurrentPositionMode) | **GET** /papi/v1/cm/positionSide/dual | Get CM Current Position Mode(USER_DATA) |
| [**getCmIncomeHistory()**](AccountApi.md#getCmIncomeHistory) | **GET** /papi/v1/cm/income | Get CM Income History(USER_DATA) |
| [**getDownloadIdForUmFuturesOrderHistory()**](AccountApi.md#getDownloadIdForUmFuturesOrderHistory) | **GET** /papi/v1/um/order/asyn | Get Download Id For UM Futures Order History (USER_DATA) |
| [**getDownloadIdForUmFuturesTradeHistory()**](AccountApi.md#getDownloadIdForUmFuturesTradeHistory) | **GET** /papi/v1/um/trade/asyn | Get Download Id For UM Futures Trade History (USER_DATA) |
| [**getDownloadIdForUmFuturesTransactionHistory()**](AccountApi.md#getDownloadIdForUmFuturesTransactionHistory) | **GET** /papi/v1/um/income/asyn | Get Download Id For UM Futures Transaction History (USER_DATA) |
| [**getMarginBorrowLoanInterestHistory()**](AccountApi.md#getMarginBorrowLoanInterestHistory) | **GET** /papi/v1/margin/marginInterestHistory | Get Margin Borrow/Loan Interest History(USER_DATA) |
| [**getUmAccountDetail()**](AccountApi.md#getUmAccountDetail) | **GET** /papi/v1/um/account | Get UM Account Detail(USER_DATA) |
| [**getUmAccountDetailV2()**](AccountApi.md#getUmAccountDetailV2) | **GET** /papi/v2/um/account | Get UM Account Detail V2(USER_DATA) |
| [**getUmCurrentPositionMode()**](AccountApi.md#getUmCurrentPositionMode) | **GET** /papi/v1/um/positionSide/dual | Get UM Current Position Mode(USER_DATA) |
| [**getUmFuturesOrderDownloadLinkById()**](AccountApi.md#getUmFuturesOrderDownloadLinkById) | **GET** /papi/v1/um/order/asyn/id | Get UM Futures Order Download Link by Id(USER_DATA) |
| [**getUmFuturesTradeDownloadLinkById()**](AccountApi.md#getUmFuturesTradeDownloadLinkById) | **GET** /papi/v1/um/trade/asyn/id | Get UM Futures Trade Download Link by Id(USER_DATA) |
| [**getUmFuturesTransactionDownloadLinkById()**](AccountApi.md#getUmFuturesTransactionDownloadLinkById) | **GET** /papi/v1/um/income/asyn/id | Get UM Futures Transaction Download Link by Id(USER_DATA) |
| [**getUmIncomeHistory()**](AccountApi.md#getUmIncomeHistory) | **GET** /papi/v1/um/income | Get UM Income History(USER_DATA) |
| [**getUserCommissionRateForCm()**](AccountApi.md#getUserCommissionRateForCm) | **GET** /papi/v1/cm/commissionRate | Get User Commission Rate for CM(USER_DATA) |
| [**getUserCommissionRateForUm()**](AccountApi.md#getUserCommissionRateForUm) | **GET** /papi/v1/um/commissionRate | Get User Commission Rate for UM(USER_DATA) |
| [**marginMaxBorrow()**](AccountApi.md#marginMaxBorrow) | **GET** /papi/v1/margin/maxBorrowable | Margin Max Borrow(USER_DATA) |
| [**portfolioMarginUmTradingQuantitativeRulesIndicators()**](AccountApi.md#portfolioMarginUmTradingQuantitativeRulesIndicators) | **GET** /papi/v1/um/apiTradingStatus | Portfolio Margin UM Trading Quantitative Rules Indicators(USER_DATA) |
| [**queryCmPositionInformation()**](AccountApi.md#queryCmPositionInformation) | **GET** /papi/v1/cm/positionRisk | Query CM Position Information(USER_DATA) |
| [**queryMarginLoanRecord()**](AccountApi.md#queryMarginLoanRecord) | **GET** /papi/v1/margin/marginLoan | Query Margin Loan Record(USER_DATA) |
| [**queryMarginMaxWithdraw()**](AccountApi.md#queryMarginMaxWithdraw) | **GET** /papi/v1/margin/maxWithdraw | Query Margin Max Withdraw(USER_DATA) |
| [**queryMarginRepayRecord()**](AccountApi.md#queryMarginRepayRecord) | **GET** /papi/v1/margin/repayLoan | Query Margin repay Record(USER_DATA) |
| [**queryPortfolioMarginNegativeBalanceInterestHistory()**](AccountApi.md#queryPortfolioMarginNegativeBalanceInterestHistory) | **GET** /papi/v1/portfolio/interest-history | Query Portfolio Margin Negative Balance Interest History(USER_DATA) |
| [**queryUmPositionInformation()**](AccountApi.md#queryUmPositionInformation) | **GET** /papi/v1/um/positionRisk | Query UM Position Information(USER_DATA) |
| [**queryUserNegativeBalanceAutoExchangeRecord()**](AccountApi.md#queryUserNegativeBalanceAutoExchangeRecord) | **GET** /papi/v1/portfolio/negative-balance-exchange-record | Query User Negative Balance Auto Exchange Record (USER_DATA) |
| [**queryUserRateLimit()**](AccountApi.md#queryUserRateLimit) | **GET** /papi/v1/rateLimit/order | Query User Rate Limit (USER_DATA) |
| [**repayFuturesNegativeBalance()**](AccountApi.md#repayFuturesNegativeBalance) | **POST** /papi/v1/repay-futures-negative-balance | Repay futures Negative Balance(USER_DATA) |
| [**umFuturesAccountConfiguration()**](AccountApi.md#umFuturesAccountConfiguration) | **GET** /papi/v1/um/accountConfig | UM Futures Account Configuration(USER_DATA) |
| [**umFuturesSymbolConfiguration()**](AccountApi.md#umFuturesSymbolConfiguration) | **GET** /papi/v1/um/symbolConfig | UM Futures Symbol Configuration(USER_DATA) |
| [**umNotionalAndLeverageBrackets()**](AccountApi.md#umNotionalAndLeverageBrackets) | **GET** /papi/v1/um/leverageBracket | UM Notional and Leverage Brackets (USER_DATA) |


## `accountBalance()`

```php
accountBalance($asset, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\AccountBalanceResponse
```

Account Balance(USER_DATA)

Query account balance  Weight: 20

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asset = 'asset_example'; // string
$recvWindow = 56; // int

try {
    $result = $apiInstance->accountBalance($asset, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountBalance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset** | **string**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\AccountBalanceResponse**](../Model/AccountBalanceResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountInformation()`

```php
accountInformation($recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\AccountInformationResponse
```

Account Information(USER_DATA)

Query account information  Weight: 20

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 56; // int

try {
    $result = $apiInstance->accountInformation($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountInformation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\AccountInformationResponse**](../Model/AccountInformationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bnbTransfer()`

```php
bnbTransfer($bnbTransferRequest): \Binance\Client\DerivativesTradingPortfolioMargin\Model\BnbTransferResponse
```

BNB transfer (TRADE)

Transfer BNB in and out of UM  * The endpoint can only be called 10 times per 10 minutes in a rolling manner  Weight: 750

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bnbTransferRequest = new \Binance\Client\DerivativesTradingPortfolioMargin\Model\BnbTransferRequest(); // \Binance\Client\DerivativesTradingPortfolioMargin\Model\BnbTransferRequest

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
| **bnbTransferRequest** | [**\Binance\Client\DerivativesTradingPortfolioMargin\Model\BnbTransferRequest**](../Model/BnbTransferRequest.md)|  | |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\BnbTransferResponse**](../Model/BnbTransferResponse.md)

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
changeAutoRepayFuturesStatus($changeAutoRepayFuturesStatusRequest): \Binance\Client\DerivativesTradingPortfolioMargin\Model\ChangeAutoRepayFuturesStatusResponse
```

Change Auto-repay-futures Status(TRADE)

Change Auto-repay-futures Status  Weight: 750

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$changeAutoRepayFuturesStatusRequest = new \Binance\Client\DerivativesTradingPortfolioMargin\Model\ChangeAutoRepayFuturesStatusRequest(); // \Binance\Client\DerivativesTradingPortfolioMargin\Model\ChangeAutoRepayFuturesStatusRequest

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
| **changeAutoRepayFuturesStatusRequest** | [**\Binance\Client\DerivativesTradingPortfolioMargin\Model\ChangeAutoRepayFuturesStatusRequest**](../Model/ChangeAutoRepayFuturesStatusRequest.md)|  | |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\ChangeAutoRepayFuturesStatusResponse**](../Model/ChangeAutoRepayFuturesStatusResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `changeCmInitialLeverage()`

```php
changeCmInitialLeverage($changeCmInitialLeverageRequest): \Binance\Client\DerivativesTradingPortfolioMargin\Model\ChangeCmInitialLeverageResponse
```

Change CM Initial Leverage (TRADE)

Change user's initial leverage of specific symbol in CM.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$changeCmInitialLeverageRequest = new \Binance\Client\DerivativesTradingPortfolioMargin\Model\ChangeCmInitialLeverageRequest(); // \Binance\Client\DerivativesTradingPortfolioMargin\Model\ChangeCmInitialLeverageRequest

try {
    $result = $apiInstance->changeCmInitialLeverage($changeCmInitialLeverageRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->changeCmInitialLeverage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **changeCmInitialLeverageRequest** | [**\Binance\Client\DerivativesTradingPortfolioMargin\Model\ChangeCmInitialLeverageRequest**](../Model/ChangeCmInitialLeverageRequest.md)|  | |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\ChangeCmInitialLeverageResponse**](../Model/ChangeCmInitialLeverageResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `changeCmPositionMode()`

```php
changeCmPositionMode($changeCmPositionModeRequest): \Binance\Client\DerivativesTradingPortfolioMargin\Model\ChangeCmPositionModeResponse
```

Change CM Position Mode(TRADE)

Change user's position mode (Hedge Mode or One-way Mode ) on EVERY symbol in CM  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$changeCmPositionModeRequest = new \Binance\Client\DerivativesTradingPortfolioMargin\Model\ChangeCmPositionModeRequest(); // \Binance\Client\DerivativesTradingPortfolioMargin\Model\ChangeCmPositionModeRequest

try {
    $result = $apiInstance->changeCmPositionMode($changeCmPositionModeRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->changeCmPositionMode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **changeCmPositionModeRequest** | [**\Binance\Client\DerivativesTradingPortfolioMargin\Model\ChangeCmPositionModeRequest**](../Model/ChangeCmPositionModeRequest.md)|  | |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\ChangeCmPositionModeResponse**](../Model/ChangeCmPositionModeResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `changeUmInitialLeverage()`

```php
changeUmInitialLeverage($changeUmInitialLeverageRequest): \Binance\Client\DerivativesTradingPortfolioMargin\Model\ChangeUmInitialLeverageResponse
```

Change UM Initial Leverage(TRADE)

Change user's initial leverage of specific symbol in UM.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$changeUmInitialLeverageRequest = new \Binance\Client\DerivativesTradingPortfolioMargin\Model\ChangeUmInitialLeverageRequest(); // \Binance\Client\DerivativesTradingPortfolioMargin\Model\ChangeUmInitialLeverageRequest

try {
    $result = $apiInstance->changeUmInitialLeverage($changeUmInitialLeverageRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->changeUmInitialLeverage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **changeUmInitialLeverageRequest** | [**\Binance\Client\DerivativesTradingPortfolioMargin\Model\ChangeUmInitialLeverageRequest**](../Model/ChangeUmInitialLeverageRequest.md)|  | |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\ChangeUmInitialLeverageResponse**](../Model/ChangeUmInitialLeverageResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `changeUmPositionMode()`

```php
changeUmPositionMode($changeUmPositionModeRequest): \Binance\Client\DerivativesTradingPortfolioMargin\Model\ChangeUmPositionModeResponse
```

Change UM Position Mode(TRADE)

Change user's position mode (Hedge Mode or One-way Mode ) on EVERY symbol in UM  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$changeUmPositionModeRequest = new \Binance\Client\DerivativesTradingPortfolioMargin\Model\ChangeUmPositionModeRequest(); // \Binance\Client\DerivativesTradingPortfolioMargin\Model\ChangeUmPositionModeRequest

try {
    $result = $apiInstance->changeUmPositionMode($changeUmPositionModeRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->changeUmPositionMode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **changeUmPositionModeRequest** | [**\Binance\Client\DerivativesTradingPortfolioMargin\Model\ChangeUmPositionModeRequest**](../Model/ChangeUmPositionModeRequest.md)|  | |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\ChangeUmPositionModeResponse**](../Model/ChangeUmPositionModeResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cmNotionalAndLeverageBrackets()`

```php
cmNotionalAndLeverageBrackets($symbol, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\CmNotionalAndLeverageBracketsResponse
```

CM Notional and Leverage Brackets(USER_DATA)

Query CM notional and leverage brackets  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$recvWindow = 56; // int

try {
    $result = $apiInstance->cmNotionalAndLeverageBrackets($symbol, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->cmNotionalAndLeverageBrackets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\CmNotionalAndLeverageBracketsResponse**](../Model/CmNotionalAndLeverageBracketsResponse.md)

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
fundAutoCollection($fundAutoCollectionRequest): \Binance\Client\DerivativesTradingPortfolioMargin\Model\FundAutoCollectionResponse
```

Fund Auto-collection(TRADE)

Fund collection for Portfolio Margin  * The BNB would not be collected from UM-PM account to the Portfolio Margin account. * You can only use this function 500 times per hour in a rolling manner.  Weight: 750

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fundAutoCollectionRequest = new \Binance\Client\DerivativesTradingPortfolioMargin\Model\FundAutoCollectionRequest(); // \Binance\Client\DerivativesTradingPortfolioMargin\Model\FundAutoCollectionRequest

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
| **fundAutoCollectionRequest** | [**\Binance\Client\DerivativesTradingPortfolioMargin\Model\FundAutoCollectionRequest**](../Model/FundAutoCollectionRequest.md)|  | |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\FundAutoCollectionResponse**](../Model/FundAutoCollectionResponse.md)

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
fundCollectionByAsset($fundCollectionByAssetRequest): \Binance\Client\DerivativesTradingPortfolioMargin\Model\FundCollectionByAssetResponse
```

Fund Collection by Asset(TRADE)

Transfers specific asset from Futures Account to Margin account  * The BNB transfer is not be supported  Weight: 30

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fundCollectionByAssetRequest = new \Binance\Client\DerivativesTradingPortfolioMargin\Model\FundCollectionByAssetRequest(); // \Binance\Client\DerivativesTradingPortfolioMargin\Model\FundCollectionByAssetRequest

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
| **fundCollectionByAssetRequest** | [**\Binance\Client\DerivativesTradingPortfolioMargin\Model\FundCollectionByAssetRequest**](../Model/FundCollectionByAssetRequest.md)|  | |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\FundCollectionByAssetResponse**](../Model/FundCollectionByAssetResponse.md)

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
getAutoRepayFuturesStatus($recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\GetAutoRepayFuturesStatusResponse
```

Get Auto-repay-futures Status(USER_DATA)

Query Auto-repay-futures Status  Weight: 30

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\AccountApi(
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

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\GetAutoRepayFuturesStatusResponse**](../Model/GetAutoRepayFuturesStatusResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCmAccountDetail()`

```php
getCmAccountDetail($recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\GetCmAccountDetailResponse
```

Get CM Account Detail(USER_DATA)

Get current CM account asset and position information.  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 56; // int

try {
    $result = $apiInstance->getCmAccountDetail($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getCmAccountDetail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\GetCmAccountDetailResponse**](../Model/GetCmAccountDetailResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCmCurrentPositionMode()`

```php
getCmCurrentPositionMode($recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\GetCmCurrentPositionModeResponse
```

Get CM Current Position Mode(USER_DATA)

Get user's position mode (Hedge Mode or One-way Mode ) on EVERY symbol in CM  Weight: 30

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 56; // int

try {
    $result = $apiInstance->getCmCurrentPositionMode($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getCmCurrentPositionMode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\GetCmCurrentPositionModeResponse**](../Model/GetCmCurrentPositionModeResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCmIncomeHistory()`

```php
getCmIncomeHistory($symbol, $incomeType, $startTime, $endTime, $page, $limit, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\GetCmIncomeHistoryResponse
```

Get CM Income History(USER_DATA)

Get CM Income History   * If `incomeType` is not sent, all kinds of flow will be returned * \"trandId\" is unique in the same \"incomeType\" for a user * The interval between `startTime` and `endTime` can not exceed 200 days: * If `startTime` and `endTime` are not sent, the last 200 days will be returned  Weight: 30

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$incomeType = 'incomeType_example'; // string | TRANSFER, WELCOME_BONUS, REALIZED_PNL, FUNDING_FEE, COMMISSION, INSURANCE_CLEAR, REFERRAL_KICKBACK, COMMISSION_REBATE, API_REBATE, CONTEST_REWARD, CROSS_COLLATERAL_TRANSFER, OPTIONS_PREMIUM_FEE, OPTIONS_SETTLE_PROFIT, INTERNAL_TRANSFER, AUTO_EXCHANGE, DELIVERED_SETTELMENT, COIN_SWAP_DEPOSIT, COIN_SWAP_WITHDRAW, POSITION_LIMIT_INCREASE_FEE
$startTime = 56; // int | Timestamp in ms to get funding from INCLUSIVE.
$endTime = 56; // int | Timestamp in ms to get funding until INCLUSIVE.
$page = 56; // int
$limit = 56; // int | Default 100; max 1000
$recvWindow = 56; // int

try {
    $result = $apiInstance->getCmIncomeHistory($symbol, $incomeType, $startTime, $endTime, $page, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getCmIncomeHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | [optional] |
| **incomeType** | **string**| TRANSFER, WELCOME_BONUS, REALIZED_PNL, FUNDING_FEE, COMMISSION, INSURANCE_CLEAR, REFERRAL_KICKBACK, COMMISSION_REBATE, API_REBATE, CONTEST_REWARD, CROSS_COLLATERAL_TRANSFER, OPTIONS_PREMIUM_FEE, OPTIONS_SETTLE_PROFIT, INTERNAL_TRANSFER, AUTO_EXCHANGE, DELIVERED_SETTELMENT, COIN_SWAP_DEPOSIT, COIN_SWAP_WITHDRAW, POSITION_LIMIT_INCREASE_FEE | [optional] |
| **startTime** | **int**| Timestamp in ms to get funding from INCLUSIVE. | [optional] |
| **endTime** | **int**| Timestamp in ms to get funding until INCLUSIVE. | [optional] |
| **page** | **int**|  | [optional] |
| **limit** | **int**| Default 100; max 1000 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\GetCmIncomeHistoryResponse**](../Model/GetCmIncomeHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDownloadIdForUmFuturesOrderHistory()`

```php
getDownloadIdForUmFuturesOrderHistory($startTime, $endTime, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\GetDownloadIdForUmFuturesOrderHistoryResponse
```

Get Download Id For UM Futures Order History (USER_DATA)

Get download id for UM futures order history  * Request Limitation is 10 times per month, shared by front end download page and rest api * The time between `startTime` and `endTime` can not be longer than 1 year  Weight: 1500

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startTime = 56; // int
$endTime = 56; // int
$recvWindow = 56; // int

try {
    $result = $apiInstance->getDownloadIdForUmFuturesOrderHistory($startTime, $endTime, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getDownloadIdForUmFuturesOrderHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **startTime** | **int**|  | |
| **endTime** | **int**|  | |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\GetDownloadIdForUmFuturesOrderHistoryResponse**](../Model/GetDownloadIdForUmFuturesOrderHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDownloadIdForUmFuturesTradeHistory()`

```php
getDownloadIdForUmFuturesTradeHistory($startTime, $endTime, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\GetDownloadIdForUmFuturesTradeHistoryResponse
```

Get Download Id For UM Futures Trade History (USER_DATA)

Get download id for UM futures trade history  * Request Limitation is 5 times per month, shared by front end download page and rest api * The time between `startTime` and `endTime` can not be longer than 1 year  Weight: 1500

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startTime = 56; // int
$endTime = 56; // int
$recvWindow = 56; // int

try {
    $result = $apiInstance->getDownloadIdForUmFuturesTradeHistory($startTime, $endTime, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getDownloadIdForUmFuturesTradeHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **startTime** | **int**|  | |
| **endTime** | **int**|  | |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\GetDownloadIdForUmFuturesTradeHistoryResponse**](../Model/GetDownloadIdForUmFuturesTradeHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDownloadIdForUmFuturesTransactionHistory()`

```php
getDownloadIdForUmFuturesTransactionHistory($startTime, $endTime, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\GetDownloadIdForUmFuturesTransactionHistoryResponse
```

Get Download Id For UM Futures Transaction History (USER_DATA)

Get download id for UM futures transaction history  * Request Limitation is 5 times per month, shared by front end download page and rest api * The time between `startTime` and `endTime` can not be longer than 1 year  Weight: 1500

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startTime = 56; // int
$endTime = 56; // int
$recvWindow = 56; // int

try {
    $result = $apiInstance->getDownloadIdForUmFuturesTransactionHistory($startTime, $endTime, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getDownloadIdForUmFuturesTransactionHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **startTime** | **int**|  | |
| **endTime** | **int**|  | |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\GetDownloadIdForUmFuturesTransactionHistoryResponse**](../Model/GetDownloadIdForUmFuturesTransactionHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMarginBorrowLoanInterestHistory()`

```php
getMarginBorrowLoanInterestHistory($asset, $startTime, $endTime, $current, $size, $archived, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\GetMarginBorrowLoanInterestHistoryResponse
```

Get Margin Borrow/Loan Interest History(USER_DATA)

Get Margin Borrow/Loan Interest History   * Response in descending order * The max interval between startTime and endTime is 30 days. It is a MUST to ensure data correctness. * If `startTime` and `endTime` not sent, return records of the last 7 days by default * If `startTime` is sent and `endTime` is not sent, the records from `startTime` to the present will be returned; if `startTime` is more than 30 days ago, the records of the past 30 days will be returned. * If `startTime` is not sent and `endTime` is sent, the records of the 7 days before `endTime` is returned. * Type in response has 5 enums: * `PERIODIC` interest charged per hour * `ON_BORROW` first interest charged on borrow * `PERIODIC_CONVERTED` interest charged per hour converted into BNB * `ON_BORROW_CONVERTED` first interest charged on borrow converted into BNB * `PORTFOLIO` Portfolio Margin negative balance daily interest  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asset = 'asset_example'; // string
$startTime = 56; // int | Timestamp in ms to get funding from INCLUSIVE.
$endTime = 56; // int | Timestamp in ms to get funding until INCLUSIVE.
$current = 56; // int | Currently querying page. Start from 1. Default:1
$size = 56; // int | Default:10 Max:100
$archived = 'archived_example'; // string | Default: `false`. Set to `true` for archived data from 6 months ago
$recvWindow = 56; // int

try {
    $result = $apiInstance->getMarginBorrowLoanInterestHistory($asset, $startTime, $endTime, $current, $size, $archived, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getMarginBorrowLoanInterestHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset** | **string**|  | [optional] |
| **startTime** | **int**| Timestamp in ms to get funding from INCLUSIVE. | [optional] |
| **endTime** | **int**| Timestamp in ms to get funding until INCLUSIVE. | [optional] |
| **current** | **int**| Currently querying page. Start from 1. Default:1 | [optional] |
| **size** | **int**| Default:10 Max:100 | [optional] |
| **archived** | **string**| Default: &#x60;false&#x60;. Set to &#x60;true&#x60; for archived data from 6 months ago | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\GetMarginBorrowLoanInterestHistoryResponse**](../Model/GetMarginBorrowLoanInterestHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUmAccountDetail()`

```php
getUmAccountDetail($recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\GetUmAccountDetailResponse
```

Get UM Account Detail(USER_DATA)

Get current UM account asset and position information.  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 56; // int

try {
    $result = $apiInstance->getUmAccountDetail($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getUmAccountDetail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\GetUmAccountDetailResponse**](../Model/GetUmAccountDetailResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUmAccountDetailV2()`

```php
getUmAccountDetailV2($recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\GetUmAccountDetailV2Response
```

Get UM Account Detail V2(USER_DATA)

Get current UM account asset and position information.  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 56; // int

try {
    $result = $apiInstance->getUmAccountDetailV2($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getUmAccountDetailV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\GetUmAccountDetailV2Response**](../Model/GetUmAccountDetailV2Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUmCurrentPositionMode()`

```php
getUmCurrentPositionMode($recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\GetUmCurrentPositionModeResponse
```

Get UM Current Position Mode(USER_DATA)

Get user's position mode (Hedge Mode or One-way Mode ) on EVERY symbol in UM  Weight: 30

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 56; // int

try {
    $result = $apiInstance->getUmCurrentPositionMode($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getUmCurrentPositionMode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\GetUmCurrentPositionModeResponse**](../Model/GetUmCurrentPositionModeResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUmFuturesOrderDownloadLinkById()`

```php
getUmFuturesOrderDownloadLinkById($downloadId, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\GetUmFuturesOrderDownloadLinkByIdResponse
```

Get UM Futures Order Download Link by Id(USER_DATA)

Get UM futures order download link by Id  * Download link expiration: 24h  Weight: 10

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$downloadId = 'downloadId_example'; // string | get by download id api
$recvWindow = 56; // int

try {
    $result = $apiInstance->getUmFuturesOrderDownloadLinkById($downloadId, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getUmFuturesOrderDownloadLinkById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **downloadId** | **string**| get by download id api | |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\GetUmFuturesOrderDownloadLinkByIdResponse**](../Model/GetUmFuturesOrderDownloadLinkByIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUmFuturesTradeDownloadLinkById()`

```php
getUmFuturesTradeDownloadLinkById($downloadId, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\GetUmFuturesTradeDownloadLinkByIdResponse
```

Get UM Futures Trade Download Link by Id(USER_DATA)

Get UM futures trade download link by Id  * Download link expiration: 24h  Weight: 10

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$downloadId = 'downloadId_example'; // string | get by download id api
$recvWindow = 56; // int

try {
    $result = $apiInstance->getUmFuturesTradeDownloadLinkById($downloadId, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getUmFuturesTradeDownloadLinkById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **downloadId** | **string**| get by download id api | |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\GetUmFuturesTradeDownloadLinkByIdResponse**](../Model/GetUmFuturesTradeDownloadLinkByIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUmFuturesTransactionDownloadLinkById()`

```php
getUmFuturesTransactionDownloadLinkById($downloadId, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\GetUmFuturesTransactionDownloadLinkByIdResponse
```

Get UM Futures Transaction Download Link by Id(USER_DATA)

Get UM futures Transaction download link by Id  * Download link expiration: 24h  Weight: 10

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$downloadId = 'downloadId_example'; // string | get by download id api
$recvWindow = 56; // int

try {
    $result = $apiInstance->getUmFuturesTransactionDownloadLinkById($downloadId, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getUmFuturesTransactionDownloadLinkById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **downloadId** | **string**| get by download id api | |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\GetUmFuturesTransactionDownloadLinkByIdResponse**](../Model/GetUmFuturesTransactionDownloadLinkByIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUmIncomeHistory()`

```php
getUmIncomeHistory($symbol, $incomeType, $startTime, $endTime, $page, $limit, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\GetUmIncomeHistoryResponse
```

Get UM Income History(USER_DATA)

Get UM Income History  * If neither `startTime` nor `endTime` is sent, the recent 7-day data will be returned. * If `incomeType` is not sent, all kinds of flow will be returned * \"trandId\" is unique in the same incomeType for a user * Income history only contains data for the last three months  Weight: 30

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$incomeType = 'incomeType_example'; // string | TRANSFER, WELCOME_BONUS, REALIZED_PNL, FUNDING_FEE, COMMISSION, INSURANCE_CLEAR, REFERRAL_KICKBACK, COMMISSION_REBATE, API_REBATE, CONTEST_REWARD, CROSS_COLLATERAL_TRANSFER, OPTIONS_PREMIUM_FEE, OPTIONS_SETTLE_PROFIT, INTERNAL_TRANSFER, AUTO_EXCHANGE, DELIVERED_SETTELMENT, COIN_SWAP_DEPOSIT, COIN_SWAP_WITHDRAW, POSITION_LIMIT_INCREASE_FEE
$startTime = 56; // int | Timestamp in ms to get funding from INCLUSIVE.
$endTime = 56; // int | Timestamp in ms to get funding until INCLUSIVE.
$page = 56; // int
$limit = 56; // int | Default 100; max 1000
$recvWindow = 56; // int

try {
    $result = $apiInstance->getUmIncomeHistory($symbol, $incomeType, $startTime, $endTime, $page, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getUmIncomeHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | [optional] |
| **incomeType** | **string**| TRANSFER, WELCOME_BONUS, REALIZED_PNL, FUNDING_FEE, COMMISSION, INSURANCE_CLEAR, REFERRAL_KICKBACK, COMMISSION_REBATE, API_REBATE, CONTEST_REWARD, CROSS_COLLATERAL_TRANSFER, OPTIONS_PREMIUM_FEE, OPTIONS_SETTLE_PROFIT, INTERNAL_TRANSFER, AUTO_EXCHANGE, DELIVERED_SETTELMENT, COIN_SWAP_DEPOSIT, COIN_SWAP_WITHDRAW, POSITION_LIMIT_INCREASE_FEE | [optional] |
| **startTime** | **int**| Timestamp in ms to get funding from INCLUSIVE. | [optional] |
| **endTime** | **int**| Timestamp in ms to get funding until INCLUSIVE. | [optional] |
| **page** | **int**|  | [optional] |
| **limit** | **int**| Default 100; max 1000 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\GetUmIncomeHistoryResponse**](../Model/GetUmIncomeHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserCommissionRateForCm()`

```php
getUserCommissionRateForCm($symbol, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\GetUserCommissionRateForCmResponse
```

Get User Commission Rate for CM(USER_DATA)

Get User Commission Rate for CM  Weight: 20

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$recvWindow = 56; // int

try {
    $result = $apiInstance->getUserCommissionRateForCm($symbol, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getUserCommissionRateForCm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\GetUserCommissionRateForCmResponse**](../Model/GetUserCommissionRateForCmResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserCommissionRateForUm()`

```php
getUserCommissionRateForUm($symbol, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\GetUserCommissionRateForUmResponse
```

Get User Commission Rate for UM(USER_DATA)

Get User Commission Rate for UM  Weight: 20

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$recvWindow = 56; // int

try {
    $result = $apiInstance->getUserCommissionRateForUm($symbol, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getUserCommissionRateForUm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\GetUserCommissionRateForUmResponse**](../Model/GetUserCommissionRateForUmResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `marginMaxBorrow()`

```php
marginMaxBorrow($asset, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\MarginMaxBorrowResponse
```

Margin Max Borrow(USER_DATA)

Query margin max borrow  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asset = 'asset_example'; // string
$recvWindow = 56; // int

try {
    $result = $apiInstance->marginMaxBorrow($asset, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->marginMaxBorrow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset** | **string**|  | |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\MarginMaxBorrowResponse**](../Model/MarginMaxBorrowResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `portfolioMarginUmTradingQuantitativeRulesIndicators()`

```php
portfolioMarginUmTradingQuantitativeRulesIndicators($symbol, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\PortfolioMarginUmTradingQuantitativeRulesIndicatorsResponse
```

Portfolio Margin UM Trading Quantitative Rules Indicators(USER_DATA)

Portfolio Margin UM Trading Quantitative Rules Indicators  Weight: 1 for a single symbol 10 when the symbol parameter is omitted

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$recvWindow = 56; // int

try {
    $result = $apiInstance->portfolioMarginUmTradingQuantitativeRulesIndicators($symbol, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->portfolioMarginUmTradingQuantitativeRulesIndicators: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\PortfolioMarginUmTradingQuantitativeRulesIndicatorsResponse**](../Model/PortfolioMarginUmTradingQuantitativeRulesIndicatorsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryCmPositionInformation()`

```php
queryCmPositionInformation($marginAsset, $pair, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryCmPositionInformationResponse
```

Query CM Position Information(USER_DATA)

Get current CM position information.  * If neither `marginAsset` nor `pair` is sent, positions of all symbols with `TRADING` status will be returned. * for One-way Mode user, the response will only show the \"BOTH\" positions * for Hedge Mode user, the response will show \"LONG\", and \"SHORT\" positions. * Please use with user data stream `ACCOUNT_UPDATE` to meet your timeliness and accuracy needs.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$marginAsset = 'marginAsset_example'; // string
$pair = 'pair_example'; // string
$recvWindow = 56; // int

try {
    $result = $apiInstance->queryCmPositionInformation($marginAsset, $pair, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->queryCmPositionInformation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **marginAsset** | **string**|  | [optional] |
| **pair** | **string**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryCmPositionInformationResponse**](../Model/QueryCmPositionInformationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryMarginLoanRecord()`

```php
queryMarginLoanRecord($asset, $txId, $startTime, $endTime, $current, $size, $archived, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryMarginLoanRecordResponse
```

Query Margin Loan Record(USER_DATA)

Query margin loan record  * txId or startTime must be sent. txId takes precedence. * Response in descending order * The max interval between `startTime` and `endTime` is 30 days. * If `startTime` and `endTime` not sent, return records of the last 7 days by default * Set `archived` to `true` to query data from 6 months ago  Weight: 10

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asset = 'asset_example'; // string
$txId = 56; // int | the `tranId` in `POST/papi/v1/marginLoan`
$startTime = 56; // int | Timestamp in ms to get funding from INCLUSIVE.
$endTime = 56; // int | Timestamp in ms to get funding until INCLUSIVE.
$current = 56; // int | Currently querying page. Start from 1. Default:1
$size = 56; // int | Default:10 Max:100
$archived = 'archived_example'; // string | Default: `false`. Set to `true` for archived data from 6 months ago
$recvWindow = 56; // int

try {
    $result = $apiInstance->queryMarginLoanRecord($asset, $txId, $startTime, $endTime, $current, $size, $archived, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->queryMarginLoanRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset** | **string**|  | |
| **txId** | **int**| the &#x60;tranId&#x60; in &#x60;POST/papi/v1/marginLoan&#x60; | [optional] |
| **startTime** | **int**| Timestamp in ms to get funding from INCLUSIVE. | [optional] |
| **endTime** | **int**| Timestamp in ms to get funding until INCLUSIVE. | [optional] |
| **current** | **int**| Currently querying page. Start from 1. Default:1 | [optional] |
| **size** | **int**| Default:10 Max:100 | [optional] |
| **archived** | **string**| Default: &#x60;false&#x60;. Set to &#x60;true&#x60; for archived data from 6 months ago | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryMarginLoanRecordResponse**](../Model/QueryMarginLoanRecordResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryMarginMaxWithdraw()`

```php
queryMarginMaxWithdraw($asset, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryMarginMaxWithdrawResponse
```

Query Margin Max Withdraw(USER_DATA)

Query Margin Max Withdraw  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asset = 'asset_example'; // string
$recvWindow = 56; // int

try {
    $result = $apiInstance->queryMarginMaxWithdraw($asset, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->queryMarginMaxWithdraw: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset** | **string**|  | |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryMarginMaxWithdrawResponse**](../Model/QueryMarginMaxWithdrawResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryMarginRepayRecord()`

```php
queryMarginRepayRecord($asset, $txId, $startTime, $endTime, $current, $size, $archived, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryMarginRepayRecordResponse
```

Query Margin repay Record(USER_DATA)

Query margin repay record.  * txId or startTime must be sent. txId takes precedence. * Response in descending order * The max interval between `startTime` and `endTime` is 30 days. * If `startTime` and `endTime` not sent, return records of the last 7 days by default * Set `archived` to `true` to query data from 6 months ago  Weight: 10

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asset = 'asset_example'; // string
$txId = 56; // int | the `tranId` in `POST/papi/v1/marginLoan`
$startTime = 56; // int | Timestamp in ms to get funding from INCLUSIVE.
$endTime = 56; // int | Timestamp in ms to get funding until INCLUSIVE.
$current = 56; // int | Currently querying page. Start from 1. Default:1
$size = 56; // int | Default:10 Max:100
$archived = 'archived_example'; // string | Default: `false`. Set to `true` for archived data from 6 months ago
$recvWindow = 56; // int

try {
    $result = $apiInstance->queryMarginRepayRecord($asset, $txId, $startTime, $endTime, $current, $size, $archived, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->queryMarginRepayRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset** | **string**|  | |
| **txId** | **int**| the &#x60;tranId&#x60; in &#x60;POST/papi/v1/marginLoan&#x60; | [optional] |
| **startTime** | **int**| Timestamp in ms to get funding from INCLUSIVE. | [optional] |
| **endTime** | **int**| Timestamp in ms to get funding until INCLUSIVE. | [optional] |
| **current** | **int**| Currently querying page. Start from 1. Default:1 | [optional] |
| **size** | **int**| Default:10 Max:100 | [optional] |
| **archived** | **string**| Default: &#x60;false&#x60;. Set to &#x60;true&#x60; for archived data from 6 months ago | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryMarginRepayRecordResponse**](../Model/QueryMarginRepayRecordResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryPortfolioMarginNegativeBalanceInterestHistory()`

```php
queryPortfolioMarginNegativeBalanceInterestHistory($asset, $startTime, $endTime, $size, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryPortfolioMarginNegativeBalanceInterestHistoryResponse
```

Query Portfolio Margin Negative Balance Interest History(USER_DATA)

Query interest history of negative balance for portfolio margin.  * Response in descending order * The max interval between startTime and endTime is 30 days. It is a MUST to ensure data correctness. * If `startTime` and `endTime` not sent, return records of the last 7 days by default * If `startTime` is sent and `endTime` is not sent, the records from `startTime` to the present will be returned; if `startTime` is more than 30 days ago, the records of the past 30 days will be returned. * If `startTime` is not sent and `endTime` is sent, the records of the 7 days before `endTime` is returned.  Weight: 50

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$asset = 'asset_example'; // string
$startTime = 56; // int | Timestamp in ms to get funding from INCLUSIVE.
$endTime = 56; // int | Timestamp in ms to get funding until INCLUSIVE.
$size = 56; // int | Default:10 Max:100
$recvWindow = 56; // int

try {
    $result = $apiInstance->queryPortfolioMarginNegativeBalanceInterestHistory($asset, $startTime, $endTime, $size, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->queryPortfolioMarginNegativeBalanceInterestHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asset** | **string**|  | [optional] |
| **startTime** | **int**| Timestamp in ms to get funding from INCLUSIVE. | [optional] |
| **endTime** | **int**| Timestamp in ms to get funding until INCLUSIVE. | [optional] |
| **size** | **int**| Default:10 Max:100 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryPortfolioMarginNegativeBalanceInterestHistoryResponse**](../Model/QueryPortfolioMarginNegativeBalanceInterestHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryUmPositionInformation()`

```php
queryUmPositionInformation($symbol, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryUmPositionInformationResponse
```

Query UM Position Information(USER_DATA)

Get current UM position information.  * Please use with user data stream `ACCOUNT_UPDATE` to meet your timeliness and accuracy needs. * for One-way Mode user, the response will only show the \"BOTH\" positions * for Hedge Mode user, the response will show \"LONG\", and \"SHORT\" positions.  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$recvWindow = 56; // int

try {
    $result = $apiInstance->queryUmPositionInformation($symbol, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->queryUmPositionInformation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryUmPositionInformationResponse**](../Model/QueryUmPositionInformationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryUserNegativeBalanceAutoExchangeRecord()`

```php
queryUserNegativeBalanceAutoExchangeRecord($startTime, $endTime, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryUserNegativeBalanceAutoExchangeRecordResponse
```

Query User Negative Balance Auto Exchange Record (USER_DATA)

Query user negative balance auto exchange record  * Response in descending order * The max interval between `startTime` and `endTime` is 3 months.  Weight: 100

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startTime = 56; // int
$endTime = 56; // int
$recvWindow = 56; // int

try {
    $result = $apiInstance->queryUserNegativeBalanceAutoExchangeRecord($startTime, $endTime, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->queryUserNegativeBalanceAutoExchangeRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **startTime** | **int**|  | |
| **endTime** | **int**|  | |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryUserNegativeBalanceAutoExchangeRecordResponse**](../Model/QueryUserNegativeBalanceAutoExchangeRecordResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryUserRateLimit()`

```php
queryUserRateLimit($recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryUserRateLimitResponse
```

Query User Rate Limit (USER_DATA)

Query User Rate Limit  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 56; // int

try {
    $result = $apiInstance->queryUserRateLimit($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->queryUserRateLimit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryUserRateLimitResponse**](../Model/QueryUserRateLimitResponse.md)

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
repayFuturesNegativeBalance($repayFuturesNegativeBalanceRequest): \Binance\Client\DerivativesTradingPortfolioMargin\Model\RepayFuturesNegativeBalanceResponse
```

Repay futures Negative Balance(USER_DATA)

Repay futures Negative Balance  Weight: 750

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$repayFuturesNegativeBalanceRequest = new \Binance\Client\DerivativesTradingPortfolioMargin\Model\RepayFuturesNegativeBalanceRequest(); // \Binance\Client\DerivativesTradingPortfolioMargin\Model\RepayFuturesNegativeBalanceRequest

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
| **repayFuturesNegativeBalanceRequest** | [**\Binance\Client\DerivativesTradingPortfolioMargin\Model\RepayFuturesNegativeBalanceRequest**](../Model/RepayFuturesNegativeBalanceRequest.md)|  | |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\RepayFuturesNegativeBalanceResponse**](../Model/RepayFuturesNegativeBalanceResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `umFuturesAccountConfiguration()`

```php
umFuturesAccountConfiguration($recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\UmFuturesAccountConfigurationResponse
```

UM Futures Account Configuration(USER_DATA)

Query UM Futures account configuration  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 56; // int

try {
    $result = $apiInstance->umFuturesAccountConfiguration($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->umFuturesAccountConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\UmFuturesAccountConfigurationResponse**](../Model/UmFuturesAccountConfigurationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `umFuturesSymbolConfiguration()`

```php
umFuturesSymbolConfiguration($symbol, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\UmFuturesSymbolConfigurationResponse
```

UM Futures Symbol Configuration(USER_DATA)

Get current UM account symbol configuration.  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$recvWindow = 56; // int

try {
    $result = $apiInstance->umFuturesSymbolConfiguration($symbol, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->umFuturesSymbolConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\UmFuturesSymbolConfigurationResponse**](../Model/UmFuturesSymbolConfigurationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `umNotionalAndLeverageBrackets()`

```php
umNotionalAndLeverageBrackets($symbol, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\UmNotionalAndLeverageBracketsResponse
```

UM Notional and Leverage Brackets (USER_DATA)

Query UM notional and leverage brackets  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$recvWindow = 56; // int

try {
    $result = $apiInstance->umNotionalAndLeverageBrackets($symbol, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->umNotionalAndLeverageBrackets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\UmNotionalAndLeverageBracketsResponse**](../Model/UmNotionalAndLeverageBracketsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
