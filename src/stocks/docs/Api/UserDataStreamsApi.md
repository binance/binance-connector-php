# Binance\Client\Stocks\UserDataStreamsApi



All URIs are relative to https://api.binance.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createRenewListenKey()**](UserDataStreamsApi.md#createRenewListenKey) | **POST** /sapi/v1/equity/listenKey | Create / Renew Listen Key (USER_STREAM) |


## `createRenewListenKey()`

```php
createRenewListenKey($recvWindow): \Binance\Client\Stocks\Model\CreateRenewListenKeyResponse
```

Create / Renew Listen Key (USER_STREAM)

Create a new stock user-data-stream `listenKey`, or renew an existing one. Calling this endpoint for the same user with an active `listenKey` extends its validity; if there is no active key, a new one is issued. Use the returned `listenKey` to subscribe to the stock user data stream.  Weight: 1  Security Type: USER_STREAM

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Binance\Client\Stocks\Api\UserDataStreamsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$recvWindow = 5000; // int | The value cannot be greater than `60000`.

try {
    $result = $apiInstance->createRenewListenKey($recvWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserDataStreamsApi->createRenewListenKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recvWindow** | **int**| The value cannot be greater than &#x60;60000&#x60;. | [optional] |

### Return type

[**\Binance\Client\Stocks\Model\CreateRenewListenKeyResponse**](../Model/CreateRenewListenKeyResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
