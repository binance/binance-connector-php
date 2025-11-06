# Binance\Client\Spot\TradeApi

All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteOpenOrders()**](TradeApi.md#deleteOpenOrders) | **DELETE** /api/v3/openOrders | Cancel All Open Orders on a Symbol |
| [**deleteOrder()**](TradeApi.md#deleteOrder) | **DELETE** /api/v3/order | Cancel order |
| [**deleteOrderList()**](TradeApi.md#deleteOrderList) | **DELETE** /api/v3/orderList | Cancel Order list |
| [**newOrder()**](TradeApi.md#newOrder) | **POST** /api/v3/order | New order |
| [**orderAmendKeepPriority()**](TradeApi.md#orderAmendKeepPriority) | **PUT** /api/v3/order/amend/keepPriority | Order Amend Keep Priority |
| [**orderCancelReplace()**](TradeApi.md#orderCancelReplace) | **POST** /api/v3/order/cancelReplace | Cancel an Existing Order and Send a New Order |
| [**orderListOco()**](TradeApi.md#orderListOco) | **POST** /api/v3/orderList/oco | New Order list - OCO |
| [**orderListOto()**](TradeApi.md#orderListOto) | **POST** /api/v3/orderList/oto | New Order list - OTO |
| [**orderListOtoco()**](TradeApi.md#orderListOtoco) | **POST** /api/v3/orderList/otoco | New Order list - OTOCO |
| [**orderOco()**](TradeApi.md#orderOco) | **POST** /api/v3/order/oco | New OCO - Deprecated |
| [**orderTest()**](TradeApi.md#orderTest) | **POST** /api/v3/order/test | Test new order |
| [**sorOrder()**](TradeApi.md#sorOrder) | **POST** /api/v3/sor/order | New order using SOR |
| [**sorOrderTest()**](TradeApi.md#sorOrderTest) | **POST** /api/v3/sor/order/test | Test new order using SOR |


## `deleteOpenOrders()`

```php
deleteOpenOrders($symbol, $recvWindow): \Binance\Client\Spot\Model\DeleteOpenOrdersResponse
```

Cancel All Open Orders on a Symbol

Cancels all active orders on a symbol. This includes orders that are part of an order list. Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$recvWindow = 3.4; // float | The value cannot be greater than `60000`. <br> Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified.

try {
    $result = $apiInstance->deleteOpenOrders($symbol, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->deleteOpenOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **recvWindow** | **float**| The value cannot be greater than &#x60;60000&#x60;. &lt;br&gt; Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. | [optional] |

### Return type

[**\Binance\Client\Spot\Model\DeleteOpenOrdersResponse**](../Model/DeleteOpenOrdersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteOrder()`

```php
deleteOrder($symbol, $orderId, $origClientOrderId, $newClientOrderId, $cancelRestrictions, $recvWindow): \Binance\Client\Spot\Model\DeleteOrderResponse
```

Cancel order

Cancel an active order. Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$orderId = 56; // int
$origClientOrderId = 'origClientOrderId_example'; // string
$newClientOrderId = 'newClientOrderId_example'; // string | A unique id among open orders. Automatically generated if not sent.<br/> Orders with the same `newClientOrderID` can be accepted only when the previous one is filled, otherwise the order will be rejected.
$cancelRestrictions = new \Binance\Client\Spot\Model\\Binance\Client\Spot\Model\CancelRestrictions(); // \Binance\Client\Spot\Model\CancelRestrictions
$recvWindow = 3.4; // float | The value cannot be greater than `60000`. <br> Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified.

try {
    $result = $apiInstance->deleteOrder($symbol, $orderId, $origClientOrderId, $newClientOrderId, $cancelRestrictions, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->deleteOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **orderId** | **int**|  | [optional] |
| **origClientOrderId** | **string**|  | [optional] |
| **newClientOrderId** | **string**| A unique id among open orders. Automatically generated if not sent.&lt;br/&gt; Orders with the same &#x60;newClientOrderID&#x60; can be accepted only when the previous one is filled, otherwise the order will be rejected. | [optional] |
| **cancelRestrictions** | [**\Binance\Client\Spot\Model\CancelRestrictions**](../Model/.md)|  | [optional] |
| **recvWindow** | **float**| The value cannot be greater than &#x60;60000&#x60;. &lt;br&gt; Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. | [optional] |

### Return type

[**\Binance\Client\Spot\Model\DeleteOrderResponse**](../Model/DeleteOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteOrderList()`

```php
deleteOrderList($symbol, $orderListId, $listClientOrderId, $newClientOrderId, $recvWindow): \Binance\Client\Spot\Model\DeleteOrderListResponse
```

Cancel Order list

Cancel an entire Order list Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$orderListId = 56; // int | Either `orderListId` or `listClientOrderId` must be provided
$listClientOrderId = 'listClientOrderId_example'; // string | A unique Id for the entire orderList
$newClientOrderId = 'newClientOrderId_example'; // string | A unique id among open orders. Automatically generated if not sent.<br/> Orders with the same `newClientOrderID` can be accepted only when the previous one is filled, otherwise the order will be rejected.
$recvWindow = 3.4; // float | The value cannot be greater than `60000`. <br> Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified.

try {
    $result = $apiInstance->deleteOrderList($symbol, $orderListId, $listClientOrderId, $newClientOrderId, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->deleteOrderList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **orderListId** | **int**| Either &#x60;orderListId&#x60; or &#x60;listClientOrderId&#x60; must be provided | [optional] |
| **listClientOrderId** | **string**| A unique Id for the entire orderList | [optional] |
| **newClientOrderId** | **string**| A unique id among open orders. Automatically generated if not sent.&lt;br/&gt; Orders with the same &#x60;newClientOrderID&#x60; can be accepted only when the previous one is filled, otherwise the order will be rejected. | [optional] |
| **recvWindow** | **float**| The value cannot be greater than &#x60;60000&#x60;. &lt;br&gt; Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. | [optional] |

### Return type

[**\Binance\Client\Spot\Model\DeleteOrderListResponse**](../Model/DeleteOrderListResponse.md)

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
newOrder($newOrderRequest): \Binance\Client\Spot\Model\NewOrderResponse
```

New order

Send in a new order.  This adds 1 order to the `EXCHANGE_MAX_ORDERS` filter and the `MAX_NUM_ORDERS` filter. Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$newOrderRequest = new \Binance\Client\Spot\Model\NewOrderRequest(); // \Binance\Client\Spot\Model\NewOrderRequest

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
| **newOrderRequest** | [**\Binance\Client\Spot\Model\NewOrderRequest**](../Model/NewOrderRequest.md)|  | |

### Return type

[**\Binance\Client\Spot\Model\NewOrderResponse**](../Model/NewOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderAmendKeepPriority()`

```php
orderAmendKeepPriority($orderAmendKeepPriorityRequest): \Binance\Client\Spot\Model\OrderAmendKeepPriorityResponse
```

Order Amend Keep Priority

Reduce the quantity of an existing open order.  This adds 0 orders to the `EXCHANGE_MAX_ORDERS` filter and the `MAX_NUM_ORDERS` filter.  Read [Order Amend Keep Priority FAQ](faqs/order_amend_keep_priority.md) to learn more. Weight: 4

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$orderAmendKeepPriorityRequest = new \Binance\Client\Spot\Model\OrderAmendKeepPriorityRequest(); // \Binance\Client\Spot\Model\OrderAmendKeepPriorityRequest

try {
    $result = $apiInstance->orderAmendKeepPriority($orderAmendKeepPriorityRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->orderAmendKeepPriority: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderAmendKeepPriorityRequest** | [**\Binance\Client\Spot\Model\OrderAmendKeepPriorityRequest**](../Model/OrderAmendKeepPriorityRequest.md)|  | |

### Return type

[**\Binance\Client\Spot\Model\OrderAmendKeepPriorityResponse**](../Model/OrderAmendKeepPriorityResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderCancelReplace()`

```php
orderCancelReplace($orderCancelReplaceRequest): \Binance\Client\Spot\Model\OrderCancelReplaceResponse
```

Cancel an Existing Order and Send a New Order

Cancels an existing order and places a new order on the same symbol.  Filters and Order Count are evaluated before the processing of the cancellation and order placement occurs.  A new order that was not attempted (i.e. when `newOrderResult: NOT_ATTEMPTED`), will still increase the unfilled order count by 1. Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$orderCancelReplaceRequest = new \Binance\Client\Spot\Model\OrderCancelReplaceRequest(); // \Binance\Client\Spot\Model\OrderCancelReplaceRequest

try {
    $result = $apiInstance->orderCancelReplace($orderCancelReplaceRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->orderCancelReplace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderCancelReplaceRequest** | [**\Binance\Client\Spot\Model\OrderCancelReplaceRequest**](../Model/OrderCancelReplaceRequest.md)|  | |

### Return type

[**\Binance\Client\Spot\Model\OrderCancelReplaceResponse**](../Model/OrderCancelReplaceResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderListOco()`

```php
orderListOco($orderListOcoRequest): \Binance\Client\Spot\Model\OrderListOcoResponse
```

New Order list - OCO

Send in an one-cancels-the-other (OCO) pair, where activation of one order immediately cancels the other.  * An OCO has 2 orders called the **above order** and **below order**. * One of the orders must be a `LIMIT_MAKER/TAKE_PROFIT/TAKE_PROFIT_LIMIT` order and the other must be `STOP_LOSS` or `STOP_LOSS_LIMIT` order. * Price restrictions   * If the OCO is on the `SELL` side:     * `LIMIT_MAKER/TAKE_PROFIT_LIMIT` `price` > Last Traded Price >  `STOP_LOSS/STOP_LOSS_LIMIT` `stopPrice`     * `TAKE_PROFIT stopPrice` > Last Traded Price > `STOP_LOSS/STOP_LOSS_LIMIT stopPrice`   * If the OCO is on the `BUY` side:     * `LIMIT_MAKER/TAKE_PROFIT_LIMIT price` < Last Traded Price < `stopPrice`     * `TAKE_PROFIT stopPrice` < Last Traded Price < `STOP_LOSS/STOP_LOSS_LIMIT stopPrice` * OCOs add **2 orders** to the `EXCHANGE_MAX_ORDERS` filter and the `MAX_NUM_ORDERS` filter. Weight: 1  Unfilled Order Count: 2

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$orderListOcoRequest = new \Binance\Client\Spot\Model\OrderListOcoRequest(); // \Binance\Client\Spot\Model\OrderListOcoRequest

try {
    $result = $apiInstance->orderListOco($orderListOcoRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->orderListOco: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderListOcoRequest** | [**\Binance\Client\Spot\Model\OrderListOcoRequest**](../Model/OrderListOcoRequest.md)|  | |

### Return type

[**\Binance\Client\Spot\Model\OrderListOcoResponse**](../Model/OrderListOcoResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderListOto()`

```php
orderListOto($orderListOtoRequest): \Binance\Client\Spot\Model\OrderListOtoResponse
```

New Order list - OTO

Place an OTO.  * An OTO (One-Triggers-the-Other) is an order list comprised of 2 orders. * The first order is called the **working order** and must be `LIMIT` or `LIMIT_MAKER`. Initially, only the working order goes on the order book. * The second order is called the **pending order**. It can be any order type except for `MARKET` orders using parameter `quoteOrderQty`. The pending order is only placed on the order book when the working order gets **fully filled**. * If either the working order or the pending order is cancelled individually, the other order in the order list will also be canceled or expired. * When the order list is placed, if the working order gets **immediately fully filled**, the placement response will show the working order as `FILLED` but the pending order will still appear as `PENDING_NEW`. You need to query the status of the pending order again to see its updated status. * OTOs add **2 orders** to the `EXCHANGE_MAX_NUM_ORDERS` filter and `MAX_NUM_ORDERS` filter. Weight: 1  Unfilled Order Count: 2

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$orderListOtoRequest = new \Binance\Client\Spot\Model\OrderListOtoRequest(); // \Binance\Client\Spot\Model\OrderListOtoRequest

try {
    $result = $apiInstance->orderListOto($orderListOtoRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->orderListOto: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderListOtoRequest** | [**\Binance\Client\Spot\Model\OrderListOtoRequest**](../Model/OrderListOtoRequest.md)|  | |

### Return type

[**\Binance\Client\Spot\Model\OrderListOtoResponse**](../Model/OrderListOtoResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderListOtoco()`

```php
orderListOtoco($orderListOtocoRequest): \Binance\Client\Spot\Model\OrderListOtocoResponse
```

New Order list - OTOCO

Place an OTOCO.  * An OTOCO (One-Triggers-One-Cancels-the-Other) is an order list comprised of 3 orders. * The first order is called the **working order** and must be `LIMIT` or `LIMIT_MAKER`. Initially, only the working order goes on the order book.   * The behavior of the working order is the same as the [OTO](#new-order-list---oto-trade). * OTOCO has 2 pending orders (pending above and pending below), forming an OCO pair. The pending orders are only placed on the order book when the working order gets **fully filled**.     * The rules of the pending above and pending below follow the same rules as the [Order list OCO](#new-order-list---oco-trade). * OTOCOs add **3 orders** to the `EXCHANGE_MAX_NUM_ORDERS` filter and `MAX_NUM_ORDERS` filter. Weight: 1  Unfilled Order Count: 3

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$orderListOtocoRequest = new \Binance\Client\Spot\Model\OrderListOtocoRequest(); // \Binance\Client\Spot\Model\OrderListOtocoRequest

try {
    $result = $apiInstance->orderListOtoco($orderListOtocoRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->orderListOtoco: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderListOtocoRequest** | [**\Binance\Client\Spot\Model\OrderListOtocoRequest**](../Model/OrderListOtocoRequest.md)|  | |

### Return type

[**\Binance\Client\Spot\Model\OrderListOtocoResponse**](../Model/OrderListOtocoResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderOco()`

```php
orderOco($orderOcoRequest): \Binance\Client\Spot\Model\OrderOcoResponse
```

New OCO - Deprecated

Send in a new OCO.  * Price Restrictions:     * `SELL`: Limit Price > Last Price > Stop Price     * `BUY`: Limit Price < Last Price < Stop Price * Quantity Restrictions:     * Both legs must have the same quantity.     * `ICEBERG` quantities however do not have to be the same * `OCO` adds **2 orders** to the `EXCHANGE_MAX_ORDERS` filter and the `MAX_NUM_ORDERS` filter. Weight: 1  Unfilled Order Count: 2

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$orderOcoRequest = new \Binance\Client\Spot\Model\OrderOcoRequest(); // \Binance\Client\Spot\Model\OrderOcoRequest

try {
    $result = $apiInstance->orderOco($orderOcoRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->orderOco: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderOcoRequest** | [**\Binance\Client\Spot\Model\OrderOcoRequest**](../Model/OrderOcoRequest.md)|  | |

### Return type

[**\Binance\Client\Spot\Model\OrderOcoResponse**](../Model/OrderOcoResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderTest()`

```php
orderTest($orderTestRequest): \Binance\Client\Spot\Model\OrderTestResponse
```

Test new order

Test new order creation and signature/recvWindow long. Creates and validates a new order but does not send it into the matching engine. Weight: |Condition| Request Weight| |------------           | ------------ | |Without `computeCommissionRates`| 1| |With `computeCommissionRates`|20|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$orderTestRequest = new \Binance\Client\Spot\Model\OrderTestRequest(); // \Binance\Client\Spot\Model\OrderTestRequest

try {
    $result = $apiInstance->orderTest($orderTestRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->orderTest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderTestRequest** | [**\Binance\Client\Spot\Model\OrderTestRequest**](../Model/OrderTestRequest.md)|  | |

### Return type

[**\Binance\Client\Spot\Model\OrderTestResponse**](../Model/OrderTestResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sorOrder()`

```php
sorOrder($sorOrderRequest): \Binance\Client\Spot\Model\SorOrderResponse
```

New order using SOR

Places an order using smart order routing (SOR).  This adds 1 order to the `EXCHANGE_MAX_ORDERS` filter and the `MAX_NUM_ORDERS` filter.  Read [SOR FAQ](faqs/sor_faq.md) to learn more. Weight: 1  Unfilled Order Count: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sorOrderRequest = new \Binance\Client\Spot\Model\SorOrderRequest(); // \Binance\Client\Spot\Model\SorOrderRequest

try {
    $result = $apiInstance->sorOrder($sorOrderRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->sorOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sorOrderRequest** | [**\Binance\Client\Spot\Model\SorOrderRequest**](../Model/SorOrderRequest.md)|  | |

### Return type

[**\Binance\Client\Spot\Model\SorOrderResponse**](../Model/SorOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sorOrderTest()`

```php
sorOrderTest($sorOrderTestRequest): \Binance\Client\Spot\Model\SorOrderTestResponse
```

Test new order using SOR

Test new order creation and signature/recvWindow using smart order routing (SOR). Creates and validates a new order but does not send it into the matching engine. Weight: | Condition | Request Weight | | --------- | -------------- | | Without `computeCommissionRates`  |  1 | | With `computeCommissionRates`     | 20 |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sorOrderTestRequest = new \Binance\Client\Spot\Model\SorOrderTestRequest(); // \Binance\Client\Spot\Model\SorOrderTestRequest

try {
    $result = $apiInstance->sorOrderTest($sorOrderTestRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->sorOrderTest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sorOrderTestRequest** | [**\Binance\Client\Spot\Model\SorOrderTestRequest**](../Model/SorOrderTestRequest.md)|  | |

### Return type

[**\Binance\Client\Spot\Model\SorOrderTestResponse**](../Model/SorOrderTestResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
