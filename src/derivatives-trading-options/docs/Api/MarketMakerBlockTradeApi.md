# Binance\Client\DerivativesTradingOptions\MarketMakerBlockTradeApi

All URIs are relative to https://eapi.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**acceptBlockTradeOrder()**](MarketMakerBlockTradeApi.md#acceptBlockTradeOrder) | **POST** /eapi/v1/block/order/execute | Accept Block Trade Order (TRADE) |
| [**accountBlockTradeList()**](MarketMakerBlockTradeApi.md#accountBlockTradeList) | **GET** /eapi/v1/block/user-trades | Account Block Trade List (USER_DATA) |
| [**cancelBlockTradeOrder()**](MarketMakerBlockTradeApi.md#cancelBlockTradeOrder) | **DELETE** /eapi/v1/block/order/create | Cancel Block Trade Order (TRADE) |
| [**extendBlockTradeOrder()**](MarketMakerBlockTradeApi.md#extendBlockTradeOrder) | **PUT** /eapi/v1/block/order/create | Extend Block Trade Order (TRADE) |
| [**newBlockTradeOrder()**](MarketMakerBlockTradeApi.md#newBlockTradeOrder) | **POST** /eapi/v1/block/order/create | New Block Trade Order (TRADE) |
| [**queryBlockTradeDetails()**](MarketMakerBlockTradeApi.md#queryBlockTradeDetails) | **GET** /eapi/v1/block/order/execute | Query Block Trade Details (USER_DATA) |
| [**queryBlockTradeOrder()**](MarketMakerBlockTradeApi.md#queryBlockTradeOrder) | **GET** /eapi/v1/block/order/orders | Query Block Trade Order (TRADE) |


## `acceptBlockTradeOrder()`

```php
acceptBlockTradeOrder($acceptBlockTradeOrderRequest): \Binance\Client\DerivativesTradingOptions\Model\AcceptBlockTradeOrderResponse
```

Accept Block Trade Order (TRADE)

Accept a block trade order  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingOptions\Api\MarketMakerBlockTradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$acceptBlockTradeOrderRequest = new \Binance\Client\DerivativesTradingOptions\Model\AcceptBlockTradeOrderRequest(); // \Binance\Client\DerivativesTradingOptions\Model\AcceptBlockTradeOrderRequest

try {
    $result = $apiInstance->acceptBlockTradeOrder($acceptBlockTradeOrderRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketMakerBlockTradeApi->acceptBlockTradeOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **acceptBlockTradeOrderRequest** | [**\Binance\Client\DerivativesTradingOptions\Model\AcceptBlockTradeOrderRequest**](../Model/AcceptBlockTradeOrderRequest.md)|  | |

### Return type

[**\Binance\Client\DerivativesTradingOptions\Model\AcceptBlockTradeOrderResponse**](../Model/AcceptBlockTradeOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountBlockTradeList()`

```php
accountBlockTradeList($endTime, $startTime, $underlying, $recvWindow): \Binance\Client\DerivativesTradingOptions\Model\AccountBlockTradeListResponse
```

Account Block Trade List (USER_DATA)

Gets block trades for a specific account.  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingOptions\Api\MarketMakerBlockTradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$endTime = 56; // int | End Time, e.g 1593512200000
$startTime = 56; // int | Start Time, e.g 1593511200000
$underlying = 'underlying_example'; // string | underlying, e.g BTCUSDT
$recvWindow = 56; // int

try {
    $result = $apiInstance->accountBlockTradeList($endTime, $startTime, $underlying, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketMakerBlockTradeApi->accountBlockTradeList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **endTime** | **int**| End Time, e.g 1593512200000 | [optional] |
| **startTime** | **int**| Start Time, e.g 1593511200000 | [optional] |
| **underlying** | **string**| underlying, e.g BTCUSDT | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingOptions\Model\AccountBlockTradeListResponse**](../Model/AccountBlockTradeListResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelBlockTradeOrder()`

```php
cancelBlockTradeOrder($blockOrderMatchingKey, $recvWindow)
```

Cancel Block Trade Order (TRADE)

Cancel a block trade order.  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingOptions\Api\MarketMakerBlockTradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$blockOrderMatchingKey = 'blockOrderMatchingKey_example'; // string
$recvWindow = 56; // int

try {
    $apiInstance->cancelBlockTradeOrder($blockOrderMatchingKey, $recvWindow);
} catch (Exception $e) {
    echo 'Exception when calling MarketMakerBlockTradeApi->cancelBlockTradeOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blockOrderMatchingKey** | **string**|  | |
| **recvWindow** | **int**|  | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `extendBlockTradeOrder()`

```php
extendBlockTradeOrder($extendBlockTradeOrderRequest): \Binance\Client\DerivativesTradingOptions\Model\ExtendBlockTradeOrderResponse
```

Extend Block Trade Order (TRADE)

Extends a block trade expire time by 30 mins from the current time.  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingOptions\Api\MarketMakerBlockTradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$extendBlockTradeOrderRequest = new \Binance\Client\DerivativesTradingOptions\Model\ExtendBlockTradeOrderRequest(); // \Binance\Client\DerivativesTradingOptions\Model\ExtendBlockTradeOrderRequest

try {
    $result = $apiInstance->extendBlockTradeOrder($extendBlockTradeOrderRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketMakerBlockTradeApi->extendBlockTradeOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **extendBlockTradeOrderRequest** | [**\Binance\Client\DerivativesTradingOptions\Model\ExtendBlockTradeOrderRequest**](../Model/ExtendBlockTradeOrderRequest.md)|  | |

### Return type

[**\Binance\Client\DerivativesTradingOptions\Model\ExtendBlockTradeOrderResponse**](../Model/ExtendBlockTradeOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `newBlockTradeOrder()`

```php
newBlockTradeOrder($newBlockTradeOrderRequest): \Binance\Client\DerivativesTradingOptions\Model\NewBlockTradeOrderResponse
```

New Block Trade Order (TRADE)

Send in a new block trade order.  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingOptions\Api\MarketMakerBlockTradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$newBlockTradeOrderRequest = new \Binance\Client\DerivativesTradingOptions\Model\NewBlockTradeOrderRequest(); // \Binance\Client\DerivativesTradingOptions\Model\NewBlockTradeOrderRequest

try {
    $result = $apiInstance->newBlockTradeOrder($newBlockTradeOrderRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketMakerBlockTradeApi->newBlockTradeOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **newBlockTradeOrderRequest** | [**\Binance\Client\DerivativesTradingOptions\Model\NewBlockTradeOrderRequest**](../Model/NewBlockTradeOrderRequest.md)|  | |

### Return type

[**\Binance\Client\DerivativesTradingOptions\Model\NewBlockTradeOrderResponse**](../Model/NewBlockTradeOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryBlockTradeDetails()`

```php
queryBlockTradeDetails($blockOrderMatchingKey, $recvWindow): \Binance\Client\DerivativesTradingOptions\Model\QueryBlockTradeDetailsResponse
```

Query Block Trade Details (USER_DATA)

Query block trade details; returns block trade details from counterparty's perspective.  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingOptions\Api\MarketMakerBlockTradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$blockOrderMatchingKey = 'blockOrderMatchingKey_example'; // string
$recvWindow = 56; // int

try {
    $result = $apiInstance->queryBlockTradeDetails($blockOrderMatchingKey, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketMakerBlockTradeApi->queryBlockTradeDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blockOrderMatchingKey** | **string**|  | |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingOptions\Model\QueryBlockTradeDetailsResponse**](../Model/QueryBlockTradeDetailsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `queryBlockTradeOrder()`

```php
queryBlockTradeOrder($blockOrderMatchingKey, $endTime, $startTime, $underlying, $recvWindow): \Binance\Client\DerivativesTradingOptions\Model\QueryBlockTradeOrderResponse
```

Query Block Trade Order (TRADE)

Check block trade order status.  Weight: 5

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingOptions\Api\MarketMakerBlockTradeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$blockOrderMatchingKey = 'blockOrderMatchingKey_example'; // string | If specified, returns the specific block trade associated with the blockOrderMatchingKey
$endTime = 56; // int | End Time, e.g 1593512200000
$startTime = 56; // int | Start Time, e.g 1593511200000
$underlying = 'underlying_example'; // string | underlying, e.g BTCUSDT
$recvWindow = 56; // int

try {
    $result = $apiInstance->queryBlockTradeOrder($blockOrderMatchingKey, $endTime, $startTime, $underlying, $recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketMakerBlockTradeApi->queryBlockTradeOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **blockOrderMatchingKey** | **string**| If specified, returns the specific block trade associated with the blockOrderMatchingKey | [optional] |
| **endTime** | **int**| End Time, e.g 1593512200000 | [optional] |
| **startTime** | **int**| Start Time, e.g 1593511200000 | [optional] |
| **underlying** | **string**| underlying, e.g BTCUSDT | [optional] |
| **recvWindow** | **int**|  | [optional] |

### Return type

[**\Binance\Client\DerivativesTradingOptions\Model\QueryBlockTradeOrderResponse**](../Model/QueryBlockTradeOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
