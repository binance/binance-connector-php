# Binance\Client\DerivativesTradingPortfolioMargin\TradeApi



All URIs are relative to https://papi.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelAllCmOpenConditionalOrders()**](TradeApi.md#cancelAllCmOpenConditionalOrders) | **DELETE** /papi/v1/cm/conditional/allOpenOrders | Cancel All CM Open Conditional Orders (TRADE) |
| [**cancelAllCmOpenOrders()**](TradeApi.md#cancelAllCmOpenOrders) | **DELETE** /papi/v1/cm/allOpenOrders | Cancel All CM Open Orders (TRADE) |
| [**cancelAllUmAlgoOpenOrders()**](TradeApi.md#cancelAllUmAlgoOpenOrders) | **DELETE** /papi/v1/um/algo/allOpenOrders | Cancel All UM Algo Open Orders (TRADE) |
| [**cancelAllUmOpenConditionalOrders()**](TradeApi.md#cancelAllUmOpenConditionalOrders) | **DELETE** /papi/v1/um/conditional/allOpenOrders | Cancel All UM Open Conditional Orders (TRADE) |
| [**cancelAllUmOpenOrders()**](TradeApi.md#cancelAllUmOpenOrders) | **DELETE** /papi/v1/um/allOpenOrders | Cancel All UM Open Orders (TRADE) |
| [**cancelCmConditionalOrder()**](TradeApi.md#cancelCmConditionalOrder) | **DELETE** /papi/v1/cm/conditional/order | Cancel CM Conditional Order (TRADE) |
| [**cancelCmOrder()**](TradeApi.md#cancelCmOrder) | **DELETE** /papi/v1/cm/order | Cancel CM Order (TRADE) |
| [**cancelMarginAccountAllOpenOrdersOnASymbol()**](TradeApi.md#cancelMarginAccountAllOpenOrdersOnASymbol) | **DELETE** /papi/v1/margin/allOpenOrders | Cancel Margin Account All Open Orders on a Symbol (TRADE) |
| [**cancelMarginAccountOcoOrders()**](TradeApi.md#cancelMarginAccountOcoOrders) | **DELETE** /papi/v1/margin/orderList | Cancel Margin Account OCO Orders (TRADE) |
| [**cancelMarginAccountOrder()**](TradeApi.md#cancelMarginAccountOrder) | **DELETE** /papi/v1/margin/order | Cancel Margin Account Order (TRADE) |
| [**cancelUmAlgoOrder()**](TradeApi.md#cancelUmAlgoOrder) | **DELETE** /papi/v1/um/algo/order | Cancel UM Algo Order (TRADE) |
| [**cancelUmConditionalOrder()**](TradeApi.md#cancelUmConditionalOrder) | **DELETE** /papi/v1/um/conditional/order | Cancel UM Conditional Order (TRADE) |
| [**cancelUmOrder()**](TradeApi.md#cancelUmOrder) | **DELETE** /papi/v1/um/order | Cancel UM Order (TRADE) |
| [**cmAccountTradeList()**](TradeApi.md#cmAccountTradeList) | **GET** /papi/v1/cm/userTrades | CM Account Trade List (USER_DATA) |
| [**cmPositionAdlQuantileEstimation()**](TradeApi.md#cmPositionAdlQuantileEstimation) | **GET** /papi/v1/cm/adlQuantile | CM Position ADL Quantile Estimation (USER_DATA) |
| [**futuresTradfiPerpsContract()**](TradeApi.md#futuresTradfiPerpsContract) | **POST** /papi/v1/um/stock/contract | Futures TradFi Perps Contract (USER_DATA) |
| [**getUmFuturesBnbBurnStatus()**](TradeApi.md#getUmFuturesBnbBurnStatus) | **GET** /papi/v1/um/feeBurn | Get UM Futures BNB Burn Status (USER_DATA) |
| [**marginAccountBorrow()**](TradeApi.md#marginAccountBorrow) | **POST** /papi/v1/marginLoan | Margin Account Borrow (MARGIN) |
| [**marginAccountNewOco()**](TradeApi.md#marginAccountNewOco) | **POST** /papi/v1/margin/order/oco | Margin Account New OCO (TRADE) |
| [**marginAccountRepay()**](TradeApi.md#marginAccountRepay) | **POST** /papi/v1/repayLoan | Margin Account Repay (MARGIN) |
| [**marginAccountRepayDebt()**](TradeApi.md#marginAccountRepayDebt) | **POST** /papi/v1/margin/repay-debt | Margin Account Repay Debt (TRADE) |
| [**marginAccountTradeList()**](TradeApi.md#marginAccountTradeList) | **GET** /papi/v1/margin/myTrades | Margin Account Trade List (USER_DATA) |
| [**modifyCmOrder()**](TradeApi.md#modifyCmOrder) | **PUT** /papi/v1/cm/order | Modify CM Order (TRADE) |
| [**modifyUmOrder()**](TradeApi.md#modifyUmOrder) | **PUT** /papi/v1/um/order | Modify UM Order (TRADE) |
| [**newCmConditionalOrder()**](TradeApi.md#newCmConditionalOrder) | **POST** /papi/v1/cm/conditional/order | New CM Conditional Order (TRADE) |
| [**newCmOrder()**](TradeApi.md#newCmOrder) | **POST** /papi/v1/cm/order | New CM Order (TRADE) |
| [**newMarginOrder()**](TradeApi.md#newMarginOrder) | **POST** /papi/v1/margin/order | New Margin Order (TRADE) |
| [**newUmAlgoOrder()**](TradeApi.md#newUmAlgoOrder) | **POST** /papi/v1/um/algo/order | New UM Algo Order (TRADE) |
| [**newUmConditionalOrder()**](TradeApi.md#newUmConditionalOrder) | **POST** /papi/v1/um/conditional/order | New UM Conditional Order (TRADE) |
| [**newUmOrder()**](TradeApi.md#newUmOrder) | **POST** /papi/v1/um/order | New UM Order (TRADE) |
| [**queryAllCmConditionalOrders()**](TradeApi.md#queryAllCmConditionalOrders) | **GET** /papi/v1/cm/conditional/allOrders | Query All CM Conditional Orders (USER_DATA) |
| [**queryAllCmOrders()**](TradeApi.md#queryAllCmOrders) | **GET** /papi/v1/cm/allOrders | Query All CM Orders (USER_DATA) |
| [**queryAllCurrentCmOpenConditionalOrders()**](TradeApi.md#queryAllCurrentCmOpenConditionalOrders) | **GET** /papi/v1/cm/conditional/openOrders | Query All Current CM Open Conditional Orders (USER_DATA) |
| [**queryAllCurrentCmOpenOrders()**](TradeApi.md#queryAllCurrentCmOpenOrders) | **GET** /papi/v1/cm/openOrders | Query All Current CM Open Orders (USER_DATA) |
| [**queryAllCurrentUmOpenAlgoOrders()**](TradeApi.md#queryAllCurrentUmOpenAlgoOrders) | **GET** /papi/v1/um/algo/openAlgoOrders | Query All Current UM Open Algo Orders (USER_DATA) |
| [**queryAllCurrentUmOpenConditionalOrders()**](TradeApi.md#queryAllCurrentUmOpenConditionalOrders) | **GET** /papi/v1/um/conditional/openOrders | Query All Current UM Open Conditional Orders (USER_DATA) |
| [**queryAllCurrentUmOpenOrders()**](TradeApi.md#queryAllCurrentUmOpenOrders) | **GET** /papi/v1/um/openOrders | Query All Current UM Open Orders (USER_DATA) |
| [**queryAllMarginAccountOrders()**](TradeApi.md#queryAllMarginAccountOrders) | **GET** /papi/v1/margin/allOrders | Query All Margin Account Orders (USER_DATA) |
| [**queryAllUmConditionalOrders()**](TradeApi.md#queryAllUmConditionalOrders) | **GET** /papi/v1/um/conditional/allOrders | Query All UM Conditional Orders (USER_DATA) |
| [**queryAllUmOrders()**](TradeApi.md#queryAllUmOrders) | **GET** /papi/v1/um/allOrders | Query All UM Orders (USER_DATA) |
| [**queryCmConditionalOrderHistory()**](TradeApi.md#queryCmConditionalOrderHistory) | **GET** /papi/v1/cm/conditional/orderHistory | Query CM Conditional Order History (USER_DATA) |
| [**queryCmModifyOrderHistory()**](TradeApi.md#queryCmModifyOrderHistory) | **GET** /papi/v1/cm/orderAmendment | Query CM Modify Order History (TRADE) |
| [**queryCmOrder()**](TradeApi.md#queryCmOrder) | **GET** /papi/v1/cm/order | Query CM Order (USER_DATA) |
| [**queryCurrentCmOpenConditionalOrder()**](TradeApi.md#queryCurrentCmOpenConditionalOrder) | **GET** /papi/v1/cm/conditional/openOrder | Query Current CM Open Conditional Order (USER_DATA) |
| [**queryCurrentCmOpenOrder()**](TradeApi.md#queryCurrentCmOpenOrder) | **GET** /papi/v1/cm/openOrder | Query Current CM Open Order (USER_DATA) |
| [**queryCurrentMarginOpenOrder()**](TradeApi.md#queryCurrentMarginOpenOrder) | **GET** /papi/v1/margin/openOrders | Query Current Margin Open Order (USER_DATA) |
| [**queryCurrentUmOpenAlgoOrder()**](TradeApi.md#queryCurrentUmOpenAlgoOrder) | **GET** /papi/v1/um/algo/algoOrder | Query Current UM Open Algo Order (USER_DATA) |
| [**queryCurrentUmOpenConditionalOrder()**](TradeApi.md#queryCurrentUmOpenConditionalOrder) | **GET** /papi/v1/um/conditional/openOrder | Query Current UM Open Conditional Order (USER_DATA) |
| [**queryCurrentUmOpenOrder()**](TradeApi.md#queryCurrentUmOpenOrder) | **GET** /papi/v1/um/openOrder | Query Current UM Open Order (USER_DATA) |
| [**queryMarginAccountOrder()**](TradeApi.md#queryMarginAccountOrder) | **GET** /papi/v1/margin/order | Query Margin Account Order (USER_DATA) |
| [**queryMarginAccountsAllOco()**](TradeApi.md#queryMarginAccountsAllOco) | **GET** /papi/v1/margin/allOrderList | Query Margin Account&#39;s all OCO (USER_DATA) |
| [**queryMarginAccountsOco()**](TradeApi.md#queryMarginAccountsOco) | **GET** /papi/v1/margin/orderList | Query Margin Account&#39;s OCO (USER_DATA) |
| [**queryMarginAccountsOpenOco()**](TradeApi.md#queryMarginAccountsOpenOco) | **GET** /papi/v1/margin/openOrderList | Query Margin Account&#39;s Open OCO (USER_DATA) |
| [**queryUmAlgoOrderHistory()**](TradeApi.md#queryUmAlgoOrderHistory) | **GET** /papi/v1/um/algo/allAlgoOrders | Query UM Algo Order History (USER_DATA) |
| [**queryUmConditionalOrderHistory()**](TradeApi.md#queryUmConditionalOrderHistory) | **GET** /papi/v1/um/conditional/orderHistory | Query UM Conditional Order History (USER_DATA) |
| [**queryUmModifyOrderHistory()**](TradeApi.md#queryUmModifyOrderHistory) | **GET** /papi/v1/um/orderAmendment | Query UM Modify Order History (TRADE) |
| [**queryUmOrder()**](TradeApi.md#queryUmOrder) | **GET** /papi/v1/um/order | Query UM Order (USER_DATA) |
| [**queryUsersCmForceOrders()**](TradeApi.md#queryUsersCmForceOrders) | **GET** /papi/v1/cm/forceOrders | Query User&#39;s CM Force Orders (USER_DATA) |
| [**queryUsersMarginForceOrders()**](TradeApi.md#queryUsersMarginForceOrders) | **GET** /papi/v1/margin/forceOrders | Query User&#39;s Margin Force Orders (USER_DATA) |
| [**queryUsersUmForceOrders()**](TradeApi.md#queryUsersUmForceOrders) | **GET** /papi/v1/um/forceOrders | Query User&#39;s UM Force Orders (USER_DATA) |
| [**toggleBnbBurnOnUmFuturesTrade()**](TradeApi.md#toggleBnbBurnOnUmFuturesTrade) | **POST** /papi/v1/um/feeBurn | Toggle BNB Burn On UM Futures Trade (TRADE) |
| [**umAccountTradeList()**](TradeApi.md#umAccountTradeList) | **GET** /papi/v1/um/userTrades | UM Account Trade List (USER_DATA) |
| [**umPositionAdlQuantileEstimation()**](TradeApi.md#umPositionAdlQuantileEstimation) | **GET** /papi/v1/um/adlQuantile | UM Position ADL Quantile Estimation (USER_DATA) |


## `cancelAllCmOpenConditionalOrders()`

```php
cancelAllCmOpenConditionalOrders($symbol, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\CancelAllCmOpenConditionalOrdersResponse
```

Cancel All CM Open Conditional Orders (TRADE)

Cancel All CM Open Conditional Orders  Weight(IP): 1  Security Type: TRADE

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSDT; // string | Symbol
$recvWindow = 5000; // int

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
| **symbol** | **string**| Symbol | |
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

Cancel All CM Open Orders (TRADE)

Cancel all active LIMIT orders on specific symbol  Weight(IP): 1  Security Type: TRADE

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSDT; // string | Symbol
$recvWindow = 5000; // int

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
| **symbol** | **string**| Symbol | |
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

## `cancelAllUmAlgoOpenOrders()`

```php
cancelAllUmAlgoOpenOrders($symbol, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\CancelAllUmAlgoOpenOrdersResponse
```

Cancel All UM Algo Open Orders (TRADE)

Cancel All UM Algo Open Orders  Weight(IP): 1  Security Type: TRADE

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BNBUSDT; // string | Symbol
$recvWindow = 5000; // int

try {
    $result = $apiInstance->cancelAllUmAlgoOpenOrders($symbol, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->cancelAllUmAlgoOpenOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**| Symbol | |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\CancelAllUmAlgoOpenOrdersResponse**](../Model/CancelAllUmAlgoOpenOrdersResponse.md)

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

Cancel All UM Open Conditional Orders  Weight(IP): 1  Security Type: TRADE

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSDT; // string | Symbol
$recvWindow = 5000; // int

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
| **symbol** | **string**| Symbol | |
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

Cancel All UM Open Orders (TRADE)

Cancel all active LIMIT orders on specific symbol  Weight(IP): 1  Security Type: TRADE

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSDT; // string | Symbol
$recvWindow = 5000; // int

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
| **symbol** | **string**| Symbol | |
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

Cancel CM Conditional Order (TRADE)

Cancel CM Conditional Order  Weight(IP): 1  Security Type: TRADE  Notes: - Either `strategyId` or `newClientStrategyId` must be sent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSDT; // string | Symbol
$strategyId = 1; // int
$newClientStrategyId = 1; // string
$recvWindow = 5000; // int

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
| **symbol** | **string**| Symbol | |
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

Cancel CM Order (TRADE)

Cancel an active LIMIT order  Weight(IP): 1  Security Type: TRADE  Notes: - Either `orderId` or `origClientOrderId` must be sent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSD_200925; // string | Symbol
$orderId = 1; // int
$origClientOrderId = 1; // string
$recvWindow = 5000; // int

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
| **symbol** | **string**| Symbol | |
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

Cancel Margin Account All Open Orders on a Symbol (TRADE)

Cancel Margin Account All Open Orders on a Symbol  Weight(IP): 5  Security Type: TRADE

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSDT; // string | Symbol
$recvWindow = 5000; // int

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
| **symbol** | **string**| Symbol | |
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

Cancel Margin Account OCO Orders (TRADE)

Cancel Margin Account OCO Orders  Weight(IP): 2  Security Type: TRADE  Notes: - Additional notes: Canceling an individual leg will cancel the entire OCO

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = LTCBTC; // string | Symbol
$orderListId = 1; // int | Either `orderListId` or `listClientOrderId` must be provided
$listClientOrderId = 1; // string | Either `orderListId` or `listClientOrderId` must be provided
$newClientOrderId = 1; // string | Used to uniquely identify this cancel request.
$recvWindow = 5000; // int | The value cannot be greater than 60000

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
| **symbol** | **string**| Symbol | |
| **orderListId** | **int**| Either &#x60;orderListId&#x60; or &#x60;listClientOrderId&#x60; must be provided | [optional] |
| **listClientOrderId** | **string**| Either &#x60;orderListId&#x60; or &#x60;listClientOrderId&#x60; must be provided | [optional] |
| **newClientOrderId** | **string**| Used to uniquely identify this cancel request. | [optional] |
| **recvWindow** | **int**| The value cannot be greater than 60000 | [optional] |

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

Cancel Margin Account Order (TRADE)

Cancel Margin Account Order  Weight(IP): 2  Security Type: TRADE  Notes: - Either `orderId` or `origClientOrderId` must be sent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = LTCBTC; // string | Symbol
$orderId = 1; // int
$origClientOrderId = 1; // string
$newClientOrderId = 1; // string | Used to uniquely identify this cancel request.
$recvWindow = 5000; // int | The value cannot be greater than `60000`

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
| **symbol** | **string**| Symbol | |
| **orderId** | **int**|  | [optional] |
| **origClientOrderId** | **string**|  | [optional] |
| **newClientOrderId** | **string**| Used to uniquely identify this cancel request. | [optional] |
| **recvWindow** | **int**| The value cannot be greater than &#x60;60000&#x60; | [optional] |

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

## `cancelUmAlgoOrder()`

```php
cancelUmAlgoOrder($algoId, $clientAlgoId, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\CancelUmAlgoOrderResponse
```

Cancel UM Algo Order (TRADE)

Cancel an active UM algo order  Weight(IP): 1  Security Type: TRADE  Notes: - Either `algoId` or `clientAlgoId` must be sent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$algoId = 2146760; // int | Algo order ID
$clientAlgoId = 6B2I9XVcJpCjqPAJ4YoFX7; // string | Client algo order ID
$recvWindow = 5000; // int

try {
    $result = $apiInstance->cancelUmAlgoOrder($algoId, $clientAlgoId, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->cancelUmAlgoOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **algoId** | **int**| Algo order ID | [optional] |
| **clientAlgoId** | **string**| Client algo order ID | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\CancelUmAlgoOrderResponse**](../Model/CancelUmAlgoOrderResponse.md)

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

Cancel UM Conditional Order (TRADE)

Cancel UM Conditional Order  Weight(IP): 1  Security Type: TRADE  Notes: - Either `strategyId` or `newClientStrategyId` must be sent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSDT; // string | Symbol
$strategyId = 1; // int
$newClientStrategyId = 1; // string
$recvWindow = 5000; // int

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
| **symbol** | **string**| Symbol | |
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

Cancel UM Order (TRADE)

Cancel an active UM LIMIT order  Weight(IP): 1  Security Type: TRADE  Notes: - Either `orderId` or `origClientOrderId` must be sent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSDT; // string | Symbol
$orderId = 1; // int
$origClientOrderId = 1; // string
$recvWindow = 5000; // int

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
| **symbol** | **string**| Symbol | |
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

CM Account Trade List (USER_DATA)

Get trades for a specific account and CM symbol.  Weight: - 20 with `symbol` - 40 with `pair`  Security Type: USER_DATA  Notes: - Either `symbol` or `pair` must be sent - `symbol` and `pair` cannot be sent together - `pair` and `fromId` cannot be sent together - `OrderId` can only be sent together with symbol - If a `pair` is sent, tickers for all symbols of the `pair` will be returned - The parameter `fromId` cannot be sent with `startTime` or `endTime` - If `startTime` and `endTime` are both not sent, then the last '24 hours' data will be returned. - The time between `startTime` and `endTime` cannot be longer than 24 hours.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSD_200626; // string
$pair = BTCUSD; // string
$startTime = 1623319461670; // int | Timestamp in ms to get funding from INCLUSIVE.
$endTime = 1641782889000; // int | Timestamp in ms to get funding until INCLUSIVE.
$fromId = 1; // int | Trade ID to fetch from.
$limit = 50; // int | Number of results returned.
$recvWindow = 5000; // int

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
| **fromId** | **int**| Trade ID to fetch from. | [optional] |
| **limit** | **int**| Number of results returned. | [optional] |
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

CM Position ADL Quantile Estimation (USER_DATA)

Query CM Position ADL Quantile Estimation * Values update every 30s. * Values 0, 1, 2, 3, 4 shows the queue position and possibility of ADL from low to high. * For positions of the symbol are in One-way Mode or isolated margined in Hedge Mode, \"LONG\", \"SHORT\", and \"BOTH\" will be returned to show the positions' adl quantiles of different position sides. * If the positions of the symbol are crossed margined in Hedge Mode: * \"HEDGE\" as a sign will be returned instead of \"BOTH\"; * A same value caculated on unrealized pnls on long and short sides' positions will be shown for \"LONG\" and \"SHORT\" when there are positions in both of long and short sides.  Weight(IP): 5  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSD_201225; // string
$recvWindow = 5000; // int

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

## `futuresTradfiPerpsContract()`

```php
futuresTradfiPerpsContract($futuresTradfiPerpsContractRequest): \Binance\Client\DerivativesTradingPortfolioMargin\Model\FuturesTradfiPerpsContractResponse
```

Futures TradFi Perps Contract (USER_DATA)

Sign TradFi-Perps agreement contract  Weight(IP): 5  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$futuresTradfiPerpsContractRequest = new \Binance\Client\DerivativesTradingPortfolioMargin\Model\FuturesTradfiPerpsContractRequest(); // \Binance\Client\DerivativesTradingPortfolioMargin\Model\FuturesTradfiPerpsContractRequest

try {
    $result = $apiInstance->futuresTradfiPerpsContract($futuresTradfiPerpsContractRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->futuresTradfiPerpsContract: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **futuresTradfiPerpsContractRequest** | [**\Binance\Client\DerivativesTradingPortfolioMargin\Model\FuturesTradfiPerpsContractRequest**](../Model/FuturesTradfiPerpsContractRequest.md)|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\FuturesTradfiPerpsContractResponse**](../Model/FuturesTradfiPerpsContractResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUmFuturesBnbBurnStatus()`

```php
getUmFuturesBnbBurnStatus($recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\GetUmFuturesBnbBurnStatusResponse
```

Get UM Futures BNB Burn Status (USER_DATA)

Get user's BNB Fee Discount for UM Futures (Fee Discount On or Fee Discount Off )  Weight(IP): 30  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 5000; // int

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

Margin Account Borrow (MARGIN)

Apply for a margin loan.  Weight(IP): 100  Security Type: MARGIN

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

Margin Account New OCO (TRADE)

Send in a new OCO for a margin account  Weight(IP): 1  Security Type: TRADE  Notes: - Other Info:   - Price Restrictions:   - `SELL`: Limit Price > Last Price > Stop Price   - `BUY`: Limit Price  * Quantity Restrictions:   - Both legs must have the same quantity   - `ICEBERG` quantities however do not have to be the same.   - Order Rate Limit   - `OCO` counts as 2 orders against the order rate limit.

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

Margin Account Repay (MARGIN)

Repay for a margin loan.  Weight(IP): 100  Security Type: MARGIN

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

Margin Account Repay Debt (TRADE)

Repay debt for a margin loan.  Weight(IP): 3000  Security Type: TRADE  Notes: - The repay asset amount cannot exceed 50000 USD equivalent value for a single request. - If `amount` is not sent, all the asset loan will be repaid if having enough specific repay assets. - If `amount` is sent, only the certain amount of the asset loan will be repaid if having enough specific repay assets. - The system will use the same asset to repay the loan first (if have) no matter whether put the asset in `specifyRepayAssets`

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

Margin Account Trade List  Weight(IP): 5  Security Type: USER_DATA  Notes: - **Note:** * If `fromId` is set, returns orders with id >= `fromId`; otherwise returns recent order history. - The interval between `startTime` and `endTime` must be less than 24 hours.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSDT; // string | Symbol
$orderId = 1; // int
$startTime = 1623319461670; // int | Timestamp in ms to get funding from INCLUSIVE.
$endTime = 1641782889000; // int | Timestamp in ms to get funding until INCLUSIVE.
$fromId = 1; // int | Trade ID to fetch from.
$limit = 500; // int | Number of results returned.
$recvWindow = 5000; // int | Value cannot be greater than 60000

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
| **symbol** | **string**| Symbol | |
| **orderId** | **int**|  | [optional] |
| **startTime** | **int**| Timestamp in ms to get funding from INCLUSIVE. | [optional] |
| **endTime** | **int**| Timestamp in ms to get funding until INCLUSIVE. | [optional] |
| **fromId** | **int**| Trade ID to fetch from. | [optional] |
| **limit** | **int**| Number of results returned. | [optional] |
| **recvWindow** | **int**| Value cannot be greater than 60000 | [optional] |

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

Modify CM Order (TRADE)

Order modify function, currently only LIMIT order modification is supported, modified orders will be reordered in the match queue  Weight(IP): 1  Security Type: TRADE  Notes: - Either `orderId` or `origClientOrderId` must be sent, and the `orderId` will prevail if both are sent. - Both `quantity` and `price` must be sent - When the new `quantity` or `price` doesn't satisfy PRICE_FILTER / PERCENT_FILTER / LOT_SIZE, amendment will be rejected and the order will stay as it is. - However the order will be cancelled by the amendment in the following situations:   - when the order is in partially filled status and the new `quantity`  * When the order is `GTX` and the new price will cause it to be executed immediately

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

Modify UM Order (TRADE)

Order modify function, currently only LIMIT order modification is supported, modified orders will be reordered in the match queue  Weight(IP): 1  Security Type: TRADE  Notes: - Either orderId or origClientOrderId must be sent, and the orderId will prevail if both are sent. - Both quantity and price must be sent - When the new quantity or price doesn't satisfy PRICE_FILTER / PERCENT_FILTER / LOT_SIZE, amendment will be rejected and the order will stay as it is. - However the order will be cancelled by the amendment in the following situations:   - when the order is in partially filled status and the new quantity  * When the order is GTX and the new price will cause it to be executed immediately

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

New CM Conditional Order (TRADE)

New CM Conditional Order  Weight(IP): 1  Security Type: TRADE  Notes: - Additional mandatory parameters based on type:   - Order with type `STOP/TAKE_PROFIT`, parameter `timeInForce` can be sent ( default `GTC`).   - Condition orders will be triggered when:   - `STOP`, `STOP_MARKET`:   - BUY: \"MARK_PRICE\" >= `stopPrice`   - SELL: \"MARK_PRICE\" = `stopPrice`   - `TRAILING_STOP_MARKET`:   - BUY: the lowest mark price after order placed ``= the lowest mark price   - (1 + `callbackRate`)   - SELL: the highest mark price after order placed >= `activationPrice`, and the latest mark price = `stopPrice`   - SELL: latest price (\"MARK_PRICE\" or \"CONTRACT_PRICE\") = `stopPrice`

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

New CM Order (TRADE)

Place new CM order  Weight(IP): 1  Security Type: TRADE  Notes: - Additional mandatory parameters based on `type`:   - If `newOrderRespType` is sent as `RESULT` :   - `MARKET` order: the final FILLED result of the order will be return directly.   - `LIMIT` order with special `timeInForce`: the final status result of the order(FILLED or EXPIRED) will be returned directly.

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

New Margin Order (TRADE)

New Margin Order  Weight(IP): 1  Security Type: TRADE

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

## `newUmAlgoOrder()`

```php
newUmAlgoOrder($newUmAlgoOrderRequest): \Binance\Client\DerivativesTradingPortfolioMargin\Model\NewUmAlgoOrderResponse
```

New UM Algo Order (TRADE)

Place new UM conditional order  Weight(IP): 1  Security Type: TRADE  Notes: - Algo order with type `STOP`, parameter `timeInForce` can be sent (default `GTC`). - Algo order with type `TAKE_PROFIT`, parameter `timeInForce` can be sent (default `GTC`). - Condition orders will be triggered when price reaches the `triggerPrice`. - `STOP`, `STOP_MARKET`: BUY: latest price >= `triggerPrice`; SELL: latest price <= `triggerPrice`. - `TAKE_PROFIT`, `TAKE_PROFIT_MARKET`: BUY: latest price <= `triggerPrice`; SELL: latest price >= `triggerPrice`. - `TRAILING_STOP_MARKET`: BUY: lowest price after order placed <= `activatePrice`, and latest price >= lowest price * (1 + `callbackRate`); SELL: highest price after order placed >= `activatePrice`, and latest price <= highest price * (1 - `callbackRate`). - `selfTradePreventionMode` is only effective when `timeInForce` set to `IOC` or `GTC` or `GTD`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$newUmAlgoOrderRequest = new \Binance\Client\DerivativesTradingPortfolioMargin\Model\NewUmAlgoOrderRequest(); // \Binance\Client\DerivativesTradingPortfolioMargin\Model\NewUmAlgoOrderRequest

try {
    $result = $apiInstance->newUmAlgoOrder($newUmAlgoOrderRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->newUmAlgoOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **newUmAlgoOrderRequest** | [**\Binance\Client\DerivativesTradingPortfolioMargin\Model\NewUmAlgoOrderRequest**](../Model/NewUmAlgoOrderRequest.md)|  | |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\NewUmAlgoOrderResponse**](../Model/NewUmAlgoOrderResponse.md)

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

Place new UM conditional order  Weight(IP): 1  Security Type: TRADE  Notes: - Additional mandatory parameters based on type:   - Order with type `STOP/TAKE_PROFIT`, parameter `timeInForce` can be sent ( default `GTC`).   - Condition orders will be triggered when:   - `STOP`, `STOP_MARKET`:   - BUY: \"MARK_PRICE\" >= `stopPrice`   - SELL: \"MARK_PRICE\" = `stopPrice`   - `TRAILING_STOP_MARKET`:   - BUY: the lowest mark price after order placed ``= the lowest mark price   - (1 + `callbackRate`)   - SELL: the highest mark price after order placed >= `activationPrice`, and the latest mark price = `stopPrice`   - SELL: latest price (\"MARK_PRICE\" or \"CONTRACT_PRICE\") = `stopPrice`   - `selfTradePreventionMode` is only effective when `timeInForce` set to `IOC` or `GTC` or `GTD`.   - In extreme market conditions, timeInForce `GTD` order auto cancel time might be delayed comparing to `goodTillDate`

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

Place new UM order  Weight(IP): 1  Security Type: TRADE  Notes: - Additional mandatory parameters based on type:   - If `newOrderRespType` is sent as `RESULT` :   - `MARKET` order: the final FILLED result of the order will be return directly.   - `LIMIT` order with special `timeInForce`: the final status result of the order(FILLED or EXPIRED) will be returned directly.   - `selfTradePreventionMode` is only effective when `timeInForce` set to `IOC` or `GTC` or `GTD`.   - In extreme market conditions, timeInForce `GTD` order auto cancel time might be delayed comparing to `goodTillDate`

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

Query All CM Conditional Orders (USER_DATA)

Query All CM Conditional Orders  Weight: - 1 for a single `symbol` - 40 when `symbol` is omitted  Security Type: USER_DATA  Notes: - These orders will not be found:   - order strategyStatus is `CANCELED` or `EXPIRED`, **AND**   - order has NO filled trade, **AND**   - created time + 7 days  * The query time period must be less than 7 days( default as the recent 7 days).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSDT; // string
$strategyId = 1; // int
$startTime = 1623319461670; // int | Timestamp in ms to get funding from INCLUSIVE.
$endTime = 1641782889000; // int | Timestamp in ms to get funding until INCLUSIVE.
$limit = 500; // int | Number of results returned.
$recvWindow = 5000; // int

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
| **limit** | **int**| Number of results returned. | [optional] |
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

Get all account CM orders; active, canceled, or filled.  Weight: - 20 with `symbol` - 40 with `pair`  Security Type: USER_DATA  Notes: - Either `symbol` or `pair` must be sent. - If `orderId` is set, it will get orders >= that orderId. Otherwise most recent orders are returned. - These orders will not be found:   - order status is `CANCELED` or `EXPIRED`, **AND**   - order has NO filled trade, **AND**   - created time + 3 days < current time

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSD_200925; // string | Symbol
$pair = BTCUSD; // string
$orderId = 1; // int
$startTime = 1623319461670; // int | Timestamp in ms to get funding from INCLUSIVE.
$endTime = 1641782889000; // int | Timestamp in ms to get funding until INCLUSIVE.
$limit = 500; // int | Number of results returned.
$recvWindow = 5000; // int

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
| **symbol** | **string**| Symbol | [optional] |
| **pair** | **string**|  | [optional] |
| **orderId** | **int**|  | [optional] |
| **startTime** | **int**| Timestamp in ms to get funding from INCLUSIVE. | [optional] |
| **endTime** | **int**| Timestamp in ms to get funding until INCLUSIVE. | [optional] |
| **limit** | **int**| Number of results returned. | [optional] |
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

Get all open conditional orders on a symbol. **Careful** when accessing this with no symbol.  Weight: - 1 for a single `symbol` - 40 when `symbol` is omitted  Security Type: USER_DATA  Notes: - If the symbol is not sent, orders for all symbols will be returned in an array.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSD; // string
$recvWindow = 5000; // int

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

Query All Current CM Open Orders (USER_DATA)

Get all open orders on a symbol.  * If the symbol is not sent, orders for all symbols will be returned in an array.  Weight: - 1 for a single `symbol` - 40 when `symbol` is omitted  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSD_200925; // string
$pair = BTCUSD; // string
$recvWindow = 5000; // int

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

## `queryAllCurrentUmOpenAlgoOrders()`

```php
queryAllCurrentUmOpenAlgoOrders($algoType, $symbol, $algoId, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryAllCurrentUmOpenAlgoOrdersResponse
```

Query All Current UM Open Algo Orders (USER_DATA)

Get all UM open algo orders on a symbol. If the symbol is not sent, orders for all symbols will be returned.  Weight(IP): 1  Security Type: USER_DATA  Notes: - Weight: 1 for a single symbol; 40 when the symbol parameter is omitted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$algoType = CONDITIONAL; // string
$symbol = BNBUSDT; // string
$algoId = 2146760; // int
$recvWindow = 5000; // int

try {
    $result = $apiInstance->queryAllCurrentUmOpenAlgoOrders($algoType, $symbol, $algoId, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->queryAllCurrentUmOpenAlgoOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **algoType** | **string**|  | [optional] |
| **symbol** | **string**|  | [optional] |
| **algoId** | **int**|  | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryAllCurrentUmOpenAlgoOrdersResponse**](../Model/QueryAllCurrentUmOpenAlgoOrdersResponse.md)

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

Query All Current UM Open Conditional Orders (USER_DATA)

Get all open conditional orders on a symbol.  Weight: - 1 for a single `symbol` - 40 when `symbol` is omitted  Security Type: USER_DATA  Notes: - If `symbol` is not provided, conditional open orders for all symbols are returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSDT; // string
$recvWindow = 5000; // int

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

Query All Current UM Open Orders (USER_DATA)

Get all open orders on a symbol.  Weight: - 1 for a single `symbol` - 40 when `symbol` is omitted  Security Type: USER_DATA  Notes: - If the symbol is not sent, orders for all symbols will be returned in an array.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSDT; // string
$recvWindow = 5000; // int

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

Query All Margin Account Orders  Weight(IP): 100  Security Type: USER_DATA  Notes: - If `orderId` is set, returns orders with id >= `orderId`; otherwise returns recent order history. - For some historical orders, `cummulativeQuoteQty < 0` means the data is unavailable at this time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSDT; // string | Symbol
$orderId = 1; // int
$startTime = 1623319461670; // int | Timestamp in ms to get funding from INCLUSIVE.
$endTime = 1641782889000; // int | Timestamp in ms to get funding until INCLUSIVE.
$limit = 500; // int | Number of results returned.
$recvWindow = 5000; // int | Value cannot be greater than 60000

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
| **symbol** | **string**| Symbol | |
| **orderId** | **int**|  | [optional] |
| **startTime** | **int**| Timestamp in ms to get funding from INCLUSIVE. | [optional] |
| **endTime** | **int**| Timestamp in ms to get funding until INCLUSIVE. | [optional] |
| **limit** | **int**| Number of results returned. | [optional] |
| **recvWindow** | **int**| Value cannot be greater than 60000 | [optional] |

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

Query All UM Conditional Orders (USER_DATA)

Query All UM Conditional Orders  Weight: - 1 for a single `symbol` - 40 when `symbol` is omitted  Security Type: USER_DATA  Notes: - These orders will not be found:   - order strategyStatus is `CANCELED` or `EXPIRED`, **AND**   - order has NO filled trade, **AND**   - created time + 7 days  * The query time period must be less than 7 days( default as the recent 7 days).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSDT; // string
$strategyId = 1; // int
$startTime = 1623319461670; // int | Timestamp in ms to get funding from INCLUSIVE.
$endTime = 1641782889000; // int | Timestamp in ms to get funding until INCLUSIVE.
$limit = 500; // int | Number of results returned.
$recvWindow = 5000; // int

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
| **limit** | **int**| Number of results returned. | [optional] |
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

Query All UM Orders (USER_DATA)

Get all account UM orders; active, canceled, or filled.  Weight(IP): 5  Security Type: USER_DATA  Notes: - If `orderId` is set, it will get orders >= that orderId. Otherwise most recent orders are returned. - The query time period must be less then 7 days( default as the recent 7 days).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSDT; // string | Symbol
$orderId = 1; // int
$startTime = 1623319461670; // int | Timestamp in ms to get funding from INCLUSIVE.
$endTime = 1641782889000; // int | Timestamp in ms to get funding until INCLUSIVE.
$limit = 500; // int | Number of results returned.
$recvWindow = 5000; // int

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
| **symbol** | **string**| Symbol | |
| **orderId** | **int**|  | [optional] |
| **startTime** | **int**| Timestamp in ms to get funding from INCLUSIVE. | [optional] |
| **endTime** | **int**| Timestamp in ms to get funding until INCLUSIVE. | [optional] |
| **limit** | **int**| Number of results returned. | [optional] |
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

Query CM Conditional Order History (USER_DATA)

Query CM Conditional Order History  Weight(IP): 1  Security Type: USER_DATA  Notes: - Either `strategyId` or `newClientStrategyId` must be sent. - `NEW` orders will not be found. - These orders will not be found:   - order status is `CANCELED` or `EXPIRED`, **AND**   - order has NO filled trade, **AND**   - created time + 7 days < current time

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSDT; // string | Symbol
$strategyId = 1; // int
$newClientStrategyId = 1; // string
$recvWindow = 5000; // int

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
| **symbol** | **string**| Symbol | |
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

Query CM Modify Order History (TRADE)

Get order modification history  Weight(IP): 1  Security Type: TRADE  Notes: - Either `orderId` or `origClientOrderId` must be sent, and the `orderId` will prevail if both are sent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSDT; // string | Symbol
$orderId = 1; // int | Order ID
$origClientOrderId = 1; // string | Client order ID
$startTime = 1623319461670; // int | Timestamp in ms to get funding from INCLUSIVE.
$endTime = 1641782889000; // int | Timestamp in ms to get funding until INCLUSIVE.
$limit = 500; // int | Number of results returned.
$recvWindow = 5000; // int

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
| **symbol** | **string**| Symbol | |
| **orderId** | **int**| Order ID | [optional] |
| **origClientOrderId** | **string**| Client order ID | [optional] |
| **startTime** | **int**| Timestamp in ms to get funding from INCLUSIVE. | [optional] |
| **endTime** | **int**| Timestamp in ms to get funding until INCLUSIVE. | [optional] |
| **limit** | **int**| Number of results returned. | [optional] |
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

Query CM Order (USER_DATA)

Check an CM order's status.  Weight(IP): 1  Security Type: USER_DATA  Notes: - Either `orderId` or `origClientOrderId` must be sent. - These orders will not be found:   - order status is `CANCELED` or `EXPIRED`, **AND**   - order has NO filled trade, **AND**   - created time + 3 days < current time

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSD_200925; // string | Symbol
$orderId = 1; // int
$origClientOrderId = 1; // string
$recvWindow = 5000; // int

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
| **symbol** | **string**| Symbol | |
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

Query Current CM Open Conditional Order (USER_DATA)

Query Current CM Open Conditional Order  Weight(IP): 1  Security Type: USER_DATA  Notes: - Either `strategyId` or `newClientStrategyId` must be sent. - If the queried order has been triggered, cancelled or expired, the error message \"Order does not exist\" will be returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSD_200925; // string | Symbol
$strategyId = 1; // int
$newClientStrategyId = 1; // string
$recvWindow = 5000; // int

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
| **symbol** | **string**| Symbol | |
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

Query current CM open order  Weight(IP): 1  Security Type: USER_DATA  Notes: - Either `orderId` or `origClientOrderId` must be sent. - If the queried order has been filled or cancelled, the error message \"Order does not exist\" will be returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSDT; // string | Trading pair.
$orderId = 1917641; // int | Order ID.
$origClientOrderId = abc; // string | User-defined order ID.
$recvWindow = 5000; // int

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
| **symbol** | **string**| Trading pair. | |
| **orderId** | **int**| Order ID. | [optional] |
| **origClientOrderId** | **string**| User-defined order ID. | [optional] |
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

Query Current Margin Open Order  Weight(IP): 5  Security Type: USER_DATA  Notes: - If `symbol` is not sent, order records for all symbols are returned. - When returning all symbols, the request count charged to the rate limiter equals the number of symbols currently trading on the exchange.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSDT; // string | Symbol
$recvWindow = 5000; // int | Value cannot be greater than 60000

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
| **symbol** | **string**| Symbol | |
| **recvWindow** | **int**| Value cannot be greater than 60000 | [optional] |

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

## `queryCurrentUmOpenAlgoOrder()`

```php
queryCurrentUmOpenAlgoOrder($algoId, $clientAlgoId, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryCurrentUmOpenAlgoOrderResponse
```

Query Current UM Open Algo Order (USER_DATA)

Check an UM algo order's status. Orders will not be found if: status is CANCELED/EXPIRED with no fills and created 3+ days ago; or created 90+ days ago.  Weight(IP): 1  Security Type: USER_DATA  Notes: - Either `algoId` or `clientAlgoId` must be sent. `algoId` is self-increment for each specific `symbol`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$algoId = 2146760; // int | Algo order ID
$clientAlgoId = 6B2I9XVcJpCjqPAJ4YoFX7; // string | Client algo order ID
$recvWindow = 5000; // int

try {
    $result = $apiInstance->queryCurrentUmOpenAlgoOrder($algoId, $clientAlgoId, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->queryCurrentUmOpenAlgoOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **algoId** | **int**| Algo order ID | [optional] |
| **clientAlgoId** | **string**| Client algo order ID | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryCurrentUmOpenAlgoOrderResponse**](../Model/QueryCurrentUmOpenAlgoOrderResponse.md)

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

Query Current UM Open Conditional Order (USER_DATA)

Query Current UM Open Conditional Order  Weight(IP): 1  Security Type: USER_DATA  Notes: - Either `strategyId` or `newClientStrategyId` must be sent. - If the queried order has been `CANCELED`, `TRIGGERED` or `EXPIRED`, the error message \"Order does not exist\" will be returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSDT; // string | Symbol
$strategyId = 1; // int
$newClientStrategyId = 1; // string
$recvWindow = 5000; // int

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
| **symbol** | **string**| Symbol | |
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

Query Current UM Open Order (USER_DATA)

Query current UM open order  Weight(IP): 1  Security Type: USER_DATA  Notes: - Either `orderId` or `origClientOrderId` must be sent. - If the queried order has been filled or cancelled, the error message \"Order does not exist\" will be returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSDT; // string | Symbol
$orderId = 1; // int
$origClientOrderId = 1; // string
$recvWindow = 5000; // int

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
| **symbol** | **string**| Symbol | |
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

Query Margin Account Order  Weight(IP): 10  Security Type: USER_DATA  Notes: - Either `orderId` or `origClientOrderId` must be sent. - For some historical orders, `cummulativeQuoteQty < 0` means the data is unavailable at this time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSDT; // string | Symbol
$orderId = 1; // int
$origClientOrderId = 1; // string
$recvWindow = 5000; // int | Value cannot be greater than 60000

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
| **symbol** | **string**| Symbol | |
| **orderId** | **int**|  | [optional] |
| **origClientOrderId** | **string**|  | [optional] |
| **recvWindow** | **int**| Value cannot be greater than 60000 | [optional] |

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

Query all OCO for a specific margin account based on provided optional parameters  Weight(IP): 100  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$fromId = 1; // int | Trade ID to fetch from.
$startTime = 1623319461670; // int | Timestamp in ms to get funding from INCLUSIVE.
$endTime = 1641782889000; // int | Timestamp in ms to get funding until INCLUSIVE.
$limit = 500; // int | Number of results returned.
$recvWindow = 5000; // int | Value cannot be greater than 60000

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
| **fromId** | **int**| Trade ID to fetch from. | [optional] |
| **startTime** | **int**| Timestamp in ms to get funding from INCLUSIVE. | [optional] |
| **endTime** | **int**| Timestamp in ms to get funding until INCLUSIVE. | [optional] |
| **limit** | **int**| Number of results returned. | [optional] |
| **recvWindow** | **int**| Value cannot be greater than 60000 | [optional] |

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

Retrieves a specific OCO based on provided optional parameters  Weight(IP): 5  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$orderListId = 1; // int | Either `orderListId` or `listClientOrderId` must be provided
$origClientOrderId = 1; // string | `orderListId` or `listClientOrderId` must be provided.
$recvWindow = 5000; // int | Value cannot be greater than 60000

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
| **origClientOrderId** | **string**| &#x60;orderListId&#x60; or &#x60;listClientOrderId&#x60; must be provided. | [optional] |
| **recvWindow** | **int**| Value cannot be greater than 60000 | [optional] |

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

Query Margin Account's Open OCO  Weight(IP): 5  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 5000; // int | Value cannot be greater than 60000

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
| **recvWindow** | **int**| Value cannot be greater than 60000 | [optional] |

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

## `queryUmAlgoOrderHistory()`

```php
queryUmAlgoOrderHistory($symbol, $algoId, $startTime, $endTime, $limit, $recvWindow): \Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryUmAlgoOrderHistoryResponse
```

Query UM Algo Order History (USER_DATA)

Get all algo orders: ACTIVE, CANCELED, TRIGGERED or FINISHED.  Weight(IP): 5  Security Type: USER_DATA  Notes: - If `algoId` is set, it will get orders >= that `algoId`. Otherwise most recent orders are returned. - The query time period must be less than 7 days (default as the recent 7 days).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BNBUSDT; // string
$algoId = 2146760; // int | Only return orders >= this algoId
$startTime = 1770130294138; // int
$endTime = 1770736694138; // int
$limit = 500; // int | Default 500; max 1000
$recvWindow = 5000; // int

try {
    $result = $apiInstance->queryUmAlgoOrderHistory($symbol, $algoId, $startTime, $endTime, $limit, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeApi->queryUmAlgoOrderHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **algoId** | **int**| Only return orders &gt;&#x3D; this algoId | [optional] |
| **startTime** | **int**|  | [optional] |
| **endTime** | **int**|  | [optional] |
| **limit** | **int**| Default 500; max 1000 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingPortfolioMargin\Model\QueryUmAlgoOrderHistoryResponse**](../Model/QueryUmAlgoOrderHistoryResponse.md)

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

Query UM Conditional Order History (USER_DATA)

Query UM Conditional Order History  Weight(IP): 1  Security Type: USER_DATA  Notes: - Either `strategyId` or `newClientStrategyId` must be sent. - `NEW` orders will not be found. - These orders will not be found:   - order status is `CANCELED` or `EXPIRED`, **AND**   - order has NO filled trade, **AND**   - created time + 7 days < current time

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSDT; // string | Symbol
$strategyId = 1; // int
$newClientStrategyId = 1; // string
$recvWindow = 5000; // int

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
| **symbol** | **string**| Symbol | |
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

Query UM Modify Order History (TRADE)

Get order modification history  Weight(IP): 1  Security Type: TRADE  Notes: - Either `orderId` or `origClientOrderId` must be sent, and the `orderId` will prevail if both are sent.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSDT; // string | Symbol
$orderId = 1; // int | Order ID
$origClientOrderId = 1; // string | Client order ID
$startTime = 1623319461670; // int | Timestamp in ms to get funding from INCLUSIVE.
$endTime = 1641782889000; // int | Timestamp in ms to get funding until INCLUSIVE.
$limit = 500; // int | Number of results returned.
$recvWindow = 5000; // int

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
| **symbol** | **string**| Symbol | |
| **orderId** | **int**| Order ID | [optional] |
| **origClientOrderId** | **string**| Client order ID | [optional] |
| **startTime** | **int**| Timestamp in ms to get funding from INCLUSIVE. | [optional] |
| **endTime** | **int**| Timestamp in ms to get funding until INCLUSIVE. | [optional] |
| **limit** | **int**| Number of results returned. | [optional] |
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

Check an UM order's status.  Weight(IP): 1  Security Type: USER_DATA  Notes: - These orders will not be found:   - Either `orderId` or `origClientOrderId` must be sent.   - order status is `CANCELED` or `EXPIRED`, **AND**   - order has NO filled trade, **AND**   - created time + 3 days < current time

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSDT; // string | Symbol
$orderId = 1; // int
$origClientOrderId = 1; // string
$recvWindow = 5000; // int

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
| **symbol** | **string**| Symbol | |
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

Query User's CM Force Orders (USER_DATA)

Query User's CM Force Orders  Weight: - 20 with `symbol` - 50 without `symbol`  Security Type: USER_DATA  Notes: - If \"autoCloseType\" is not sent, orders with both of the types will be returned - If \"startTime\" is not sent, data within 7 days before \"endTime\" can be queried

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSDT; // string
$autoCloseType = new \Binance\Client\DerivativesTradingPortfolioMargin\Model\\Binance\Client\DerivativesTradingPortfolioMargin\Model\AutoCloseType(); // \Binance\Client\DerivativesTradingPortfolioMargin\Model\AutoCloseType | `LIQUIDATION` for liquidation orders, `ADL` for ADL orders.
$startTime = 1623319461670; // int | Timestamp in ms to get funding from INCLUSIVE.
$endTime = 1641782889000; // int | Timestamp in ms to get funding until INCLUSIVE.
$limit = 500; // int | Number of results returned.
$recvWindow = 5000; // int | The value cannot be greater than 60000

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
| **limit** | **int**| Number of results returned. | [optional] |
| **recvWindow** | **int**| The value cannot be greater than 60000 | [optional] |

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

Query User's Margin Force Orders (USER_DATA)

Query user's margin force orders  Weight(IP): 1  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startTime = 1623319461670; // int | Timestamp in ms to get funding from INCLUSIVE.
$endTime = 1641782889000; // int | Timestamp in ms to get funding until INCLUSIVE.
$current = 1; // int | Current page number.
$size = 10; // int | Number of results returned.
$recvWindow = 5000; // int | The value cannot be greater than 60000

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
| **current** | **int**| Current page number. | [optional] |
| **size** | **int**| Number of results returned. | [optional] |
| **recvWindow** | **int**| The value cannot be greater than 60000 | [optional] |

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

Query User's UM Force Orders  Weight: - 20 with `symbol` - 50 without `symbol`  Security Type: USER_DATA  Notes: - If `autoCloseType` is not sent, orders with both of the types will be returned - If `startTime` is not sent, data within 7 days before `endTime` can be queried

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSDT; // string
$autoCloseType = new \Binance\Client\DerivativesTradingPortfolioMargin\Model\\Binance\Client\DerivativesTradingPortfolioMargin\Model\AutoCloseType(); // \Binance\Client\DerivativesTradingPortfolioMargin\Model\AutoCloseType | `LIQUIDATION` for liquidation orders, `ADL` for ADL orders.
$startTime = 1623319461670; // int | Timestamp in ms to get funding from INCLUSIVE.
$endTime = 1641782889000; // int | Timestamp in ms to get funding until INCLUSIVE.
$limit = 500; // int | Number of results returned.
$recvWindow = 5000; // int | The value cannot be greater than 60000

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
| **limit** | **int**| Number of results returned. | [optional] |
| **recvWindow** | **int**| The value cannot be greater than 60000 | [optional] |

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

Change user's BNB Fee Discount for UM Futures (Fee Discount On or Fee Discount Off ) on ***EVERY symbol***  Weight(IP): 1  Security Type: TRADE  Notes: - The BNB would not be collected from UM-PM account to the Portfolio Margin account.

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

UM Account Trade List (USER_DATA)

Get trades for a specific account and UM symbol.  Weight(IP): 5  Security Type: USER_DATA  Notes: - If `startTime` and `endTime` are both not sent, then the last '7 days' data will be returned. - The time between `startTime` and `endTime` cannot be longer than 7 days. - The parameter `fromId` cannot be sent with `startTime` or `endTime`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSDT; // string | Symbol
$startTime = 1623319461670; // int | Timestamp in ms to get funding from INCLUSIVE.
$endTime = 1641782889000; // int | Timestamp in ms to get funding until INCLUSIVE.
$fromId = 1; // int | Trade ID to fetch from.
$limit = 500; // int | Number of results returned.
$recvWindow = 5000; // int

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
| **symbol** | **string**| Symbol | |
| **startTime** | **int**| Timestamp in ms to get funding from INCLUSIVE. | [optional] |
| **endTime** | **int**| Timestamp in ms to get funding until INCLUSIVE. | [optional] |
| **fromId** | **int**| Trade ID to fetch from. | [optional] |
| **limit** | **int**| Number of results returned. | [optional] |
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

UM Position ADL Quantile Estimation (USER_DATA)

Query UM Position ADL Quantile Estimation  * Values update every 30s. * Values 0, 1, 2, 3, 4 shows the queue position and possibility of ADL from low to high. * For positions of the symbol are in One-way Mode or isolated margined in Hedge Mode, \"LONG\", \"SHORT\", and \"BOTH\" will be returned to show the positions' adl quantiles of different position sides. * If the positions of the symbol are crossed margined in Hedge Mode: * \"HEDGE\" as a sign will be returned instead of \"BOTH\"; * A same value caculated on unrealized pnls on long and short sides' positions will be shown for \"LONG\" and \"SHORT\" when there are positions in both of long and short sides.  Weight(IP): 5  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingPortfolioMargin\Api\TradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSDT; // string
$recvWindow = 5000; // int

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
