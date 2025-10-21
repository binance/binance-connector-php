# Binance\Client\DerivativesTradingUsdsFutures\TradeApi

All URIs are relative to https://fapi.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**accountTradeList()**](TradeApi.md#accountTradeList) | **GET** /fapi/v1/userTrades | Account Trade List (USER_DATA) |
| [**allOrders()**](TradeApi.md#allOrders) | **GET** /fapi/v1/allOrders | All Orders (USER_DATA) |
| [**autoCancelAllOpenOrders()**](TradeApi.md#autoCancelAllOpenOrders) | **POST** /fapi/v1/countdownCancelAll | Auto-Cancel All Open Orders (TRADE) |
| [**cancelAllOpenOrders()**](TradeApi.md#cancelAllOpenOrders) | **DELETE** /fapi/v1/allOpenOrders | Cancel All Open Orders (TRADE) |
| [**cancelMultipleOrders()**](TradeApi.md#cancelMultipleOrders) | **DELETE** /fapi/v1/batchOrders | Cancel Multiple Orders (TRADE) |
| [**cancelOrder()**](TradeApi.md#cancelOrder) | **DELETE** /fapi/v1/order | Cancel Order (TRADE) |
| [**changeInitialLeverage()**](TradeApi.md#changeInitialLeverage) | **POST** /fapi/v1/leverage | Change Initial Leverage(TRADE) |
| [**changeMarginType()**](TradeApi.md#changeMarginType) | **POST** /fapi/v1/marginType | Change Margin Type(TRADE) |
| [**changeMultiAssetsMode()**](TradeApi.md#changeMultiAssetsMode) | **POST** /fapi/v1/multiAssetsMargin | Change Multi-Assets Mode (TRADE) |
| [**changePositionMode()**](TradeApi.md#changePositionMode) | **POST** /fapi/v1/positionSide/dual | Change Position Mode(TRADE) |
| [**currentAllOpenOrders()**](TradeApi.md#currentAllOpenOrders) | **GET** /fapi/v1/openOrders | Current All Open Orders (USER_DATA) |
| [**getOrderModifyHistory()**](TradeApi.md#getOrderModifyHistory) | **GET** /fapi/v1/orderAmendment | Get Order Modify History (USER_DATA) |
| [**getPositionMarginChangeHistory()**](TradeApi.md#getPositionMarginChangeHistory) | **GET** /fapi/v1/positionMargin/history | Get Position Margin Change History (TRADE) |
| [**modifyIsolatedPositionMargin()**](TradeApi.md#modifyIsolatedPositionMargin) | **POST** /fapi/v1/positionMargin | Modify Isolated Position Margin(TRADE) |
| [**modifyMultipleOrders()**](TradeApi.md#modifyMultipleOrders) | **PUT** /fapi/v1/batchOrders | Modify Multiple Orders(TRADE) |
| [**modifyOrder()**](TradeApi.md#modifyOrder) | **PUT** /fapi/v1/order | Modify Order (TRADE) |
| [**newOrder()**](TradeApi.md#newOrder) | **POST** /fapi/v1/order | New Order(TRADE) |
| [**placeMultipleOrders()**](TradeApi.md#placeMultipleOrders) | **POST** /fapi/v1/batchOrders | Place Multiple Orders(TRADE) |
| [**positionAdlQuantileEstimation()**](TradeApi.md#positionAdlQuantileEstimation) | **GET** /fapi/v1/adlQuantile | Position ADL Quantile Estimation(USER_DATA) |
| [**positionInformationV2()**](TradeApi.md#positionInformationV2) | **GET** /fapi/v2/positionRisk | Position Information V2 (USER_DATA) |
| [**positionInformationV3()**](TradeApi.md#positionInformationV3) | **GET** /fapi/v3/positionRisk | Position Information V3 (USER_DATA) |
| [**queryCurrentOpenOrder()**](TradeApi.md#queryCurrentOpenOrder) | **GET** /fapi/v1/openOrder | Query Current Open Order (USER_DATA) |
| [**queryOrder()**](TradeApi.md#queryOrder) | **GET** /fapi/v1/order | Query Order (USER_DATA) |
| [**testOrder()**](TradeApi.md#testOrder) | **POST** /fapi/v1/order/test | Test Order(TRADE) |
| [**usersForceOrders()**](TradeApi.md#usersForceOrders) | **GET** /fapi/v1/forceOrders | User&#39;s Force Orders (USER_DATA) |


## `accountTradeList()`

```php
accountTradeList($symbol, $orderId, $startTime, $endTime, $fromId, $limit, $recvWindow): \Binance\Client\DerivativesTradingUsdsFutures\Model\AccountTradeListResponse
```

Account Trade List (USER_DATA)

Get trades for a specific account and symbol.  * If `startTime` and `endTime` are both not sent, then the last 7 days' data will be returned. * The time between `startTime` and `endTime` cannot be longer than 7 days. * The parameter `fromId` cannot be sent with `startTime` or `endTime`. * Only support querying trade in the past 6 months  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$orderId = 56; // int
$startTime = 56; // int
$endTime = 56; // int
$fromId = 56; // int | ID to get aggregate trades from INCLUSIVE.
$limit = 56; // int | Default 100; max 1000
$recvWindow = 56; // int

try {
    $result = $apiInstance->accountTradeList($symbol, $orderId, $startTime, $endTime, $fromId, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->accountTradeList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **orderId** | **int**|  | [optional] |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **fromId** | **int**| ID to get aggregate trades from INCLUSIVE. | [optional] |
| **limit** | **int**| Default 100; max 1000 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\AccountTradeListResponse**](../Model/AccountTradeListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `allOrders()`

```php
allOrders($symbol, $orderId, $startTime, $endTime, $limit, $recvWindow): \Binance\Client\DerivativesTradingUsdsFutures\Model\AllOrdersResponse
```

All Orders (USER_DATA)

Get all account orders; active, canceled, or filled.  * These orders will not be found: * order status is `CANCELED` or `EXPIRED` **AND** order has NO filled trade **AND** created time + 3 days < current time * order create time + 90 days < current time  * If `orderId` is set, it will get orders >= that `orderId`. Otherwise most recent orders are returned. * The query time period must be less then 7 days( default as the recent 7 days).  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$orderId = 56; // int
$startTime = 56; // int
$endTime = 56; // int
$limit = 56; // int | Default 100; max 1000
$recvWindow = 56; // int

try {
    $result = $apiInstance->allOrders($symbol, $orderId, $startTime, $endTime, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->allOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **orderId** | **int**|  | [optional] |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **limit** | **int**| Default 100; max 1000 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\AllOrdersResponse**](../Model/AllOrdersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `autoCancelAllOpenOrders()`

```php
autoCancelAllOpenOrders($autoCancelAllOpenOrdersRequest): \Binance\Client\DerivativesTradingUsdsFutures\Model\AutoCancelAllOpenOrdersResponse
```

Auto-Cancel All Open Orders (TRADE)

Cancel all open orders of the specified symbol at the end of the specified countdown. The endpoint should be called repeatedly as heartbeats so that the existing countdown time can be canceled and replaced by a new one.  * Example usage: Call this endpoint at 30s intervals with an countdownTime of 120000 (120s). If this endpoint is not called within 120 seconds, all your orders of the specified symbol will be automatically canceled. If this endpoint is called with an countdownTime of 0, the countdown timer will be stopped.  The system will check all countdowns **approximately every 10 milliseconds**, so please note that sufficient redundancy should be considered when using this function. We do not recommend setting the countdown time to be too precise or too small.  Weight: 10

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$autoCancelAllOpenOrdersRequest = new \Binance\Client\DerivativesTradingUsdsFutures\Model\AutoCancelAllOpenOrdersRequest(); // \Binance\Client\DerivativesTradingUsdsFutures\Model\AutoCancelAllOpenOrdersRequest

try {
    $result = $apiInstance->autoCancelAllOpenOrders($autoCancelAllOpenOrdersRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->autoCancelAllOpenOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **autoCancelAllOpenOrdersRequest** | [**\Binance\Client\DerivativesTradingUsdsFutures\Model\AutoCancelAllOpenOrdersRequest**](../Model/AutoCancelAllOpenOrdersRequest.md)|  | |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\AutoCancelAllOpenOrdersResponse**](../Model/AutoCancelAllOpenOrdersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelAllOpenOrders()`

```php
cancelAllOpenOrders($symbol, $recvWindow): \Binance\Client\DerivativesTradingUsdsFutures\Model\CancelAllOpenOrdersResponse
```

Cancel All Open Orders (TRADE)

Cancel All Open Orders  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$recvWindow = 56; // int

try {
    $result = $apiInstance->cancelAllOpenOrders($symbol, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->cancelAllOpenOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\CancelAllOpenOrdersResponse**](../Model/CancelAllOpenOrdersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelMultipleOrders()`

```php
cancelMultipleOrders($symbol, $orderIdList, $origClientOrderIdList, $recvWindow): \Binance\Client\DerivativesTradingUsdsFutures\Model\CancelMultipleOrdersResponse
```

Cancel Multiple Orders (TRADE)

Cancel Multiple Orders  * Either `orderIdList` or `origClientOrderIdList ` must be sent.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$orderIdList = array(56); // \Binance\Client\DerivativesTradingUsdsFutures\Model\OrderIdList | max length 10 <br /> e.g. [1234567,2345678]
$origClientOrderIdList = array('origClientOrderIdList_example'); // \Binance\Client\DerivativesTradingUsdsFutures\Model\OrigClientOrderIdList | max length 10<br /> e.g. [\"my_id_1\",\"my_id_2\"], encode the double quotes. No space after comma.
$recvWindow = 56; // int

try {
    $result = $apiInstance->cancelMultipleOrders($symbol, $orderIdList, $origClientOrderIdList, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->cancelMultipleOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **orderIdList** | [**\Binance\Client\DerivativesTradingUsdsFutures\Model\OrderIdList**](../Model/int.md)| max length 10 &lt;br /&gt; e.g. [1234567,2345678] | [optional] |
| **origClientOrderIdList** | [**\Binance\Client\DerivativesTradingUsdsFutures\Model\OrigClientOrderIdList**](../Model/string.md)| max length 10&lt;br /&gt; e.g. [\&quot;my_id_1\&quot;,\&quot;my_id_2\&quot;], encode the double quotes. No space after comma. | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\CancelMultipleOrdersResponse**](../Model/CancelMultipleOrdersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelOrder()`

```php
cancelOrder($symbol, $orderId, $origClientOrderId, $recvWindow): \Binance\Client\DerivativesTradingUsdsFutures\Model\CancelOrderResponse
```

Cancel Order (TRADE)

Cancel an active order.  * Either `orderId` or `origClientOrderId` must be sent.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$orderId = 56; // int
$origClientOrderId = 'origClientOrderId_example'; // string
$recvWindow = 56; // int

try {
    $result = $apiInstance->cancelOrder($symbol, $orderId, $origClientOrderId, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->cancelOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **orderId** | **int**|  | [optional] |
| **origClientOrderId** | **string**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\CancelOrderResponse**](../Model/CancelOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `changeInitialLeverage()`

```php
changeInitialLeverage($changeInitialLeverageRequest): \Binance\Client\DerivativesTradingUsdsFutures\Model\ChangeInitialLeverageResponse
```

Change Initial Leverage(TRADE)

Change user's initial leverage of specific symbol market.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$changeInitialLeverageRequest = new \Binance\Client\DerivativesTradingUsdsFutures\Model\ChangeInitialLeverageRequest(); // \Binance\Client\DerivativesTradingUsdsFutures\Model\ChangeInitialLeverageRequest

try {
    $result = $apiInstance->changeInitialLeverage($changeInitialLeverageRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->changeInitialLeverage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **changeInitialLeverageRequest** | [**\Binance\Client\DerivativesTradingUsdsFutures\Model\ChangeInitialLeverageRequest**](../Model/ChangeInitialLeverageRequest.md)|  | |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\ChangeInitialLeverageResponse**](../Model/ChangeInitialLeverageResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `changeMarginType()`

```php
changeMarginType($changeMarginTypeRequest): \Binance\Client\DerivativesTradingUsdsFutures\Model\ChangeMarginTypeResponse
```

Change Margin Type(TRADE)

Change symbol level margin type  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$changeMarginTypeRequest = new \Binance\Client\DerivativesTradingUsdsFutures\Model\ChangeMarginTypeRequest(); // \Binance\Client\DerivativesTradingUsdsFutures\Model\ChangeMarginTypeRequest

try {
    $result = $apiInstance->changeMarginType($changeMarginTypeRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->changeMarginType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **changeMarginTypeRequest** | [**\Binance\Client\DerivativesTradingUsdsFutures\Model\ChangeMarginTypeRequest**](../Model/ChangeMarginTypeRequest.md)|  | |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\ChangeMarginTypeResponse**](../Model/ChangeMarginTypeResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `changeMultiAssetsMode()`

```php
changeMultiAssetsMode($changeMultiAssetsModeRequest): \Binance\Client\DerivativesTradingUsdsFutures\Model\ChangeMultiAssetsModeResponse
```

Change Multi-Assets Mode (TRADE)

Change user's Multi-Assets mode (Multi-Assets Mode or Single-Asset Mode) on ***Every symbol***  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$changeMultiAssetsModeRequest = new \Binance\Client\DerivativesTradingUsdsFutures\Model\ChangeMultiAssetsModeRequest(); // \Binance\Client\DerivativesTradingUsdsFutures\Model\ChangeMultiAssetsModeRequest

try {
    $result = $apiInstance->changeMultiAssetsMode($changeMultiAssetsModeRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->changeMultiAssetsMode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **changeMultiAssetsModeRequest** | [**\Binance\Client\DerivativesTradingUsdsFutures\Model\ChangeMultiAssetsModeRequest**](../Model/ChangeMultiAssetsModeRequest.md)|  | |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\ChangeMultiAssetsModeResponse**](../Model/ChangeMultiAssetsModeResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `changePositionMode()`

```php
changePositionMode($changePositionModeRequest): \Binance\Client\DerivativesTradingUsdsFutures\Model\ChangePositionModeResponse
```

Change Position Mode(TRADE)

Change user's position mode (Hedge Mode or One-way Mode ) on ***EVERY symbol***  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$changePositionModeRequest = new \Binance\Client\DerivativesTradingUsdsFutures\Model\ChangePositionModeRequest(); // \Binance\Client\DerivativesTradingUsdsFutures\Model\ChangePositionModeRequest

try {
    $result = $apiInstance->changePositionMode($changePositionModeRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->changePositionMode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **changePositionModeRequest** | [**\Binance\Client\DerivativesTradingUsdsFutures\Model\ChangePositionModeRequest**](../Model/ChangePositionModeRequest.md)|  | |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\ChangePositionModeResponse**](../Model/ChangePositionModeResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `currentAllOpenOrders()`

```php
currentAllOpenOrders($symbol, $recvWindow): \Binance\Client\DerivativesTradingUsdsFutures\Model\CurrentAllOpenOrdersResponse
```

Current All Open Orders (USER_DATA)

Get all open orders on a symbol.  * If the symbol is not sent, orders for all symbols will be returned in an array.  Weight: 1 for a single symbol; 40 when the symbol parameter is omitted Careful when accessing this with no symbol.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$recvWindow = 56; // int

try {
    $result = $apiInstance->currentAllOpenOrders($symbol, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->currentAllOpenOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\CurrentAllOpenOrdersResponse**](../Model/CurrentAllOpenOrdersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrderModifyHistory()`

```php
getOrderModifyHistory($symbol, $orderId, $origClientOrderId, $startTime, $endTime, $limit, $recvWindow): \Binance\Client\DerivativesTradingUsdsFutures\Model\GetOrderModifyHistoryResponse
```

Get Order Modify History (USER_DATA)

Get order modification history  * Either `orderId` or `origClientOrderId` must be sent, and the `orderId` will prevail if both are sent. * Order modify history longer than 3 month is not avaliable  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$orderId = 56; // int
$origClientOrderId = 'origClientOrderId_example'; // string
$startTime = 56; // int
$endTime = 56; // int
$limit = 56; // int | Default 100; max 1000
$recvWindow = 56; // int

try {
    $result = $apiInstance->getOrderModifyHistory($symbol, $orderId, $origClientOrderId, $startTime, $endTime, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->getOrderModifyHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **orderId** | **int**|  | [optional] |
| **origClientOrderId** | **string**|  | [optional] |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **limit** | **int**| Default 100; max 1000 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\GetOrderModifyHistoryResponse**](../Model/GetOrderModifyHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPositionMarginChangeHistory()`

```php
getPositionMarginChangeHistory($symbol, $type, $startTime, $endTime, $limit, $recvWindow): \Binance\Client\DerivativesTradingUsdsFutures\Model\GetPositionMarginChangeHistoryResponse
```

Get Position Margin Change History (TRADE)

Get Position Margin Change History  * Support querying future histories that are not older than 30 days * The time between `startTime` and `endTime`can't be more than 30 days  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$type = 'type_example'; // string | 1: Add position margin，2: Reduce position margin
$startTime = 56; // int
$endTime = 56; // int
$limit = 56; // int | Default 100; max 1000
$recvWindow = 56; // int

try {
    $result = $apiInstance->getPositionMarginChangeHistory($symbol, $type, $startTime, $endTime, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->getPositionMarginChangeHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **type** | **string**| 1: Add position margin，2: Reduce position margin | [optional] |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **limit** | **int**| Default 100; max 1000 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\GetPositionMarginChangeHistoryResponse**](../Model/GetPositionMarginChangeHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `modifyIsolatedPositionMargin()`

```php
modifyIsolatedPositionMargin($modifyIsolatedPositionMarginRequest): \Binance\Client\DerivativesTradingUsdsFutures\Model\ModifyIsolatedPositionMarginResponse
```

Modify Isolated Position Margin(TRADE)

Modify Isolated Position Margin   * Only for isolated symbol  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$modifyIsolatedPositionMarginRequest = new \Binance\Client\DerivativesTradingUsdsFutures\Model\ModifyIsolatedPositionMarginRequest(); // \Binance\Client\DerivativesTradingUsdsFutures\Model\ModifyIsolatedPositionMarginRequest

try {
    $result = $apiInstance->modifyIsolatedPositionMargin($modifyIsolatedPositionMarginRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->modifyIsolatedPositionMargin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **modifyIsolatedPositionMarginRequest** | [**\Binance\Client\DerivativesTradingUsdsFutures\Model\ModifyIsolatedPositionMarginRequest**](../Model/ModifyIsolatedPositionMarginRequest.md)|  | |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\ModifyIsolatedPositionMarginResponse**](../Model/ModifyIsolatedPositionMarginResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `modifyMultipleOrders()`

```php
modifyMultipleOrders($modifyMultipleOrdersRequest): \Binance\Client\DerivativesTradingUsdsFutures\Model\ModifyMultipleOrdersResponse
```

Modify Multiple Orders(TRADE)

Modify Multiple Orders (TRADE)  * Parameter rules are same with `Modify Order` * Batch modify orders are processed concurrently, and the order of matching is not guaranteed. * The order of returned contents for batch modify orders is the same as the order of the order list. * One order can only be modfied for less than 10000 times  Weight: 5 on 10s order rate limit(X-MBX-ORDER-COUNT-10S); 1 on 1min order rate limit(X-MBX-ORDER-COUNT-1M); 5 on IP rate limit(x-mbx-used-weight-1m);

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$modifyMultipleOrdersRequest = new \Binance\Client\DerivativesTradingUsdsFutures\Model\ModifyMultipleOrdersRequest(); // \Binance\Client\DerivativesTradingUsdsFutures\Model\ModifyMultipleOrdersRequest

try {
    $result = $apiInstance->modifyMultipleOrders($modifyMultipleOrdersRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->modifyMultipleOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **modifyMultipleOrdersRequest** | [**\Binance\Client\DerivativesTradingUsdsFutures\Model\ModifyMultipleOrdersRequest**](../Model/ModifyMultipleOrdersRequest.md)|  | |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\ModifyMultipleOrdersResponse**](../Model/ModifyMultipleOrdersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `modifyOrder()`

```php
modifyOrder($modifyOrderRequest): \Binance\Client\DerivativesTradingUsdsFutures\Model\ModifyOrderResponse
```

Modify Order (TRADE)

Order modify function, currently only LIMIT order modification is supported, modified orders will be reordered in the match queue   * Either `orderId` or `origClientOrderId` must be sent, and the `orderId` will prevail if both are sent. * Both `quantity` and `price` must be sent, which is different from dapi modify order endpoint. * When the new `quantity` or `price` doesn't satisfy PRICE_FILTER / PERCENT_FILTER / LOT_SIZE, amendment will be rejected and the order will stay as it is. * However the order will be cancelled by the amendment in the following situations: * when the order is in partially filled status and the new `quantity` <= `executedQty` * When the order is `GTX` and the new price will cause it to be executed immediately * One order can only be modfied for less than 10000 times  Weight: 1 on 10s order rate limit(X-MBX-ORDER-COUNT-10S); 1 on 1min order rate limit(X-MBX-ORDER-COUNT-1M); 0 on IP rate limit(x-mbx-used-weight-1m)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$modifyOrderRequest = new \Binance\Client\DerivativesTradingUsdsFutures\Model\ModifyOrderRequest(); // \Binance\Client\DerivativesTradingUsdsFutures\Model\ModifyOrderRequest

try {
    $result = $apiInstance->modifyOrder($modifyOrderRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->modifyOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **modifyOrderRequest** | [**\Binance\Client\DerivativesTradingUsdsFutures\Model\ModifyOrderRequest**](../Model/ModifyOrderRequest.md)|  | |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\ModifyOrderResponse**](../Model/ModifyOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `newOrder()`

```php
newOrder($newOrderRequest): \Binance\Client\DerivativesTradingUsdsFutures\Model\NewOrderResponse
```

New Order(TRADE)

Send in a new order.  * Order with type `STOP`,  parameter `timeInForce` can be sent ( default `GTC`). * Order with type `TAKE_PROFIT`,  parameter `timeInForce` can be sent ( default `GTC`). * Condition orders will be triggered when:  * If parameter`priceProtect`is sent as true: * when price reaches the `stopPrice` ，the difference rate between \"MARK_PRICE\" and \"CONTRACT_PRICE\" cannot be larger than the \"triggerProtect\" of the symbol * \"triggerProtect\" of a symbol can be got from `GET /fapi/v1/exchangeInfo`  * `STOP`, `STOP_MARKET`: * BUY: latest price (\"MARK_PRICE\" or \"CONTRACT_PRICE\") >= `stopPrice` * SELL: latest price (\"MARK_PRICE\" or \"CONTRACT_PRICE\") <= `stopPrice` * `TAKE_PROFIT`, `TAKE_PROFIT_MARKET`: * BUY: latest price (\"MARK_PRICE\" or \"CONTRACT_PRICE\") <= `stopPrice` * SELL: latest price (\"MARK_PRICE\" or \"CONTRACT_PRICE\") >= `stopPrice` * `TRAILING_STOP_MARKET`: * BUY: the lowest price after order placed `<= `activationPrice`, and the latest price >`= the lowest price * (1 + `callbackRate`) * SELL: the highest price after order placed >= `activationPrice`, and the latest price <= the highest price * (1 - `callbackRate`)  * For `TRAILING_STOP_MARKET`, if you got such error code. ``{\"code\": -2021, \"msg\": \"Order would immediately trigger.\"}`` means that the parameters you send do not meet the following requirements: * BUY: `activationPrice` should be smaller than latest price. * SELL: `activationPrice` should be larger than latest price.  * If `newOrderRespType ` is sent as `RESULT` : * `MARKET` order: the final FILLED result of the order will be return directly. * `LIMIT` order with special `timeInForce`: the final status result of the order(FILLED or EXPIRED) will be returned directly.  * `STOP_MARKET`, `TAKE_PROFIT_MARKET` with `closePosition`=`true`: * Follow the same rules for condition orders. * If triggered，**close all** current long position( if `SELL`) or current short position( if `BUY`). * Cannot be used with `quantity` paremeter * Cannot be used with `reduceOnly` parameter * In Hedge Mode,cannot be used with `BUY` orders in `LONG` position side. and cannot be used with `SELL` orders in `SHORT` position side * `selfTradePreventionMode` is only effective when `timeInForce` set to `IOC` or `GTC` or `GTD`. * In extreme market conditions, timeInForce `GTD` order auto cancel time might be delayed comparing to `goodTillDate`  Weight: 1 on 10s order rate limit(X-MBX-ORDER-COUNT-10S); 1 on 1min order rate limit(X-MBX-ORDER-COUNT-1M); 0 on IP rate limit(x-mbx-used-weight-1m)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$newOrderRequest = new \Binance\Client\DerivativesTradingUsdsFutures\Model\NewOrderRequest(); // \Binance\Client\DerivativesTradingUsdsFutures\Model\NewOrderRequest

try {
    $result = $apiInstance->newOrder($newOrderRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->newOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **newOrderRequest** | [**\Binance\Client\DerivativesTradingUsdsFutures\Model\NewOrderRequest**](../Model/NewOrderRequest.md)|  | |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\NewOrderResponse**](../Model/NewOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `placeMultipleOrders()`

```php
placeMultipleOrders($placeMultipleOrdersRequest): \Binance\Client\DerivativesTradingUsdsFutures\Model\PlaceMultipleOrdersResponse
```

Place Multiple Orders(TRADE)

Place Multiple Orders  * Paremeter rules are same with `New Order` * Batch orders are processed concurrently, and the order of matching is not guaranteed. * The order of returned contents for batch orders is the same as the order of the order list.  Weight: 5 on 10s order rate limit(X-MBX-ORDER-COUNT-10S); 1 on 1min order rate limit(X-MBX-ORDER-COUNT-1M); 5 on IP rate limit(x-mbx-used-weight-1m);

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$placeMultipleOrdersRequest = new \Binance\Client\DerivativesTradingUsdsFutures\Model\PlaceMultipleOrdersRequest(); // \Binance\Client\DerivativesTradingUsdsFutures\Model\PlaceMultipleOrdersRequest

try {
    $result = $apiInstance->placeMultipleOrders($placeMultipleOrdersRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->placeMultipleOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **placeMultipleOrdersRequest** | [**\Binance\Client\DerivativesTradingUsdsFutures\Model\PlaceMultipleOrdersRequest**](../Model/PlaceMultipleOrdersRequest.md)|  | |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\PlaceMultipleOrdersResponse**](../Model/PlaceMultipleOrdersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `positionAdlQuantileEstimation()`

```php
positionAdlQuantileEstimation($symbol, $recvWindow): \Binance\Client\DerivativesTradingUsdsFutures\Model\PositionAdlQuantileEstimationResponse
```

Position ADL Quantile Estimation(USER_DATA)

Position ADL Quantile Estimation  * Values update every 30s. * Values 0, 1, 2, 3, 4 shows the queue position and possibility of ADL from low to high. * For positions of the symbol are in One-way Mode or isolated margined in Hedge Mode, \"LONG\", \"SHORT\", and \"BOTH\" will be returned to show the positions' adl quantiles of different position sides. * If the positions of the symbol are crossed margined in Hedge Mode: * \"HEDGE\" as a sign will be returned instead of \"BOTH\"; * A same value caculated on unrealized pnls on long and short sides' positions will be shown for \"LONG\" and \"SHORT\" when there are positions in both of long and short sides.  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$recvWindow = 56; // int

try {
    $result = $apiInstance->positionAdlQuantileEstimation($symbol, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->positionAdlQuantileEstimation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\PositionAdlQuantileEstimationResponse**](../Model/PositionAdlQuantileEstimationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `positionInformationV2()`

```php
positionInformationV2($symbol, $recvWindow): \Binance\Client\DerivativesTradingUsdsFutures\Model\PositionInformationV2Response
```

Position Information V2 (USER_DATA)

Get current position information.  Please use with user data stream `ACCOUNT_UPDATE` to meet your timeliness and accuracy needs.  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$recvWindow = 56; // int

try {
    $result = $apiInstance->positionInformationV2($symbol, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->positionInformationV2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\PositionInformationV2Response**](../Model/PositionInformationV2Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `positionInformationV3()`

```php
positionInformationV3($symbol, $recvWindow): \Binance\Client\DerivativesTradingUsdsFutures\Model\PositionInformationV3Response
```

Position Information V3 (USER_DATA)

Get current position information(only symbol that has position or open orders will be returned).  Please use with user data stream `ACCOUNT_UPDATE` to meet your timeliness and accuracy needs.  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$recvWindow = 56; // int

try {
    $result = $apiInstance->positionInformationV3($symbol, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->positionInformationV3: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\PositionInformationV3Response**](../Model/PositionInformationV3Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryCurrentOpenOrder()`

```php
queryCurrentOpenOrder($symbol, $orderId, $origClientOrderId, $recvWindow): \Binance\Client\DerivativesTradingUsdsFutures\Model\QueryCurrentOpenOrderResponse
```

Query Current Open Order (USER_DATA)

Query open order   * Either`orderId` or `origClientOrderId` must be sent * If the queried order has been filled or cancelled, the error message \"Order does not exist\" will be returned.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$orderId = 56; // int
$origClientOrderId = 'origClientOrderId_example'; // string
$recvWindow = 56; // int

try {
    $result = $apiInstance->queryCurrentOpenOrder($symbol, $orderId, $origClientOrderId, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->queryCurrentOpenOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **orderId** | **int**|  | [optional] |
| **origClientOrderId** | **string**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\QueryCurrentOpenOrderResponse**](../Model/QueryCurrentOpenOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryOrder()`

```php
queryOrder($symbol, $orderId, $origClientOrderId, $recvWindow): \Binance\Client\DerivativesTradingUsdsFutures\Model\QueryOrderResponse
```

Query Order (USER_DATA)

Check an order's status.  * These orders will not be found: * order status is `CANCELED` or `EXPIRED` **AND** order has NO filled trade **AND** created time + 3 days < current time * order create time + 90 days < current time  * Either `orderId` or `origClientOrderId` must be sent. * `orderId` is self-increment for each specific `symbol`  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$orderId = 56; // int
$origClientOrderId = 'origClientOrderId_example'; // string
$recvWindow = 56; // int

try {
    $result = $apiInstance->queryOrder($symbol, $orderId, $origClientOrderId, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->queryOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **orderId** | **int**|  | [optional] |
| **origClientOrderId** | **string**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\QueryOrderResponse**](../Model/QueryOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `testOrder()`

```php
testOrder($testOrderRequest): \Binance\Client\DerivativesTradingUsdsFutures\Model\TestOrderResponse
```

Test Order(TRADE)

Testing order request, this order will not be submitted to matching engine  * Order with type `STOP`,  parameter `timeInForce` can be sent ( default `GTC`). * Order with type `TAKE_PROFIT`,  parameter `timeInForce` can be sent ( default `GTC`). * Condition orders will be triggered when:  * If parameter`priceProtect`is sent as true: * when price reaches the `stopPrice` ，the difference rate between \"MARK_PRICE\" and \"CONTRACT_PRICE\" cannot be larger than the \"triggerProtect\" of the symbol * \"triggerProtect\" of a symbol can be got from `GET /fapi/v1/exchangeInfo`  * `STOP`, `STOP_MARKET`: * BUY: latest price (\"MARK_PRICE\" or \"CONTRACT_PRICE\") >= `stopPrice` * SELL: latest price (\"MARK_PRICE\" or \"CONTRACT_PRICE\") <= `stopPrice` * `TAKE_PROFIT`, `TAKE_PROFIT_MARKET`: * BUY: latest price (\"MARK_PRICE\" or \"CONTRACT_PRICE\") <= `stopPrice` * SELL: latest price (\"MARK_PRICE\" or \"CONTRACT_PRICE\") >= `stopPrice` * `TRAILING_STOP_MARKET`: * BUY: the lowest price after order placed `<= `activationPrice`, and the latest price >`= the lowest price * (1 + `callbackRate`) * SELL: the highest price after order placed >= `activationPrice`, and the latest price <= the highest price * (1 - `callbackRate`)  * For `TRAILING_STOP_MARKET`, if you got such error code. ``{\"code\": -2021, \"msg\": \"Order would immediately trigger.\"}`` means that the parameters you send do not meet the following requirements: * BUY: `activationPrice` should be smaller than latest price. * SELL: `activationPrice` should be larger than latest price.  * If `newOrderRespType ` is sent as `RESULT` : * `MARKET` order: the final FILLED result of the order will be return directly. * `LIMIT` order with special `timeInForce`: the final status result of the order(FILLED or EXPIRED) will be returned directly.  * `STOP_MARKET`, `TAKE_PROFIT_MARKET` with `closePosition`=`true`: * Follow the same rules for condition orders. * If triggered，**close all** current long position( if `SELL`) or current short position( if `BUY`). * Cannot be used with `quantity` paremeter * Cannot be used with `reduceOnly` parameter * In Hedge Mode,cannot be used with `BUY` orders in `LONG` position side. and cannot be used with `SELL` orders in `SHORT` position side * `selfTradePreventionMode` is only effective when `timeInForce` set to `IOC` or `GTC` or `GTD`. * In extreme market conditions, timeInForce `GTD` order auto cancel time might be delayed comparing to `goodTillDate`  Weight: 0

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$testOrderRequest = new \Binance\Client\DerivativesTradingUsdsFutures\Model\TestOrderRequest(); // \Binance\Client\DerivativesTradingUsdsFutures\Model\TestOrderRequest

try {
    $result = $apiInstance->testOrder($testOrderRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->testOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **testOrderRequest** | [**\Binance\Client\DerivativesTradingUsdsFutures\Model\TestOrderRequest**](../Model/TestOrderRequest.md)|  | |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\TestOrderResponse**](../Model/TestOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersForceOrders()`

```php
usersForceOrders($symbol, $autoCloseType, $startTime, $endTime, $limit, $recvWindow): \Binance\Client\DerivativesTradingUsdsFutures\Model\UsersForceOrdersResponse
```

User's Force Orders (USER_DATA)

Query user's Force Orders  * If \"autoCloseType\" is not sent, orders with both of the types will be returned * If \"startTime\" is not sent, data within 7 days before \"endTime\" can be queried  Weight: 20 with symbol, 50 without symbol

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$autoCloseType = new \Binance\Client\DerivativesTradingUsdsFutures\Model\\Binance\Client\DerivativesTradingUsdsFutures\Model\AutoCloseType(); // \Binance\Client\DerivativesTradingUsdsFutures\Model\AutoCloseType | \"LIQUIDATION\" for liquidation orders, \"ADL\" for ADL orders.
$startTime = 56; // int
$endTime = 56; // int
$limit = 56; // int | Default 100; max 1000
$recvWindow = 56; // int

try {
    $result = $apiInstance->usersForceOrders($symbol, $autoCloseType, $startTime, $endTime, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->usersForceOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | [optional] |
| **autoCloseType** | [**\Binance\Client\DerivativesTradingUsdsFutures\Model\AutoCloseType**](../Model/.md)| \&quot;LIQUIDATION\&quot; for liquidation orders, \&quot;ADL\&quot; for ADL orders. | [optional] |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **limit** | **int**| Default 100; max 1000 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\UsersForceOrdersResponse**](../Model/UsersForceOrdersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
