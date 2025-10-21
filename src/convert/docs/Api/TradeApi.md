# Binance\Client\Convert\TradeApi

All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**acceptQuote()**](TradeApi.md#acceptQuote) | **POST** /sapi/v1/convert/acceptQuote | Accept Quote (TRADE) |
| [**cancelLimitOrder()**](TradeApi.md#cancelLimitOrder) | **POST** /sapi/v1/convert/limit/cancelOrder | Cancel limit order (USER_DATA) |
| [**getConvertTradeHistory()**](TradeApi.md#getConvertTradeHistory) | **GET** /sapi/v1/convert/tradeFlow | Get Convert Trade History(USER_DATA) |
| [**orderStatus()**](TradeApi.md#orderStatus) | **GET** /sapi/v1/convert/orderStatus | Order status(USER_DATA) |
| [**placeLimitOrder()**](TradeApi.md#placeLimitOrder) | **POST** /sapi/v1/convert/limit/placeOrder | Place limit order (USER_DATA) |
| [**queryLimitOpenOrders()**](TradeApi.md#queryLimitOpenOrders) | **GET** /sapi/v1/convert/limit/queryOpenOrders | Query limit open orders (USER_DATA) |
| [**sendQuoteRequest()**](TradeApi.md#sendQuoteRequest) | **POST** /sapi/v1/convert/getQuote | Send Quote Request(USER_DATA) |


## `acceptQuote()`

```php
acceptQuote($acceptQuoteRequest): \Binance\Client\Convert\Model\AcceptQuoteResponse
```

Accept Quote (TRADE)

Accept the offered quote by quote ID.  Weight: 500(UID)

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

Cancel limit order (USER_DATA)

Enable users to cancel a limit order  Weight: 200(UID)

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

Get Convert Trade History(USER_DATA)

Get Convert Trade History  * The max interval between startTime and endTime is 30 days.  Weight: 3000

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Convert\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startTime = 56; // int
$endTime = 56; // int
$limit = 56; // int | Default 100, Max 1000
$recvWindow = 56; // int | The value cannot be greater than 60000

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
| **limit** | **int**| Default 100, Max 1000 | [optional] |
| **recvWindow** | **int**| The value cannot be greater than 60000 | [optional] |

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

Order status(USER_DATA)

Query order status by order ID.  Weight: 100(UID)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Convert\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$orderId = 'orderId_example'; // string | Either orderId or quoteId is required
$quoteId = 'quoteId_example'; // string | Either orderId or quoteId is required

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

Place limit order (USER_DATA)

Enable users to place a limit order  * `baseAsset` or `quoteAsset` can be determined via `exchangeInfo` endpoint. * Limit price is defined from `baseAsset` to `quoteAsset`. * Either `baseAmount` or `quoteAmount` is used.  Weight: 500(UID)

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

Request a quote for the requested token pairs  Weight: 3000(UID)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Convert\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 56; // int | The value cannot be greater than 60000

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
| **recvWindow** | **int**| The value cannot be greater than 60000 | [optional] |

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

Send Quote Request(USER_DATA)

Request a quote for the requested token pairs  * Either fromAmount or toAmount should be sent * `quoteId` will be returned only if you have enough funds to convert  Weight: 200(UID)

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
