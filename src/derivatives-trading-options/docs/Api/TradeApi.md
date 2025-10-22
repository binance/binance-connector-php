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
| [**placeMultipleOrders()**](TradeApi.md#placeMultipleOrders) | **POST** /eapi/v1/batchOrders | Place Multiple Orders(TRADE) |
| [**queryCurrentOpenOptionOrders()**](TradeApi.md#queryCurrentOpenOptionOrders) | **GET** /eapi/v1/openOrders | Query Current Open Option Orders (USER_DATA) |
| [**queryOptionOrderHistory()**](TradeApi.md#queryOptionOrderHistory) | **GET** /eapi/v1/historyOrders | Query Option Order History (TRADE) |
| [**querySingleOrder()**](TradeApi.md#querySingleOrder) | **GET** /eapi/v1/order | Query Single Order (TRADE) |
| [**userExerciseRecord()**](TradeApi.md#userExerciseRecord) | **GET** /eapi/v1/exerciseRecord | User Exercise Record (USER_DATA) |


## `accountTradeList()`

```php
accountTradeList($symbol, $fromId, $startTime, $endTime, $limit, $recvWindow): \Binance\Client\DerivativesTradingOptions\Model\AccountTradeListResponse
```

Account Trade List (USER_DATA)

Get trades for a specific account and symbol.  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingOptions\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string | Option trading pair, e.g BTC-200730-9000-C
$fromId = 56; // int | The UniqueId ID from which to return. The latest deal record is returned by default
$startTime = 56; // int | Start Time, e.g 1593511200000
$endTime = 56; // int | End Time, e.g 1593512200000
$limit = 56; // int | Number of result sets returned Default:100 Max:1000
$recvWindow = 56; // int

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
| **symbol** | **string**| Option trading pair, e.g BTC-200730-9000-C | [optional] |
| **fromId** | **int**| The UniqueId ID from which to return. The latest deal record is returned by default | [optional] |
| **startTime** | **int**| Start Time, e.g 1593511200000 | [optional] |
| **endTime** | **int**| End Time, e.g 1593512200000 | [optional] |
| **limit** | **int**| Number of result sets returned Default:100 Max:1000 | [optional] |
| **recvWindow** | **int**|  | [optional] |

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

Cancel all active orders on specified underlying.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingOptions\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$underlying = 'underlying_example'; // string | Option underlying, e.g BTCUSDT
$recvWindow = 56; // int

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
| **underlying** | **string**| Option underlying, e.g BTCUSDT | |
| **recvWindow** | **int**|  | [optional] |

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

Cancel all active order on a symbol.  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingOptions\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string | Option trading pair, e.g BTC-200730-9000-C
$recvWindow = 56; // int

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
| **symbol** | **string**| Option trading pair, e.g BTC-200730-9000-C | |
| **recvWindow** | **int**|  | [optional] |

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

Cancel multiple orders.  * At least one instance of `orderId` and `clientOrderId` must be sent.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingOptions\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string | Option trading pair, e.g BTC-200730-9000-C
$orderIds = array(56); // \Binance\Client\DerivativesTradingOptions\Model\OrderIds | Order ID, e.g [4611875134427365377,4611875134427365378]
$clientOrderIds = array('clientOrderIds_example'); // \Binance\Client\DerivativesTradingOptions\Model\ClientOrderIds | User-defined order ID, e.g [\"my_id_1\",\"my_id_2\"]
$recvWindow = 56; // int

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
| **symbol** | **string**| Option trading pair, e.g BTC-200730-9000-C | |
| **orderIds** | [**\Binance\Client\DerivativesTradingOptions\Model\OrderIds**](../Model/int.md)| Order ID, e.g [4611875134427365377,4611875134427365378] | [optional] |
| **clientOrderIds** | [**\Binance\Client\DerivativesTradingOptions\Model\ClientOrderIds**](../Model/string.md)| User-defined order ID, e.g [\&quot;my_id_1\&quot;,\&quot;my_id_2\&quot;] | [optional] |
| **recvWindow** | **int**|  | [optional] |

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

Cancel an active order.  * At least one instance of `orderId` and `clientOrderId` must be sent.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingOptions\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string | Option trading pair, e.g BTC-200730-9000-C
$orderId = 56; // int | Order ID, e.g 4611875134427365377
$clientOrderId = 'clientOrderId_example'; // string | User-defined order ID, e.g 10000
$recvWindow = 56; // int

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
| **symbol** | **string**| Option trading pair, e.g BTC-200730-9000-C | |
| **orderId** | **int**| Order ID, e.g 4611875134427365377 | [optional] |
| **clientOrderId** | **string**| User-defined order ID, e.g 10000 | [optional] |
| **recvWindow** | **int**|  | [optional] |

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

Send a new order.  Weight: 0

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

Get current position information.  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingOptions\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string | Option trading pair, e.g BTC-200730-9000-C
$recvWindow = 56; // int

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
| **symbol** | **string**| Option trading pair, e.g BTC-200730-9000-C | [optional] |
| **recvWindow** | **int**|  | [optional] |

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

Place Multiple Orders(TRADE)

Send multiple option orders.  * Parameter rules are same with New Order * Batch orders are processed concurrently, and the order of matching is not guaranteed.  Weight: 5

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

Query current all open orders, status: ACCEPTED PARTIALLY_FILLED  Weight: 1 for a single symbol; 40 when the symbol parameter is omitted

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingOptions\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string | Option trading pair, e.g BTC-200730-9000-C
$orderId = 56; // int | Order ID, e.g 4611875134427365377
$startTime = 56; // int | Start Time, e.g 1593511200000
$endTime = 56; // int | End Time, e.g 1593512200000
$recvWindow = 56; // int

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
| **symbol** | **string**| Option trading pair, e.g BTC-200730-9000-C | [optional] |
| **orderId** | **int**| Order ID, e.g 4611875134427365377 | [optional] |
| **startTime** | **int**| Start Time, e.g 1593511200000 | [optional] |
| **endTime** | **int**| End Time, e.g 1593512200000 | [optional] |
| **recvWindow** | **int**|  | [optional] |

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

Query all finished orders within 5 days, finished status: CANCELLED FILLED REJECTED.  Weight: 3

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingOptions\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string | Option trading pair, e.g BTC-200730-9000-C
$orderId = 56; // int | Order ID, e.g 4611875134427365377
$startTime = 56; // int | Start Time, e.g 1593511200000
$endTime = 56; // int | End Time, e.g 1593512200000
$limit = 56; // int | Number of result sets returned Default:100 Max:1000
$recvWindow = 56; // int

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
| **symbol** | **string**| Option trading pair, e.g BTC-200730-9000-C | |
| **orderId** | **int**| Order ID, e.g 4611875134427365377 | [optional] |
| **startTime** | **int**| Start Time, e.g 1593511200000 | [optional] |
| **endTime** | **int**| End Time, e.g 1593512200000 | [optional] |
| **limit** | **int**| Number of result sets returned Default:100 Max:1000 | [optional] |
| **recvWindow** | **int**|  | [optional] |

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

Check an order status.  * These orders will not be found: * order status is `CANCELED` or `REJECTED`, **AND** * order has NO filled trade, **AND** * created time + 3 days < current time   * Either `orderId` or `clientOrderId ` must be sent.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingOptions\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string | Option trading pair, e.g BTC-200730-9000-C
$orderId = 56; // int | Order ID, e.g 4611875134427365377
$clientOrderId = 'clientOrderId_example'; // string | User-defined order ID, e.g 10000
$recvWindow = 56; // int

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
| **symbol** | **string**| Option trading pair, e.g BTC-200730-9000-C | |
| **orderId** | **int**| Order ID, e.g 4611875134427365377 | [optional] |
| **clientOrderId** | **string**| User-defined order ID, e.g 10000 | [optional] |
| **recvWindow** | **int**|  | [optional] |

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

## `userExerciseRecord()`

```php
userExerciseRecord($symbol, $startTime, $endTime, $limit, $recvWindow): \Binance\Client\DerivativesTradingOptions\Model\UserExerciseRecordResponse
```

User Exercise Record (USER_DATA)

Get account exercise records.  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingOptions\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string | Option trading pair, e.g BTC-200730-9000-C
$startTime = 56; // int | Start Time, e.g 1593511200000
$endTime = 56; // int | End Time, e.g 1593512200000
$limit = 56; // int | Number of result sets returned Default:100 Max:1000
$recvWindow = 56; // int

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
| **symbol** | **string**| Option trading pair, e.g BTC-200730-9000-C | [optional] |
| **startTime** | **int**| Start Time, e.g 1593511200000 | [optional] |
| **endTime** | **int**| End Time, e.g 1593512200000 | [optional] |
| **limit** | **int**| Number of result sets returned Default:100 Max:1000 | [optional] |
| **recvWindow** | **int**|  | [optional] |

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
