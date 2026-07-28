# Binance\Client\Convert\TradeApi



All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**acceptQuote()**](TradeApi.md#acceptQuote) | **POST** /sapi/v1/convert/acceptQuote | Accept Quote (TRADE) |
| [**cancelLimitOrder()**](TradeApi.md#cancelLimitOrder) | **POST** /sapi/v1/convert/limit/cancelOrder | Cancel limit order (TRADE) |
| [**getConvertTradeHistory()**](TradeApi.md#getConvertTradeHistory) | **GET** /sapi/v1/convert/tradeFlow | Get Convert Trade History (USER_DATA) |
| [**orderStatus()**](TradeApi.md#orderStatus) | **GET** /sapi/v1/convert/orderStatus | Order status (USER_DATA) |
| [**placeLimitOrder()**](TradeApi.md#placeLimitOrder) | **POST** /sapi/v1/convert/limit/placeOrder | Place limit order (TRADE) |
| [**queryLimitOpenOrders()**](TradeApi.md#queryLimitOpenOrders) | **GET** /sapi/v1/convert/limit/queryOpenOrders | Query limit open orders (USER_DATA) |
| [**sendQuoteRequest()**](TradeApi.md#sendQuoteRequest) | **POST** /sapi/v1/convert/getQuote | Send Quote Request (TRADE) |


## `acceptQuote()`

```php
acceptQuote($acceptQuoteRequest): \Binance\Client\Convert\Model\AcceptQuoteResponse
```

Accept Quote (TRADE)

Accept the offered quote by quote ID.  Weight(UID): 500  Security Type: TRADE

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Convert\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$acceptQuoteRequest = new \Binance\Client\Convert\Model\AcceptQuoteRequest(); // \Binance\Client\Convert\Model\AcceptQuoteRequest

try {
    $result = $apiInstance->acceptQuote($acceptQuoteRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->acceptQuote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **acceptQuoteRequest** | [**\Binance\Client\Convert\Model\AcceptQuoteRequest**](../Model/AcceptQuoteRequest.md)|  | |

### Return type

[**\Binance\Client\Convert\Model\AcceptQuoteResponse**](../Model/AcceptQuoteResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelLimitOrder()`

```php
cancelLimitOrder($cancelLimitOrderRequest): \Binance\Client\Convert\Model\CancelLimitOrderResponse
```

Cancel limit order (TRADE)

Enable users to cancel a limit order  Weight(UID): 200  Security Type: TRADE

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Convert\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cancelLimitOrderRequest = new \Binance\Client\Convert\Model\CancelLimitOrderRequest(); // \Binance\Client\Convert\Model\CancelLimitOrderRequest

try {
    $result = $apiInstance->cancelLimitOrder($cancelLimitOrderRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->cancelLimitOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cancelLimitOrderRequest** | [**\Binance\Client\Convert\Model\CancelLimitOrderRequest**](../Model/CancelLimitOrderRequest.md)|  | |

### Return type

[**\Binance\Client\Convert\Model\CancelLimitOrderResponse**](../Model/CancelLimitOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConvertTradeHistory()`

```php
getConvertTradeHistory($startTime, $endTime, $limit, $recvWindow): \Binance\Client\Convert\Model\GetConvertTradeHistoryResponse
```

Get Convert Trade History (USER_DATA)

Get Convert Trade History  Weight(UID): 3000  Security Type: USER_DATA  Notes: - The max interval between `startTime` and `endTime` is 30 days.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Convert\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startTime = 1623319461670; // int
$endTime = 1641782889000; // int
$limit = 100; // int | Number of records to return
$recvWindow = 5000; // int | Request validity window in milliseconds

try {
    $result = $apiInstance->getConvertTradeHistory($startTime, $endTime, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->getConvertTradeHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **startTime** | **int**|  | |
| **endTime** | **int**|  | |
| **limit** | **int**| Number of records to return | [optional] |
| **recvWindow** | **int**| Request validity window in milliseconds | [optional] |

### Return type

[**\Binance\Client\Convert\Model\GetConvertTradeHistoryResponse**](../Model/GetConvertTradeHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderStatus()`

```php
orderStatus($orderId, $quoteId): \Binance\Client\Convert\Model\OrderStatusResponse
```

Order status (USER_DATA)

Query order status by order ID.  Weight(UID): 100  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Convert\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$orderId = 1; // string | Either orderId or quoteId is required
$quoteId = 1; // string | Either orderId or quoteId is required

try {
    $result = $apiInstance->orderStatus($orderId, $quoteId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->orderStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderId** | **string**| Either orderId or quoteId is required | [optional] |
| **quoteId** | **string**| Either orderId or quoteId is required | [optional] |

### Return type

[**\Binance\Client\Convert\Model\OrderStatusResponse**](../Model/OrderStatusResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `placeLimitOrder()`

```php
placeLimitOrder($placeLimitOrderRequest): \Binance\Client\Convert\Model\PlaceLimitOrderResponse
```

Place limit order (TRADE)

Enable users to place a limit order  Weight(UID): 500  Security Type: TRADE  Notes: - `baseAsset` and `quoteAsset` can be determined via the `exchangeInfo` endpoint. - Limit price is defined from `baseAsset` to `quoteAsset`. - Exactly one of `baseAmount` or `quoteAmount` should be sent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Convert\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$placeLimitOrderRequest = new \Binance\Client\Convert\Model\PlaceLimitOrderRequest(); // \Binance\Client\Convert\Model\PlaceLimitOrderRequest

try {
    $result = $apiInstance->placeLimitOrder($placeLimitOrderRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->placeLimitOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **placeLimitOrderRequest** | [**\Binance\Client\Convert\Model\PlaceLimitOrderRequest**](../Model/PlaceLimitOrderRequest.md)|  | |

### Return type

[**\Binance\Client\Convert\Model\PlaceLimitOrderResponse**](../Model/PlaceLimitOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryLimitOpenOrders()`

```php
queryLimitOpenOrders($recvWindow): \Binance\Client\Convert\Model\QueryLimitOpenOrdersResponse
```

Query limit open orders (USER_DATA)

Query current open limit orders  Weight(UID): 3000  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Convert\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 5000; // int | Request validity window in milliseconds

try {
    $result = $apiInstance->queryLimitOpenOrders($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->queryLimitOpenOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**| Request validity window in milliseconds | [optional] |

### Return type

[**\Binance\Client\Convert\Model\QueryLimitOpenOrdersResponse**](../Model/QueryLimitOpenOrdersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendQuoteRequest()`

```php
sendQuoteRequest($sendQuoteRequestRequest): \Binance\Client\Convert\Model\SendQuoteRequestResponse
```

Send Quote Request (TRADE)

Request a quote for the requested token pairs  Weight(UID): 200  Security Type: TRADE  Notes: - Either `fromAmount` or `toAmount` should be sent. - `quoteId` is returned only if you have enough funds to convert.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Convert\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sendQuoteRequestRequest = new \Binance\Client\Convert\Model\SendQuoteRequestRequest(); // \Binance\Client\Convert\Model\SendQuoteRequestRequest

try {
    $result = $apiInstance->sendQuoteRequest($sendQuoteRequestRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->sendQuoteRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sendQuoteRequestRequest** | [**\Binance\Client\Convert\Model\SendQuoteRequestRequest**](../Model/SendQuoteRequestRequest.md)|  | |

### Return type

[**\Binance\Client\Convert\Model\SendQuoteRequestResponse**](../Model/SendQuoteRequestResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
