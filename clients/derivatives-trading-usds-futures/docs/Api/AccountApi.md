# Binance\Client\DerivativesTradingUsdsFutures\AccountApi

All URIs are relative to https://fapi.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**accountInformationV2()**](AccountApi.md#accountInformationV2) | **GET** /fapi/v2/account | Account Information V2(USER_DATA) |
| [**accountInformationV3()**](AccountApi.md#accountInformationV3) | **GET** /fapi/v3/account | Account Information V3(USER_DATA) |
| [**futuresAccountBalanceV2()**](AccountApi.md#futuresAccountBalanceV2) | **GET** /fapi/v2/balance | Futures Account Balance V2 (USER_DATA) |
| [**futuresAccountBalanceV3()**](AccountApi.md#futuresAccountBalanceV3) | **GET** /fapi/v3/balance | Futures Account Balance V3 (USER_DATA) |
| [**futuresAccountConfiguration()**](AccountApi.md#futuresAccountConfiguration) | **GET** /fapi/v1/accountConfig | Futures Account Configuration(USER_DATA) |
| [**futuresTradingQuantitativeRulesIndicators()**](AccountApi.md#futuresTradingQuantitativeRulesIndicators) | **GET** /fapi/v1/apiTradingStatus | Futures Trading Quantitative Rules Indicators (USER_DATA) |
| [**getBnbBurnStatus()**](AccountApi.md#getBnbBurnStatus) | **GET** /fapi/v1/feeBurn | Get BNB Burn Status (USER_DATA) |
| [**getCurrentMultiAssetsMode()**](AccountApi.md#getCurrentMultiAssetsMode) | **GET** /fapi/v1/multiAssetsMargin | Get Current Multi-Assets Mode (USER_DATA) |
| [**getCurrentPositionMode()**](AccountApi.md#getCurrentPositionMode) | **GET** /fapi/v1/positionSide/dual | Get Current Position Mode(USER_DATA) |
| [**getDownloadIdForFuturesOrderHistory()**](AccountApi.md#getDownloadIdForFuturesOrderHistory) | **GET** /fapi/v1/order/asyn | Get Download Id For Futures Order History (USER_DATA) |
| [**getDownloadIdForFuturesTradeHistory()**](AccountApi.md#getDownloadIdForFuturesTradeHistory) | **GET** /fapi/v1/trade/asyn | Get Download Id For Futures Trade History (USER_DATA) |
| [**getDownloadIdForFuturesTransactionHistory()**](AccountApi.md#getDownloadIdForFuturesTransactionHistory) | **GET** /fapi/v1/income/asyn | Get Download Id For Futures Transaction History(USER_DATA) |
| [**getFuturesOrderHistoryDownloadLinkById()**](AccountApi.md#getFuturesOrderHistoryDownloadLinkById) | **GET** /fapi/v1/order/asyn/id | Get Futures Order History Download Link by Id (USER_DATA) |
| [**getFuturesTradeDownloadLinkById()**](AccountApi.md#getFuturesTradeDownloadLinkById) | **GET** /fapi/v1/trade/asyn/id | Get Futures Trade Download Link by Id(USER_DATA) |
| [**getFuturesTransactionHistoryDownloadLinkById()**](AccountApi.md#getFuturesTransactionHistoryDownloadLinkById) | **GET** /fapi/v1/income/asyn/id | Get Futures Transaction History Download Link by Id (USER_DATA) |
| [**getIncomeHistory()**](AccountApi.md#getIncomeHistory) | **GET** /fapi/v1/income | Get Income History (USER_DATA) |
| [**notionalAndLeverageBrackets()**](AccountApi.md#notionalAndLeverageBrackets) | **GET** /fapi/v1/leverageBracket | Notional and Leverage Brackets (USER_DATA) |
| [**queryUserRateLimit()**](AccountApi.md#queryUserRateLimit) | **GET** /fapi/v1/rateLimit/order | Query User Rate Limit (USER_DATA) |
| [**symbolConfiguration()**](AccountApi.md#symbolConfiguration) | **GET** /fapi/v1/symbolConfig | Symbol Configuration(USER_DATA) |
| [**toggleBnbBurnOnFuturesTrade()**](AccountApi.md#toggleBnbBurnOnFuturesTrade) | **POST** /fapi/v1/feeBurn | Toggle BNB Burn On Futures Trade (TRADE) |
| [**userCommissionRate()**](AccountApi.md#userCommissionRate) | **GET** /fapi/v1/commissionRate | User Commission Rate (USER_DATA) |


## `accountInformationV2()`

```php
accountInformationV2($recvWindow): \Binance\Client\DerivativesTradingUsdsFutures\Model\AccountInformationV2Response
```

Account Information V2(USER_DATA)

Get current account information. User in single-asset/ multi-assets mode will see different value, see comments in response section for detail.  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 56; // int

try {
    $result = $apiInstance->accountInformationV2($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountInformationV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\AccountInformationV2Response**](../Model/AccountInformationV2Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountInformationV3()`

```php
accountInformationV3($recvWindow): \Binance\Client\DerivativesTradingUsdsFutures\Model\AccountInformationV3Response
```

Account Information V3(USER_DATA)

Get current account information. User in single-asset/ multi-assets mode will see different value, see comments in response section for detail.  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 56; // int

try {
    $result = $apiInstance->accountInformationV3($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountInformationV3: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\AccountInformationV3Response**](../Model/AccountInformationV3Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `futuresAccountBalanceV2()`

```php
futuresAccountBalanceV2($recvWindow): \Binance\Client\DerivativesTradingUsdsFutures\Model\FuturesAccountBalanceV2Response
```

Futures Account Balance V2 (USER_DATA)

Query account balance info  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 56; // int

try {
    $result = $apiInstance->futuresAccountBalanceV2($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->futuresAccountBalanceV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\FuturesAccountBalanceV2Response**](../Model/FuturesAccountBalanceV2Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `futuresAccountBalanceV3()`

```php
futuresAccountBalanceV3($recvWindow): \Binance\Client\DerivativesTradingUsdsFutures\Model\FuturesAccountBalanceV3Response
```

Futures Account Balance V3 (USER_DATA)

Query account balance info  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 56; // int

try {
    $result = $apiInstance->futuresAccountBalanceV3($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->futuresAccountBalanceV3: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\FuturesAccountBalanceV3Response**](../Model/FuturesAccountBalanceV3Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `futuresAccountConfiguration()`

```php
futuresAccountConfiguration($recvWindow): \Binance\Client\DerivativesTradingUsdsFutures\Model\FuturesAccountConfigurationResponse
```

Futures Account Configuration(USER_DATA)

Query account configuration  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 56; // int

try {
    $result = $apiInstance->futuresAccountConfiguration($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->futuresAccountConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\FuturesAccountConfigurationResponse**](../Model/FuturesAccountConfigurationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `futuresTradingQuantitativeRulesIndicators()`

```php
futuresTradingQuantitativeRulesIndicators($symbol, $recvWindow): \Binance\Client\DerivativesTradingUsdsFutures\Model\FuturesTradingQuantitativeRulesIndicatorsResponse
```

Futures Trading Quantitative Rules Indicators (USER_DATA)

Futures trading quantitative rules indicators, for more information on this, please refer to the [Futures Trading Quantitative Rules](https://www.binance.com/en/support/faq/4f462ebe6ff445d4a170be7d9e897272)  Weight: - 1 for a single symbol - 10 when the symbol parameter is omitted

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$recvWindow = 56; // int

try {
    $result = $apiInstance->futuresTradingQuantitativeRulesIndicators($symbol, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->futuresTradingQuantitativeRulesIndicators: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\FuturesTradingQuantitativeRulesIndicatorsResponse**](../Model/FuturesTradingQuantitativeRulesIndicatorsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBnbBurnStatus()`

```php
getBnbBurnStatus($recvWindow): \Binance\Client\DerivativesTradingUsdsFutures\Model\GetBnbBurnStatusResponse
```

Get BNB Burn Status (USER_DATA)

Get user's BNB Fee Discount (Fee Discount On or Fee Discount Off )  Weight: 30

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 56; // int

try {
    $result = $apiInstance->getBnbBurnStatus($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getBnbBurnStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\GetBnbBurnStatusResponse**](../Model/GetBnbBurnStatusResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCurrentMultiAssetsMode()`

```php
getCurrentMultiAssetsMode($recvWindow): \Binance\Client\DerivativesTradingUsdsFutures\Model\GetCurrentMultiAssetsModeResponse
```

Get Current Multi-Assets Mode (USER_DATA)

Get user's Multi-Assets mode (Multi-Assets Mode or Single-Asset Mode) on ***Every symbol***  Weight: 30

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 56; // int

try {
    $result = $apiInstance->getCurrentMultiAssetsMode($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getCurrentMultiAssetsMode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\GetCurrentMultiAssetsModeResponse**](../Model/GetCurrentMultiAssetsModeResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCurrentPositionMode()`

```php
getCurrentPositionMode($recvWindow): \Binance\Client\DerivativesTradingUsdsFutures\Model\GetCurrentPositionModeResponse
```

Get Current Position Mode(USER_DATA)

Get user's position mode (Hedge Mode or One-way Mode ) on ***EVERY symbol***  Weight: 30

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 56; // int

try {
    $result = $apiInstance->getCurrentPositionMode($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getCurrentPositionMode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\GetCurrentPositionModeResponse**](../Model/GetCurrentPositionModeResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDownloadIdForFuturesOrderHistory()`

```php
getDownloadIdForFuturesOrderHistory($startTime, $endTime, $recvWindow): \Binance\Client\DerivativesTradingUsdsFutures\Model\GetDownloadIdForFuturesOrderHistoryResponse
```

Get Download Id For Futures Order History (USER_DATA)

Get Download Id For Futures Order History  * Request Limitation is 10 times per month, shared by front end download page and rest api * The time between `startTime` and `endTime` can not be longer than 1 year  Weight: 1000

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startTime = 56; // int | Timestamp in ms
$endTime = 56; // int | Timestamp in ms
$recvWindow = 56; // int

try {
    $result = $apiInstance->getDownloadIdForFuturesOrderHistory($startTime, $endTime, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getDownloadIdForFuturesOrderHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **startTime** | **int**| Timestamp in ms | |
| **endTime** | **int**| Timestamp in ms | |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\GetDownloadIdForFuturesOrderHistoryResponse**](../Model/GetDownloadIdForFuturesOrderHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDownloadIdForFuturesTradeHistory()`

```php
getDownloadIdForFuturesTradeHistory($startTime, $endTime, $recvWindow): \Binance\Client\DerivativesTradingUsdsFutures\Model\GetDownloadIdForFuturesTradeHistoryResponse
```

Get Download Id For Futures Trade History (USER_DATA)

Get download id for futures trade history  * Request Limitation is 5 times per month, shared by front end download page and rest api * The time between `startTime` and `endTime` can not be longer than 1 year  Weight: 1000

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startTime = 56; // int | Timestamp in ms
$endTime = 56; // int | Timestamp in ms
$recvWindow = 56; // int

try {
    $result = $apiInstance->getDownloadIdForFuturesTradeHistory($startTime, $endTime, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getDownloadIdForFuturesTradeHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **startTime** | **int**| Timestamp in ms | |
| **endTime** | **int**| Timestamp in ms | |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\GetDownloadIdForFuturesTradeHistoryResponse**](../Model/GetDownloadIdForFuturesTradeHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDownloadIdForFuturesTransactionHistory()`

```php
getDownloadIdForFuturesTransactionHistory($startTime, $endTime, $recvWindow): \Binance\Client\DerivativesTradingUsdsFutures\Model\GetDownloadIdForFuturesTransactionHistoryResponse
```

Get Download Id For Futures Transaction History(USER_DATA)

Get download id for futures transaction history  * Request Limitation is 5 times per month, shared by front end download page and rest api * The time between `startTime` and `endTime` can not be longer than 1 year  Weight: 1000

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startTime = 56; // int | Timestamp in ms
$endTime = 56; // int | Timestamp in ms
$recvWindow = 56; // int

try {
    $result = $apiInstance->getDownloadIdForFuturesTransactionHistory($startTime, $endTime, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getDownloadIdForFuturesTransactionHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **startTime** | **int**| Timestamp in ms | |
| **endTime** | **int**| Timestamp in ms | |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\GetDownloadIdForFuturesTransactionHistoryResponse**](../Model/GetDownloadIdForFuturesTransactionHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFuturesOrderHistoryDownloadLinkById()`

```php
getFuturesOrderHistoryDownloadLinkById($downloadId, $recvWindow): \Binance\Client\DerivativesTradingUsdsFutures\Model\GetFuturesOrderHistoryDownloadLinkByIdResponse
```

Get Futures Order History Download Link by Id (USER_DATA)

Get futures order history download link by Id  * Download link expiration: 24h  Weight: 10

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$downloadId = 'downloadId_example'; // string | get by download id api
$recvWindow = 56; // int

try {
    $result = $apiInstance->getFuturesOrderHistoryDownloadLinkById($downloadId, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getFuturesOrderHistoryDownloadLinkById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **downloadId** | **string**| get by download id api | |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\GetFuturesOrderHistoryDownloadLinkByIdResponse**](../Model/GetFuturesOrderHistoryDownloadLinkByIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFuturesTradeDownloadLinkById()`

```php
getFuturesTradeDownloadLinkById($downloadId, $recvWindow): \Binance\Client\DerivativesTradingUsdsFutures\Model\GetFuturesTradeDownloadLinkByIdResponse
```

Get Futures Trade Download Link by Id(USER_DATA)

Get futures trade download link by Id  * Download link expiration: 24h  Weight: 10

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$downloadId = 'downloadId_example'; // string | get by download id api
$recvWindow = 56; // int

try {
    $result = $apiInstance->getFuturesTradeDownloadLinkById($downloadId, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getFuturesTradeDownloadLinkById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **downloadId** | **string**| get by download id api | |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\GetFuturesTradeDownloadLinkByIdResponse**](../Model/GetFuturesTradeDownloadLinkByIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFuturesTransactionHistoryDownloadLinkById()`

```php
getFuturesTransactionHistoryDownloadLinkById($downloadId, $recvWindow): \Binance\Client\DerivativesTradingUsdsFutures\Model\GetFuturesTransactionHistoryDownloadLinkByIdResponse
```

Get Futures Transaction History Download Link by Id (USER_DATA)

Get futures transaction history download link by Id  * Download link expiration: 24h  Weight: 10

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$downloadId = 'downloadId_example'; // string | get by download id api
$recvWindow = 56; // int

try {
    $result = $apiInstance->getFuturesTransactionHistoryDownloadLinkById($downloadId, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getFuturesTransactionHistoryDownloadLinkById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **downloadId** | **string**| get by download id api | |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\GetFuturesTransactionHistoryDownloadLinkByIdResponse**](../Model/GetFuturesTransactionHistoryDownloadLinkByIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIncomeHistory()`

```php
getIncomeHistory($symbol, $incomeType, $startTime, $endTime, $page, $limit, $recvWindow): \Binance\Client\DerivativesTradingUsdsFutures\Model\GetIncomeHistoryResponse
```

Get Income History (USER_DATA)

Query income history  * If neither `startTime` nor `endTime` is sent, the recent 7-day data will be returned. * If `incomeType ` is not sent, all kinds of flow will be returned * \"trandId\" is unique in the same incomeType for a user * Income history only contains data for the last three months  Weight: 30

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$incomeType = 'incomeType_example'; // string | TRANSFER, WELCOME_BONUS, REALIZED_PNL, FUNDING_FEE, COMMISSION, INSURANCE_CLEAR, REFERRAL_KICKBACK, COMMISSION_REBATE, API_REBATE, CONTEST_REWARD, CROSS_COLLATERAL_TRANSFER, OPTIONS_PREMIUM_FEE, OPTIONS_SETTLE_PROFIT, INTERNAL_TRANSFER, AUTO_EXCHANGE, DELIVERED_SETTELMENT, COIN_SWAP_DEPOSIT, COIN_SWAP_WITHDRAW, POSITION_LIMIT_INCREASE_FEE, STRATEGY_UMFUTURES_TRANSFER，FEE_RETURN，BFUSD_REWARD
$startTime = 56; // int
$endTime = 56; // int
$page = 56; // int
$limit = 56; // int | Default 100; max 1000
$recvWindow = 56; // int

try {
    $result = $apiInstance->getIncomeHistory($symbol, $incomeType, $startTime, $endTime, $page, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getIncomeHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | [optional] |
| **incomeType** | **string**| TRANSFER, WELCOME_BONUS, REALIZED_PNL, FUNDING_FEE, COMMISSION, INSURANCE_CLEAR, REFERRAL_KICKBACK, COMMISSION_REBATE, API_REBATE, CONTEST_REWARD, CROSS_COLLATERAL_TRANSFER, OPTIONS_PREMIUM_FEE, OPTIONS_SETTLE_PROFIT, INTERNAL_TRANSFER, AUTO_EXCHANGE, DELIVERED_SETTELMENT, COIN_SWAP_DEPOSIT, COIN_SWAP_WITHDRAW, POSITION_LIMIT_INCREASE_FEE, STRATEGY_UMFUTURES_TRANSFER，FEE_RETURN，BFUSD_REWARD | [optional] |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **page** | **int**|  | [optional] |
| **limit** | **int**| Default 100; max 1000 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\GetIncomeHistoryResponse**](../Model/GetIncomeHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `notionalAndLeverageBrackets()`

```php
notionalAndLeverageBrackets($symbol, $recvWindow): \Binance\Client\DerivativesTradingUsdsFutures\Model\NotionalAndLeverageBracketsResponse
```

Notional and Leverage Brackets (USER_DATA)

Query user notional and leverage bracket on speicfic symbol  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$recvWindow = 56; // int

try {
    $result = $apiInstance->notionalAndLeverageBrackets($symbol, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->notionalAndLeverageBrackets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\NotionalAndLeverageBracketsResponse**](../Model/NotionalAndLeverageBracketsResponse.md)

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
queryUserRateLimit($recvWindow): \Binance\Client\DerivativesTradingUsdsFutures\Model\QueryUserRateLimitResponse
```

Query User Rate Limit (USER_DATA)

Query User Rate Limit  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\AccountApi(
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

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\QueryUserRateLimitResponse**](../Model/QueryUserRateLimitResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `symbolConfiguration()`

```php
symbolConfiguration($symbol, $recvWindow): \Binance\Client\DerivativesTradingUsdsFutures\Model\SymbolConfigurationResponse
```

Symbol Configuration(USER_DATA)

Get current account symbol configuration.  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$recvWindow = 56; // int

try {
    $result = $apiInstance->symbolConfiguration($symbol, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->symbolConfiguration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\SymbolConfigurationResponse**](../Model/SymbolConfigurationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `toggleBnbBurnOnFuturesTrade()`

```php
toggleBnbBurnOnFuturesTrade($toggleBnbBurnOnFuturesTradeRequest): \Binance\Client\DerivativesTradingUsdsFutures\Model\ToggleBnbBurnOnFuturesTradeResponse
```

Toggle BNB Burn On Futures Trade (TRADE)

Change user's BNB Fee Discount (Fee Discount On or Fee Discount Off ) on ***EVERY symbol***  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$toggleBnbBurnOnFuturesTradeRequest = new \Binance\Client\DerivativesTradingUsdsFutures\Model\ToggleBnbBurnOnFuturesTradeRequest(); // \Binance\Client\DerivativesTradingUsdsFutures\Model\ToggleBnbBurnOnFuturesTradeRequest

try {
    $result = $apiInstance->toggleBnbBurnOnFuturesTrade($toggleBnbBurnOnFuturesTradeRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->toggleBnbBurnOnFuturesTrade: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **toggleBnbBurnOnFuturesTradeRequest** | [**\Binance\Client\DerivativesTradingUsdsFutures\Model\ToggleBnbBurnOnFuturesTradeRequest**](../Model/ToggleBnbBurnOnFuturesTradeRequest.md)|  | |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\ToggleBnbBurnOnFuturesTradeResponse**](../Model/ToggleBnbBurnOnFuturesTradeResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userCommissionRate()`

```php
userCommissionRate($symbol, $recvWindow): \Binance\Client\DerivativesTradingUsdsFutures\Model\UserCommissionRateResponse
```

User Commission Rate (USER_DATA)

Get User Commission Rate  Weight: 20

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$recvWindow = 56; // int

try {
    $result = $apiInstance->userCommissionRate($symbol, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->userCommissionRate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\UserCommissionRateResponse**](../Model/UserCommissionRateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
