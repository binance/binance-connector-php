# Binance\Client\Spot\AccountApi



All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**accountCommission()**](AccountApi.md#accountCommission) | **GET** /api/v3/account/commission | Query Commission Rates (USER_DATA) |
| [**allOrderList()**](AccountApi.md#allOrderList) | **GET** /api/v3/allOrderList | Query all Order lists (USER_DATA) |
| [**allOrders()**](AccountApi.md#allOrders) | **GET** /api/v3/allOrders | All orders (USER_DATA) |
| [**getAccount()**](AccountApi.md#getAccount) | **GET** /api/v3/account | Account information (USER_DATA) |
| [**getOpenOrders()**](AccountApi.md#getOpenOrders) | **GET** /api/v3/openOrders | Current open orders (USER_DATA) |
| [**getOrder()**](AccountApi.md#getOrder) | **GET** /api/v3/order | Query order (USER_DATA) |
| [**getOrderList()**](AccountApi.md#getOrderList) | **GET** /api/v3/orderList | Query Order list (USER_DATA) |
| [**myAllocations()**](AccountApi.md#myAllocations) | **GET** /api/v3/myAllocations | Query Allocations (USER_DATA) |
| [**myFilters()**](AccountApi.md#myFilters) | **GET** /api/v3/myFilters | Query relevant filters (USER_DATA) |
| [**myPreventedMatches()**](AccountApi.md#myPreventedMatches) | **GET** /api/v3/myPreventedMatches | Query Prevented Matches (USER_DATA) |
| [**myTrades()**](AccountApi.md#myTrades) | **GET** /api/v3/myTrades | Account trade list (USER_DATA) |
| [**openOrderList()**](AccountApi.md#openOrderList) | **GET** /api/v3/openOrderList | Query Open Order lists (USER_DATA) |
| [**orderAmendments()**](AccountApi.md#orderAmendments) | **GET** /api/v3/order/amendments | Query Order Amendments (USER_DATA) |
| [**rateLimitOrder()**](AccountApi.md#rateLimitOrder) | **GET** /api/v3/rateLimit/order | Query Unfilled Order Count (USER_DATA) |


## `accountCommission()`

```php
accountCommission($symbol): \Binance\Client\Spot\Model\AccountCommissionResponse
```

Query Commission Rates (USER_DATA)

Get current account commission rates.  Weight(IP): 20  Security Type: USER_DATA  Notes: **Data Source:** Database

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSDT; // string

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

Query all Order lists (USER_DATA)

Retrieves all order lists based on provided optional parameters.  Note that the time between `startTime` and `endTime` can't be longer than 24 hours.  Weight(IP): 20  Security Type: USER_DATA  Notes: **Data Source:** Database

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fromId = 1; // int | If supplied, neither startTime or endTime can be provided
$startTime = 1735693200000; // int
$endTime = 1735693200000; // int
$limit = 1; // int
$recvWindow = 5000; // float | Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified.

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
| **fromId** | **int**| If supplied, neither startTime or endTime can be provided | [optional] |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **limit** | **int**|  | [optional] |
| **recvWindow** | **float**| Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. | [optional] |

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

All orders (USER_DATA)

Get all account orders; active, canceled, or filled.  Weight(IP): 20  Security Type: USER_DATA  Notes: **Data Source:** Database  - If `orderId` is set, it will get orders >= that `orderId`. Otherwise most recent orders are returned. - For some historical orders `cummulativeQuoteQty` will be < 0, meaning the data is not available at this time. - If `startTime` and/or `endTime` provided, `orderId` is not required. - The time between `startTime` and `endTime` can't be longer than 24 hours.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = LTCBTC; // string
$orderId = 1; // int
$startTime = 1735693200000; // int
$endTime = 1735693200000; // int
$limit = 1; // int
$recvWindow = 5000; // float | The value cannot be greater than `60000`. <br> Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified.

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
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **limit** | **int**|  | [optional] |
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

Account information (USER_DATA)

Get current account information.  Weight(IP): 20  Security Type: USER_DATA  Notes: **Data Source:** Memory => Database

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$omitZeroBalances = false; // bool | When set to `true`, emits only the non-zero balances of an account.
$recvWindow = 5000; // float | Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified.

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
| **omitZeroBalances** | **bool**| When set to &#x60;true&#x60;, emits only the non-zero balances of an account. | [optional] |
| **recvWindow** | **float**| Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. | [optional] |

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

Current open orders (USER_DATA)

Get all open orders on a symbol. **Careful** when accessing this with no symbol.  Weight: 6 for a single symbol; 80 when the symbol parameter is omitted  Security Type: USER_DATA  Notes: **Data Source:** Memory => Database  - If the symbol is not sent, orders for all symbols will be returned in an array.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = LTCBTC; // string
$recvWindow = 5000; // float | Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified.

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
| **symbol** | **string**|  | [optional] |
| **recvWindow** | **float**| Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. | [optional] |

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

Query order (USER_DATA)

Check an order's status.  Weight(IP): 4  Security Type: USER_DATA  Notes: **Data Source:** Memory => Database  - Either `orderId` or `origClientOrderId` must be sent. - If both `orderId` and `origClientOrderId` are provided, the `orderId` is searched first, then the `origClientOrderId` from that result is checked against that order. If both conditions are not met the request will be rejected. - For some historical orders `cummulativeQuoteQty` will be < 0, meaning the data is not available at this time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = LTCBTC; // string
$orderId = 1; // int
$origClientOrderId = myOrder1; // string
$recvWindow = 5000; // float | Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified.

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
| **recvWindow** | **float**| Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. | [optional] |

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

Query Order list (USER_DATA)

Retrieves a specific order list based on provided optional parameters.  Weight(IP): 4  Security Type: USER_DATA  Notes: **Data Source:** Database

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$orderListId = 27; // int | Query order list by `orderListId`. `orderListId` or `origClientOrderId` must be provided.
$origClientOrderId = 1; // string | Query order list by `listClientOrderId`. `orderListId` or `origClientOrderId` must be provided.
$recvWindow = 5000; // float | Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified.

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
| **orderListId** | **int**| Query order list by &#x60;orderListId&#x60;. &#x60;orderListId&#x60; or &#x60;origClientOrderId&#x60; must be provided. | [optional] |
| **origClientOrderId** | **string**| Query order list by &#x60;listClientOrderId&#x60;. &#x60;orderListId&#x60; or &#x60;origClientOrderId&#x60; must be provided. | [optional] |
| **recvWindow** | **float**| Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. | [optional] |

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

Query Allocations (USER_DATA)

Retrieves allocations resulting from SOR order placement.  Weight(IP): 20  Security Type: USER_DATA  Notes: **Data Source:** Database\"  Supported parameter combinations:  Parameters                                  | Response | ------------------------------------------- | -------- | `symbol`                                    | allocations from oldest to newest | `symbol` + `startTime`                      | oldest allocations since `startTime` | `symbol` + `endTime`                        | newest allocations until `endTime` | `symbol` + `startTime` + `endTime`          | allocations within the time range | `symbol` + `fromAllocationId`               | allocations by allocation ID | `symbol` + `orderId`                        | allocations related to an order starting with oldest | `symbol` + `orderId` + `fromAllocationId`   | allocations related to an order by allocation ID |  **Note:** The time between `startTime` and `endTime` can't be longer than 24 hours.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSDT; // string
$startTime = 1735693200000; // int
$endTime = 1735693200000; // int
$fromAllocationId = 0; // int
$limit = 1; // int
$orderId = 1; // int
$recvWindow = 5000; // float | Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified.

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
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **fromAllocationId** | **int**|  | [optional] |
| **limit** | **int**|  | [optional] |
| **orderId** | **int**|  | [optional] |
| **recvWindow** | **float**| Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. | [optional] |

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

Query relevant filters (USER_DATA)

Retrieves the list of filters relevant to an account on a given symbol. This is the only endpoint that shows if an account has `MAX_ASSET` filters applied to it.  Weight(IP): 40  Security Type: USER_DATA  Notes: **Data Source:** Memory

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BNBUSDT; // string
$recvWindow = 5000; // float | Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified.

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
| **recvWindow** | **float**| Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. | [optional] |

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

Query Prevented Matches (USER_DATA)

Displays the list of orders that were expired due to STP.  These are the combinations supported:   - `symbol` + `preventedMatchId`   - `symbol` + `orderId`   - `symbol` + `orderId` + `fromPreventedMatchId` (`limit` will default to 500)   - `symbol` + `orderId` + `fromPreventedMatchId` + `limit`  Weight: Case                            | Weight ----                            | ----- If `symbol` is invalid          | 2 Querying by `preventedMatchId`  | 2 Querying by `orderId`           | 20  Security Type: USER_DATA  Notes: **Data Source:** Database

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSDT; // string
$preventedMatchId = 1; // int
$orderId = 1; // int
$fromPreventedMatchId = 1; // int
$limit = 1; // int
$recvWindow = 5000; // float | Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified.

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
| **limit** | **int**|  | [optional] |
| **recvWindow** | **float**| Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. | [optional] |

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

Account trade list (USER_DATA)

Get trades for a specific account and symbol.  Weight: Condition| Weight| ---| --- |Without orderId|20| |With orderId|5|  Security Type: USER_DATA  Notes: **Data Source:** Memory => Database  **Notes:**: - If `fromId` is set, it will get trades >= that `fromId`. Otherwise most recent trades are returned. - The time between `startTime` and `endTime` can't be longer than 24 hours. - These are the supported combinations of all parameters:   - `symbol`   - `symbol` + `orderId`   - `symbol` + `startTime`   - `symbol` + `endTime`   - `symbol` + `fromId`   - `symbol` + `startTime` + `endTime`   - `symbol`+ `orderId` + `fromId`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BNBBTC; // string
$orderId = 100234; // int | This can only be used in combination with `symbol`.
$startTime = 1735693200000; // int
$endTime = 1735693200000; // int
$fromId = 1; // int | TradeId to fetch from. Default gets most recent trades.
$limit = 1; // int
$recvWindow = 5000; // float | Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified.

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
| **orderId** | **int**| This can only be used in combination with &#x60;symbol&#x60;. | [optional] |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **fromId** | **int**| TradeId to fetch from. Default gets most recent trades. | [optional] |
| **limit** | **int**|  | [optional] |
| **recvWindow** | **float**| Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. | [optional] |

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

Query Open Order lists (USER_DATA)

Query Open Order lists  Weight(IP): 6  Security Type: USER_DATA  Notes: **Data Source:** Memory -> Database

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 5000; // float | Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified.

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
| **recvWindow** | **float**| Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. | [optional] |

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

Query Order Amendments (USER_DATA)

Queries all amendments of a single order.  Weight(IP): 4  Security Type: USER_DATA  Notes: **Data Source:** Database

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSDT; // string
$orderId = 9; // int
$fromExecutionId = 22; // int
$limit = 1; // int
$recvWindow = 5000; // float | Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified.

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
| **limit** | **int**|  | [optional] |
| **recvWindow** | **float**| Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. | [optional] |

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

Query Unfilled Order Count (USER_DATA)

Displays the user's unfilled order count for all intervals.  Weight(IP): 40  Security Type: USER_DATA  Notes: **Data Source:** Memory

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 5000; // float | Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified.

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
| **recvWindow** | **float**| Supports up to three decimal places of precision (e.g., 6000.346) so that microseconds may be specified. | [optional] |

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
