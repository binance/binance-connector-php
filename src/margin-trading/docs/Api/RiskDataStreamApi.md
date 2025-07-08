# Binance\Client\MarginTrading\RiskDataStreamApi

All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**closeUserDataStream()**](RiskDataStreamApi.md#closeUserDataStream) | **DELETE** /sapi/v1/margin/listen-key | Close User Data Stream (USER_STREAM) |
| [**keepaliveUserDataStream()**](RiskDataStreamApi.md#keepaliveUserDataStream) | **PUT** /sapi/v1/margin/listen-key | Keepalive User Data Stream (USER_STREAM) |
| [**startUserDataStream()**](RiskDataStreamApi.md#startUserDataStream) | **POST** /sapi/v1/margin/listen-key | Start User Data Stream (USER_STREAM) |


## `closeUserDataStream()`

```php
closeUserDataStream()
```

Close User Data Stream (USER_STREAM)

Close out a user data stream.  Weight: 3000

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\RiskDataStreamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->closeUserDataStream();
} catch (Exception $e) {
    echo 'Exception when calling RiskDataStreamApi->closeUserDataStream: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `keepaliveUserDataStream()`

```php
keepaliveUserDataStream($keepaliveUserDataStreamRequest)
```

Keepalive User Data Stream (USER_STREAM)

Keepalive a user data stream to prevent a time out.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\RiskDataStreamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$keepaliveUserDataStreamRequest = new \Binance\Client\MarginTrading\Model\KeepaliveUserDataStreamRequest(); // \Binance\Client\MarginTrading\Model\KeepaliveUserDataStreamRequest

try {
    $apiInstance->keepaliveUserDataStream($keepaliveUserDataStreamRequest);
} catch (Exception $e) {
    echo 'Exception when calling RiskDataStreamApi->keepaliveUserDataStream: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **keepaliveUserDataStreamRequest** | [**\Binance\Client\MarginTrading\Model\KeepaliveUserDataStreamRequest**](../Model/KeepaliveUserDataStreamRequest.md)|  | |

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

## `startUserDataStream()`

```php
startUserDataStream(): \Binance\Client\MarginTrading\Model\StartUserDataStreamResponse
```

Start User Data Stream (USER_STREAM)

Start a new user data stream.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\MarginTrading\Api\RiskDataStreamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->startUserDataStream();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RiskDataStreamApi->startUserDataStream: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Binance\Client\MarginTrading\Model\StartUserDataStreamResponse**](../Model/StartUserDataStreamResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
