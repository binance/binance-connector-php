# Binance\Client\Algo\SpotAlgoApi



All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelAlgoOrderSpotAlgo()**](SpotAlgoApi.md#cancelAlgoOrderSpotAlgo) | **DELETE** /sapi/v1/algo/spot/order | Cancel Spot Algo Order (TRADE) |
| [**queryCurrentAlgoOpenOrdersSpotAlgo()**](SpotAlgoApi.md#queryCurrentAlgoOpenOrdersSpotAlgo) | **GET** /sapi/v1/algo/spot/openOrders | Query Current Spot Algo Open Orders (USER_DATA) |
| [**queryHistoricalAlgoOrdersSpotAlgo()**](SpotAlgoApi.md#queryHistoricalAlgoOrdersSpotAlgo) | **GET** /sapi/v1/algo/spot/historicalOrders | Query Historical Spot Algo Orders (USER_DATA) |
| [**querySubOrdersSpotAlgo()**](SpotAlgoApi.md#querySubOrdersSpotAlgo) | **GET** /sapi/v1/algo/spot/subOrders | Query Spot Sub Orders (USER_DATA) |
| [**timeWeightedAveragePriceSpotAlgo()**](SpotAlgoApi.md#timeWeightedAveragePriceSpotAlgo) | **POST** /sapi/v1/algo/spot/newOrderTwap | Time-Weighted Spot Average Price(Twap) New Order (TRADE) |


## `cancelAlgoOrderSpotAlgo()`

```php
cancelAlgoOrderSpotAlgo($algoId, $recvWindow): \Binance\Client\Algo\Model\CancelAlgoOrderSpotAlgoResponse
```

Cancel Spot Algo Order (TRADE)

Cancel an open TWAP order  Weight(IP): 1  Security Type: TRADE

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Algo\Api\SpotAlgoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$algoId = 14511; // int
$recvWindow = 5000; // int | Request validity window in milliseconds

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
| **algoId** | **int**|  | |
| **recvWindow** | **int**| Request validity window in milliseconds | [optional] |

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

Query Current Spot Algo Open Orders (USER_DATA)

Get all open SPOT TWAP orders  Weight(IP): 1  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Algo\Api\SpotAlgoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 5000; // int | Request validity window in milliseconds

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
| **recvWindow** | **int**| Request validity window in milliseconds | [optional] |

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

Query Historical Spot Algo Orders (USER_DATA)

Get all historical SPOT TWAP orders  Weight(IP): 1  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Algo\Api\SpotAlgoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSDT; // string | Trading symbol
$side = new \Binance\Client\Algo\Model\\Binance\Client\Algo\Model\Side(); // \Binance\Client\Algo\Model\Side
$startTime = 1623319461670; // int | in milliseconds  eg.1641522717552
$endTime = 1641782889000; // int | in milliseconds  eg.1641522526562
$page = 1; // int | Page number
$pageSize = 10; // int | Records per page
$recvWindow = 5000; // int | Request validity window in milliseconds

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
| **symbol** | **string**| Trading symbol | [optional] |
| **side** | [**\Binance\Client\Algo\Model\Side**](../Model/.md)|  | [optional] |
| **startTime** | **int**| in milliseconds  eg.1641522717552 | [optional] |
| **endTime** | **int**| in milliseconds  eg.1641522526562 | [optional] |
| **page** | **int**| Page number | [optional] |
| **pageSize** | **int**| Records per page | [optional] |
| **recvWindow** | **int**| Request validity window in milliseconds | [optional] |

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

Query Spot Sub Orders (USER_DATA)

Get respective sub orders for a specified algoId  Weight(IP): 1  Security Type: USER_DATA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Algo\Api\SpotAlgoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$algoId = 1; // int | eg. 14511
$page = 1; // int | Page number
$pageSize = 10; // int | Records per page
$recvWindow = 5000; // int | Request validity window in milliseconds

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
| **page** | **int**| Page number | [optional] |
| **pageSize** | **int**| Records per page | [optional] |
| **recvWindow** | **int**| Request validity window in milliseconds | [optional] |

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

Time-Weighted Spot Average Price(Twap) New Order (TRADE)

Place a new spot TWAP order with Algo service.  Weight(UID): 3000  Security Type: TRADE  Notes: - Total Algo open orders max allowed: `20` orders.

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
