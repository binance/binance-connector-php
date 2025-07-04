# Binance\Client\DerivativesTradingPortfolioMargin\TradeApi

All URIs are relative to https://papi.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelAllCmOpenConditionalOrders()**](TradeApi.md#cancelAllCmOpenConditionalOrders) | **DELETE** /papi/v1/cm/conditional/allOpenOrders | Cancel All CM Open Conditional Orders(TRADE) |
| [**cancelAllCmOpenOrders()**](TradeApi.md#cancelAllCmOpenOrders) | **DELETE** /papi/v1/cm/allOpenOrders | Cancel All CM Open Orders(TRADE) |
| [**cancelAllUmOpenConditionalOrders()**](TradeApi.md#cancelAllUmOpenConditionalOrders) | **DELETE** /papi/v1/um/conditional/allOpenOrders | Cancel All UM Open Conditional Orders (TRADE) |
| [**cancelAllUmOpenOrders()**](TradeApi.md#cancelAllUmOpenOrders) | **DELETE** /papi/v1/um/allOpenOrders | Cancel All UM Open Orders(TRADE) |
| [**cancelCmConditionalOrder()**](TradeApi.md#cancelCmConditionalOrder) | **DELETE** /papi/v1/cm/conditional/order | Cancel CM Conditional Order(TRADE) |
| [**cancelCmOrder()**](TradeApi.md#cancelCmOrder) | **DELETE** /papi/v1/cm/order | Cancel CM Order(TRADE) |
| [**cancelMarginAccountAllOpenOrdersOnASymbol()**](TradeApi.md#cancelMarginAccountAllOpenOrdersOnASymbol) | **DELETE** /papi/v1/margin/allOpenOrders | Cancel Margin Account All Open Orders on a Symbol(TRADE) |
| [**cancelMarginAccountOcoOrders()**](TradeApi.md#cancelMarginAccountOcoOrders) | **DELETE** /papi/v1/margin/orderList | Cancel Margin Account OCO Orders(TRADE) |
| [**cancelMarginAccountOrder()**](TradeApi.md#cancelMarginAccountOrder) | **DELETE** /papi/v1/margin/order | Cancel Margin Account Order(TRADE) |
| [**cancelUmConditionalOrder()**](TradeApi.md#cancelUmConditionalOrder) | **DELETE** /papi/v1/um/conditional/order | Cancel UM Conditional Order(TRADE) |
| [**cancelUmOrder()**](TradeApi.md#cancelUmOrder) | **DELETE** /papi/v1/um/order | Cancel UM Order(TRADE) |
| [**cmAccountTradeList()**](TradeApi.md#cmAccountTradeList) | **GET** /papi/v1/cm/userTrades | CM Account Trade List(USER_DATA) |
| [**cmPositionAdlQuantileEstimation()**](TradeApi.md#cmPositionAdlQuantileEstimation) | **GET** /papi/v1/cm/adlQuantile | CM Position ADL Quantile Estimation(USER_DATA) |
| [**getUmFuturesBnbBurnStatus()**](TradeApi.md#getUmFuturesBnbBurnStatus) | **GET** /papi/v1/um/feeBurn | Get UM Futures BNB Burn Status (USER_DATA) |
| [**marginAccountBorrow()**](TradeApi.md#marginAccountBorrow) | **POST** /papi/v1/marginLoan | Margin Account Borrow(MARGIN) |
| [**marginAccountNewOco()**](TradeApi.md#marginAccountNewOco) | **POST** /papi/v1/margin/order/oco | Margin Account New OCO(TRADE) |
| [**marginAccountRepay()**](TradeApi.md#marginAccountRepay) | **POST** /papi/v1/repayLoan | Margin Account Repay(MARGIN) |
| [**marginAccountRepayDebt()**](TradeApi.md#marginAccountRepayDebt) | **POST** /papi/v1/margin/repay-debt | Margin Account Repay Debt(TRADE) |
| [**marginAccountTradeList()**](TradeApi.md#marginAccountTradeList) | **GET** /papi/v1/margin/myTrades | Margin Account Trade List (USER_DATA) |
| [**modifyCmOrder()**](TradeApi.md#modifyCmOrder) | **PUT** /papi/v1/cm/order | Modify CM Order(TRADE) |
| [**modifyUmOrder()**](TradeApi.md#modifyUmOrder) | **PUT** /papi/v1/um/order | Modify UM Order(TRADE) |
| [**newCmConditionalOrder()**](TradeApi.md#newCmConditionalOrder) | **POST** /papi/v1/cm/conditional/order | New CM Conditional Order(TRADE) |
| [**newCmOrder()**](TradeApi.md#newCmOrder) | **POST** /papi/v1/cm/order | New CM Order(TRADE) |
| [**newMarginOrder()**](TradeApi.md#newMarginOrder) | **POST** /papi/v1/margin/order | New Margin Order(TRADE) |
| [**newUmConditionalOrder()**](TradeApi.md#newUmConditionalOrder) | **POST** /papi/v1/um/conditional/order | New UM Conditional Order (TRADE) |
| [**newUmOrder()**](TradeApi.md#newUmOrder) | **POST** /papi/v1/um/order | New UM Order (TRADE) |
| [**queryAllCmConditionalOrders()**](TradeApi.md#queryAllCmConditionalOrders) | **GET** /papi/v1/cm/conditional/allOrders | Query All CM Conditional Orders(USER_DATA) |
| [**queryAllCmOrders()**](TradeApi.md#queryAllCmOrders) | **GET** /papi/v1/cm/allOrders | Query All CM Orders (USER_DATA) |
| [**queryAllCurrentCmOpenConditionalOrders()**](TradeApi.md#queryAllCurrentCmOpenConditionalOrders) | **GET** /papi/v1/cm/conditional/openOrders | Query All Current CM Open Conditional Orders (USER_DATA) |
| [**queryAllCurrentCmOpenOrders()**](TradeApi.md#queryAllCurrentCmOpenOrders) | **GET** /papi/v1/cm/openOrders | Query All Current CM Open Orders(USER_DATA) |
| [**queryAllCurrentUmOpenConditionalOrders()**](TradeApi.md#queryAllCurrentUmOpenConditionalOrders) | **GET** /papi/v1/um/conditional/openOrders | Query All Current UM Open Conditional Orders(USER_DATA) |
| [**queryAllCurrentUmOpenOrders()**](TradeApi.md#queryAllCurrentUmOpenOrders) | **GET** /papi/v1/um/openOrders | Query All Current UM Open Orders(USER_DATA) |
| [**queryAllMarginAccountOrders()**](TradeApi.md#queryAllMarginAccountOrders) | **GET** /papi/v1/margin/allOrders | Query All Margin Account Orders (USER_DATA) |
| [**queryAllUmConditionalOrders()**](TradeApi.md#queryAllUmConditionalOrders) | **GET** /papi/v1/um/conditional/allOrders | Query All UM Conditional Orders(USER_DATA) |
| [**queryAllUmOrders()**](TradeApi.md#queryAllUmOrders) | **GET** /papi/v1/um/allOrders | Query All UM Orders(USER_DATA) |
| [**queryCmConditionalOrderHistory()**](TradeApi.md#queryCmConditionalOrderHistory) | **GET** /papi/v1/cm/conditional/orderHistory | Query CM Conditional Order History(USER_DATA) |
| [**queryCmModifyOrderHistory()**](TradeApi.md#queryCmModifyOrderHistory) | **GET** /papi/v1/cm/orderAmendment | Query CM Modify Order History(TRADE) |
| [**queryCmOrder()**](TradeApi.md#queryCmOrder) | **GET** /papi/v1/cm/order | Query CM Order(USER_DATA) |
| [**queryCurrentCmOpenConditionalOrder()**](TradeApi.md#queryCurrentCmOpenConditionalOrder) | **GET** /papi/v1/cm/conditional/openOrder | Query Current CM Open Conditional Order(USER_DATA) |
| [**queryCurrentCmOpenOrder()**](TradeApi.md#queryCurrentCmOpenOrder) | **GET** /papi/v1/cm/openOrder | Query Current CM Open Order (USER_DATA) |
| [**queryCurrentMarginOpenOrder()**](TradeApi.md#queryCurrentMarginOpenOrder) | **GET** /papi/v1/margin/openOrders | Query Current Margin Open Order (USER_DATA) |
| [**queryCurrentUmOpenConditionalOrder()**](TradeApi.md#queryCurrentUmOpenConditionalOrder) | **GET** /papi/v1/um/conditional/openOrder | Query Current UM Open Conditional Order(USER_DATA) |
| [**queryCurrentUmOpenOrder()**](TradeApi.md#queryCurrentUmOpenOrder) | **GET** /papi/v1/um/openOrder | Query Current UM Open Order(USER_DATA) |
| [**queryMarginAccountOrder()**](TradeApi.md#queryMarginAccountOrder) | **GET** /papi/v1/margin/order | Query Margin Account Order (USER_DATA) |
| [**queryMarginAccountsAllOco()**](TradeApi.md#queryMarginAccountsAllOco) | **GET** /papi/v1/margin/allOrderList | Query Margin Account&#39;s all OCO (USER_DATA) |
| [**queryMarginAccountsOco()**](TradeApi.md#queryMarginAccountsOco) | **GET** /papi/v1/margin/orderList | Query Margin Account&#39;s OCO (USER_DATA) |
| [**queryMarginAccountsOpenOco()**](TradeApi.md#queryMarginAccountsOpenOco) | **GET** /papi/v1/margin/openOrderList | Query Margin Account&#39;s Open OCO (USER_DATA) |
| [**queryUmConditionalOrderHistory()**](TradeApi.md#queryUmConditionalOrderHistory) | **GET** /papi/v1/um/conditional/orderHistory | Query UM Conditional Order History(USER_DATA) |
| [**queryUmModifyOrderHistory()**](TradeApi.md#queryUmModifyOrderHistory) | **GET** /papi/v1/um/orderAmendment | Query UM Modify Order History(TRADE) |
| [**queryUmOrder()**](TradeApi.md#queryUmOrder) | **GET** /papi/v1/um/order | Query UM Order (USER_DATA) |
| [**queryUsersCmForceOrders()**](TradeApi.md#queryUsersCmForceOrders) | **GET** /papi/v1/cm/forceOrders | Query User&#39;s CM Force Orders(USER_DATA) |
| [**queryUsersMarginForceOrders()**](TradeApi.md#queryUsersMarginForceOrders) | **GET** /papi/v1/margin/forceOrders | Query User&#39;s Margin Force Orders(USER_DATA) |
| [**queryUsersUmForceOrders()**](TradeApi.md#queryUsersUmForceOrders) | **GET** /papi/v1/um/forceOrders | Query User&#39;s UM Force Orders (USER_DATA) |
| [**toggleBnbBurnOnUmFuturesTrade()**](TradeApi.md#toggleBnbBurnOnUmFuturesTrade) | **POST** /papi/v1/um/feeBurn | Toggle BNB Burn On UM Futures Trade (TRADE) |
| [**umAccountTradeList()**](TradeApi.md#umAccountTradeList) | **GET** /papi/v1/um/userTrades | UM Account Trade List(USER_DATA) |
| [**umPositionAdlQuantileEstimation()**](TradeApi.md#umPositionAdlQuantileEstimation) | **GET** /papi/v1/um/adlQuantile | UM Position ADL Quantile Estimation(USER_DATA) |


## `cancelAllCmOpenConditionalOrders()`

```php
cancelAllCmOpenConditionalOrders($symbol, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\CancelAllCmOpenConditionalOrdersResponse
```

Cancel All CM Open Conditional Orders(TRADE)

Cancel All CM Open Conditional Orders  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$recvWindow = 56; // int

try {
    $result = $apiInstance->cancelAllCmOpenConditionalOrders($symbol, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->cancelAllCmOpenConditionalOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\CancelAllCmOpenConditionalOrdersResponse**](../Model/CancelAllCmOpenConditionalOrdersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelAllCmOpenOrders()`

```php
cancelAllCmOpenOrders($symbol, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\CancelAllCmOpenOrdersResponse
```

Cancel All CM Open Orders(TRADE)

Cancel all active LIMIT orders on specific symbol  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$recvWindow = 56; // int

try {
    $result = $apiInstance->cancelAllCmOpenOrders($symbol, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->cancelAllCmOpenOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\CancelAllCmOpenOrdersResponse**](../Model/CancelAllCmOpenOrdersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelAllUmOpenConditionalOrders()`

```php
cancelAllUmOpenConditionalOrders($symbol, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\CancelAllUmOpenConditionalOrdersResponse
```

Cancel All UM Open Conditional Orders (TRADE)

Cancel All UM Open Conditional Orders  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$recvWindow = 56; // int

try {
    $result = $apiInstance->cancelAllUmOpenConditionalOrders($symbol, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->cancelAllUmOpenConditionalOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\CancelAllUmOpenConditionalOrdersResponse**](../Model/CancelAllUmOpenConditionalOrdersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelAllUmOpenOrders()`

```php
cancelAllUmOpenOrders($symbol, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\CancelAllUmOpenOrdersResponse
```

Cancel All UM Open Orders(TRADE)

Cancel all active LIMIT orders on specific symbol  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$recvWindow = 56; // int

try {
    $result = $apiInstance->cancelAllUmOpenOrders($symbol, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->cancelAllUmOpenOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\CancelAllUmOpenOrdersResponse**](../Model/CancelAllUmOpenOrdersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelCmConditionalOrder()`

```php
cancelCmConditionalOrder($symbol, $strategyId, $newClientStrategyId, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\CancelCmConditionalOrderResponse
```

Cancel CM Conditional Order(TRADE)

Cancel CM Conditional Order  * Either `strategyId` or `newClientStrategyId` must be sent.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$strategyId = 56; // int
$newClientStrategyId = 'newClientStrategyId_example'; // string
$recvWindow = 56; // int

try {
    $result = $apiInstance->cancelCmConditionalOrder($symbol, $strategyId, $newClientStrategyId, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->cancelCmConditionalOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **strategyId** | **int**|  | [optional] |
| **newClientStrategyId** | **string**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\CancelCmConditionalOrderResponse**](../Model/CancelCmConditionalOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelCmOrder()`

```php
cancelCmOrder($symbol, $orderId, $origClientOrderId, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\CancelCmOrderResponse
```

Cancel CM Order(TRADE)

Cancel an active LIMIT order  * Either `orderId` or `origClientOrderId` must be sent.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$orderId = 56; // int
$origClientOrderId = 'origClientOrderId_example'; // string
$recvWindow = 56; // int

try {
    $result = $apiInstance->cancelCmOrder($symbol, $orderId, $origClientOrderId, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->cancelCmOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **orderId** | **int**|  | [optional] |
| **origClientOrderId** | **string**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\CancelCmOrderResponse**](../Model/CancelCmOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelMarginAccountAllOpenOrdersOnASymbol()`

```php
cancelMarginAccountAllOpenOrdersOnASymbol($symbol, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\CancelMarginAccountAllOpenOrdersOnASymbolResponse
```

Cancel Margin Account All Open Orders on a Symbol(TRADE)

Cancel Margin Account All Open Orders on a Symbol  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$recvWindow = 56; // int

try {
    $result = $apiInstance->cancelMarginAccountAllOpenOrdersOnASymbol($symbol, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->cancelMarginAccountAllOpenOrdersOnASymbol: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\CancelMarginAccountAllOpenOrdersOnASymbolResponse**](../Model/CancelMarginAccountAllOpenOrdersOnASymbolResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelMarginAccountOcoOrders()`

```php
cancelMarginAccountOcoOrders($symbol, $orderListId, $listClientOrderId, $newClientOrderId, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\CancelMarginAccountOcoOrdersResponse
```

Cancel Margin Account OCO Orders(TRADE)

Cancel Margin Account OCO Orders  * Additional notes: Canceling an individual leg will cancel the entire OCO  Weight: 2

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$orderListId = 56; // int | Either `orderListId` or `listClientOrderId` must be provided
$listClientOrderId = 'listClientOrderId_example'; // string | Either `orderListId` or `listClientOrderId` must be provided
$newClientOrderId = 'newClientOrderId_example'; // string | Used to uniquely identify this cancel. Automatically generated by default
$recvWindow = 56; // int

try {
    $result = $apiInstance->cancelMarginAccountOcoOrders($symbol, $orderListId, $listClientOrderId, $newClientOrderId, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->cancelMarginAccountOcoOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **orderListId** | **int**| Either &#x60;orderListId&#x60; or &#x60;listClientOrderId&#x60; must be provided | [optional] |
| **listClientOrderId** | **string**| Either &#x60;orderListId&#x60; or &#x60;listClientOrderId&#x60; must be provided | [optional] |
| **newClientOrderId** | **string**| Used to uniquely identify this cancel. Automatically generated by default | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\CancelMarginAccountOcoOrdersResponse**](../Model/CancelMarginAccountOcoOrdersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelMarginAccountOrder()`

```php
cancelMarginAccountOrder($symbol, $orderId, $origClientOrderId, $newClientOrderId, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\CancelMarginAccountOrderResponse
```

Cancel Margin Account Order(TRADE)

Cancel Margin Account Order  * Either `orderId` or `origClientOrderId` must be sent.  Weight: 2

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$orderId = 56; // int
$origClientOrderId = 'origClientOrderId_example'; // string
$newClientOrderId = 'newClientOrderId_example'; // string | Used to uniquely identify this cancel. Automatically generated by default
$recvWindow = 56; // int

try {
    $result = $apiInstance->cancelMarginAccountOrder($symbol, $orderId, $origClientOrderId, $newClientOrderId, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->cancelMarginAccountOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **orderId** | **int**|  | [optional] |
| **origClientOrderId** | **string**|  | [optional] |
| **newClientOrderId** | **string**| Used to uniquely identify this cancel. Automatically generated by default | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\CancelMarginAccountOrderResponse**](../Model/CancelMarginAccountOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelUmConditionalOrder()`

```php
cancelUmConditionalOrder($symbol, $strategyId, $newClientStrategyId, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\CancelUmConditionalOrderResponse
```

Cancel UM Conditional Order(TRADE)

Cancel UM Conditional Order  * Either `strategyId` or `newClientStrategyId` must be sent.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$strategyId = 56; // int
$newClientStrategyId = 'newClientStrategyId_example'; // string
$recvWindow = 56; // int

try {
    $result = $apiInstance->cancelUmConditionalOrder($symbol, $strategyId, $newClientStrategyId, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->cancelUmConditionalOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **strategyId** | **int**|  | [optional] |
| **newClientStrategyId** | **string**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\CancelUmConditionalOrderResponse**](../Model/CancelUmConditionalOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelUmOrder()`

```php
cancelUmOrder($symbol, $orderId, $origClientOrderId, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\CancelUmOrderResponse
```

Cancel UM Order(TRADE)

Cancel an active UM LIMIT order  * Either `orderId` or `origClientOrderId` must be sent.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$orderId = 56; // int
$origClientOrderId = 'origClientOrderId_example'; // string
$recvWindow = 56; // int

try {
    $result = $apiInstance->cancelUmOrder($symbol, $orderId, $origClientOrderId, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->cancelUmOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **orderId** | **int**|  | [optional] |
| **origClientOrderId** | **string**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\CancelUmOrderResponse**](../Model/CancelUmOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cmAccountTradeList()`

```php
cmAccountTradeList($symbol, $pair, $startTime, $endTime, $fromId, $limit, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\CmAccountTradeListResponse
```

CM Account Trade List(USER_DATA)

Get trades for a specific account and CM symbol.  * Either `symbol` or `pair` must be sent * `symbol` and `pair` cannot be sent together * `pair` and `fromId` cannot be sent together * `OrderId` can only be sent together with symbol * If a `pair` is sent, tickers for all symbols of the `pair` will be returned * The parameter `fromId` cannot be sent with `startTime` or `endTime` * If `startTime` and `endTime` are both not sent, then the last '24 hours' data will be returned. * The time between `startTime` and `endTime` cannot be longer than 24 hours.  Weight: 20 with symbol, 40 with pair

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$pair = 'pair_example'; // string
$startTime = 56; // int | Timestamp in ms to get funding from INCLUSIVE.
$endTime = 56; // int | Timestamp in ms to get funding until INCLUSIVE.
$fromId = 56; // int | Trade id to fetch from. Default gets most recent trades.
$limit = 56; // int | Default 100; max 1000
$recvWindow = 56; // int

try {
    $result = $apiInstance->cmAccountTradeList($symbol, $pair, $startTime, $endTime, $fromId, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->cmAccountTradeList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | [optional] |
| **pair** | **string**|  | [optional] |
| **startTime** | **int**| Timestamp in ms to get funding from INCLUSIVE. | [optional] |
| **endTime** | **int**| Timestamp in ms to get funding until INCLUSIVE. | [optional] |
| **fromId** | **int**| Trade id to fetch from. Default gets most recent trades. | [optional] |
| **limit** | **int**| Default 100; max 1000 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\CmAccountTradeListResponse**](../Model/CmAccountTradeListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cmPositionAdlQuantileEstimation()`

```php
cmPositionAdlQuantileEstimation($symbol, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\CmPositionAdlQuantileEstimationResponse
```

CM Position ADL Quantile Estimation(USER_DATA)

Query CM Position ADL Quantile Estimation * Values update every 30s. * Values 0, 1, 2, 3, 4 shows the queue position and possibility of ADL from low to high. * For positions of the symbol are in One-way Mode or isolated margined in Hedge Mode, \"LONG\", \"SHORT\", and \"BOTH\" will be returned to show the positions' adl quantiles of different position sides. * If the positions of the symbol are crossed margined in Hedge Mode: * \"HEDGE\" as a sign will be returned instead of \"BOTH\"; * A same value caculated on unrealized pnls on long and short sides' positions will be shown for \"LONG\" and \"SHORT\" when there are positions in both of long and short sides.  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$recvWindow = 56; // int

try {
    $result = $apiInstance->cmPositionAdlQuantileEstimation($symbol, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->cmPositionAdlQuantileEstimation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\CmPositionAdlQuantileEstimationResponse**](../Model/CmPositionAdlQuantileEstimationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUmFuturesBnbBurnStatus()`

```php
getUmFuturesBnbBurnStatus($recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\GetUmFuturesBnbBurnStatusResponse
```

Get UM Futures BNB Burn Status (USER_DATA)

Get user's BNB Fee Discount for UM Futures (Fee Discount On or Fee Discount Off )  Weight: 30

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 56; // int

try {
    $result = $apiInstance->getUmFuturesBnbBurnStatus($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->getUmFuturesBnbBurnStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\GetUmFuturesBnbBurnStatusResponse**](../Model/GetUmFuturesBnbBurnStatusResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `marginAccountBorrow()`

```php
marginAccountBorrow($marginAccountBorrowRequest): \Binance\Client\DerivativesTradingPortfolioMargin\Model\MarginAccountBorrowResponse
```

Margin Account Borrow(MARGIN)

Apply for a margin loan.  Weight: 100

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$marginAccountBorrowRequest = new \Binance\Client\DerivativesTradingPortfolioMargin\Model\MarginAccountBorrowRequest(); // \Binance\Client\DerivativesTradingPortfolioMargin\Model\MarginAccountBorrowRequest

try {
    $result = $apiInstance->marginAccountBorrow($marginAccountBorrowRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->marginAccountBorrow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **marginAccountBorrowRequest** | [**\Binance\Client\DerivativesTradingPortfolioMargin\Model\MarginAccountBorrowRequest**](../Model/MarginAccountBorrowRequest.md)|  | |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\MarginAccountBorrowResponse**](../Model/MarginAccountBorrowResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `marginAccountNewOco()`

```php
marginAccountNewOco($marginAccountNewOcoRequest): \Binance\Client\DerivativesTradingPortfolioMargin\Model\MarginAccountNewOcoResponse
```

Margin Account New OCO(TRADE)

Send in a new OCO for a margin account  * Price Restrictions: * `SELL`: Limit Price > Last Price > Stop Price * `BUY`: Limit Price < Last Price < Stop Price * Quantity Restrictions: * Both legs must have the same quantity * `ICEBERG` quantities however do not have to be the same. * Order Rate Limit * `OCO` counts as 2 orders against the order rate limit.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$marginAccountNewOcoRequest = new \Binance\Client\DerivativesTradingPortfolioMargin\Model\MarginAccountNewOcoRequest(); // \Binance\Client\DerivativesTradingPortfolioMargin\Model\MarginAccountNewOcoRequest

try {
    $result = $apiInstance->marginAccountNewOco($marginAccountNewOcoRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->marginAccountNewOco: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **marginAccountNewOcoRequest** | [**\Binance\Client\DerivativesTradingPortfolioMargin\Model\MarginAccountNewOcoRequest**](../Model/MarginAccountNewOcoRequest.md)|  | |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\MarginAccountNewOcoResponse**](../Model/MarginAccountNewOcoResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `marginAccountRepay()`

```php
marginAccountRepay($marginAccountRepayRequest): \Binance\Client\DerivativesTradingPortfolioMargin\Model\MarginAccountRepayResponse
```

Margin Account Repay(MARGIN)

Repay for a margin loan.  Weight: 100

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$marginAccountRepayRequest = new \Binance\Client\DerivativesTradingPortfolioMargin\Model\MarginAccountRepayRequest(); // \Binance\Client\DerivativesTradingPortfolioMargin\Model\MarginAccountRepayRequest

try {
    $result = $apiInstance->marginAccountRepay($marginAccountRepayRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->marginAccountRepay: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **marginAccountRepayRequest** | [**\Binance\Client\DerivativesTradingPortfolioMargin\Model\MarginAccountRepayRequest**](../Model/MarginAccountRepayRequest.md)|  | |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\MarginAccountRepayResponse**](../Model/MarginAccountRepayResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `marginAccountRepayDebt()`

```php
marginAccountRepayDebt($marginAccountRepayDebtRequest): \Binance\Client\DerivativesTradingPortfolioMargin\Model\MarginAccountRepayDebtResponse
```

Margin Account Repay Debt(TRADE)

Repay debt for a margin loan.  * The repay asset amount cannot exceed 50000 USD equivalent value for a single request. * If `amount` is not sent, all the asset loan will be repaid if having enough specific repay assets. * If `amount` is sent, only the certain amount of the asset loan will be repaid if having enough specific repay assets. * The system will use the same asset to repay the loan first (if have) no matter whether put the asset in `specifyRepayAssets`  Weight: 3000

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$marginAccountRepayDebtRequest = new \Binance\Client\DerivativesTradingPortfolioMargin\Model\MarginAccountRepayDebtRequest(); // \Binance\Client\DerivativesTradingPortfolioMargin\Model\MarginAccountRepayDebtRequest

try {
    $result = $apiInstance->marginAccountRepayDebt($marginAccountRepayDebtRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->marginAccountRepayDebt: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **marginAccountRepayDebtRequest** | [**\Binance\Client\DerivativesTradingPortfolioMargin\Model\MarginAccountRepayDebtRequest**](../Model/MarginAccountRepayDebtRequest.md)|  | |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\MarginAccountRepayDebtResponse**](../Model/MarginAccountRepayDebtResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `marginAccountTradeList()`

```php
marginAccountTradeList($symbol, $orderId, $startTime, $endTime, $fromId, $limit, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\MarginAccountTradeListResponse
```

Margin Account Trade List (USER_DATA)

Margin Account Trade List  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$orderId = 56; // int
$startTime = 56; // int | Timestamp in ms to get funding from INCLUSIVE.
$endTime = 56; // int | Timestamp in ms to get funding until INCLUSIVE.
$fromId = 56; // int | Trade id to fetch from. Default gets most recent trades.
$limit = 56; // int | Default 100; max 1000
$recvWindow = 56; // int

try {
    $result = $apiInstance->marginAccountTradeList($symbol, $orderId, $startTime, $endTime, $fromId, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->marginAccountTradeList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **orderId** | **int**|  | [optional] |
| **startTime** | **int**| Timestamp in ms to get funding from INCLUSIVE. | [optional] |
| **endTime** | **int**| Timestamp in ms to get funding until INCLUSIVE. | [optional] |
| **fromId** | **int**| Trade id to fetch from. Default gets most recent trades. | [optional] |
| **limit** | **int**| Default 100; max 1000 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\MarginAccountTradeListResponse**](../Model/MarginAccountTradeListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `modifyCmOrder()`

```php
modifyCmOrder($modifyCmOrderRequest): \Binance\Client\DerivativesTradingPortfolioMargin\Model\ModifyCmOrderResponse
```

Modify CM Order(TRADE)

Order modify function, currently only LIMIT order modification is supported, modified orders will be reordered in the match queue  * Either `orderId` or `origClientOrderId` must be sent, and the `orderId` will prevail if both are sent. * Both `quantity` and `price` must be sent * When the new `quantity` or `price` doesn't satisfy PRICE_FILTER / PERCENT_FILTER / LOT_SIZE, amendment will be rejected and the order will stay as it is. * However the order will be cancelled by the amendment in the following situations: * when the order is in partially filled status and the new `quantity` <= `executedQty` * When the order is `GTX` and the new price will cause it to be executed immediately  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$modifyCmOrderRequest = new \Binance\Client\DerivativesTradingPortfolioMargin\Model\ModifyCmOrderRequest(); // \Binance\Client\DerivativesTradingPortfolioMargin\Model\ModifyCmOrderRequest

try {
    $result = $apiInstance->modifyCmOrder($modifyCmOrderRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->modifyCmOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **modifyCmOrderRequest** | [**\Binance\Client\DerivativesTradingPortfolioMargin\Model\ModifyCmOrderRequest**](../Model/ModifyCmOrderRequest.md)|  | |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\ModifyCmOrderResponse**](../Model/ModifyCmOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `modifyUmOrder()`

```php
modifyUmOrder($modifyUmOrderRequest): \Binance\Client\DerivativesTradingPortfolioMargin\Model\ModifyUmOrderResponse
```

Modify UM Order(TRADE)

Order modify function, currently only LIMIT order modification is supported, modified orders will be reordered in the match queue  * Either orderId or origClientOrderId must be sent, and the orderId will prevail if both are sent. * Both quantity and price must be sent * When the new quantity or price doesn't satisfy PRICE_FILTER / PERCENT_FILTER / LOT_SIZE, amendment will be rejected and the order will stay as it is. * However the order will be cancelled by the amendment in the following situations: * when the order is in partially filled status and the new quantity <= executedQty * When the order is GTX and the new price will cause it to be executed immediately  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$modifyUmOrderRequest = new \Binance\Client\DerivativesTradingPortfolioMargin\Model\ModifyUmOrderRequest(); // \Binance\Client\DerivativesTradingPortfolioMargin\Model\ModifyUmOrderRequest

try {
    $result = $apiInstance->modifyUmOrder($modifyUmOrderRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->modifyUmOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **modifyUmOrderRequest** | [**\Binance\Client\DerivativesTradingPortfolioMargin\Model\ModifyUmOrderRequest**](../Model/ModifyUmOrderRequest.md)|  | |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\ModifyUmOrderResponse**](../Model/ModifyUmOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `newCmConditionalOrder()`

```php
newCmConditionalOrder($newCmConditionalOrderRequest): \Binance\Client\DerivativesTradingPortfolioMargin\Model\NewCmConditionalOrderResponse
```

New CM Conditional Order(TRADE)

New CM Conditional Order  * Order with type `STOP/TAKE_PROFIT`, parameter `timeInForce` can be sent ( default `GTC`). * Condition orders will be triggered when: * `STOP`, `STOP_MARKET`: * BUY: \"MARK_PRICE\"  >= `stopPrice` * SELL: \"MARK_PRICE\" <= `stopPrice` * `TAKE_PROFIT`, `TAKE_PROFIT_MARKET`: * BUY: \"MARK_PRICE\" <= `stopPrice` * SELL: \"MARK_PRICE\" >= `stopPrice` * `TRAILING_STOP_MARKET`: * BUY: the lowest mark price after order placed `<= `activationPrice`, and the latest mark price >`= the lowest mark price * (1 + `callbackRate`) * SELL: the highest mark price after order placed >= `activationPrice`, and the latest mark price <= the highest mark price * (1 - `callbackRate`) * For `TRAILING_STOP_MARKET`, if you got such error code. `{\"code\": -2021, \"msg\": \"Order would immediately trigger.\"}` means that the parameters you send do not meet the following requirements: * BUY: `activationPrice` should be smaller than latest mark price. * SELL: `activationPrice` should be larger than latest mark price. * Condition orders will be triggered when: * If parameter`priceProtect`is sent as true: * when price reaches the `stopPrice` ，the difference rate between \"MARK_PRICE\" and \"CONTRACT_PRICE\" cannot be larger than the \"triggerProtect\" of the symbol * \"triggerProtect\" of a symbol can be got from `GET /fapi/v1/exchangeInfo` * `STOP`, `STOP_MARKET`: * BUY: latest price (\"MARK_PRICE\" or \"CONTRACT_PRICE\") >= `stopPrice` * SELL: latest price (\"MARK_PRICE\" or \"CONTRACT_PRICE\") <= `stopPrice` * `TAKE_PROFIT`, `TAKE_PROFIT_MARKET`: * BUY: latest price (\"MARK_PRICE\" or \"CONTRACT_PRICE\") <= `stopPrice` * SELL: latest price (\"MARK_PRICE\" or \"CONTRACT_PRICE\") >= `stopPrice`  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$newCmConditionalOrderRequest = new \Binance\Client\DerivativesTradingPortfolioMargin\Model\NewCmConditionalOrderRequest(); // \Binance\Client\DerivativesTradingPortfolioMargin\Model\NewCmConditionalOrderRequest

try {
    $result = $apiInstance->newCmConditionalOrder($newCmConditionalOrderRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->newCmConditionalOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **newCmConditionalOrderRequest** | [**\Binance\Client\DerivativesTradingPortfolioMargin\Model\NewCmConditionalOrderRequest**](../Model/NewCmConditionalOrderRequest.md)|  | |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\NewCmConditionalOrderResponse**](../Model/NewCmConditionalOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `newCmOrder()`

```php
newCmOrder($newCmOrderRequest): \Binance\Client\DerivativesTradingPortfolioMargin\Model\NewCmOrderResponse
```

New CM Order(TRADE)

Place new CM order  * If `newOrderRespType` is sent as `RESULT` : * `MARKET` order: the final FILLED result of the order will be return directly. * `LIMIT` order with special `timeInForce`: the final status result of the order(FILLED or EXPIRED) will be returned directly.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$newCmOrderRequest = new \Binance\Client\DerivativesTradingPortfolioMargin\Model\NewCmOrderRequest(); // \Binance\Client\DerivativesTradingPortfolioMargin\Model\NewCmOrderRequest

try {
    $result = $apiInstance->newCmOrder($newCmOrderRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->newCmOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **newCmOrderRequest** | [**\Binance\Client\DerivativesTradingPortfolioMargin\Model\NewCmOrderRequest**](../Model/NewCmOrderRequest.md)|  | |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\NewCmOrderResponse**](../Model/NewCmOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `newMarginOrder()`

```php
newMarginOrder($newMarginOrderRequest): \Binance\Client\DerivativesTradingPortfolioMargin\Model\NewMarginOrderResponse
```

New Margin Order(TRADE)

New Margin Order  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$newMarginOrderRequest = new \Binance\Client\DerivativesTradingPortfolioMargin\Model\NewMarginOrderRequest(); // \Binance\Client\DerivativesTradingPortfolioMargin\Model\NewMarginOrderRequest

try {
    $result = $apiInstance->newMarginOrder($newMarginOrderRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->newMarginOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **newMarginOrderRequest** | [**\Binance\Client\DerivativesTradingPortfolioMargin\Model\NewMarginOrderRequest**](../Model/NewMarginOrderRequest.md)|  | |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\NewMarginOrderResponse**](../Model/NewMarginOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `newUmConditionalOrder()`

```php
newUmConditionalOrder($newUmConditionalOrderRequest): \Binance\Client\DerivativesTradingPortfolioMargin\Model\NewUmConditionalOrderResponse
```

New UM Conditional Order (TRADE)

Place new UM conditional order  * Order with type `STOP/TAKE_PROFIT`, parameter `timeInForce` can be sent ( default `GTC`). * Condition orders will be triggered when: * `STOP`, `STOP_MARKET`: * BUY: \"MARK_PRICE\"  >= `stopPrice` * SELL: \"MARK_PRICE\" <= `stopPrice` * `TAKE_PROFIT`, `TAKE_PROFIT_MARKET`: * BUY: \"MARK_PRICE\" <= `stopPrice` * SELL: \"MARK_PRICE\" >= `stopPrice` * `TRAILING_STOP_MARKET`: * BUY: the lowest mark price after order placed `<= `activationPrice`, and the latest mark price >`= the lowest mark price * (1 + `callbackRate`) * SELL: the highest mark price after order placed >= `activationPrice`, and the latest mark price <= the highest mark price * (1 - `callbackRate`) * For `TRAILING_STOP_MARKET`, if you got such error code. `{\"code\": -2021, \"msg\": \"Order would immediately trigger.\"}` means that the parameters you send do not meet the following requirements: * BUY: `activationPrice` should be smaller than latest mark price. * SELL: `activationPrice` should be larger than latest mark price. * Condition orders will be triggered when: * If parameter`priceProtect`is sent as true: * when price reaches the `stopPrice` ，the difference rate between \"MARK_PRICE\" and \"CONTRACT_PRICE\" cannot be larger than the \"triggerProtect\" of the symbol * \"triggerProtect\" of a symbol can be got from `GET /fapi/v1/exchangeInfo` * `STOP`, `STOP_MARKET`: * BUY: latest price (\"MARK_PRICE\" or \"CONTRACT_PRICE\") >= `stopPrice` * SELL: latest price (\"MARK_PRICE\" or \"CONTRACT_PRICE\") <= `stopPrice` * `TAKE_PROFIT`, `TAKE_PROFIT_MARKET`: * BUY: latest price (\"MARK_PRICE\" or \"CONTRACT_PRICE\") <= `stopPrice` * SELL: latest price (\"MARK_PRICE\" or \"CONTRACT_PRICE\") >= `stopPrice` * `selfTradePreventionMode` is only effective when `timeInForce` set to `IOC` or `GTC` or `GTD`. * In extreme market conditions, timeInForce `GTD` order auto cancel time might be delayed comparing to `goodTillDate`  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$newUmConditionalOrderRequest = new \Binance\Client\DerivativesTradingPortfolioMargin\Model\NewUmConditionalOrderRequest(); // \Binance\Client\DerivativesTradingPortfolioMargin\Model\NewUmConditionalOrderRequest

try {
    $result = $apiInstance->newUmConditionalOrder($newUmConditionalOrderRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->newUmConditionalOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **newUmConditionalOrderRequest** | [**\Binance\Client\DerivativesTradingPortfolioMargin\Model\NewUmConditionalOrderRequest**](../Model/NewUmConditionalOrderRequest.md)|  | |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\NewUmConditionalOrderResponse**](../Model/NewUmConditionalOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `newUmOrder()`

```php
newUmOrder($newUmOrderRequest): \Binance\Client\DerivativesTradingPortfolioMargin\Model\NewUmOrderResponse
```

New UM Order (TRADE)

Place new UM order  * If `newOrderRespType` is sent as `RESULT` : * `MARKET` order: the final FILLED result of the order will be return directly. * `LIMIT` order with special `timeInForce`: the final status result of the order(FILLED or EXPIRED) will be returned directly. * `selfTradePreventionMode` is only effective when `timeInForce` set to `IOC` or `GTC` or `GTD`. * In extreme market conditions, timeInForce `GTD` order auto cancel time might be delayed comparing to `goodTillDate`  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$newUmOrderRequest = new \Binance\Client\DerivativesTradingPortfolioMargin\Model\NewUmOrderRequest(); // \Binance\Client\DerivativesTradingPortfolioMargin\Model\NewUmOrderRequest

try {
    $result = $apiInstance->newUmOrder($newUmOrderRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->newUmOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **newUmOrderRequest** | [**\Binance\Client\DerivativesTradingPortfolioMargin\Model\NewUmOrderRequest**](../Model/NewUmOrderRequest.md)|  | |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\NewUmOrderResponse**](../Model/NewUmOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryAllCmConditionalOrders()`

```php
queryAllCmConditionalOrders($symbol, $strategyId, $startTime, $endTime, $limit, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryAllCmConditionalOrdersResponse
```

Query All CM Conditional Orders(USER_DATA)

Query All CM Conditional Orders  * These orders will not be found: * order strategyStatus is `CANCELED` or `EXPIRED`, **AND** * order has NO filled trade, **AND** * created time + 7 days < current time * The query time period must be less than 7 days( default as the recent 7 days).  Weight: 1 for a single symbol; 40 when the symbol parameter is omitted

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$strategyId = 56; // int
$startTime = 56; // int | Timestamp in ms to get funding from INCLUSIVE.
$endTime = 56; // int | Timestamp in ms to get funding until INCLUSIVE.
$limit = 56; // int | Default 100; max 1000
$recvWindow = 56; // int

try {
    $result = $apiInstance->queryAllCmConditionalOrders($symbol, $strategyId, $startTime, $endTime, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->queryAllCmConditionalOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | [optional] |
| **strategyId** | **int**|  | [optional] |
| **startTime** | **int**| Timestamp in ms to get funding from INCLUSIVE. | [optional] |
| **endTime** | **int**| Timestamp in ms to get funding until INCLUSIVE. | [optional] |
| **limit** | **int**| Default 100; max 1000 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryAllCmConditionalOrdersResponse**](../Model/QueryAllCmConditionalOrdersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryAllCmOrders()`

```php
queryAllCmOrders($symbol, $pair, $orderId, $startTime, $endTime, $limit, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryAllCmOrdersResponse
```

Query All CM Orders (USER_DATA)

Get all account CM orders; active, canceled, or filled.  * Either `symbol` or `pair` must be sent. * If `orderId` is set, it will get orders >= that orderId. Otherwise most recent orders are returned. * These orders will not be found: * order status is `CANCELED` or `EXPIRED`, **AND** * order has NO filled trade, **AND** * created time + 3 days < current time  Weight: 20 with symbol, 40 with pair

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$pair = 'pair_example'; // string
$orderId = 56; // int
$startTime = 56; // int | Timestamp in ms to get funding from INCLUSIVE.
$endTime = 56; // int | Timestamp in ms to get funding until INCLUSIVE.
$limit = 56; // int | Default 100; max 1000
$recvWindow = 56; // int

try {
    $result = $apiInstance->queryAllCmOrders($symbol, $pair, $orderId, $startTime, $endTime, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->queryAllCmOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **pair** | **string**|  | [optional] |
| **orderId** | **int**|  | [optional] |
| **startTime** | **int**| Timestamp in ms to get funding from INCLUSIVE. | [optional] |
| **endTime** | **int**| Timestamp in ms to get funding until INCLUSIVE. | [optional] |
| **limit** | **int**| Default 100; max 1000 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryAllCmOrdersResponse**](../Model/QueryAllCmOrdersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryAllCurrentCmOpenConditionalOrders()`

```php
queryAllCurrentCmOpenConditionalOrders($symbol, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryAllCurrentCmOpenConditionalOrdersResponse
```

Query All Current CM Open Conditional Orders (USER_DATA)

Get all open conditional orders on a symbol. **Careful** when accessing this with no symbol.  * If the symbol is not sent, orders for all symbols will be returned in an array.  Weight: 1 for a single symbol; 40 when the symbol parameter is omitted

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$recvWindow = 56; // int

try {
    $result = $apiInstance->queryAllCurrentCmOpenConditionalOrders($symbol, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->queryAllCurrentCmOpenConditionalOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryAllCurrentCmOpenConditionalOrdersResponse**](../Model/QueryAllCurrentCmOpenConditionalOrdersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryAllCurrentCmOpenOrders()`

```php
queryAllCurrentCmOpenOrders($symbol, $pair, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryAllCurrentCmOpenOrdersResponse
```

Query All Current CM Open Orders(USER_DATA)

Get all open orders on a symbol.  * If the symbol is not sent, orders for all symbols will be returned in an array.  Weight: 1 for a single symbol; 40 when the symbol parameter is omitted Careful when accessing this with no symbol.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$pair = 'pair_example'; // string
$recvWindow = 56; // int

try {
    $result = $apiInstance->queryAllCurrentCmOpenOrders($symbol, $pair, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->queryAllCurrentCmOpenOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | [optional] |
| **pair** | **string**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryAllCurrentCmOpenOrdersResponse**](../Model/QueryAllCurrentCmOpenOrdersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryAllCurrentUmOpenConditionalOrders()`

```php
queryAllCurrentUmOpenConditionalOrders($symbol, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryAllCurrentUmOpenConditionalOrdersResponse
```

Query All Current UM Open Conditional Orders(USER_DATA)

Get all open conditional orders on a symbol.  * If the symbol is not sent, orders for all symbols will be returned in an array.  Weight: 1 for a single symbol; 40 when the symbol parameter is omitted Careful when accessing this with no symbol.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$recvWindow = 56; // int

try {
    $result = $apiInstance->queryAllCurrentUmOpenConditionalOrders($symbol, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->queryAllCurrentUmOpenConditionalOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryAllCurrentUmOpenConditionalOrdersResponse**](../Model/QueryAllCurrentUmOpenConditionalOrdersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryAllCurrentUmOpenOrders()`

```php
queryAllCurrentUmOpenOrders($symbol, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryAllCurrentUmOpenOrdersResponse
```

Query All Current UM Open Orders(USER_DATA)

Get all open orders on a symbol.   * If the symbol is not sent, orders for all symbols will be returned in an array.  Weight: 1 for a single symbol; 40 when the symbol parameter is omitted

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$recvWindow = 56; // int

try {
    $result = $apiInstance->queryAllCurrentUmOpenOrders($symbol, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->queryAllCurrentUmOpenOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryAllCurrentUmOpenOrdersResponse**](../Model/QueryAllCurrentUmOpenOrdersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryAllMarginAccountOrders()`

```php
queryAllMarginAccountOrders($symbol, $orderId, $startTime, $endTime, $limit, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryAllMarginAccountOrdersResponse
```

Query All Margin Account Orders (USER_DATA)

Query All Margin Account Orders  Weight: 100

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$orderId = 56; // int
$startTime = 56; // int | Timestamp in ms to get funding from INCLUSIVE.
$endTime = 56; // int | Timestamp in ms to get funding until INCLUSIVE.
$limit = 56; // int | Default 100; max 1000
$recvWindow = 56; // int

try {
    $result = $apiInstance->queryAllMarginAccountOrders($symbol, $orderId, $startTime, $endTime, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->queryAllMarginAccountOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **orderId** | **int**|  | [optional] |
| **startTime** | **int**| Timestamp in ms to get funding from INCLUSIVE. | [optional] |
| **endTime** | **int**| Timestamp in ms to get funding until INCLUSIVE. | [optional] |
| **limit** | **int**| Default 100; max 1000 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryAllMarginAccountOrdersResponse**](../Model/QueryAllMarginAccountOrdersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryAllUmConditionalOrders()`

```php
queryAllUmConditionalOrders($symbol, $strategyId, $startTime, $endTime, $limit, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryAllUmConditionalOrdersResponse
```

Query All UM Conditional Orders(USER_DATA)

Query All UM Conditional Orders  * These orders will not be found: * order strategyStatus is `CANCELED` or `EXPIRED`, **AND** * order has NO filled trade, **AND** * created time + 7 days < current time * The query time period must be less than 7 days( default as the recent 7 days).  Weight: 1 for a single symbol; 40 when the symbol parameter is omitted

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$strategyId = 56; // int
$startTime = 56; // int | Timestamp in ms to get funding from INCLUSIVE.
$endTime = 56; // int | Timestamp in ms to get funding until INCLUSIVE.
$limit = 56; // int | Default 100; max 1000
$recvWindow = 56; // int

try {
    $result = $apiInstance->queryAllUmConditionalOrders($symbol, $strategyId, $startTime, $endTime, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->queryAllUmConditionalOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | [optional] |
| **strategyId** | **int**|  | [optional] |
| **startTime** | **int**| Timestamp in ms to get funding from INCLUSIVE. | [optional] |
| **endTime** | **int**| Timestamp in ms to get funding until INCLUSIVE. | [optional] |
| **limit** | **int**| Default 100; max 1000 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryAllUmConditionalOrdersResponse**](../Model/QueryAllUmConditionalOrdersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryAllUmOrders()`

```php
queryAllUmOrders($symbol, $orderId, $startTime, $endTime, $limit, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryAllUmOrdersResponse
```

Query All UM Orders(USER_DATA)

Get all account UM orders; active, canceled, or filled. * These orders will not be found: * order status is `CANCELED` or `EXPIRED`, **AND** * order has NO filled trade, **AND** * created time + 3 days < current time  * If `orderId` is set, it will get orders >= that orderId. Otherwise most recent orders are returned. * The query time period must be less then 7 days( default as the recent 7 days).  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$orderId = 56; // int
$startTime = 56; // int | Timestamp in ms to get funding from INCLUSIVE.
$endTime = 56; // int | Timestamp in ms to get funding until INCLUSIVE.
$limit = 56; // int | Default 100; max 1000
$recvWindow = 56; // int

try {
    $result = $apiInstance->queryAllUmOrders($symbol, $orderId, $startTime, $endTime, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->queryAllUmOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **orderId** | **int**|  | [optional] |
| **startTime** | **int**| Timestamp in ms to get funding from INCLUSIVE. | [optional] |
| **endTime** | **int**| Timestamp in ms to get funding until INCLUSIVE. | [optional] |
| **limit** | **int**| Default 100; max 1000 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryAllUmOrdersResponse**](../Model/QueryAllUmOrdersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryCmConditionalOrderHistory()`

```php
queryCmConditionalOrderHistory($symbol, $strategyId, $newClientStrategyId, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryCmConditionalOrderHistoryResponse
```

Query CM Conditional Order History(USER_DATA)

Query CM Conditional Order History   * Either `strategyId` or `newClientStrategyId` must be sent. * `NEW` orders will not be found. * These orders will not be found: * order status is `CANCELED` or `EXPIRED`, **AND** * order has NO filled trade, **AND** * created time + 7 days < current time  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$strategyId = 56; // int
$newClientStrategyId = 'newClientStrategyId_example'; // string
$recvWindow = 56; // int

try {
    $result = $apiInstance->queryCmConditionalOrderHistory($symbol, $strategyId, $newClientStrategyId, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->queryCmConditionalOrderHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **strategyId** | **int**|  | [optional] |
| **newClientStrategyId** | **string**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryCmConditionalOrderHistoryResponse**](../Model/QueryCmConditionalOrderHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryCmModifyOrderHistory()`

```php
queryCmModifyOrderHistory($symbol, $orderId, $origClientOrderId, $startTime, $endTime, $limit, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryCmModifyOrderHistoryResponse
```

Query CM Modify Order History(TRADE)

Get order modification history  * Either `orderId` or `origClientOrderId` must be sent, and the `orderId` will prevail if both are sent.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$orderId = 56; // int
$origClientOrderId = 'origClientOrderId_example'; // string
$startTime = 56; // int | Timestamp in ms to get funding from INCLUSIVE.
$endTime = 56; // int | Timestamp in ms to get funding until INCLUSIVE.
$limit = 56; // int | Default 100; max 1000
$recvWindow = 56; // int

try {
    $result = $apiInstance->queryCmModifyOrderHistory($symbol, $orderId, $origClientOrderId, $startTime, $endTime, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->queryCmModifyOrderHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **orderId** | **int**|  | [optional] |
| **origClientOrderId** | **string**|  | [optional] |
| **startTime** | **int**| Timestamp in ms to get funding from INCLUSIVE. | [optional] |
| **endTime** | **int**| Timestamp in ms to get funding until INCLUSIVE. | [optional] |
| **limit** | **int**| Default 100; max 1000 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryCmModifyOrderHistoryResponse**](../Model/QueryCmModifyOrderHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryCmOrder()`

```php
queryCmOrder($symbol, $orderId, $origClientOrderId, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryCmOrderResponse
```

Query CM Order(USER_DATA)

Check an CM order's status.  * Either `orderId` or `origClientOrderId` must be sent. * These orders will not be found: * order status is `CANCELED` or `EXPIRED`, **AND** * order has NO filled trade, **AND** * created time + 3 days < current time  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$orderId = 56; // int
$origClientOrderId = 'origClientOrderId_example'; // string
$recvWindow = 56; // int

try {
    $result = $apiInstance->queryCmOrder($symbol, $orderId, $origClientOrderId, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->queryCmOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **orderId** | **int**|  | [optional] |
| **origClientOrderId** | **string**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryCmOrderResponse**](../Model/QueryCmOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryCurrentCmOpenConditionalOrder()`

```php
queryCurrentCmOpenConditionalOrder($symbol, $strategyId, $newClientStrategyId, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryCurrentCmOpenConditionalOrderResponse
```

Query Current CM Open Conditional Order(USER_DATA)

Query Current CM Open Conditional Order  * Either `strategyId` or `newClientStrategyId` must be sent. * If the queried order has been triggered, cancelled or expired, the error message \"Order does not exist\" will be returned.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$strategyId = 56; // int
$newClientStrategyId = 'newClientStrategyId_example'; // string
$recvWindow = 56; // int

try {
    $result = $apiInstance->queryCurrentCmOpenConditionalOrder($symbol, $strategyId, $newClientStrategyId, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->queryCurrentCmOpenConditionalOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **strategyId** | **int**|  | [optional] |
| **newClientStrategyId** | **string**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryCurrentCmOpenConditionalOrderResponse**](../Model/QueryCurrentCmOpenConditionalOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryCurrentCmOpenOrder()`

```php
queryCurrentCmOpenOrder($symbol, $orderId, $origClientOrderId, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryCurrentCmOpenOrderResponse
```

Query Current CM Open Order (USER_DATA)

Query current CM open order  * Either `orderId` or `origClientOrderId` must be sent. * If the queried order has been filled or cancelled, the error message \"Order does not exist\" will be returned.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$orderId = 56; // int
$origClientOrderId = 'origClientOrderId_example'; // string
$recvWindow = 56; // int

try {
    $result = $apiInstance->queryCurrentCmOpenOrder($symbol, $orderId, $origClientOrderId, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->queryCurrentCmOpenOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **orderId** | **int**|  | [optional] |
| **origClientOrderId** | **string**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryCurrentCmOpenOrderResponse**](../Model/QueryCurrentCmOpenOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryCurrentMarginOpenOrder()`

```php
queryCurrentMarginOpenOrder($symbol, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryCurrentMarginOpenOrderResponse
```

Query Current Margin Open Order (USER_DATA)

Query Current Margin Open Order  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$recvWindow = 56; // int

try {
    $result = $apiInstance->queryCurrentMarginOpenOrder($symbol, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->queryCurrentMarginOpenOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryCurrentMarginOpenOrderResponse**](../Model/QueryCurrentMarginOpenOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryCurrentUmOpenConditionalOrder()`

```php
queryCurrentUmOpenConditionalOrder($symbol, $strategyId, $newClientStrategyId, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryCurrentUmOpenConditionalOrderResponse
```

Query Current UM Open Conditional Order(USER_DATA)

Query Current UM Open Conditional Order  * Either `strategyId` or `newClientStrategyId` must be sent. * If the queried order has been `CANCELED`, `TRIGGERED`或`EXPIRED`, the error message \"Order does not exist\" will be returned.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$strategyId = 56; // int
$newClientStrategyId = 'newClientStrategyId_example'; // string
$recvWindow = 56; // int

try {
    $result = $apiInstance->queryCurrentUmOpenConditionalOrder($symbol, $strategyId, $newClientStrategyId, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->queryCurrentUmOpenConditionalOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **strategyId** | **int**|  | [optional] |
| **newClientStrategyId** | **string**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryCurrentUmOpenConditionalOrderResponse**](../Model/QueryCurrentUmOpenConditionalOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryCurrentUmOpenOrder()`

```php
queryCurrentUmOpenOrder($symbol, $orderId, $origClientOrderId, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryCurrentUmOpenOrderResponse
```

Query Current UM Open Order(USER_DATA)

Query current UM open order   * Either `orderId` or `origClientOrderId` must be sent. * If the queried order has been filled or cancelled, the error message \"Order does not exist\" will be returned.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$orderId = 56; // int
$origClientOrderId = 'origClientOrderId_example'; // string
$recvWindow = 56; // int

try {
    $result = $apiInstance->queryCurrentUmOpenOrder($symbol, $orderId, $origClientOrderId, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->queryCurrentUmOpenOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **orderId** | **int**|  | [optional] |
| **origClientOrderId** | **string**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryCurrentUmOpenOrderResponse**](../Model/QueryCurrentUmOpenOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryMarginAccountOrder()`

```php
queryMarginAccountOrder($symbol, $orderId, $origClientOrderId, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryMarginAccountOrderResponse
```

Query Margin Account Order (USER_DATA)

Query Margin Account Order  Weight: 10

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$orderId = 56; // int
$origClientOrderId = 'origClientOrderId_example'; // string
$recvWindow = 56; // int

try {
    $result = $apiInstance->queryMarginAccountOrder($symbol, $orderId, $origClientOrderId, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->queryMarginAccountOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **orderId** | **int**|  | [optional] |
| **origClientOrderId** | **string**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryMarginAccountOrderResponse**](../Model/QueryMarginAccountOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryMarginAccountsAllOco()`

```php
queryMarginAccountsAllOco($fromId, $startTime, $endTime, $limit, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryMarginAccountsAllOcoResponse
```

Query Margin Account's all OCO (USER_DATA)

Query all OCO for a specific margin account based on provided optional parameters  Weight: 100

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fromId = 56; // int | Trade id to fetch from. Default gets most recent trades.
$startTime = 56; // int | Timestamp in ms to get funding from INCLUSIVE.
$endTime = 56; // int | Timestamp in ms to get funding until INCLUSIVE.
$limit = 56; // int | Default 100; max 1000
$recvWindow = 56; // int

try {
    $result = $apiInstance->queryMarginAccountsAllOco($fromId, $startTime, $endTime, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->queryMarginAccountsAllOco: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fromId** | **int**| Trade id to fetch from. Default gets most recent trades. | [optional] |
| **startTime** | **int**| Timestamp in ms to get funding from INCLUSIVE. | [optional] |
| **endTime** | **int**| Timestamp in ms to get funding until INCLUSIVE. | [optional] |
| **limit** | **int**| Default 100; max 1000 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryMarginAccountsAllOcoResponse**](../Model/QueryMarginAccountsAllOcoResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryMarginAccountsOco()`

```php
queryMarginAccountsOco($orderListId, $origClientOrderId, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryMarginAccountsOcoResponse
```

Query Margin Account's OCO (USER_DATA)

Retrieves a specific OCO based on provided optional parameters  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$orderListId = 56; // int | Either `orderListId` or `listClientOrderId` must be provided
$origClientOrderId = 'origClientOrderId_example'; // string
$recvWindow = 56; // int

try {
    $result = $apiInstance->queryMarginAccountsOco($orderListId, $origClientOrderId, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->queryMarginAccountsOco: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **orderListId** | **int**| Either &#x60;orderListId&#x60; or &#x60;listClientOrderId&#x60; must be provided | [optional] |
| **origClientOrderId** | **string**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryMarginAccountsOcoResponse**](../Model/QueryMarginAccountsOcoResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryMarginAccountsOpenOco()`

```php
queryMarginAccountsOpenOco($recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryMarginAccountsOpenOcoResponse
```

Query Margin Account's Open OCO (USER_DATA)

Query Margin Account's Open OCO  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 56; // int

try {
    $result = $apiInstance->queryMarginAccountsOpenOco($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->queryMarginAccountsOpenOco: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryMarginAccountsOpenOcoResponse**](../Model/QueryMarginAccountsOpenOcoResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryUmConditionalOrderHistory()`

```php
queryUmConditionalOrderHistory($symbol, $strategyId, $newClientStrategyId, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryUmConditionalOrderHistoryResponse
```

Query UM Conditional Order History(USER_DATA)

Query UM Conditional Order History  * Either `strategyId` or `newClientStrategyId` must be sent. * `NEW` orders will not be found. * These orders will not be found: * order status is `CANCELED` or `EXPIRED`, **AND** * order has NO filled trade, **AND** * created time + 7 days < current time  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$strategyId = 56; // int
$newClientStrategyId = 'newClientStrategyId_example'; // string
$recvWindow = 56; // int

try {
    $result = $apiInstance->queryUmConditionalOrderHistory($symbol, $strategyId, $newClientStrategyId, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->queryUmConditionalOrderHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **strategyId** | **int**|  | [optional] |
| **newClientStrategyId** | **string**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryUmConditionalOrderHistoryResponse**](../Model/QueryUmConditionalOrderHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryUmModifyOrderHistory()`

```php
queryUmModifyOrderHistory($symbol, $orderId, $origClientOrderId, $startTime, $endTime, $limit, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryUmModifyOrderHistoryResponse
```

Query UM Modify Order History(TRADE)

Get order modification history  * Either `orderId` or `origClientOrderId` must be sent, and the `orderId` will prevail if both are sent.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$orderId = 56; // int
$origClientOrderId = 'origClientOrderId_example'; // string
$startTime = 56; // int | Timestamp in ms to get funding from INCLUSIVE.
$endTime = 56; // int | Timestamp in ms to get funding until INCLUSIVE.
$limit = 56; // int | Default 100; max 1000
$recvWindow = 56; // int

try {
    $result = $apiInstance->queryUmModifyOrderHistory($symbol, $orderId, $origClientOrderId, $startTime, $endTime, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->queryUmModifyOrderHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **orderId** | **int**|  | [optional] |
| **origClientOrderId** | **string**|  | [optional] |
| **startTime** | **int**| Timestamp in ms to get funding from INCLUSIVE. | [optional] |
| **endTime** | **int**| Timestamp in ms to get funding until INCLUSIVE. | [optional] |
| **limit** | **int**| Default 100; max 1000 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryUmModifyOrderHistoryResponse**](../Model/QueryUmModifyOrderHistoryResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryUmOrder()`

```php
queryUmOrder($symbol, $orderId, $origClientOrderId, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryUmOrderResponse
```

Query UM Order (USER_DATA)

Check an UM order's status.  * These orders will not be found: * Either `orderId` or `origClientOrderId` must be sent. * order status is `CANCELED` or `EXPIRED`, **AND** * order has NO filled trade, **AND** * created time + 3 days < current time  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$orderId = 56; // int
$origClientOrderId = 'origClientOrderId_example'; // string
$recvWindow = 56; // int

try {
    $result = $apiInstance->queryUmOrder($symbol, $orderId, $origClientOrderId, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->queryUmOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **orderId** | **int**|  | [optional] |
| **origClientOrderId** | **string**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryUmOrderResponse**](../Model/QueryUmOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryUsersCmForceOrders()`

```php
queryUsersCmForceOrders($symbol, $autoCloseType, $startTime, $endTime, $limit, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryUsersCmForceOrdersResponse
```

Query User's CM Force Orders(USER_DATA)

Query User's CM Force Orders  * If \"autoCloseType\" is not sent, orders with both of the types will be returned * If \"startTime\" is not sent, data within 7 days before \"endTime\" can be queried  Weight: 20 with symbol, 50 without symbol

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$autoCloseType = new \Binance\Client\DerivativesTradingPortfolioMargin\Model\\Binance\Client\DerivativesTradingPortfolioMargin\Model\AutoCloseType(); // \Binance\Client\DerivativesTradingPortfolioMargin\Model\AutoCloseType | `LIQUIDATION` for liquidation orders, `ADL` for ADL orders.
$startTime = 56; // int | Timestamp in ms to get funding from INCLUSIVE.
$endTime = 56; // int | Timestamp in ms to get funding until INCLUSIVE.
$limit = 56; // int | Default 100; max 1000
$recvWindow = 56; // int

try {
    $result = $apiInstance->queryUsersCmForceOrders($symbol, $autoCloseType, $startTime, $endTime, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->queryUsersCmForceOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | [optional] |
| **autoCloseType** | [**\Binance\Client\DerivativesTradingPortfolioMargin\Model\AutoCloseType**](../Model/.md)| &#x60;LIQUIDATION&#x60; for liquidation orders, &#x60;ADL&#x60; for ADL orders. | [optional] |
| **startTime** | **int**| Timestamp in ms to get funding from INCLUSIVE. | [optional] |
| **endTime** | **int**| Timestamp in ms to get funding until INCLUSIVE. | [optional] |
| **limit** | **int**| Default 100; max 1000 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryUsersCmForceOrdersResponse**](../Model/QueryUsersCmForceOrdersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryUsersMarginForceOrders()`

```php
queryUsersMarginForceOrders($startTime, $endTime, $current, $size, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryUsersMarginForceOrdersResponse
```

Query User's Margin Force Orders(USER_DATA)

Query user's margin force orders  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startTime = 56; // int | Timestamp in ms to get funding from INCLUSIVE.
$endTime = 56; // int | Timestamp in ms to get funding until INCLUSIVE.
$current = 56; // int | Currently querying page. Start from 1. Default:1
$size = 56; // int | Default:10 Max:100
$recvWindow = 56; // int

try {
    $result = $apiInstance->queryUsersMarginForceOrders($startTime, $endTime, $current, $size, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->queryUsersMarginForceOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **startTime** | **int**| Timestamp in ms to get funding from INCLUSIVE. | [optional] |
| **endTime** | **int**| Timestamp in ms to get funding until INCLUSIVE. | [optional] |
| **current** | **int**| Currently querying page. Start from 1. Default:1 | [optional] |
| **size** | **int**| Default:10 Max:100 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryUsersMarginForceOrdersResponse**](../Model/QueryUsersMarginForceOrdersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryUsersUmForceOrders()`

```php
queryUsersUmForceOrders($symbol, $autoCloseType, $startTime, $endTime, $limit, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryUsersUmForceOrdersResponse
```

Query User's UM Force Orders (USER_DATA)

Query User's UM Force Orders  * If `autoCloseType` is not sent, orders with both of the types will be returned * If `startTime` is not sent, data within 7 days before `endTime` can be queried  Weight: 20 with symbol, 50 without symbol

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$autoCloseType = new \Binance\Client\DerivativesTradingPortfolioMargin\Model\\Binance\Client\DerivativesTradingPortfolioMargin\Model\AutoCloseType(); // \Binance\Client\DerivativesTradingPortfolioMargin\Model\AutoCloseType | `LIQUIDATION` for liquidation orders, `ADL` for ADL orders.
$startTime = 56; // int | Timestamp in ms to get funding from INCLUSIVE.
$endTime = 56; // int | Timestamp in ms to get funding until INCLUSIVE.
$limit = 56; // int | Default 100; max 1000
$recvWindow = 56; // int

try {
    $result = $apiInstance->queryUsersUmForceOrders($symbol, $autoCloseType, $startTime, $endTime, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->queryUsersUmForceOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | [optional] |
| **autoCloseType** | [**\Binance\Client\DerivativesTradingPortfolioMargin\Model\AutoCloseType**](../Model/.md)| &#x60;LIQUIDATION&#x60; for liquidation orders, &#x60;ADL&#x60; for ADL orders. | [optional] |
| **startTime** | **int**| Timestamp in ms to get funding from INCLUSIVE. | [optional] |
| **endTime** | **int**| Timestamp in ms to get funding until INCLUSIVE. | [optional] |
| **limit** | **int**| Default 100; max 1000 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryUsersUmForceOrdersResponse**](../Model/QueryUsersUmForceOrdersResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `toggleBnbBurnOnUmFuturesTrade()`

```php
toggleBnbBurnOnUmFuturesTrade($toggleBnbBurnOnUmFuturesTradeRequest): \Binance\Client\DerivativesTradingPortfolioMargin\Model\ToggleBnbBurnOnUmFuturesTradeResponse
```

Toggle BNB Burn On UM Futures Trade (TRADE)

Change user's BNB Fee Discount for UM Futures (Fee Discount On or Fee Discount Off ) on ***EVERY symbol***   * The BNB would not be collected from UM-PM account to the Portfolio Margin account.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$toggleBnbBurnOnUmFuturesTradeRequest = new \Binance\Client\DerivativesTradingPortfolioMargin\Model\ToggleBnbBurnOnUmFuturesTradeRequest(); // \Binance\Client\DerivativesTradingPortfolioMargin\Model\ToggleBnbBurnOnUmFuturesTradeRequest

try {
    $result = $apiInstance->toggleBnbBurnOnUmFuturesTrade($toggleBnbBurnOnUmFuturesTradeRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->toggleBnbBurnOnUmFuturesTrade: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **toggleBnbBurnOnUmFuturesTradeRequest** | [**\Binance\Client\DerivativesTradingPortfolioMargin\Model\ToggleBnbBurnOnUmFuturesTradeRequest**](../Model/ToggleBnbBurnOnUmFuturesTradeRequest.md)|  | |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\ToggleBnbBurnOnUmFuturesTradeResponse**](../Model/ToggleBnbBurnOnUmFuturesTradeResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `umAccountTradeList()`

```php
umAccountTradeList($symbol, $startTime, $endTime, $fromId, $limit, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\UmAccountTradeListResponse
```

UM Account Trade List(USER_DATA)

Get trades for a specific account and UM symbol.   * If `startTime` and `endTime` are both not sent, then the last '7 days' data will be returned. * The time between `startTime` and `endTime` cannot be longer than 7 days. * The parameter `fromId` cannot be sent with `startTime` or `endTime`.  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$startTime = 56; // int | Timestamp in ms to get funding from INCLUSIVE.
$endTime = 56; // int | Timestamp in ms to get funding until INCLUSIVE.
$fromId = 56; // int | Trade id to fetch from. Default gets most recent trades.
$limit = 56; // int | Default 100; max 1000
$recvWindow = 56; // int

try {
    $result = $apiInstance->umAccountTradeList($symbol, $startTime, $endTime, $fromId, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->umAccountTradeList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **startTime** | **int**| Timestamp in ms to get funding from INCLUSIVE. | [optional] |
| **endTime** | **int**| Timestamp in ms to get funding until INCLUSIVE. | [optional] |
| **fromId** | **int**| Trade id to fetch from. Default gets most recent trades. | [optional] |
| **limit** | **int**| Default 100; max 1000 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\UmAccountTradeListResponse**](../Model/UmAccountTradeListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `umPositionAdlQuantileEstimation()`

```php
umPositionAdlQuantileEstimation($symbol, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\UmPositionAdlQuantileEstimationResponse
```

UM Position ADL Quantile Estimation(USER_DATA)

Query UM Position ADL Quantile Estimation  * Values update every 30s. * Values 0, 1, 2, 3, 4 shows the queue position and possibility of ADL from low to high. * For positions of the symbol are in One-way Mode or isolated margined in Hedge Mode, \"LONG\", \"SHORT\", and \"BOTH\" will be returned to show the positions' adl quantiles of different position sides. * If the positions of the symbol are crossed margined in Hedge Mode: * \"HEDGE\" as a sign will be returned instead of \"BOTH\"; * A same value caculated on unrealized pnls on long and short sides' positions will be shown for \"LONG\" and \"SHORT\" when there are positions in both of long and short sides.  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$recvWindow = 56; // int

try {
    $result = $apiInstance->umPositionAdlQuantileEstimation($symbol, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->umPositionAdlQuantileEstimation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\UmPositionAdlQuantileEstimationResponse**](../Model/UmPositionAdlQuantileEstimationResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
