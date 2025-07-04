# Binance\Client\Algo\SpotAlgoApi

All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelAlgoOrderSpotAlgo()**](SpotAlgoApi.md#cancelAlgoOrderSpotAlgo) | **DELETE** /sapi/v1/algo/spot/order | Cancel Algo Order(TRADE) |
| [**queryCurrentAlgoOpenOrdersSpotAlgo()**](SpotAlgoApi.md#queryCurrentAlgoOpenOrdersSpotAlgo) | **GET** /sapi/v1/algo/spot/openOrders | Query Current Algo Open Orders(USER_DATA) |
| [**queryHistoricalAlgoOrdersSpotAlgo()**](SpotAlgoApi.md#queryHistoricalAlgoOrdersSpotAlgo) | **GET** /sapi/v1/algo/spot/historicalOrders | Query Historical Algo Orders(USER_DATA) |
| [**querySubOrdersSpotAlgo()**](SpotAlgoApi.md#querySubOrdersSpotAlgo) | **GET** /sapi/v1/algo/spot/subOrders | Query Sub Orders(USER_DATA) |
| [**timeWeightedAveragePriceSpotAlgo()**](SpotAlgoApi.md#timeWeightedAveragePriceSpotAlgo) | **POST** /sapi/v1/algo/spot/newOrderTwap | Time-Weighted Average Price(Twap) New Order(TRADE) |


## `cancelAlgoOrderSpotAlgo()`

```php
cancelAlgoOrderSpotAlgo($algoId, $recvWindow): \Binance\Client\Algo\Model\CancelAlgoOrderSpotAlgoResponse
```

Cancel Algo Order(TRADE)

Cancel an open TWAP order  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Algo\Api\SpotAlgoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$algoId = 56; // int | eg. 14511
$recvWindow = 56; // int

try {
    $result = $apiInstance->cancelAlgoOrderSpotAlgo($algoId, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpotAlgoApi->cancelAlgoOrderSpotAlgo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **algoId** | **int**| eg. 14511 | |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\Algo\Model\CancelAlgoOrderSpotAlgoResponse**](../Model/CancelAlgoOrderSpotAlgoResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryCurrentAlgoOpenOrdersSpotAlgo()`

```php
queryCurrentAlgoOpenOrdersSpotAlgo($recvWindow): \Binance\Client\Algo\Model\QueryCurrentAlgoOpenOrdersSpotAlgoResponse
```

Query Current Algo Open Orders(USER_DATA)

Get all open SPOT TWAP orders  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Algo\Api\SpotAlgoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 56; // int

try {
    $result = $apiInstance->queryCurrentAlgoOpenOrdersSpotAlgo($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpotAlgoApi->queryCurrentAlgoOpenOrdersSpotAlgo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\Algo\Model\QueryCurrentAlgoOpenOrdersSpotAlgoResponse**](../Model/QueryCurrentAlgoOpenOrdersSpotAlgoResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryHistoricalAlgoOrdersSpotAlgo()`

```php
queryHistoricalAlgoOrdersSpotAlgo($symbol, $side, $startTime, $endTime, $page, $pageSize, $recvWindow): \Binance\Client\Algo\Model\QueryHistoricalAlgoOrdersSpotAlgoResponse
```

Query Historical Algo Orders(USER_DATA)

Get all historical SPOT TWAP orders  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Algo\Api\SpotAlgoApi(
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
    $result = $apiInstance->queryHistoricalAlgoOrdersSpotAlgo($symbol, $side, $startTime, $endTime, $page, $pageSize, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpotAlgoApi->queryHistoricalAlgoOrdersSpotAlgo: ', $e->getMessage(), PHP_EOL;
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

[**\Binance\Client\Algo\Model\QueryHistoricalAlgoOrdersSpotAlgoResponse**](../Model/QueryHistoricalAlgoOrdersSpotAlgoResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `querySubOrdersSpotAlgo()`

```php
querySubOrdersSpotAlgo($algoId, $page, $pageSize, $recvWindow): \Binance\Client\Algo\Model\QuerySubOrdersSpotAlgoResponse
```

Query Sub Orders(USER_DATA)

Get respective sub orders for a specified algoId  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Algo\Api\SpotAlgoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$algoId = 56; // int | eg. 14511
$page = 56; // int | Default is 1
$pageSize = 56; // int | MIN 1, MAX 100; Default 100
$recvWindow = 56; // int

try {
    $result = $apiInstance->querySubOrdersSpotAlgo($algoId, $page, $pageSize, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpotAlgoApi->querySubOrdersSpotAlgo: ', $e->getMessage(), PHP_EOL;
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

[**\Binance\Client\Algo\Model\QuerySubOrdersSpotAlgoResponse**](../Model/QuerySubOrdersSpotAlgoResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timeWeightedAveragePriceSpotAlgo()`

```php
timeWeightedAveragePriceSpotAlgo($timeWeightedAveragePriceSpotAlgoRequest): \Binance\Client\Algo\Model\TimeWeightedAveragePriceSpotAlgoResponse
```

Time-Weighted Average Price(Twap) New Order(TRADE)

Place a new spot TWAP order with Algo service.  * Total Algo open orders max allowed: `20` orders.  Weight: 3000

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Algo\Api\SpotAlgoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$timeWeightedAveragePriceSpotAlgoRequest = new \Binance\Client\Algo\Model\TimeWeightedAveragePriceSpotAlgoRequest(); // \Binance\Client\Algo\Model\TimeWeightedAveragePriceSpotAlgoRequest

try {
    $result = $apiInstance->timeWeightedAveragePriceSpotAlgo($timeWeightedAveragePriceSpotAlgoRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SpotAlgoApi->timeWeightedAveragePriceSpotAlgo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **timeWeightedAveragePriceSpotAlgoRequest** | [**\Binance\Client\Algo\Model\TimeWeightedAveragePriceSpotAlgoRequest**](../Model/TimeWeightedAveragePriceSpotAlgoRequest.md)|  | |

### Return type

[**\Binance\Client\Algo\Model\TimeWeightedAveragePriceSpotAlgoResponse**](../Model/TimeWeightedAveragePriceSpotAlgoResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
