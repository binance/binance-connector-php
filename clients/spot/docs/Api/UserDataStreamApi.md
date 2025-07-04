# Binance\Client\Spot\UserDataStreamApi

All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteUserDataStream()**](UserDataStreamApi.md#deleteUserDataStream) | **DELETE** /api/v3/userDataStream | Close user data stream |
| [**newUserDataStream()**](UserDataStreamApi.md#newUserDataStream) | **POST** /api/v3/userDataStream | Start user data stream |
| [**putUserDataStream()**](UserDataStreamApi.md#putUserDataStream) | **PUT** /api/v3/userDataStream | Keepalive user data stream |


## `deleteUserDataStream()`

```php
deleteUserDataStream($listenKey)
```

Close user data stream

Close out a user data stream. Weight: 2

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\UserDataStreamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$listenKey = 'listenKey_example'; // string

try {
    $apiInstance->deleteUserDataStream($listenKey);
} catch (Exception $e) {
    echo 'Exception when calling UserDataStreamApi->deleteUserDataStream: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **listenKey** | **string**|  | |

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

## `newUserDataStream()`

```php
newUserDataStream(): \Binance\Client\Spot\Model\NewUserDataStreamResponse
```

Start user data stream

Start a new user data stream. The stream will close after 60 minutes unless a keepalive is sent. Weight: 2

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\UserDataStreamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->newUserDataStream();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserDataStreamApi->newUserDataStream: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Binance\Client\Spot\Model\NewUserDataStreamResponse**](../Model/NewUserDataStreamResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putUserDataStream()`

```php
putUserDataStream($putUserDataStreamRequest)
```

Keepalive user data stream

Keepalive a user data stream to prevent a time out. User data streams will close after 60 minutes. It's recommended to send a ping about every 30 minutes. Weight: 2

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Spot\Api\UserDataStreamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$putUserDataStreamRequest = new \Binance\Client\Spot\Model\PutUserDataStreamRequest(); // \Binance\Client\Spot\Model\PutUserDataStreamRequest

try {
    $apiInstance->putUserDataStream($putUserDataStreamRequest);
} catch (Exception $e) {
    echo 'Exception when calling UserDataStreamApi->putUserDataStream: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **putUserDataStreamRequest** | [**\Binance\Client\Spot\Model\PutUserDataStreamRequest**](../Model/PutUserDataStreamRequest.md)|  | |

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
