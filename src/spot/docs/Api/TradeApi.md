# Binance\Client\Spot\TradeApi



All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteOpenOrders()**](TradeApi.md#deleteOpenOrders) | **DELETE** /api/v3/openOrders | Cancel All Open Orders on a Symbol (TRADE) |
| [**deleteOrder()**](TradeApi.md#deleteOrder) | **DELETE** /api/v3/order | Cancel order (TRADE) |
| [**deleteOrderList()**](TradeApi.md#deleteOrderList) | **DELETE** /api/v3/orderList | Cancel Order list (TRADE) |
| [**newOrder()**](TradeApi.md#newOrder) | **POST** /api/v3/order | New order (TRADE) |
| [**orderAmendKeepPriority()**](TradeApi.md#orderAmendKeepPriority) | **PUT** /api/v3/order/amend/keepPriority | Order Amend Keep Priority (TRADE) |
| [**orderCancelReplace()**](TradeApi.md#orderCancelReplace) | **POST** /api/v3/order/cancelReplace | Cancel an Existing Order and Send a New Order (TRADE) |
| [**orderListOco()**](TradeApi.md#orderListOco) | **POST** /api/v3/orderList/oco | New Order list - OCO (TRADE) |
| [**orderListOpo()**](TradeApi.md#orderListOpo) | **POST** /api/v3/orderList/opo | New Order List - OPO (TRADE) |
| [**orderListOpoco()**](TradeApi.md#orderListOpoco) | **POST** /api/v3/orderList/opoco | New Order List - OPOCO (TRADE) |
| [**orderListOto()**](TradeApi.md#orderListOto) | **POST** /api/v3/orderList/oto | New Order list - OTO (TRADE) |
| [**orderListOtoco()**](TradeApi.md#orderListOtoco) | **POST** /api/v3/orderList/otoco | New Order list - OTOCO (TRADE) |
| [**orderOco()**](TradeApi.md#orderOco) | **POST** /api/v3/order/oco | New OCO - Deprecated (TRADE) |
| [**orderTest()**](TradeApi.md#orderTest) | **POST** /api/v3/order/test | Test new order (TRADE) |
| [**sorOrder()**](TradeApi.md#sorOrder) | **POST** /api/v3/sor/order | New order using SOR (TRADE) |
| [**sorOrderTest()**](TradeApi.md#sorOrderTest) | **POST** /api/v3/sor/order/test | Test new order using SOR (TRADE) |


## `deleteOpenOrders()`

```php
deleteOpenOrders($symbol, $recvWindow): \Binance\Client\Spot\Model\DeleteOpenOrdersResponse
```

Cancel All Open Orders on a Symbol (TRADE)

Cancels all active orders on a symbol. This includes orders that are part of an order list.  Weight(IP): 1  Security Type: TRADE  Notes: **Data Source:** Matching Engine

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BNBUSDT; // string
$recvWindow = 5000; // float | Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified.

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
| **recvWindow** | **float**| Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. | [optional] |

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

Cancel order (TRADE)

Cancel an active order.  Weight(IP): 1  Security Type: TRADE  Notes: **Data Source:** Matching Engine  - Either `orderId` or `origClientOrderId` must be sent. - If both `orderId` and `origClientOrderId` are provided, the `orderId` is searched first, then the `origClientOrderId` from that result is checked against that order. If both conditions are not met the request will be rejected. - The performance for canceling an order (single cancel or as part of a cancel-replace) is always better when only `orderId` is sent. Sending `origClientOrderId` or both `orderId` + `origClientOrderId` will be slower.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BNBUSDT; // string
$orderId = 1; // int
$origClientOrderId = myOrder1; // string
$newClientOrderId = cancelMyOrder1; // string | Used to uniquely identify this cancel. Automatically generated by default.
$cancelRestrictions = new \Binance\Client\Spot\Model\\Binance\Client\Spot\Model\CancelRestrictions(); // \Binance\Client\Spot\Model\CancelRestrictions | Supported values: <br>`ONLY_NEW` - Cancel will succeed if the order status is `NEW`.<br> `ONLY_PARTIALLY_FILLED` - Cancel will succeed if order status is `PARTIALLY_FILLED`.
$recvWindow = 5000; // float | Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified.

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
| **newClientOrderId** | **string**| Used to uniquely identify this cancel. Automatically generated by default. | [optional] |
| **cancelRestrictions** | [**\Binance\Client\Spot\Model\CancelRestrictions**](../Model/.md)| Supported values: &lt;br&gt;&#x60;ONLY_NEW&#x60; - Cancel will succeed if the order status is &#x60;NEW&#x60;.&lt;br&gt; &#x60;ONLY_PARTIALLY_FILLED&#x60; - Cancel will succeed if order status is &#x60;PARTIALLY_FILLED&#x60;. | [optional] |
| **recvWindow** | **float**| Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. | [optional] |

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

Cancel Order list (TRADE)

Cancel an entire Order list  Weight(IP): 1  Security Type: TRADE  Notes: **Data Source:** Matching Engine  **Notes:**   - Canceling an individual order from an order list will cancel the entire order list.   - If both orderListId and listClientOrderId parameters are provided, the orderListId is searched first, then the listClientOrderId from that result is checked against that order. If both conditions are not met the request will be rejected.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BNBUSDT; // string
$orderListId = 1; // int | Either `orderListId` or `listClientOrderId` must be provided
$listClientOrderId = C3wyj4WVEktd7u9aVBRXcN; // string | Either `orderListId` or `listClientOrderId` must be provided
$newClientOrderId = cancelMyOrder1; // string | Used to uniquely identify this cancel. Automatically generated by default.
$recvWindow = 5000; // float | Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified.

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
| **listClientOrderId** | **string**| Either &#x60;orderListId&#x60; or &#x60;listClientOrderId&#x60; must be provided | [optional] |
| **newClientOrderId** | **string**| Used to uniquely identify this cancel. Automatically generated by default. | [optional] |
| **recvWindow** | **float**| Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. | [optional] |

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

New order (TRADE)

Send in a new order.  This adds 1 order to the `EXCHANGE_MAX_ORDERS` filter and the `MAX_NUM_ORDERS` filter.  Weight(IP): 1  Unfilled Order Count: 1  Security Type: TRADE  Notes: **Data Source:** Matching Engine  Some additional mandatory parameters based on order `type`:  Type | Additional mandatory parameters | Additional Information ------------ | ------------| ------ `LIMIT` | `timeInForce`, `quantity`, `price`| `MARKET` | `quantity` or `quoteOrderQty`| `MARKET` orders using the `quantity` field specifies the amount of the `base asset` the user wants to buy or sell at the market price. <br/> E.g. MARKET order on BTCUSDT will specify how much BTC the user is buying or selling. <br/><br/> `MARKET` orders using `quoteOrderQty` specifies the amount the user wants to spend (when buying) or receive (when selling) the `quote` asset; the correct `quantity` will be determined based on the market liquidity and `quoteOrderQty`. <br/> E.g. Using the symbol BTCUSDT: <br/> `BUY` side, the order will buy as many BTC as `quoteOrderQty` USDT can. <br/> `SELL` side, the order will sell as much BTC needed to receive `quoteOrderQty` USDT. `STOP_LOSS` | `quantity`, `stopPrice` or `trailingDelta`| This will execute a `MARKET` order when the conditions are met. (e.g. `stopPrice` is met or `trailingDelta` is activated) `STOP_LOSS_LIMIT` | `timeInForce`, `quantity`,  `price`, `stopPrice` or `trailingDelta` `TAKE_PROFIT` | `quantity`, `stopPrice` or `trailingDelta` | This will execute a `MARKET` order when the conditions are met. (e.g. `stopPrice` is met or `trailingDelta` is activated) `TAKE_PROFIT_LIMIT` | `timeInForce`, `quantity`, `price`, `stopPrice` or `trailingDelta` | `LIMIT_MAKER` | `quantity`, `price`| This is a `LIMIT` order that will be rejected if the order immediately matches and trades as a taker. <br/> This is also known as a POST-ONLY order.   Notes on using parameters for Pegged Orders: * These parameters are allowed for `LIMIT`, `LIMIT_MAKER`, `STOP_LOSS_LIMIT`, `TAKE_PROFIT_LIMIT` orders. * If `pegPriceType` is specified, `price` becomes optional. Otherwise, it is still mandatory. * `pegPriceType=PRIMARY_PEG` means the primary peg, that is the best price on the same side of the order book as your order. * `pegPriceType=MARKET_PEG` means the market peg, that is the best price on the opposite side of the order book from your order. * Use `pegOffsetType` and `pegOffsetValue` to request a price level other than the best one. These parameters must be specified together.  Other info: * Any `LIMIT` or `LIMIT_MAKER` type order can be made an iceberg order by sending an `icebergQty`. * Any order with an `icebergQty` MUST have `timeInForce` set to `GTC`. * For `STOP_LOSS`, `STOP_LOSS_LIMIT`, `TAKE_PROFIT_LIMIT` and `TAKE_PROFIT` orders, `trailingDelta` can be combined with `stopPrice`. * `MARKET` orders using `quoteOrderQty` will not break `LOT_SIZE` filter rules; the order will execute a `quantity` that will have the notional value as close as possible to `quoteOrderQty`. Trigger order price rules against market price for both MARKET and LIMIT versions:   * Price above market price: `STOP_LOSS` `BUY`, `TAKE_PROFIT` `SELL`   * Price below market price: `STOP_LOSS` `SELL`, `TAKE_PROFIT` `BUY`

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

Order Amend Keep Priority (TRADE)

Reduce the quantity of an existing open order.  This adds 0 orders to the `EXCHANGE_MAX_ORDERS` filter and the `MAX_NUM_ORDERS` filter.  Read Order Amend Keep Priority FAQ to learn more.  Weight(IP): 4  Unfilled Order Count: 0  Security Type: TRADE  Notes: **Data Source:** Matching Engine

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

Cancel an Existing Order and Send a New Order (TRADE)

- Cancels an existing order and places a new order on the same symbol. - Filters and Order Count are evaluated before the processing of the cancellation and order placement occurs. - A new order that was not attempted (i.e. when `newOrderResult: NOT_ATTEMPTED`), will still increase the unfilled order count by 1. - You can only cancel an individual order from an orderList using this endpoint, but the result is the same as canceling the entire orderList.  Weight(IP): 1  Unfilled Order Count: 1  Security Type: TRADE  Notes: **Data Source:** Matching Engine  Similar to `POST /api/v3/order`, additional mandatory parameters are determined by `type`. Response format varies depending on whether the processing of the message succeeded, partially succeeded, or failed.  <table>   <thead>       <tr>           <th colspan=3 align=left>Request</th>           <th colspan=3 align=left>Response</th>       </tr>       <tr>           <th><code>cancelReplaceMode</code></th>           <th><code>orderRateLimitExceededMode</code></th>           <th>Unfilled Order Count</th>           <th><code>cancelResult</code></th>           <th><code>newOrderResult</code></th>           <th><code>status</code></th>       </tr>   </thead>   <tbody>       <tr>           <td rowspan=\"11\"><code>STOP_ON_FAILURE</code></td>           <td rowspan=\"6\"><code>DO_NOTHING</code></td>           <td rowspan=\"3\">Within Limits</td>           <td>✅ <code>SUCCESS</code></td>           <td>✅ <code>SUCCESS</code></td>           <td align=right><code>200</code></td>       </tr>       <tr>           <td>❌ <code>FAILURE</code></td>           <td>➖ <code>NOT_ATTEMPTED</code></td>           <td align=right><code>400</code></td>       </tr>       <tr>           <td>✅ <code>SUCCESS</code></td>           <td>❌ <code>FAILURE</code></td>           <td align=right><code>409</code></td>       </tr>       <tr>           <td rowspan=\"3\">Exceeds Limits</td>           <td>✅ <code>SUCCESS</code></td>           <td>✅ <code>SUCCESS</code></td>           <td align=right>N/A</td>       </tr>       <tr>           <td>❌ <code>FAILURE</code></td>           <td>➖ <code>NOT_ATTEMPTED</code></td>           <td align=right>N/A</td>       </tr>       <tr>           <td>✅ <code>SUCCESS</code></td>           <td>❌ <code>FAILURE</code></td>           <td align=right>N/A</td>       </tr>       <tr>           <td rowspan=\"5\"><code>CANCEL_ONLY</code></td>           <td rowspan=\"3\">Within Limits</td>           <td>✅ <code>SUCCESS</code></td>           <td>✅ <code>SUCCESS</code></td>           <td align=right><code>200</code></td>       </tr>       <tr>           <td>❌ <code>FAILURE</code></td>           <td>➖ <code>NOT_ATTEMPTED</code></td>           <td align=right><code>400</code></td>       </tr>       <tr>           <td>✅ <code>SUCCESS</code></td>           <td>❌ <code>FAILURE</code></td>           <td align=right><code>409</code></td>       </tr>       <tr>           <td rowspan=\"2\">Exceeds Limits</td>           <td>❌ <code>FAILURE</code></td>           <td>➖ <code>NOT_ATTEMPTED</code></td>           <td align=right><code>429</code></td>       </tr>       <tr>           <td>✅ <code>SUCCESS</code></td>           <td>❌ <code>FAILURE</code></td>           <td align=right><code>429</code></td>       </tr>       <tr>           <td rowspan=\"16\"><code>ALLOW_FAILURE</code></td>           <td rowspan=\"8\"><code>DO_NOTHING</code></td>           <td rowspan=\"4\">Within Limits</td>           <td>✅ <code>SUCCESS</code></td>           <td>✅ <code>SUCCESS</code></td>           <td align=right><code>200</code></td>       </tr>       <tr>           <td>❌ <code>FAILURE</code></td>           <td>❌ <code>FAILURE</code></td>           <td align=right><code>400</code></td>       </tr>       <tr>           <td>❌ <code>FAILURE</code></td>           <td>✅ <code>SUCCESS</code></td>           <td align=right><code>409</code></td>       </tr>       <tr>           <td>✅ <code>SUCCESS</code></td>           <td>❌ <code>FAILURE</code></td>           <td align=right><code>409</code></td>       </tr>       <tr>       <td rowspan=\"4\">Exceeds Limits</td>           <td>✅ <code>SUCCESS</code></td>           <td>✅ <code>SUCCESS</code></td>           <td align=right>N/A</td>       </tr>       <tr>           <td>❌ <code>FAILURE</code></td>           <td>❌ <code>FAILURE</code></td>           <td align=right>N/A</td>       </tr>       <tr>           <td>❌ <code>FAILURE</code></td>           <td>✅ <code>SUCCESS</code></td>           <td align=right>N/A</td>       </tr>       <tr>           <td>✅ <code>SUCCESS</code></td>           <td>❌ <code>FAILURE</code></td>           <td align=right>N/A</td>       </tr>       <tr>           <td rowspan=\"8\"><CODE>CANCEL_ONLY</CODE></td>           <td rowspan=\"4\">Within Limits</td>           <td>✅ <code>SUCCESS</code></td>           <td>✅ <code>SUCCESS</code></td>           <td align=right><code>200</code></td>       </tr>       <tr>           <td>❌ <code>FAILURE</code></td>           <td>❌ <code>FAILURE</code></td>           <td align=right><code>400</code></td>       </tr>       <tr>           <td>❌ <code>FAILURE</code></td>           <td>✅ <code>SUCCESS</code></td>           <td align=right><code>409</code></td>       </tr>       <tr>           <td>✅ <code>SUCCESS</code></td>           <td>❌ <code>FAILURE</code></td>           <td align=right><code>409</code></td>       </tr>       <tr>           <td rowspan=\"4\">Exceeds Limits</td>           <td>✅ <code>SUCCESS</code></td>           <td>✅ <code>SUCCESS</code></td>           <td align=right><code>N/A</code></td>       </tr>       <tr>           <td>❌ <code>FAILURE</code></td>           <td>❌ <code>FAILURE</code></td>           <td align=right><code>400</code></td>       </tr>       <tr>           <td>❌ <code>FAILURE</code></td>           <td>✅ <code>SUCCESS</code></td>           <td align=right>N/A</td>       </tr>       <tr>           <td>✅ <code>SUCCESS</code></td>           <td>❌ <code>FAILURE</code></td>           <td align=right><code>409</code></td>       </tr>   </tbody> </table>  **Notes:**   - The performance for canceling an order (single cancel or as part of a cancel-replace) is always better when only `orderId` is sent. Sending `origClientOrderId` or both `orderId` + `origClientOrderId` will be slower.

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

New Order list - OCO (TRADE)

Send in an one-cancels-the-other (OCO) pair, where activation of one order immediately cancels the other.  - An OCO has 2 orders called the **above order** and **below order**. - One of the orders must be a `LIMIT_MAKER/TAKE_PROFIT/TAKE_PROFIT_LIMIT` order and the other must be `STOP_LOSS` or `STOP_LOSS_LIMIT` order. - Price restrictions   - If the OCO is on the `SELL` side:     - `LIMIT_MAKER/TAKE_PROFIT_LIMIT` `price` > Last Traded Price >  `STOP_LOSS/STOP_LOSS_LIMIT` `stopPrice`     - `TAKE_PROFIT stopPrice` > Last Traded Price > `STOP_LOSS/STOP_LOSS_LIMIT stopPrice`   - If the OCO is on the `BUY` side:     - `LIMIT_MAKER/TAKE_PROFIT_LIMIT price` < Last Traded Price < `stopPrice`     - `TAKE_PROFIT stopPrice` < Last Traded Price < `STOP_LOSS/STOP_LOSS_LIMIT stopPrice` * OCOs add **2 orders** to the `EXCHANGE_MAX_ORDERS` filter and the `MAX_NUM_ORDERS` filter. - OCOs add 2 orders to the `EXCHANGE_MAX_ORDERS` filter and the `MAX_NUM_ORDERS` filter.  Weight(IP): 1  Unfilled Order Count: 2  Security Type: TRADE  Notes: **Data Source:** Matching Engine

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

## `orderListOpo()`

```php
orderListOpo($orderListOpoRequest): \Binance\Client\Spot\Model\OrderListOpoResponse
```

New Order List - OPO (TRADE)

Place an [OPO](/products/spot/faqs/opo).  - OPOs add 2 orders to the `EXCHANGE_MAX_NUM_ORDERS`` filter and `MAX_NUM_ORDERS`` filter.  Weight(IP): 1  Unfilled Order Count: 2  Security Type: TRADE  Notes: **Data Source:** Matching Engine

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$orderListOpoRequest = new \Binance\Client\Spot\Model\OrderListOpoRequest(); // \Binance\Client\Spot\Model\OrderListOpoRequest

try {
    $result = $apiInstance->orderListOpo($orderListOpoRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->orderListOpo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderListOpoRequest** | [**\Binance\Client\Spot\Model\OrderListOpoRequest**](../Model/OrderListOpoRequest.md)|  | |

### Return type

[**\Binance\Client\Spot\Model\OrderListOpoResponse**](../Model/OrderListOpoResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderListOpoco()`

```php
orderListOpoco($orderListOpocoRequest): \Binance\Client\Spot\Model\OrderListOpocoResponse
```

New Order List - OPOCO (TRADE)

Place an [OPOCO](/products/spot/faqs/opo).  Weight(IP): 1  Unfilled Order Count: 3  Security Type: TRADE  Notes: **Data Source:** Matching Engine

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$orderListOpocoRequest = new \Binance\Client\Spot\Model\OrderListOpocoRequest(); // \Binance\Client\Spot\Model\OrderListOpocoRequest

try {
    $result = $apiInstance->orderListOpoco($orderListOpocoRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->orderListOpoco: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderListOpocoRequest** | [**\Binance\Client\Spot\Model\OrderListOpocoRequest**](../Model/OrderListOpocoRequest.md)|  | |

### Return type

[**\Binance\Client\Spot\Model\OrderListOpocoResponse**](../Model/OrderListOpocoResponse.md)

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

New Order list - OTO (TRADE)

Place an OTO.  - An OTO (One-Triggers-the-Other) is an order list comprised of 2 orders. - The first order is called the **working order** and must be `LIMIT` or `LIMIT_MAKER`. Initially, only the working order goes on the order book. - The second order is called the **pending order**. It can be any order type except for `MARKET` orders using parameter `quoteOrderQty`. The pending order is only placed on the order book when the working order gets **fully filled**. - If either the working order or the pending order is cancelled individually, the other order in the order list will also be canceled or expired. - When the order list is placed, if the working order gets **immediately fully filled**, the placement response will show the working order as `FILLED` but the pending order will still appear as `PENDING_NEW`. You need to query the status of the pending order again to see its updated status. - OTOs add **2 orders** to the `EXCHANGE_MAX_NUM_ORDERS` filter and `MAX_NUM_ORDERS` filter.  Weight(IP): 1  Unfilled Order Count: 2  Security Type: TRADE  Notes: **Data Source:** Matching Engine  **Mandatory parameters based on `pendingType` or `workingType`**  Depending on the `pendingType` or `workingType`, some optional parameters will become mandatory.  |Type                                                  |Additional mandatory parameters|Additional information| |----                                                  |----                           |------ |`workingType` = `LIMIT`                               |`workingTimeInForce`           | |`pendingType` = `LIMIT`                                |`pendingPrice`, `pendingTimeInForce`          | |`pendingType` = `STOP_LOSS` or `TAKE_PROFIT`           |`pendingStopPrice` and/or `pendingTrailingDelta`| |`pendingType` = `STOP_LOSS_LIMIT` or `TAKE_PROFIT_LIMIT`|`pendingPrice`, `pendingStopPrice` and/or `pendingTrailingDelta`, `pendingTimeInForce`|

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

New Order list - OTOCO (TRADE)

Place an OTOCO.  - An OTOCO (One-Triggers-One-Cancels-the-Other) is an order list comprised of 3 orders. - The first order is called the **working order** and must be `LIMIT` or `LIMIT_MAKER`. Initially, only the working order goes on the order book.   - The behavior of the working order is the same as the [OTO](#order-list-oto). - OTOCO has 2 pending orders (pending above and pending below), forming an OCO pair. The pending orders are only placed on the order book when the working order gets **fully filled**.   - The rules of the pending above and pending below follow the same rules as the [Order list OCO](#order-list-oco). - OTOCOs add **3 orders** to the `EXCHANGE_MAX_NUM_ORDERS` filter and `MAX_NUM_ORDERS` filter.  Weight(IP): 1  Unfilled Order Count: 3  Security Type: TRADE  Notes: **Data Source:** Matching Engine  **Mandatory parameters based on `pendingAboveType`, `pendingBelowType` or `workingType`**  Depending on the `pendingAboveType`/`pendingBelowType` or `workingType`, some optional parameters will become mandatory.  |Type                                                       |Additional mandatory parameters|Additional information| |----                                                       |----                           |------ |`workingType` = `LIMIT`                                    |`workingTimeInForce`           | |`pendingAboveType`= `LIMIT_MAKER`                                |`pendingAbovePrice`     | |`pendingAboveType` = `STOP_LOSS/TAKE_PROFIT`        |`pendingAboveStopPrice` and/or `pendingAboveTrailingDelta`| |`pendingAboveType=STOP_LOSS_LIMIT/TAKE_PROFIT_LIMIT` |`pendingAbovePrice`, `pendingAboveStopPrice` and/or `pendingAboveTrailingDelta`, `pendingAboveTimeInForce`| |`pendingBelowType`= `LIMIT_MAKER`                                |`pendingBelowPrice`          | |`pendingBelowType= STOP_LOSS/TAKE_PROFIT`         |`pendingBelowStopPrice` and/or `pendingBelowTrailingDelta`| |`pendingBelowType=STOP_LOSS_LIMIT/TAKE_PROFIT_LIMIT` |`pendingBelowPrice`, `pendingBelowStopPrice` and/or `pendingBelowTrailingDelta`, `pendingBelowTimeInForce`|

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

New OCO - Deprecated (TRADE)

Send in a new OCO.  - Price Restrictions:   - `SELL`: Limit Price > Last Price > Stop Price   - `BUY`: Limit Price < Last Price < Stop Price - Quantity Restrictions:   - Both legs must have the same quantity.   - `ICEBERG` quantities however do not have to be the same - `OCO` adds **2 orders** to the `EXCHANGE_MAX_ORDERS` filter and the `MAX_NUM_ORDERS` filter.  Weight(IP): 1  Unfilled Order Count: 2  Security Type: TRADE  Notes: **Data Source:** Matching Engine

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

Test new order (TRADE)

Test new order creation and signature/recvWindow long.  Creates and validates a new order but does not send it into the matching engine.  Weight: |Condition|Weight| |---|---| |Without `computeCommissionRates`|1| |With `computeCommissionRates`|20|  Security Type: TRADE  Notes: **Data Source:** Memory

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

New order using SOR (TRADE)

Places an order using smart order routing (SOR).  This adds 1 order to the `EXCHANGE_MAX_ORDERS` filter and the `MAX_NUM_ORDERS` filter.  Read [SOR FAQ](/products/spot/faqs/sor_faq) to learn more.  Weight(IP): 1  Unfilled Order Count: 1  Security Type: TRADE  Notes: **Data Source:** Matching Engine  **Note:** `POST /api/v3/sor/order` only supports `LIMIT` and `MARKET` orders. `quoteOrderQty` is not supported.

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

Test new order using SOR (TRADE)

Test new order creation and signature/recvWindow using smart order routing (SOR). Creates and validates a new order but does not send it into the matching engine.  Weight: |Condition|Weight| |---|---| |Without `computeCommissionRates`|1| |With `computeCommissionRates`|20|  Security Type: TRADE  Notes: **Data Source:** Memory

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
