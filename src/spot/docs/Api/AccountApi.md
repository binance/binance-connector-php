# Binance\Client\Spot\AccountApi

All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**accountCommission()**](AccountApi.md#accountCommission) | **GET** /api/v3/account/commission | Query Commission Rates |
| [**allOrderList()**](AccountApi.md#allOrderList) | **GET** /api/v3/allOrderList | Query all Order lists |
| [**allOrders()**](AccountApi.md#allOrders) | **GET** /api/v3/allOrders | All orders |
| [**getAccount()**](AccountApi.md#getAccount) | **GET** /api/v3/account | Account information |
| [**getOpenOrders()**](AccountApi.md#getOpenOrders) | **GET** /api/v3/openOrders | Current open orders |
| [**getOrder()**](AccountApi.md#getOrder) | **GET** /api/v3/order | Query order |
| [**getOrderList()**](AccountApi.md#getOrderList) | **GET** /api/v3/orderList | Query Order list |
| [**myAllocations()**](AccountApi.md#myAllocations) | **GET** /api/v3/myAllocations | Query Allocations |
| [**myFilters()**](AccountApi.md#myFilters) | **GET** /api/v3/myFilters | Query relevant filters |
| [**myPreventedMatches()**](AccountApi.md#myPreventedMatches) | **GET** /api/v3/myPreventedMatches | Query Prevented Matches |
| [**myTrades()**](AccountApi.md#myTrades) | **GET** /api/v3/myTrades | Account trade list |
| [**openOrderList()**](AccountApi.md#openOrderList) | **GET** /api/v3/openOrderList | Query Open Order lists |
| [**orderAmendments()**](AccountApi.md#orderAmendments) | **GET** /api/v3/order/amendments | Query Order Amendments |
| [**rateLimitOrder()**](AccountApi.md#rateLimitOrder) | **GET** /api/v3/rateLimit/order | Query Unfilled Order Count |


## `accountCommission()`

```php
accountCommission($symbol): \Binance\Client\Spot\Model\AccountCommissionResponse
```

Query Commission Rates

Get current account commission rates. Weight: 20

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string

try {
    $result = $apiInstance->accountCommission($symbol);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountCommission: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |

### Return type

[**\Binance\Client\Spot\Model\AccountCommissionResponse**](../Model/AccountCommissionResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `allOrderList()`

```php
allOrderList($fromId, $startTime, $endTime, $limit, $recvWindow): \Binance\Client\Spot\Model\AllOrderListResponse
```

Query all Order lists

Retrieves all order lists based on provided optional parameters.  Note that the time between `startTime` and `endTime` can't be longer than 24 hours. Weight: 20

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fromId = 56; // int | ID to get aggregate trades from INCLUSIVE.
$startTime = 56; // int | Timestamp in ms to get aggregate trades from INCLUSIVE.
$endTime = 56; // int | Timestamp in ms to get aggregate trades until INCLUSIVE.
$limit = 56; // int | Default: 500; Maximum: 1000.
$recvWindow = 3.4; // float | The value cannot be greater than `60000`. <br> Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified.

try {
    $result = $apiInstance->allOrderList($fromId, $startTime, $endTime, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->allOrderList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fromId** | **int**| ID to get aggregate trades from INCLUSIVE. | [optional] |
| **startTime** | **int**| Timestamp in ms to get aggregate trades from INCLUSIVE. | [optional] |
| **endTime** | **int**| Timestamp in ms to get aggregate trades until INCLUSIVE. | [optional] |
| **limit** | **int**| Default: 500; Maximum: 1000. | [optional] |
| **recvWindow** | **float**| The value cannot be greater than &#x60;60000&#x60;. &lt;br&gt; Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. | [optional] |

### Return type

[**\Binance\Client\Spot\Model\AllOrderListResponse**](../Model/AllOrderListResponse.md)

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
allOrders($symbol, $orderId, $startTime, $endTime, $limit, $recvWindow): \Binance\Client\Spot\Model\AllOrdersResponse
```

All orders

Get all account orders; active, canceled, or filled. Weight: 20

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$orderId = 56; // int
$startTime = 56; // int | Timestamp in ms to get aggregate trades from INCLUSIVE.
$endTime = 56; // int | Timestamp in ms to get aggregate trades until INCLUSIVE.
$limit = 56; // int | Default: 500; Maximum: 1000.
$recvWindow = 3.4; // float | The value cannot be greater than `60000`. <br> Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified.

try {
    $result = $apiInstance->allOrders($symbol, $orderId, $startTime, $endTime, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->allOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **orderId** | **int**|  | [optional] |
| **startTime** | **int**| Timestamp in ms to get aggregate trades from INCLUSIVE. | [optional] |
| **endTime** | **int**| Timestamp in ms to get aggregate trades until INCLUSIVE. | [optional] |
| **limit** | **int**| Default: 500; Maximum: 1000. | [optional] |
| **recvWindow** | **float**| The value cannot be greater than &#x60;60000&#x60;. &lt;br&gt; Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. | [optional] |

### Return type

[**\Binance\Client\Spot\Model\AllOrdersResponse**](../Model/AllOrdersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccount()`

```php
getAccount($omitZeroBalances, $recvWindow): \Binance\Client\Spot\Model\GetAccountResponse
```

Account information

Get current account information. Weight: 20

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$omitZeroBalances = True; // bool | When set to `true`, emits only the non-zero balances of an account. <br>Default value: `false`
$recvWindow = 3.4; // float | The value cannot be greater than `60000`. <br> Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified.

try {
    $result = $apiInstance->getAccount($omitZeroBalances, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **omitZeroBalances** | **bool**| When set to &#x60;true&#x60;, emits only the non-zero balances of an account. &lt;br&gt;Default value: &#x60;false&#x60; | [optional] |
| **recvWindow** | **float**| The value cannot be greater than &#x60;60000&#x60;. &lt;br&gt; Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. | [optional] |

### Return type

[**\Binance\Client\Spot\Model\GetAccountResponse**](../Model/GetAccountResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOpenOrders()`

```php
getOpenOrders($symbol, $recvWindow): \Binance\Client\Spot\Model\GetOpenOrdersResponse
```

Current open orders

Get all open orders on a symbol. **Careful** when accessing this with no symbol. Weight: 6 for a single symbol; **80** when the symbol parameter is omitted

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string | Symbol to query
$recvWindow = 3.4; // float | The value cannot be greater than `60000`. <br> Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified.

try {
    $result = $apiInstance->getOpenOrders($symbol, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getOpenOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**| Symbol to query | [optional] |
| **recvWindow** | **float**| The value cannot be greater than &#x60;60000&#x60;. &lt;br&gt; Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. | [optional] |

### Return type

[**\Binance\Client\Spot\Model\GetOpenOrdersResponse**](../Model/GetOpenOrdersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrder()`

```php
getOrder($symbol, $orderId, $origClientOrderId, $recvWindow): \Binance\Client\Spot\Model\GetOrderResponse
```

Query order

Check an order's status. Weight: 4

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$orderId = 56; // int
$origClientOrderId = 'origClientOrderId_example'; // string
$recvWindow = 3.4; // float | The value cannot be greater than `60000`. <br> Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified.

try {
    $result = $apiInstance->getOrder($symbol, $orderId, $origClientOrderId, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **orderId** | **int**|  | [optional] |
| **origClientOrderId** | **string**|  | [optional] |
| **recvWindow** | **float**| The value cannot be greater than &#x60;60000&#x60;. &lt;br&gt; Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. | [optional] |

### Return type

[**\Binance\Client\Spot\Model\GetOrderResponse**](../Model/GetOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrderList()`

```php
getOrderList($orderListId, $origClientOrderId, $recvWindow): \Binance\Client\Spot\Model\GetOrderListResponse
```

Query Order list

Retrieves a specific order list based on provided optional parameters. Weight: 4

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$orderListId = 56; // int | Either `orderListId` or `listClientOrderId` must be provided
$origClientOrderId = 'origClientOrderId_example'; // string
$recvWindow = 3.4; // float | The value cannot be greater than `60000`. <br> Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified.

try {
    $result = $apiInstance->getOrderList($orderListId, $origClientOrderId, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getOrderList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderListId** | **int**| Either &#x60;orderListId&#x60; or &#x60;listClientOrderId&#x60; must be provided | [optional] |
| **origClientOrderId** | **string**|  | [optional] |
| **recvWindow** | **float**| The value cannot be greater than &#x60;60000&#x60;. &lt;br&gt; Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. | [optional] |

### Return type

[**\Binance\Client\Spot\Model\GetOrderListResponse**](../Model/GetOrderListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `myAllocations()`

```php
myAllocations($symbol, $startTime, $endTime, $fromAllocationId, $limit, $orderId, $recvWindow): \Binance\Client\Spot\Model\MyAllocationsResponse
```

Query Allocations

Retrieves allocations resulting from SOR order placement. Weight: 20

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$startTime = 56; // int | Timestamp in ms to get aggregate trades from INCLUSIVE.
$endTime = 56; // int | Timestamp in ms to get aggregate trades until INCLUSIVE.
$fromAllocationId = 56; // int
$limit = 56; // int | Default: 500; Maximum: 1000.
$orderId = 56; // int
$recvWindow = 3.4; // float | The value cannot be greater than `60000`. <br> Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified.

try {
    $result = $apiInstance->myAllocations($symbol, $startTime, $endTime, $fromAllocationId, $limit, $orderId, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->myAllocations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **startTime** | **int**| Timestamp in ms to get aggregate trades from INCLUSIVE. | [optional] |
| **endTime** | **int**| Timestamp in ms to get aggregate trades until INCLUSIVE. | [optional] |
| **fromAllocationId** | **int**|  | [optional] |
| **limit** | **int**| Default: 500; Maximum: 1000. | [optional] |
| **orderId** | **int**|  | [optional] |
| **recvWindow** | **float**| The value cannot be greater than &#x60;60000&#x60;. &lt;br&gt; Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. | [optional] |

### Return type

[**\Binance\Client\Spot\Model\MyAllocationsResponse**](../Model/MyAllocationsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `myFilters()`

```php
myFilters($symbol, $recvWindow): \Binance\Client\Spot\Model\MyFiltersResponse
```

Query relevant filters

Retrieves the list of [filters](filters.md) relevant to an account on a given symbol. This is the only endpoint that shows if an account has `MAX_ASSET` filters applied to it. Weight: 40

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$recvWindow = 3.4; // float | The value cannot be greater than `60000`. <br> Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified.

try {
    $result = $apiInstance->myFilters($symbol, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->myFilters: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **recvWindow** | **float**| The value cannot be greater than &#x60;60000&#x60;. &lt;br&gt; Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. | [optional] |

### Return type

[**\Binance\Client\Spot\Model\MyFiltersResponse**](../Model/MyFiltersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `myPreventedMatches()`

```php
myPreventedMatches($symbol, $preventedMatchId, $orderId, $fromPreventedMatchId, $limit, $recvWindow): \Binance\Client\Spot\Model\MyPreventedMatchesResponse
```

Query Prevented Matches

Displays the list of orders that were expired due to STP.  These are the combinations supported:  * `symbol` + `preventedMatchId` * `symbol` + `orderId` * `symbol` + `orderId` + `fromPreventedMatchId` (`limit` will default to 500) * `symbol` + `orderId` + `fromPreventedMatchId` + `limit` Weight: Case                            | Weight ----                            | ----- If `symbol` is invalid          | 2 Querying by `preventedMatchId`  | 2 Querying by `orderId`           | 20

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$preventedMatchId = 56; // int
$orderId = 56; // int
$fromPreventedMatchId = 56; // int
$limit = 56; // int | Default: 500; Maximum: 1000.
$recvWindow = 3.4; // float | The value cannot be greater than `60000`. <br> Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified.

try {
    $result = $apiInstance->myPreventedMatches($symbol, $preventedMatchId, $orderId, $fromPreventedMatchId, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->myPreventedMatches: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **preventedMatchId** | **int**|  | [optional] |
| **orderId** | **int**|  | [optional] |
| **fromPreventedMatchId** | **int**|  | [optional] |
| **limit** | **int**| Default: 500; Maximum: 1000. | [optional] |
| **recvWindow** | **float**| The value cannot be greater than &#x60;60000&#x60;. &lt;br&gt; Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. | [optional] |

### Return type

[**\Binance\Client\Spot\Model\MyPreventedMatchesResponse**](../Model/MyPreventedMatchesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `myTrades()`

```php
myTrades($symbol, $orderId, $startTime, $endTime, $fromId, $limit, $recvWindow): \Binance\Client\Spot\Model\MyTradesResponse
```

Account trade list

Get trades for a specific account and symbol. Weight: Condition| Weight| ---| --- |Without orderId|20| |With orderId|5|

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$orderId = 56; // int
$startTime = 56; // int | Timestamp in ms to get aggregate trades from INCLUSIVE.
$endTime = 56; // int | Timestamp in ms to get aggregate trades until INCLUSIVE.
$fromId = 56; // int | ID to get aggregate trades from INCLUSIVE.
$limit = 56; // int | Default: 500; Maximum: 1000.
$recvWindow = 3.4; // float | The value cannot be greater than `60000`. <br> Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified.

try {
    $result = $apiInstance->myTrades($symbol, $orderId, $startTime, $endTime, $fromId, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->myTrades: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **orderId** | **int**|  | [optional] |
| **startTime** | **int**| Timestamp in ms to get aggregate trades from INCLUSIVE. | [optional] |
| **endTime** | **int**| Timestamp in ms to get aggregate trades until INCLUSIVE. | [optional] |
| **fromId** | **int**| ID to get aggregate trades from INCLUSIVE. | [optional] |
| **limit** | **int**| Default: 500; Maximum: 1000. | [optional] |
| **recvWindow** | **float**| The value cannot be greater than &#x60;60000&#x60;. &lt;br&gt; Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. | [optional] |

### Return type

[**\Binance\Client\Spot\Model\MyTradesResponse**](../Model/MyTradesResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `openOrderList()`

```php
openOrderList($recvWindow): \Binance\Client\Spot\Model\OpenOrderListResponse
```

Query Open Order lists

Weight: 6

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 3.4; // float | The value cannot be greater than `60000`. <br> Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified.

try {
    $result = $apiInstance->openOrderList($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->openOrderList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **float**| The value cannot be greater than &#x60;60000&#x60;. &lt;br&gt; Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. | [optional] |

### Return type

[**\Binance\Client\Spot\Model\OpenOrderListResponse**](../Model/OpenOrderListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderAmendments()`

```php
orderAmendments($symbol, $orderId, $fromExecutionId, $limit, $recvWindow): \Binance\Client\Spot\Model\OrderAmendmentsResponse
```

Query Order Amendments

Queries all amendments of a single order. Weight: 4

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$orderId = 56; // int
$fromExecutionId = 56; // int
$limit = 56; // int | Default:500; Maximum: 1000
$recvWindow = 3.4; // float | The value cannot be greater than `60000`. <br> Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified.

try {
    $result = $apiInstance->orderAmendments($symbol, $orderId, $fromExecutionId, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->orderAmendments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **orderId** | **int**|  | |
| **fromExecutionId** | **int**|  | [optional] |
| **limit** | **int**| Default:500; Maximum: 1000 | [optional] |
| **recvWindow** | **float**| The value cannot be greater than &#x60;60000&#x60;. &lt;br&gt; Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. | [optional] |

### Return type

[**\Binance\Client\Spot\Model\OrderAmendmentsResponse**](../Model/OrderAmendmentsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rateLimitOrder()`

```php
rateLimitOrder($recvWindow): \Binance\Client\Spot\Model\RateLimitOrderResponse
```

Query Unfilled Order Count

Displays the user's unfilled order count for all intervals. Weight: 40

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 3.4; // float | The value cannot be greater than `60000`. <br> Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified.

try {
    $result = $apiInstance->rateLimitOrder($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->rateLimitOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **float**| The value cannot be greater than &#x60;60000&#x60;. &lt;br&gt; Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. | [optional] |

### Return type

[**\Binance\Client\Spot\Model\RateLimitOrderResponse**](../Model/RateLimitOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
