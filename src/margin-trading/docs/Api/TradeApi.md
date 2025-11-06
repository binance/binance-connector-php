# Binance\Client\MarginTrading\TradeApi

All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSpecialKey()**](TradeApi.md#createSpecialKey) | **POST** /sapi/v1/margin/apiKey | Create Special Key(Low-Latency Trading)(TRADE) |
| [**deleteSpecialKey()**](TradeApi.md#deleteSpecialKey) | **DELETE** /sapi/v1/margin/apiKey | Delete Special Key(Low-Latency Trading)(TRADE) |
| [**editIpForSpecialKey()**](TradeApi.md#editIpForSpecialKey) | **PUT** /sapi/v1/margin/apiKey/ip | Edit ip for Special Key(Low-Latency Trading)(TRADE) |
| [**getForceLiquidationRecord()**](TradeApi.md#getForceLiquidationRecord) | **GET** /sapi/v1/margin/forceLiquidationRec | Get Force Liquidation Record (USER_DATA) |
| [**getSmallLiabilityExchangeCoinList()**](TradeApi.md#getSmallLiabilityExchangeCoinList) | **GET** /sapi/v1/margin/exchange-small-liability | Get Small Liability Exchange Coin List (USER_DATA) |
| [**getSmallLiabilityExchangeHistory()**](TradeApi.md#getSmallLiabilityExchangeHistory) | **GET** /sapi/v1/margin/exchange-small-liability-history | Get Small Liability Exchange History (USER_DATA) |
| [**marginAccountCancelAllOpenOrdersOnASymbol()**](TradeApi.md#marginAccountCancelAllOpenOrdersOnASymbol) | **DELETE** /sapi/v1/margin/openOrders | Margin Account Cancel all Open Orders on a Symbol (TRADE) |
| [**marginAccountCancelOco()**](TradeApi.md#marginAccountCancelOco) | **DELETE** /sapi/v1/margin/orderList | Margin Account Cancel OCO (TRADE) |
| [**marginAccountCancelOrder()**](TradeApi.md#marginAccountCancelOrder) | **DELETE** /sapi/v1/margin/order | Margin Account Cancel Order (TRADE) |
| [**marginAccountNewOco()**](TradeApi.md#marginAccountNewOco) | **POST** /sapi/v1/margin/order/oco | Margin Account New OCO (TRADE) |
| [**marginAccountNewOrder()**](TradeApi.md#marginAccountNewOrder) | **POST** /sapi/v1/margin/order | Margin Account New Order (TRADE) |
| [**marginAccountNewOto()**](TradeApi.md#marginAccountNewOto) | **POST** /sapi/v1/margin/order/oto | Margin Account New OTO (TRADE) |
| [**marginAccountNewOtoco()**](TradeApi.md#marginAccountNewOtoco) | **POST** /sapi/v1/margin/order/otoco | Margin Account New OTOCO (TRADE) |
| [**marginManualLiquidation()**](TradeApi.md#marginManualLiquidation) | **POST** /sapi/v1/margin/manual-liquidation | Margin Manual Liquidation(MARGIN) |
| [**queryCurrentMarginOrderCountUsage()**](TradeApi.md#queryCurrentMarginOrderCountUsage) | **GET** /sapi/v1/margin/rateLimit/order | Query Current Margin Order Count Usage (TRADE) |
| [**queryMarginAccountsAllOco()**](TradeApi.md#queryMarginAccountsAllOco) | **GET** /sapi/v1/margin/allOrderList | Query Margin Account&#39;s all OCO (USER_DATA) |
| [**queryMarginAccountsAllOrders()**](TradeApi.md#queryMarginAccountsAllOrders) | **GET** /sapi/v1/margin/allOrders | Query Margin Account&#39;s All Orders (USER_DATA) |
| [**queryMarginAccountsOco()**](TradeApi.md#queryMarginAccountsOco) | **GET** /sapi/v1/margin/orderList | Query Margin Account&#39;s OCO (USER_DATA) |
| [**queryMarginAccountsOpenOco()**](TradeApi.md#queryMarginAccountsOpenOco) | **GET** /sapi/v1/margin/openOrderList | Query Margin Account&#39;s Open OCO (USER_DATA) |
| [**queryMarginAccountsOpenOrders()**](TradeApi.md#queryMarginAccountsOpenOrders) | **GET** /sapi/v1/margin/openOrders | Query Margin Account&#39;s Open Orders (USER_DATA) |
| [**queryMarginAccountsOrder()**](TradeApi.md#queryMarginAccountsOrder) | **GET** /sapi/v1/margin/order | Query Margin Account&#39;s Order (USER_DATA) |
| [**queryMarginAccountsTradeList()**](TradeApi.md#queryMarginAccountsTradeList) | **GET** /sapi/v1/margin/myTrades | Query Margin Account&#39;s Trade List (USER_DATA) |
| [**querySpecialKey()**](TradeApi.md#querySpecialKey) | **GET** /sapi/v1/margin/apiKey | Query Special key(Low Latency Trading)(TRADE) |
| [**querySpecialKeyList()**](TradeApi.md#querySpecialKeyList) | **GET** /sapi/v1/margin/api-key-list | Query Special key List(Low Latency Trading)(TRADE) |
| [**smallLiabilityExchange()**](TradeApi.md#smallLiabilityExchange) | **POST** /sapi/v1/margin/exchange-small-liability | Small Liability Exchange (MARGIN) |


## `createSpecialKey()`

```php
createSpecialKey($createSpecialKeyRequest): \Binance\Client\MarginTrading\Model\CreateSpecialKeyResponse
```

Create Special Key(Low-Latency Trading)(TRADE)

- Binance Margin offers low-latency trading through a [special key](https://www.binance.com/en/support/faq/frequently-asked-questions-on-margin-special-api-key-3208663e900d4d2e9fec4140e1832f4e), available exclusively to users with VIP level 4 or higher. - If you are VIP level 3 or below, please contact your VIP manager for eligibility criterias.**  **Supported Products:**  - Cross Margin - Isolated Margin - Portfolio Margin Pro - Cross Margin Pro (Additional agreement required and subject to meeting eligibility criteria)  **Unsupported Products:**  - Portfolio Margin  We support several types of API keys:  * Ed25519 (recommended) * HMAC * RSA  We recommend to **use Ed25519 API keys** as it should provide the best performance and security out of all supported key types. We accept PKCS#8 (BEGIN PUBLIC KEY). For how to generate an RSA key pair to send API requests on Binance. Please refer to the document below [FAQ](https://www.binance.com/en/support/faq/how-to-generate-an-rsa-key-pair-to-send-api-requests-on-binance-2b79728f331e43079b27440d9d15c5db) .  Weight: 1(UID)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$createSpecialKeyRequest = new \Binance\Client\MarginTrading\Model\CreateSpecialKeyRequest(); // \Binance\Client\MarginTrading\Model\CreateSpecialKeyRequest

try {
    $result = $apiInstance->createSpecialKey($createSpecialKeyRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->createSpecialKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createSpecialKeyRequest** | [**\Binance\Client\MarginTrading\Model\CreateSpecialKeyRequest**](../Model/CreateSpecialKeyRequest.md)|  | |

### Return type

[**\Binance\Client\MarginTrading\Model\CreateSpecialKeyResponse**](../Model/CreateSpecialKeyResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSpecialKey()`

```php
deleteSpecialKey($apiName, $symbol, $recvWindow)
```

Delete Special Key(Low-Latency Trading)(TRADE)

This only applies to Special Key for Low Latency Trading.  If apiKey is given, apiName will be ignored. If apiName is given with no apiKey, all apikeys with given apiName will be deleted.  You need to enable Permits “Enable Spot & Margin Trading” option for the API Key which requests this endpoint.  Weight: 1(UID)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$apiName = 'apiName_example'; // string
$symbol = 'symbol_example'; // string | isolated margin pair
$recvWindow = 56; // int | No more than 60000

try {
    $apiInstance->deleteSpecialKey($apiName, $symbol, $recvWindow);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->deleteSpecialKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **apiName** | **string**|  | [optional] |
| **symbol** | **string**| isolated margin pair | [optional] |
| **recvWindow** | **int**| No more than 60000 | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `editIpForSpecialKey()`

```php
editIpForSpecialKey($editIpForSpecialKeyRequest)
```

Edit ip for Special Key(Low-Latency Trading)(TRADE)

Edit ip restriction. This only applies to Special Key for Low Latency Trading.  You need to enable Permits “Enable Spot & Margin Trading” option for the API Key which requests this endpoint.  Weight: 1(UID)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$editIpForSpecialKeyRequest = new \Binance\Client\MarginTrading\Model\EditIpForSpecialKeyRequest(); // \Binance\Client\MarginTrading\Model\EditIpForSpecialKeyRequest

try {
    $apiInstance->editIpForSpecialKey($editIpForSpecialKeyRequest);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->editIpForSpecialKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **editIpForSpecialKeyRequest** | [**\Binance\Client\MarginTrading\Model\EditIpForSpecialKeyRequest**](../Model/EditIpForSpecialKeyRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getForceLiquidationRecord()`

```php
getForceLiquidationRecord($startTime, $endTime, $isolatedSymbol, $current, $size, $recvWindow): \Binance\Client\MarginTrading\Model\GetForceLiquidationRecordResponse
```

Get Force Liquidation Record (USER_DATA)

Get Force Liquidation Record  * Response in descending order  Weight: 1(IP)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startTime = 56; // int | 只支持查询最近90天的数据
$endTime = 56; // int
$isolatedSymbol = 'isolatedSymbol_example'; // string | isolated symbol
$current = 56; // int | Currently querying page. Start from 1. Default:1
$size = 56; // int | Default:10 Max:100
$recvWindow = 56; // int | No more than 60000

try {
    $result = $apiInstance->getForceLiquidationRecord($startTime, $endTime, $isolatedSymbol, $current, $size, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->getForceLiquidationRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **startTime** | **int**| 只支持查询最近90天的数据 | [optional] |
| **endTime** | **int**|  | [optional] |
| **isolatedSymbol** | **string**| isolated symbol | [optional] |
| **current** | **int**| Currently querying page. Start from 1. Default:1 | [optional] |
| **size** | **int**| Default:10 Max:100 | [optional] |
| **recvWindow** | **int**| No more than 60000 | [optional] |

### Return type

[**\Binance\Client\MarginTrading\Model\GetForceLiquidationRecordResponse**](../Model/GetForceLiquidationRecordResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSmallLiabilityExchangeCoinList()`

```php
getSmallLiabilityExchangeCoinList($recvWindow): \Binance\Client\MarginTrading\Model\GetSmallLiabilityExchangeCoinListResponse
```

Get Small Liability Exchange Coin List (USER_DATA)

Query the coins which can be small liability exchange  Weight: 100

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 56; // int | No more than 60000

try {
    $result = $apiInstance->getSmallLiabilityExchangeCoinList($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->getSmallLiabilityExchangeCoinList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**| No more than 60000 | [optional] |

### Return type

[**\Binance\Client\MarginTrading\Model\GetSmallLiabilityExchangeCoinListResponse**](../Model/GetSmallLiabilityExchangeCoinListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSmallLiabilityExchangeHistory()`

```php
getSmallLiabilityExchangeHistory($current, $size, $startTime, $endTime, $recvWindow): \Binance\Client\MarginTrading\Model\GetSmallLiabilityExchangeHistoryResponse
```

Get Small Liability Exchange History (USER_DATA)

Get Small liability Exchange History  Weight: 100(UID)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$current = 56; // int | Currently querying page. Start from 1. Default:1
$size = 56; // int | Default:10, Max:100
$startTime = 56; // int | 只支持查询最近90天的数据
$endTime = 56; // int
$recvWindow = 56; // int | No more than 60000

try {
    $result = $apiInstance->getSmallLiabilityExchangeHistory($current, $size, $startTime, $endTime, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->getSmallLiabilityExchangeHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **current** | **int**| Currently querying page. Start from 1. Default:1 | |
| **size** | **int**| Default:10, Max:100 | |
| **startTime** | **int**| 只支持查询最近90天的数据 | [optional] |
| **endTime** | **int**|  | [optional] |
| **recvWindow** | **int**| No more than 60000 | [optional] |

### Return type

[**\Binance\Client\MarginTrading\Model\GetSmallLiabilityExchangeHistoryResponse**](../Model/GetSmallLiabilityExchangeHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `marginAccountCancelAllOpenOrdersOnASymbol()`

```php
marginAccountCancelAllOpenOrdersOnASymbol($symbol, $isIsolated, $recvWindow): \Binance\Client\MarginTrading\Model\MarginAccountCancelAllOpenOrdersOnASymbolResponse
```

Margin Account Cancel all Open Orders on a Symbol (TRADE)

Cancels all active orders on a symbol for margin account.<br></br> This includes OCO orders.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$isIsolated = 'isIsolated_example'; // string | for isolated margin or not, \"TRUE\", \"FALSE\"，default \"FALSE\"
$recvWindow = 56; // int | No more than 60000

try {
    $result = $apiInstance->marginAccountCancelAllOpenOrdersOnASymbol($symbol, $isIsolated, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->marginAccountCancelAllOpenOrdersOnASymbol: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **isIsolated** | **string**| for isolated margin or not, \&quot;TRUE\&quot;, \&quot;FALSE\&quot;，default \&quot;FALSE\&quot; | [optional] |
| **recvWindow** | **int**| No more than 60000 | [optional] |

### Return type

[**\Binance\Client\MarginTrading\Model\MarginAccountCancelAllOpenOrdersOnASymbolResponse**](../Model/MarginAccountCancelAllOpenOrdersOnASymbolResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `marginAccountCancelOco()`

```php
marginAccountCancelOco($symbol, $isIsolated, $orderListId, $listClientOrderId, $newClientOrderId, $recvWindow): \Binance\Client\MarginTrading\Model\MarginAccountCancelOcoResponse
```

Margin Account Cancel OCO (TRADE)

Cancel an entire Order List for a margin account.  * Canceling an individual leg will cancel the entire OCO  Weight: 1(UID)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$isIsolated = 'isIsolated_example'; // string | for isolated margin or not, \"TRUE\", \"FALSE\"，default \"FALSE\"
$orderListId = 56; // int | Either `orderListId` or `listClientOrderId` must be provided
$listClientOrderId = 'listClientOrderId_example'; // string | Either `orderListId` or `listClientOrderId` must be provided
$newClientOrderId = 'newClientOrderId_example'; // string | Used to uniquely identify this cancel. Automatically generated by default
$recvWindow = 56; // int | No more than 60000

try {
    $result = $apiInstance->marginAccountCancelOco($symbol, $isIsolated, $orderListId, $listClientOrderId, $newClientOrderId, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->marginAccountCancelOco: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **isIsolated** | **string**| for isolated margin or not, \&quot;TRUE\&quot;, \&quot;FALSE\&quot;，default \&quot;FALSE\&quot; | [optional] |
| **orderListId** | **int**| Either &#x60;orderListId&#x60; or &#x60;listClientOrderId&#x60; must be provided | [optional] |
| **listClientOrderId** | **string**| Either &#x60;orderListId&#x60; or &#x60;listClientOrderId&#x60; must be provided | [optional] |
| **newClientOrderId** | **string**| Used to uniquely identify this cancel. Automatically generated by default | [optional] |
| **recvWindow** | **int**| No more than 60000 | [optional] |

### Return type

[**\Binance\Client\MarginTrading\Model\MarginAccountCancelOcoResponse**](../Model/MarginAccountCancelOcoResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `marginAccountCancelOrder()`

```php
marginAccountCancelOrder($symbol, $isIsolated, $orderId, $origClientOrderId, $newClientOrderId, $recvWindow): \Binance\Client\MarginTrading\Model\MarginAccountCancelOrderResponse
```

Margin Account Cancel Order (TRADE)

Cancel an active order for margin account.  * Either orderId or origClientOrderId must be sent.  Weight: 10(IP)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$isIsolated = 'isIsolated_example'; // string | for isolated margin or not, \"TRUE\", \"FALSE\"，default \"FALSE\"
$orderId = 56; // int
$origClientOrderId = 'origClientOrderId_example'; // string
$newClientOrderId = 'newClientOrderId_example'; // string | Used to uniquely identify this cancel. Automatically generated by default
$recvWindow = 56; // int | No more than 60000

try {
    $result = $apiInstance->marginAccountCancelOrder($symbol, $isIsolated, $orderId, $origClientOrderId, $newClientOrderId, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->marginAccountCancelOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **isIsolated** | **string**| for isolated margin or not, \&quot;TRUE\&quot;, \&quot;FALSE\&quot;，default \&quot;FALSE\&quot; | [optional] |
| **orderId** | **int**|  | [optional] |
| **origClientOrderId** | **string**|  | [optional] |
| **newClientOrderId** | **string**| Used to uniquely identify this cancel. Automatically generated by default | [optional] |
| **recvWindow** | **int**| No more than 60000 | [optional] |

### Return type

[**\Binance\Client\MarginTrading\Model\MarginAccountCancelOrderResponse**](../Model/MarginAccountCancelOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `marginAccountNewOco()`

```php
marginAccountNewOco($marginAccountNewOcoRequest): \Binance\Client\MarginTrading\Model\MarginAccountNewOcoResponse
```

Margin Account New OCO (TRADE)

Send in a new OCO for a margin account  * autoRepayAtCancel is suggested to set as “FALSE” to keep liability unrepaid under high frequent new order/cancel order execution  Weight: 6(UID)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$marginAccountNewOcoRequest = new \Binance\Client\MarginTrading\Model\MarginAccountNewOcoRequest(); // \Binance\Client\MarginTrading\Model\MarginAccountNewOcoRequest

try {
    $result = $apiInstance->marginAccountNewOco($marginAccountNewOcoRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->marginAccountNewOco: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **marginAccountNewOcoRequest** | [**\Binance\Client\MarginTrading\Model\MarginAccountNewOcoRequest**](../Model/MarginAccountNewOcoRequest.md)|  | |

### Return type

[**\Binance\Client\MarginTrading\Model\MarginAccountNewOcoResponse**](../Model/MarginAccountNewOcoResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `marginAccountNewOrder()`

```php
marginAccountNewOrder($marginAccountNewOrderRequest): \Binance\Client\MarginTrading\Model\MarginAccountNewOrderResponse
```

Margin Account New Order (TRADE)

Post a new order for margin account.  * autoRepayAtCancel is suggested to set as “FALSE” to keep liability unrepaid under high frequent new order/cancel order execution  Weight: 6(UID)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$marginAccountNewOrderRequest = new \Binance\Client\MarginTrading\Model\MarginAccountNewOrderRequest(); // \Binance\Client\MarginTrading\Model\MarginAccountNewOrderRequest

try {
    $result = $apiInstance->marginAccountNewOrder($marginAccountNewOrderRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->marginAccountNewOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **marginAccountNewOrderRequest** | [**\Binance\Client\MarginTrading\Model\MarginAccountNewOrderRequest**](../Model/MarginAccountNewOrderRequest.md)|  | |

### Return type

[**\Binance\Client\MarginTrading\Model\MarginAccountNewOrderResponse**](../Model/MarginAccountNewOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `marginAccountNewOto()`

```php
marginAccountNewOto($marginAccountNewOtoRequest): \Binance\Client\MarginTrading\Model\MarginAccountNewOtoResponse
```

Margin Account New OTO (TRADE)

Post a new OTO order for margin account:  - An OTO (One-Triggers-the-Other) is an order list comprised of 2 orders. - The first order is called the **working order** and must be `LIMIT` or `LIMIT_MAKER`. Initially, only the working order goes on the order book. - The second order is called the **pending order**. It can be any order type except for `MARKET` orders using parameter `quoteOrderQty`. The pending order is only placed on the order book when the working order gets **fully filled**. - If either the working order or the pending order is cancelled individually, the other order in the order list will also be canceled or expired. - When the order list is placed, if the working order gets **immediately fully filled**, the placement response will show the working order as `FILLED` but the pending order will still appear as `PENDING_NEW`. You need to query the status of the pending order again to see its updated status. - OTOs add **2 orders** to the unfilled order count, `EXCHANGE_MAX_NUM_ORDERS` filter and `MAX_NUM_ORDERS` filter.  * autoRepayAtCancel is suggested to set as “FALSE” to keep liability unrepaid under high frequent new order/cancel order execution * Depending on the `pendingType` or `workingType`, some optional parameters will become mandatory:  Weight: 6(UID)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$marginAccountNewOtoRequest = new \Binance\Client\MarginTrading\Model\MarginAccountNewOtoRequest(); // \Binance\Client\MarginTrading\Model\MarginAccountNewOtoRequest

try {
    $result = $apiInstance->marginAccountNewOto($marginAccountNewOtoRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->marginAccountNewOto: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **marginAccountNewOtoRequest** | [**\Binance\Client\MarginTrading\Model\MarginAccountNewOtoRequest**](../Model/MarginAccountNewOtoRequest.md)|  | |

### Return type

[**\Binance\Client\MarginTrading\Model\MarginAccountNewOtoResponse**](../Model/MarginAccountNewOtoResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `marginAccountNewOtoco()`

```php
marginAccountNewOtoco($marginAccountNewOtocoRequest): \Binance\Client\MarginTrading\Model\MarginAccountNewOtocoResponse
```

Margin Account New OTOCO (TRADE)

Post a new OTOCO order for margin account：  - An OTOCO (One-Triggers-One-Cancels-the-Other) is an order list comprised of 3 orders. - The first order is called the **working order** and must be `LIMIT` or `LIMIT_MAKER`. Initially, only the working order goes on the order book. - The behavior of the working order is the same as the OTO. - OTOCO has 2 pending orders (pending above and pending below), forming an OCO pair. The pending orders are only placed on the order book when the working order gets **fully filled**. - The rules of the pending above and pending below follow the same rules as the [Order List OCO](https://developers.binance.com/docs/margin_trading/trade/Margin-Account-New-OCO). - OTOCOs add **3 orders** against the unfilled order count, `EXCHANGE_MAX_NUM_ORDERS` filter, and `MAX_NUM_ORDERS` filter.  * autoRepayAtCancel is suggested to set as “FALSE” to keep liability unrepaid under high frequent new order/cancel order execution * Depending on the `pendingAboveType`/`pendingBelowType` or `workingType`, some optional parameters will become mandatory:  Weight: 6(UID)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$marginAccountNewOtocoRequest = new \Binance\Client\MarginTrading\Model\MarginAccountNewOtocoRequest(); // \Binance\Client\MarginTrading\Model\MarginAccountNewOtocoRequest

try {
    $result = $apiInstance->marginAccountNewOtoco($marginAccountNewOtocoRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->marginAccountNewOtoco: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **marginAccountNewOtocoRequest** | [**\Binance\Client\MarginTrading\Model\MarginAccountNewOtocoRequest**](../Model/MarginAccountNewOtocoRequest.md)|  | |

### Return type

[**\Binance\Client\MarginTrading\Model\MarginAccountNewOtocoResponse**](../Model/MarginAccountNewOtocoResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `marginManualLiquidation()`

```php
marginManualLiquidation($marginManualLiquidationRequest): \Binance\Client\MarginTrading\Model\MarginManualLiquidationResponse
```

Margin Manual Liquidation(MARGIN)

Margin Manual Liquidation  * This endpoint can support Cross Margin Classic Mode and Pro Mode. * And only support Isolated Margin for restricted region.  Weight: 3000

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$marginManualLiquidationRequest = new \Binance\Client\MarginTrading\Model\MarginManualLiquidationRequest(); // \Binance\Client\MarginTrading\Model\MarginManualLiquidationRequest

try {
    $result = $apiInstance->marginManualLiquidation($marginManualLiquidationRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->marginManualLiquidation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **marginManualLiquidationRequest** | [**\Binance\Client\MarginTrading\Model\MarginManualLiquidationRequest**](../Model/MarginManualLiquidationRequest.md)|  | |

### Return type

[**\Binance\Client\MarginTrading\Model\MarginManualLiquidationResponse**](../Model/MarginManualLiquidationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryCurrentMarginOrderCountUsage()`

```php
queryCurrentMarginOrderCountUsage($isIsolated, $symbol, $recvWindow): \Binance\Client\MarginTrading\Model\QueryCurrentMarginOrderCountUsageResponse
```

Query Current Margin Order Count Usage (TRADE)

Displays the user's current margin order count usage for all intervals.  Weight: 20(IP)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$isIsolated = 'isIsolated_example'; // string | for isolated margin or not, \"TRUE\", \"FALSE\"，default \"FALSE\"
$symbol = 'symbol_example'; // string | isolated margin pair
$recvWindow = 56; // int | No more than 60000

try {
    $result = $apiInstance->queryCurrentMarginOrderCountUsage($isIsolated, $symbol, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->queryCurrentMarginOrderCountUsage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **isIsolated** | **string**| for isolated margin or not, \&quot;TRUE\&quot;, \&quot;FALSE\&quot;，default \&quot;FALSE\&quot; | [optional] |
| **symbol** | **string**| isolated margin pair | [optional] |
| **recvWindow** | **int**| No more than 60000 | [optional] |

### Return type

[**\Binance\Client\MarginTrading\Model\QueryCurrentMarginOrderCountUsageResponse**](../Model/QueryCurrentMarginOrderCountUsageResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryMarginAccountsAllOco()`

```php
queryMarginAccountsAllOco($isIsolated, $symbol, $fromId, $startTime, $endTime, $limit, $recvWindow): \Binance\Client\MarginTrading\Model\QueryMarginAccountsAllOcoResponse
```

Query Margin Account's all OCO (USER_DATA)

Retrieves all OCO for a specific margin account based on provided optional parameters  Weight: 200(IP)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$isIsolated = 'isIsolated_example'; // string | for isolated margin or not, \"TRUE\", \"FALSE\"，default \"FALSE\"
$symbol = 'symbol_example'; // string | isolated margin pair
$fromId = 56; // int | 如设置fromId, 将返回id > fromId的数据。否则将返回最新数据
$startTime = 56; // int | 只支持查询最近90天的数据
$endTime = 56; // int
$limit = 56; // int | Default Value: 500; Max Value: 1000
$recvWindow = 56; // int | No more than 60000

try {
    $result = $apiInstance->queryMarginAccountsAllOco($isIsolated, $symbol, $fromId, $startTime, $endTime, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->queryMarginAccountsAllOco: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **isIsolated** | **string**| for isolated margin or not, \&quot;TRUE\&quot;, \&quot;FALSE\&quot;，default \&quot;FALSE\&quot; | [optional] |
| **symbol** | **string**| isolated margin pair | [optional] |
| **fromId** | **int**| 如设置fromId, 将返回id &gt; fromId的数据。否则将返回最新数据 | [optional] |
| **startTime** | **int**| 只支持查询最近90天的数据 | [optional] |
| **endTime** | **int**|  | [optional] |
| **limit** | **int**| Default Value: 500; Max Value: 1000 | [optional] |
| **recvWindow** | **int**| No more than 60000 | [optional] |

### Return type

[**\Binance\Client\MarginTrading\Model\QueryMarginAccountsAllOcoResponse**](../Model/QueryMarginAccountsAllOcoResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryMarginAccountsAllOrders()`

```php
queryMarginAccountsAllOrders($symbol, $isIsolated, $orderId, $startTime, $endTime, $limit, $recvWindow): \Binance\Client\MarginTrading\Model\QueryMarginAccountsAllOrdersResponse
```

Query Margin Account's All Orders (USER_DATA)

Query Margin Account's All Orders  * If orderId is set, it will get orders >= that orderId. Otherwise the orders within 24 hours are returned. * For some historical orders cummulativeQuoteQty will be < 0, meaning the data is not available at this time. * Less than 24 hours between startTime and endTime.  Weight: 200(IP)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$isIsolated = 'isIsolated_example'; // string | for isolated margin or not, \"TRUE\", \"FALSE\"，default \"FALSE\"
$orderId = 56; // int
$startTime = 56; // int | 只支持查询最近90天的数据
$endTime = 56; // int
$limit = 56; // int | Default Value: 500; Max Value: 1000
$recvWindow = 56; // int | No more than 60000

try {
    $result = $apiInstance->queryMarginAccountsAllOrders($symbol, $isIsolated, $orderId, $startTime, $endTime, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->queryMarginAccountsAllOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **isIsolated** | **string**| for isolated margin or not, \&quot;TRUE\&quot;, \&quot;FALSE\&quot;，default \&quot;FALSE\&quot; | [optional] |
| **orderId** | **int**|  | [optional] |
| **startTime** | **int**| 只支持查询最近90天的数据 | [optional] |
| **endTime** | **int**|  | [optional] |
| **limit** | **int**| Default Value: 500; Max Value: 1000 | [optional] |
| **recvWindow** | **int**| No more than 60000 | [optional] |

### Return type

[**\Binance\Client\MarginTrading\Model\QueryMarginAccountsAllOrdersResponse**](../Model/QueryMarginAccountsAllOrdersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryMarginAccountsOco()`

```php
queryMarginAccountsOco($isIsolated, $symbol, $orderListId, $origClientOrderId, $recvWindow): \Binance\Client\MarginTrading\Model\QueryMarginAccountsOcoResponse
```

Query Margin Account's OCO (USER_DATA)

Retrieves a specific OCO based on provided optional parameters  Weight: 10(IP)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$isIsolated = 'isIsolated_example'; // string | for isolated margin or not, \"TRUE\", \"FALSE\"，default \"FALSE\"
$symbol = 'symbol_example'; // string | isolated margin pair
$orderListId = 56; // int | Either `orderListId` or `listClientOrderId` must be provided
$origClientOrderId = 'origClientOrderId_example'; // string
$recvWindow = 56; // int | No more than 60000

try {
    $result = $apiInstance->queryMarginAccountsOco($isIsolated, $symbol, $orderListId, $origClientOrderId, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->queryMarginAccountsOco: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **isIsolated** | **string**| for isolated margin or not, \&quot;TRUE\&quot;, \&quot;FALSE\&quot;，default \&quot;FALSE\&quot; | [optional] |
| **symbol** | **string**| isolated margin pair | [optional] |
| **orderListId** | **int**| Either &#x60;orderListId&#x60; or &#x60;listClientOrderId&#x60; must be provided | [optional] |
| **origClientOrderId** | **string**|  | [optional] |
| **recvWindow** | **int**| No more than 60000 | [optional] |

### Return type

[**\Binance\Client\MarginTrading\Model\QueryMarginAccountsOcoResponse**](../Model/QueryMarginAccountsOcoResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryMarginAccountsOpenOco()`

```php
queryMarginAccountsOpenOco($isIsolated, $symbol, $recvWindow): \Binance\Client\MarginTrading\Model\QueryMarginAccountsOpenOcoResponse
```

Query Margin Account's Open OCO (USER_DATA)

Query Margin Account's Open OCO  Weight: 10(IP)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$isIsolated = 'isIsolated_example'; // string | for isolated margin or not, \"TRUE\", \"FALSE\"，default \"FALSE\"
$symbol = 'symbol_example'; // string | isolated margin pair
$recvWindow = 56; // int | No more than 60000

try {
    $result = $apiInstance->queryMarginAccountsOpenOco($isIsolated, $symbol, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->queryMarginAccountsOpenOco: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **isIsolated** | **string**| for isolated margin or not, \&quot;TRUE\&quot;, \&quot;FALSE\&quot;，default \&quot;FALSE\&quot; | [optional] |
| **symbol** | **string**| isolated margin pair | [optional] |
| **recvWindow** | **int**| No more than 60000 | [optional] |

### Return type

[**\Binance\Client\MarginTrading\Model\QueryMarginAccountsOpenOcoResponse**](../Model/QueryMarginAccountsOpenOcoResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryMarginAccountsOpenOrders()`

```php
queryMarginAccountsOpenOrders($symbol, $isIsolated, $recvWindow): \Binance\Client\MarginTrading\Model\QueryMarginAccountsOpenOrdersResponse
```

Query Margin Account's Open Orders (USER_DATA)

Query Margin Account's Open Orders  * If the symbol is not sent, orders for all symbols will be returned in an array. * When all symbols are returned, the number of requests counted against the rate limiter is equal to the number of symbols currently trading on the exchange. * If isIsolated =\"TRUE\", symbol must be sent.  Weight: 10(IP)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string | isolated margin pair
$isIsolated = 'isIsolated_example'; // string | for isolated margin or not, \"TRUE\", \"FALSE\"，default \"FALSE\"
$recvWindow = 56; // int | No more than 60000

try {
    $result = $apiInstance->queryMarginAccountsOpenOrders($symbol, $isIsolated, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->queryMarginAccountsOpenOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**| isolated margin pair | [optional] |
| **isIsolated** | **string**| for isolated margin or not, \&quot;TRUE\&quot;, \&quot;FALSE\&quot;，default \&quot;FALSE\&quot; | [optional] |
| **recvWindow** | **int**| No more than 60000 | [optional] |

### Return type

[**\Binance\Client\MarginTrading\Model\QueryMarginAccountsOpenOrdersResponse**](../Model/QueryMarginAccountsOpenOrdersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryMarginAccountsOrder()`

```php
queryMarginAccountsOrder($symbol, $isIsolated, $orderId, $origClientOrderId, $recvWindow): \Binance\Client\MarginTrading\Model\QueryMarginAccountsOrderResponse
```

Query Margin Account's Order (USER_DATA)

Query Margin Account's Order  * Either orderId or origClientOrderId must be sent. * For some historical orders cummulativeQuoteQty will be < 0, meaning the data is not available at this time.  Weight: 10(IP)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$isIsolated = 'isIsolated_example'; // string | for isolated margin or not, \"TRUE\", \"FALSE\"，default \"FALSE\"
$orderId = 56; // int
$origClientOrderId = 'origClientOrderId_example'; // string
$recvWindow = 56; // int | No more than 60000

try {
    $result = $apiInstance->queryMarginAccountsOrder($symbol, $isIsolated, $orderId, $origClientOrderId, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->queryMarginAccountsOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **isIsolated** | **string**| for isolated margin or not, \&quot;TRUE\&quot;, \&quot;FALSE\&quot;，default \&quot;FALSE\&quot; | [optional] |
| **orderId** | **int**|  | [optional] |
| **origClientOrderId** | **string**|  | [optional] |
| **recvWindow** | **int**| No more than 60000 | [optional] |

### Return type

[**\Binance\Client\MarginTrading\Model\QueryMarginAccountsOrderResponse**](../Model/QueryMarginAccountsOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryMarginAccountsTradeList()`

```php
queryMarginAccountsTradeList($symbol, $isIsolated, $orderId, $startTime, $endTime, $fromId, $limit, $recvWindow): \Binance\Client\MarginTrading\Model\QueryMarginAccountsTradeListResponse
```

Query Margin Account's Trade List (USER_DATA)

Query Margin Account's Trade List  * If fromId is set, it will get trades >= that fromId. Otherwise the trades within 24 hours are returned. * Less than 24 hours between startTime and endTime.  Weight: 10(IP)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$isIsolated = 'isIsolated_example'; // string | for isolated margin or not, \"TRUE\", \"FALSE\"，default \"FALSE\"
$orderId = 56; // int
$startTime = 56; // int | 只支持查询最近90天的数据
$endTime = 56; // int
$fromId = 56; // int | 如设置fromId, 将返回id > fromId的数据。否则将返回最新数据
$limit = 56; // int | Default Value: 500; Max Value: 1000
$recvWindow = 56; // int | No more than 60000

try {
    $result = $apiInstance->queryMarginAccountsTradeList($symbol, $isIsolated, $orderId, $startTime, $endTime, $fromId, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->queryMarginAccountsTradeList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **isIsolated** | **string**| for isolated margin or not, \&quot;TRUE\&quot;, \&quot;FALSE\&quot;，default \&quot;FALSE\&quot; | [optional] |
| **orderId** | **int**|  | [optional] |
| **startTime** | **int**| 只支持查询最近90天的数据 | [optional] |
| **endTime** | **int**|  | [optional] |
| **fromId** | **int**| 如设置fromId, 将返回id &gt; fromId的数据。否则将返回最新数据 | [optional] |
| **limit** | **int**| Default Value: 500; Max Value: 1000 | [optional] |
| **recvWindow** | **int**| No more than 60000 | [optional] |

### Return type

[**\Binance\Client\MarginTrading\Model\QueryMarginAccountsTradeListResponse**](../Model/QueryMarginAccountsTradeListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `querySpecialKey()`

```php
querySpecialKey($symbol, $recvWindow): \Binance\Client\MarginTrading\Model\QuerySpecialKeyResponse
```

Query Special key(Low Latency Trading)(TRADE)

Query Special Key Information.  This only applies to Special Key for Low Latency Trading.  Weight: 1(UID)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string | isolated margin pair
$recvWindow = 56; // int | No more than 60000

try {
    $result = $apiInstance->querySpecialKey($symbol, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->querySpecialKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**| isolated margin pair | [optional] |
| **recvWindow** | **int**| No more than 60000 | [optional] |

### Return type

[**\Binance\Client\MarginTrading\Model\QuerySpecialKeyResponse**](../Model/QuerySpecialKeyResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `querySpecialKeyList()`

```php
querySpecialKeyList($symbol, $recvWindow): \Binance\Client\MarginTrading\Model\QuerySpecialKeyListResponse
```

Query Special key List(Low Latency Trading)(TRADE)

This only applies to Special Key for Low Latency Trading.  Weight: 1(UID)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string | isolated margin pair
$recvWindow = 56; // int | No more than 60000

try {
    $result = $apiInstance->querySpecialKeyList($symbol, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->querySpecialKeyList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**| isolated margin pair | [optional] |
| **recvWindow** | **int**| No more than 60000 | [optional] |

### Return type

[**\Binance\Client\MarginTrading\Model\QuerySpecialKeyListResponse**](../Model/QuerySpecialKeyListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `smallLiabilityExchange()`

```php
smallLiabilityExchange($smallLiabilityExchangeRequest)
```

Small Liability Exchange (MARGIN)

Small Liability Exchange  * Only convert once within 6 hours * Only liability valuation less than 10 USDT are supported * The maximum number of coin is 10  Weight: 3000(UID)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$smallLiabilityExchangeRequest = new \Binance\Client\MarginTrading\Model\SmallLiabilityExchangeRequest(); // \Binance\Client\MarginTrading\Model\SmallLiabilityExchangeRequest

try {
    $apiInstance->smallLiabilityExchange($smallLiabilityExchangeRequest);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->smallLiabilityExchange: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **smallLiabilityExchangeRequest** | [**\Binance\Client\MarginTrading\Model\SmallLiabilityExchangeRequest**](../Model/SmallLiabilityExchangeRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
