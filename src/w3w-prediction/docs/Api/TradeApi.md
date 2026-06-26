# Binance\Client\W3wPrediction\TradeApi



All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**batchCancelOrders()**](TradeApi.md#batchCancelOrders) | **POST** /sapi/v1/w3w/wallet/prediction/trade/batch-cancel | Batch Cancel Orders |
| [**getQuote()**](TradeApi.md#getQuote) | **POST** /sapi/v1/w3w/wallet/prediction/trade/get-quote | Get Quote |
| [**placeOrder()**](TradeApi.md#placeOrder) | **POST** /sapi/v1/w3w/wallet/prediction/trade/place-order-bundle | Place Order |
| [**queryActiveOrders()**](TradeApi.md#queryActiveOrders) | **GET** /sapi/v1/w3w/wallet/prediction/order/list | Query Active Orders |
| [**queryOrderHistory()**](TradeApi.md#queryOrderHistory) | **GET** /sapi/v1/w3w/wallet/prediction/order/history | Query Order History |


## `batchCancelOrders()`

```php
batchCancelOrders($batchCancelOrdersRequest): \Binance\Client\W3wPrediction\Model\BatchCancelOrdersResponse
```

Batch Cancel Orders

Cancel one or more active prediction orders in a single request. Requires SAS authorization.  **Known Issue — Bracket Encoding Incompatibility:** This endpoint uses indexed bracket notation (`cancelInfoList[0].orderId`). Binance SAPI signature verification runs over the **raw, unencoded** canonical string. However, mainstream HTTP libraries (Python `requests`, Java `HttpURLConnection`/`URI`, Go `net/url`, Node.js `url`) automatically percent-encode `[` → `%5B` and `]` → `%5D`, producing a signature mismatch with error `-1022 Signature for this request is not valid`. Postman is unaffected because it does not encode keys.  **Workarounds** (use low-level HTTP APIs that do not normalize URLs): - **Python:** use `http.client` (stdlib) and hand-build the body string. - **Java:** use `HttpURLConnection` and write the raw body bytes directly. - **Go:** use `strings.NewReader` with a hand-built body instead of `url.Values.Encode()`.  Weight(IP): 200  Security Type: TRADE  Notes: - Use dot notation for nested list fields: `cancelInfoList[0].orderId`, `cancelInfoList[1].orderId`, etc. - `vendor` does not need to be supplied. The server automatically sets the correct vendor (`predict_fun`) for every item in the batch.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\W3wPrediction\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$batchCancelOrdersRequest = new \Binance\Client\W3wPrediction\Model\BatchCancelOrdersRequest(); // \Binance\Client\W3wPrediction\Model\BatchCancelOrdersRequest

try {
    $result = $apiInstance->batchCancelOrders($batchCancelOrdersRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->batchCancelOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **batchCancelOrdersRequest** | [**\Binance\Client\W3wPrediction\Model\BatchCancelOrdersRequest**](../Model/BatchCancelOrdersRequest.md)|  | |

### Return type

[**\Binance\Client\W3wPrediction\Model\BatchCancelOrdersResponse**](../Model/BatchCancelOrdersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getQuote()`

```php
getQuote($getQuoteRequest): \Binance\Client\W3wPrediction\Model\GetQuoteResponse
```

Get Quote

Get a price quote for a prediction order. The returned `quoteId` must be used in the subsequent Place Order request.  Weight(IP): 200  Security Type: TRADE  Response Notes: - `feeAmount` is a string because it is denominated in wei (18 decimals) and may exceed JavaScript's safe integer range. `feeDiscountBps` is also a string to allow fractional basis-point values in the future. `feeRateBps` and `slippageBps` are integers and will never exceed safe integer bounds. - **MARKET order minimum amount:** For `MARKET` orders, `amountIn` must be at least approximately **1.5 USDT** (in wei: `1500000000000000000`). The exact minimum varies by market liquidity. If the amount is too small, the server returns `-9000 Your order amount is too small`. This limit does **not** apply to `LIMIT` orders.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\W3wPrediction\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$getQuoteRequest = new \Binance\Client\W3wPrediction\Model\GetQuoteRequest(); // \Binance\Client\W3wPrediction\Model\GetQuoteRequest

try {
    $result = $apiInstance->getQuote($getQuoteRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->getQuote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **getQuoteRequest** | [**\Binance\Client\W3wPrediction\Model\GetQuoteRequest**](../Model/GetQuoteRequest.md)|  | |

### Return type

[**\Binance\Client\W3wPrediction\Model\GetQuoteResponse**](../Model/GetQuoteResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `placeOrder()`

```php
placeOrder($placeOrderRequest): \Binance\Client\W3wPrediction\Model\PlaceOrderResponse
```

Place Order

Place a prediction order using a previously obtained quote. Requires SAS authorization.  Weight(IP): 200  Security Type: TRADE  Notes: - Validation rules:    | orderType | timeInForce   | priceLimit            |   | --------- | ------------- | --------------------- |   | `MARKET`  | Must be `FOK` | Not required          |   | `LIMIT`   | Must be `GTC` | Required, must be > 0 |

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\W3wPrediction\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$placeOrderRequest = new \Binance\Client\W3wPrediction\Model\PlaceOrderRequest(); // \Binance\Client\W3wPrediction\Model\PlaceOrderRequest

try {
    $result = $apiInstance->placeOrder($placeOrderRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->placeOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **placeOrderRequest** | [**\Binance\Client\W3wPrediction\Model\PlaceOrderRequest**](../Model/PlaceOrderRequest.md)|  | |

### Return type

[**\Binance\Client\W3wPrediction\Model\PlaceOrderResponse**](../Model/PlaceOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryActiveOrders()`

```php
queryActiveOrders($walletAddress, $tradeSide, $l1Category, $marketId, $offset, $limit, $recvWindow): \Binance\Client\W3wPrediction\Model\QueryActiveOrdersResponse
```

Query Active Orders

Get active (open) prediction orders for the authenticated user.  Weight(IP): 200  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\W3wPrediction\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$walletAddress = 0x12e32db8817e292508c34111cbc4b23340df542c; // string | User's prediction wallet address
$tradeSide = new \Binance\Client\W3wPrediction\Model\\Binance\Client\W3wPrediction\Model\TradeSide(); // \Binance\Client\W3wPrediction\Model\TradeSide | Filter by trade side. Enum: `BUY`, `SELL`
$l1Category = crypto; // string | Filter by level-1 category
$marketId = 5567895; // int | Filter by market ID
$offset = 0; // int | Pagination offset. Default `0`
$limit = 20; // int | Page size. Default `20`, range 1–100
$recvWindow = 5000; // int | Request validity window in milliseconds

try {
    $result = $apiInstance->queryActiveOrders($walletAddress, $tradeSide, $l1Category, $marketId, $offset, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->queryActiveOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **walletAddress** | **string**| User&#39;s prediction wallet address | |
| **tradeSide** | [**\Binance\Client\W3wPrediction\Model\TradeSide**](../Model/.md)| Filter by trade side. Enum: &#x60;BUY&#x60;, &#x60;SELL&#x60; | [optional] |
| **l1Category** | **string**| Filter by level-1 category | [optional] |
| **marketId** | **int**| Filter by market ID | [optional] |
| **offset** | **int**| Pagination offset. Default &#x60;0&#x60; | [optional] |
| **limit** | **int**| Page size. Default &#x60;20&#x60;, range 1–100 | [optional] |
| **recvWindow** | **int**| Request validity window in milliseconds | [optional] |

### Return type

[**\Binance\Client\W3wPrediction\Model\QueryActiveOrdersResponse**](../Model/QueryActiveOrdersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryOrderHistory()`

```php
queryOrderHistory($walletAddress, $l1Category, $orderType, $status, $startDate, $endDate, $offset, $limit, $recvWindow): \Binance\Client\W3wPrediction\Model\QueryOrderHistoryResponse
```

Query Order History

Get historical prediction orders (all statuses) for the authenticated user, with optional filters.  Weight(IP): 200  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\W3wPrediction\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$walletAddress = 0x12e32db8817e292508c34111cbc4b23340df542c; // string | User's prediction wallet address
$l1Category = crypto; // string | Filter by level-1 category
$orderType = new \Binance\Client\W3wPrediction\Model\\Binance\Client\W3wPrediction\Model\OrderType(); // \Binance\Client\W3wPrediction\Model\OrderType | Filter by order type. Enum: `MARKET`, `LIMIT`
$status = CLOSED; // string | Filter by order status
$startDate = 2026-05-01; // string | Start date. Format: `yyyy-MM-dd`. Must be ≤ `endDate`
$endDate = 2026-05-25; // string | End date. Format: `yyyy-MM-dd`. Must be ≥ `startDate`
$offset = 0; // int | Pagination offset. Default `0`
$limit = 20; // int | Page size. Default `20`, range 1–100
$recvWindow = 5000; // int | Request validity window in milliseconds

try {
    $result = $apiInstance->queryOrderHistory($walletAddress, $l1Category, $orderType, $status, $startDate, $endDate, $offset, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->queryOrderHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **walletAddress** | **string**| User&#39;s prediction wallet address | |
| **l1Category** | **string**| Filter by level-1 category | [optional] |
| **orderType** | [**\Binance\Client\W3wPrediction\Model\OrderType**](../Model/.md)| Filter by order type. Enum: &#x60;MARKET&#x60;, &#x60;LIMIT&#x60; | [optional] |
| **status** | **string**| Filter by order status | [optional] |
| **startDate** | **string**| Start date. Format: &#x60;yyyy-MM-dd&#x60;. Must be ≤ &#x60;endDate&#x60; | [optional] |
| **endDate** | **string**| End date. Format: &#x60;yyyy-MM-dd&#x60;. Must be ≥ &#x60;startDate&#x60; | [optional] |
| **offset** | **int**| Pagination offset. Default &#x60;0&#x60; | [optional] |
| **limit** | **int**| Page size. Default &#x60;20&#x60;, range 1–100 | [optional] |
| **recvWindow** | **int**| Request validity window in milliseconds | [optional] |

### Return type

[**\Binance\Client\W3wPrediction\Model\QueryOrderHistoryResponse**](../Model/QueryOrderHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
