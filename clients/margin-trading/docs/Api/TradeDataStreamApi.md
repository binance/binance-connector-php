# Binance\Client\MarginTrading\TradeDataStreamApi

All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**closeIsolatedMarginUserDataStream()**](TradeDataStreamApi.md#closeIsolatedMarginUserDataStream) | **DELETE** /sapi/v1/userDataStream/isolated | Close Isolated Margin User Data Stream (USER_STREAM) |
| [**closeMarginUserDataStream()**](TradeDataStreamApi.md#closeMarginUserDataStream) | **DELETE** /sapi/v1/userDataStream | Close Margin User Data Stream (USER_STREAM) |
| [**keepaliveIsolatedMarginUserDataStream()**](TradeDataStreamApi.md#keepaliveIsolatedMarginUserDataStream) | **PUT** /sapi/v1/userDataStream/isolated | Keepalive Isolated Margin User Data Stream (USER_STREAM) |
| [**keepaliveMarginUserDataStream()**](TradeDataStreamApi.md#keepaliveMarginUserDataStream) | **PUT** /sapi/v1/userDataStream | Keepalive Margin User Data Stream (USER_STREAM) |
| [**startIsolatedMarginUserDataStream()**](TradeDataStreamApi.md#startIsolatedMarginUserDataStream) | **POST** /sapi/v1/userDataStream/isolated | Start Isolated Margin User Data Stream (USER_STREAM) |
| [**startMarginUserDataStream()**](TradeDataStreamApi.md#startMarginUserDataStream) | **POST** /sapi/v1/userDataStream | Start Margin User Data Stream (USER_STREAM) |


## `closeIsolatedMarginUserDataStream()`

```php
closeIsolatedMarginUserDataStream($symbol, $listenkey)
```

Close Isolated Margin User Data Stream (USER_STREAM)

Close out a isolated margin user data stream.  Weight: 3000

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\TradeDataStreamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$symbol = 'symbol_example'; // string
$listenkey = 'listenkey_example'; // string

try {
    $apiInstance->closeIsolatedMarginUserDataStream($symbol, $listenkey);
} catch (Exception $e) {
    echo 'Exception when calling TradeDataStreamApi->closeIsolatedMarginUserDataStream: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **symbol** | **string**|  | |
| **listenkey** | **string**|  | |

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

## `closeMarginUserDataStream()`

```php
closeMarginUserDataStream($listenkey)
```

Close Margin User Data Stream (USER_STREAM)

Close out a Margin user data stream.  Weight: 3000

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\TradeDataStreamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$listenkey = 'listenkey_example'; // string

try {
    $apiInstance->closeMarginUserDataStream($listenkey);
} catch (Exception $e) {
    echo 'Exception when calling TradeDataStreamApi->closeMarginUserDataStream: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **listenkey** | **string**|  | |

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

## `keepaliveIsolatedMarginUserDataStream()`

```php
keepaliveIsolatedMarginUserDataStream($keepaliveIsolatedMarginUserDataStreamRequest)
```

Keepalive Isolated Margin User Data Stream (USER_STREAM)

Keepalive an isolated margin user data stream to prevent a time out.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\TradeDataStreamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$keepaliveIsolatedMarginUserDataStreamRequest = new \Binance\Client\MarginTrading\Model\KeepaliveIsolatedMarginUserDataStreamRequest(); // \Binance\Client\MarginTrading\Model\KeepaliveIsolatedMarginUserDataStreamRequest

try {
    $apiInstance->keepaliveIsolatedMarginUserDataStream($keepaliveIsolatedMarginUserDataStreamRequest);
} catch (Exception $e) {
    echo 'Exception when calling TradeDataStreamApi->keepaliveIsolatedMarginUserDataStream: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **keepaliveIsolatedMarginUserDataStreamRequest** | [**\Binance\Client\MarginTrading\Model\KeepaliveIsolatedMarginUserDataStreamRequest**](../Model/KeepaliveIsolatedMarginUserDataStreamRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `keepaliveMarginUserDataStream()`

```php
keepaliveMarginUserDataStream($keepaliveMarginUserDataStreamRequest)
```

Keepalive Margin User Data Stream (USER_STREAM)

Keepalive a margin user data stream to prevent a time out.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\TradeDataStreamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$keepaliveMarginUserDataStreamRequest = new \Binance\Client\MarginTrading\Model\KeepaliveMarginUserDataStreamRequest(); // \Binance\Client\MarginTrading\Model\KeepaliveMarginUserDataStreamRequest

try {
    $apiInstance->keepaliveMarginUserDataStream($keepaliveMarginUserDataStreamRequest);
} catch (Exception $e) {
    echo 'Exception when calling TradeDataStreamApi->keepaliveMarginUserDataStream: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **keepaliveMarginUserDataStreamRequest** | [**\Binance\Client\MarginTrading\Model\KeepaliveMarginUserDataStreamRequest**](../Model/KeepaliveMarginUserDataStreamRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `startIsolatedMarginUserDataStream()`

```php
startIsolatedMarginUserDataStream($startIsolatedMarginUserDataStreamRequest): \Binance\Client\MarginTrading\Model\StartIsolatedMarginUserDataStreamResponse
```

Start Isolated Margin User Data Stream (USER_STREAM)

Start a new isolated margin user data stream. The stream will close after 60 minutes unless a keepalive is sent. If the account has an active listenKey, that listenKey will be returned and its validity will be extended for 60 minutes.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\TradeDataStreamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$startIsolatedMarginUserDataStreamRequest = new \Binance\Client\MarginTrading\Model\StartIsolatedMarginUserDataStreamRequest(); // \Binance\Client\MarginTrading\Model\StartIsolatedMarginUserDataStreamRequest

try {
    $result = $apiInstance->startIsolatedMarginUserDataStream($startIsolatedMarginUserDataStreamRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeDataStreamApi->startIsolatedMarginUserDataStream: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **startIsolatedMarginUserDataStreamRequest** | [**\Binance\Client\MarginTrading\Model\StartIsolatedMarginUserDataStreamRequest**](../Model/StartIsolatedMarginUserDataStreamRequest.md)|  | |

### Return type

[**\Binance\Client\MarginTrading\Model\StartIsolatedMarginUserDataStreamResponse**](../Model/StartIsolatedMarginUserDataStreamResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `startMarginUserDataStream()`

```php
startMarginUserDataStream(): \Binance\Client\MarginTrading\Model\StartMarginUserDataStreamResponse
```

Start Margin User Data Stream (USER_STREAM)

Start a new margin user data stream. The stream will close after 60 minutes unless a keepalive is sent. If the account has an active listenKey, that listenKey will be returned and its validity will be extended for 60 minutes.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\TradeDataStreamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->startMarginUserDataStream();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TradeDataStreamApi->startMarginUserDataStream: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Binance\Client\MarginTrading\Model\StartMarginUserDataStreamResponse**](../Model/StartMarginUserDataStreamResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
