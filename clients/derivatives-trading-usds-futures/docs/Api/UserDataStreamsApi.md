# Binance\Client\DerivativesTradingUsdsFutures\UserDataStreamsApi

All URIs are relative to https://fapi.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**closeUserDataStream()**](UserDataStreamsApi.md#closeUserDataStream) | **DELETE** /fapi/v1/listenKey | Close User Data Stream (USER_STREAM) |
| [**keepaliveUserDataStream()**](UserDataStreamsApi.md#keepaliveUserDataStream) | **PUT** /fapi/v1/listenKey | Keepalive User Data Stream (USER_STREAM) |
| [**startUserDataStream()**](UserDataStreamsApi.md#startUserDataStream) | **POST** /fapi/v1/listenKey | Start User Data Stream (USER_STREAM) |


## `closeUserDataStream()`

```php
closeUserDataStream()
```

Close User Data Stream (USER_STREAM)

Close out a user data stream.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\UserDataStreamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->closeUserDataStream();
} catch (Exception $e) {
    echo 'Exception when calling UserDataStreamsApi->closeUserDataStream: ', $e->getMessage(), PHP_EOL;
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
keepaliveUserDataStream(): \Binance\Client\DerivativesTradingUsdsFutures\Model\KeepaliveUserDataStreamResponse
```

Keepalive User Data Stream (USER_STREAM)

Keepalive a user data stream to prevent a time out. User data streams will close after 60 minutes. It's recommended to send a ping about every 60 minutes.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\UserDataStreamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->keepaliveUserDataStream();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserDataStreamsApi->keepaliveUserDataStream: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\KeepaliveUserDataStreamResponse**](../Model/KeepaliveUserDataStreamResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `startUserDataStream()`

```php
startUserDataStream(): \Binance\Client\DerivativesTradingUsdsFutures\Model\StartUserDataStreamResponse
```

Start User Data Stream (USER_STREAM)

Start a new user data stream. The stream will close after 60 minutes unless a keepalive is sent. If the account has an active `listenKey`, that `listenKey` will be returned and its validity will be extended for 60 minutes.  Weight: 1

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\DerivativesTradingUsdsFutures\Api\UserDataStreamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->startUserDataStream();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserDataStreamsApi->startUserDataStream: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Binance\Client\DerivativesTradingUsdsFutures\Model\StartUserDataStreamResponse**](../Model/StartUserDataStreamResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
