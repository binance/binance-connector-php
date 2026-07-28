# Binance\Client\DerivativesTradingCoinFutures\TradeApi



All URIs are relative to https://dapi.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**accountTradeList()**](TradeApi.md#accountTradeList) | **GET** /dapi/v1/userTrades | Account Trade List (USER_DATA) |
| [**allOrders()**](TradeApi.md#allOrders) | **GET** /dapi/v1/allOrders | All Orders (USER_DATA) |
| [**autoCancelAllOpenOrders()**](TradeApi.md#autoCancelAllOpenOrders) | **POST** /dapi/v1/countdownCancelAll | Auto-Cancel All Open Orders (TRADE) |
| [**cancelAllOpenOrders()**](TradeApi.md#cancelAllOpenOrders) | **DELETE** /dapi/v1/allOpenOrders | Cancel All Open Orders (TRADE) |
| [**cancelMultipleOrders()**](TradeApi.md#cancelMultipleOrders) | **DELETE** /dapi/v1/batchOrders | Cancel Multiple Orders (TRADE) |
| [**cancelOrder()**](TradeApi.md#cancelOrder) | **DELETE** /dapi/v1/order | Cancel Order (TRADE) |
| [**changeInitialLeverage()**](TradeApi.md#changeInitialLeverage) | **POST** /dapi/v1/leverage | Change Initial Leverage (TRADE) |
| [**changeMarginType()**](TradeApi.md#changeMarginType) | **POST** /dapi/v1/marginType | Change Margin Type (TRADE) |
| [**changePositionMode()**](TradeApi.md#changePositionMode) | **POST** /dapi/v1/positionSide/dual | Change Position Mode (TRADE) |
| [**currentAllOpenOrders()**](TradeApi.md#currentAllOpenOrders) | **GET** /dapi/v1/openOrders | Current All Open Orders (USER_DATA) |
| [**getOrderModifyHistory()**](TradeApi.md#getOrderModifyHistory) | **GET** /dapi/v1/orderAmendment | Get Order Modify History (USER_DATA) |
| [**getPositionMarginChangeHistory()**](TradeApi.md#getPositionMarginChangeHistory) | **GET** /dapi/v1/positionMargin/history | Get Position Margin Change History (TRADE) |
| [**modifyIsolatedPositionMargin()**](TradeApi.md#modifyIsolatedPositionMargin) | **POST** /dapi/v1/positionMargin | Modify Isolated Position Margin (TRADE) |
| [**modifyMultipleOrders()**](TradeApi.md#modifyMultipleOrders) | **PUT** /dapi/v1/batchOrders | Modify Multiple Orders (TRADE) |
| [**modifyOrder()**](TradeApi.md#modifyOrder) | **PUT** /dapi/v1/order | Modify Order (TRADE) |
| [**newOrder()**](TradeApi.md#newOrder) | **POST** /dapi/v1/order | New Order (TRADE) |
| [**placeMultipleOrders()**](TradeApi.md#placeMultipleOrders) | **POST** /dapi/v1/batchOrders | Place Multiple Orders (TRADE) |
| [**positionAdlQuantileEstimation()**](TradeApi.md#positionAdlQuantileEstimation) | **GET** /dapi/v1/adlQuantile | Position ADL Quantile Estimation (USER_DATA) |
| [**positionInformation()**](TradeApi.md#positionInformation) | **GET** /dapi/v1/positionRisk | Position Information (USER_DATA) |
| [**queryCurrentOpenOrder()**](TradeApi.md#queryCurrentOpenOrder) | **GET** /dapi/v1/openOrder | Query Current Open Order (USER_DATA) |
| [**queryOrder()**](TradeApi.md#queryOrder) | **GET** /dapi/v1/order | Query Order (USER_DATA) |
| [**usersForceOrders()**](TradeApi.md#usersForceOrders) | **GET** /dapi/v1/forceOrders | User&#39;s Force Orders (USER_DATA) |


## `accountTradeList()`

```php
accountTradeList($symbol, $pair, $orderId, $startTime, $endTime, $fromId, $limit, $recvWindow): \Binance\Client\DerivativesTradingCoinFutures\Model\AccountTradeListResponse
```

Account Trade List (USER_DATA)

Get trades for a specific account and symbol.  Weight: **20** with symbol，**40** with pair (after CM migration: **5** flat)  Security Type: USER_DATA  Notes: - Either symbol or pair must be sent - Symbol and pair cannot be sent together - Pair and fromId cannot be sent together - OrderId can only be sent together with symbol - If a pair is sent,tickers for all symbols of the pair will be returned - The parameter `fromId` cannot be sent with `startTime` or `endTime` - If startTime and endTime are both not sent, then the last 7 days' data will be returned. - The time between startTime and endTime cannot be longer than 7 days.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingCoinFutures\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSD_200626; // string | Symbol
$pair = BTCUSD; // string | pair
$orderId = 1; // string | Order ID
$startTime = 1623319461670; // int | Start time
$endTime = 1641782889000; // int | End time
$fromId = 6; // int | Trade id to fetch from. Default gets most recent trades.
$limit = 30; // int | Maximum number of records to return.
$recvWindow = 5000; // int

try {
    $result = $apiInstance->accountTradeList($symbol, $pair, $orderId, $startTime, $endTime, $fromId, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->accountTradeList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**| Symbol | [optional] |
| **pair** | **string**| pair | [optional] |
| **orderId** | **string**| Order ID | [optional] |
| **startTime** | **int**| Start time | [optional] |
| **endTime** | **int**| End time | [optional] |
| **fromId** | **int**| Trade id to fetch from. Default gets most recent trades. | [optional] |
| **limit** | **int**| Maximum number of records to return. | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingCoinFutures\Model\AccountTradeListResponse**](../Model/AccountTradeListResponse.md)

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
allOrders($symbol, $pair, $orderId, $startTime, $endTime, $limit, $recvWindow): \Binance\Client\DerivativesTradingCoinFutures\Model\AllOrdersResponse
```

All Orders (USER_DATA)

Get all account orders; active, canceled, or filled.  * These orders will not be found:   * order status is CANCELED or EXPIRED AND order has NO filled trade AND created time + 3 days < current time   * order create time + 90 days < current time  Weight: **20** with symbol, **40** with pair (after CM migration: **5** flat)  Security Type: USER_DATA  Notes: - Either `symbol` or `pair` must be sent. - `pair` can't be sent with `orderId` - If `orderId` is set, it will get orders >= that `orderId`. Otherwise most recent orders are returned. - If orderId is set, it will get orders >= that orderId. Otherwise most recent orders are returned. - The query time period must be less then 7 days( default as the recent 7 days).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingCoinFutures\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSD_200925; // string | Symbol
$pair = BTCUSD; // string | Pair
$orderId = 1917641; // int
$startTime = 1623319461670; // int | Start time
$endTime = 1641782889000; // int | End time
$limit = 30; // int | Maximum number of records to return.
$recvWindow = 5000; // int

try {
    $result = $apiInstance->allOrders($symbol, $pair, $orderId, $startTime, $endTime, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->allOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**| Symbol | [optional] |
| **pair** | **string**| Pair | [optional] |
| **orderId** | **int**|  | [optional] |
| **startTime** | **int**| Start time | [optional] |
| **endTime** | **int**| End time | [optional] |
| **limit** | **int**| Maximum number of records to return. | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingCoinFutures\Model\AllOrdersResponse**](../Model/AllOrdersResponse.md)

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
autoCancelAllOpenOrders($autoCancelAllOpenOrdersRequest): \Binance\Client\DerivativesTradingCoinFutures\Model\AutoCancelAllOpenOrdersResponse
```

Auto-Cancel All Open Orders (TRADE)

Cancel all open orders of the specified symbol at the end of the specified countdown. This rest endpoint means to ensure your open orders are canceled in case of an outage. The endpoint should be called repeatedly as heartbeats so that the existing countdown time can be canceled and repalced by a new one. The system will check all countdowns **approximately every 10 milliseconds**, so please note that sufficient redundancy should be considered when using this function. We do not recommend setting the countdown time to be too precise or too small.   * Example usage:  Call this endpoint at 30s intervals with an countdownTime of 120000 (120s).  If this endpoint is not called within 120 seconds, all your orders of the specified symbol will be automatically canceled.  If this endpoint is called with an countdownTime of 0, the countdown timer will be stopped.  Weight(IP): 10  Security Type: TRADE

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingCoinFutures\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$autoCancelAllOpenOrdersRequest = new \Binance\Client\DerivativesTradingCoinFutures\Model\AutoCancelAllOpenOrdersRequest(); // \Binance\Client\DerivativesTradingCoinFutures\Model\AutoCancelAllOpenOrdersRequest

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
| **autoCancelAllOpenOrdersRequest** | [**\Binance\Client\DerivativesTradingCoinFutures\Model\AutoCancelAllOpenOrdersRequest**](../Model/AutoCancelAllOpenOrdersRequest.md)|  | |

### Return type

[**\Binance\Client\DerivativesTradingCoinFutures\Model\AutoCancelAllOpenOrdersResponse**](../Model/AutoCancelAllOpenOrdersResponse.md)

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
cancelAllOpenOrders($symbol, $recvWindow): \Binance\Client\DerivativesTradingCoinFutures\Model\CancelAllOpenOrdersResponse
```

Cancel All Open Orders (TRADE)

Cancel All Open Orders  Weight(IP): 1  Security Type: TRADE

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingCoinFutures\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSD_200925; // string | Symbol
$recvWindow = 5000; // int

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
| **symbol** | **string**| Symbol | |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingCoinFutures\Model\CancelAllOpenOrdersResponse**](../Model/CancelAllOpenOrdersResponse.md)

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
cancelMultipleOrders($symbol, $orderIdList, $origClientOrderIdList, $recvWindow): \Binance\Client\DerivativesTradingCoinFutures\Model\CancelMultipleOrdersResponse
```

Cancel Multiple Orders (TRADE)

Cancel Multiple Orders  Weight(IP): 1  Security Type: TRADE  Notes: - Either `orderIdList` or `origClientOrderIdList ` must be sent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingCoinFutures\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSD_200925; // string | Symbol
$orderIdList = array(56); // \Binance\Client\DerivativesTradingCoinFutures\Model\OrderIdList | Order IDs to cancel.
$origClientOrderIdList = array('origClientOrderIdList_example'); // \Binance\Client\DerivativesTradingCoinFutures\Model\OrigClientOrderIdList | Original client order IDs to cancel.
$recvWindow = 5000; // int

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
| **symbol** | **string**| Symbol | |
| **orderIdList** | [**\Binance\Client\DerivativesTradingCoinFutures\Model\OrderIdList**](../Model/int.md)| Order IDs to cancel. | [optional] |
| **origClientOrderIdList** | [**\Binance\Client\DerivativesTradingCoinFutures\Model\OrigClientOrderIdList**](../Model/string.md)| Original client order IDs to cancel. | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingCoinFutures\Model\CancelMultipleOrdersResponse**](../Model/CancelMultipleOrdersResponse.md)

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
cancelOrder($symbol, $orderId, $origClientOrderId, $recvWindow): \Binance\Client\DerivativesTradingCoinFutures\Model\CancelOrderResponse
```

Cancel Order (TRADE)

Cancel an active order.  Weight(IP): 1  Security Type: TRADE  Notes: - Either `orderId` or `origClientOrderId` must be sent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingCoinFutures\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSD_200925; // string | Symbol
$orderId = 283194212; // int | Order ID
$origClientOrderId = myOrder1; // string | Client order ID
$recvWindow = 5000; // int

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
| **symbol** | **string**| Symbol | |
| **orderId** | **int**| Order ID | [optional] |
| **origClientOrderId** | **string**| Client order ID | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingCoinFutures\Model\CancelOrderResponse**](../Model/CancelOrderResponse.md)

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
changeInitialLeverage($changeInitialLeverageRequest): \Binance\Client\DerivativesTradingCoinFutures\Model\ChangeInitialLeverageResponse
```

Change Initial Leverage (TRADE)

Change user's initial leverage in the specific symbol market.  For Hedge Mode, LONG and SHORT positions of one symbol use the same initial leverage and share a total notional value.  Weight(IP): 1  Security Type: TRADE

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingCoinFutures\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$changeInitialLeverageRequest = new \Binance\Client\DerivativesTradingCoinFutures\Model\ChangeInitialLeverageRequest(); // \Binance\Client\DerivativesTradingCoinFutures\Model\ChangeInitialLeverageRequest

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
| **changeInitialLeverageRequest** | [**\Binance\Client\DerivativesTradingCoinFutures\Model\ChangeInitialLeverageRequest**](../Model/ChangeInitialLeverageRequest.md)|  | |

### Return type

[**\Binance\Client\DerivativesTradingCoinFutures\Model\ChangeInitialLeverageResponse**](../Model/ChangeInitialLeverageResponse.md)

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
changeMarginType($changeMarginTypeRequest): \Binance\Client\DerivativesTradingCoinFutures\Model\ChangeMarginTypeResponse
```

Change Margin Type (TRADE)

Change user's margin type in the specific symbol market.For Hedge Mode, LONG and SHORT positions of one symbol use the same margin type.  With ISOLATED margin type, margins of the LONG and SHORT positions are isolated from each other.  Weight(IP): 1  Security Type: TRADE

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingCoinFutures\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$changeMarginTypeRequest = new \Binance\Client\DerivativesTradingCoinFutures\Model\ChangeMarginTypeRequest(); // \Binance\Client\DerivativesTradingCoinFutures\Model\ChangeMarginTypeRequest

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
| **changeMarginTypeRequest** | [**\Binance\Client\DerivativesTradingCoinFutures\Model\ChangeMarginTypeRequest**](../Model/ChangeMarginTypeRequest.md)|  | |

### Return type

[**\Binance\Client\DerivativesTradingCoinFutures\Model\ChangeMarginTypeResponse**](../Model/ChangeMarginTypeResponse.md)

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
changePositionMode($changePositionModeRequest): \Binance\Client\DerivativesTradingCoinFutures\Model\ChangePositionModeResponse
```

Change Position Mode (TRADE)

Change user's position mode (Hedge Mode or One-way Mode ) on ***EVERY symbol***.  **After CM migration**, UM and CM share the **same** `dualSidePosition` setting. Calling this endpoint flips both UM and CM at once. If either side has any open order or open position, the change is rejected: - `-4067` (open orders exist) - `-4068` (open position exists)  Weight(IP): 1  Security Type: TRADE

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingCoinFutures\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$changePositionModeRequest = new \Binance\Client\DerivativesTradingCoinFutures\Model\ChangePositionModeRequest(); // \Binance\Client\DerivativesTradingCoinFutures\Model\ChangePositionModeRequest

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
| **changePositionModeRequest** | [**\Binance\Client\DerivativesTradingCoinFutures\Model\ChangePositionModeRequest**](../Model/ChangePositionModeRequest.md)|  | |

### Return type

[**\Binance\Client\DerivativesTradingCoinFutures\Model\ChangePositionModeResponse**](../Model/ChangePositionModeResponse.md)

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
currentAllOpenOrders($symbol, $pair, $recvWindow): \Binance\Client\DerivativesTradingCoinFutures\Model\CurrentAllOpenOrdersResponse
```

Current All Open Orders (USER_DATA)

Get all open orders on a symbol. **Careful** when accessing this with no symbol.  Weight(IP): null  Weight: **1** for a single symbol, **40** for mutltiple symbols  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingCoinFutures\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSD_200925; // string | Symbol. **After CM migration, an invalid `symbol` returns `-1121` (previously a silent `200`).**
$pair = BTCUSD; // string | Pair
$recvWindow = 5000; // int

try {
    $result = $apiInstance->currentAllOpenOrders($symbol, $pair, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->currentAllOpenOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**| Symbol. **After CM migration, an invalid &#x60;symbol&#x60; returns &#x60;-1121&#x60; (previously a silent &#x60;200&#x60;).** | [optional] |
| **pair** | **string**| Pair | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingCoinFutures\Model\CurrentAllOpenOrdersResponse**](../Model/CurrentAllOpenOrdersResponse.md)

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
getOrderModifyHistory($symbol, $orderId, $origClientOrderId, $startTime, $endTime, $limit, $recvWindow): \Binance\Client\DerivativesTradingCoinFutures\Model\GetOrderModifyHistoryResponse
```

Get Order Modify History (USER_DATA)

Get order modification history  Weight(IP): 1  Security Type: USER_DATA  Notes: - Either `orderId` or `origClientOrderId` must be sent, and the `orderId` will prevail if both are sent. - Order modify history longer than 3 month is not avaliable

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingCoinFutures\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSD_PERP; // string | Symbol
$orderId = 20072994037; // int | Order ID
$origClientOrderId = LJ9R4QZDihCaS8UAOOLpgW; // string | Client order ID
$startTime = 1623319461670; // int | Timestamp in ms to get modification history from INCLUSIVE
$endTime = 1641782889000; // int | Timestamp in ms to get modification history until INCLUSIVE
$limit = 30; // int | Maximum number of records to return.
$recvWindow = 5000; // int

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
| **symbol** | **string**| Symbol | |
| **orderId** | **int**| Order ID | [optional] |
| **origClientOrderId** | **string**| Client order ID | [optional] |
| **startTime** | **int**| Timestamp in ms to get modification history from INCLUSIVE | [optional] |
| **endTime** | **int**| Timestamp in ms to get modification history until INCLUSIVE | [optional] |
| **limit** | **int**| Maximum number of records to return. | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingCoinFutures\Model\GetOrderModifyHistoryResponse**](../Model/GetOrderModifyHistoryResponse.md)

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
getPositionMarginChangeHistory($symbol, $type, $startTime, $endTime, $limit, $recvWindow): \Binance\Client\DerivativesTradingCoinFutures\Model\GetPositionMarginChangeHistoryResponse
```

Get Position Margin Change History (TRADE)

Get position margin change history  Weight(IP): 1  Security Type: TRADE

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingCoinFutures\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSD; // string
$type = 1; // int | 1: Add position margin,2: Reduce position margin
$startTime = 1623319461670; // int | Start time
$endTime = 1641782889000; // int | End time
$limit = 30; // int | Maximum number of records to return.
$recvWindow = 5000; // int

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
| **type** | **int**| 1: Add position margin,2: Reduce position margin | [optional] |
| **startTime** | **int**| Start time | [optional] |
| **endTime** | **int**| End time | [optional] |
| **limit** | **int**| Maximum number of records to return. | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingCoinFutures\Model\GetPositionMarginChangeHistoryResponse**](../Model/GetPositionMarginChangeHistoryResponse.md)

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
modifyIsolatedPositionMargin($modifyIsolatedPositionMarginRequest): \Binance\Client\DerivativesTradingCoinFutures\Model\ModifyIsolatedPositionMarginResponse
```

Modify Isolated Position Margin (TRADE)

Modify Isolated Position Margin  Weight(IP): 1  Security Type: TRADE  Notes: - Only for isolated symbol

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingCoinFutures\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$modifyIsolatedPositionMarginRequest = new \Binance\Client\DerivativesTradingCoinFutures\Model\ModifyIsolatedPositionMarginRequest(); // \Binance\Client\DerivativesTradingCoinFutures\Model\ModifyIsolatedPositionMarginRequest

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
| **modifyIsolatedPositionMarginRequest** | [**\Binance\Client\DerivativesTradingCoinFutures\Model\ModifyIsolatedPositionMarginRequest**](../Model/ModifyIsolatedPositionMarginRequest.md)|  | |

### Return type

[**\Binance\Client\DerivativesTradingCoinFutures\Model\ModifyIsolatedPositionMarginResponse**](../Model/ModifyIsolatedPositionMarginResponse.md)

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
modifyMultipleOrders($modifyMultipleOrdersRequest): \Binance\Client\DerivativesTradingCoinFutures\Model\ModifyMultipleOrdersResponse
```

Modify Multiple Orders (TRADE)

Modify Multiple Orders  Weight(IP): 5  Security Type: TRADE  Notes: - Parameter rules are same with `Modify Order` - Batch modify orders are processed concurrently, and the order of matching is not guaranteed. - The order of returned contents for batch modify orders is the same as the order of the order list. - One order can only be modfied for less than 10000 times

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingCoinFutures\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$modifyMultipleOrdersRequest = new \Binance\Client\DerivativesTradingCoinFutures\Model\ModifyMultipleOrdersRequest(); // \Binance\Client\DerivativesTradingCoinFutures\Model\ModifyMultipleOrdersRequest

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
| **modifyMultipleOrdersRequest** | [**\Binance\Client\DerivativesTradingCoinFutures\Model\ModifyMultipleOrdersRequest**](../Model/ModifyMultipleOrdersRequest.md)|  | |

### Return type

[**\Binance\Client\DerivativesTradingCoinFutures\Model\ModifyMultipleOrdersResponse**](../Model/ModifyMultipleOrdersResponse.md)

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
modifyOrder($modifyOrderRequest): \Binance\Client\DerivativesTradingCoinFutures\Model\ModifyOrderResponse
```

Modify Order (TRADE)

Order modify function, currently only LIMIT order modification is supported, modified orders will be reordered in the match queue  Weight(IP): 1  Security Type: TRADE  Notes: - Either `orderId` or `origClientOrderId` must be sent, and the `orderId` will prevail if both are sent. - Either `quantity` or `price` must be sent. *(After CM migration, both `quantity` and `price` are required.)* - When the new `quantity` or `price` doesn't satisfy PRICE_FILTER / PERCENT_FILTER / LOT_SIZE, amendment will be rejected and the order will stay as it is. - However the order will be cancelled by the amendment in the following situations:   - when the order is in partially filled status and the new `quantity`   - When the order is `GTX` and the new price will cause it to be executed immediately   - One order can only be modfied for less than 10000 times

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingCoinFutures\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$modifyOrderRequest = new \Binance\Client\DerivativesTradingCoinFutures\Model\ModifyOrderRequest(); // \Binance\Client\DerivativesTradingCoinFutures\Model\ModifyOrderRequest

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
| **modifyOrderRequest** | [**\Binance\Client\DerivativesTradingCoinFutures\Model\ModifyOrderRequest**](../Model/ModifyOrderRequest.md)|  | |

### Return type

[**\Binance\Client\DerivativesTradingCoinFutures\Model\ModifyOrderResponse**](../Model/ModifyOrderResponse.md)

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
newOrder($newOrderRequest): \Binance\Client\DerivativesTradingCoinFutures\Model\NewOrderResponse
```

New Order (TRADE)

Send in a new order.  Weight: 1 on 1min order rate limit(X-MBX-ORDER-COUNT-1M) 0 on IP rate limit(x-mbx-used-weight-1m)  Security Type: TRADE  Notes: - Additional mandatory parameters based on `type`:   - Order with type `STOP`, parameter `timeInForce` can be sent ( default `GTC`).   - Order with type `TAKE_PROFIT`, parameter `timeInForce` can be sent ( default `GTC`).   - Condition orders will be triggered when:   - If parameter`priceProtect`is sent as true:   - when price reaches the `stopPrice` ，the difference rate between \"MARK_PRICE\" and \"CONTRACT_PRICE\" cannot be larger than the \"triggerProtect\" of the symbol   - \"triggerProtect\" of a symbol can be got from `GET /dapi/v1/exchangeInfo`   - `STOP`, `STOP_MARKET`:   - BUY: latest price (\"MARK_PRICE\" or \"CONTRACT_PRICE\") >= `stopPrice`   - SELL: latest price (\"MARK_PRICE\" or \"CONTRACT_PRICE\")   -`TAKE_PROFIT`, `TAKE_PROFIT_MARKET`:   - BUY: latest price (\"MARK_PRICE\" or \"CONTRACT_PRICE\")   - SELL: latest price (\"MARK_PRICE\" or \"CONTRACT_PRICE\") >= `stopPrice`   - `TRAILING_STOP_MARKET`:   - BUY: the lowest price after order placed ``= the lowest price * (1 + `callbackRate`)   - SELL: the highest price after order placed >= `activationPrice`, and the latest price    - For `TRAILING_STOP_MARKET`, if you got such error code. > `{\"code\": -2021, \"msg\": \"Order would immediately trigger.\"}` > means that the parameters you send do not meet the following requirements:   - BUY: `activationPrice` should be smaller than latest price.   - SELL: `activationPrice` should be larger than latest price.   - If `newOrderRespType ` is sent as `RESULT` :   - `MARKET` order: the final FILLED result of the order will be return directly.   - `LIMIT` order with special `timeInForce`: the final status result of the order(FILLED or EXPIRED) will be returned directly.   - `STOP_MARKET`, `TAKE_PROFIT_MARKET` with `closePosition`=`true`:   - Follow the same rules for condition orders.   - If triggered,**close all** current long position( if `SELL`) or current short position( if `BUY`).   - Cannot be used with `quantity` parameter   - Cannot be used with `reduceOnly` parameter   - In Hedge Mode,cannot be used with `BUY` orders in `LONG` position side. and cannot be used with `SELL` orders in `SHORT` position side    - `selfTradePreventionMode` is only effective when `timeInForce` set to `IOC` or `GTC`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingCoinFutures\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$newOrderRequest = new \Binance\Client\DerivativesTradingCoinFutures\Model\NewOrderRequest(); // \Binance\Client\DerivativesTradingCoinFutures\Model\NewOrderRequest

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
| **newOrderRequest** | [**\Binance\Client\DerivativesTradingCoinFutures\Model\NewOrderRequest**](../Model/NewOrderRequest.md)|  | |

### Return type

[**\Binance\Client\DerivativesTradingCoinFutures\Model\NewOrderResponse**](../Model/NewOrderResponse.md)

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
placeMultipleOrders($placeMultipleOrdersRequest): \Binance\Client\DerivativesTradingCoinFutures\Model\PlaceMultipleOrdersResponse
```

Place Multiple Orders (TRADE)

Place multiple orders  * Parameter rules are same with `New Order` * Batch orders are processed concurrently, and the order of matching is not guaranteed. * The order of returned contents for batch orders is the same as the order of the order list.  Weight(IP): 5  Security Type: TRADE  Notes: - `batchOrders` must be a JSON array of order parameter objects. - Example:   `/dapi/v1/batchOrders?batchOrders=[{\"type\":\"LIMIT\",\"timeInForce\":\"GTC\",\"symbol\":\"BTCUSD_PERP\",\"side\":\"BUY\",\"price\":\"10001\",\"quantity\":\"1\"}]`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingCoinFutures\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$placeMultipleOrdersRequest = new \Binance\Client\DerivativesTradingCoinFutures\Model\PlaceMultipleOrdersRequest(); // \Binance\Client\DerivativesTradingCoinFutures\Model\PlaceMultipleOrdersRequest

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
| **placeMultipleOrdersRequest** | [**\Binance\Client\DerivativesTradingCoinFutures\Model\PlaceMultipleOrdersRequest**](../Model/PlaceMultipleOrdersRequest.md)|  | |

### Return type

[**\Binance\Client\DerivativesTradingCoinFutures\Model\PlaceMultipleOrdersResponse**](../Model/PlaceMultipleOrdersResponse.md)

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
positionAdlQuantileEstimation($symbol, $recvWindow): \Binance\Client\DerivativesTradingCoinFutures\Model\PositionAdlQuantileEstimationResponse
```

Position ADL Quantile Estimation (USER_DATA)

Query position ADL quantile estimation  * Values update every 30s. * Values 0, 1, 2, 3, 4 shows the queue position and possibility of ADL from low to high. * For positions of the symbol are in One-way Mode or isolated margined in Hedge Mode, \"LONG\", \"SHORT\", and \"BOTH\" will be returned to show the positions' adl quantiles of different position sides. * If the positions of the symbol are crossed margined in Hedge Mode:   * \"HEDGE\" as a sign will be returned instead of \"BOTH\";   * A same value caculated on unrealized pnls on long and short sides' positions will be shown for \"LONG\" and \"SHORT\" when there are positions in both of long and short sides.  Weight(IP): 5  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingCoinFutures\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSD_200925; // string
$recvWindow = 5000; // int

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

[**\Binance\Client\DerivativesTradingCoinFutures\Model\PositionAdlQuantileEstimationResponse**](../Model/PositionAdlQuantileEstimationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `positionInformation()`

```php
positionInformation($marginAsset, $pair, $recvWindow): \Binance\Client\DerivativesTradingCoinFutures\Model\PositionInformationResponse
```

Position Information (USER_DATA)

Get current account information.  Weight(IP): 1  Security Type: USER_DATA  Notes: - If neither `marginAsset` nor `pair` is sent, positions of all symbols with `TRADING` status will be returned. - for One-way Mode user, the response will only show the \"BOTH\" positions - for Hedge Mode user, the response will show \"BOTH\", \"LONG\", and \"SHORT\" positions. **Note** > Please use with user data stream `ACCOUNT_UPDATE` to meet your timeliness and accuracy needs. - Please use with user data stream ACCOUNT_UPDATE to meet your timeliness and accuracy needs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingCoinFutures\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$marginAsset = USDT; // string
$pair = BTCUSDT; // string
$recvWindow = 5000; // int

try {
    $result = $apiInstance->positionInformation($marginAsset, $pair, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->positionInformation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **marginAsset** | **string**|  | [optional] |
| **pair** | **string**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingCoinFutures\Model\PositionInformationResponse**](../Model/PositionInformationResponse.md)

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
queryCurrentOpenOrder($symbol, $orderId, $origClientOrderId, $recvWindow): \Binance\Client\DerivativesTradingCoinFutures\Model\QueryCurrentOpenOrderResponse
```

Query Current Open Order (USER_DATA)

Query Current Open Order  Weight(IP): 1  Security Type: USER_DATA  Notes: - Either`orderId` or `origClientOrderId` must be sent - If the queried order has been filled or cancelled, the error message \"Order does not exist\" will be returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingCoinFutures\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSD_200925; // string | Symbol
$orderId = 1; // int | Order ID
$origClientOrderId = 1; // string | Client order ID
$recvWindow = 5000; // int

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
| **symbol** | **string**| Symbol | |
| **orderId** | **int**| Order ID | [optional] |
| **origClientOrderId** | **string**| Client order ID | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingCoinFutures\Model\QueryCurrentOpenOrderResponse**](../Model/QueryCurrentOpenOrderResponse.md)

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
queryOrder($symbol, $orderId, $origClientOrderId, $recvWindow): \Binance\Client\DerivativesTradingCoinFutures\Model\QueryOrderResponse
```

Query Order (USER_DATA)

Check an order's status.  * These orders will not be found:   * order status is CANCELED or EXPIRED AND order has NO filled trade AND created time + 3 days < current time   * order create time + 90 days < current time  Weight(IP): 1  Security Type: USER_DATA  Notes: - Either `orderId` or `origClientOrderId` must be sent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingCoinFutures\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSD_200925; // string | Symbol
$orderId = 1; // int | Order ID
$origClientOrderId = 1; // string | Client order ID
$recvWindow = 5000; // int

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
| **symbol** | **string**| Symbol | |
| **orderId** | **int**| Order ID | [optional] |
| **origClientOrderId** | **string**| Client order ID | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingCoinFutures\Model\QueryOrderResponse**](../Model/QueryOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersForceOrders()`

```php
usersForceOrders($symbol, $autoCloseType, $startTime, $endTime, $limit, $recvWindow): \Binance\Client\DerivativesTradingCoinFutures\Model\UsersForceOrdersResponse
```

User's Force Orders (USER_DATA)

User's Force Orders  Weight: **20** (after CM migration: **20** with symbol / **50** without symbol)  Security Type: USER_DATA  Notes: - If \"autoCloseType\" is not sent, orders with both of the types will be returned - Only support querying data in the past 90 days

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingCoinFutures\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSD_200925; // string
$autoCloseType = new \Binance\Client\DerivativesTradingCoinFutures\Model\\Binance\Client\DerivativesTradingCoinFutures\Model\AutoCloseType(); // \Binance\Client\DerivativesTradingCoinFutures\Model\AutoCloseType
$startTime = 1623319461670; // int
$endTime = 1641782889000; // int
$limit = 30; // int | Maximum number of records to return.
$recvWindow = 5000; // int

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
| **autoCloseType** | [**\Binance\Client\DerivativesTradingCoinFutures\Model\AutoCloseType**](../Model/.md)|  | [optional] |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **limit** | **int**| Maximum number of records to return. | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingCoinFutures\Model\UsersForceOrdersResponse**](../Model/UsersForceOrdersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
