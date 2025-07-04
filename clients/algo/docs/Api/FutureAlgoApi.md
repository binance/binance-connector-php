# Binance\Client\Algo\FutureAlgoApi

All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelAlgoOrderFutureAlgo()**](FutureAlgoApi.md#cancelAlgoOrderFutureAlgo) | **DELETE** /sapi/v1/algo/futures/order | Cancel Algo Order(TRADE) |
| [**queryCurrentAlgoOpenOrdersFutureAlgo()**](FutureAlgoApi.md#queryCurrentAlgoOpenOrdersFutureAlgo) | **GET** /sapi/v1/algo/futures/openOrders | Query Current Algo Open Orders(USER_DATA) |
| [**queryHistoricalAlgoOrdersFutureAlgo()**](FutureAlgoApi.md#queryHistoricalAlgoOrdersFutureAlgo) | **GET** /sapi/v1/algo/futures/historicalOrders | Query Historical Algo Orders(USER_DATA) |
| [**querySubOrdersFutureAlgo()**](FutureAlgoApi.md#querySubOrdersFutureAlgo) | **GET** /sapi/v1/algo/futures/subOrders | Query Sub Orders(USER_DATA) |
| [**timeWeightedAveragePriceFutureAlgo()**](FutureAlgoApi.md#timeWeightedAveragePriceFutureAlgo) | **POST** /sapi/v1/algo/futures/newOrderTwap | Time-Weighted Average Price(Twap) New Order(TRADE) |
| [**volumeParticipationFutureAlgo()**](FutureAlgoApi.md#volumeParticipationFutureAlgo) | **POST** /sapi/v1/algo/futures/newOrderVp | Volume Participation(VP) New Order (TRADE) |


## `cancelAlgoOrderFutureAlgo()`

```php
cancelAlgoOrderFutureAlgo($algoId, $recvWindow): \Binance\Client\Algo\Model\CancelAlgoOrderFutureAlgoResponse
```

Cancel Algo Order(TRADE)

Cancel an active order.  * You need to enable `Futures Trading Permission` for the api key which requests this endpoint. * Base URL: https://api.binance.com  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Algo\Api\FutureAlgoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$algoId = 56; // int | eg. 14511
$recvWindow = 56; // int

try {
    $result = $apiInstance->cancelAlgoOrderFutureAlgo($algoId, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FutureAlgoApi->cancelAlgoOrderFutureAlgo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **algoId** | **int**| eg. 14511 | |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\Algo\Model\CancelAlgoOrderFutureAlgoResponse**](../Model/CancelAlgoOrderFutureAlgoResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryCurrentAlgoOpenOrdersFutureAlgo()`

```php
queryCurrentAlgoOpenOrdersFutureAlgo($recvWindow): \Binance\Client\Algo\Model\QueryCurrentAlgoOpenOrdersFutureAlgoResponse
```

Query Current Algo Open Orders(USER_DATA)

Query Current Algo Open Orders  * You need to enable `Futures Trading Permission` for the api key which requests this endpoint. * Base URL: https://api.binance.com  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Algo\Api\FutureAlgoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 56; // int

try {
    $result = $apiInstance->queryCurrentAlgoOpenOrdersFutureAlgo($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FutureAlgoApi->queryCurrentAlgoOpenOrdersFutureAlgo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\Algo\Model\QueryCurrentAlgoOpenOrdersFutureAlgoResponse**](../Model/QueryCurrentAlgoOpenOrdersFutureAlgoResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryHistoricalAlgoOrdersFutureAlgo()`

```php
queryHistoricalAlgoOrdersFutureAlgo($symbol, $side, $startTime, $endTime, $page, $pageSize, $recvWindow): \Binance\Client\Algo\Model\QueryHistoricalAlgoOrdersFutureAlgoResponse
```

Query Historical Algo Orders(USER_DATA)

Query Historical Algo Order  * You need to enable `Futures Trading Permission` for the api key which requests this endpoint. * Base URL: https://api.binance.com  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Algo\Api\FutureAlgoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string | Trading symbol eg. BTCUSDT
$side = 'side_example'; // string | BUY or SELL
$startTime = 56; // int | in milliseconds  eg.1641522717552
$endTime = 56; // int | in milliseconds  eg.1641522526562
$page = 56; // int | Default is 1
$pageSize = 56; // int | MIN 1, MAX 100; Default 100
$recvWindow = 56; // int

try {
    $result = $apiInstance->queryHistoricalAlgoOrdersFutureAlgo($symbol, $side, $startTime, $endTime, $page, $pageSize, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FutureAlgoApi->queryHistoricalAlgoOrdersFutureAlgo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**| Trading symbol eg. BTCUSDT | [optional] |
| **side** | **string**| BUY or SELL | [optional] |
| **startTime** | **int**| in milliseconds  eg.1641522717552 | [optional] |
| **endTime** | **int**| in milliseconds  eg.1641522526562 | [optional] |
| **page** | **int**| Default is 1 | [optional] |
| **pageSize** | **int**| MIN 1, MAX 100; Default 100 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\Algo\Model\QueryHistoricalAlgoOrdersFutureAlgoResponse**](../Model/QueryHistoricalAlgoOrdersFutureAlgoResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `querySubOrdersFutureAlgo()`

```php
querySubOrdersFutureAlgo($algoId, $page, $pageSize, $recvWindow): \Binance\Client\Algo\Model\QuerySubOrdersFutureAlgoResponse
```

Query Sub Orders(USER_DATA)

Get respective sub orders for a specified algoId  * You need to enable `Futures Trading Permission` for the api key which requests this endpoint. * Base URL: https://api.binance.com  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Algo\Api\FutureAlgoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$algoId = 56; // int | eg. 14511
$page = 56; // int | Default is 1
$pageSize = 56; // int | MIN 1, MAX 100; Default 100
$recvWindow = 56; // int

try {
    $result = $apiInstance->querySubOrdersFutureAlgo($algoId, $page, $pageSize, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FutureAlgoApi->querySubOrdersFutureAlgo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **algoId** | **int**| eg. 14511 | |
| **page** | **int**| Default is 1 | [optional] |
| **pageSize** | **int**| MIN 1, MAX 100; Default 100 | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\Algo\Model\QuerySubOrdersFutureAlgoResponse**](../Model/QuerySubOrdersFutureAlgoResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timeWeightedAveragePriceFutureAlgo()`

```php
timeWeightedAveragePriceFutureAlgo($timeWeightedAveragePriceFutureAlgoRequest): \Binance\Client\Algo\Model\TimeWeightedAveragePriceFutureAlgoResponse
```

Time-Weighted Average Price(Twap) New Order(TRADE)

Send in a Twap new order. Only support on USDⓈ-M Contracts.  * Total Algo open orders max allowed: `30` orders. * Leverage of symbols and position mode will be the same as your futures account settings. You can set up through the trading page or fapi. * Receiving `\"success\": true` does not mean that your order will be executed. Please use the query order endpoints（`GET sapi/v1/algo/futures/openOrders` or `GET sapi/v1/algo/futures/historicalOrders`） to check the order status. For example: Your futures balance is insufficient, or open position with reduce only or position side is inconsistent with your own setting. In these cases you will receive `\"success\": true`, but the order status will be `expired` after we check it. * `quantity` * 60 / `duration` should be larger than minQty * `duration` cannot be less than 5 mins or more than 24 hours. * For delivery contracts, TWAP end time should be one hour earlier than the delivery time of the symbol. * You need to enable `Futures Trading Permission` for the api key which requests this endpoint. * Base URL: https://api.binance.com  Weight: 3000

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Algo\Api\FutureAlgoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$timeWeightedAveragePriceFutureAlgoRequest = new \Binance\Client\Algo\Model\TimeWeightedAveragePriceFutureAlgoRequest(); // \Binance\Client\Algo\Model\TimeWeightedAveragePriceFutureAlgoRequest

try {
    $result = $apiInstance->timeWeightedAveragePriceFutureAlgo($timeWeightedAveragePriceFutureAlgoRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FutureAlgoApi->timeWeightedAveragePriceFutureAlgo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **timeWeightedAveragePriceFutureAlgoRequest** | [**\Binance\Client\Algo\Model\TimeWeightedAveragePriceFutureAlgoRequest**](../Model/TimeWeightedAveragePriceFutureAlgoRequest.md)|  | |

### Return type

[**\Binance\Client\Algo\Model\TimeWeightedAveragePriceFutureAlgoResponse**](../Model/TimeWeightedAveragePriceFutureAlgoResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `volumeParticipationFutureAlgo()`

```php
volumeParticipationFutureAlgo($volumeParticipationFutureAlgoRequest): \Binance\Client\Algo\Model\VolumeParticipationFutureAlgoResponse
```

Volume Participation(VP) New Order (TRADE)

Send in a VP new order. Only support on USDⓈ-M Contracts.  * Total Algo open orders max allowed: `10` orders. * Leverage of symbols and position mode will be the same as your futures account settings. You can set up through the trading page or fapi. * Receiving `\"success\": true` does not mean that your order will be executed. Please use the query order endpoints（`GET sapi/v1/algo/futures/openOrders` or `GET sapi/v1/algo/futures/historicalOrders`） to check the order status. For example: Your futures balance is insufficient, or open position with reduce only or position side is inconsistent with your own setting. In these cases you will receive `\"success\": true`, but the order status will be `expired` after we check it. * You need to enable `Futures Trading Permission` for the api key which requests this endpoint. * Base URL: https://api.binance.com  Weight: 300

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Algo\Api\FutureAlgoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$volumeParticipationFutureAlgoRequest = new \Binance\Client\Algo\Model\VolumeParticipationFutureAlgoRequest(); // \Binance\Client\Algo\Model\VolumeParticipationFutureAlgoRequest

try {
    $result = $apiInstance->volumeParticipationFutureAlgo($volumeParticipationFutureAlgoRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FutureAlgoApi->volumeParticipationFutureAlgo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **volumeParticipationFutureAlgoRequest** | [**\Binance\Client\Algo\Model\VolumeParticipationFutureAlgoRequest**](../Model/VolumeParticipationFutureAlgoRequest.md)|  | |

### Return type

[**\Binance\Client\Algo\Model\VolumeParticipationFutureAlgoResponse**](../Model/VolumeParticipationFutureAlgoResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
