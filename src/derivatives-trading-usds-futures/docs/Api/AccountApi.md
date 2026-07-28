# Binance\Client\DerivativesTradingUsdsFutures\AccountApi



All URIs are relative to https://fapi.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**accountInformationV2()**](AccountApi.md#accountInformationV2) | **GET** /fapi/v2/account | Account Information V2 (USER_DATA) |
| [**accountInformationV3()**](AccountApi.md#accountInformationV3) | **GET** /fapi/v3/account | Account Information V3 (USER_DATA) |
| [**futuresAccountBalanceV2()**](AccountApi.md#futuresAccountBalanceV2) | **GET** /fapi/v2/balance | Futures Account Balance V2 (USER_DATA) |
| [**futuresAccountBalanceV3()**](AccountApi.md#futuresAccountBalanceV3) | **GET** /fapi/v3/balance | Futures Account Balance V3 (USER_DATA) |
| [**futuresAccountConfiguration()**](AccountApi.md#futuresAccountConfiguration) | **GET** /fapi/v1/accountConfig | Futures Account Configuration (USER_DATA) |
| [**futuresTradingQuantitativeRulesIndicators()**](AccountApi.md#futuresTradingQuantitativeRulesIndicators) | **GET** /fapi/v1/apiTradingStatus | Futures Trading Quantitative Rules Indicators (USER_DATA) |
| [**getBnbBurnStatus()**](AccountApi.md#getBnbBurnStatus) | **GET** /fapi/v1/feeBurn | Get BNB Burn Status (USER_DATA) |
| [**getCurrentMultiAssetsMode()**](AccountApi.md#getCurrentMultiAssetsMode) | **GET** /fapi/v1/multiAssetsMargin | Get Current Multi-Assets Mode (USER_DATA) |
| [**getCurrentPositionMode()**](AccountApi.md#getCurrentPositionMode) | **GET** /fapi/v1/positionSide/dual | Get Current Position Mode (USER_DATA) |
| [**getDownloadIdForFuturesOrderHistory()**](AccountApi.md#getDownloadIdForFuturesOrderHistory) | **GET** /fapi/v1/order/asyn | Get Download Id For Futures Order History (USER_DATA) |
| [**getDownloadIdForFuturesTradeHistory()**](AccountApi.md#getDownloadIdForFuturesTradeHistory) | **GET** /fapi/v1/trade/asyn | Get Download Id For Futures Trade History (USER_DATA) |
| [**getDownloadIdForFuturesTransactionHistory()**](AccountApi.md#getDownloadIdForFuturesTransactionHistory) | **GET** /fapi/v1/income/asyn | Get Download Id For Futures Transaction History (USER_DATA) |
| [**getFuturesOrderHistoryDownloadLinkById()**](AccountApi.md#getFuturesOrderHistoryDownloadLinkById) | **GET** /fapi/v1/order/asyn/id | Get Futures Order History Download Link by Id (USER_DATA) |
| [**getFuturesTradeDownloadLinkById()**](AccountApi.md#getFuturesTradeDownloadLinkById) | **GET** /fapi/v1/trade/asyn/id | Get Futures Trade Download Link by Id (USER_DATA) |
| [**getFuturesTransactionHistoryDownloadLinkById()**](AccountApi.md#getFuturesTransactionHistoryDownloadLinkById) | **GET** /fapi/v1/income/asyn/id | Get Futures Transaction History Download Link by Id (USER_DATA) |
| [**getIncomeHistory()**](AccountApi.md#getIncomeHistory) | **GET** /fapi/v1/income | Get Income History (USER_DATA) |
| [**notionalAndLeverageBrackets()**](AccountApi.md#notionalAndLeverageBrackets) | **GET** /fapi/v1/leverageBracket | Notional and Leverage Brackets (USER_DATA) |
| [**queryUserRateLimit()**](AccountApi.md#queryUserRateLimit) | **GET** /fapi/v1/rateLimit/order | Query User Rate Limit (USER_DATA) |
| [**symbolConfiguration()**](AccountApi.md#symbolConfiguration) | **GET** /fapi/v1/symbolConfig | Symbol Configuration (USER_DATA) |
| [**toggleBnbBurnOnFuturesTrade()**](AccountApi.md#toggleBnbBurnOnFuturesTrade) | **POST** /fapi/v1/feeBurn | Toggle BNB Burn On Futures Trade (TRADE) |
| [**userCommissionRate()**](AccountApi.md#userCommissionRate) | **GET** /fapi/v1/commissionRate | User Commission Rate (USER_DATA) |


## `accountInformationV2()`

```php
accountInformationV2($recvWindow): \Binance\Client\DerivativesTradingUsdsFutures\Model\AccountInformationV2Response
```

Account Information V2 (USER_DATA)

Get current account information. User in single-asset/ multi-assets mode will see different value, see comments in response section for detail.  Weight(IP): 5  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 5000; // int

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

Account Information V3 (USER_DATA)

Get current account information. User in single-asset/ multi-assets mode will see different value, see comments in response section for detail.  Weight(IP): 5  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 5000; // int

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

Query account balance information.  Weight(IP): 5  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 5000; // int

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

Query account balance information.  Weight(IP): 5  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 5000; // int

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

Futures Account Configuration (USER_DATA)

Query account configuration  Weight(IP): 5  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 5000; // int

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

Futures trading quantitative rules indicators, for more information on this, please refer to the [Futures Trading Quantitative Rules](https://www.binance.com/en/support/faq/4f462ebe6ff445d4a170be7d9e897272)  Weight: - **1** for a single symbol - **10** when the symbol parameter is omitted  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSDT; // string
$recvWindow = 5000; // int

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

Get user's BNB Fee Discount (Fee Discount On or Fee Discount Off )  Weight(IP): 30  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 5000; // int

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

Get user's Multi-Assets mode (Multi-Assets Mode or Single-Asset Mode) on ***Every symbol***  Weight(IP): 30  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 5000; // int

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

Get Current Position Mode (USER_DATA)

Get user's position mode (Hedge Mode or One-way Mode ) on ***EVERY symbol***  Weight(IP): 30  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 5000; // int

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

Get Download Id For Futures Order History  Weight(IP): 1000  Security Type: USER_DATA  Notes: - Request Limitation is 10 times per month, shared by front end download page and rest api - The time between `startTime` and `endTime` can not be longer than 1 year

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startTime = 1623319461670; // int | Timestamp in ms
$endTime = 1641782889000; // int | Timestamp in ms
$recvWindow = 5000; // int

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

Get download id for futures trade history  Weight(IP): 1000  Security Type: USER_DATA  Notes: - Request Limitation is 5 times per month, shared by front end download page and rest api - The time between `startTime` and `endTime` can not be longer than 1 year

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startTime = 1623319461670; // int | Timestamp in ms
$endTime = 1641782889000; // int | Timestamp in ms
$recvWindow = 5000; // int

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

Get Download Id For Futures Transaction History (USER_DATA)

Get download id for futures transaction history  Weight(IP): 1000  Security Type: USER_DATA  Notes: - Request Limitation is 5 times per month, shared by front end download page and rest api - The time between `startTime` and `endTime` can not be longer than 1 year

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startTime = 1623319461670; // int | Timestamp in ms
$endTime = 1641782889000; // int | Timestamp in ms
$recvWindow = 5000; // int

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

Get futures order history download link by Id  Weight(IP): 10  Security Type: USER_DATA  Notes: - Download link expiration: 7 days

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$downloadId = 545923594199212032; // string | get by download id api
$recvWindow = 5000; // int

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

Get Futures Trade Download Link by Id (USER_DATA)

Get futures trade download link by Id  Weight(IP): 10  Security Type: USER_DATA  Notes: - Download link expiration: 7 days

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$downloadId = 545923594199212032; // string | get by download id api
$recvWindow = 5000; // int

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

Get futures transaction history download link by Id  Weight(IP): 10  Security Type: USER_DATA  Notes: - Download link expiration: 7 days

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$downloadId = 545923594199212032; // string | get by download id api
$recvWindow = 5000; // int

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

Query income history  Weight(IP): 30  Security Type: USER_DATA  Notes: - If `incomeType ` is not sent, all kinds of flow will be returned - If `startTime` and `endTime` are not sent, the recent 7-day data will be returned. - `trandId` is unique in the same `incomeType` for a user. - Income history only contains data for the last three months.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSDT; // string | Trading symbol.
$incomeType = new \Binance\Client\DerivativesTradingUsdsFutures\Model\\Binance\Client\DerivativesTradingUsdsFutures\Model\IncomeType(); // \Binance\Client\DerivativesTradingUsdsFutures\Model\IncomeType | Income type.
$startTime = 1623319461670; // int | Timestamp in milliseconds (inclusive start).
$endTime = 1641782889000; // int | Timestamp in milliseconds (inclusive end).
$page = 1; // int | Pagination page number.
$limit = 30; // int | Maximum number of records to return.
$recvWindow = 5000; // int

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
| **symbol** | **string**| Trading symbol. | [optional] |
| **incomeType** | [**\Binance\Client\DerivativesTradingUsdsFutures\Model\IncomeType**](../Model/.md)| Income type. | [optional] |
| **startTime** | **int**| Timestamp in milliseconds (inclusive start). | [optional] |
| **endTime** | **int**| Timestamp in milliseconds (inclusive end). | [optional] |
| **page** | **int**| Pagination page number. | [optional] |
| **limit** | **int**| Maximum number of records to return. | [optional] |
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

Query user notional and leverage bracket on speicfic symbol  Weight(IP): 1  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = ETHUSDT; // string
$recvWindow = 5000; // int

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

Query User Rate Limit  Weight(IP): 1  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 5000; // int

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

Symbol Configuration (USER_DATA)

Get current account symbol configuration.  Weight(IP): 5  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSDT; // string | Symbol
$recvWindow = 5000; // int

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
| **symbol** | **string**| Symbol | [optional] |
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

Change user's BNB Fee Discount (Fee Discount On or Fee Discount Off ) on ***EVERY symbol***  Weight(IP): 1  Security Type: TRADE

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

Get User Commission Rate  Weight(IP): 20  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSDT; // string | Symbol
$recvWindow = 5000; // int

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
| **symbol** | **string**| Symbol | |
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
