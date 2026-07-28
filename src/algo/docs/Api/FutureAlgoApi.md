# Binance\Client\Algo\FutureAlgoApi



All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelAlgoOrderFutureAlgo()**](FutureAlgoApi.md#cancelAlgoOrderFutureAlgo) | **DELETE** /sapi/v1/algo/futures/order | Cancel Futures Algo Order (TRADE) |
| [**queryCurrentAlgoOpenOrdersFutureAlgo()**](FutureAlgoApi.md#queryCurrentAlgoOpenOrdersFutureAlgo) | **GET** /sapi/v1/algo/futures/openOrders | Query Current Futures Algo Open Orders (USER_DATA) |
| [**queryHistoricalAlgoOrdersFutureAlgo()**](FutureAlgoApi.md#queryHistoricalAlgoOrdersFutureAlgo) | **GET** /sapi/v1/algo/futures/historicalOrders | Query Historical Futures Algo Orders (USER_DATA) |
| [**querySubOrdersFutureAlgo()**](FutureAlgoApi.md#querySubOrdersFutureAlgo) | **GET** /sapi/v1/algo/futures/subOrders | Query Futures Sub Orders (USER_DATA) |
| [**timeWeightedAveragePriceFutureAlgo()**](FutureAlgoApi.md#timeWeightedAveragePriceFutureAlgo) | **POST** /sapi/v1/algo/futures/newOrderTwap | Time-Weighted Futures Average Price (Twap) New Order (TRADE) |
| [**volumeParticipationFutureAlgo()**](FutureAlgoApi.md#volumeParticipationFutureAlgo) | **POST** /sapi/v1/algo/futures/newOrderVp | Volume Participation (VP) New Order (TRADE) |


## `cancelAlgoOrderFutureAlgo()`

```php
cancelAlgoOrderFutureAlgo($algoId, $recvWindow): \Binance\Client\Algo\Model\CancelAlgoOrderFutureAlgoResponse
```

Cancel Futures Algo Order (TRADE)

Cancel an active order.  Weight(IP): 1  Security Type: TRADE  Notes: - You need to enable `Futures Trading Permission` for the API key that requests this endpoint. - Base URL: `https://api.binance.com`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Algo\Api\FutureAlgoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$algoId = 1; // int | eg. 14511
$recvWindow = 5000; // int | Request validity window in milliseconds

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
| **recvWindow** | **int**| Request validity window in milliseconds | [optional] |

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

Query Current Futures Algo Open Orders (USER_DATA)

Query Current Algo Open Orders  Weight(IP): 1  Security Type: USER_DATA  Notes: - You need to enable `Futures Trading Permission` for the API key that requests this endpoint. - Base URL: `https://api.binance.com`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Algo\Api\FutureAlgoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 5000; // int | Request validity window in milliseconds

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
| **recvWindow** | **int**| Request validity window in milliseconds | [optional] |

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

Query Historical Futures Algo Orders (USER_DATA)

Query Historical Algo Order  Weight(IP): 1  Security Type: USER_DATA  Notes: - You need to enable `Futures Trading Permission` for the API key that requests this endpoint. - Base URL: `https://api.binance.com`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Algo\Api\FutureAlgoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = BTCUSDT; // string | Trading symbol eg. BTCUSDT
$side = new \Binance\Client\Algo\Model\\Binance\Client\Algo\Model\Side(); // \Binance\Client\Algo\Model\Side | BUY or SELL
$startTime = 1623319461670; // int | in milliseconds  eg.1641522717552
$endTime = 1641782889000; // int | in milliseconds  eg.1641522526562
$page = 1; // int | Page number
$pageSize = 100; // int | Records per page
$recvWindow = 5000; // int | Request validity window in milliseconds

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
| **side** | [**\Binance\Client\Algo\Model\Side**](../Model/.md)| BUY or SELL | [optional] |
| **startTime** | **int**| in milliseconds  eg.1641522717552 | [optional] |
| **endTime** | **int**| in milliseconds  eg.1641522526562 | [optional] |
| **page** | **int**| Page number | [optional] |
| **pageSize** | **int**| Records per page | [optional] |
| **recvWindow** | **int**| Request validity window in milliseconds | [optional] |

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

Query Futures Sub Orders (USER_DATA)

Get respective sub orders for a specified algoId  Weight(IP): 1  Security Type: USER_DATA  Notes: - You need to enable `Futures Trading Permission` for the API key that requests this endpoint. - Base URL: `https://api.binance.com`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Algo\Api\FutureAlgoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$algoId = 1; // int | eg. 14511
$page = 1; // int | Page number
$pageSize = 100; // int | Records per page
$recvWindow = 5000; // int | Request validity window in milliseconds

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
| **page** | **int**| Page number | [optional] |
| **pageSize** | **int**| Records per page | [optional] |
| **recvWindow** | **int**| Request validity window in milliseconds | [optional] |

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

Time-Weighted Futures Average Price (Twap) New Order (TRADE)

Send in a Twap new order. Only support on USDⓈ-M Contracts.  Weight(UID): 3000  Security Type: TRADE  Notes: - Other info:   - Total Algo open orders max allowed: `30` orders.   - Leverage and position mode follow your futures account settings.   - Receiving `\"success\": true` does not guarantee execution; query order endpoints for final status.   - If balance/position constraints fail, response may still return success but order status becomes `expired`.   - `quantity * 60 / duration` must be greater than `minQty`.   - `duration` cannot be less than 5 minutes or greater than 24 hours.   - For delivery contracts, TWAP end time should be one hour earlier than symbol delivery time.   - You need to enable the corresponding permission for the API key requesting this endpoint:     - `Futures Trading Permission` — for Classic Trading Account mode     - `Portfolio Margin Trading Permission` — for Portfolio Margin Account mode   - Base URL: `https://api.binance.com`

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

Volume Participation (VP) New Order (TRADE)

Send in a VP new order. Only support on USDⓈ-M Contracts.  Weight(UID): 300  Security Type: TRADE  Notes: - Other info:   - Total Algo open orders max allowed: `10` orders.   - Leverage and position mode follow your futures account settings.   - Receiving `\"success\": true` does not guarantee execution; query order endpoints for final status.   - If balance/position constraints fail, response may still return success but order status becomes `expired`.   - You need to enable the corresponding permission for the API key requesting this endpoint:     - `Futures Trading Permission` — for Classic Trading Account mode     - `Portfolio Margin Trading Permission` — for Portfolio Margin Account mode   - Base URL: `https://api.binance.com`

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
