# Binance\Client\DerivativesTradingCoinFutures\AccountApi

All URIs are relative to https://dapi.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**accountInformation()**](AccountApi.md#accountInformation) | **GET** /dapi/v1/account | Account Information (USER_DATA) |
| [**futuresAccountBalance()**](AccountApi.md#futuresAccountBalance) | **GET** /dapi/v1/balance | Futures Account Balance (USER_DATA) |
| [**getCurrentPositionMode()**](AccountApi.md#getCurrentPositionMode) | **GET** /dapi/v1/positionSide/dual | Get Current Position Mode(USER_DATA) |
| [**getDownloadIdForFuturesOrderHistory()**](AccountApi.md#getDownloadIdForFuturesOrderHistory) | **GET** /dapi/v1/order/asyn | Get Download Id For Futures Order History (USER_DATA) |
| [**getDownloadIdForFuturesTradeHistory()**](AccountApi.md#getDownloadIdForFuturesTradeHistory) | **GET** /dapi/v1/trade/asyn | Get Download Id For Futures Trade History (USER_DATA) |
| [**getDownloadIdForFuturesTransactionHistory()**](AccountApi.md#getDownloadIdForFuturesTransactionHistory) | **GET** /dapi/v1/income/asyn | Get Download Id For Futures Transaction History(USER_DATA) |
| [**getFuturesOrderHistoryDownloadLinkById()**](AccountApi.md#getFuturesOrderHistoryDownloadLinkById) | **GET** /dapi/v1/order/asyn/id | Get Futures Order History Download Link by Id (USER_DATA) |
| [**getFuturesTradeDownloadLinkById()**](AccountApi.md#getFuturesTradeDownloadLinkById) | **GET** /dapi/v1/trade/asyn/id | Get Futures Trade Download Link by Id(USER_DATA) |
| [**getFuturesTransactionHistoryDownloadLinkById()**](AccountApi.md#getFuturesTransactionHistoryDownloadLinkById) | **GET** /dapi/v1/income/asyn/id | Get Futures Transaction History Download Link by Id (USER_DATA) |
| [**getIncomeHistory()**](AccountApi.md#getIncomeHistory) | **GET** /dapi/v1/income | Get Income History(USER_DATA) |
| [**notionalBracketForPair()**](AccountApi.md#notionalBracketForPair) | **GET** /dapi/v1/leverageBracket | Notional Bracket for Pair(USER_DATA) |
| [**notionalBracketForSymbol()**](AccountApi.md#notionalBracketForSymbol) | **GET** /dapi/v2/leverageBracket | Notional Bracket for Symbol(USER_DATA) |
| [**userCommissionRate()**](AccountApi.md#userCommissionRate) | **GET** /dapi/v1/commissionRate | User Commission Rate (USER_DATA) |


## `accountInformation()`

```php
accountInformation($recvWindow): \Binance\Client\DerivativesTradingCoinFutures\Model\AccountInformationResponse
```

Account Information (USER_DATA)

Get current account information.  * for One-way Mode user, the \"positions\" will only show the \"BOTH\" positions * for Hedge Mode user, the \"positions\" will show \"BOTH\", \"LONG\", and \"SHORT\" positions.  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingCoinFutures\Api\AccountApi(
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

[**\Binance\Client\DerivativesTradingCoinFutures\Model\AccountInformationResponse**](../Model/AccountInformationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `futuresAccountBalance()`

```php
futuresAccountBalance($recvWindow): \Binance\Client\DerivativesTradingCoinFutures\Model\FuturesAccountBalanceResponse
```

Futures Account Balance (USER_DATA)

Check futures account balance  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingCoinFutures\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 56; // int

try {
    $result = $apiInstance->futuresAccountBalance($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->futuresAccountBalance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingCoinFutures\Model\FuturesAccountBalanceResponse**](../Model/FuturesAccountBalanceResponse.md)

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
getCurrentPositionMode($recvWindow): \Binance\Client\DerivativesTradingCoinFutures\Model\GetCurrentPositionModeResponse
```

Get Current Position Mode(USER_DATA)

Get user's position mode (Hedge Mode or One-way Mode ) on ***EVERY symbol***  Weight: 30

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingCoinFutures\Api\AccountApi(
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

[**\Binance\Client\DerivativesTradingCoinFutures\Model\GetCurrentPositionModeResponse**](../Model/GetCurrentPositionModeResponse.md)

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
getDownloadIdForFuturesOrderHistory($startTime, $endTime, $recvWindow): \Binance\Client\DerivativesTradingCoinFutures\Model\GetDownloadIdForFuturesOrderHistoryResponse
```

Get Download Id For Futures Order History (USER_DATA)

Get Download Id For Futures Order History  * Request Limitation is 10 times per month, shared by front end download page and rest api * The time between `startTime` and `endTime` can not be longer than 1 year  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingCoinFutures\Api\AccountApi(
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

[**\Binance\Client\DerivativesTradingCoinFutures\Model\GetDownloadIdForFuturesOrderHistoryResponse**](../Model/GetDownloadIdForFuturesOrderHistoryResponse.md)

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
getDownloadIdForFuturesTradeHistory($startTime, $endTime, $recvWindow): \Binance\Client\DerivativesTradingCoinFutures\Model\GetDownloadIdForFuturesTradeHistoryResponse
```

Get Download Id For Futures Trade History (USER_DATA)

Get download id for futures trade history  * Request Limitation is 5 times per month, shared by front end download page and rest api * The time between `startTime` and `endTime` can not be longer than 1 year  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingCoinFutures\Api\AccountApi(
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

[**\Binance\Client\DerivativesTradingCoinFutures\Model\GetDownloadIdForFuturesTradeHistoryResponse**](../Model/GetDownloadIdForFuturesTradeHistoryResponse.md)

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
getDownloadIdForFuturesTransactionHistory($startTime, $endTime, $recvWindow): \Binance\Client\DerivativesTradingCoinFutures\Model\GetDownloadIdForFuturesTransactionHistoryResponse
```

Get Download Id For Futures Transaction History(USER_DATA)

Get download id for futures transaction history  * Request Limitation is 5 times per month, shared by front end download page and rest api * The time between `startTime` and `endTime` can not be longer than 1 year  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingCoinFutures\Api\AccountApi(
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

[**\Binance\Client\DerivativesTradingCoinFutures\Model\GetDownloadIdForFuturesTransactionHistoryResponse**](../Model/GetDownloadIdForFuturesTransactionHistoryResponse.md)

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
getFuturesOrderHistoryDownloadLinkById($downloadId, $recvWindow): \Binance\Client\DerivativesTradingCoinFutures\Model\GetFuturesOrderHistoryDownloadLinkByIdResponse
```

Get Futures Order History Download Link by Id (USER_DATA)

Get futures order history download link by Id  * Download link expiration: 24h  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingCoinFutures\Api\AccountApi(
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

[**\Binance\Client\DerivativesTradingCoinFutures\Model\GetFuturesOrderHistoryDownloadLinkByIdResponse**](../Model/GetFuturesOrderHistoryDownloadLinkByIdResponse.md)

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
getFuturesTradeDownloadLinkById($downloadId, $recvWindow): \Binance\Client\DerivativesTradingCoinFutures\Model\GetFuturesTradeDownloadLinkByIdResponse
```

Get Futures Trade Download Link by Id(USER_DATA)

Get futures trade download link by Id  * Download link expiration: 24h  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingCoinFutures\Api\AccountApi(
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

[**\Binance\Client\DerivativesTradingCoinFutures\Model\GetFuturesTradeDownloadLinkByIdResponse**](../Model/GetFuturesTradeDownloadLinkByIdResponse.md)

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
getFuturesTransactionHistoryDownloadLinkById($downloadId, $recvWindow): \Binance\Client\DerivativesTradingCoinFutures\Model\GetFuturesTransactionHistoryDownloadLinkByIdResponse
```

Get Futures Transaction History Download Link by Id (USER_DATA)

Get futures transaction history download link by Id  * Download link expiration: 24h  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingCoinFutures\Api\AccountApi(
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

[**\Binance\Client\DerivativesTradingCoinFutures\Model\GetFuturesTransactionHistoryDownloadLinkByIdResponse**](../Model/GetFuturesTransactionHistoryDownloadLinkByIdResponse.md)

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
getIncomeHistory($symbol, $incomeType, $startTime, $endTime, $page, $limit, $recvWindow): \Binance\Client\DerivativesTradingCoinFutures\Model\GetIncomeHistoryResponse
```

Get Income History(USER_DATA)

Get income history  * If `incomeType ` is not sent, all kinds of flow will be returned * \"trandId\" is unique in the same \"incomeType\" for a user * The time between `startTime` and `endTime` can not be longer than 1 year  Weight: 20

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingCoinFutures\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$incomeType = 'incomeType_example'; // string | \"TRANSFER\",\"WELCOME_BONUS\", \"FUNDING_FEE\", \"REALIZED_PNL\", \"COMMISSION\", \"INSURANCE_CLEAR\", and \"DELIVERED_SETTELMENT\"
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
| **incomeType** | **string**| \&quot;TRANSFER\&quot;,\&quot;WELCOME_BONUS\&quot;, \&quot;FUNDING_FEE\&quot;, \&quot;REALIZED_PNL\&quot;, \&quot;COMMISSION\&quot;, \&quot;INSURANCE_CLEAR\&quot;, and \&quot;DELIVERED_SETTELMENT\&quot; | [optional] |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **page** | **int**|  | [optional] |
| **limit** | **int**| Default 100; max 1000 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingCoinFutures\Model\GetIncomeHistoryResponse**](../Model/GetIncomeHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `notionalBracketForPair()`

```php
notionalBracketForPair($pair, $recvWindow): \Binance\Client\DerivativesTradingCoinFutures\Model\NotionalBracketForPairResponse
```

Notional Bracket for Pair(USER_DATA)

**Not recommended to continue using this v1 endpoint**  Get the pair's default notional bracket list, may return ambiguous values when there have been multiple different `symbol` brackets under the `pair`, suggest using the following `GET /dapi/v2/leverageBracket` query instead to get the specific `symbol` notional bracket list.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingCoinFutures\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$pair = 'pair_example'; // string
$recvWindow = 56; // int

try {
    $result = $apiInstance->notionalBracketForPair($pair, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->notionalBracketForPair: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pair** | **string**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingCoinFutures\Model\NotionalBracketForPairResponse**](../Model/NotionalBracketForPairResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `notionalBracketForSymbol()`

```php
notionalBracketForSymbol($symbol, $recvWindow): \Binance\Client\DerivativesTradingCoinFutures\Model\NotionalBracketForSymbolResponse
```

Notional Bracket for Symbol(USER_DATA)

Get the symbol's notional bracket list.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingCoinFutures\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$recvWindow = 56; // int

try {
    $result = $apiInstance->notionalBracketForSymbol($symbol, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->notionalBracketForSymbol: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingCoinFutures\Model\NotionalBracketForSymbolResponse**](../Model/NotionalBracketForSymbolResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userCommissionRate()`

```php
userCommissionRate($symbol, $recvWindow): \Binance\Client\DerivativesTradingCoinFutures\Model\UserCommissionRateResponse
```

User Commission Rate (USER_DATA)

Query user commission rate  Weight: 20

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingCoinFutures\Api\AccountApi(
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

[**\Binance\Client\DerivativesTradingCoinFutures\Model\UserCommissionRateResponse**](../Model/UserCommissionRateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
