# Binance\Client\DerivativesTradingOptions\TradeApi



All URIs are relative to https://eapi.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**accountTradeList()**](TradeApi.md#accountTradeList) | **GET** /eapi/v1/userTrades | Account Trade List (USER_DATA) |
| [**cancelAllOptionOrdersByUnderlying()**](TradeApi.md#cancelAllOptionOrdersByUnderlying) | **DELETE** /eapi/v1/allOpenOrdersByUnderlying | Cancel All Option Orders By Underlying (TRADE) |
| [**cancelAllOptionOrdersOnSpecificSymbol()**](TradeApi.md#cancelAllOptionOrdersOnSpecificSymbol) | **DELETE** /eapi/v1/allOpenOrders | Cancel all Option orders on specific symbol (TRADE) |
| [**cancelMultipleOptionOrders()**](TradeApi.md#cancelMultipleOptionOrders) | **DELETE** /eapi/v1/batchOrders | Cancel Multiple Option Orders (TRADE) |
| [**cancelOptionOrder()**](TradeApi.md#cancelOptionOrder) | **DELETE** /eapi/v1/order | Cancel Option Order (TRADE) |
| [**newOrder()**](TradeApi.md#newOrder) | **POST** /eapi/v1/order | New Order (TRADE) |
| [**optionPositionInformation()**](TradeApi.md#optionPositionInformation) | **GET** /eapi/v1/position | Option Position Information (USER_DATA) |
| [**placeMultipleOrders()**](TradeApi.md#placeMultipleOrders) | **POST** /eapi/v1/batchOrders | Place Multiple Orders (TRADE) |
| [**queryCurrentOpenOptionOrders()**](TradeApi.md#queryCurrentOpenOptionOrders) | **GET** /eapi/v1/openOrders | Query Current Open Option Orders (USER_DATA) |
| [**queryOptionOrderHistory()**](TradeApi.md#queryOptionOrderHistory) | **GET** /eapi/v1/historyOrders | Query Option Order History (TRADE) |
| [**querySingleOrder()**](TradeApi.md#querySingleOrder) | **GET** /eapi/v1/order | Query Single Order (TRADE) |
| [**tradfiOptionsContract()**](TradeApi.md#tradfiOptionsContract) | **POST** /eapi/v1/stock/contract | TradFi Options Contract (USER_DATA) |
| [**userCommission()**](TradeApi.md#userCommission) | **GET** /eapi/v1/commission | User Commission (USER_DATA) |
| [**userExerciseRecord()**](TradeApi.md#userExerciseRecord) | **GET** /eapi/v1/exerciseRecord | User Exercise Record (USER_DATA) |


## `accountTradeList()`

```php
accountTradeList($symbol, $fromId, $startTime, $endTime, $limit, $recvWindow): \Binance\Client\DerivativesTradingOptions\Model\AccountTradeListResponse
```

Account Trade List (USER_DATA)

Get trades for a specific account and symbol.  Weight(IP): 5  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingOptions\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTC-200730-9000-C; // string | Option trading pair.
$fromId = 1; // int | Trade id to fetch from. Default gets most recent trades, e.g 4611875134427365376
$startTime = 1623319461670; // int | Start Time, e.g 1593511200000
$endTime = 1641782889000; // int | End Time, e.g 1593512200000
$limit = 20; // int | Number of result sets returned.
$recvWindow = 5000; // int | Recv Window.

try {
    $result = $apiInstance->accountTradeList($symbol, $fromId, $startTime, $endTime, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->accountTradeList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**| Option trading pair. | |
| **fromId** | **int**| Trade id to fetch from. Default gets most recent trades, e.g 4611875134427365376 | [optional] |
| **startTime** | **int**| Start Time, e.g 1593511200000 | [optional] |
| **endTime** | **int**| End Time, e.g 1593512200000 | [optional] |
| **limit** | **int**| Number of result sets returned. | [optional] |
| **recvWindow** | **int**| Recv Window. | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingOptions\Model\AccountTradeListResponse**](../Model/AccountTradeListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelAllOptionOrdersByUnderlying()`

```php
cancelAllOptionOrdersByUnderlying($underlying, $recvWindow): \Binance\Client\DerivativesTradingOptions\Model\CancelAllOptionOrdersByUnderlyingResponse
```

Cancel All Option Orders By Underlying (TRADE)

Cancel all active orders on specified underlying.  Weight(IP): 1  Security Type: TRADE

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingOptions\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$underlying = BTCUSDT; // string | Underlying asset.
$recvWindow = 5000; // int | Recv Window.

try {
    $result = $apiInstance->cancelAllOptionOrdersByUnderlying($underlying, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->cancelAllOptionOrdersByUnderlying: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **underlying** | **string**| Underlying asset. | |
| **recvWindow** | **int**| Recv Window. | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingOptions\Model\CancelAllOptionOrdersByUnderlyingResponse**](../Model/CancelAllOptionOrdersByUnderlyingResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelAllOptionOrdersOnSpecificSymbol()`

```php
cancelAllOptionOrdersOnSpecificSymbol($symbol, $recvWindow): \Binance\Client\DerivativesTradingOptions\Model\CancelAllOptionOrdersOnSpecificSymbolResponse
```

Cancel all Option orders on specific symbol (TRADE)

Cancel all active order on a symbol.  Weight(IP): 5  Security Type: TRADE

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingOptions\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTC-200730-9000-C; // string | Option trading pair.
$recvWindow = 5000; // int | Recv Window.

try {
    $result = $apiInstance->cancelAllOptionOrdersOnSpecificSymbol($symbol, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->cancelAllOptionOrdersOnSpecificSymbol: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**| Option trading pair. | |
| **recvWindow** | **int**| Recv Window. | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingOptions\Model\CancelAllOptionOrdersOnSpecificSymbolResponse**](../Model/CancelAllOptionOrdersOnSpecificSymbolResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelMultipleOptionOrders()`

```php
cancelMultipleOptionOrders($symbol, $orderIds, $clientOrderIds, $recvWindow): \Binance\Client\DerivativesTradingOptions\Model\CancelMultipleOptionOrdersResponse
```

Cancel Multiple Option Orders (TRADE)

Cancel multiple orders.  Weight(IP): 5  Security Type: TRADE  Notes: - At least one instance of `orderId` and `clientOrderId` must be sent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingOptions\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTC-200730-9000-C; // string | Option trading pair.
$orderIds = array(56); // \Binance\Client\DerivativesTradingOptions\Model\OrderIds | Order ID list.
$clientOrderIds = array('clientOrderIds_example'); // \Binance\Client\DerivativesTradingOptions\Model\ClientOrderIds | Client order ID list.
$recvWindow = 5000; // int | Recv Window.

try {
    $result = $apiInstance->cancelMultipleOptionOrders($symbol, $orderIds, $clientOrderIds, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->cancelMultipleOptionOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**| Option trading pair. | |
| **orderIds** | [**\Binance\Client\DerivativesTradingOptions\Model\OrderIds**](../Model/int.md)| Order ID list. | [optional] |
| **clientOrderIds** | [**\Binance\Client\DerivativesTradingOptions\Model\ClientOrderIds**](../Model/string.md)| Client order ID list. | [optional] |
| **recvWindow** | **int**| Recv Window. | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingOptions\Model\CancelMultipleOptionOrdersResponse**](../Model/CancelMultipleOptionOrdersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelOptionOrder()`

```php
cancelOptionOrder($symbol, $orderId, $clientOrderId, $recvWindow): \Binance\Client\DerivativesTradingOptions\Model\CancelOptionOrderResponse
```

Cancel Option Order (TRADE)

Cancel an active order.  Weight(IP): 1  Security Type: TRADE  Notes: - At least one instance of `orderId` and `clientOrderId` must be sent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingOptions\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTC-200730-9000-C; // string | Option trading pair.
$orderId = 4611875134427365000; // int | Order ID.
$clientOrderId = 10000; // string | clientOrderId
$recvWindow = 5000; // int | Recv Window.

try {
    $result = $apiInstance->cancelOptionOrder($symbol, $orderId, $clientOrderId, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->cancelOptionOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**| Option trading pair. | |
| **orderId** | **int**| Order ID. | [optional] |
| **clientOrderId** | **string**| clientOrderId | [optional] |
| **recvWindow** | **int**| Recv Window. | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingOptions\Model\CancelOptionOrderResponse**](../Model/CancelOptionOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `newOrder()`

```php
newOrder($newOrderRequest): \Binance\Client\DerivativesTradingOptions\Model\NewOrderResponse
```

New Order (TRADE)

Send a new order.  Security Type: TRADE  Notes: Some parameters are mandatory depending on the order type as follows:  Type | Mandatory parameters ------------ | ------------  LIMIT | timeInForce, quantity, price

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingOptions\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$newOrderRequest = new \Binance\Client\DerivativesTradingOptions\Model\NewOrderRequest(); // \Binance\Client\DerivativesTradingOptions\Model\NewOrderRequest

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
| **newOrderRequest** | [**\Binance\Client\DerivativesTradingOptions\Model\NewOrderRequest**](../Model/NewOrderRequest.md)|  | |

### Return type

[**\Binance\Client\DerivativesTradingOptions\Model\NewOrderResponse**](../Model/NewOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `optionPositionInformation()`

```php
optionPositionInformation($symbol, $recvWindow): \Binance\Client\DerivativesTradingOptions\Model\OptionPositionInformationResponse
```

Option Position Information (USER_DATA)

Get current position information.  Weight(IP): 5  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingOptions\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTC-200730-9000-C; // string | Option trading pair.
$recvWindow = 5000; // int | Recv Window.

try {
    $result = $apiInstance->optionPositionInformation($symbol, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->optionPositionInformation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**| Option trading pair. | [optional] |
| **recvWindow** | **int**| Recv Window. | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingOptions\Model\OptionPositionInformationResponse**](../Model/OptionPositionInformationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `placeMultipleOrders()`

```php
placeMultipleOrders($placeMultipleOrdersRequest): \Binance\Client\DerivativesTradingOptions\Model\PlaceMultipleOrdersResponse
```

Place Multiple Orders (TRADE)

Send multiple option orders.  Weight(IP): 5  Security Type: TRADE  Notes: Some parameters are mandatory depending on the order type as follows:  Type | Mandatory parameters ------------ | ------------  LIMIT | timeInForce, quantity, price  - Parameter rules are same with New Order - Batch orders are processed concurrently, and the order of matching is not guaranteed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingOptions\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$placeMultipleOrdersRequest = new \Binance\Client\DerivativesTradingOptions\Model\PlaceMultipleOrdersRequest(); // \Binance\Client\DerivativesTradingOptions\Model\PlaceMultipleOrdersRequest

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
| **placeMultipleOrdersRequest** | [**\Binance\Client\DerivativesTradingOptions\Model\PlaceMultipleOrdersRequest**](../Model/PlaceMultipleOrdersRequest.md)|  | |

### Return type

[**\Binance\Client\DerivativesTradingOptions\Model\PlaceMultipleOrdersResponse**](../Model/PlaceMultipleOrdersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryCurrentOpenOptionOrders()`

```php
queryCurrentOpenOptionOrders($symbol, $orderId, $startTime, $endTime, $recvWindow): \Binance\Client\DerivativesTradingOptions\Model\QueryCurrentOpenOptionOrdersResponse
```

Query Current Open Option Orders (USER_DATA)

Query current all open orders, status: ACCEPTED PARTIALLY_FILLED  Weight: 1 for a single symbol; 40 when the symbol parameter is omitted  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingOptions\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTC-200730-9000-C; // string | Option trading pair.
$orderId = 4611875134427365000; // int | Order ID.
$startTime = 1623319461670; // int | Start Time, e.g 1593511200000
$endTime = 1641782889000; // int | End Time, e.g 1593512200000
$recvWindow = 5000; // int | Recv Window.

try {
    $result = $apiInstance->queryCurrentOpenOptionOrders($symbol, $orderId, $startTime, $endTime, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->queryCurrentOpenOptionOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**| Option trading pair. | [optional] |
| **orderId** | **int**| Order ID. | [optional] |
| **startTime** | **int**| Start Time, e.g 1593511200000 | [optional] |
| **endTime** | **int**| End Time, e.g 1593512200000 | [optional] |
| **recvWindow** | **int**| Recv Window. | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingOptions\Model\QueryCurrentOpenOptionOrdersResponse**](../Model/QueryCurrentOpenOptionOrdersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryOptionOrderHistory()`

```php
queryOptionOrderHistory($symbol, $orderId, $startTime, $endTime, $limit, $recvWindow): \Binance\Client\DerivativesTradingOptions\Model\QueryOptionOrderHistoryResponse
```

Query Option Order History (TRADE)

Query all finished orders within 5 days, finished status: CANCELLED FILLED REJECTED.  Weight(IP): 3  Security Type: TRADE

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingOptions\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTC-200730-9000-C; // string | Option trading pair.
$orderId = 4611875134427365000; // int | Order ID.
$startTime = 1623319461670; // int | Start Time, e.g 1593511200000
$endTime = 1641782889000; // int | End Time, e.g 1593512200000
$limit = 20; // int | Number of result sets returned
$recvWindow = 5000; // int | Recv Window.

try {
    $result = $apiInstance->queryOptionOrderHistory($symbol, $orderId, $startTime, $endTime, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->queryOptionOrderHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**| Option trading pair. | |
| **orderId** | **int**| Order ID. | [optional] |
| **startTime** | **int**| Start Time, e.g 1593511200000 | [optional] |
| **endTime** | **int**| End Time, e.g 1593512200000 | [optional] |
| **limit** | **int**| Number of result sets returned | [optional] |
| **recvWindow** | **int**| Recv Window. | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingOptions\Model\QueryOptionOrderHistoryResponse**](../Model/QueryOptionOrderHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `querySingleOrder()`

```php
querySingleOrder($symbol, $orderId, $clientOrderId, $recvWindow): \Binance\Client\DerivativesTradingOptions\Model\QuerySingleOrderResponse
```

Query Single Order (TRADE)

Check an order status.  * These orders will not be found:   * order status is `CANCELED` or `REJECTED`, **AND**   * order has NO filled trade, **AND**   * created time + 3 days < current time  Weight(IP): 1  Security Type: TRADE  Notes: - Either `orderId` or `clientOrderId ` must be sent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingOptions\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTC-200730-9000-C; // string | Option trading pair.
$orderId = 4611875134427365000; // int | Order ID.
$clientOrderId = abc123; // string | User-defined order ID; cannot be duplicated among open orders.
$recvWindow = 5000; // int | Recv Window.

try {
    $result = $apiInstance->querySingleOrder($symbol, $orderId, $clientOrderId, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->querySingleOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**| Option trading pair. | |
| **orderId** | **int**| Order ID. | [optional] |
| **clientOrderId** | **string**| User-defined order ID; cannot be duplicated among open orders. | [optional] |
| **recvWindow** | **int**| Recv Window. | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingOptions\Model\QuerySingleOrderResponse**](../Model/QuerySingleOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tradfiOptionsContract()`

```php
tradfiOptionsContract($tradfiOptionsContractRequest): \Binance\Client\DerivativesTradingOptions\Model\TradfiOptionsContractResponse
```

TradFi Options Contract (USER_DATA)

Sign TradFi Options agreement contract  Weight(IP): 50  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingOptions\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tradfiOptionsContractRequest = new \Binance\Client\DerivativesTradingOptions\Model\TradfiOptionsContractRequest(); // \Binance\Client\DerivativesTradingOptions\Model\TradfiOptionsContractRequest

try {
    $result = $apiInstance->tradfiOptionsContract($tradfiOptionsContractRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->tradfiOptionsContract: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tradfiOptionsContractRequest** | [**\Binance\Client\DerivativesTradingOptions\Model\TradfiOptionsContractRequest**](../Model/TradfiOptionsContractRequest.md)|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingOptions\Model\TradfiOptionsContractResponse**](../Model/TradfiOptionsContractResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userCommission()`

```php
userCommission($recvWindow): \Binance\Client\DerivativesTradingOptions\Model\UserCommissionResponse
```

User Commission (USER_DATA)

Get account commission.  Weight(IP): 5  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingOptions\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 5000; // int | Recv Window.

try {
    $result = $apiInstance->userCommission($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->userCommission: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**| Recv Window. | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingOptions\Model\UserCommissionResponse**](../Model/UserCommissionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userExerciseRecord()`

```php
userExerciseRecord($symbol, $startTime, $endTime, $limit, $recvWindow): \Binance\Client\DerivativesTradingOptions\Model\UserExerciseRecordResponse
```

User Exercise Record (USER_DATA)

Get account exercise records.  Weight(IP): 5  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingOptions\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTC-200730-9000-C; // string | Option trading pair.
$startTime = 1623319461670; // int | Start Time, e.g 1593511200000
$endTime = 1641782889000; // int | End Time, e.g 1593512200000
$limit = 20; // int | Number of result sets returned.
$recvWindow = 5000; // int | Recv Window.

try {
    $result = $apiInstance->userExerciseRecord($symbol, $startTime, $endTime, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->userExerciseRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**| Option trading pair. | [optional] |
| **startTime** | **int**| Start Time, e.g 1593511200000 | [optional] |
| **endTime** | **int**| End Time, e.g 1593512200000 | [optional] |
| **limit** | **int**| Number of result sets returned. | [optional] |
| **recvWindow** | **int**| Recv Window. | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingOptions\Model\UserExerciseRecordResponse**](../Model/UserExerciseRecordResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
