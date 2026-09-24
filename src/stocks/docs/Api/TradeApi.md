# Binance\Client\Stocks\TradeApi



All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelAllEquityOrders()**](TradeApi.md#cancelAllEquityOrders) | **POST** /sapi/v1/equity/order/cancel-all | Cancel All Equity Orders (TRADE) |
| [**cancelEquityOrder()**](TradeApi.md#cancelEquityOrder) | **POST** /sapi/v1/equity/order/cancel | Cancel Equity Order (TRADE) |
| [**currentOpenOrders()**](TradeApi.md#currentOpenOrders) | **GET** /sapi/v1/equity/order/open-orders | Current Open Orders (USER_DATA) |
| [**equityOrderDetail()**](TradeApi.md#equityOrderDetail) | **GET** /sapi/v1/equity/order/detail | Equity Order Detail (USER_DATA) |
| [**equityOrderHistory()**](TradeApi.md#equityOrderHistory) | **GET** /sapi/v1/equity/order/history | Equity Order History (USER_DATA) |
| [**equityTradeHistory()**](TradeApi.md#equityTradeHistory) | **GET** /sapi/v1/equity/trade/history | Equity Trade History (USER_DATA) |
| [**placeEquityOrder()**](TradeApi.md#placeEquityOrder) | **POST** /sapi/v1/equity/order/place | Place Equity Order (TRADE) |


## `cancelAllEquityOrders()`

```php
cancelAllEquityOrders($recvWindow): \Binance\Client\Stocks\Model\CancelAllEquityOrdersResponse
```

Cancel All Equity Orders (TRADE)

Cancel all open orders for the caller. No request body is required — the scope is all of the caller's open orders. The downstream service handles idempotency; to inspect per-order outcomes, query `/order/history` after the call.  Weight: 1  Security Type: TRADE

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Stocks\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 5000; // int | The value cannot be greater than `60000`.

try {
    $result = $apiInstance->cancelAllEquityOrders($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->cancelAllEquityOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**| The value cannot be greater than &#x60;60000&#x60;. | [optional] |

### Return type

[**\Binance\Client\Stocks\Model\CancelAllEquityOrdersResponse**](../Model/CancelAllEquityOrdersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelEquityOrder()`

```php
cancelEquityOrder($orderId, $recvWindow): \Binance\Client\Stocks\Model\CancelEquityOrderResponse
```

Cancel Equity Order (TRADE)

Cancel a single open order by its `orderId`.  Weight: 1  Security Type: TRADE

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Stocks\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$orderId = c3c58f49-7b0d-4b9e-a2db-1a2f9a3b8c71; // string | Equity order id returned by `/order/place` or a query endpoint.
$recvWindow = 5000; // int | The value cannot be greater than `60000`.

try {
    $result = $apiInstance->cancelEquityOrder($orderId, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->cancelEquityOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderId** | **string**| Equity order id returned by &#x60;/order/place&#x60; or a query endpoint. | |
| **recvWindow** | **int**| The value cannot be greater than &#x60;60000&#x60;. | [optional] |

### Return type

[**\Binance\Client\Stocks\Model\CancelEquityOrderResponse**](../Model/CancelEquityOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `currentOpenOrders()`

```php
currentOpenOrders($recvWindow): \Binance\Client\Stocks\Model\CurrentOpenOrdersResponse
```

Current Open Orders (USER_DATA)

Query all unfinished (open) orders for the caller. No business parameters are needed — user identity is derived from the signature.  Weight: 1  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Stocks\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 5000; // int | The value cannot be greater than `60000`.

try {
    $result = $apiInstance->currentOpenOrders($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->currentOpenOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**| The value cannot be greater than &#x60;60000&#x60;. | [optional] |

### Return type

[**\Binance\Client\Stocks\Model\CurrentOpenOrdersResponse**](../Model/CurrentOpenOrdersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `equityOrderDetail()`

```php
equityOrderDetail($orderId, $clientOrderId, $recvWindow): \Binance\Client\Stocks\Model\EquityOrderDetailResponse
```

Equity Order Detail (USER_DATA)

Returns a single order along with its trade execution list. Callers can only read their own orders — the user identity is derived from the signed request.  Weight: 1  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Stocks\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$orderId = c3c58f49-7b0d-4b9e-a2db-1a2f9a3b8c71; // string | Equity order id. Either `orderId` or `clientOrderId` must be provided.
$clientOrderId = web_2c9c92b74f1e4a7c8f3b9e1a2d3c4b5a; // string | Client-supplied order id. Either `orderId` or `clientOrderId` must be provided.
$recvWindow = 5000; // int | The value cannot be greater than `60000`.

try {
    $result = $apiInstance->equityOrderDetail($orderId, $clientOrderId, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->equityOrderDetail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderId** | **string**| Equity order id. Either &#x60;orderId&#x60; or &#x60;clientOrderId&#x60; must be provided. | [optional] |
| **clientOrderId** | **string**| Client-supplied order id. Either &#x60;orderId&#x60; or &#x60;clientOrderId&#x60; must be provided. | [optional] |
| **recvWindow** | **int**| The value cannot be greater than &#x60;60000&#x60;. | [optional] |

### Return type

[**\Binance\Client\Stocks\Model\EquityOrderDetailResponse**](../Model/EquityOrderDetailResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `equityOrderHistory()`

```php
equityOrderHistory($startTime, $endTime, $symbol, $orderType, $side, $orderStatus, $current, $size, $recvWindow): \Binance\Client\Stocks\Model\EquityOrderHistoryResponse
```

Equity Order History (USER_DATA)

Paged order history for the caller. Filters by symbol, order type, side, status, and time range.  Weight: 1  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Stocks\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startTime = 1735800000000; // int | Start time (ms epoch).
$endTime = 1735900000000; // int | End time (ms epoch).
$symbol = NVDA; // string | US-equity ticker filter, e.g. `NVDA`.
$orderType = new \Binance\Client\Stocks\Model\\Binance\Client\Stocks\Model\OrderType(); // \Binance\Client\Stocks\Model\OrderType | Order type filter: `MARKET` / `LIMIT`.
$side = new \Binance\Client\Stocks\Model\\Binance\Client\Stocks\Model\Side(); // \Binance\Client\Stocks\Model\Side | Side filter: `BUY` / `SELL`.
$orderStatus = FILLED,CANCELED; // string | Comma-separated status filter. Allowed values: `FILLED`, `PARTIALLY_FILLED`, `CANCELED`, `EXPIRED`, `REJECTED`.
$current = 1; // int | Page number, 1-based. Default `1`.
$size = 20; // int | Page size. Default `20`, max `100`.
$recvWindow = 5000; // int | The value cannot be greater than `60000`.

try {
    $result = $apiInstance->equityOrderHistory($startTime, $endTime, $symbol, $orderType, $side, $orderStatus, $current, $size, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->equityOrderHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **startTime** | **int**| Start time (ms epoch). | |
| **endTime** | **int**| End time (ms epoch). | |
| **symbol** | **string**| US-equity ticker filter, e.g. &#x60;NVDA&#x60;. | [optional] |
| **orderType** | [**\Binance\Client\Stocks\Model\OrderType**](../Model/.md)| Order type filter: &#x60;MARKET&#x60; / &#x60;LIMIT&#x60;. | [optional] |
| **side** | [**\Binance\Client\Stocks\Model\Side**](../Model/.md)| Side filter: &#x60;BUY&#x60; / &#x60;SELL&#x60;. | [optional] |
| **orderStatus** | **string**| Comma-separated status filter. Allowed values: &#x60;FILLED&#x60;, &#x60;PARTIALLY_FILLED&#x60;, &#x60;CANCELED&#x60;, &#x60;EXPIRED&#x60;, &#x60;REJECTED&#x60;. | [optional] |
| **current** | **int**| Page number, 1-based. Default &#x60;1&#x60;. | [optional] |
| **size** | **int**| Page size. Default &#x60;20&#x60;, max &#x60;100&#x60;. | [optional] |
| **recvWindow** | **int**| The value cannot be greater than &#x60;60000&#x60;. | [optional] |

### Return type

[**\Binance\Client\Stocks\Model\EquityOrderHistoryResponse**](../Model/EquityOrderHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `equityTradeHistory()`

```php
equityTradeHistory($startTime, $endTime, $symbol, $side, $orderId, $current, $size, $recvWindow): \Binance\Client\Stocks\Model\EquityTradeHistoryResponse
```

Equity Trade History (USER_DATA)

Paged equity trade (per-fill) history for the caller. Each row is one execution, not one order — a partially filled order produces multiple rows. Filters by symbol, side, specific `orderId`, and time range.  Weight: 1  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Stocks\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startTime = 1735800000000; // int | Start time (ms epoch).
$endTime = 1735900000000; // int | End time (ms epoch).
$symbol = NVDA; // string | US-equity ticker filter, e.g. `NVDA`.
$side = new \Binance\Client\Stocks\Model\\Binance\Client\Stocks\Model\Side(); // \Binance\Client\Stocks\Model\Side | Side filter: `BUY` / `SELL`.
$orderId = c3c58f49-7b0d-4b9e-a2db-1a2f9a3b8c71; // string | Narrow the result to executions of a single order.
$current = 1; // int | Page number, 1-based. Default `1`.
$size = 20; // int | Page size. Default `20`, max `100`.
$recvWindow = 5000; // int | The value cannot be greater than `60000`.

try {
    $result = $apiInstance->equityTradeHistory($startTime, $endTime, $symbol, $side, $orderId, $current, $size, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->equityTradeHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **startTime** | **int**| Start time (ms epoch). | |
| **endTime** | **int**| End time (ms epoch). | |
| **symbol** | **string**| US-equity ticker filter, e.g. &#x60;NVDA&#x60;. | [optional] |
| **side** | [**\Binance\Client\Stocks\Model\Side**](../Model/.md)| Side filter: &#x60;BUY&#x60; / &#x60;SELL&#x60;. | [optional] |
| **orderId** | **string**| Narrow the result to executions of a single order. | [optional] |
| **current** | **int**| Page number, 1-based. Default &#x60;1&#x60;. | [optional] |
| **size** | **int**| Page size. Default &#x60;20&#x60;, max &#x60;100&#x60;. | [optional] |
| **recvWindow** | **int**| The value cannot be greater than &#x60;60000&#x60;. | [optional] |

### Return type

[**\Binance\Client\Stocks\Model\EquityTradeHistoryResponse**](../Model/EquityTradeHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `placeEquityOrder()`

```php
placeEquityOrder($symbol, $side, $orderType, $quoteAsset, $price, $quantity, $notional, $timeInForce, $tradingSession, $walletType, $clientOrderId, $tokenize, $recvWindow): \Binance\Client\Stocks\Model\PlaceEquityOrderResponse
```

Place Equity Order (TRADE)

Place a new equity order. Supports all combinations of `LIMIT` / `MARKET` × `BUY` / `SELL`. For `LIMIT BUY` orders the commission fee is automatically computed and reserved by the server at placement time — callers submit `price` and `quantity` only, no `fee` field is required.  **Field combination matrix**  | Side | OrderType | Required | Forbidden | | ---- | --------- | -------- | --------- | | BUY | LIMIT | `price`, `quantity`, `tradingSession` | `notional` | | BUY | MARKET | `notional` | `price`, `quantity`, `tradingSession` | | SELL | LIMIT | `price`, `quantity`, `tradingSession` | `notional` | | SELL | MARKET | `quantity` | `price`, `notional`, `tradingSession` |  **Fractional shares**: when `quantity` has a decimal component, or an order is placed by `notional`, it is treated as a fractional-share order. A fractional-share `GTC` order must be paired with `tradingSession = EXTENDED` or `24H`.  Rate limit: 200 requests / min (UID).  Weight: 1  Security Type: TRADE

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Stocks\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = AAPL; // string | US stock ticker, e.g. `AAPL`, `TSLA`. Must be a symbol with tokenization enabled — check via `/market/tokenized-assets`.
$side = new \Binance\Client\Stocks\Model\\Binance\Client\Stocks\Model\Side(); // \Binance\Client\Stocks\Model\Side | `BUY` / `SELL`.
$orderType = new \Binance\Client\Stocks\Model\\Binance\Client\Stocks\Model\OrderType(); // \Binance\Client\Stocks\Model\OrderType | `MARKET` / `LIMIT`.
$quoteAsset = USDC; // string | Quote asset. Defaults to `USDC`; must be within the server's allowed set.
$price = 180.50; // string | **Required** for `LIMIT`; **forbidden** for `MARKET`. Maximum 2 decimal places.
$quantity = 1; // string | **Required** for `LIMIT` (both sides) and `SELL MARKET`; **forbidden** for `BUY MARKET`.
$notional = 1000.00; // string | **Required** for `BUY MARKET`; **forbidden** for `LIMIT` and `SELL MARKET`.
$timeInForce = new \Binance\Client\Stocks\Model\\Binance\Client\Stocks\Model\TimeInForce(); // \Binance\Client\Stocks\Model\TimeInForce | `DAY` (default) / `GTC`. `GTC` is only supported for `LIMIT` orders; a fractional-share `GTC` order must be paired with `tradingSession = EXTENDED` or `24H`.
$tradingSession = new \Binance\Client\Stocks\Model\\Binance\Client\Stocks\Model\TradingSession(); // \Binance\Client\Stocks\Model\TradingSession | `RTH` / `EXTENDED` / `24H`. **Required** for `LIMIT`; **forbidden** for `MARKET`.
$walletType = new \Binance\Client\Stocks\Model\\Binance\Client\Stocks\Model\WalletType(); // \Binance\Client\Stocks\Model\WalletType | Payment wallet for `BUY` orders: `CARD` (default) / `MAIN`. `SELL` orders always settle to `CARD`.
$clientOrderId = web_2c9c92b74f1e4a7c8f3b9e1a2d3c4b5a; // string | Client-supplied order id. Format `^[a-zA-Z0-9-_]{32,36}$`. Auto-generated when omitted.
$tokenize = true; // bool | Whether to tokenize the purchased stock asset upon settlement. Default `true`. Set to `false` to receive the underlying equity directly instead of a tokenized asset.
$recvWindow = 5000; // int | The value cannot be greater than `60000`.

try {
    $result = $apiInstance->placeEquityOrder($symbol, $side, $orderType, $quoteAsset, $price, $quantity, $notional, $timeInForce, $tradingSession, $walletType, $clientOrderId, $tokenize, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->placeEquityOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**| US stock ticker, e.g. &#x60;AAPL&#x60;, &#x60;TSLA&#x60;. Must be a symbol with tokenization enabled — check via &#x60;/market/tokenized-assets&#x60;. | |
| **side** | [**\Binance\Client\Stocks\Model\Side**](../Model/.md)| &#x60;BUY&#x60; / &#x60;SELL&#x60;. | |
| **orderType** | [**\Binance\Client\Stocks\Model\OrderType**](../Model/.md)| &#x60;MARKET&#x60; / &#x60;LIMIT&#x60;. | |
| **quoteAsset** | **string**| Quote asset. Defaults to &#x60;USDC&#x60;; must be within the server&#39;s allowed set. | [optional] |
| **price** | **string**| **Required** for &#x60;LIMIT&#x60;; **forbidden** for &#x60;MARKET&#x60;. Maximum 2 decimal places. | [optional] |
| **quantity** | **string**| **Required** for &#x60;LIMIT&#x60; (both sides) and &#x60;SELL MARKET&#x60;; **forbidden** for &#x60;BUY MARKET&#x60;. | [optional] |
| **notional** | **string**| **Required** for &#x60;BUY MARKET&#x60;; **forbidden** for &#x60;LIMIT&#x60; and &#x60;SELL MARKET&#x60;. | [optional] |
| **timeInForce** | [**\Binance\Client\Stocks\Model\TimeInForce**](../Model/.md)| &#x60;DAY&#x60; (default) / &#x60;GTC&#x60;. &#x60;GTC&#x60; is only supported for &#x60;LIMIT&#x60; orders; a fractional-share &#x60;GTC&#x60; order must be paired with &#x60;tradingSession &#x3D; EXTENDED&#x60; or &#x60;24H&#x60;. | [optional] |
| **tradingSession** | [**\Binance\Client\Stocks\Model\TradingSession**](../Model/.md)| &#x60;RTH&#x60; / &#x60;EXTENDED&#x60; / &#x60;24H&#x60;. **Required** for &#x60;LIMIT&#x60;; **forbidden** for &#x60;MARKET&#x60;. | [optional] |
| **walletType** | [**\Binance\Client\Stocks\Model\WalletType**](../Model/.md)| Payment wallet for &#x60;BUY&#x60; orders: &#x60;CARD&#x60; (default) / &#x60;MAIN&#x60;. &#x60;SELL&#x60; orders always settle to &#x60;CARD&#x60;. | [optional] |
| **clientOrderId** | **string**| Client-supplied order id. Format &#x60;^[a-zA-Z0-9-_]{32,36}$&#x60;. Auto-generated when omitted. | [optional] |
| **tokenize** | **bool**| Whether to tokenize the purchased stock asset upon settlement. Default &#x60;true&#x60;. Set to &#x60;false&#x60; to receive the underlying equity directly instead of a tokenized asset. | [optional] |
| **recvWindow** | **int**| The value cannot be greater than &#x60;60000&#x60;. | [optional] |

### Return type

[**\Binance\Client\Stocks\Model\PlaceEquityOrderResponse**](../Model/PlaceEquityOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
